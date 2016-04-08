<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*      首页+cate+菜品
*/
class home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('option_model');
		$this->load->model('pack_model');
		$data['site'] = $this->option_model->system('siteName');
		$data['keyword'] = $this->option_model->system('keyWord');
		$data['description'] = $this->option_model->system('keyWordDescriber');
		$this->load->helper('post_helper');
		$this->load->library('session');
		//var_dump($data);
		$this->load->view('header',$data);
	}
	//登录
	public function login(){

		$this->load->view('login');
	}
	//老用户登录
	public function login2(){ 
		if($_POST){
			$phone = $this->input->post('UserPhone');
			$pwd = $this->input->post('UserPwd');
			$a = file_get_contents(APIURL."Get?dis=login&phone=".$phone."&pwd=".$pwd);
			switch ($a) {
				case '0':
					echo "<script>alert('没有该用户！');window.location.href='login2';</script>";
					break;
				case '1':
					set_cookie("phone",$phone,3600);
					echo "<script>alert('登陆成功');window.location.href='ucent';</script>";
					break;
				case '2':
					echo "<script>alert('密码错误！');window.location.href='login2';</script>";
					break;
			}
		}else{
		   $this->load->view('login2');
		}
	}
	//注册
	public function register(){
		$this->load->view('register');
	}

	public function send(){
	$phone = $this->input->post('UserPhone');
    $ch = curl_init();
    $url = 'http://apis.baidu.com/kingtto_media/106sms/106sms?mobile='.$phone.'&content=%e3%80%90%e5%a4%a7%e5%8e%a8%e5%88%b0%e5%ae%b6%e3%80%91%e6%82%a8%e7%9a%84%e6%b3%a8%e5%86%8c%e9%aa%8c%e8%af%81%e7%a0%81%e4%b8%ba%ef%bc%9a'.randNms;
    $header = array('apikey: f8ae5ba4094b4d5134303eb87f7a115d');
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);

	}

	public function registeradd(){

		 $reigsterFrom = array('UserPwd' => $this->input->post('UserPwd'),'UserPhone' => $this->input->post('UserPhone'));
         $reigsterData = json_encode($reigsterFrom);
         $isok = curl_post(POSTAPI."API_User",$reigsterData);
       


         switch ($isok) { //0注册失败   1注册成功  2已有用户
         	case '0':
         		echo "<script>alert('注册失败！');  window.location.href='register';</script>";  //？注册
         		break;
         	case '1':
         		echo "<script>alert('注册成功！');    window.location.href='ucent';</script>";   //？中心
         		break;	
         	case '2':
         		echo "<script>alert('该号码已注册！'); window.location.href='login2';</script>";  //？登陆
         		break;	
         }
	}
	
	//首页
	public function index(){
		$data = $this->option_model->banners();
		$banner['banners'] = unserialize($data['banner']); 
		$this->load->view('index',$banner);
	}
	//菜单 by wf
	public function cailan(){



		$catejson = file_get_contents(APIURL.'Get?dis=c');
		$data['cates'] = json_decode(json_decode($catejson));
		$foodjson = file_get_contents(APIURL.'Get?dis=d');
		$data['foods'] = json_decode(json_decode($foodjson));
		
		$this->load->view('cailan',$data);
	}
	//点菜
	public function buy(){

		$this->load->view('buy');
	}
	//换一换
	public function change(){
		$data['id'] = $_GET['id'];
		// $data['shoppingid'] = $_GET['shopingid'];
		$pid = $_GET['pid'];
		$data['shopid'] = $_GET['shopid'];
		
		$cates = file_get_contents(APIURL."Get?dis=fl&foodid=".$pid);
		$data['foods'] = json_decode(json_decode($cates));
		
		$this->load->view('change',$data);
	}
	// 换一换处理
	public function changup(){
		$shopid = $_GET['shopid'];
		$id = $_GET['id'];
		$foodid = $_GET['foodid'];
		$shoping = unserialize(get_cookie('shoping'));
		echo "<pre>";
		foreach($shoping as $k=>$value){
			if($value['foodid'] == $id && $value['shopid'] == $shopid){
				$shoping[$k]['foodid'] = $foodid;
			}
		}
		$b = serialize($shoping);
		set_cookie('shoping',$b,0);
		redirect('home/cart');
	}
	//菜品详情
	public function food(){
		$id = $_GET['id'];
		//产品详情
		$foodjson = file_get_contents(APIURL.'Food?dis=xq&foodid='.$id);
		$data['foods'] = json_decode(json_decode($foodjson));
		// 产品图片
		$foodpic= file_get_contents(APIURL.'Get?dis=xqimg&foodid='.$id);
		$data['foodspic'] = json_decode(json_decode($foodpic));
		// echo "<pre>";
		// var_dump($data);
		// exit;
		$this->load->view('food',$data);
	}
	//储值返现
	public function backmoney(){

		$this->load->view('backmoney');
	}
	//注册即送
	public function registgift(){

		$this->load->view('registgift');
	}
	//宴会服务
	public function partyServ(){

		$this->load->view('partyServ');
	}
	//忘记密码
	public function forgetPassword(){

		$this->load->view('forgetPassword');
	}
	//图文详情
	public function lifeInfo(){

		$this->load->view('lifeInfo');
	}
	//宴会定制详情
	public function partyInfo(){

		$this->load->view('partyInfo');
	}
	public function partyInfo2(){

		$this->load->view('partyInfo2');
	}
	public function partyInfo3(){

		$this->load->view('partyInfo3');
	}
	public function partyInfo4(){

		$this->load->view('partyInfo4');
	}
	//套餐详情
	public function dinner(){

		$this->load->view('dinner');
	}
	// 加入购物车
	public function addcart(){
			if($_POST){
				$foodid = $_POST['foodid'];
				$numbers = $_POST['numbers'];
				$cards = array_combine($foodid,$numbers);  //重组数组
				$data = array_filter($cards);              //过滤空值
					$shopid = rand(1,100);
					foreach($data as $key=>$val){
						$a['foodid']= $key;
						$a['number'] = $val;
						$a['shopid'] = $shopid;
						$a['time'] = date('Y-m-d H:i:s');
						$c[] = $a;
					}
					$shoping = $_SESSION['shoping'];
					if($shoping == NULL){
					 	$this->session->set_userdata('shoping',$c,0);
					}else{
						$f = array_merge($shoping,$c);
					 	$this->session->set_userdata('shoping',$f,0);
					}
					
				redirect('home/cart');
			}
}
	// 注销
	public function zhuxiao(){
		delete_cookie('phone');
		redirect('home/index');
	}
	//购物车 new
	public function cart(){
		$list['carts'] = $_SESSION['shoping'];
		$this->load->view('cart',$list);
	}
	// 删除购物车
	function delcart(){
		$id = $_GET['id'];
		$shopid = $_GET['shopid'];
		$shoping = $_SESSION['shoping'];
			foreach ($shoping as $key => $value) {
				if($shopid == $value['shopid'] && $value['foodid'] == $id){
				
					unset($shoping[$key]);
				}
			}
			$shoping = array_merge($shoping);
			$this->session->set_userdata('shoping',$shoping,0);
		redirect('home/cart');
	}
    //订单
    public function order(){
    echo "<pre>";
    	var_Dump($_SESSION['booking']);
    	
  //   	$cookie = 1;
  //       $carts = file_get_contents(APIURL."Get?dis=gwc&foodid=".$cookie);
		// $list['carts'] = json_decode(json_decode($carts));	
		// $this->load->view('order'$list);
	}
	 //支付订单
    public function payOrder(){

		$this->load->view('payOrder');
	}
	//支付账号
    public function payLast(){

		$this->load->view('payLast');
	}
	//付款成功
    public function paySuccess(){

		$this->load->view('paySuccess');
	}
	//评价 
	public function comment(){

		$this->load->view('comment');
	}
	//评价成功 
	public function comsuc(){

		$this->load->view('comsuc');
	}
   //个人中心
	public function ucent(){
		$this->load->view('usercenter');
	 }
	//个人设置
	public function set(){

		$this->load->view('set');
	}
    //搜索
    public function search(){

		$this->load->view('search');
	}
	 //搜索结果页
    public function searchPage(){

		$this->load->view('searchPage');
	}
    //订单记录
    public function orderR(){

		$this->load->view('orderRecord');
	}
   //订单详情
    public function orderI(){

		$this->load->view('orderInfo');
	}
	//优惠券
    public function card(){

		$this->load->view('card');
	}
	//领券
	public function cardGet(){

		$this->load->view('cardGet');
	}
	//地址管理
	public function address(){

		$this->load->view('address');
	}
	//新增address
	public function addressAdd(){

		$this->load->view('addressAdd');
	}
	//编辑地址
	public function editAddress(){

		$this->load->view('editAddress');
	}
	//地址管理
	public function address2(){

		$this->load->view('address2');
	}
	//新增address
	public function addressAdd2(){

		$this->load->view('addressAdd2');
	}
	//编辑地址
	public function editAddress2(){

		$this->load->view('editAddress2');
	}
	//宴会定制
	public function make(){

		$this->load->view('make');
	}
	//宴会定制选餐
	public function party(){

		$this->load->view('party');
	}
	//客服
	public function custom(){

		$this->load->view('custom');
	}
	//会员
	public function vip(){

		$this->load->view('vip');
	}
	//会员卡
	public function vipCard(){

		$this->load->view('vipCard');
	}
	//开通会员卡
	public function open(){

		$this->load->view('open');
	}
	//购买会员卡
	public function buyCard(){

		$this->load->view('buyCard');
	}
	//开通成功
	public function openSuccess(){

		$this->load->view('openSuccess');
	}
	//菜价比较
	public function priceSearch(){

		$this->load->view('priceSearch');
	}
	//菜价
	public function price(){

		$this->load->view('price');
	}
	//意见反馈
	public function message(){

		$this->load->view('message');
	}
	//服务协议
	public function protocol(){

		$this->load->view('protocol');
	}
}


?>