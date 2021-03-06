<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {


	// 主页
	public function index(){
		// 热门销量
		$sales = file_get_contents(POSTAPI.'API_Food?dis=sale');
		$data['sales'] = json_decode(json_decode($sales),true);
		// 最新促销
		$promotion = file_get_contents(POSTAPI.'API_FoodDiscount?start=1&end=5');
		$data['promotion'] = json_decode(json_decode($promotion),true);
		// 部分菜品
		$foodjson = file_get_contents(POSTAPI.'API_Food?dis=tuijian');
		$data['foods'] = json_decode(json_decode($foodjson),true);
		// echo "<pre>";
		// var_dump($data);
		$this->load->view('home',$data);
	}
	// 个人中心
    public function personalcenter()
	{
		$this->load->view('personalcenter');
	}

	// 点菜
	function add(){
		// 获取所有分类
		// unset($_SESSION['shoping']);
		$catejson = file_get_contents(POSTAPI.'API_Food?dis=c');
		$data['cates'] = json_decode(json_decode($catejson),true);

		$foodjson = file_get_contents(POSTAPI.'API_Food?dis=d');
		// 去掉首尾引号
		$food = ltrim(rtrim($foodjson,'"'),'"');
		// 转换json
		$a =   str_replace('\"','"',$food);
		$foods = json_decode($a,true);
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
		$this->load->view('order',$data);
		$this->load->view('footer');
	}
	// 加入购物车
	function addcart()
	{
		if($_POST){
			$shopid = rand(1,100);
			$foodid = $_POST['id'];
			$code = $_POST['code'];
			$a['foodid']= $foodid;
			$a['number']= '1';
			$a['code']= $code;
			$a['shopid']= $shopid;
			$a['time']= date('Y-m-d H:i:s');
			$arr[] = $a;
			
			if(!isset($_SESSION['shoping'])){
				$this->session->set_userdata('shoping',$arr,0);
			}else{
				$shoping = $_SESSION['shoping'];
				foreach($shoping as $key=>$value){
					foreach($arr as $k=>$v){
						if($value['foodid'] == $v['foodid']){
							unset($shoping[$key]);
						}
					}
				}
				$f = array_merge($shoping,$arr);
				$this->session->set_userdata('shoping',$f,0);

			}
			// 成功返回1
			if(isset($_SESSION['shoping'])){
				echo "1";
			}
			
		}
	}

	// 实时菜价
	function price(){	
		// 获取所有菜市场
		$caiprice = file_get_contents(POSTAPI.'API_Vegetable?dis=FoodMarket');
		$data['cai']= json_decode(json_decode($caiprice),true);
		// 菜市场分类
		$cate = file_get_contents(POSTAPI.'API_Vegetable?dis=MarketCategorie');
		$data['cates'] = json_decode(json_decode($cate),true);
		$this->load->view('price',$data);
	}
	// 我的收藏
	function collection(){

		$this->load->view('collection');
	}


	// 实时菜价
	function priceChart(){
		$this->load->view('priceChart');
	}
	
	// 商品评价
	function orderaps(){
		$this->load->view('orderaps');
	}
	// 单品评价
	function oneorderaps(){
		$this->load->view('orderaps2');
	}
	
	// // 大厨推荐
	// function recommend(){
	// 	$this->load->view('recommend');
	// }
	// // 活动页面
	// function activity(){
	// 	$this->load->view('activity');
	// 	$this->load->view('footer');
	// }

	// 搜索
	function search(){
		$this->load->view('search');
		$this->load->view('footer');
	}
	// 帮助中心
	function help(){
		$this->load->view('help');
		$this->load->view('footer');
	}
}
