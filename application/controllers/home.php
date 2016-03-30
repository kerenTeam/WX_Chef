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
		// var_dump($data);
		$this->load->view('header',$data);
	}
	
	//首页
	public function index(){
		$data = $this->option_model->banners();
		$banner['banners'] = unserialize($data['banner']); 
		$this->load->view('index',$banner);
	}
	//菜单 by wf
	public function cailan(){
		$data['cates'] = $this->pack_model->listcates();
		$this->load->view('cailan',$data);
	}
	//点菜
	public function buy(){

		$this->load->view('buy');
	}
	//菜品详情
	public function food(){
		$id = $_GET['id'];
		$data['foods'] = $this->pack_model->foods($id);
		// var_dump($data);
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
	//图文详情
	public function lifeInfo(){

		$this->load->view('lifeInfo');
	}
	//套餐详情
	public function dinner(){

		$this->load->view('dinner');
	}
	//购物车
	public function shoppingcart(){

		$this->load->view('shoppingcart');
	}
	//购物车 new
	public function cart(){

		$foodid = $_POST['foodid'];
		$numbers = $_POST['numbers'];

		$cards = array_combine($foodid,$numbers);
		$data = array_filter($cards);
		
		var_dump($data);

		$this->load->view('cart');
	}
    //订单
    public function order(){

		$this->load->view('order');
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