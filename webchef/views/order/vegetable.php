
		<div class="center">
			
			<div class="content-nav">
				<nav class="scrollspy-nav" data-am-scrollspy-nav="{offsetTop: 45}" data-am-sticky>
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
							<a href="<?=site_url('order/info?id=').$value['foodid'].'&&number=&shopid=';?>"><img src="<?=IP.$value['thumbnail'];?>"></a>
							<div class="goods-info" >
								<h1><?=$value['foodname']?></h1>
								<!-- <input type="hidden"> -->
								<p>推荐指数 <span class="index-num"><i style="width:<?=$value['recommend']/5*100;?>%;"></i></span></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<p><span><?php if($value['foodstar'] == 0.0){
											echo "5.0";
											}else{echo $value['foodstar'];}?></span> 评分</p>
										<div>价格：￥<span><?=$value['foodprice']?>.00</span> <i>/ 1份</i></div>
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
