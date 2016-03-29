<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*    y用户
*/
class user extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('option_model');
		$data['site'] = $this->option_model->system('siteName');
		$data['keyword'] = $this->option_model->system('keyWord');
		$data['description'] = $this->option_model->system('keyWordDescriber');
		$this->load->view('header',$data);
	}

	public function ucent()
	{
		
		$this->load->view('usercenter');
	}



}





 ?>