<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ini_set('date.timezone','Asia/Shanghai');
error_reporting(E_ERROR);

//将微信服务器支付成功的xml数据获取并转化为json
$resultData = json_encode(json_decode(json_encode(simplexml_load_string(file_get_contents('php://input'), 'SimpleXMLElement', LIBXML_NOCDATA)), true));

// class PayNotifyCallBack extends WxPayNotify
// {
// 	//查询订单
// 	public function Queryorder($transaction_id)
// 	{
// 		$input = new WxPayOrderQuery();
// 		$input->SetTransaction_id($transaction_id);
// 		$result = WxPayApi::orderQuery($input);
// 		if(array_key_exists("return_code", $result)
// 			&& array_key_exists("result_code", $result)
// 			&& $result["return_code"] == "SUCCESS"
// 			&& $result["result_code"] == "SUCCESS")
// 		{
// 			return true;
// 		}
// 		return false;  //false  取得数据后微信服务器将不再发送返回数据给你，true 则会一直发送给你直到到timeOut
// 	}
// }
var_dump($_SESSION['thisPOOrderId']);

class PayNotifyCallBack extends WxPayNotify
{	
	  // public $WxPayNotify;
   //    public $CI_Controller;

   //    function _construct(WxPayNotify $WxPayNotify,CI_Controller $CI_Controller)
   //    {
   //       $this->WxPayNotify=$WxPayNotify;
   //       $this->CI_Controller=$CI_Controller;
   //    }
   //    function getSession()
   //    {
   //    	$_SESSION['thisPOOrderId'];
   //    }
	//查询订单
	public function Queryorder($transaction_id)
	{
		$input = new WxPayOrderQuery();
		$input->SetTransaction_id($transaction_id);
		$result = WxPayApi::orderQuery($input);
		if(array_key_exists("return_code", $result)
			&& array_key_exists("result_code", $result)
			&& $result["return_code"] == "SUCCESS"
			&& $result["result_code"] == "SUCCESS")
		{
			return true;
		}
		return false;  //false  取得数据后微信服务器将不再发送返回数据给你，weixintrue 则会一直发送给你直到到timeOut
	}
}


$notify = new PayNotifyCallBack();
// file_put_contents('./PayOk.json', $_SESSION['thisPOOrderId'].ABCD, FILE_APPEND | LOCK_EX);

//取出 transaction_id 值
$transaction = json_decode($resultData,true);
$transaction_id = $transaction['transaction_id'];

//验证订单支付状态   json里面有 "trade_state":"SUCCESS" 就是支付成功
$result_transaction_id = PayNotifyCallBack::Queryorder($transaction_id);   

//数据保存在json里面
$result_transaction_id_array = json_decode($result_transaction_id,true);
//追加你的商品订单号到json数据
$result_transaction_id_array['thisPOOrderId'] = $_SESSION['thisPOOrderId'];
$result_transaction_id_json = json_encode($result_transaction_id_array);
//写数据到PayOk.json 文件
file_put_contents('./PayOk.json', $result_transaction_id_json, FILE_APPEND | LOCK_EX);
//把支付成功的数据发送给数据库，修改数据库该订单的状态
if ($result_transaction_id_array['trade_state']) {
	$isPayOk=curl_post(POSTAPI.'API_Poorder?dis=state','{"POOrderId":"'.$_SESSION['thisPOOrderId'].'","State":1}');
}else{
	$isPayOk=curl_post(POSTAPI.'API_Poorder?dis=state','{"POOrderId":"'.$_SESSION['thisPOOrderId'].'","State":0}');
}

$notify->Handle(true);