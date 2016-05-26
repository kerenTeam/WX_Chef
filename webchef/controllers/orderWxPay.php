
<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @Author: Harris-Aaron
 * @Date:   2016-05-25 11:28:01
 * @Last Modified by:   Harris-Aaron
 * @Last Modified time: 2016-05-25 11:50:59
 */



class orderWxPay extends CI_Controller{
	
    function __construct()
	{
        parent::__construct();
    
	}

    public function orderpay($value='')
    {
        if($_POST){
            var_dump($_POST);
        }
    }


}