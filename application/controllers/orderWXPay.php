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
        $this->load->helper('post_helper');
        $this->load->view('header'); 
	}
   

//订单
    public function order(){
    	if ($_POST){
            if(!isset($_SESSION['phone'])){
                echo "<script>alert('你还没有登陆！');window.location.href='".site_url('home/login')."';</script>";
            }else{   
                if($_SESSION['phone'] == NULL){
                    echo "<script>alert('你还没有登陆！');window.location.href='".site_url('home/login')."';</script>";
                }else{
                    if ($this->input->post('servmoneydata')) {
                       $_SESSION['servmoneydata'] = $this->input->post('servmoneydata');
                    }else{
                       $_SESSION['servmoneydata'] = 45;
                    }
                    $_SESSION['Writes'] = $this->input->post('Writes');
                    $_SESSION['postBooking'] = array_combine($this->input->post('foodid'),$this->input->post('numbers')); 
            	    if(isset($_SESSION['phone'])){
                		// 获取积分
                		$data['jifen'] =json_decode(file_get_contents(POSTAPI."API_User?dis=jf&UserPhone=".$_SESSION['phone']));
                		//获取用户默认地址、
                		$address = file_get_contents(POSTAPI."API_MenberAddress?dis=default&value=".$_SESSION['phone']);
                		$data['address'] = json_decode(json_decode($address),true);
            	    }
                    $data['servmoneydata'] = $_SESSION['servmoneydata'];
                    $data['booking'] = $_SESSION['booking'];
                	$data['writes'] = $_SESSION['Writes'];
                	$data['postBooking'] = $_SESSION['postBooking'];
             	    $this->load->view('order/order',$data);
                }
            }
        }
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
        $foodJsondata['MoneyAll'] = $this->input->post('yfje');
        $foodJsondata['Integral'] = '0';
        $foodJsondata['WaiterId'] = $this->input->post('Waiters');
        if ($this->input->post('Waiters')) {
            $foodJsondata['WaiterId'] = $this->input->post('Waiters');
        }else{
             $foodJsondata['WaiterId'] = 0;
        }
        
        $foodJsondata['UserCouponId'] = $this->input->post('couponid');
        $foodJsondata['MenberAddressId'] = $this->input->post('memberaddressid');
        $foodJsondata['PaymentMethod'] = ' ';
        $foodJsondata['poorderentry'] = $foodJson;

        //将order所有数据转为josn
        $data['OrderAllData'] = str_replace('"{"','{"',str_replace('"}"','"}',str_replace('}"]','}]',str_replace('["{','[{',str_replace("'",'"',json_encode($foodJsondata))))));
        //得到支付金额     	
        $isComedeOrder = curl_post(POSTAPI."API_Poorder?dis=dd",$data['OrderAllData']);
        $_SESSION['rePayData'] = str_replace(']"',']',str_replace('"[','[',str_replace('\"','"',$isComedeOrder)));

 
        $this->load->view('order/payOrder');
	}
//跳转兼容
    public function jumpLink()
    {
    	$this->load->view('order/payOrder');
    }	
//订单支付完成,数据提交向后台	
    public function postOrderData()
    {	
        $postOrderData['MenberMoney'] = 1;
        $postOrderData['PoorderId'] = $this->input->post('billno');
        $postOrderData['PaymentMethod'] = 1;
        $postOrderData['PaymentMoney'] = 32;
        $postOrderData['UserPhone'] = $_SESSION['phone'];


        $reMsg = curl_post(POSTAPI."API_Poorder?dis=money",json_encode($postOrderData));
        if ($reMsg = '""3""') {
            alert('支付异常，请联系028-1234567！');
         }else{
            alert('支付失败，请联系028-1234567！');
         } 
        $_SESSION['shoping']       = '';
        $_SESSION['booking']       = '';
        $_SESSION['Writes']        = '';
        $_SESSION['postBooking']   = ''; 
        $_SESSION['rePayData']     = ''; 
        
     	redirect('home/orderR');
    }
}
 ?>
