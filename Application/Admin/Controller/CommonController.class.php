<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends  Controller {
    protected $_controllerName = CONTROLLER_NAME;
    protected $_actionName = ACTION_NAME;
    protected $_filename;
    public function _initialize(){
        $filename = I("get.filename");
        $filename = str_replace("_", "/", $filename);
        if(!file_exists(T($filename))){
            $filename = "Common/404";
        }
        $this->_filename = $filename; 
        $allow = array("Index/login");
        if(!in_array($filename, $allow)){
            // $loginStatus = A("Api/Common")->login_auth();
            // if($loginStatus['code'] = 300){
            //     $this->error($loginStatus['msg'],__ROOT__."/Admin/Index_login");
            // }
        } 
    }  
}
