<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

// 个人中心



class Usercenter extends CI_Controller 

{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('post_helper');
		$this->load->view('header');
	}


	// 个人中心
    public function personal()
	{
		if(isset($_SESSION['phone'])){
			// 获取用户信息
			$users = file_get_contents(POSTAPI.'API_User?dis=ckxx&UserPhone='.$_SESSION['phone']);	
			$data['users'] = json_decode(json_decode($users),true);
			// 获取用户订单
			$order = file_get_contents(POSTAPI.'API_Poorder?dis=all&UserPhone='.$_SESSION['phone']);
			$data['record'] = json_decode(json_decode($order),true);
			// var_dump($data['record']);
			
		}else{
			$data['users'] = '';
			$data['record']='';
		}
		$this->load->view('usercenter/personalcenter',$data);
		$this->load->view('footer');
	}

	// 我的订单
    public function myorder()
	{

		if(isset($_SESSION['phone'])){
			if($_SESSION['phone'] != ''){
				// 获取用户订单
				$order = file_get_contents(POSTAPI.'API_Poorder?dis=all&UserPhone='.$_SESSION['phone']);
				$data['record'] = json_decode(json_decode($order),true);
				// var_dump($data)
				$this->load->view('usercenter/myOrder',$data);
				$this->load->view('footer');
			}else{
				echo "<script>alert('你还没有登陆！');window.location.href='".site_url('login/index')."'</script>";
				exit;
			}
			
		}else{
			echo "<script>alert('你还没有登陆！');window.location.href='".site_url('login/index')."'</script>";exit;
		}
		

	}

	// 我的订单
    public function appraise()
	{
		
		$this->load->view('usercenter/appraise');
				$this->load->view('footer');

	}

	// 我的退款
    public function back()
	{
		
		$this->load->view('usercenter/moneyBack');
				$this->load->view('footer');

	}

	// 优惠券
    public function coupon()
	{
		if(isset($_SESSION['phone'])){
			if($_SESSION['phone'] != ''){
				$card =file_get_contents(POSTAPI."API_UserCoupon?UserPhone=".$_SESSION['phone']);
    			$data['cards'] = json_decode(json_decode($card),true);
    			$this->load->view('usercenter/coupon',$data);
				$this->load->view('footer');
			}else{
				echo "<script>alert('你还没有登陆！');window.location.href='".site_url('login/index')."'</script>";exit;
			}
		}else{
			echo "<script>alert('你还没有登陆！');window.location.href='".site_url('login/index')."'</script>";exit;
		}
	
	}

	// 会员卡
    public function member()
	{
		
		$this->load->view('usercenter/member');
				$this->load->view('footer');

	}

	// 个人信息
    public function userInfo()
	{
		if(isset($_SESSION['phone'])){
			if($_SESSION['phone'] != ''){
				$users = file_get_contents(POSTAPI.'API_User?dis=ckxx&UserPhone='.$_SESSION['phone']);
				$data['user'] = json_decode(json_decode($users),true);
				$this->load->view('usercenter/userInfo',$data);
				$this->load->view('footer');
			}else{
				echo "<script>alert('你还没有登陆！');window.location.href='".site_url('login/index')."'</script>";exit;
			}
		}else{
			echo "<script>alert('你还没有登陆！');window.location.href='".site_url('login/index')."'</script>";exit;
		}
	}
	// 修改个人信息
	public function editusers()
	{
		if($_POST){
			$data['UserId'] = $_POST['UserId'];
			$data['PersonalTaste'] = $_POST['PersonalTaste'];
			if(isset($_POST['LikeCuisine'])){
				if($_POST['LikeCuisine']){
					$data['LikeCuisine'] = implode(',',$_POST['LikeCuisine']);
				}
			}else{
				$data['LikeCuisine'] ='';
			}
			$data['UserName'] = $_POST['UserName'];
			
			if(!empty($_FILES['UserImage']['tmp_name'])){

				$f=&$_FILES['UserImage'];
				$dest_dir='./upload/image';//设定上传目录
				$hou = explode('.',$_FILES['UserImage']['name']);
				$dest=$dest_dir.'/'.date("ymd")."_".date('His').'.'.$hou[1];//我这里设置文件名为日期加上文件名避免重复
				$r=move_uploaded_file($f['tmp_name'],$dest);
				
				$type = pathinfo($dest, PATHINFO_EXTENSION);
				$base = file_get_contents($dest);
				$data['UserImage'] = base64_encode($base);

			}else{
				$data['UserImage'] = '';
			}
			$jsonuser = json_encode($data);
			$user = curl_post(POSTAPI.'API_User?dis=update',$jsonuser);

			if($user == 1){
				if(isset($dest)){
					@unlink ($dest);
				}
				echo "<script>alert('个人资料修改成功！');self.location=document.referrer;</script>";
			}
		}
	}

	// 收货地址
    public function address()
	{
		if(isset($_SESSION['phone'])){
			if($_SESSION['phone'] != ''){
				$address = file_get_contents(POSTAPI."API_MenberAddress?dis=all&value=".$_SESSION['phone']);
				$data['address'] = json_decode(json_decode($address),true);

				$this->load->view('usercenter/address',$data);
				$this->load->view('footer');

			}else{
				echo "<script>alert('你还没有登陆！');window.location.href='".site_url('login/index')."'</script>";exit;
			}

		}else{
			echo "<script>alert('你还没有登陆！');window.location.href='".site_url('login/index')."'</script>";exit;
		}

	}
	// 添加用户地址
	function addressAdd(){
		if($_POST){
				// 添加地址
			$a['UserPhone'] = $_SESSION['phone'];
			$a['Name'] = $_POST['username'];
			$a['Address'] = $_POST['cho_City'].$_POST['cho_Area'].$_POST['cho_Insurer'].$_POST['address'];
			$a['GoodsPhone'] = $_POST['GoodsPhone'];
			$a['SparePhone'] = 0;
			if(!isset($_POST['IsDefault'])){
				$a['IsDefault'] = 0;
			}else{
				$a['IsDefault'] = $_POST['IsDefault'];
			}
			$b = json_encode($a);
			$postadd = curl_post(POSTAPI."API_MenberAddress?dis=xz",$b);
			if($postadd != ''){
				echo "<script>alert('新增地址成功！');window.location.href='address';</script>";
			}else{
				echo "<script>alert('新增地址失败！');</script>";
			}
		}else{
			redirect('home/add');
		}
	}

	// 删除地址
	function deladdress(){
		if($_GET){
			$id= $_GET['id'];
			$isok = file_get_contents(POSTAPI."API_MenberAddress?dis=del&value=".$id);
			$a = str_replace('"', '', $isok);
			if($a = 1){
			echo "<script>alert('删除地址成功！');window.location.href='address';</script>";
			}else{
			echo "<script>alert('删除地址失败！');window.location.href='address';</script>";
			}	
		}	
	}

	// 编辑地址
	function editaddress(){
		if($_POST){

			$arr = array(
				'Name'=>$_POST['name'],
				'Address'=> $_POST['cho_City'].$_POST['cho_Area'].$_POST['cho_Insurer'].$_POST['address'],
				'MemberAddressId'=>$_POST['adrId'],
				'GoodsPhone'=>$_POST['GoodsPhone'],
				'SparePhone'=>'',
				'UserPhone'=>$_SESSION['phone'],
				);
			$arr['IsDefault'] = 0;
			
			
			$jsonval = json_encode($arr);
			$isok = curl_post(POSTAPI."API_MenberAddress?dis=xg",$jsonval);

			if($isok != ''){
				echo "<script>alert('编辑地址成功！');window.location.href='address';</script>";
			}else{
				echo "<script>alert('编辑地址失败！');window.location.href='address';</script>";
			}
		}

	}



}



?>