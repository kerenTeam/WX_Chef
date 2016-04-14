<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class orderWXPay extends CI_Controller{
	function __construct()
	{
        parent::__construct();
        // * 引入config配置项
        // $this->config->load('wechat');
        // $options = $this->config->item('wechat');
        // $options['logcallback'] = 'logdebug';
        // * 引入自定义lib
        $this->load->library('WxPayApi');
        $this->load->library('JsApiPay'); 
        $this->load->library('Tool');
        $this->load->view('header');
        $this->load->helper('post_helper');
	}

//订单
    public function order()
    {
    	if ($_POST)
    	{
    	$_SESSION['postBooking'] = array_combine($this->input->post('foodid'),$this->input->post('numbers')); }
    	if(isset($_SESSION['phone'])){
    		// 获取可用饭票
    		$fan = file_get_contents(POSTAPI."API_UserCoupon?UserPhone=".$_SESSION['phone']);
    		$data['usercoupon'] = json_decode(json_decode($fan),true);
    		// 获取积分

    		$data['jifen'] = file_get_contents(POSTAPI."API_User?dis=jf&UserPhone=".$_SESSION['phone']);
    	
    		//获取用户默认地址、
    		$address = file_get_contents(POSTAPI."API_MenberAddress?dis=default&value=".$_SESSION['phone']);
    		$data['address'] = json_decode(json_decode($address),true);

    	}
    	$data['booking'] = $_SESSION['booking'];
    	$data['postBooking'] = $_SESSION['postBooking'];
 	$this->load->view('order/order',$data);
	}
//支付订单
	public function payOrder()
	{
		$foodid = $this->input->post('foodid');
    	$numbers = $this->input->post('numbers');
    	if(!$this->input->post('couponid')){
    		$couponid = ' ';
    	}else{
    		$couponid = $this->input->post('couponid');
    	}
    	// var_dumP($couponid);
    	$foodOrder = array_combine($foodid,$numbers);
    	$foodJson = array();
		 foreach ($foodOrder as $fid => $fnums)
        { $foodJson[] = "{'FoodId':"."'".$fid."'".","."'FoodNumber':"."'".$fnums."'"."}"; }
  		// print_r($foodJson) ;
    	$foodJsondata['UserPhone'] = $this->input->post('UserPhone');
        $foodJsondata['UserCouponId'] = $couponid;
        $foodJsondata['MenberAddressId'] = $this->input->post('memberaddressid');
        $foodJsondata['PaymentMethod'] = ' ';
        $foodJsondata['Integral'] = '0';
        $foodJsondata['poorderentry'] = $foodJson;
        $abc = str_replace('"{"','{"',str_replace('"}"','"}',str_replace('}"]','}]',str_replace('["{','[{',str_replace("'",'"',json_encode($foodJsondata))))));     	
        $this->load->view('payOrder');
	}
//订单支付完成,数据提交向后台	
    public function postOrderData()
    {
    	$cai = curl_post(POSTAPI."API_Poorder?dis=dd",$abc);
     	$_info = '订单已确定,请稍作等待！';
     	$_url  = site_url('home/');
     	alertLocation($_info, $_url);
    }
}
 ?>
