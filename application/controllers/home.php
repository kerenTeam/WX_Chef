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
		
		$this->load->helper('post_helper');
		$this->load->library('session');
		$this->load->view('header');
		$_SESSION['openid'] = '871dd687-7e12-4457-b5fa-ff47d725739e';
	}
	//登录
	public function login(){

		$this->load->view('login');
	}
	//老用户登录
	public function login2(){ 
		if($_POST){
			$arr = array(
				'UserPhone' => $this->input->post('UserPhone'),
				'UserPwd' => $this->input->post('UserPwd'),
				);
			$isok = json_encode($arr);
			$a = curl_post(POSTAPI."API_User?dis=login",$isok);
			switch ($a) {
				case '0':
					echo "<script>alert('没有该用户！');window.location.href='login2';</script>";
					break;
				case '1':
					$this->session->set_tempdata("phone",$_POST['UserPhone'],3600);
					echo "<script>window.location.href='ucent';</script>";
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

	//密码和手机号修改
	public function safe(){
		$this->load->view('safe');
	}
	public function registeradd(){

		 $reigsterFrom = array('UserPwd' => $this->input->post('UserPwd'),'UserPhone' => $this->input->post('UserPhone'));
         $reigsterData = json_encode($reigsterFrom);

         $isok = curl_post(POSTAPI."API_User?dis=xzyh",$reigsterData);
      
         switch ($isok) { //0注册失败   1注册成功  2已有用户
         	case '0':
         		echo "<script>alert('注册失败！');  window.location.href='register';</script>";  //？注册
         		break;
         	case '1':
         		$this->session->set_userdata('phone',$this->input->post('UserPhone'),7200);
         		echo "<script>alert('注册成功！');    window.location.href='ucent';</script>";   //？中心
         		break;	
         	case '2':
         		echo "<script>alert('该号码已注册！'); window.location.href='login2';</script>";  //？登陆
         		break;	
         }
	}
	
	//首页
	public function index(){
		$banner = $this->option_model->banners();
		$data['banners'] = unserialize($banner['banner']);

		$caijia = file_get_contents(POSTAPI.'API_Vegetable?dis=food');

		$data['caijia'] = json_decode(json_decode($caijia));
		// 精品生活
		// $quality = file_get_contents(POSTAPI.'API_Boutique');
		// $data['quality'] = json_decode(json_decode($quality),true);


		// var_dump($data);
		$this->load->view('index',$data);
	}
	// 首页精品生活
	public function quality()
	{
		$page = intval($_GET['page']);  
	//	var_dump($page);
		$pagenum = 5; //ÿҳ����
		$start = ($page - 1) * $pagenum;
		$quality = file_get_contents(POSTAPI.'API_Boutique?dis=jpsh&star='.$start.'&end='.$pagenum);
		$shops = json_decode(json_decode($quality),true);

		// $shops = array();
		// $query =  $pdo->query("SELECT * FROM wd_bank_shops where state='1' ORDER BY id ASC LIMIT $start," . $pagenum . "");
		// while ($ruser = $query->fetch(PDO::FETCH_ASSOC)) { $shops[] = $ruser; };
		$arr = array();
		foreach($shops as $shop){
			$arr[] = array(
				'boutiqueid' =>$shop['boutiqueid'],
				'name' =>$shop['name'],
				'abstract' =>$shop['abstract'],
				'backgoungimg' =>$shop['backgoungimg'],
			);
		}
		
		echo json_encode($arr);exit;
	}


	//菜单 by wf
	public function cailan(){
		$catejson = file_get_contents(POSTAPI.'API_Food?dis=c');
		$data['cates'] = json_decode(json_decode($catejson),true);
		$foodjson = file_get_contents(POSTAPI.'API_Food?dis=d');
		$data['foods'] = json_decode(json_decode($foodjson),true);

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
		
		$cates = file_get_contents(POSTAPI."API_Food?dis=fl&foodid=".$pid);
		$data['foods'] = json_decode(json_decode($cates),true);
		// var_dump($data);
		$this->load->view('change',$data);
	}
	// 换一换处理
	public function changup(){
		$shopid = $_GET['shopid'];
		$id = $_GET['id'];
		$foodid = $_GET['foodid'];

		$shoping =$_SESSION['shoping'];

		foreach($shoping as $k=>$value){
			if($value['foodid'] == $id && $value['shopid'] == $shopid){
				$shoping[$k]['foodid'] = $foodid;
			}
		}
		$this->session->set_userdata('shoping',$shoping,0);
		redirect('home/cart');
	}
	//菜品详情
	public function food(){
		$id = $_GET['id'];
		$number = $_GET['number'];
		isset($number) ? $data['number'] = $number : $data['number'] = '0';
		isset($_GET['shopid']) ? $data['shopid'] = $_GET['shopid'] : NULL;
		//产品详情
		$foodjson = file_get_contents(POSTAPI.'API_Food?dis=xq&foodid='.$id);
		$data['foods'] = json_decode(json_decode($foodjson),true);
		// 产品图片
		$foodpic= file_get_contents(POSTAPI.'API_Food?dis=xqimg&foodid='.$id);
		$data['foodspic'] = json_decode(json_decode($foodpic),true);
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
		if($_GET){
			$id = $_GET['id']; 
			$life = file_get_contents(POSTAPI.'API_Boutique?dis=xc&id='.$id);
			$data['life'] = json_decode(json_decode($life),true);
			
			$this->load->view('lifeInfo',$data);
		}

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
				$code = $_POST['code'];
				$data = array();
				foreach($foodid as $k=>$v){
					$data[$k]['foodid'] = $foodid[$k];	
					$data[$k]['numbers'] = $numbers[$k];	
					$data[$k]['code'] = $code[$k];	
				}
				$arr = array_no_empty($data);
			if(empty($arr)){
				echo "<script>alert('你还没有可提交的菜品。');window.location.href='cailan';</script>";
			}else{
				
				$shopid = rand(1,100);
				foreach($arr as $key=>$val){
						$a['foodid']= $val['foodid'];
						$a['number']= $val['numbers'];
						$a['code']= $val['code'];
						$a['shopid']= $shopid;
						$a['time']= date('Y-m-d H:i:s');
						$c[] = $a;
				}
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
				redirect('home/cart');
				}
			exit;
		}
	}
	// food添加购物车
	public function foodaddcart(){
		// var_Dump($_POST);
		if($_POST){

			$foodid = trim($_POST['foodid']);
			$shopid = $_POST['shopid'];
			$number = $_POST['numbers'];
			$code = $_POST['code'];
			if(empty($number)){
				echo "<script>alert('你还没有可提交的菜品。');history.go(-1);</script>";
			}else{
				if($shopid == NULL){
					$shopid = rand(1,100);
					$data['foodid'] = $foodid;
					$data['number'] = $number;
					$data['shopid'] = $shopid;
					$data['code'] = $code;
					$data['time'] = date('Y-m-d H:i:s');
					$c[] = $data;
					if(isset($_SESSION['shoping'])){
						$shoping = $_SESSION['shoping'];
					}else{
						$shoping = NULL;
					}
					if($shoping == NULL){
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
				}else{
					$shoping = $_SESSION['shoping'];
					foreach($shoping as $k=>$v){
						if($shopid == $v['shopid'] && $foodid == $v['foodid']){
							$shoping[$k]['number'] = $number;
						}
					}
					$this->session->set_userdata('shoping',$shoping,0);
				}
				redirect('home/cart');
			}
			
		}
	}
	// 注销
	public function zhuxiao(){
		unset(
		    $_SESSION['shoping'],
		    $_SESSION['booking'],
		    $_SESSION['phone']
		);	
		redirect('home/index');
	}
	//购物车 new
	public function cart(){
		if(isset($_SESSION['shoping'])){
			if($_SESSION['shoping'] == NULL){
				$data['carts'] = '';
				$data['taocan'] = '';
			}else{
				$cart = $_SESSION['shoping'];
				foreach($cart as $k=>$v){
					if($v['code'] == 0){
						$data['carts'][$k] = $v;
					}else{
						$data['carts'] = '';
						$data['taocan'][$k] = $v;
					}
				}
			}
		}else{
			$data['carts'] = '';
			$data['taocan'] = '';
		}
		$this->load->view('cart',$data);
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
    	if ($_POST) {
    		$data['postBooking'] = array_combine($this->input->post('foodid'),$this->input->post('numbers'));
    		if(isset($_SESSION['phone'])){
    				// 获取可用饭票
    		$fan = file_get_contents(POSTAPI."API_UserCoupon?UserPhone=".$_SESSION['phone']);
    		$data['usercoupon'] = json_decode(json_decode($fan),true);
    		// 获取积分

    		$data['jifen'] = file_get_contents(POSTAPI."API_User?dis=jf&UserPhone=".$_SESSION['phone']);
    	
    		//获取用户地址、
    		$address = file_get_contents(POSTAPI."API_MenberAddress?dis=all&value=".$_SESSION['phone']);
    		var_dumP($address);
    		exit;
    		$data['address'] = json_decode(json_decode($address),true);

    		}


    		$data['booking'] = $_SESSION['booking'];
 			$this->load->view('order/order',$data);
    	}
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
    	$this->session->set_userdata('shoping','',0);
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
		if(isset($_SESSION['phone'])){
			if($_SESSION['phone'] == NULL){
				$data['user'] = '';
			}else{
				$user = file_get_contents(POSTAPI."API_User?dis=ckxx&UserPhone=".$_SESSION['phone']);
				$data['users'] = json_decode(json_decode($user),true);
			}
		}else{
			$data['users'] = '';
		}
		$this->load->view('usercenter',$data);
	 }
	//个人设置
	public function set(){
		if(isset($_SESSION['phone'])){
			if($_SESSION != NULL){
				$userinfo = file_get_contents(POSTAPI.'API_User?dis=ckxx&UserPhone='.$_SESSION['phone']);
				$data['user'] = json_decode(json_decode($userinfo),true);
				}else{
					$data['user'] = '';
				}
				$this->load->view('set',$data);
		}else{
			echo "<script>alert('你还没有登陆!');window.location.href='login2';</script>";
		}
	}
	//更改用户资料
	public function userdatum()
	{
		if($_POST){
			// var_dump($_POST);
			$data['UserId'] = $_POST['UserId'];
		
			if(!empty($_FILES['UserImage']['tmp_name'])){
				$data['UserImage'] = $_FILES['UserImage'];
			}else{
				$data['UserImage'] = $_POST['UserImage'];
			}
			$data['UserName'] = $_POST['UserName'];
			$data['PersonalTaste'] = $_POST['PersonalTaste'];
			$data['LikeCuisine'] = $this->input->post('LikeCuisine') ? $this->input->post('LikeCuisine') : '';
			var_dump($data);
			$postdata = postData(POSTAPI.'API_User',$data);
			var_dumP($postdata);

		}
	}
    //搜索
    public function search(){
    	if($_POST){
    		$q = $_POST['search'];
    		$search = file_get_contents(POSTAPI."API_Food?dis=ss&foodid=".$q);

    		$data['search'] = json_decode(json_decode($search));
    		$this->load->view('search',$data);
    	}else{
    		// $data['sear'] = get_cookie('search');
    		$this->load->view('search');
    	}
    	
	}
	 //搜索结果页
    public function searchPage(){

		$this->load->view('searchPage');
	}
    //订单记录
    public function orderR(){
    	if(isset($_SESSION['phone'])){
    		if(empty($_SESSION['phone'])){
    			$data['record'] = '';
    		}else{
    			$jsonorder = file_get_contents(POSTAPI.'API_Poorder?dis=all&UserPhone='.$_SESSION['phone'].'&Phone=');
    			$data['record'] = json_decode(json_decode($jsonorder),true);
       		}
    	}else if(isset($_SESSION['temporaryOrder'])){

    		$jsonorder = file_get_contents(POSTAPI.'API_Poorder?dis=all&UserPhone=&Phone='.$_SESSION['temporaryOrder']);
    			$data['record'] = json_decode(json_decode($jsonorder),true);
    	}else{
    		$data['record'] = '';
    	}
		$this->load->view('orderRecord',$data);
	}
   //订单详情
    public function orderI(){

		$this->load->view('orderInfo');
	}
	//优惠券
    public function card(){
    	if(isset($_SESSION['phone'])){
    		$card =file_get_contents(POSTAPI."API_UserCoupon?UserPhone=".$_SESSION['phone']);
  
    		$data['cards'] = json_decode(json_decode($card),true);
    	}else{
    		$data['cards'] = '';
    	}
    	$this->load->view('card',$data);
	}
	//领券
	public function cardGet(){

		$this->load->view('cardGet');
	}
	//地址管理
	public function address2(){
		if(isset($_SESSION['phone'])){
			$address = file_get_contents(POSTAPI."API_MenberAddress?dis=all&value=".$_SESSION['phone']);
			$data['address'] = json_decode(json_decode($address),true);
		}else{
			$data['address'] = NULL;
		}
		$this->load->view('address2',$data);
	}
	//新增address
	public function addressAdd2(){
		if(!isset($_SESSION['phone'])){
			echo "<script>alert('你还没有登陆哦！');window.location.href='login';</script>";
		}else{
		    $a['UserPhone'] = $_SESSION['phone'];
		}
		if($_POST)
		{
			$a['Name'] = $_POST['name'];
			$a['Address'] = $_POST['Address'];
			$a['GoodsPhone'] = $_POST['GoodsPhone'];
			$a['SparePhone'] = $_POST['SparePhone'];
			if(!isset($_POST['IsDefault'])){
				$a['IsDefault'] = 0;
			}else{
				$a['IsDefault'] = $_POST['IsDefault'];
			}
			$c[] = $a;
			$b = json_encode($c);
			$postadd = curl_post(POSTAPI."API_MenberAddress?dis=xz",$b);
			if($postadd == 1){
				echo "<script>alert('新增地址成功！');window.location.href='address2';</script>";
			}else{
				echo "<script>alert('新增地址失败！');</script>";
			}
		}
		$this->load->view('addressAdd2');
	}
	// 删除地址
	public function deladdress()
	{
		$id = $_GET['id'];
		$isok = file_get_contents(POSTAPI."API_MenberAddress?dis=del&value=".$id);
		$a = str_replace('"', '', $isok);
		if($a = 1){
		echo "<script>alert('删除地址成功！');window.location.href='address2';</script>";
		}else{
		echo "<script>alert('删除地址失败！');window.location.href='address2';</script>";
		}
		
	}
	//编辑地址
	public function editAddress(){
		if($_GET){
			$id = $_GET['id'];

			$isok = file_get_contents(POSTAPI."API_MenberAddress?dis=dzxq&value=".$id);
			$data['address'] = json_decode(json_decode($isok),true);
		
			$this->load->view('editAddress',$data);
		}
	}
	//编辑地址处理
	public function addressedit($value='')
	{
		if($_POST){
			// var_dump($_POST);
			$arr = array(
				'Name'=>$_POST['name'],
				'Address'=>$_POST['address'],
				'MemberAddressId'=>$_POST['id'],
				'GoodsPhone'=>$_POST['goodsphone'],
				'SparePhone'=>$_POST['sparephone'],
				'UserPhone'=>$_SESSION['phone'],
				);
			if(empty($_POST['IsDefault'])){
				$arr['IsDefault'] = 0;
			}else{
				$arr['IsDefault'] = $_POST['IsDefault'];
			}
			
			$jsonval = '['.json_encode($arr).']';
			$isok = curl_post(POSTAPI."API_MenberAddress?dis=xg",$jsonval);
			if($isok = 1){
				echo "<script>alert('编辑地址成功！');window.location.href='address2';</script>";
			}else{
				echo "<script>alert('编辑地址失败！');window.location.href='address2?id='".$_POST['id'].";</script>";
			}
			
		}
	
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

		$caiprice = file_get_contents(POSTAPI.'API_FoodMarket');
		$data['cai']= json_decode(json_decode($caiprice),true);
		$this->load->view('priceSearch',$data);
	}
	//根据菜市获取菜价

	//菜价
	public function price(){
		if($_GET){
			$id['foodmarketid'] = $_GET['id'];
			$id['name'] = $_GET['name'];
			$vegetableid = json_encode($id);
			$isok = curl_post(POSTAPI."API_Vegetable?dis=foodxc",$vegetableid);
			$a = json_decode(json_decode($isok),true);
			for ($i=0; $i <count($a) ; $i++) { 
				$c[$i] = $a[$i]['price'];
			}
			$max= array_search(max($c), $c);
			$min= array_search(min($c), $c);
			$data['max'] = $c[$max];
			$data['min'] = $c[$min];
			$data['price'] = $a;
			$mark = file_get_contents(POSTAPI."API_FoodMarket");
			$data['mark'] = json_decode(json_decode($mark),true);
			//var_dumP($data);
			$data['cainame'] = $_GET['name'];
			$this->load->view('price',$data);
			}
	}
	//意见反馈
	public function message(){

		$this->load->view('message');
	}
	//服务协议
	public function protocol(){

		$this->load->view('protocol');
	}

	//订单状态
	public function orderState()
	{
		$data['State'] = $_GET['state'];
		$data['POOrderId'] = $_GET['id'];
		//var_dump($data);
		$jsonorder = json_encode($data);
		$state = curl_post(POSTAPI.'API_Poorder?dis=state',$jsonorder);
		if($state == '"1"'){
			if($_GET['state'] == 5){
				echo "<script>alert('你的退款信息已经提交！');window.location.href='orderR';</script>";
			}else{
				echo "<script>alert('你的订单已经取消！');window.location.href='orderR';</script>";
			}
		}else{
			if($_GET['state'] == 5){
				echo "<script>alert('你的退款信息提交失败！')；window.location.href='orderR';</script>";
			}else{
				echo "<script>alert('你的订单取消失败！')；window.location.href='orderR';</script>";
			}
		}

	}

	// 订单历史支付
	public function payment()
	{
		if($_GET){
		//	var_dumP($_SESSION['rePayData']);
			$data['POOrderId'] = $_GET['id'];
			$data['MoneyAll'] = $_GET['money'];
			$arr[] = $data;
			$_SESSION['rePayData'] = $arr;
			//var_dumP($_SESSION['rePayData']);
			 redirect('orderWXPay/jumpLink');
		}
	}

	//删除订单
	public function delorder()
	{
		if($_GET){
			$id = $_GET['id']; 
			$del = file_get_contents(POSTAPI.'API_Poorder?dis=IsDisplay&UserPhone='.$id);
			if($del == '"1"'){
				echo "<script>alert('删除订单记录成功！');window.location.href='orderR';</script>";
			}else{
					echo "<script>alert('删除订单记录失败！');window.location.href='orderR';</script>";
			}
		}
	}





}


?>