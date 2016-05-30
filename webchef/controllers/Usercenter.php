<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

// 个人中心



class Usercenter extends CI_Controller 

{
	
	function __construct()
	{
		parent::__construct();
		$this->load->view('header');
	}


	// 个人中心
    public function personal()
	{
		if(isset($_SESSION['phone'])){
			// 获取用户信息
			$users = file_get_contents(POSTAPI.'API_User?dis=ckxx&UserPhone='.$_SESSION['phone']);	
			$data['users'] = json_decode(json_decode($users),true);
			// 获取用户订单
			$order = file_get_contents(POSTAPI.'API_Poorder?dis=all&UserPhone='.$_SESSION['phone']);
			$data['record'] = json_decode(json_decode($order),true);
			// var_dump($data['record']);
			
		}else{
			$data['users'] = '';
			$data['record']='';
		}
		$this->load->view('usercenter/personalcenter',$data);
		$this->load->view('footer');
	}

	// 我的订单
    public function myorder()
	{

		if(isset($_SESSION['phone'])){
			if($_SESSION['phone'] != ''){
				// 获取用户订单
				$order = file_get_contents(POSTAPI.'API_Poorder?dis=all&UserPhone='.$_SESSION['phone']);
				$data['record'] = json_decode(json_decode($order),true);
				// var_dump($data)
				$this->load->view('usercenter/myOrder',$data);
				$this->load->view('footer');
			}else{
				echo "<script>alert('你还没有登陆！');window.location.href='".site_url('login/index')."'</script>";
				exit;
			}
			
		}else{
			echo "<script>alert('你还没有登陆！');window.location.href='".site_url('login/index')."'</script>";exit;
		}
		

	}

	// 我的订单
    public function appraise()
	{
		
		$this->load->view('usercenter/appraise');
				$this->load->view('footer');

	}

	// 我的退款
    public function back()
	{
		
		$this->load->view('usercenter/moneyBack');
				$this->load->view('footer');

	}

	// 优惠券
    public function coupon()
	{
		
		$this->load->view('usercenter/coupon');
				$this->load->view('footer');

	}

	// 会员卡
    public function member()
	{
		
		$this->load->view('usercenter/member');
				$this->load->view('footer');

	}

	// 个人信息
    public function userInfo()
	{
		
		$this->load->view('usercenter/userInfo');
				$this->load->view('footer');

	}

	// 收货地址
    public function address()
	{
		
		$this->load->view('usercenter/address');
				$this->load->view('footer');

	}





}



?>