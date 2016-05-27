

		<link href="skin/css/city.css" rel="stylesheet" type="text/css" />
	    <style type="text/css">
	        .infolist .liststyle span{
	          width: 30%;
	        }
	        .liststyle>span>i{
	          color: #494949;
	        }
	    </style>
<div class="center">
				<div class="defray">
					<h1>订单支付</h1>
					<form class="am-form am-form-horizontal pay" id="defrayForm">
						<table class="am-table defr_tab middle">
							<thead>
								<tr>
									<th>菜品</th>
									<th>单价</th>
									<th>数量</th>
									<th>总价</th>
								</tr>
							</thead>
							<tbody>
							<?php if(!empty($booking)):?>
								<?php foreach($booking as $val):?>
									<tr>
										<td><div class="defr_tit"><?=$val['foodname'];?></div></td>
										<td>￥ <span class="price"><?=$val['foodprice'];?></span></td>
										<td><div class="jiajian">
											<!-- <img class="jian" src="skin/img/jian.png"> -->
											<input class="shuzhi" value="<?=$postBooking[$val['foodid']];?>" readonly>
											<!-- <img class="jia" src="skin/img/jia.jpg"> -->
										</div>
										</td>
										<td class="defr_sum">￥ <span class="total"><?php if($val['discountproportion']){$a = $val['foodprice']*$val['discountproportion'];}else{$a = $val['foodprice'];}  echo $a * $postBooking[$val['foodid']]; $pricetotal[] = $a * $postBooking[$val['foodid']]; ?></span></td>
									</tr>
								<?php endforeach;?>
							<?php endif;?>
							<!-- 伴餐 -->
							<?php if(!empty($eleginfo)):?>
							<tr>
								<td><div class="defr_tit"><?=$eleginfo['name'];?></div></td>
								<td></td>
								<td></td>
								 <input type="hidden" name="eleg" value="<?php echo $eleginfo['id']; ?>">
							<td class="defr_sum">￥ <span class="total"><?php $elegmoney=$eleginfo['money']; echo $elegmoney;?></span></td>
							</tr>
							<?php endif;?>
							<!-- 伴餐 end-->
							<!-- 庆典 -->
							<?php if(!empty($cerearr)):?>
							<tr>
								<td><div class="defr_tit"><?=$cerearr['name'];?></div></td>
								<td></td>
								<td>1</td>
								<input type="hidden" name="cereid" value="<?php echo $cerearr['celebrationid']; ?>">
							<td class="defr_sum">￥ <span class="total"><?php $ceremoney=$cerearr['moneyall']; echo $ceremoney;?></span></td>
							
							</tr>
							<?php endif;?>
							<!-- 庆典 end-->
							<!-- 服务员 -->
							<?php if(!empty($writes['boy'])):?>
							<tr>
								<td><div class="defr_tit">男服务员</div></td>
								<td></td>
								<td><?=$writes['boy']?></td>
								
							<td class="defr_sum">￥ <span class="total"><?=$writes['boy']*80;?></span></td>
							</tr>
							<?php endif;?>
							<?php if(!empty($writes['girl'])):?>
							<tr>
								<td><div class="defr_tit">女服务员</div></td>
								<td></td>
								<td><?=$writes['girl']?></td>
								
							<td class="defr_sum">￥ <span class="total"><?=$writes['girl']*80;?></span></td>
							</tr>
							<?php endif;?>
							<!-- 服务员 end-->
							<!-- 服务费 -->
							<?php if(!empty($servmoneydata)):?>
							<tr>
								<td><div class="defr_tit">服务费</div></td>
								<td></td>
								<td></td>
								
							<td class="defr_sum">￥ <span class="total"><?=$servmoneydata;?></span></td>
							</tr>
							<?php endif;?>
							<!-- 服务费 end-->
					</tbody>
				</table>
			
				<!-- 服务地址 -->
				<div class="defr_info clear">
					<p>服务地址 <a href="javascript:;" class="fr" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 800}">添加地址</a></p>
					<?php if(!empty($address)):?>
					<div class="payment">
						<table class="am-table am-table-striped am-table-hover myback">
							<thead>
								<tr>
									<th> </th>
									<th>收货人</th>
								<!-- 	<th>所在地区</th> -->
									<th>详细地址</th>
									<th>手机</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach($address as $val):?>
								<tr>
									<td>
										<label class="am-radio am-danger">
											<input type="radio" name="radio3" value="<?=$val['memberaddressid'];?>" data-am-ucheck <?php if($val['isdefault'] == 1){echo "checked";}?>>
										</label>
									</td>
									<td><?=$val['name'];?></td>
									<!-- <td>成都金牛区</td> -->
									<td><?=$val['address'];?></td>
									<td><?=$val['goodsphone'];?></td>
									<td class="adr_cz"><a href="javascript:;" data-am-modal="{target: '#doc-modal-2', closeViaDimmer: 0, width: 800}">修改</a>/<a href="javascript:;">删除</a></td>
								</tr>
								<?php endforeach;?>
							</tbody>
						</table>
					</div>
				<?php endif;?>
				</div>
				<!-- 服务地址 -->
				<div class="defr_info clear">
					<p>服务时间</p>
					<div class="payment">
						<div class="am-g">
						  <div class="am-u-sm-3">
						    选择日期<br/>
						    <p><input type="text" class="am-form-field deData" placeholder="点击选择要服务日期" id="my-start-2" required readonly/></p>
						  </div>
						  <div class="am-u-sm-3">
						    选择时间<br/>
						    <input type="hidden" id="timeEat" name="time" value="">
						    <div class="deTime">
						    	<table class="am-table am-table-bordered am-fl" style="width: 80%;margin-left:5px;">
						          <tbody><tr>
						            <td>10:00</td>
						            <td>11:00</td>
						            <td>11:30</td>
						            <td>12:00</td>
						        </tr>
						        <tr>
						            <td>12:30</td>
						            <td>13:00</td>
						            <td>14:30</td>
						            <td>15:00</td>
						        </tr>
						        <tr>
						            <td>16:00</td>
						            <td>17:00</td>
						            <td>17:30</td>
						            <td>18:00</td>
						        </tr>
						        <tr>
						            <td>18:30</td>
						            <td>19:00</td>
						            <td>19:30</td>
						            <td>20:00</td>
						        </tr>
						          </tbody></table>
						    </div>
						  </div>
						  <div class="am-u-sm-1"></div>
						</div>
					</div>
				</div>
				<div class="home_buy">
					<p><span>优惠方式</span></p>
					<!-- <label class="am-checkbox am-danger xz_yhj">
						<input type="checkbox" value="" data-am-ucheck> <p><img src="skin/img/xzzf_03.png">您有三张饭票可用</p>
					</label> -->
<?php 
 	// 总金额
	if($pricetotal){$money = array_sum($pricetotal); }else{$money = 0;} 
	if(isset($elegmoney)){$eleg = $elegmoney;}else{$eleg = '0';}
	if(isset($ceremoney)){$cere = $ceremoney;}else{$cere = '0';}
	$moneyall =  $money + array_sum($writes)*80 + $servmoneydata + $cere + $eleg;
    // 优惠卷
    $fan = file_get_contents(POSTAPI."API_UserCoupon?UserPhone=".$_SESSION['phone']);
    $userphone = json_decode(json_decode($fan),true);
    if(!empty($userphone)){
      foreach ($userphone as $key => $value) {
          if($moneyall > $value['usethreshold']){
              $usercoupon[$key] = $value;
          }
      } 
    }
  ?>
					
					<div class="payment">
						<div class="am-panel-group" id="accordion">
						<?php if(!empty($usercoupon)):?>
							<div class="am-panel am-panel-default">
								<div class="am-panel-hd">
									<h4 class="am-panel-title" data-am-collapse="{target: '#do-not-say-1'}">
									使用饭票(可用饭票<?=count($usercoupon);?>张)
									</h4>
								</div>
								<div id="do-not-say-1" class="am-panel-collapse am-collapse">
									<div class="am-panel-bd">
										<ul class="am-avg-sm-4 defray_cart">
											<?php foreach($usercoupon as $v):?>
											<li>
												<label class="am-checkbox am-danger">
													<input class="conponList" type="radio" name="conpon" value="<?=$v['usercouponid'];?>" data-am-ucheck>
													<div class="coupon_bg coupon_pic1">
														<h1>￥<span class="fanPrice"><?=$v['coupponmoney'];?></span></h1>
														<p>优惠卷名称: <?=$v['coupponname'];?></p>
														<p>使用条件: 满<?=$v['usethreshold'];?></p>
														<p>有效时间: <?=str_replace('-', '.', substr($v['begintime'], 0,10));?>~<?=str_replace('-', '.', substr($v['endtime'], 0,10));?></p>
													</div>
												</label>
											</li>

											<?php endforeach;?>
										
										</ul>
										
									</div>
								</div>
							</div>
						<?php endif;?>
						<?php var_dump($jifen); ?>
							<div class="am-panel am-panel-default">
								<div class="am-panel-hd">
									<h4 class="am-panel-title" data-am-collapse="{target: '#do-not-say-2'}">
									使用积分
									</h4>
								</div>
								<div id="do-not-say-2" class="am-panel-collapse am-collapse">
									<div class="am-panel-bd">
										<label class="am-checkbox am-danger">
											<input id="canjifen" type="checkbox" name="conpon" value="" data-am-ucheck>
											<span class="am-text-danger">使用<?=$jifen;?>积分可抵￥<span class="jifen">3000</span></span>
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="defr_info clear">
						<p>选择支付方式</p>
						<div class="payment">
								<label class="am-radio am-danger">
										<input type="radio" name="price" value="" data-am-ucheck> Apple Pay
								</label> 
								<label class="am-radio am-danger">
										<input type="radio" name="price" value="" data-am-ucheck checked> 微信支付
								</label>
								<label class="am-radio am-danger">
										<input type="radio" name="price" value="" data-am-ucheck> 支付宝支付
								</label>
								<label class="am-radio am-danger">
										<input type="radio" name="price" value="" data-am-ucheck> 线下支付
								</label>
						</div>
				</div>
				</div>
				<p class="defr_he">应付金额: <span>￥<i id="sum">60.59</i></span></p>
				<p class="txt-r ord_buy">
					<input type="submit" id="pay" value="付款" class="am-btn am-btn-danger am-radius big-btn" disabled/>
					<!-- <a href="<?=site_url('shopcar/succeed');?>" class="am-btn am-btn-danger am-radius big-btn">付款</a> -->
					<br/>
					<a href="<?=site_url('shopcar/car');?>">返回修改订单</a>
				</p>
			</form>
		</div>
	</div>
<!-- 添加地址弹出框 -->
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
	<div class="am-modal-dialog">
		<div class="am-modal-hd txt-l"> <b>添加地址</b>
			<a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
		</div>
		<div class="am-modal-bd">
			<form class=" am-form clear phone_yz">
				<div class="am-form-group clear">
					<label class="am-u-sm-3 am-form-label txt-r"> 姓名</label>
					<div class="am-u-sm-9 txt-l sm-input">
						<input type="text" required />
					</div>
				</div>
				<div class="am-form-group clear">
					<label class="am-u-sm-3 am-form-label txt-r"> 所在地区</label>
					<div class="am-u-sm-9 txt-l">
						<div class="demo">
                            <div class="infolist">
                              <div class="liststyle">
                                <span id="Province" style="display:none;">
                                  <i>请选择省份</i>
                                  <ul>
                                    <li><a href="javascript:void(0)" alt="请选择省份">请选择省份</a></li>
                                  </ul>
                                  <input type="hidden" name="cho_Province" value="请选择省份">
                                </span>
                                <span id="City">
                                  <i>请选择城市</i>
                                  <ul>
                                    <li><a href="javascript:void(0)" alt="请选择城市">请选择城市</a></li>
                                  </ul>
                                  <input type="hidden" name="cho_City" value="请选择城市">
                                </span>
                                <span id="Area">
                                  <i>请选择地区</i>
                                  <ul>
                                    <li><a href="javascript:void(0)" alt="请选择地区">请选择地区</a></li>
                                  </ul>
                                  <input type="hidden" name="cho_Area" value="请选择地区" >
                                </span>
                                <span id="Insurer">
                                  <i>请选择乡镇街道</i>
                                  <ul>
                                    <li><a href="javascript:void(0)" alt="请选择乡镇街道">请选择乡镇街道</a></li>
                                  </ul>
                                  <input type="hidden" name="cho_Insurer" value="请选择乡镇街道">
                                </span>
                              </div>
                            </div>
                          </div>
					</div>
				</div>
				<div class="am-form-group clear">
					<label class="am-u-sm-3 am-form-label txt-r"> 详细地址</label>
					<div class="am-u-sm-9 txt-l">
						<textarea rows="5" required></textarea>
					</div>
				</div>
				<div class="am-form-group clear">
					<label class="am-u-sm-3 am-form-label txt-r"> 手机号</label>
					<div class="am-u-sm-9 txt-l sm-input">
						<input type="tel" required class="phone" />
						<span></span>
					</div>
				</div>
				<div class="am-form-group">
					<div class="am-u-sm-9 am-u-sm-offset-3 txt-l">
						<button type="submit" class="am-btn am-btn-secondary">保存</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- 修改地址弹出框 -->
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-2">
	<div class="am-modal-dialog">
		<div class="am-modal-hd txt-l"> <b>添加地址</b>
			<a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
		</div>
		<div class="am-modal-bd">
			<form class=" am-form clear phone_yz">
				<div class="am-form-group clear">
					<label class="am-u-sm-3 am-form-label txt-r"> 姓名</label>
					<div class="am-u-sm-9 txt-l sm-input">
						<input type="text" required value="张某某" />
					</div>
				</div>
				<div class="am-form-group clear">
					<label class="am-u-sm-3 am-form-label txt-r"> 所在地区</label>
					<div class="am-u-sm-9 txt-l">
						<div class="demo">
                            <div class="infolist">
                              <div class="liststyle">
                                <span id="Province1" style="display:none;">
                                  <i>请选择省份</i>
                                  <ul>
                                    <li><a href="javascript:void(0)" alt="请选择省份">请选择省份</a></li>
                                  </ul>
                                  <input type="hidden" name="cho_Province" value="请选择省份">
                                </span>
                                <span id="City1">
                                  <i>请选择城市</i>
                                  <ul>
                                    <li><a href="javascript:void(0)" alt="请选择城市">请选择城市</a></li>
                                  </ul>
                                  <input type="hidden" name="cho_City" value="请选择城市">
                                </span>
                                <span id="Area1">
                                  <i>请选择地区</i>
                                  <ul>
                                    <li><a href="javascript:void(0)" alt="请选择地区">请选择地区</a></li>
                                  </ul>
                                  <input type="hidden" name="cho_Area" value="请选择地区">
                                </span>
                                <span id="Insurer1">
                                  <i>请选择乡镇街道</i>
                                  <ul>
                                    <li><a href="javascript:void(0)" alt="请选择乡镇街道">请选择乡镇街道</a></li>
                                  </ul>
                                  <input type="hidden" name="cho_Insurer" value="请选择乡镇街道">
                                </span>
                              </div>
                            </div>
                          </div>
					</div>
				</div>
				<div class="am-form-group clear">
					<label class="am-u-sm-3 am-form-label txt-r"> 详细地址</label>
					<div class="am-u-sm-9 txt-l">
						<textarea rows="5" required>西安路街道20街道某某巷子</textarea>
					</div>
				</div>
				<div class="am-form-group clear">
					<label class="am-u-sm-3 am-form-label txt-r"> 手机号</label>
					<div class="am-u-sm-9 txt-l sm-input">
						<input type="tel" required value="15608097597" class="phone" />
						<span></span>
					</div>
				</div>
				<div class="am-form-group">
					<div class="am-u-sm-9 am-u-sm-offset-3 txt-l">
						<button type="submit" class="am-btn am-btn-secondary">保存</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- 提交提示 -->
<div class="am-modal am-modal-alert" tabindex="-1" id="my-alert">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">提示</div>
    <div class="am-modal-bd">
      您还没有添加服务地址地址
    </div>
    <div class="am-modal-footer">
      <span class="am-modal-btn">确定</span>
    </div>
  </div>
</div>
<script src="skin/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="skin/js/defray.js"></script>
<script type="text/javascript" src="skin/js/city4.city.js"></script>
<script type="text/javascript" src="skin/js/city4.js"></script>
<script type="text/javascript">
$(function(){
  $.fn.citySelect({setId:['#Province1' , '#City1' , '#Area1','#Insurer1']})
})
</script>
<script>

// Form提交
$('#defrayForm').bind('submit',function(){
	console.log($('.adr_cz').length == 0)
	if($('.adr_cz').length == 0){
		$('#my-alert').modal();
		return false;
	}
	else{
		return true;
	}
	return false;
})

  $(function() {
    var nowTemp = new Date();
    var nowDay = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0).valueOf();
    var nowMoth = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), 1, 0, 0, 0, 0).valueOf();
    var nowYear = new Date(nowTemp.getFullYear(), 0, 1, 0, 0, 0, 0).valueOf();
    var $myStart2 = $('#my-start-2');

    var checkin = $myStart2.datepicker({
      onRender: function(date, viewMode) {
        // 默认 days 视图，与当前日期比较
        var viewDate = nowDay;

        switch (viewMode) {
          // moths 视图，与当前月份比较
          case 1:
            viewDate = nowMoth;
            break;
          // years 视图，与当前年份比较
          case 2:
            viewDate = nowYear;
            break;
        }
        
        return date.valueOf() < viewDate ? 'am-disabled' : '';
      }
    }).live('changeDate.datepicker.amui', function(ev) {
        if (ev.date.valueOf() > checkout.date.valueOf()) {
          var newDate = new Date(ev.date)
          newDate.setDate(newDate.getDate() + 1);
          checkout.setValue(newDate);
        }
        checkin.close();
    }).data('amui.datepicker');
    
  });
  	var html;
	var date = new Date();
	var month = date.getMonth() + 1;
	var m =(month <10) ? '0'+month : month;
    month = m;
	var day = date.getDate();        
	var d =(day <10) ? '0'+day : day;
    day=d;
	var year = date.getFullYear(); 
	var hour = date.getHours()+2;
	var minutes = date.getMinutes();
	var b =(minutes <10) ? '0'+minutes : minutes;
	minutes =b;
	var curTime = hour+":"+minutes;  
	html=year+'-'+month+'-'+day;
	$('.deData').val(html);
	$('.deTime td').each(function(){ 
      if($(this).html()>curTime){
        $(this).addClass('can');
      }else{
        $(this).attr({
          disabled: 'disabled'
        });
        $(this).css('color','#eee')
      }
    });
	$('.deTime td.can').live('click',function(event) { 
		$('#pay').removeAttr('disabled');
		$('td').removeClass('am-danger');
		$(this).addClass('am-danger');
		$('#timeEat').val($(this).html());
    });

  $('.deData').change(function(){
  	if($(this).val() == ''){
  	}else{
  		if($(this).val() == html){
  			$('.deTime td').removeClass('can am-danger');
  			$('#pay').attr('disabled','disabled');
  			$('.deTime td').each(function(){ 
		      if($(this).html()>curTime){
		        $(this).addClass('can');
		      }else{
		        $(this).attr({
		          disabled: 'disabled'
		        });
		        $(this).css('color','#eee');
		      }
		    });
  		}else{
  			$('.deTime td').css('color','').removeAttr('disabled').addClass('can');
  		}
  	}
  	
  })
</script>
