<?php
namespace Api\Controller;
use Think\Controller;
class AppController extends Controller
{
	private $appid;
	private $secret;
	private $keys;
	private $token;
    private $_msg_template = array(
	    'text' => '<xml><ToUserName><![CDATA[%s]]></ToUserName><FromUserName><![CDATA[%s]]></FromUserName><CreateTime>%s</CreateTime><MsgType><![CDATA[text]]></MsgType><Content><![CDATA[%s]]></Content></xml>',//文本回复XML模板
	    'image' => '<xml><ToUserName><![CDATA[%s]]></ToUserName><FromUserName><![CDATA[%s]]></FromUserName><CreateTime>%s</CreateTime><MsgType><![CDATA[image]]></MsgType><Image><MediaId><![CDATA[%s]]></MediaId></Image></xml>',//图片回复XML模板
	    'music' => '<xml><ToUserName><![CDATA[%s]]></ToUserName><FromUserName><![CDATA[%s]]></FromUserName><CreateTime>%s</CreateTime><MsgType><![CDATA[music]]></MsgType><Music><Title><![CDATA[%s]]></Title><Description><![CDATA[%s]]></Description><MusicUrl><![CDATA[%s]]></MusicUrl><HQMusicUrl><![CDATA[%s]]></HQMusicUrl><ThumbMediaId><![CDATA[%s]]></ThumbMediaId></Music></xml>',//音乐模板
	    'news' => '<xml><ToUserName><![CDATA[%s]]></ToUserName><FromUserName><![CDATA[%s]]></FromUserName><CreateTime>%s</CreateTime><MsgType><![CDATA[news]]></MsgType><ArticleCount>%s</ArticleCount><Articles>%s</Articles></xml>',// 新闻主体
	    'news_item' => '<item><Title><![CDATA[%s]]></Title><Description><![CDATA[%s]]></Description><PicUrl><![CDATA[%s]]></PicUrl><Url><![CDATA[%s]]></Url></item>',//某个新闻模板
    );
	/**
	 * action:进入关键词执行流程
	 * @param string $keys [description]
	 */
	public function __construct($id)
	{
		$msg = M("account")->where("id = '$id'")->find();
		$this->appid = $msg['appid'];
		$this->secret = $msg['appsecret'];
		$this->token = $msg['tonken'];
	}
	/**
	 * 验证签名
	 * @return [type] [description]
	 */
    protected function valid()
    {
        $echoStr = $_GET["echostr"];
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        $tmpArr = array($this->token, $timestamp, $nonce);
        sort($tmpArr);
        $tmpStr = implode($tmpArr);
        $tmpStr = sha1($tmpStr);
        if($tmpStr == $signature){
            echo $echoStr;die;
        }
    }
	/**
	 * 获取access_token
	 * @param grant_type client_credential
	 * @param appid    appid
	 * @param secret   appsecret
	 * @return [type] [description]
	 */
	private function getAccessToken(){
		$token = file_get_contents("access_token.txt");
		$tokenarr = json_decode($token,true);
		if($tokenarr['expires_in'] >= time()){
			$data['access_token'] = $tokenarr["access_token"];
			$data['expires_in'] = $tokenarr['expires_in'];
		}else{
			$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$this->appid."&secret=".$this->secret;
			$res = $this->curl_post($url);
			$res = json_decode($res,true);
			if($res){
				if($res['errcode']==-1){
					$data['msg'] = "系统繁忙，此时请开发者稍候再试";
				}
				if($res['errcode']==0){
					$data['msg'] = "请求成功";
				}
				if($res['errcode']==40001){
					$data['msg'] = "AppSecret错误或者AppSecret不属于这个公众号，请开发者确认AppSecret的正确性";
				}
				if($res['errcode']==40002){
					$data['msg'] = "请确保grant_type字段值为client_credential";
				}
				if($res['errcode']==40002){
					$data['msg'] = "调用接口的IP地址不在白名单中，请在接口IP白名单中进行设置。（小程序及小游戏调用不要求IP地址在白名单内。）";
				}	
				$data['code'] = $res['errcode'];
				if(isset($res['access_token'])){
					$data = $res;
					$data['expires_in'] += time();
					file_put_contents("access_token.txt", json_encode($data));
				}
			}else{
				$data['msg'] = "请求失败";
				$data['code'] = 500;
			}
		}
		return $data;
	}
	/**
	 * [createView description]
	 * @return [type] [description]
	 */
	protected function createView(){
		$data = '{"button":[{"type":"click","name":"php","key":"php"}]}';
		$msg = $this->getAccessToken();
		$url =  "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$msg['access_token'];
		$res = $this->curl_post($url,$data);
		var_dump($res);
	}
	/**
	 * 响应消息
	 * @return [type] [description]
	 */
    protected function responseMsg(){
        $xml_str = $GLOBALS['HTTP_RAW_POST_DATA'];
        if(empty($xml_str)){
            die('');
        }
        if(!empty($xml_str)){
            libxml_disable_entity_loader(true);    // 解析该xml字符串，利用simpleXML
            //禁止xml实体解析，防止xml注入
            $request_xml = simplexml_load_string($xml_str, 'SimpleXMLElement', LIBXML_NOCDATA);
            //判断该消息的类型，通过元素MsgType
            switch ($request_xml->MsgType){
                case 'event':
                    //判断具体的时间类型（关注、取消、点击）
                    $event = $request_xml->Event;
                      if ($event=='subscribe') { // 关注事件
                          $this->_doSubscribe($request_xml);
                      }elseif ($event=='CLICK') {//菜单点击事件
                          $this->_doClick($request_xml);
                      }elseif ($event=='VIEW') {//连接跳转事件
                          $this->_doView($request_xml);
                      }else{

                      }
                    break;
                case 'text'://文本消息
                    $this->_doText($request_xml);
                    break;
                case 'image'://图片消息
                    $this->_doImage($request_xml);
                    break;
                case 'voice'://语音消息
                    $this->_doVoice($request_xml);
                    break;
                case 'video'://视频消息
                    $this->_doVideo($request_xml);
                    break;
                case 'shortvideo'://短视频消息
                    $this->_doShortvideo($request_xml);
                    break;
                case 'location'://位置消息
                    $this->_doLocation($request_xml);
                    break;
                case 'link'://链接消息
                    $this->_doLink($request_xml);
                    break;
            }        
        }        
    }
	/**
     * 发送文本信息
     * @param  [type] $to      目标用户ID
     * @param  [type] $from    来源用户ID
     * @param  [type] $content 内容
     * @return [type]          [description]
     */
    private function _msgText($to, $from, $content) {
        $response = sprintf($this->_msg_template['text'], $to, $from, time(), $content);
        echo $response;
    }
/*    private function _keysResponse($content,$openid){
    	$keys = M("keyshf")->where("keys = '$content'")->find();
    	//获取app进程
    	$appPro = M("app_part")->where("openid = '$openid'")->find();
    	//首先判断是否触发app
    	if($appPro['create_time'] >= data("Y-m-d")." 00:00:00"){
    		$appid = $appPro['appid'];
    	}else if(!empty($keys )){
    		$appid = $keys['appid'];
    	}else{
    		$appid = 0;
    	}

    	if($appid){
    		//获取指定app问题
	    	$wenti = M("wenti")->where(array("appid"=>$appid))->select();
    		//判断是不是进入过应用
    		if(empty($appPro)){
    			//这边添加进入，并给出答复
    			$data['openid'] = $openid;
    			$data['create'] = data("Y-m-d H:i:s");
    			M('app_part')->add($data);
    			$content = $wenti[0]['wenti'];
    		}else{
    			if($appPro['times']>=3&&$appPro['create_time'] >= data("Y-m-d")." 00:00:00"){
	    			$content = "每天只能测试3次";
	    		}else{
	    			//判断时间是否是今天,每天重新开始
	    			if($appPro['create_time'] <= data("Y-m-d")." 00:00:00"){
	    				$data['create_time'] = data("Y-m-d H:i:s");
	    				$data['times'] = 1;
	    				$data['part'] = 1;
	    				$content = $wenti[0]['wenti'];
	    			}else{
	    				$count = count($wenti);
	    				//是否一个循环结束
		    			if($appPro['part'] >= $count){
		    				//循环结束，输出结果
		    				$data['times'] = $appPro['times']+1;
		    				$data['part'] = 0;
		    				$content = "问题结束";
		    			}else{
		    				$data['part'] = $appPro['part']+1;
		    				//匹配答案是否合格
		    				if($wenti[$data['part']]['da']==1){
		    					if(!is_numeric($content)){
		    						$callback = "请回复纯数字";
		    					} 
		    				}else if($wenti[$data['part']]['da']==2){
		    					if(!preg_match("/^[a-zA-Z\s]+$/",$content)){
		    						$callback = "请回复纯字母";
		    					}
		    				}else if($wenti[$data['part']]['da']==3){

		    				}else{
		    					$array = explode(",", $wenti[$data['part']]['da']);
		    					if(!in_array($content, $array)){
		    						$callback = $wenti[$data['part']]['callback'];
		    					}
		    				}
		    				if($callback){
		    					$content = $callback;
		    				}else{
		    					$baixuan = '';
		    					if($wenti[$data['part']]['baixun']){
		    						$baixuan = explode(",", $baixuan);
		    						foreach ($baixuan as $k => $v) {
		    							$baixuan .= $k.".".$v."\n";
		    						}
		    					}
		    					$content = $wenti[$data['part']]['wenti']."\n".$baixuan;
		    				}
		    			}
	    			}
	    		}
    		}
    	}else{
    		$content = $keys['hf']?$keys['hf']:'';
    	}
    	return $content;
    }*/
    private function _doClick($request_xml){
    	if($request_xml->EventKey=='php'){
    		$wenti = M('wenti')->find();
    		$hello = "欢迎了解php";
    		$msg = $this->getAccessToken();
		    $Url = "https://api.weixin.qq.com/cgi-bin/message/custom/send?access_token=".$msg['access_token'];
		    $data = '{"touser":"'.$request_xml->FromUserName.'","msgtype":"text","text":{"content":"'.$hello.'"}}';
			$this->curl_post($Url,$data);
			$baixuan = '';
			if($wenti['baixun']){
				$baixuanArr = explode(",",$wenti['baixun']);
				$i = 1;
				foreach ($baixuanArr as $k => $v) {
					$baixuan .= $i.".".$v."；\n";
					$i++;
				}
			}
			$res = $wenti['wenti']."\n".$baixuan;
			//添加参与记录
			$openid = $request_xml->FromUserName;
			$appPro = M("app_part")->where(array("openid"=>"$openid"))->find();
			if(empty($appPro)){
				M('app_part')->add(array("openid"=>"$openid",'create_time'=>date("Y-m-d H:i:s")));
			}else{
				M('app_part')->where(array("openid"=>"$openid"))->save(array("part"=>1,"create_time"=>date("Y-m-d H:i:s")));
			}
			$this->_msgText($request_xml->FromUserName, $request_xml->ToUserName,$res);die;
    	}
    }
    /**
     * [_doText description]
     * @param  [type] $request_xml [description]
     * @return [type]              [description]
     */
    private function _doText($request_xml){
    	$openid = $request_xml->FromUserName;
    	$appPro = M("app_part")->where(array("openid"=>"$openid"))->find();
    	$wenti = M("wenti")->where(array("appid"=>1))->select();
    	if(empty($appPro)||$appPro['part']>=count($wenti)){
    		$content = "请点击下方菜单";
    	}else{
    		//匹配答案是否合格,合格的话直接进入下个问题
			if($wenti[$appPro['part']-1]['da']==1){
				if(!is_numeric($request_xml->content)){
					$callback = "请回复纯数字";
				} 
			}else if($wenti[$appPro['part']-1]['da']==2){
				if(!preg_match("/^[a-zA-Z\s]+$/",$request_xml->content)){
					$callback = "请回复纯字母";
				}
			}else if($wenti[$appPro['part']-1]['da']==3){

			}else{
				$array = explode(",", $wenti[$appPro['part']-1]['da']);
				if(!in_array($request_xml->content, $array)){
					$callback = $wenti[$appPro['part']-1]['callback'];
				}
			}
			if($callback){
				$content = $callback;
			}else{
				$baixuan = '';
				if($wenti[$appPro['part']]['baixun']){
					$baixuanArr = explode(",", $wenti[$appPro['part']-1]['baixun']);
					$i = 1;
					foreach ($baixuanArr as $k => $v) {
						$baixuan .= $i.".".$v."\n";
						$i++;
					}
				}
				$content = $wenti[$appPro['part']-1]['wenti']."\n".$baixuan;
			}
    	}
    	$this->_msgText($request_xml->FromUserName, $request_xml->ToUserName,$content.$wenti[$appPro['part']-1]['da']);die;
    }
    /**
	 * 主要功能：发送请求，获取信息
	 * @param  [string] $url   [请求地址]
	 * @param  {array} $array [发送post请求时的字段，如不填则是没有或get请求]
	 * @return [json数组]        [返回的信息/错误信息]
	 */
	private function curl_post($url,$array=''){
        // 1. 初始化
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch,CURLOPT_HEADER,0);
        if(!empty($array)){
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $array);
        }
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        // 4. 释放curl句柄
        curl_close($ch);
        if($output === FALSE ){
            return "CURL Error:".curl_error($ch);
        }else{
            return $output;
        }  
    }
}
