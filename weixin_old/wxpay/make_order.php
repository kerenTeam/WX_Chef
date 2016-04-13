<?php

header("Content-type: text/html; charset=utf-8");

include_once "../config/config.php"; //config

   $id = $_GET['id'];

   /*CAED DATE*/
   $casedate = $pdo->query("SELECT * FROM wx_xccard where id = $id");
   $C = $casedate->fetch(PDO::FETCH_ASSOC);

/*
 *  获取用户数据
 */

    //定义与获取数据
    $appid = "wxb7b2ba9884d3f463";//AppID(应用ID)
    $secret = "07f4e33e10347243c99f3fc34f984ff4"; //AppSecret(应用密钥)
    $code = $_GET['code'];

    //获取access_token 用户令牌
    $url="https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appid."&secret=".$secret."&code=".$code."&grant_type=authorization_code";
    $res =json_decode(file_get_contents($url));
    $openId= $res->openid;
    $_token = $res->access_token;

    //获取用户数据
    $url2='https://api.weixin.qq.com/sns/userinfo?access_token='.$_token.'&openid='.$openId.'&lang=zh_CN';
    $res2 = json_decode(file_get_contents($url2));
	//echo "<pre>";
    //echo print_r($res2);
	$openid = $res2->openid;
	$nikename = $res2->nickname;
	$headimgurl = $res2->headimgurl;




/*
 *  JSAPI支付
 */

	ini_set('date.timezone','Asia/Shanghai');
	//error_reporting(E_ERROR);
	require_once "../lib/WxPay.Api.php";
	require_once "WxPay.JsApiPay.php";
	require_once 'log.php';

	//初始化日志
	$logHandler= new CLogFileHandler("../logs/".date('Y-m-d').'.log');
	$log = Log::Init($logHandler, 15);

	//打印输出数组信息
	function printf_info($data)
	{
		foreach($data as $key=>$value){
			echo "<font color='#00ff55;'>$key</font> : $value <br/>";
		}
	}

	//①、获取用户openid
	$tools = new JsApiPay();
	//$openId = $tools->GetOpenid(); //原来的方法
	$openId= $res->openid; //为了实现兼容，这里使用了 上面获取用户数据的 方法

	//②、统一下单
	$input = new WxPayUnifiedOrder();
	$input->SetBody($C['cardname']);
	$input->SetAttach($C['cardname']);
	$input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis"));
	$input->SetTotal_fee($C['price']*100);
	$input->SetTime_start(date("YmdHis"));
	$input->SetTime_expire(date("YmdHis", time() + 600));
	$input->SetGoods_tag($cardname);
	$input->SetNotify_url("http://www.baidu.com");
	$input->SetTrade_type("JSAPI");
	$input->SetOpenid($openId);
	$order = WxPayApi::unifiedOrder($input);
	//echo '<font color="#f00"><b>统一下单支付单信息</b></font><br/>';
	//printf_info($order);
	//echo $order['prepay_id'];
	//echo $order['nonce_str'];

	$jsApiParameters = $tools->GetJsApiParameters($order);
  //echo "<pre>";
  //var_dump($jsApiParameters); exit;

	//获取共享收货地址js函数参数
	//$editAddress = $tools->GetEditAddressParameters();
?>




<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>预约</title>
  <link rel="stylesheet" href="../../public/home/css/amazeui.min.css">
  <link rel="stylesheet" href="../../public/home/css/app.css">
  <link rel="stylesheet" href="../../public/home/css/index.css">
  <link rel="stylesheet" href="../../public/home/css/font-awesome.css">
  <link rel="stylesheet" href="../../public/home/css/wx.css">

      <script type="text/javascript">
	//调用微信JS api 支付



	function jsApiCall()
       {
           WeixinJSBridge.invoke(
               'getBrandWCPayRequest',
               <?php echo $jsApiParameters; ?>,
               function(res){
                   WeixinJSBridge.log(res.err_msg);

                   if (res.err_msg == "get_brand_wcpay_request:ok") {
					   //alert(res.err_msg);
					   makeform.submit();
                      }else if (res.err_msg == "get_brand_wcpay_request:cancel") {
						alert("已取消微信支付,你可选择 线上预约,线下支付");
                    }

               }
           );
       }



	function callpay()
	{
		if (typeof WeixinJSBridge == "undefined"){
		    if( document.addEventListener ){
		        document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
		    }else if (document.attachEvent){
		        document.attachEvent('WeixinJSBridgeReady', jsApiCall);
		        document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
		    }
		}else{
		    jsApiCall();
		}
	}

	window.onload = function(){
		if (typeof WeixinJSBridge == "undefined"){
		    if( document.addEventListener ){
		        document.addEventListener('WeixinJSBridgeReady', editAddress, false);
		    }else if (document.attachEvent){
		        document.attachEvent('WeixinJSBridgeReady', editAddress);
		        document.attachEvent('onWeixinJSBridgeReady', editAddress);
		    }
		}else{
			editAddress();
		}
	};

	</script>





</head>
<body>


<div class="am-g" style="margin-top:15px;">
  <div class="am-u-md-8 am-u-sm-centered">





    <form action="../function/mkorderAction.php?action=addorder" onsubmit="return ifpost();" method="POST"  role="form" id="makeform" name="makeform" class="am-form">
      <label for="doc-ta-1">预约信息</label>
      <fieldset class="am-form-set">

        姓名：<input type="text" id="username" name="username" class="username" required>
        手机号：<input type="text"  id="phone-number" name="phonenumber" class="phone-number" onblur="check(this)" pattern="^1((3|4|5|8){1}\d{1}|70)\d{8}$" required>
        车牌号：<input type="text" id="carid" name="carid" class="carid" onblur="checkId(this)" pattern="^[\u4E00-\u9FA5][\da-zA-Z]{6}$" required>
        车型：<input type="text" id="car" name="cartype" class="car" required >


        <input type="hidden" id=" " name="openid"  value="<?php echo $openid;?>" class="car-color" required >
        <input type="hidden" id=" " name="nikename" value="<?php echo $nikename;?>" class="address" required>
        <input type="hidden" id=" " name="headimgurl" value="<?php echo $headimgurl;?>" class="car-inside" placeholder="头像headimgurl" required>


        <input type="hidden" id="car-color" name="cardname" value="<?php echo $C['cardname'];?>" >
        <input type="hidden" id="car-color" name="numbers" value="<?php echo $C['numbers'];?>"  >
        <input type="hidden" id="address" name="price" value="<?php echo $C['price'] ;?>" >
        <input type="hidden" id="car-inside" name="prepay" value="<?php echo $order['prepay_id'];?>" >
        <input type="hidden" id=" " name="nonce"  value="<?php echo $order['nonce_str'];?>"  >
      </fieldset>
      <label>VIP卡类型</label>
      <br>

       <div class="am-g doc-am-g am-card am-card-list" style="margin-bottom:20px;" >

                          <div class="am-u-sm-7 am-u-md-7 am-u-lg-7">
                          <img src="<?php  echo $C['cardpic'];?>" class="am-img-responsive">
                          </div>

                          <div class="am-u-sm-5 am-u-md-5 am-u-lg-5 am-u-txt">
                          <span><?php  echo $C['cardname'];?></span>
                          <br>
                          <span>次数:<?php  echo $C['numbers'];?>次</span>  <br>
                          <span>价格:<?php  echo $C['price'];?>元</span>
                          </div>
        </div>



      <a onclick="input()"class="am-btn am-btn-warning am-btn-block ordertop" style="margin-top:25px;margin-bottom:10px;"> 购买并预约 </a>

    </form>
  </div>
</div>
</body>
<script src="../../public/home/js/formCheck.js"></script>
</html>
