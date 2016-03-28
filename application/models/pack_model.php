<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*    分类+产品
*/
class Pack_model extends CI_Model
{
		const TBL_CATE = 'packagegroup'; //分类数据库
		
		const TBL_FOOD = 'food'; //菜品数据库

		public function listcates()
		{
			$query = $this->db->get(self::TBL_CATE);
			return $query->result_array();
		}

		// 查出一个菜品
		public function foods($id){
			$contion['id'] = $id;
			$query = $this->db->where($contion)->get(self::TBL_FOOD);
			return $query->row_array();
		}
}


 ?>