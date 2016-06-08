
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
			if($add != ''){
				echo $add[0]['memberaddressid'];
			}
    	}   

	}

	// 获取验证码
	public function send()
	{
		if($_POST){
			$phone = $_POST['phone'];
		    $ch = curl_init();
		    $url = 'http://apis.baidu.com/kingtto_media/106sms/106sms?mobile='.$phone.'&content=%e3%80%90%e5%a4%a7%e5%8e%a8%e5%88%b0%e5%ae%b6%e3%80%91%e6%82%a8%e7%9a%84%e6%b3%a8%e5%86%8c%e9%aa%8c%e8%af%81%e7%a0%81%e4%b8%ba%ef%bc%9a'.randNms;
		    $header = array('apikey: f8ae5ba4094b4d5134303eb87f7a115d');
		    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		    curl_setopt($ch , CURLOPT_URL , $url);
		    $res = curl_exec($ch);
		    echo randNms;
		}
	}


	// 返回菜价
	public function caiprice()
	{
		if($_POST){
			$name = $_POST['name'];
			$time = $_POST['time'];
			$cate = $_POST['cates'];
			$arr = array(
				'FoodMarket' => $name,
				'MarketCategorie' => $cate,
				'time' => $time,
				);
			$json = json_encode($arr);
			$cai = curl_post(POSTAPI."API_Vegetable?dis=xc",$json);
			$data = json_decode(json_decode($cai),true);
			
			if($data == NULL){
				var_dumP("<tr><td></td><td>没有最新菜价！换前一天试试。</td><td></td></tr>");
			}else{
				$str ='';
				for ($i=0; $i < count($data); $i++) { 
					$str .="<tr><td>".$data[$i]['name']."</td>";
		            $str .="<td>1".$data[$i]['unit']."</td>";
		            $str .="<td>".$data[$i]['price']."</td>";
				}
				$str .= "</tr>";
				var_dump($str);
			}
		}

	}
}