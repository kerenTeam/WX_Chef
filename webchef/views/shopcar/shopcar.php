

<link href="skin/css/shopcar.css" rel="stylesheet">
<script>
function addshopcar(id,num){
	// console.log(id+'=='+num+'=='+code)
	$.ajax({
		type:'post',
		url:'<?=site_url("shopcar/shopcahe");?>',
		data:'id='+id+'&number='+num,
		success:function(data){
			// console.log(data);
		}
	})


}	


</script>
	<!-- main -->
	<div class="main">
          <!-- 指引 -->
        		<!-- biaoti -->
		<div class="biaoti">
			<a class="quanbu" href="javascript:;"><span>全部商品</span></a>
			<!-- <a href="javascript:;" style="color: #999">优惠商品</a> -->
		</div>
		<form id="youform" action="<?=site_url('shopcar/defray');?>" method="post">
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
			<?php if(!empty($carts)):?>
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
								<input class="cheyou" type ="checkbox" name ="checkid[]" value ="<?=$food['foodid'];?>" data-am-ucheck  checked />
							</label>
							<!-- foodid -->
							<input type="hidden" value="<?=$food['foodid']?>" name='foodid[]' />
							<!-- 判断是套餐还是点菜 -->
							<?php if($food['code'] != 1999):?>
							<a href="<?=site_url('order/info?id=').$food['foodid'];?>">
								<img src="<?=IP.$food['thumbnail'];?>" alt="<?=$food['foodname'];?>" />
							</a>
							<span>
								<a href="<?=site_url('order/info?id=').$food['foodid'];?>"><b><?=$food['foodname'];?>，</b><?php echo mb_strimwidth($food['foodtrait'], 0, 70,'...', 'UTF-8'); ?></a>
							</span>
							<?php else:?>
								<a href="<?=site_url('order/partyInfo?id=').$food['foodid'];?>">
									<img src="<?=IP.$food['thumbnail'];?>" alt="<?=$food['foodname'];?>" />
								</a>
								<span>
									<a href="<?=site_url('order/partyInfo?id=').$food['foodid'];?>"><b><?=$food['foodname'];?>，</b><?php echo mb_strimwidth($food['foodtrait'], 0, 70,'...', 'UTF-8'); ?></a>
								</span>
							<?php endif;?>
							<!-- end -->
							<?php if($food['discountproportion']):?>
								<p class="p1">￥<span class="p1span"><?=$food['foodprice']*$food['discountproportion'];?></span></p>
							<?php else:?>
								<p class="p1">￥<span class="p1span"><?=$food['foodprice'];?></span></p>
							<?php endif;?>
					
							<div class="jiajian">
								<img class="jian"  src="skin/img/jian.png"><input class="shuzhi" value="<?=$cart['number'];?>" name="numbers[]" id='<?=$food['foodid'];?>'><img class="jia"  src="skin/img/jia.jpg">
							</div>
							<p class="p2">￥ <span class="p2span caipin">0.00</span> </p>
							<?php if($food['code'] == 1999):?>
							<?php else:?>
							<a href="<?=site_url('shopcar/exchange?id=').$id.'&pid='.$food['foodpid'].'&shopid='.$shopid;?>">换一换</a>
							<?php endif;?>
							<a href="<?=site_url('shopcar/delshopcar?id=').$id;?>" onclick="return confirm('你确定要删除吗?')">删除</a>
						</li>
					<?php endforeach;?>
				<?php endforeach;?>
			<?php endif;?>
				<!-- 服务 -->
				<li><h4 class="am-text-primary">服务</h4></li>
				<!-- 服务员 -->
				<?php if(!empty($witer)):?>
				<li>
					<label class="am-checkbox am-danger cheall">
						<input class="<?php if(!$witer['boy']){echo "fuwuyuan";}?> cheyou" type ="checkbox" name ="boyid" value ="1" data-am-ucheck  <?php if($witer['boy'] != ''){echo "checked";}?>/>
					</label>
					<span class="serTit">
						服务员（男）
					</span>
					<p class="serPrice p1"><span class="p1span">80</span>/位</p>
					<div class="jiajian">
						<img class="jian"  src="skin/img/jian.png"><input class="shuzhi" value="<?=$witer['boy'];?>" name='boy'><img class="jia"  src="skin/img/jia.jpg">
					</div>
					<p class="serPris p2">￥ <span class="p2span">0.00</span> </p>
				</li>

				<li>
					<label class="am-checkbox am-danger cheall">
						<input class="<?php if(!$witer['girl']){echo "fuwuyuan";}?> cheyou" type ="checkbox" name ="girlid" value ="1" data-am-ucheck  <?php if($witer['girl'] != ''){echo "checked";}?>/>
					</label>
					<span class="serTit">
						服务员（女）
					</span>
					<p class="serPrice p1"><span class="p1span">80</span>/位</p>
					<div class="jiajian">
						<img class="jian"  src="skin/img/jian.png"><input class="shuzhi" value="<?=$witer['girl'];?>" name="girl"><img class="jia"  src="skin/img/jia.jpg">
					</div>
					<p class="serPris p2">￥ <span class="p2span">0.00</span> </p>
				</li>
				<?php else:?>
					<li>
					<label class="am-checkbox am-danger cheall">
						<input class="cheyou" type ="checkbox" name ="boyid" value ="1" data-am-ucheck  />
					</label>
					<span class="serTit">
						服务员（男）
					</span>
					<p class="serPrice p1"><span class="p1span">80</span>/位</p>
					<div class="jiajian">
						<img class="jian"  src="skin/img/jian.png"><input class="shuzhi" value="1" name='boy'><img class="jia"  src="skin/img/jia.jpg">
					</div>
					<p class="serPris p2">￥ <span class="p2span">0.00</span> </p>
				</li>

				<li>
					<label class="am-checkbox am-danger cheall">
						<input class="cheyou" type ="checkbox" name ="girlid" value ="1" data-am-ucheck  />
					</label>
					<span class="serTit">
						服务员（女）
					</span>
					<p class="serPrice p1"><span class="p1span">80</span>/位</p>
					<div class="jiajian">
						<img class="jian"  src="skin/img/jian.png"><input class="shuzhi" value="1" name="girl"><img class="jia"  src="skin/img/jia.jpg">
					</div>
					<p class="serPris p2">￥ <span class="p2span">0.00</span> </p>
				</li>
				<?php endif;?>
				<!-- 服务员end -->
				<?php if(!empty($cerearr) || !empty($eleg)):?> 
				<!-- 伴餐 -->
				<?php if(!empty($eleg)):?>
				<li>
					<label class="am-checkbox am-danger cheall">
						<input class="cheyou" type ="checkbox" name ="eleg" value ="<?=$eleg['id'];?>" data-am-ucheck checked />
					</label>
					<span class="serTit">
						<?=$eleg['title'];?>
					</span>
					<p class="serPrice p1 am-hide"><span class="p1span"><?=$eleg['money'];?></span></p>
					<div class="jiajian am-hide">
						<img class="jian"  src="skin/img/jian.png"><input class="shuzhi" value="1"><img class="jia"  src="skin/img/jia.jpg">
					</div>
					<p class="bancan p2">￥ <span class="p2span"><?=$eleg['money'];?></span> </p>
					<a href="<?=site_url('shopcar/delcere?action=1');?>" onclick="return confirm('你确定要删除吗?')">删除</a>
				</li>
				<?php endif;?>
				<!-- 伴餐end -->
				<!-- 庆典 -->
				<?php if(!empty($cerearr)): ?>
				<li><h4 class="am-text-primary">庆典</h4></li>
				<li>
					<label class="am-checkbox am-danger cheall">
						<input class="cheyou" type ="checkbox" name ="cereid" value ="<?=$cerearr['celebrationid'];?>" data-am-ucheck checked />
					</label>
					<span class="serTit">
						<a href="" title=""><?=$cerearr['name'];?></a>
					</span>
					<p class="serPrice p1 am-hide"><span class="p1span"><?=$cerearr['moneyall'];?></span></p>
					<div class="jiajian am-hide">
						<img class="jian"  src="skin/img/jian.png"><input class="shuzhi" value="1"><img class="jia"  src="skin/img/jia.jpg">
					</div>
					<p class="bancan p2">￥ <span class="p2span"><?=$cerearr['moneyall'];?></span> </p>
					<a href="<?=site_url('shopcar/delcere?action=2');?>" onclick="return confirm('你确定要删除吗?')">删除</a>
				</li>
				<?php endif;?>
				<!-- 庆典end -->
			<?php endif;?>
			</ul>
			<!-- 结算 -->
			<div class="jiesuan">
				<p class="p3 service"><span style="color: #999">服务费 :</span> ￥<span id="service">60.00</span><input type="hidden" id="fee" name="servmoneydata" value="0"></p>
				<p class="p3"><span style="color: #000">合计：</span>￥<span id="p3span">0.00</span></p>
				<p class="p3">
				<!-- <input type="submit" value="去付款" class="am-btn am-btn-danger am-radius" /> -->
				<button type='submit' class="am-btn am-btn-danger am-radius">去付款</button>
				</p>
			</div>
		</div>
		</form>
	</div>
<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/shopcar.js"></script>
