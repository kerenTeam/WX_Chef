<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class chef extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('post_helper');
		$this->load->library('session');
		$this->load->view('header');
	}
	//厨师管理订单页面
	public function index()
	{

		$this->load->view('chef/chefManage');
	}
	//厨师订单详情
	public function chefOrder()
	{

		$this->load->view('chef/chefOrder');
	}
}


?>