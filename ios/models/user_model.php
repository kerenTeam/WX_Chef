<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class User_model extends CI_Model
{
	const TBL_USER = 'user';

	// 根据电话查询一条数据
	public function user($phone)
	{
		$contion['phone'] = $phone;
		$query = $this->db->where($contion)->get(self::TBL_USER);
		return $query->row_array();
	}
	
	// 注册
	public function adduser($data)
	{
		return $this->db->insert(self::TBL_USER,$data);
	}
}





 ?>