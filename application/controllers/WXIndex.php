<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @Author: Harris-Aaron
 * @Date:   2016-04-15 16:04:05
 * @Last Modified by:   Harris-Aaron
 * @Last Modified time: 2016-04-15 20:49:35
 */
    
class WXIndex extends CI_Controller { 

	function __construct()
	{
        parent::__construct();
        $this->load->library('IndexWxApi'); 
        $this->load->library('IndexValid');
	}
	public function index() 
	{  
	 echo "这里是WXIndex控制器,管理WXApi、TOKEN和对话及event反馈";  exit; 
	}
	public function menu()
	{
		$reMenuData = $this->indexwxapi->wxMenuCreate(MENU);
        if ($reMenuData['errmsg'] == 'ok')
        { echo "<script>alert('自定义菜单修改成功！');</script>";}
        $this->load->view('sdk/lookMe');
	}
}