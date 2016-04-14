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
       // $this->load->library('WXLog');
        $this->load->view('header');
	}

//订单
    public function order()
    {
    	if ($_POST)
    	{ $data['postBooking'] = array_combine($this->input->post('foodid'),$this->input->post('numbers')); }
        var_dump($data['postBooking']); exit;
    	$data['booking'] = $_SESSION['booking'];
 		$this->load->view('order/order',$data);
	}
//支付订单
    public function payOrder()
    {
    	$foodid = $this->input->post('foodid');
    	$numbers = $this->input->post('numbers');
    	$foodOrder = array_combine($foodid,$numbers);
    	$foodJson = array();
        foreach ($foodOrder as $fid => $fnums)
        { $foodJson[] = "{'FoodId':"."'".$fid."'".","."'FoodNumber':"."'".$fnums."'"."}"; }

        $foodJsondata['UserPhone'] = $this->input->post('UserPhone');
        $foodJsondata['UserCouponId'] = $this->input->post('UserCouponId');
        $foodJsondata['MenberAddressId'] = $this->input->post('memberaddressid');
        $foodJsondata['PaymentMethod'] = '';
        $foodJsondata['poorderentry'] = $foodJson;
       
        $abc = str_replace('"{"','{"',str_replace('"}"','"}',str_replace('}"]','}]',str_replace('["{','[{',str_replace("'",'"',json_encode($foodJsondata))))));
     
        //var_dump($abc); exit; 

		$this->load->view('payOrder');
	}	
}
 ?>
