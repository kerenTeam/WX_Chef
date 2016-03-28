<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Option_model extends CI_Model
{

	const TBL_BRAND = 'system'; //网站设置数据库
	
	// banner
	function banners(){
		$sql = "select banner from system";
		$query = $this->db->query($sql);
		return $query->row_array();
	}

	// 其他设置
	function system($name){
		$sql = "select $name from system";
		$query = $this->db->query($sql);
		return $query->row_array();
	}


	
}


 ?>