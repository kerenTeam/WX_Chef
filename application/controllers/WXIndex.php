<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @Author: Harris-Aaron
 * @Date:   2016-04-15 16:04:05
 * @Last Modified by:   Harris-Aaron
 * @Last Modified time: 2016-04-15 17:01:27
 */
    
class WXIndex extends CI_Controller { 

	function __construct()
	{
        parent::__construct();
        //$this->load->library('IndexValid');
        $this->load->library('IndexWxApi'); 
	}
	public function index() 
	{  
	    $reMenuData = $this->indexwxapi->wxMenuCreate(MENU);
        if ($reMenuData['errmsg'] == 'ok')
        { echo "<script>alert('自定义菜单修改成功！');</script>";}
        $this->load->view('sdk/lookMe');
	}
}