<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*      登陆 + 注册
*/
class login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('option_model');
		$this->load->model('user_model');
		$data['site'] = $this->option_model->system('siteName');
		$data['keyword'] = $this->option_model->system('keyWord');
		$data['description'] = $this->option_model->system('keyWordDescriber');
		// // var_dump($data);
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
	// 绑定手机
	public function regadd(){
		if($_POST){
			$phone = $this->input->post('phone',true);
			$user = $this->user_model->user($phone);
			if ($user) {
				echo "<script>alert('你的手机已经被注册！');history.go(-1);</script>";
			}
			$data['phone'] = $this->input->post('phone',true);
			if($this->user_model->adduser($data)){
				echo "<script>alert('注册成功');window.location='".site_url('user/ucent')."';</script>";
			}else{
				echo "<script>alert('注册成功');history.go(-1);</script>";
			}

			
		}
	}




}


?>