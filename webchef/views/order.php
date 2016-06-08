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
<div class="order_hd">
	<div class="header price_hd">
		<div class="center">
			<ul class="clear">
		        <li><a href="<?=site_url('home/index');?>">首页</a></li>
		        <li><a href="<?=site_url('usercenter/personal');?>">我的订单</a></li>
		        <!-- <li><a href="<?=site_url('home/recommend');?>">我的大厨</a></li> -->
		        <li><a href="<?=site_url('home/help');?>">联系我们</a></li>
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
	<div class="center clear">
		<!-- <p class="index_address">当前位置：成都市蜀都中心</p> -->
		<form class="am-form fr index_search">
			<div class="am-form-group am-form-icon am-form-feedback">
				<input type="search" placeholder="搜索">
				<button type="submit" class="am-icon-search"></button>
			</div>
		</form>
	</div>
</div>
	<div class="content">
	<div class="content-tit">
		<div class="center clear">
		<!-- 指引 -->
				<ol class="am-breadcrumb am-margin-bottom-0">
					<li><a href="<?=site_url('home/home');?>">首页</a></li>
					<li class="am-active">点菜</li>
				</ol>
				<ul class="clear">
	                <li><a href="<?=site_url('home/add');?>">点菜</a></li>
	                <li><a href="<?=site_url('order/custom');?>">宴席</a></li>
	                <li><a href="<?=site_url('order/vegetable');?>">净菜</a></li>
	                <li><a href="javascript:;">特色服务 <i class="am-icon-sort-desc"></i></a>
	                  <div class="subMenu">
	                    <a href="<?=site_url('service/service');?>" title="">服务</a>
	                    <a href="<?=site_url('service/elegance');?>" title="">伴餐</a>
	                    <a href="<?=site_url('service/ceremonyType');?>" title="">庆典</a>
	                    <a href="<?=site_url('home/price');?>" title="">菜价</a>
	                  </div>
	                </li>
        		</ul>
			</div>
		</div>
		<div class="center">
			
			<div class="content-nav">
				<nav class="scrollspy-nav" data-am-scrollspy-nav="{offsetTop: 0}" data-am-sticky>
				<ul class="clear">
				<?php foreach($cates as $v):?>
					<li><a class="active" href="#<?=$v['foodcategoryid'];?>"><?=$v['name'];?></a></li>
				<?php endforeach;?>
				
				</ul>
				</nav>
			</div>
			<div class="order-goods">
			<?php foreach($cates as $val):?>
				<h2 id="<?=$val['foodcategoryid'];?>"><?=$val['name'];?></h2>
				<ul class="am-avg-sm-5">
				<?php foreach($foods as $value):?>
					<?php if($val['foodcategoryid'] == $value['foodpid']): ?>
					<li>
						<div class="order-goods">
							<a href="<?=site_url('order/info?id=').$value['foodid'];?>"><img src="skin/img/exp.gif" data-original="<?=IP.$value['thumbnail'];?>" class="lazy"/></a>
							<div class="goods-info" >
								<h1><?=$value['foodname']?></h1>
								<!-- <input type="hidden"> -->
								<p>推荐指数 <span class="index-num"><i style="width:<?=$value['recommend']/5*100;?>%;"></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span><?php if($value['foodstar'] == 0.0){
											echo "5.0";
											}else{echo $value['foodstar'];}?></span> 评分</p>
										<div>价格：￥<span><?=$value['foodprice']?></span> <i>/ 1份</i></div>
									</div>
									<div class="goods-pr">
										<!-- 已加入购物车样式 -->
										 <?php if($value['code'] == 1999){$a = 1;}else{$a = 0;}?>
										 <input type="hidden" value="<?=$a?>" />
										<a id='<?=$value['foodid'];?>' href="javascript:;" <?php if(isset($value['number'])){if($value['number'] != 0){echo 'class="joined"';}else{echo 'class="joinCar"';}}else{echo 'class="joinCar"';}?>><i class="am-icon-opencart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</li>
				    <?php endif;?>
				<?php endforeach;?>
				</ul>
				<?php endforeach;?>
				
			</div>
		</div>
	</div>

    <script src="skin/js/jquery.min.js"></script>
	<script src="skin/js/jqueryLazyload.js"></script>
    <script>
    $(function(){
    	 $("img.lazy").lazyload();

    	$('.joinCar').click(function(){
    		 var joinBtn = $(this);
    		 var foodid = $(this).attr('id');
    		 var code = $(this).prev().val();
    		 console.log(code);
			 $.ajax({
		         type: "POST",
		         url: "<?=site_url('home/addcart');?>",
		         data: 'id='+foodid+'&code='+code,
		         success: function(data){
		         	console.log(data);
	                  if(data == 1){
	                  	joinBtn.addClass('joined');
	                  }
	         	 }
	         });
    	})
    })
    </script>
