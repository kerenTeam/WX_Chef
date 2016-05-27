<?php
/**
 * @Author: Harris-Aaron
 * @Date:   2016-05-27 16:16:16
 * @Last Modified by:   Harris-Aaron
 * @Last Modified time: 2016-05-27 17:38:30
 */

ini_set('date.timezone','Asia/Shanghai');

$notify = new NativePay();
$input = new WxPayUnifiedOrder();
$input->SetBody("大厨到家订餐支付");
$input->SetAttach("大厨到家－微信支付");
$input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis"));
$input->SetTotal_fee("1");
$input->SetTime_start(date("YmdHis"));
$input->SetTime_expire(date("YmdHis", time() + 36000));
$input->SetGoods_tag("大厨到家－微信支付");
$bc = "http://" . $_SERVER['SERVER_NAME'] . "/WXTEST2/webchef/views/WxPay/notify.php";
$input->SetNotify_url($bc);
$input->SetTrade_type("NATIVE");
$input->SetProduct_id("123456789");
$result = $notify->GetPayUrl($input);
// echo " <pre>";
// var_dump($input);
// var_dump($result);
// echo "</pre>";
$url2 = $result["code_url"];
?>


	<center><img style="width:18em;" alt="模式二扫码支付" src="http://paysdk.weixin.qq.com/example/qrcode.php?data=<?php echo urlencode($url2);?>"/></center>
