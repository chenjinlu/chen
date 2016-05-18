<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>产品列表</title>
	<link href="/test/Public/css/bootstrap.css" rel="stylesheet">
	<link href="/test/Public/css/public.css" rel="stylesheet">
	<link href="/test/Public/tools/Font-Awesome-3.2.1/css/font-awesome.css" rel="stylesheet">

	<script src="/test/Public/js/jquery-1.11.0.min.js"></script>
	<script src="/test/Public/js/bootstrap.js"></script>

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
          <a type="submit" class="btn btn-success" href="/test/home/public/login.html">登录</a>
          <a type="submit" class="btn btn-info" href="/test/home/public/regeister.html">注册</a>
        </form>
      <?php else: ?>
        <form class="navbar-form navbar-right" role="search">
          你好：<a type="submit"  href="/test/home"><?php echo ($name); ?></a>
          <a type="submit" class="btn btn-info" href="/test/home/public/logout.html">退出</a>
        </form><?php endif; ?>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="/test/Public/images/banner1.png" alt="第一幅图">
			      <div class="carousel-caption">
			        第一幅图
			      </div>
			    </div>
			    <div class="item">
			      <img src="/test/Public/images/banner1.png" alt="第二幅图">
			      <div class="carousel-caption">
			        第二幅图
			      </div>
			    </div>
			    <div class="item">
			      <img src="/test/Public/images/banner1.png" alt="第三幅图">
			      <div class="carousel-caption">
			        第三幅图
			      </div>
			    </div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon  icon-chevron-left" aria-hidden="true" style="margin-top:-15px;"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon icon-chevron-right" aria-hidden="true" style="margin-top:-15px;"></span>
			    <span class="sr-only">Next</span>
			  </a>
</div>

<div class="container" style="padding-left:0;padding-right:0;">
	<div class="fenlei">
			<p class="col-xs-12">分类：<span>全部</span></p>
			<a class="col-xs-4 col-md-2" href="">潮流数码</a>
			<a class="col-xs-4 col-md-2" href="">移动生活</a>
			<a class="col-xs-4 col-md-2" href="">智能家居</a>
			<a class="col-xs-4 col-md-2" href="">生活周边</a>
			<a class="col-xs-4 col-md-2" href="">畅销精品</a>
			<a class="col-xs-4 col-md-2" href="">更多>></a>
	</div>
</div>
<div class="fenlei-list">	
	<div class="container fenlei-paixu" style="padding-left:0;padding-right:0;">
		<p class="col-xs-12">
			<a href="">推荐</a>
			<span>|</span>
			<a href="">新品</a>
			<span>|</span>
			<a href="">价格</a>
		</p>
	
		<div class="product-list">
			<div class="col-xs-6 col-md-3">
				<div class="product-cell">
					
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="product-cell">
					
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="product-cell">
					
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="product-cell">
					
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="product-cell">
					
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="product-cell">
					
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="product-cell">
					
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="product-cell">
					
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="product-cell">
					
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="product-cell">
					
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="product-cell">
					
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="product-cell">
					
				</div>
			</div>
			
		</div>
	</div>

	<div class="container">
		<nav style="float:right;">
		  <ul class="pagination pagination-lg">
		    <li>
		      <a href="#" aria-label="Previous">
		        <span aria-hidden="true">&laquo;</span>
		      </a>
		    </li>
		    <li><a href="#">1</a></li>
		    <li><a href="#">2</a></li>
		    <li><a href="#">3</a></li>
		    <li><a href="#">4</a></li>
		    <li><a href="#">5</a></li>
		    <li><a >...</a></li>
		    <li>
		      <a href="#" aria-label="Next">
		        <span aria-hidden="true">&raquo;</span>
		      </a>
		    </li>
		  </ul>
		</nav>
	</div>
	<div class="kongbai-30"></div>
	<div class="container" >
		<div class="tuijian-title">
			<span>诚意推荐</span>
		</div>
	</div>

	<div class="container" style="padding-left:0;padding-right:0;">
		<div class="col-xs-4 col-md-2">
			<div class="cy-tuijian"></div>
		</div>
		<div class="col-xs-4 col-md-2">
			<div class="cy-tuijian"></div>
		</div>
		<div class="col-xs-4 col-md-2">
			<div class="cy-tuijian"></div>
		</div>
		<div class="col-xs-4 col-md-2">
			<div class="cy-tuijian"></div>
		</div>
		<div class="col-xs-4 col-md-2">
			<div class="cy-tuijian"></div>
		</div>
		<div class="col-xs-4 col-md-2">
			<div class="cy-tuijian"></div>
		</div>
	</div>




</div>


<div class="footer">
	<div class="container">
        <div class="row">
        	
        </div>
    </div>
</div>








</body>
</html>