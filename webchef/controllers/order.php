<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

// 点菜
class Order extends CI_Controller 

{

	function __construct()
	{
		parent::__construct();
		$this->load->view('header');
	}

	// 宴席
	function custom(){
		$cus = file_get_contents(POSTAPI.'API_Food?dis=taocan');
		$data['cus'] = json_decode(json_decode($cus),true);

		$this->load->view('order/custom',$data);
		$this->load->view('footer');
	}

	// 宴席详情
	function partyInfo(){
		if($_GET){
			$id = $_GET['id'];

			$foods = file_get_contents(POSTAPI.'API_Food?dis=taocanxq&foodid='.$id);
	        $foodinfo = json_decode(json_decode($foods),true);
	        if(isset($_SESSION['shoping'])){
				if($_SESSION['shoping'] != ''){
					foreach ($_SESSION['shoping'] as $key => $value) {
						if($id == $value['foodid']){
							$foodinfo[0]['number'] = '1';
						}
					}
				}
			}
			$data['foods'] = $foodinfo;
			// 产品图片
			$foodpic= file_get_contents(POSTAPI.'API_Food?dis=xqimg&foodid='.$id);
			$data['foodspic'] = json_decode(json_decode($foodpic),true);
			// 菜品评分
			$fen = file_get_contents(POSTAPI.'API_Food?dis=number&foodid='.$id);
			$data['fen'] = json_decode(json_decode($fen),true);
			// 菜品评价
			$commen = file_get_contents(POSTAPI.'API_Food?dis=spl&foodid='.$id);
		    $data['evaluate'] = json_decode(json_decode($commen),true);
	
			$this->load->view('order/partyInfo',$data);
			$this->load->view('footer');
		}
	}
	// 加入购物车
	function partyadd(){
		if($_POST){
			$foodid = $_POST['id'];
			$numbers = $_POST['numbers'];
			$code = $_POST['code'];
			if(empty($numbers)){
				echo "<script>alert('你还没有可提交的菜品。');history.go(-1);</script>";
			}else{
					$shopid = rand(1,100);
					$data['foodid'] = $foodid;
					$data['number'] = $numbers;
					$data['shopid'] = $shopid;
					$data['code'] = $code;
					$data['time'] = date('Y-m-d H:i:s');
					$c[] = $data;
					if(isset($_SESSION['shoping'])){
						$shoping = $_SESSION['shoping'];
					}else{
						$shoping = '';
					}
					if($shoping == ''){
					 	$this->session->set_userdata('shoping',$c,0);
					}else{
						foreach($shoping as $key=>$value){
							foreach($c as $k=>$v){
								if($value['foodid'] == $v['foodid']){
									unset($shoping[$key]);
								}
							}
						}
						$f = array_merge($shoping,$c);
					 	$this->session->set_userdata('shoping',$f,0);
					}
			}


		}
	}
	// 净菜
	function vegetable(){
		// 获取所有菜品分类
		$cates = file_get_contents(POSTAPI.'API_Food?dis=c');
		$data['cates'] = json_decode(json_decode($cates),true);
		// 获取所有净菜
		$jing = file_get_contents(POSTAPI.'API_Food?dis=kind');
		$foods = json_decode(json_decode($jing),true);
		if(isset($_SESSION['shoping'])){
			if($_SESSION['shoping'] != ''){
				$shop = $_SESSION['shoping'];
				foreach($foods as $k=>$v){
					$foods[$k]['number'] = '0';
					foreach ($shop as $key => $value) {
						if($v['foodid'] == $value['foodid']){
							$foods[$k]['number'] = $value['number'];
						}
					}
					
				}
			}
		}
		$data['foods'] = $foods;
		$this->load->view('order/vegetable',$data);
		$this->load->view('footer');
	}

	// 菜品详情
	function info(){
		if($_GET){
			$id = $_GET['id'];
			
			//产品详情
			$foods = file_get_contents(POSTAPI.'API_Food?dis=xq&foodid='.$id);
			$foodjson = ltrim(rtrim($foods,'"'),'"');
	      	$a =   str_replace('\"','"',$foodjson);
	        $data['foods'] = json_decode($a,true);
			// 产品图片
			$foodpic= file_get_contents(POSTAPI.'API_Food?dis=xqimg&foodid='.$id);
			$data['foodspic'] = json_decode(json_decode($foodpic),true);
			// 菜品评分
			$fen = file_get_contents(POSTAPI.'API_Food?dis=number&foodid='.$id);
			$data['fen'] = json_decode(json_decode($fen),true);
			// 菜品评价
			$commen = file_get_contents(POSTAPI.'API_Food?dis=spl&foodid='.$id);
		    $data['evaluate'] = json_decode(json_decode($commen),true);
		    // echo "<pre>";
		    // var_dumP($data);
		    // exit;
		    $this->load->view('order/foodInfo',$data);
			$this->load->view('footer');
		}
	}





}



?>