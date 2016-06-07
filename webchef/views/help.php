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
<div class="">
	<div class="header">
		<div class="center">
			<ul class="clear">
		        <li><a href="<?=site_url('welcome/home');?>">首页</a></li>
		        <li><a href="<?=site_url('usercenter/personal');?>">我的订单</a></li>
		        <!-- <li><a href="<?=site_url('welcome/recommend');?>">我的大厨</a></li> -->
		        <li><a href="<?=site_url('welcome/help');?>">联系我们</a></li>
		        <li><a href="<?=site_url('shopcar/car');?>">购物篮</a></li>
		        <?php if(!isset($_SESSION['phone'])):?>
			        <li><a href="<?=site_url('login/index');?>">登录</a>/<a href="<?=site_url('login/register');?>">注册</a></li>
			        <?php else:?>
			        <li><div  class="am-dropdown headerdown" data-am-dropdown>
			            <a href="javascript:;" class="am-dropdown-toggle" data-am-dropdown-toggle><?=$_SESSION['phone'];?> <span class="am-icon-caret-down"></span></a>
			            <ul class="am-dropdown-content">
			              <li><a href="<?=site_url('usercenter/personal');?>"><i class="am-icon-home"></i> 我的主页</a></li>
			              <li><a href="<?=site_url('usercenter/userInfo');?>"><i class="am-icon-user"></i> 个人信息</a></li>
			              <li><a href="<?=site_url('usercenter/address');?>"><i class="am-icon-map-marker"></i>&nbsp;&nbsp;地址管理</a></li>
			              <li class="am-divider"></li>
			              <li><a href="<?=site_url('login/outlogin')?>"><i class="am-icon-power-off"></i> 退出登录</a></li>
			            </ul>
			        </div></li>
			      <?php endif;?>
			</ul>
		</div>
	</div>
</div>
<div class="content">
	<div class="content-tit">
		<div class="center clear">
			<!-- 指引 -->
			
          <ol class="am-breadcrumb am-margin-bottom-0">
          <li><a href="<?=site_url('welcome/home');?>">首页</a></li>
          <li class="am-active">帮助中心</li>
        </ol>
        <ul class="clear">
                <li><a href="<?=site_url('welcome/add');?>">点菜</a></li>
                <li><a href="<?=site_url('order/custom');?>">宴席</a></li>
                <li><a href="<?=site_url('order/vegetable');?>">净菜</a></li>
                <li><a href="javascript:;">特色服务 <i class="am-icon-sort-desc"></i></a>
                  <div class="subMenu">
                    <a href="<?=site_url('service/service');?>" title="">服务</a>
                    <a href="<?=site_url('service/elegance');?>" title="">伴餐</a>
                    <a href="<?=site_url('service/ceremonyType');?>" title="">庆典</a>
                    <a href="<?=site_url('welcome/price');?>" title="">菜价</a>
                  </div>
                </li>
        </ul>
		</div>
	</div>
	<div class="center">
		<div class="help clear">
			<div class="help_left">
				<ul class="am-list admin-sidebar-list" id="collapase-nav-1">
					<li class="am-panel">
						<a data-am-collapse="{target: '#user-nav'}">
							用户帮助 <i class="am-icon-angle-right am-fr am-margin-right"></i>
						</a>
						<ul class="am-list am-collapse admin-sidebar-sub" id="user-nav">
							<li><a href="javascript:;" class="active"> 服务中心 </a></li>
							<li><a href="javascript:;"> 常见问题 </a></li>
							<li><a href="javascript:;"> 在线客服 </a></li>
						</ul>
					</li>
					<li class="am-panel">
						<a data-am-collapse="{target: '#company-nav'}">
							 商务合作 <i class="am-icon-angle-right am-fr am-margin-right"></i>
						</a>
						<ul class="am-list am-collapse admin-sidebar-sub" id="company-nav">
							<li><a href="javascript:;"> 会员介绍 </a></li>
							<li><a href="javascript:;"> 会员级别 </a></li>
							<li><a href="javascript:;"> 账户安全 </a></li>
						</ul>
					</li>
					<li class="am-panel">
						<a data-am-collapse="{target: '#role-nav'}">
							 关于我们 <i class="am-icon-angle-right am-fr am-margin-right"></i>
						</a>
						<ul class="am-list am-collapse admin-sidebar-sub" id="role-nav">
							<li><a href="javascript:;"> 加入我们 </a></li>
							<li><a href="javascript:;"> 联系我们 </a></li>
							<li><a href="javascript:;"> 服务协议 </a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="help_right">
				<h1>服务中心</h1>
				<div class="help_right_ctt">
					<h2>常见问题</h2>
					<h3>1. 使用余额支付不了？</h3>
					<ul>
						<li>先确认下您的饿了么账户是否有绑定手机号码，使用余额支付必须先绑定手机号码。</li>
					</ul>
					<h3>2. 在线支付订单取消后，钱怎么返还？</h3>
					<ul>
						<li>使用饿了么账户余额支付（包括：余额、余额+红包、第三方支付+余额+红包、第三方支付+余额），订单无效后，所有款项（包括红包）将退到您的饿了么账户。</li>
						<li>用户使用第三方支付的（包括：第三方支付+红包、第三方支付），订单无效后，支付款项将在3-10个工作日返还到您的支付账户。红包退还到饿了么账户。</li>
					</ul>
					<h3>3. 在线支付的过程中，订单显示未支付成功，款项却被扣了，怎么办？</h3>
					<ul>
						<li>这个属于第三方（银行/支付宝/微信等）数据传输延迟问题。您可以再等待一下， 如果超过半个小时，订单还是未支付状态，第三方会把款项返还到您的付款账户。到账时间依银行而定，一般会在3个工作日内。</li>
					</ul>
					<h3>4. 每天限制优惠两单，前面下了一个在线支付的单子，由于未付款，订单自动取消了，这单会计算我的参与活动次数吗?</h3>
					<ul>
						<li>不会。未付款的订单不会计入您使用优惠的次数。</li>
					</ul>
					<h3>5. 饿了么账户里的款项怎么提现？</h3>
					<ul>
						<li>在个人中心>账户余额>提现处进行提现操作。操作日起3-10个工作日款项会原路返还到您的付款账户。</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>	
    <script src="skin/js/jquery.min.js"></script>
    <script type="text/javascript">
    	$('#user-nav').collapse('open');
    	$('#company-nav').collapse('open');
    	$('#role-nav').collapse('open');

    	$('.admin-sidebar-sub a').bind('click',function(){
    		$('.admin-sidebar-sub a').removeClass("active");
    		$(this).addClass("active");
    		$('.help_right>h1').html($(this).html());
    	});
    </script>
