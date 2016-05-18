<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人中心</title>
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


<div class="content">
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

	<div class="container">
        <div class="row">
        	<div class="col-md-8 col-xs-12">
        		<div class="kongbai-30"></div>
        		<ul class="nav nav-pills" role="tablist">
				  <li role="presentation" class="active"><a href="#">信息 <span class="badge">2</span></a></li>
				  <li role="presentation"><a href="#">通知 <span class="badge">4</span></a></a></li>
				  <li role="presentation"><a href="#">动态 <span class="badge">3</span></a></li>
				</ul>
				<div class="kongbai-30"></div>
        		<div class="jumbotron jumbotron1">
				  <img src="/test/Public/images/apple.jpg" class="img-rounded member-header">
				  <p class="member-header-info">姓名：<span>Mr CHEN</span></p>				  
				  <p class="member-header-info">生日：<span>1991-10-20</span></p>
				  <p class="member-header-info">性别：<span>男</span></p>
				  <p class="member-header-info">地址：<span>安徽合肥</span></p>
				  <p class="member-header-info">个人说明：<span>建个Thinkphp网站看看，哈哈哈。</span></p>
				  <a class="btn btn-default pull-right" href="#" role="button"><span class="icon-file-alt"></span> 修改资料</a>
				</div>

				<div class="jumbotron">
				  <h1>Hello, world!</h1>
				  <p>...</p>
				  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
				</div>

				<div class="jumbotron">
				  <h1>Hello, world!</h1>
				  <p>...</p>
				  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
				</div>


        	</div>
        	<div class="col-md-4 col-xs-12">

        		<div class="kongbai-30"></div>
<div class="input-group">
    <input type="text" class="form-control" placeholder="请输入你想搜索的关键字！">
    <span class="input-group-btn">
    	<button class="btn btn-success" type="button">搜索</button>
    </span>
</div><!-- /input-group -->

<div class="product-recommend">
	<p class="right-title">产品推荐</p>
	<div class="product-show">
		<img src="/test/Public/images/apple.jpg" class="img-thumbnail">
		<div class="product-info">
			<p>空间打了卡酒店可垃圾阿拉斯加的阿里角度看案例较大加速度卡卡啊圣诞节快乐加拉斯酒店看大家爱思考多久阿拉克了阿里看到...</p>
			<button type="button" class="btn btn-info btn-xs">查看产品</button>
			
		</div>
	</div>
	<div class="product-show">
		<img src="/test/Public/images/apple.jpg" class="img-thumbnail">
		<div class="product-info">
			<p>空间打了卡酒店可垃圾阿拉斯加的阿里角度看案例较大加速度卡卡啊圣诞节快乐加拉斯酒店看大家爱思考多久阿拉克了阿里看到...</p>
			<button type="button" class="btn btn-info btn-xs">查看产品</button>
			
		</div>
	</div>
	<div class="product-show">
		<img src="/test/Public/images/apple.jpg" class="img-thumbnail">
		<div class="product-info">
			<p>空间打了卡酒店可垃圾阿拉斯加的阿里角度看案例较大加速度卡卡啊圣诞节快乐加拉斯酒店看大家爱思考多久阿拉克了阿里看到...</p>
			<button type="button" class="btn btn-info btn-xs">查看产品</button>
			
		</div>
	</div>
	<div class="product-show">
		<img src="/test/Public/images/apple.jpg" class="img-thumbnail">
		<div class="product-info">
			<p>空间打了卡酒店可垃圾阿拉斯加的阿里角度看案例较大加速度卡卡啊圣诞节快乐加拉斯酒店看大家爱思考多久阿拉克了阿里看到...</p>
			<button type="button" class="btn btn-info btn-xs">查看产品</button>
			
		</div>
	</div>
</div>

<div class="kongbai-30"></div>
<div>
	<div>	
	  <!-- Nav tabs -->
	  <ul class="nav nav-tabs" role="tablist">
	    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">最新动态</a></li>
	    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">最近访客</a></li>
	    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">最新留言</a></li>
	  </ul>

	  <!-- Tab panes -->
	  <div class="tab-content">
	    <div role="tabpanel" class="tab-pane active" id="home">
	    	<table class="table table-hover" style="border-bottom:1px solid #ddd;">
	    		<tr>
	    			<td class="col-xs-6">2015-11-4</td>
	    			<td class="col-xs-6">苹果上架了啊！</td>
	    		</tr>
	    		<tr>
	    			<td class="col-xs-6">2015-11-4</td>
	    			<td class="col-xs-6">橘子上架了啊！</td>
	    		</tr>
	    		<tr>
	    			<td class="col-xs-6">2015-11-4</td>
	    			<td class="col-xs-6">香蕉上架了啊！</td>
	    		</tr>
	    		<tr>
	    			<td class="col-xs-6">2015-11-4</td>
	    			<td class="col-xs-6">苹果上架了啊！</td>
	    		</tr>
	    		<tr>
	    			<td class="col-xs-6">2015-11-4</td>
	    			<td class="col-xs-6">橘子上架了啊！</td>
	    		</tr>
	    		<tr>
	    			<td class="col-xs-6">2015-11-4</td>
	    			<td class="col-xs-6">香蕉上架了啊！</td>
	    		</tr>
	    	</table>
	    	<p class="text-center">
	    		<a type="button" class="btn btn-danger">点击查看更多</a>
	    	</p>
	    	
	    </div>
	    <div role="tabpanel" class="tab-pane" id="profile">
	    	<div class="col-xs-3">
	    		<img src="/test/Public/images/apple.jpg" alt="" class="img-circle favicon">
	    	</div>
	    	<div class="col-xs-3">
	    		<img src="/test/Public/images/apple.jpg" alt="" class="img-circle favicon">
	    	</div>
	    	<div class="col-xs-3">
	    		<img src="/test/Public/images/apple.jpg" alt="" class="img-circle favicon">
	    	</div>
	    	<div class="col-xs-3">
	    		<img src="/test/Public/images/apple.jpg" alt="" class="img-circle favicon">
	    	</div>
	    	<div class="col-xs-3">
	    		<img src="/test/Public/images/apple.jpg" alt="" class="img-circle favicon">
	    	</div>
	    	<div class="col-xs-3">
	    		<img src="/test/Public/images/apple.jpg" alt="" class="img-circle favicon">
	    	</div>
	    	<div class="col-xs-3">
	    		<img src="/test/Public/images/apple.jpg" alt="" class="img-circle favicon">
	    	</div>
	    	<div class="col-xs-3">
	    		<img src="/test/Public/images/apple.jpg" alt="" class="img-circle favicon">
	    	</div>
	    	<div class="col-xs-12 kongbai-30"></div>
	    	<p class="text-center">
	    		<a type="button" class="btn btn-danger">点击查看更多访客</a>
	    	</p>
	    	
	    </div>
	    <div role="tabpanel" class="tab-pane" id="messages">
	    	<div class="kongbai-5"></div>
	    	<div class="message-cell bg-success" style="margin-bottom:10px;">	    		
	    		<img src="/test/Public/images/apple.jpg" class="img-thumbnail">
	    		<div class="message-content">
	    			<p class="message-tittle">Admin <span>16.35  2015-11-4</span></p>
					<p class="message-body">这东西很好啊！</p>

	    		</div>
	    	</div>
	    	<div class="message-cell bg-info" style="margin-bottom:10px;">	    		
	    		<img src="/test/Public/images/apple.jpg" class="img-thumbnail">
	    		<div class="message-content">
	    			<p class="message-tittle">Admin <span>16.35  2015-11-4</span></p>
					<p class="message-body">赞一个！</p>

	    		</div>
	    	</div>
	    	<div class="message-cell bg-danger" style="margin-bottom:10px;">	    		
	    		<img src="/test/Public/images/apple.jpg" class="img-thumbnail">
	    		<div class="message-content">
	    			<p class="message-tittle">Admin <span>16.35  2015-11-4</span></p>
					<p class="message-body">不错不错！</p>

	    		</div>
	    	</div>
	    	<div class="col-xs-12 kongbai-5"></div>
	    	<p class="text-center">
	    		<a type="button" class="btn btn-danger">点击查看更多留言</a>
	    	</p>
	    </div>
	  </div>
	</div>

</div>

        	</div>
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