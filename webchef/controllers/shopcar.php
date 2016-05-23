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
		// var_dump($data);
		$this->load->view('shopcar/shopcar',$data);
		$this->load->view('footer');
	}

	// 购物篮
	function defray(){

		$this->load->view('shopcar/defray');
		$this->load->view('footer');
	}

	// 支付成功
	function succeed(){

		$this->load->view('shopcar/succeed');
	}




}



?>