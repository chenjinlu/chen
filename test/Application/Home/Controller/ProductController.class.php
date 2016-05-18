<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html; charset=UTF-8");
class ProductController extends CommonController{
	public function index(){
		$this->display();
	}



}