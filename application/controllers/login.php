<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*    
*/
class login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('option_model');
		$data['site'] = $this->option_model->system('siteName');
		$data['keyword'] = $this->option_model->system('keyWord');
		$data['description'] = $this->option_model->system('keyWordDescriber');
		// var_dump($data);
		$this->load->view('header',$data);
	}
	//引导页
    public function quota(){

		$this->load->view('quota');
	}
    //登录页
    public function login(){

		$this->load->view('login');
	}
	//登录页next
    public function login2(){

		$this->load->view('login2');
	}
	//注册页
    public function register(){

		$this->load->view('register');
	}





}


?>