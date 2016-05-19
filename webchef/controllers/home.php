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
						if($v['FoodId'] == $value['foodid']){
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
			$foodid = $_POST['id'];
		}
	}
	// 菜品详情
	function info(){

		$this->load->view('foodInfo');
	}
	// 实时菜价
	function price(){

		$this->load->view('price');
	}
	// 我的收藏
	function collection(){

		$this->load->view('collection');
	}
	// 我的余额
	function balance(){

		$this->load->view('balance');
	}
	//	点菜
	function order(){

		$this->load->view('order');
	}
	// 实时菜价
	function priceChart(){
		$this->load->view('priceChart');
	}
	
	// 商品评价
	function orderaps(){
		$this->load->view('orderaps');
	}
	
	// 大厨推荐
	function recommend(){
		$this->load->view('recommend');
	}
	// 活动页面
	function activity(){
		$this->load->view('activity');
		$this->load->view('footer');
	}
	// 换一换
	function exchange(){
		$this->load->view('exchange');
	}
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
