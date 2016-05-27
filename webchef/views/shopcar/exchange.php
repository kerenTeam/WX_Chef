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
	<div class="content">
		<div class="center">
			<div class="exchange_tit am-cf">
				<p class="am-fl am-text-xl am-text-danger">请选择你想换的菜品</p>
				<a href="<?=site_url('shopcar/car');?>" class="am-fr am-btn am-btn-secondary">返回</a>
			</div>
			<div class="order-goods">
				<?php if(!empty($foods)):?>
				<ul class="am-avg-sm-5">
					<?php foreach($foods as $val):?>
					<li>
						<div class="order-goods">
							<a href="<?=site_url('shopcar/changup?id=').$val['changefoodid'].'&foodid='.$id.'&shopid='.$shopid;?>"><img src="<?=IP.$val['thumbnail']?>">
							<div class="goods-info">
								<h1><?=$val['foodname'];?></h1>
								<p>推荐指数 <span class="index-num"><i></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span>4.5</span> 评分</p>
										<div>价格： ￥<span><?=$val['foodprice'];?></span> <i>/ 1份</i></div>
									</div>
								</div>
							</div>
							</a>
						</div>
					</li>
					<?php endforeach;?>
				</ul>
			<?php else:?>
				<div>该菜品没有可换菜品！</div>
			<?php endif;?>
			</div>
		</div>
	</div>

    <script src="skin/js/jquery.min.js"></script>
    <script src="skin/js/amazeui.min.js"></script>
    <script type="text/javascript">
    	$(".goods-pr a").bind("click",function(){

    		$(this).html("已加入购物车").css("backgroundColor","#999");
    	})
    </script>
</body>
</html>