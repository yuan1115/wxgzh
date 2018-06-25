<?php
namespace Api\Controller;
use Think\Controller;
class WxApiController extends AppController
{
	public function __construct(){
		$id = $_GET['id'];
		parent::__construct($id);
	}
	/**
	 * 授权，对消息处理
	 * @return [type] [description]
	 */
	public function checkSignature()
	{
		if(!isset($_GET['echostr'])){
			file_put_contents("test.txt",  $GLOBALS['HTTP_RAW_POST_DATA']);
			$this->responseMsg();
		}else{
			$this->valid();
		} 
	}
	public function createView(){
		//这里传递post过来的菜单
		parent::createView();
	}
}