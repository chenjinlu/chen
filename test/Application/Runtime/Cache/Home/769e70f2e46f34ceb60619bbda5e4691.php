<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<link href="/old/test/Public/css/bootstrap.css" rel="stylesheet">
	<link href="/old/test/Public/css/index.css" rel="stylesheet">
	<link href="/old/test/Public/css/public.css" rel="stylesheet">
	<link href="/old/test/Public/tools/Font-Awesome-3.2.1/css/font-awesome.css" rel="stylesheet">

	<script src="/old/test/Public/js/jquery-1.11.0.min.js"></script>
	<script src="/old/test/Public/js/bootstrap.js"></script>
	<script src="/old/test/Public/js/index_v20.js"></script>

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if($cell=='index'){echo 'class="active"';}?> ><a href="<?php echo U('Index/index');?>">首页 <span class="sr-only">(current)</span></a></li>
        
        <li <?php if($cell=='product'){echo 'class="active"';}?>><a href="<?php echo U('Product/index');?>">产品列表</a></li>
        <li <?php if($cell=='member'){echo 'class="active"';}?>><a href="<?php echo U('Member/index');?>">个人中心</a></li>
        <li <?php if($cell=='news'){echo 'class="active"';}?>><a href="<?php echo U('News/index');?>">资讯中心</a></li>
        <li <?php if($cell=='help'){echo 'class="active"';}?>><a href="<?php echo U('Help/index');?>">帮助中心</a></li>
        <li <?php if($cell=='tickling'){echo 'class="active"';}?>><a href="<?php echo U('Tickling/index');?>">产品反馈</a></li>                
      </ul>
      <?php if(empty($mid)): ?><form class="navbar-form navbar-right" role="search">
          <a type="submit" class="btn btn-success" href="/old/test/home/public/login.html">登录</a>
          <a type="submit" class="btn btn-info" href="/old/test/home/public/regeister.html">注册</a>
        </form>
      <?php else: ?>
        <form class="navbar-form navbar-right" role="search">
          你好：<a type="submit"  href="/old/test/home"><?php echo ($name); ?></a>
          <a type="submit" class="btn btn-info" href="/old/test/home/public/logout.html">退出</a>
        </form><?php endif; ?>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="content" style="padding-top:20px;">
<div class="container">
   <div id="banner-focus">
	<div class="banner-nav" id="banner-nav">
		<ul class="col-md-3 col-xs-12" id="nav">
			<li><div>
					<span>潮流数码</span>
					<span class=" icon-angle-right"></span>
				</div>				
			</li>
			<li><div>
					<span>移动生活</span>
					<span class=" icon-angle-right"></span>
				</div>
			</li>
			<li><div>
					<span>智能家居</span>
					<span class=" icon-angle-right"></span>
				</div>
			</li>
			<li><div>
					<span>生活周边</span>
					<span class=" icon-angle-right"></span>
				</div>
			</li>
			<li><div>
					<span>畅销精品</span>
					<span class=" icon-angle-right"></span>
				</div>
			</li>
		</ul>
	</div>
	<div class="col-md-9 col-xs-12" style="padding:0;">
		<div class="category-item" id="tag1">
			111	
		</div>
		<div class="category-item" id="tag1">
			222		
		</div>
		<div class="category-item" id="tag1">
			333		
		</div>
		<div class="category-item" id="tag1">
			444		
		</div>
		<div class="category-item" id="tag1">
			555		
		</div>
	</div>
  </div>
</div>

<div class="container" style="padding:0;">
	<div class="col-xs-6 col-md-3">
		<div class="hot-box">			
		</div>
	</div>
	<div class="col-xs-6 col-md-3">
		<div class="hot-box">			
		</div>
	</div>
	<div class="col-xs-6 col-md-3">
		<div class="hot-box">			
		</div>
	</div>
	<div class="col-xs-6 col-md-3">
		<div class="hot-box">			
		</div>
	</div>
</div>

<div class="kongbai-30"></div>
<div class="container" style="padding:0;">
	<p class="new-product-tittle">新品上架</p>
	<div class=" col-xs-6 col-md-3">
		<div class="new-product-content">
			
		</div>		
	</div>
	<div class=" col-xs-6 col-md-3">
		<div class="new-product-content">
			
		</div>		
	</div>
	<div class=" col-xs-6 col-md-3">
		<div class="new-product-content">
			
		</div>		
	</div>
	<div class=" col-xs-6 col-md-3">
		<div class="new-product-content">
			
		</div>		
	</div>
</div>

<div class="kongbai-30"></div>
<div class="container" style="padding:0;">
	<p class="new-product-tittle">热门产品</p>
	<div class=" col-xs-6 col-md-3">
		<div class="hot-product-content">
			
		</div>		
	</div>
	<div class=" col-xs-6 col-md-3">
		<div class="hot-product-content">
			
		</div>		
	</div>
	<div class=" col-xs-6 col-md-3">
		<div class="hot-product-content">
			
		</div>		
	</div>
	<div class=" col-xs-6 col-md-3">
		<div class="hot-product-content">
			
		</div>		
	</div>
</div>

<div class="kongbai-30"></div>
<div class="container" style="padding:0;">
	<p class="new-product-tittle">产品评价</p>
	<div class="col-xs-12 col-md-6">
		<div class="product-assess">
			
		</div>
	</div>
	<div class="col-xs-12 col-md-6">
		<div class="product-assess">
			
		</div>
	</div>
	<div class="col-xs-12 col-md-6">
		<div class="product-assess">
			
		</div>
	</div>
	<div class="col-xs-12 col-md-6">
		<div class="product-assess">
			
		</div>
	</div>
	
</div>

<div class="kongbai-30"></div>

	






</div>





<div class="footer">
	<div class="container">
        <div class="row">
        	
        </div>
    </div>
</div>






<script type="text/javascript">
	$(function(){		
		xuanxiangka("#nav li",".category-item");
		
	});
	function xuanxiangka(sel,contentClassName,currentName){
	if(!currentName){currentName='current';}
	$(sel).mouseover(function(){
		$(this).addClass(currentName).siblings().removeClass(currentName);	
		var _index = $(this).index(sel);//获取当前li的索引

		$(contentClassName).eq(_index).show().siblings(contentClassName).hide();
	});
}

</script>

</body>
</html>