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
    //订单
    public function order(){

		$this->load->view('order');
	}
	//订单 仿美团
	public function meiorder(){

		$this->load->view('meiorder');
	}
   //个人中心
	public function ucent(){

		$this->load->view('usercenter');
	}




}


?>