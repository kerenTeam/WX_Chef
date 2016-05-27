
<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @Author: Harris-Aaron
 * @Date:   2016-05-25 11:28:01
 * @Last Modified by:   Harris-Aaron
 * @Last Modified time: 2016-05-25 11:50:59
 */


class postsend extends CI_Controller{
	function __construct()
	{
        parent::__construct();
        $this->load->helper('post_helper');
    
	}
	// 添加服务地址
    function address(){
    	if($_POST){
    		$a['Name'] = $_POST['name'];
			$a['UserPhone'] = $_SESSION['phone'];
			$a['Address'] = $_POST['address'];
			$a['GoodsPhone'] = $_POST['phone'];
			$a['SparePhone'] = '';
			$a['IsDefault'] = 1;
			$b = '['.json_encode($a).']';
			
			$postadd = curl_post(POSTAPI."API_MenberAddress?dis=xz&phone=".$_SESSION['phone'],$b);
			$add = json_decode(json_decode($postadd),true);
			// var_dump($add);
			if($add != ''){
				echo $add[0]['memberaddressid'];
			}
    	}   

	}
}