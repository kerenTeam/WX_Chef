<!DOCTYPE html>
<html>
<head>
	<title>大厨到家</title>
    <meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<base href="<?php echo base_url();?>webchef/" />
  	<meta name="description" content="">
  	<meta name="keywords" content="">
  	<!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="icon" type="image/png" href="skin/img/LOGO-ug_03.png">
    <link rel="stylesheet" href="skin/css/amazeui.min.css">
    <link rel="stylesheet" type="text/css" href="skin/css/home.css">

</head>
<body class="bgcolor">
	<div class="header">
		<div class="center">
			<ul class="clear">
				<li><a href="<?=site_url('home/index');?>">首页</a></li>
				<li><a href="<?=site_url('home/personal');?>">我的订单</a></li>
				<!-- <li><a href="<?=site_url('home/recommend');?>">我的大厨</a></li> -->
				<li><a href="<?=site_url('home/help');?>">联系我们</a></li>
				<li><a href="<?=site_url('home/car');?>">购物篮</a></li>
        <li><a href="<?=site_url('login/index');?>">登录</a>/<a href="<?=site_url('login/register');?>">注册</a></li>
			</ul>
		</div>
	</div>
	<div class="content">
		<div class="center">
			<div class="recommend">
				<h2 class="rec_tit"><span>大厨推荐</span></h2>
				<div class="am-g">
					<!-- <div class="am-u-sm-4"> -->
						<div class="chef_pic">
							<img src="skin/img/images/chef_03.png">
							<p class="chef_tit">最佳川菜师傅——张某某</p>
						</div>
					<!-- </div> -->
					<!-- <div class="am-u-sm-8"> -->
						<div class="chef_peos">
							<div class="chef_top">
								<h1>张某某</h1>
								<p>厨师就业经验2年，最擅长川菜，加入大厨到家1年。长相帅气的他，又拥有一手好厨艺， 贴心的服务，地道的口味深受顾客喜欢。</p>
							</div>
							<div class="chef_imgs">
								<ul>
									<li id="1"><img src="skin/img/images/chef_05.png"><div class="zhezhao"></div></li>
									<li id="2"><img src="skin/img/images/chef_06.png"><div class="zhezhao"></div></li>
									<li id="3"><img src="skin/img/images/chef_07.png"><div class="zhezhao"></div></li>
									<li id="4"><img src="skin/img/images/chef_08.png"><div class="zhezhao"></div></li>
									<li id="5"><img src="skin/img/images/chef_09.png"><div class="zhezhao"></div></li>
								</ul>
							    <a href="javascript:;" id="prev" class="arrow">&lt;</a>
							    <a href="javascript:;" id="next" class="arrow">&gt;</a>
							</div>
						</div>
					<!-- </div> -->
				</div>
				<h2 class="rec_tit"><span>擅长菜品</span></h2>
				<ul class="chef_nsc">
					<li><a href="javascript:;">蓉记姜葱香辣蟹</a></li>
					<li><a href="javascript:;">川式豆捞</a></li>
					<li><a href="javascript:;">蓉记姜葱香辣蟹</a></li>
					<li><a href="javascript:;">川式豆捞</a></li>
					<li><a href="javascript:;">蓉记姜葱香辣蟹</a></li>
					<li><a href="javascript:;">川式豆捞</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="center">
			<ul class="am-avg-sm-4">
				<li>
					<h1>用户帮助</h1>
					<p><a href="javascript:;">服务中心</a></p>
					<p><a href="javascript:;">常见问题</a></p>
					<p><a href="javascript:;">在线客服</a></p>
				</li>
				<li>
					<h1>商务合作</h1>
					<p><a href="javascript:;">服务中心</a></p>
					<p><a href="javascript:;">常见问题</a></p>
					<p><a href="javascript:;">在线客服</a></p>
				</li>
				<li>
					<h1>关于我们</h1>
					<p><a href="javascript:;">服务中心</a></p>
					<p><a href="javascript:;">常见问题</a></p>
					<p><a href="javascript:;">在线客服</a></p>
				</li>
				<li>
					<div class="erweima">
						<img src="skin/img/erweima.png">
						<h2> 下载手机版</h2>
						<span> 手机订餐方便</span>
					</div>
				</li>
			</ul>
			<p class="footer-btm">&copy; 2012 成都可人软件有限公司&nbsp;&nbsp;&nbsp;蜀ICP备12007958号-1&nbsp;&nbsp;&nbsp;Powered By DeepTime</p>
		</div>
	</div>
	
    <script src="skin/js/jquery.min.js"></script>
    <script src="skin/js/amazeui.min.js"></script>
    <script type="text/javascript" src="skin/js/recommend.js"></script>
</body>
</html>