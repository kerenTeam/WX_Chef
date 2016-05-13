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
                   // var_dump($_POST);
                    if ($this->input->post('servmoneydata')) {
                       $_SESSION['servmoneydata'] = $this->input->post('servmoneydata');
                    }else{
                       $_SESSION['servmoneydata'] = 0;
                    } 
                  
                    $_SESSION['witer']['boy']=$_POST['boy'];
                    $_SESSION['witer']['girl']=$_POST['girl'];
                    if($this->input->post('foodid')){

                    $_SESSION['postBooking'] = array_combine($this->input->post('foodid'),$this->input->post('numbers')); 
                    }
            	    if(isset($_SESSION['phone'])){
                		// 获取积分
                        if($this->input->post('foodid')){
                            $data['jifen'] =json_decode(file_get_contents(POSTAPI."API_User?dis=jf&UserPhone=".$_SESSION['phone']));
                        }
                		
                		//获取用户默认地址、
                		$address = file_get_contents(POSTAPI."API_MenberAddress?dis=all&value=".$_SESSION['phone']);
                		$data['address'] = json_decode(json_decode($address),true);
            	    }

                    $data['servmoneydata'] = $_SESSION['servmoneydata'];
                    $data['booking'] = $_SESSION['booking'];
                	$data['writes'] = $_SESSION['witer'];
                	$data['postBooking'] = $_SESSION['postBooking'];
                    $data['eleginfo'] = $_SESSION['eleg'];
             	    $this->load->view('order/order',$data);
                }
            }
        }
    }
  
//支付订单
	public function payOrder()
	{
        echo "<pre>";
        var_DUMP($_POST);
        // exit;
        $foodid = $this->input->post('foodid');
    	$numbers = $this->input->post('numbers');
    	$foodOrder = array_combine($foodid,$numbers);
    	$foodJson = array();
		 foreach ($foodOrder as $fid => $fnums)
        { $foodJson[] = "{'FoodId':"."'".$fid."'".","."'FoodNumber':"."'".$fnums."'"."}"; }
        $foodJsondata['UserPhone'] = $this->input->post('UserPhone');
        $foodJsondata['MoneyAll'] = $this->input->post('yfje');
        // 是否使用积分
        if($this->input->post('jifen')){
             $foodJsondata['Integral'] = '1';
        }else{
            $foodJsondata['Integral'] = 0;
        }
        // 服务员男
        if($this->input->post('boy')){
            $foodJsondata['WiterMan'] = $this->input->post('boy');
        }else{
            $foodJsondata['WiterMan'] = 0;
        }
        // 服务员女
        if($this->input->post('girl')){
            $foodJsondata['WiterGirl'] = $this->input->post('girl');
        }else{
            $foodJsondata['WiterGirl'] = 0;
        }
        // 伴餐
        if($this->input->post('dinner')){
            $foodJsondata['Dinner'] = $this->input->post('dinner');
        }else{
            $foodJsondata['Dinner'] = 0;
        }
        // 优惠卷
        if( $this->input->post('couponid')){
            $foodJsondata['UserCouponId'] = $this->input->post('couponid');
        }else{
            $foodJsondata['UserCouponId'] = 0;
        }
        // 用餐时间
        if( $this->input->post('mealtime')){
            $foodJsondata['MealtTime'] = $this->input->post('mealtime');
        }else{
            $foodJsondata['MealtTime'] = 0;
        }

        $foodJsondata['MenberAddressId'] = $this->input->post('memberaddressid');
        $foodJsondata['PaymentMethod'] = ' ';
        $foodJsondata['poorderentry'] = $foodJson;
      
        //将order所有数据转为josn
        $data['OrderAllData'] = str_replace('"{"','{"',str_replace('"}"','"}',str_replace('}"]','}]',str_replace('["{','[{',str_replace("'",'"',json_encode($foodJsondata))))));
        //得到支付金额     	
     
        $isComedeOrder = curl_post(POSTAPI."API_Poorder?dis=dd",$data['OrderAllData']);
        // var_dump($data['OrderAllData']);
        // var_dump($isComedeOrder);  exit;

        $_SESSION['rePayData'] = json_decode(str_replace(']"',']',str_replace('"[','[',str_replace('\"','"',$isComedeOrder))),TRUE);
        $this->load->view('order/payOrder');
	}
//跳转兼容
    public function jumpLink()
    {
    	$this->load->view('order/payOrder');
    }	
    public function unshopdata()
    {
        $_SESSION['shoping']       = '';
        $_SESSION['booking']       = '';
        $_SESSION['Writes']        = '';
        $_SESSION['postBooking']   = ''; 
        $_SESSION['rePayData']     = ''; 
        echo "清除完成";
    }
//订单支付完成,数据提交向后台	
    public function postOrderData()
    {	//如果是会员卡支付
        if ($_GET['MenberMoney'] == 1) {
        $postOrderData['MenberMoney'] = 1;
         $postOrderData['PaymentMoney'] = 0;
        }else{
        $postOrderData['MenberMoney'] = 0;  
        $postOrderData['PaymentMoney'] = str_replace(".0000","",$_SESSION['rePayData'][0]['MoneyAll']);
        }
        // //如果是线下支付
        // if ($_GET['PaymentMethod'] == 2) {
        // $postOrderData['PaymentMethod'] = 2;
        // }else{
        // $postOrderData['PaymentMethod'] = 1;  
        // }
        // //如果是支付宝支付
        // if ($_GET['PaymentMethod'] == 3) {
        // $postOrderData['PaymentMethod'] = 3;
        // }else{
        // $postOrderData['PaymentMethod'] = 1;
        // }
        // //如果是apple Pay支付
        // if ($_GET['PaymentMethod'] == 4) {
        // $postOrderData['PaymentMethod'] = 4;
        // }else{
        // $postOrderData['PaymentMethod'] = 1;
        // }

        $postOrderData['POOrderId'] = $_SESSION['rePayData'][0]['POOrderId'];
        $postOrderData['PaymentMethod'] = 1;   
        $postOrderData['UserPhone'] = $_SESSION['phone'];
        $reMsg = curl_post(POSTAPI."API_Poorder?dis=money",json_encode($postOrderData));
       
        // var_dump(POSTAPI."API_Poorder?dis=money",json_encode($postOrderData)); 
        // var_dump($reMsg);
        // exit;
        // if ($reMsg = '""3""') {
        //     echo "<script>alert('支付异常，请联系028-1234567！')</script>";
        //  }else{
        //      echo "<script>alert('支付失败，请联系028-1234567！')</script>";
        //  } 
        $_SESSION['shoping']       = '';
        $_SESSION['booking']       = '';
        $_SESSION['Writes']        = '';
        $_SESSION['postBooking']   = ''; 
        $_SESSION['rePayData']     = ''; 
        
     	redirect('home/orderR');
    }
//购买｜充值会员卡  页面
    public function payCardPage()
    {   if ($_SESSION['phone'] == null) {
        echo "<script>alert('为保证安全，请重新登录！');window.location.href='".site_url('home/login')."';</script>"; exit;
        }
        $PayVipCard['UserPhone'] = $_SESSION['phone'];
        $PayVipCard['PaymentMethod'] = '0';
        $_SESSION['PayVipCard'] = $_GET['Money'];
        $PayVipCard['Money'] = $_SESSION['PayVipCard'];
        $_SESSION['PayVipCardData'] =json_encode($PayVipCard);
        $_COOKIE['PayVipCardData'] = json_encode($PayVipCard);
        $this->load->view('order/payCardPage');

    }  
//购买或充值会员卡
    public function PayVipCard()
    { 
        // var_dump($_SESSION['PayVipCard']);
        // echo "<hr/>";
        // var_dump($_COOKIE['PayVipCard']);
        //         echo "<hr/>";
        $reMsg = curl_post(POSTAPI."API_Recharge",$_SESSION['PayVipCardData']);
        //         echo "<hr/>";
        // var_dump(POSTAPI."API_Recharge",$_SESSION['PayVipCardData']);
        //         echo "<hr/>";
        // var_dump($reMsg);  
        // if ($reMsg != 1) {
        //     var_dump($reMsg); 
        //    echo '订单异常，请重新充值或购买！';  exit;
        // echo "<script>alert('订单异常，请重新充值或购买！');window.location.href='".site_url('home/vipCard')."';</script>";exit;
        // }
        $_SESSION['PayVipCardData'] ="";
        $_SESSION['PayVipCard']     = "";
        if(isset($_SESSION['phone'])){
            if($_SESSION['phone'] == NULL){
                $data['user'] = '';
            }else{
                $user = file_get_contents(POSTAPI."API_User?dis=ckxx&UserPhone=".$_SESSION['phone']);
                $userdata['users'] = json_decode(json_decode($user),true);
                $data['name']    = $userdata['users'][0]['name'];
                $data['balance'] = $userdata['users'][0]['balance'];
            }
        }
        $this->load->view('vip',$data);
    } 
}
 ?>
