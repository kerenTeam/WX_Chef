<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pricesearch extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('post_helper');
	}
	public function caiprice(){
		$name = $_POST['name'];
		$time = $_POST['time'];
		$arr = array(
			'vegetableid' => $name,
			'time' => $time,
			);
		$json = json_encode($arr);
		$cai = curl_post(POSTAPI."API_Vegetable?dis=xc",$json);
		$data = json_decode(json_decode($cai),true);
		var_dumP($data);
		if($data == NULL){
			var_dumP("<th>没有最新菜价！换前一天试试。</th>");
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


	public function payOrder()
	{
			$a['Name'] = $_POST['name'];
			$a['UserPhone'] = $_SESSION['phone'];
			$a['Address'] = $_POST['address'];
			$a['GoodsPhone'] = $_POST['GoodsPhone'];
			$a['SparePhone'] = '';
			$a['IsDefault'] = 0;
		
			$c[] = $a;
			$b = json_encode($c);
			$postadd = curl_post(POSTAPI."API_MenberAddress?dis=xz&phone=".$_SESSION['phone'],$b);
			 var_dump($postadd);
	}

	public function send(){
		$phone = $this->input->post('UserPhone');
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
