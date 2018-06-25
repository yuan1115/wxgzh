<?php
/**
 * @Author: junmoxiao
 * @Date:   2018-06-05 11:32:18
 * @Last Modified by:   junmoxiao
 * @Last Modified time: 2018-06-11 16:14:49
 */
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
        $this->display($this->_filename);
    }
}
