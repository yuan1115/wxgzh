<?php
/**
 * @Author: junmoxiao
 * @Date:   2018-06-19 14:26:55
 * @Last Modified by:   junmoxiao
 * @Last Modified time: 2018-06-19 17:07:52
 * @action: 微信公众号管理
 */
namespace Api\Controller;
use Think\Controller;
class AdminApiController extends Controller
{
	public function getwxAccount(){
		$res = M("account")->select();
		if(empty($res)){
			$data['code'] = 404;
			$data['msg'] = "no found!!!";
		}else{
			$data['data'] = $res;
			$data['code'] = 200;
			$data['msg'] = "success!!";
		}
		$this->ajaxReturn($data);
	}
	public function getwxAccountOne(){
		$id = $_GET['id'];
		$res = M("account")->where("id = $id")->find();
		if(empty($res)){
			$data['code'] = 404;
			$data['msg'] = "no found!!!";
		}else{
			$data['data'] = $res;
			$data['code'] = 200;
			$data['msg'] = "success!!";
		}
		$this->ajaxReturn($data);
	}
	public function uploader(){
		$config = array(
			'rootPath' => './Uploads/',
			'savePath' => '',
			'saveName' => time().'_'.mt_rand(),
			'exts' => '',
			'autoSub' => true,
		);
		$upload = new \Think\Upload($config);// 实例化上传类
		$info = $upload -> upload();
		if (empty($info)) {
			$data['msg'] = '上传失败';
		} else {
			foreach ($info as $k => $v) {
				$imgname = explode(".", $v['name']);
				$data['img_name'] = $imgname[0];
				$data['img_url'] = './Uploads/'.$v['savepath'].$v['savename'];
				unset($imgname);
			}	
		}
		$this->ajaxReturn($data);
	}
	public function addwxAccount(){
	/*	$str = "abcdefghijklmnopqretuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$token = '';
		$msgkeys = ''
		for($i=0;$i<10;$i++){
			$token .= $str[mt_rand(0, strlen($str) - 1)]; 
		}
		for($i=0;$i<44;$i++){
			$msgkeys .= $str[mt_rand(0, strlen($str) - 1)]; 
		}
		$list = I("post.");
		$list['tonken'] = $token;
		$list['msgkey'] = $msgkeys;*/
		$res = M("account")->add(I('post.'));
		if($res){
			// $data['res'] = array("token"=>$token,"EncodingAESKey"=>$msgkeys);
			$data['code'] = 1;
		}else{
			$data['code'] = 0;
		}
		$this->ajaxReturn($data);
	}
	public function editwxAccount(){
		$id = I("get.id");
		$res = M("account")->where("id = $id")->save(I('post.'));
		if($res){
			$data['code'] = 1;
		}else{
			$data['code'] = 0;
		}
		$this->ajaxReturn($data);
	}
	public function AppQlist(){
		$res = M("wenti")->select();
		if(empty($res)){
			$data['code'] = 404;
			$data['msg'] = "no found!!!";
		}else{
			$data['data'] = $res;
			$data['code'] = 200;
			$data['msg'] = "success!!";
		}
		$this->ajaxReturn($data);
	}
	public function addAppQ(){
		$res = M("wenti")->add(I('post.'));
		if($res){
			$data['code'] = 1;
		}else{
			$data['code'] = 0;
		}
		$this->ajaxReturn($data);
	}
	public function AppQOne(){
		$id = $_GET['id'];
		$res = M("wenti")->where("id = $id")->find();
		if(empty($res)){
			$data['code'] = 404;
			$data['msg'] = "no found!!!";
		}else{
			$data['data'] = $res;
			$data['code'] = 200;
			$data['msg'] = "success!!";
		}
		$this->ajaxReturn($data);
	}
	public function editAppQ(){
		$id = I("get.id");
		$res = M("wenti")->where("id = $id")->save(I('post.'));
		if($res){
			$data['code'] = 1;
		}else{
			$data['code'] = 0;
		}
		$this->ajaxReturn($data);
	}
	public function delAppQ(){
		$id = $_GET['id'];
		$res = M("wenti")->where("id = $id")->delete();
		if($res){
			$data['code'] = 1;
		}else{
			$data['code'] = 0;
		}
		$this->ajaxReturn($data);
	}
}
