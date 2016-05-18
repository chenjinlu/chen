<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{

	function _initialize() {

		$cell=I('path.0');
		$this->assign('cell',$cell);
		//=====================登录的session==================
        $mid=session('mid');
        $this->assign('mid',$mid);

        $name=session('name');
        $this->assign('name',$name);





		
	}





}