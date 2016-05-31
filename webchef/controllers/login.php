<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

// 登录+注册控制器

class Login extends CI_Controller {

	public function  __construct(){
		parent::__construct();
		$this->load->helpers('post_helper');

	}

	// 登录
	function index(){
		if($_POST){
			$user = $this->input->post('UserPhone');
			$arr = array(
				'UserPhone' => $user,
				'UserPwd' => md5($this->input->post('UserPwd')),
				);
			$isok = json_encode($arr);
			
			$a = curl_post(POSTAPI."API_User?dis=login",$isok);
			
			switch ($a) {
				case '0':
					echo "<script>alert('没有该用户！');window.location.href='login/index';</script>";
					break;
				case '1':
						$this->session->set_tempdata("phone",$_POST['UserPhone'],18000);
						redirect('home/add');
					break;
				case '2':
					echo "<script>alert('密码错误！');window.location.href='login/index';</script>";
					break;
			}

		}else{
			$this->load->view('login/login');
		}
	}
	// 注册
	function register(){
		if($_POST){
			$reigsterFrom = array('UserPwd' => md5($this->input->post('password')),'UserPhone' => $this->input->post('phone'));
         $reigsterData = json_encode($reigsterFrom);

         $isok = curl_post(POSTAPI."API_User?dis=xzyh",$reigsterData);
      
         switch ($isok) { //0注册失败   1注册成功  2已有用户
         	case '0':
         		echo "<script>alert('注册失败！');  window.location.href='login/register';</script>";  //？注册
         		break;
         	case '1':
         		$this->session->set_userdata('phone',$this->input->post('phone'),7200);
         		echo "<script>alert('注册成功！');    window.location.href='".site_url('home/add')."';</script>";   //？中心
         		break;	
         	case '2':
         		echo "<script>alert('该号码已注册！'); window.location.href='login/index';</script>";  //？登陆
         		break;	
         }
		}else{
			$this->load->view('login/register');
		}
	}


	// 忘记密码
	function forget(){
		$this->load->view('login/forgetpsw');
	}

}
 ?>