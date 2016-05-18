<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html; charset=UTF-8");
class MemberController extends CommonController{

	public function index(){

		if (!session('mid')){
			// $this->redirect("/Home/public/login", 20, '页面跳转中...');
			$this->error('请登录后操作！',U('public/login'),2);
		}
		$this->display();
	} 




}