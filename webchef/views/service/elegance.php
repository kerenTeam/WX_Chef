
		<div class="center">
			<div class="elegance">
				<div class="eleBanner">
					<div class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0">
							  <ul class="am-slides">
							   <?php foreach($banner as $val):?>
							    <li><a href="<?=site_url('service/lifeInfo2');?>" title=""><img src="<?=IP.$val['img'];?>" /></a></li>
                 				 <?php endforeach;?>
							  </ul>
							</div>
				</div>
				<ul class="am-avg-sm-5">
				    <?php foreach ($ban as $key => $value):?>
					<li>
						<div class="order-goods eleganceCtt">
							<a href="javascript:;"><img src="skin/img/yazhi.png"></a>
							<div class="goods-info">
								<h1><?=$value['title'];?></h1>
								<p data-am-popover="{content: '擅长曲目：<?=$value['specialty'];?>', trigger: 'hover focus',theme: 'sm'}">擅长曲目：<?=$value['specialty'];?></p>
								<div class="goods-price clear">
									<div class="goods-pl">
										<div>价格：￥<span class="goodsNum"><?=$value['sprice'];?></span> <i>/ 1人</i></div>
									</div>
									<div class="goods-pr">
										<!-- 已加入购物车样式 joined-->
										<a id="<?=$value['id']?>" href="javascript:;" <?php if(isset($value['num'])){ if($value['num'] == 1){echo "class='joined'";}else{echo "class='joinCar'";}}?> class="joinCar"><i class="am-icon-opencart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<?php endforeach;?>
					
				</ul>
			</div>
		</div>
	</div>

	<script src="skin/js/jquery.min.js"></script>
	    <script>
    	$('.joinCar').click(function(){
    		 var title = $(this).parentsUntil('.order-goods').find('h1').html();
    		 var id = $(this).attr('id');
    		 var money = $(this).parentsUntil('.order-goods').find('.goodsNum').html();
   			// alert(title+'\n'+id+'\n'+money);
			 $.ajax({
		         type: "POST",
		         url: "<?=site_url('service/elegaddcart');?>",
		         data: 'id='+id+'&title='+title+'&money='+money,
		         success: function(data){
		         	console.log(data);
	                  if(data){
	                  		 location.reload();
	                  }
	         	 }
	         });
    	})
    </script>

