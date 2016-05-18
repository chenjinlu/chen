<?php 
namespace Home\Controller;
use Think\Controller;
header("Content-Type: text/html; charset=UTF-8");
class PublicController extends CommonController{
	public function login(){
		if (session('mid')){
			$this->redirect("/Home/member");
		}
		
		$this->display();
	}
	public function dologin() {
		$name=I('post.name');
		$pwd=I('post.pwd');
		$verify=I('post.verify');

		$result1=$this->check_verify($verify);

		$map['name']=$name;
		$map['pwd']=md5($pwd);
		$result2=M('member')->where($map)->find();
		session('name',null);
		session('mid',null);

		cookie('name',null);
		// cookie('userpic',null);

		if($result1&&$result2){
			session('name',$result2["name"]);
			session('mid',$result2["mid"]);		  
			cookie('name',$result2["name"]);
		    //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
		    $this->success('登录成功', '/test/Home/index');
		} else {
		    //错误页面的默认跳转页面是返回前一页，通常不需要设置
		    $this->error('登录失败',U('login'),2);
		}
	}

	public function logout(){
    	session_destroy();
		// cookie('nickname',null);
		// cookie('userpic',null);
					  
    	$this->redirect("/Home");
    }

	public function regeister(){
		if (session('mid')){
			$this->redirect("/Home/member");
		}
		$this->display();
	}
	public function doregeister(){

		session('name',null);
		session('mid',null);

		$name=I('post.name');
		$phone=I('post.tel');
		$pwd=I('post.password');
		$checkpwd=I('post.repassword');		
		$verify=I('post.verify');

		if(empty($name)||empty($phone)||empty($pwd)){
			$this->error('注册信息有选项为空，请重新注册！',U('regeister'),3);
		}
		$checkname=M('member')->where("name=\"".$name."\"")->find();
		if($checkname){			
			exit('用户名已存在，请换个用户名再注册！');
		}
		$upimg=$this->upimg();//上传图像
		$this->image($upimg);//上传的图像转换成指定大小

		$map['name']=$name;	
		$map['phone']=$phone;	
		$map['pwd']=md5($pwd);		
		$map['headerimg']=$upimg;
		
		$result = M('member')->create($map);		

		if ($result) {
			M('member')->data($map)->add();
			$con['name']=$map['name'];
			$user = M('member')->where($con)->field('mid,name')->find();
			//用户登录成功
			session('name',$user["name"]);
			cookie('name',$user["name"]);
			session('mid',$user["mid"]);
												   
			$data = array(
				'regeistertime' => time(),
				'logintime' => time(),
				'last_login_ip' => get_client_ip(),
			);
			M('member')->where("mid=".$user["mid"])->save($data);
			$this->success('注册成功', '/test/Home/Index');
		}else{
			exit(M('member')->getError());
		}
	}

	public function verify(){
	    $Verify =     new \Think\Verify();
	    $Verify->fontSize = 12;
		$Verify->fontttf = '5.ttf';  
		$Verify->entry();
	}
	public function check_verify($code, $id = ''){
	    $verify = new \Think\Verify();
	    return $verify->check($code, $id);
	}
	public function upimg(){
		$upload = new \Think\Upload();// 实例化上传类
		$upload->maxSize   =     3145728 ;// 设置附件上传大小
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->rootPath  =      './Uploads/'; // 设置附件上传根目录
		$upload->savePath  =      ''; // 设置附件上传（子）目录
		// 上传文件 
		$info   =   $upload->upload();
		if(!$info) {// 上传错误提示错误信息
		    $this->error($upload->getError());
		}else{// 上传成功 获取上传文件信息
		    foreach($info as $file){
		        return $file['savepath'].$file['savename'];
		    }
		}
	}
	public function image($imgaes){
		$image = new \Think\Image(); 
		$image->open('./Uploads/'.$imgaes);
		$image->thumb(150, 150)->save('./Uploads/'.$imgaes);
	}
	Public function checkuser(){
		$Member=M('member');
		$data['name']=$_POST["param"];
		$reusername=$Member->where($data)->find();	
		
		if(empty($reusername)) {
		   
				 echo '{
					"info":"",
					"status":"y"
				 }'; 
		}else{		echo '{
					"info":"用户名已存在，请更换个试试",
					"status":"n"
				 }'; 
		}

	}

	Public function regeisterverify(){
		$verify=$_POST["param"];//var_dump($verify);		
		$result1=$this->check_verify($verify);//var_dump($result1);
	  	if(!$result1) {
			echo '{
				"info":"请输入正确的验证码",
				"status":"n"
			 }'; 
		}else{	echo '{
				"info":"",
				"status":"y"
			 }'; 
		}
	}
}