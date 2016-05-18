<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html; charset=UTF-8");
class QqController extends Controller{

	public function LoginAPIAction(){
		$qqobj=new \Org\Util\Qqconnect();
		$qqobj->getAuthCode();
	}
	public function CallbackAction(){
		$qqobj=new \Org\Util\Qqconnect();
		$result=$qqobj->getUsrInfo();
	}
		
	
	
}