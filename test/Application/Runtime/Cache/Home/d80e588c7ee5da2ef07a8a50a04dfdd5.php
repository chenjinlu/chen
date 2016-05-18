<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>注册账号</title>
	<link href="/test/Public/css/bootstrap.css" rel="stylesheet">
	<link href="/test/Public/css/public.css" rel="stylesheet">
	<link href="/test/Public/tools/Font-Awesome-3.2.1/css/font-awesome.css" rel="stylesheet">

	<script src="/test/Public/js/jquery-1.11.0.min.js"></script>
	<script src="/test/Public/js/bootstrap.js"></script>
	<script type="text/javascript" src="/test/Public/js/Validform_v5.3.2.js"></script>
	
</head>
<body class="login-bg">
	<div class="container-fluid">
		<div class="login-box col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
			<form class="form-horizontal registerform" action="/test/home/public/doregeister" enctype="multipart/form-data" method="post"  role="form">
				<p class="login-tittle">注册账号</p>
				<p>用户名：</p>
				<input type="text" class="form-control" name="name" placeholder="用户名" aria-describedby="basic-addon1" datatype="s6-18" ajaxurl="/test/home/public/checkuser" nullmsg="请输入您的用户名！" errormsg="用户名至少6个字符,最多18个字符！">
				<p>手机号：</p>
				<input type="text" class="form-control" name="tel" placeholder="请输入11位手机号" aria-describedby="basic-addon2" datatype="m" nullmsg="请输入您的手机号码！" errormsg="请输入您的手机号码！">
				<p>密码：</p>
				<input type="password" class="form-control" name="password" placeholder="密码" aria-describedby="basic-addon3" plugin="passwordStrength"  datatype="*6-18" nullmsg="请输入密码！" errormsg="密码至少6个字符,最多18个字符！">
				<p>确认密码：</p>
				<input type="password" class="form-control" name="repassword" placeholder="确认密码" aria-describedby="basic-addon4" recheck="password"  datatype="*6-18" nullmsg="请确认密码！" errormsg="两次输入的密码不一致！">
				<p>头像上传：</p>
				<input type="file"  name="upimg" placeholder="头像上传" aria-describedby="basic-addon5" datatype="*" nullmsg="请上传图片">
				<p>验证码：</p>
				<div class="login-verify">
					<img src="/test/home/public/verify" title="看不清可单击图片刷新"  onclick="this.src='/test/home/public/verify?d='+Math.random();" style="cursor: pointer;">
					<input type="text" class="form-verify" name="verify" placeholder="验证码" aria-describedby="basic-addon6" datatype="*" ajaxurl="/test/home/public/regeisterverify" nullmsg="请输入验证码" errormsg="请输入正确的验证码！">
				</div>
				
				<p>合作登录</p>
				<p><a class="qqlogin" href="/test/home/qq/LoginAPIAction"></a></p>
				<input class="btn btn-success pull-right" type="submit" value="确认注册">	
			</form>
			<p style="margin-top:50px;padding-bottom:20px;height:20px;" >
				<a class="pull-left" href="<?php echo U('Index/index');?>">返回首页</a>
				<a class="pull-right" href="/test/home/public/login.html">已有账号，去登录</a>
			</p>			
		</div>
	</div>

<script >
	$(function(){
	//$(".registerform").Validform();  //就这一行代码！;
		
	$(".form-horizontal").Validform({
		tiptype:1
	});
})

	
</script>

</body>
</html>