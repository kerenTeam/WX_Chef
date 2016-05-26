
		<div class="center bgc">
			<div class="elegance">
				<div class="am-g">
					<div class="am-u-sm-7">
						<img src="<?=IP.$cereinfo[0]['logo'];?>">
					</div>
					<div class="am-u-sm-5 cereForm">
						<form class="am-cf" action="<?=site_url('service/cereOrder');?>" method="post">
							<h2 class="am-cf"><?=$cereinfo[0]['name'];?><a href="<?=site_url('service/customServ');?>" title="" class="am-fr am-text-sm">晕了么？联系客服</a></h2>

							<div class="am-cf am-padding-sm qgray" id="my-sticky" data-am-sticky>
								<span class="red am-icon-cny am-text-xl" id="allmoney"><?=$cereinfo[0]['price'];?></span>
								 <input type="hidden" name="moneyall" value="" id="moneyall"/>
								<button type="button" class="am-btn am-btn-danger am-fr makeCheck">加入购物车</button>
								<div class="tk" style="display: none;">
									<div class="tkcontent tkvip bwhite am-cf" style="background: white;border-radius: 5px;">
										<div class="tktxt2">
											<div class="am-text-center am-text-lg am-margin-sm">订单确认</div>
											<!-- <hr data-am-widget="divider" style="margin:0;" class="am-divider am-divider-default" /> -->
											<div class="am-text-center am-margin am-text-sm">
												线下支付该订单，确认提交订单？
											</div>
										</div>
										<input type="hidden" name='CelebrationId' value="<?=$id;?>" />
										<button type="button" class="am-u-sm-6 bno gray closem">取消</button>
										<button type="submit" id="sub" class="am-u-sm-6 bno green">提交</button>
									</div>
								</div>
							</div>
							<section data-am-widget="accordion" class="am-accordion am-accordion-gapped am-margin-0" data-am-accordion='{  }'>
								<dl class="am-accordion-item am-active">
									<dt class="am-accordion-title">
									套餐详情
									</dt>
									<dd class="am-accordion-bd am-collapse">
									<div class="am-accordion-content">
										<?php foreach($ceredetails as $key=>$val):?>
											<div class="am-g area">
												<div class="am-u-sm-3"><strong><?=$val['Name'];?></strong></div>
												 <input type="hidden" name="zu[]" value="<?=$val['Sort'];?>"/>
     											<input type="hidden" name="detailsname" value="<?=$cereinfo[0]['name'];?>"/>
												<div class="am-u-sm-9">
													<?php foreach($val['xq'] as $k=>$v):?>
													<div class="am-cf gsf">
														<div class="am-fl"><?=$k+1;?>、<?=$v['Name'];?>/<small><?=$v['Unit'];?></small><span class="price red am-icon-cny"><?=$v['Price'];?></span></div>
														<div class="am-fr">
															<!-- 默认数量单位 -->
															<input type="hidden" class="unit" value="1">

															 <input type="hidden" name="cereid<?=$val['Sort'];?>[]" value="<?=$v['Id']?>" />
															<!-- 数量加减 -->
															<div class="CmNum">
																<span class="reduce am-icon-minus-circle" onclick="handle(this, false)" style="display: inline-block;"></span>
																<input type="text" class="numTxt" name="numbers<?=$val['Sort'];?>[]" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="<?=$v['DefaultNumber'];?>" style="display: inline-block;">
																<span class="add am-icon-plus-circle" onclick="handle(this, true)"></span>
															</div>
														</div>
													</div>
													<?php endforeach;?>
												</div>
											</div>
										<?php endforeach;?>
									</div>
									</dd>
								</dl>
							</section>
						</form>
					</div>
				</div>
				<div class="am-text-center ceremonyCtt">
					<h2>套餐描述</h2>
					<p>    <?php echo str_replace('&nbsp;', ' ',htmlspecialchars_decode($cereinfo[0]['describe'])); ?></p>
				<?php foreach($details as $k=>$val):?>
					<h2><?=$k+1;?>.<?=$val['Name']?></h2>
					<?php foreach($val['Img'] as $v):?>
					<img src="<?=IP.$v['img'];?>">
					<?php endforeach;?>
				<?php endforeach;?>
				</div>
			</div>
		</div>
	</div>

	<script src="skin/js/jquery.min.js"></script>
	<script src="skin/js/num_unit.js"></script>
	<script>
	$(function(){
	var inputs = $('.numTxt');
	inputs.each(function() {
	var numI=$(this).val();
	if(numI == 0){
	$(this).css('display','none');
	$(this).parent('.CmNum').find('.reduce').css('display','none');
	}
	else{
	$(this).css('display','inline-block');
	$(this).parent('.CmNum').find('.reduce').css('display','inline-block');
	}
	});
	$('.makeCheck').click(function(){
	$('.tk').fadeIn(400);
	});
	$('.closem').click(function() {
	$('.tk').fadeOut(400);
	});
		// 	var flag = false;
	// $('.am-accordion-title').click(function(){
		// 	if(!flag){
			// 		$('#my-sticky').css('position','fixed');
			// 		flag = true;
		// 	}else{
			// 		$('#my-sticky').css('position','relative');
			// 		flag = false;
		// 	}
		// 	console.log(flag)
	// })
	});
	</script>
	