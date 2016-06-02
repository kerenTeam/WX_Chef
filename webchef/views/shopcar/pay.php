<?php
/**
 * @Author: Harris-Aaron
 * @Date:   2016-05-27 16:16:16
 * @Last Modified by:   Harris-Aaron
 * @Last Modified time: 2016-06-02 17:27:52
 */

ini_set('date.timezone','Asia/Shanghai');

$notify = new NativePay();
$input = new WxPayUnifiedOrder();
$input->SetBody("大厨到家订餐支付");
$input->SetAttach("大厨到家－微信支付");
$input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis"));
$monyAll = sprintf("%.2f",substr(sprintf("%.3f", $isOrderOk['0']['MoneyAll']), 0, -2)) * 100;
$input->SetTotal_fee('1');
$input->SetTime_start(date("YmdHis"));
$input->SetTime_expire(date("YmdHis", time() + 36000));
$input->SetGoods_tag("大厨到家－微信支付");
$bcUrl = "http://" . $_SERVER['SERVER_NAME'] . "/WXTEST2/web.php/orderWxPay/notify";
$input->SetNotify_url($bcUrl);  
$input->SetTrade_type("NATIVE");
$input->SetProduct_id($isOrderOk['0']['POOrderId']); 
$result = $notify->GetPayUrl($input);


// echo " <pre>";
// var_dump($input);
// var_dump($result);
// var_dump($isOrderOk);
// echo "</pre>";


$url2 = $result["code_url"];
?>

<div class="am-modal am-modal-alert" tabindex="-1" id="doc-modal-1">
  <div class="am-modal-dialog">
    <div class="am-modal-hd"><i class="am-icon-check text-center am-text-xxxl am-text-success"></i>支付成功</div>
    <div class="am-modal-bd">
      <span id="time">3</span>秒后将跳转到首页，或<a style="color: red;" href="<?=site_url('home/add');?>">点击</a>继续点菜
    </div>
  </div>
</div>
<div class="payCtt">
	<h1><img src="skin/img/LOGO-ug_03.png">收银台</h1>
	<div class="am-cf payInfo">
		<div class="am-fl am-padding-sm">
			<p>订单编号: <?php $_SESSION['thisPOOrderId'] = $isOrderOk['0']['POOrderId']; echo  $isOrderOk['0']['POOrderId']; ?></p>
			<p>订单类型: 在线支付</p>
		</div>
		<div class="am-fr am-padding-sm">
			<span>应付金额 : <strong>￥ <?php echo sprintf("%.2f",substr(sprintf("%.3f", $isOrderOk['0']['MoneyAll']), 0, -2));  ?></strong></span>
		</div>
	</div>
	<div class="payCan">
		<div class="am-tabs" id="doc-my-tabs">
			<ul class="am-tabs-nav am-nav am-nav-tabs am-nav-justify">
				<li class="am-active"><a href="javascript:;">微信支付 <img class="payHot" alt="" src="skin/img/tuijian.png"></a></li>
				<li><a href="javascript:;">会员卡</a></li>
				<li><a href="javascript:;">ApplePay</a></li>
				<li><a href="javascript:;">支付宝</a></li>
				<li><a href="javascript:;">线下支付</a></li>
			</ul>
			<div class="am-tabs-bd payCanCtt ">

				<div class="am-tab-panel am-active">
					<div class="payCanCtt">
						<img class="wxPayLogo" src="skin/img/WePayLogo.png">
						<div class="wxErweima">
							<img src="http://paysdk.weixin.qq.com/example/qrcode.php?data=<?php echo urlencode($url2);?>">
							<br>
							<img src="skin/img/wxpaycap.png">
						</div>
					</div>
					
				</div>

				<div class="am-tab-panel">
					<div class="wxErweima">
						<p class="huiyuanka">您的余额: <strong>￥ 1000</strong></p>
						<button type="button" class="am-btn am-btn-danger">确定</button>
					</div>
				</div>

				<div class="am-tab-panel">
					<div  class="wxErweima">暂未开通</div>
				</div>
				<div class="am-tab-panel">
					<div  class="wxErweima">暂未开通</div>
				</div>
				<div class="am-tab-panel">
					<div  class="wxErweima">
						<p>确认线下支付，稍后客服人员将与您联系！</p>
						<button type="button" class="am-btn am-btn-danger">线下支付</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<button
  id="okBtn"
  type="button"
  class="am-btn am-btn-primary am-hide"
  data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0}">
</button>


<script type="text/javascript" src="skin/js/jquery.min.js"></script>
<script type="text/javascript" src="skin/js/amazeui.min.js"></script>
<script>
  $(function() {
    $('#doc-my-tabs').tabs();
  })
</script>
<script> 
	//循环执行，每隔3秒钟执行一次showalert（） 
	$(function(){
		var goback = setInterval(showalert, 3000);
		function showalert() 
		{ 
			var isPay = '<?php curl_post(POSTAPI.'API_Poorder?dis=state'); ?>';	  
			if (isPay == 1) {
				// 扫码成功弹出层
				$('#okBtn').click();
				clearInterval(goback);
				// 三秒跳转
				var time = $('#time').html();
	     		var go = setInterval(function(){
	     			time--;
	     			$('#time').html(time)
	     			if(time <= 0){
	     				location.href = "<?=site_url('shopcar/okPay');?>";
	     				clearInterval(go);
	     			}
	     		},1000);
			}
		} 
	})
	
</script>


