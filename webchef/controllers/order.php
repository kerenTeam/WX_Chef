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

		$this->load->view('order/custom');
		$this->load->view('footer');
	}

	// 宴席详情
	function partyInfo(){

		$this->load->view('order/partyInfo');
		$this->load->view('footer');
	}

	// 净菜
	function vegetable(){

		$this->load->view('order/vegetable');
		$this->load->view('footer');
	}

	// 点菜详情
	function info(){
		if($_GET){
			$id = $_GET['id'];
			$number = $_GET['number'];
			isset($number) ? $data['number'] = $number : $data['number'] = '0';
			isset($_GET['shopid']) ? $data['shopid'] = $_GET['shopid'] : NULL;
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