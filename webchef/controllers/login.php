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
			if(strlen($user) != 11){
				$a = curl_post(POSTAPI.'API_User?dis=htlogin',$isok);
				
			}else{
				$a = curl_post(POSTAPI."API_User?dis=login",$isok);
			}
			switch ($a) {
				case '0':
					echo "<script>alert('没有该用户！');window.location.href='login/index';</script>";
					break;
				case '1':
					if (strlen($user) != 11) {
						$this->session->set_tempdata("username",$_POST['UserPhone'],3600);
						redirect('chef/index');
					}else{
						$this->session->set_tempdata("phone",$_POST['UserPhone'],3600);
						redirect('home/add');
					}
					
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

		$this->load->view('login/register');
	}

	// 忘记密码
	function forget(){
		$this->load->view('login/forgetpsw');
	}

}
 ?>