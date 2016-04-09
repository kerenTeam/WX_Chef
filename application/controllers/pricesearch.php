<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pricesearch extends CI_Controller {

	
	public function caiprice(){
		$name = $_POST['name'];
		$time = $_POST['time'];
		$cai = file_get_contents(POSTAPI."API_Vegetable?vegetableid=".$name."&time=".$time);
		$data = json_decode(json_decode($cai),true);
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
