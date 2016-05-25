<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

// 特色服务



class Service extends CI_Controller 

{
	function __construct()
	{
		parent::__construct();
		$this->load->view('header');
		$this->load->helper('post_helper');

	}

	// 庆典详情
    public function Ceremony()
	{
		if($_GET){
			// 根据庆典id返回庆典详情
			$id = $_GET['id'];
			//f返回庆典介绍
			$cere = file_get_contents(POSTAPI.'API_Celebration?id='.$id);
			$data['cereinfo'] = json_decode(json_decode($cere),true);
			// 返回所有区域
			$arr['id'] = $id;
			$josndata = json_encode($arr);
			$details = curl_post(POSTAPI.'API_details',$josndata);
			$data['details'] = json_decode(json_decode($details),true); 
			$data['id'] = $id;

			var_dump($data['cereinfo']);
			$this->load->view('service/Ceremony',$data);
			$this->load->view('footer');
		}
	}

	// 庆典列表
    public function ceremonyType()
	{
		// 获取所有庆典
		$cere = file_get_contents(POSTAPI.'API_Celebration');
		$data['cere'] = json_decode(json_decode($cere),true);
		$this->load->view('service/ceremonyType',$data);
		$this->load->view('footer');
	}

	// 伴餐
    public function elegance()
	{
		// 获取伴餐banner
		$banner = file_get_contents(POSTAPI.'API_Banner?number=3&dis=number');
		$data['banner'] = json_decode(json_decode($banner),true);
		// 获取所有的伴餐
		$ban = file_get_contents(POSTAPI.'API_Dinner');
		$ban = json_decode(json_decode($ban),true);
		if(isset($_SESSION['eleg'])){
				if($_SESSION['eleg'] != ''){
					foreach ($ban as $key => $value) {
						$ban[$key]['num'] = '0';
						foreach ($_SESSION['eleg'] as $k => $v) {
							if($value['id'] == $v){
								$ban[$key]['num'] = '1';
							}
						}
				}
			}
		}
		$data['ban'] = $ban;
		$this->load->view('service/elegance',$data);
		$this->load->view('footer');
	}
	// 伴餐加入购物车
	public function elegaddcart()
	{
		if($_POST){
			
			unset($_SESSION['eleg']);
			$_SESSION['eleg']['title'] = $_POST['title'];
			$_SESSION['eleg']['money'] = $_POST['money'];
			$_SESSION['eleg']['id'] = $_POST['id'];
			if(isset($_SESSION['eleg'])){
				echo '1';
			}
		}
	}

	// 服务
    public function service()
	{
		// 获取服务员页面banner
		$banner = file_get_contents(POSTAPI.'API_Banner?number=2&dis=number');
		$data['banner'] = json_decode(json_decode($banner),true);
		// 获取服务员介绍
		$witer = file_get_contents(POSTAPI.'API_Serviceidea');
		$data['witer'] = json_decode(json_decode($witer),true);

		
		$this->load->view('service/service',$data);
		$this->load->view('footer');
	}
	// 服务员加入购物车
	public function addwiter()
	{
		if($_POST){
			$boy = $_POST['boy'];
			$girl = $_POST['girl'];
			if($boy == 0 && $girl == 0){
				echo "<script>alert('你还没有选择服务员！');window.location.href='service';</script>";
				exit;
			}
			$_SESSION['witer'] = $_POST;
			redirect('shopcar/car');
		}
	}
	// 服务详情
    public function lifeInfo2()
	{
		
		$this->load->view('service/lifeInfo2');
		$this->load->view('footer');
	}

	// 客服
    public function customServ()
	{
		
		$this->load->view('service/customServ');
		$this->load->view('footer');
	}






}



?>