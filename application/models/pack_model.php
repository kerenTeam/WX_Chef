<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*    分类+产品
*/
class Pack_model extends CI_Model
{
		const TBL_CATE = 'packagegroup'; //分类数据库
		
		const TBL_FOOD = 'food'; //菜品数据库
		
		const TBL_BASKET = 'basket'; //菜品数据库
		

		public function listcates()
		{
			$query = $this->db->get(self::TBL_CATE);
			return $query->result_array();
		}
		public function setcate($pid){
				
		}
		// 查出一个菜品
		public function foods($id){
			$contion['id'] = $id;
			$query = $this->db->where($contion)->get(self::TBL_FOOD);
			return $query->row_array();
		}
		//根据分类查询菜品
		public function catefoods($pid){
			$condition['pid'] = $pid;
			$query = $this->db->where($condition)->get(self::TBL_FOOD);
			return $query->result_array();
			
		}
		// 加入购物车
		
		public function addcart($data){
			return $this->db->insert(self::TBL_BASKET,$data);
		}
		// 删除购物车
		public function delcarts($id){
			$condition['id'] = $id;
			return $this->db->where($condition)->delete(self::TBL_BASKET);
		}
		// 查出购物车
		public function listcarts($cookie){
			$contion['phone'] = $cookie;
			$query = $this->db->where($contion)->get(self::TBL_BASKET);
			return $query->result_array();
		}
		
		// 换一换
		public function upcart($id,$data){
			$condition['dishName'] = $id;
			return $this->db->where($condition)->update(self::TBL_BASKET,$data);
		}

		
}


 ?>