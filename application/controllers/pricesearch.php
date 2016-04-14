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
		$foodid = $this->input->post('foodid');
    	$numbers = $this->input->post('numbers');
    	if(!$this->input->post('couponid')){
    		$couponid = '';
    	}else{
    		$couponid = $this->input->post('couponid');
    	}
    	// var_dumP($couponid);
    	$foodOrder = array_combine($foodid,$numbers);
    	$foodJson = array();
		 foreach ($foodOrder as $fid => $fnums)
        { $foodJson[] = "{'FoodId':"."'".$fid."'".","."'FoodNumber':"."'".$fnums."'"."}"; }
  		// print_r($foodJson) ;
    	$foodJsondata['UserPhone'] = $this->input->post('UserPhone');
        $foodJsondata['UserCouponId'] = $couponid;
        $foodJsondata['MenberAddressId'] = $this->input->post('memberaddressid');
        $foodJsondata['PaymentMethod'] = '';
        $foodJsondata['Integral'] = 0;
        $foodJsondata['poorderentry'] = $foodJson;
        $abc = str_replace('"{"','{"',str_replace('"}"','"}',str_replace('}"]','}]',str_replace('["{','[{',str_replace("'",'"',json_encode($foodJsondata))))));
     	

     	$cai = curl_post(POSTAPI."API_Poorder?dis=dd",$abc);
     	var_dumP($cai);
	}
}
