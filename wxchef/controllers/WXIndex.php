<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @Author: Harris-Aaron
 * @Date:   2016-04-15 16:04:05
 * @Last Modified by:   Harris-Aaron
 * @Last Modified time: 2016-05-20 22:09:01
 */



if (DeBug == 1) {
	//报告所有错误
    error_reporting(E_ALL);
} else if (DeBug == 0) {
	//禁用错误报告
    error_reporting(0);
} else {
	//报告运行时错误
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
}
    
class WXIndex extends CI_Controller { 

	function __construct()
	{
        parent::__construct();
        $this->load->library('IndexWxApi'); 
        $this->load->library('IndexValid');
	}
	public function index() 
	{  
	 echo "<br><br><br><br><br><br><center><h3>这里是WXIndex控制器,管理 WXAPI 、TOKEN 和 INTERLOCUTION 及 EVENT 反馈</h3></center>";  
	}
	public function menu()
	{
		$reMenuData = $this->indexwxapi->wxMenuCreate(MENU);
        if ($reMenuData['errmsg'] == 'ok')
        { echo "<script>alert('自定义菜单修改成功！');</script>";}
        $this->load->view('sdk/lookMe');
	}
}