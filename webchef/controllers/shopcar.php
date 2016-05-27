<?php  
defined('BASEPATH') OR exit('No direct script access allowed');



// 点菜


class Shopcar extends CI_Controller 

{

	function __construct()
	{
		parent::__construct();
		$this->load->view('header');
	}

	// 购物篮
	function car(){
		// 菜品
		if(isset($_SESSION['shoping'])){
			if($_SESSION['shoping'] == ''){
				$data['carts'] = '';
			}else{
				$shoping = $_SESSION['shoping'];
				foreach ($shoping as $key => $value) {
					switch ($value['code']) {
						// 点菜
						case '0':
							$data['carts']['diancai'][$key] = $value;
							break;
						// 套餐
						case '1':
							$data['carts']['taocan'][$key] = $value;
							break;
						// 净菜
						case '2':
							$data['carts']['jincai'][$key] = $value;
							break;
					}
				}
			}
		}else{
			$data['carts'] = '';
		}
		// 服务员
		if(isset($_SESSION['witer'])){
			if($_SESSION['witer'] == ''){
				$data['witer'] = '';
			}else{
				$data['witer'] = $_SESSION['witer'];
			}
		}else{
			$data['witer'] = '';
		}
		// 伴餐
		if(isset($_SESSION['eleg'])){
			if($_SESSION['eleg'] == ''){
				$data['eleg'] = '';
			}else{
				$data['eleg'] = $_SESSION['eleg'];
			}
		}else{
			$data['eleg'] = '';
		}
		// 庆典
		if(isset($_SESSION['ceremoney'])){
			if($_SESSION['ceremoney'] == ''){
				$data['cerearr'] = '';
			}else{
				$data['cerearr'] = $_SESSION['ceremoney'];
			}
		}else{
			$data['cerearr'] = '';
		}
		// echo "<pre>";
		$this->load->view('shopcar/shopcar',$data);
		$this->load->view('footer');
	}

	// 换一换
	function exchange(){
		if($_GET){
			$data['id'] = $_GET['id'];
			$pid = $_GET['pid'];
			$data['shopid'] = $_GET['shopid'];

			$cates = file_get_contents(POSTAPI."API_Food?dis=change&foodid=".$_GET['id']);
			$foods = json_decode(json_decode($cates),true);
			if($foods == " "){
				$data['foods'] = '';
			}else{
				$data['foods'] = $foods;
			}
			$this->load->view('shopcar/exchange',$data);
		}else{
			redirect('shopcar/car');
		}
	}

	// 换一换处理
	public function changup(){
		if($_GET){
			$shopid = $_GET['shopid'];
			$id = $_GET['id'];
			$foodid = $_GET['foodid'];
			$shoping =$_SESSION['shoping'];
			foreach($shoping as $k=>$value){
				if($value['foodid'] == $foodid && $value['shopid'] == $shopid){
					$shoping[$k]['foodid'] = $id;
				}
			}
			$this->session->set_userdata('shoping',$shoping,0);
			redirect('shopcar/car');
		}
	}


	// 删除购物车菜品
	public function delshopcar()
	{
		if($_GET){
			$id = $_GET['id'];
			$shoping = $_SESSION['shoping'];
			foreach ($shoping as $key => $value) {
				if($value['foodid'] == $id){
					unset($shoping[$key]);
				}
			}
			$booking = $_SESSION['booking'];
			foreach ($booking as $k => $v) {
				if($v['foodid'] == $id){
					unset($booking[$k]);
				}
			}
			$shoping = array_merge($shoping);
			$booking = array_merge($booking);
			$this->session->set_userdata('shoping',$shoping,0);
			$this->session->set_userdata('booking',$booking,0);
			redirect('shopcar/car');
		}else{
			redirect('shopcar/car');
		}
	}

	// 删除购物车庆典或者伴餐
	public function delcere()
	{	
		if($_GET){
			$action = $_GET['action'];
			switch ($action) {
				// 删除伴餐
				case '1':
					unset($_SESSION['eleg']);
					break;
				// 删除庆典
				case '2':
					unset($_SESSION['ceremoney']);
					break;
			}
			redirect('shopcar/car');
		}
	}

	// 订单确认
	function defray(){
		if($_POST){
			if(isset($_SESSION['phone'])){
				if($_SESSION['phone'] != ''){
					$checkid = $this->input->post('checkid');
					if(!$checkid && !$this->input->post('cereid') && !$this->input->post('eleg')){
						echo "<script>alert('你还没有选择菜品！');window.location.href='car';</script>";
					}
					// var_dump($this->input->post('servmoneydata'));
					// 总金额
					if ($this->input->post('servmoneydata')) {
                       $_SESSION['servmoneydata'] = $this->input->post('servmoneydata');
                    }else{
                       $_SESSION['servmoneydata'] = 0;
                    } 
                    // 服务员
                    if($this->input->post('boyid')){
                    	$_SESSION['witer']['boy']=$_POST['boy'];
                    	$a['boy'] = $_POST['boy'];
                    	$data['writes']=$a;
                    }else{
                    	$data['writes']['boy'] = '0';
                    }
                    if($this->input->post('girlid')){
                    	$_SESSION['witer']['girl']=$_POST['girl'];
                    	$a['girl'] = $_POST['girl'];
                    	$data['writes']=$a;
                    }else{
                    	$data['writes']['girl'] = '0';
                    }
                    // 菜品
                    if($this->input->post('foodid')){
                    	// 所有菜id和数量
                    	$food = array_combine($this->input->post('foodid'),$this->input->post('numbers'));
                    	$arr = array();
                    	foreach ($food as $key => $value) {
                    		foreach ($checkid as $k => $v) {
                    			if($key == $v){
                    				$arr[$key] = $value;
                    			}
                    		}
                    	}
                    	$_SESSION['postBooking'] = $arr;
                    	// 没有选着支付的就删除
                    	$shoping = $_SESSION['booking'];
                    	$shop = array();
                    	foreach ($shoping as $key => $value) {
                    		foreach ($arr as $k => $v) {
                    			if($value['foodid'] == $k){
                    				$shop[$key] = $value;
                    			}
                    		}
                    	}

                    	$data['booking'] = $shop;
                    }
                    // 积分
                    if($this->input->post('foodid')){
                        $data['jifen'] =json_decode(file_get_contents(POSTAPI."API_User?dis=jf&UserPhone=".$_SESSION['phone']));
                    }
                 
                	//获取用户默认地址、
                	$address = file_get_contents(POSTAPI."API_MenberAddress?dis=all&value=".$_SESSION['phone']);
                	$data['address'] = json_decode(json_decode($address),true);
                	// var_dump($data['address']);

                	$data['servmoneydata'] = $_SESSION['servmoneydata'];
                	
                	$data['postBooking'] = $_SESSION['postBooking'];
                	// 伴餐
                	if($this->input->post('eleg')){
                		$data['eleginfo'] = $_SESSION['eleg'];
                	}else{
                		$data['eleginfo'] = '';
                	}
                	// 庆典
                	if($this->input->post('cereid')){
                		$data['cerearr'] = $_SESSION['ceremoney'];
                	}else{
                		$data['cerearr'] = '';
                	}

                	// var_dump($data['booking']);
					$this->load->view('shopcar/defray',$data);
					$this->load->view('footer');
				}else{
					 echo "<script>alert('你还没有登陆！');window.location.href='".site_url('login/index')."';</script>";
				}
			}else{
				 echo "<script>alert('你还没有登陆！');window.location.href='".site_url('login/index')."';</script>";
			}
			
		}else{
			redirect('home/add');
		}
	}

	// 支付成功
	function succeed(){

		$this->load->view('shopcar/succeed');
	}

	// 支付页面
	function pay(){

		$this->load->view('shopcar/pay');
		$this->load->view('footer');
	}


}



?>