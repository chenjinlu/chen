<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html; charset=UTF-8");
class IndexController extends CommonController{
	public function index(){		

		$this->display();
	}

	public function test(){
		$jieguo=M('shitu','test_')->select();
		var_dump($jieguo);
	}





}









