<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>账号登录</title>
	<link href="/test/Public/css/bootstrap.css" rel="stylesheet">
	<link href="/test/Public/css/public.css" rel="stylesheet">
	<link href="/test/Public/tools/Font-Awesome-3.2.1/css/font-awesome.css" rel="stylesheet">

	<script src="/test/Public/js/jquery-1.11.0.min.js"></script>
	<script src="/test/Public/js/bootstrap.js"></script>
</head>
<body class="login-bg">
	<div class="container-fluid">
		<div class="login-box col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
			<form class="form-horizontal" action="/test/home/public/dologin" method="post"  role="form">
				<p class="login-tittle">账号登录</p>
				<p>用户名：</p>
				<input type="text" class="form-control" name="name" placeholder="用户名" aria-describedby="basic-addon1">
				<p>密码：</p>
				<input type="text" class="form-control" name="pwd" placeholder="密码" aria-describedby="basic-addon2">
				<p>验证码：</p>
				<div class="login-verify">
					<img src="/test/home/public/verify" title="看不清可单击图片刷新"  onclick="this.src='/test/home/public/verify?d='+Math.random();" style="cursor: pointer;">
					<input type="text" class="form-verify" name="verify" placeholder="验证码" aria-describedby="basic-addon3">
				</div>
				<p >
					<input type="radio" class="form-radio"  aria-describedby="basic-addon4">
					<span>记住登录状态</span>
				</p>
				<p>合作登录</p>
				<p><a class="qqlogin" href="/test/home/qq/LoginAPIAction"></a></p>
				<input class="btn btn-success" type="submit" value="确认登录" style="float:right;">	
			</form>
			<p style="margin-top:50px;padding-bottom:20px;height:20px;" >
				<a class="pull-left" href="<?php echo U('Index/index');?>">返回首页</a>
				<a class="pull-right" href="/test/home/public/regeister.html">没有账号，去注册</a>
			</p>
		</div>
	</div>
</body>
</html>