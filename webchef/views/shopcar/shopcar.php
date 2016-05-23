

<link href="skin/css/shopcar.css" rel="stylesheet">

	<!-- main -->
	<div class="main">
          <!-- 指引 -->
          <!-- <ol class="am-breadcrumb am-margin-bottom-0">
          <li><a href="<?=site_url('order/home');?>">首页</a></li>
          <li><a href="<?=site_url('order/add');?>">点菜</a></li>
          <li class="am-active">购物车</li>
        </ol> -->
		<!-- biaoti -->
		<div class="biaoti">
			<a class="quanbu" href="javascript:;"><span>全部商品</span></a>
			<!-- <a href="javascript:;" style="color: #999">优惠商品</a> -->
		</div>
		<form id="youform">
		<!-- xuanze -->
		<div class="xuanze">
			<span class="xunze_left">
				<label class="am-checkbox am-danger cheall"><input type ="checkbox" name ="selected" value ="" class="cheyouall" data-am-ucheck  /></label>
				<a href="javascript:;">全选</a>
				<a href="javascript:;">项目</a>
			</span>
			<span class="xunze_right">
				<a href="javascript:;">价格</a>
				<a href="javascript:;">数量</a>
				<a href="javascript:;">小计</a>
			</span>
		</div>
		<!-- 商品详情 -->
		<div class="shangpinlist">
			<ul id="youul">
			<?php unset($_SESSION['booking']); foreach($carts as $k=>$v):?>

				<li><h4 class="am-text-primary"><?php switch ($k) {
					case 'diancai':
						echo "点菜";
						break;
					case 'taocan':
						echo "套餐";
						break;
					case 'jincai':
						echo "净菜";
						break;
				}?></h4></li>
				
				  <?php foreach($v as $cart):?>
			      <?php 

			        $id = $cart['foodid'];
			        $shopid = $cart['shopid'];
			        $foods = file_get_contents(POSTAPI."API_Food?dis=xq&foodid=".$id);
			        $foodjson = ltrim(rtrim($foods,'"'),'"');
			        $a =   str_replace('\"','"',$foodjson);
			        $food= json_decode($a,true);
			        // 缓存
			        $f[] = $food;
			        if(!isset($_SESSION['booking'])){
			           $this->session->set_userdata('booking',$f);
			        }else{
			            $this->session->set_userdata('booking',$f);
			        
			        }
			      ?>
						<li>
							<label class="am-checkbox am-danger cheall">
								<input class="cheyou" type ="checkbox" name ="selected" value ="" data-am-ucheck  />
							</label>
							<a href="<?=site_url('order/info?id=').$food['foodid'].'&number='.$cart['number'].'&shopid='.$shopid;?>">
								<img src="<?=IP.$food['thumbnail'];?>" alt="<?=$food['foodname'];?>" />
							</a>
							<span>
								<a href="<?=site_url('order/info?id=').$food['foodid'].'&number='.$cart['number'].'&shopid='.$shopid;?>"><b><?=$food['foodname'];?>，</b><?php echo mb_strimwidth($food['foodtrait'], 0, 70,'...', 'UTF-8'); ?></a>
							</span>
							<p class="p1">￥<span class="p1span"><?=$food['foodprice'];?></span></p>
							<div class="jiajian">
								<img class="jian"  src="skin/img/jian.png"><input class="shuzhi" value="1"><img class="jia"  src="skin/img/jia.jpg">
							</div>
							<p class="p2">￥ <span class="p2span caipin">0.00</span> </p>
							<a href="<?=site_url('order/exchange');?>">换一换</a>
							<a href="javascript:;" class="you_a">删除</a>
						</li>
					<?php endforeach;?>
				<?php endforeach;?>
				<!-- 服务 -->
			<?php if(!empty($witer) || !empty($eleg) || !empty($cerearr)):?> 
				<li><h4 class="am-text-primary">服务</h4></li>
				<!-- 伴餐 -->
				<?php if(!empty($eleg)):?>
				<li>
					<label class="am-checkbox am-danger cheall">
						<input class="cheyou" type ="checkbox" name ="selected" value ="" data-am-ucheck  />
					</label>
					<span class="serTit">
						<?=$eleg['title'];?>
					</span>
					<p class="serPrice p1 am-hide"><span class="p1span"><?=$eleg['money'];?></span></p>
					<div class="jiajian am-hide">
						<img class="jian"  src="skin/img/jian.png"><input class="shuzhi" value="1"><img class="jia"  src="skin/img/jia.jpg">
					</div>
					<p class="bancan p2">￥ <span class="p2span"><?=$eleg['money'];?></span> </p>
					<a href="javascript:;" class="you_a">删除</a>
				</li>
				<?php endif;?>
				<!-- 伴餐end -->
				<!-- 服务员 -->
				<li>
					<label class="am-checkbox am-danger cheall">
						<input class="<?php if(!$witer['boy']){echo "fuwuyuan";}?> cheyou" type ="checkbox" name ="selected" value ="" data-am-ucheck  />
					</label>
					<span class="serTit">
						服务员（男）
					</span>
					<p class="serPrice p1"><span class="p1span">80</span>/位</p>
					<div class="jiajian">
						<img class="jian"  src="skin/img/jian.png"><input class="shuzhi" value="<?=$witer['boy'];?>"><img class="jia"  src="skin/img/jia.jpg">
					</div>
					<p class="serPris p2">￥ <span class="p2span">0.00</span> </p>
				</li>
				<li>
					<label class="am-checkbox am-danger cheall">
						<input class="<?php if(!$witer['girl']){echo "fuwuyuan";}?> cheyou" type ="checkbox" name ="selected" value ="" data-am-ucheck  />
					</label>
					<span class="serTit">
						服务员（女）
					</span>
					<p class="serPrice p1"><span class="p1span">80</span>/位</p>
					<div class="jiajian">
						<img class="jian"  src="skin/img/jian.png"><input class="shuzhi" value="<?=$witer['girl'];?>"><img class="jia"  src="skin/img/jia.jpg">
					</div>
					<p class="serPris p2">￥ <span class="p2span">0.00</span> </p>
				</li>
				<!-- 服务员end -->
			<?php endif;?>
			</ul>
			<!-- 结算 -->
			<div class="jiesuan">
				<p class="p3 service"><span style="color: #999">服务费 :</span> ￥<span id="service">60.00</span></p>
				<p class="p3"><span style="color: #000">合计：</span>￥<span id="p3span">0.00</span></p>
				<p>
				<!-- <input type="submit" value="去付款" class="am-btn am-btn-danger am-radius" /> -->
				<a href="<?=site_url('shopcar/defray');?>" class="am-btn am-btn-danger am-radius">去付款</a>
				</p>
			</div>
		</div>
		</form>
		<!-- 购买人信息 -->
		<!-- <div class="peoplexinxi">
			<form class="am-form">
				<p>
					<span class="xinxi_span">收货人姓名</span><input type="text" name="shname" />
				</p>
				<p>
					<span class="xinxi_span">手机号码</span><input type="text" name="sjname" />
				</p>
				<p>
					<span class="xinxi_span">详细地址</span><textarea></textarea> 
				</p>
				<div>
					<label class="am-checkbox am-danger"><input type="checkbox"  data-am-ucheck> 设置为默认地址</label>
					<input type="submit" value="保存" class="am-btn am-btn-danger am-radius" />
				</div>
			</form>
		</div> -->

	</div>
<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/shopcar.js"></script>
