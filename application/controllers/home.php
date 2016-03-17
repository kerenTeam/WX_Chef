<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*    
*/
class home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->view('header');
	}

	//首页
	public function index(){

		$this->load->view('index');
	}
	//菜篮子 by wf
	public function cailan(){

		$this->load->view('cailan');
	}
	//点菜
	public function buy(){

		$this->load->view('buy');
	}
	//菜品详情
	public function food(){

		$this->load->view('food');
	}
	//购物车
	public function shoppingcart(){

		$this->load->view('shoppingcart');
	}
    //订单
    public function order(){

		$this->load->view('order');
	}
	//评价 
	public function comment(){

		$this->load->view('comment');
	}
	//订单确认 仿美团
	public function meiorder(){

		$this->load->view('meiorder');
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

		$this->load->view('orderRecorde');
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
	//宴会定制
	public function make(){

		$this->load->view('make');
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
	//意见反馈
	public function message(){

		$this->load->view('message');
	}
}


?>