<?php 
/**
 * @Author: Harris-Aaron
 * @Date:   2016-04-13 11:53:42
 * @Last Modified by:   Harris-Aaron
 * @Last Modified time: 2016-04-13 14:16:44
 */
include_once "WX_API.php";            //  API
$WxApiObj = new WxApi();
$menu = '{
    "button": [
        {
            "name": "个人",
            "sub_button": [
                {
                    "type": "view",
                    "name": "用卡信息",
                    "url": "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxb7b2ba9884d3f463&redirect_uri=http://www.krsmgs.com/application/home/card_buy.php&response_type=code&scope=snsapi_userinfo&state=1&connect_redirect=1#wechat_redirect"
                },
                {
                    "type": "view",
                    "name": "购卡中心",
                    "url": "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxb7b2ba9884d3f463&redirect_uri=http://www.krsmgs.com/application/home/buycard.php&response_type=code&scope=snsapi_userinfo&state=1&connect_redirect=1#wechat_redirect"
                },
                {
                    "type": "view",
                    "name": "使用纪录",
                    "url": "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxb7b2ba9884d3f463&redirect_uri=http://www.krsmgs.com/application/home/history.php&response_type=code&scope=snsapi_userinfo&state=1&connect_redirect=1#wechat_redirect"
                }
            ]
        },
        {
            "type": "view",
            "name": "预约",
            "url": "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxb7b2ba9884d3f463&redirect_uri=http://www.krsmgs.com/application/home/newBooking.php&response_type=code&scope=snsapi_userinfo&state=1&connect_redirect=1#wechat_redirect"
        },
        {
            "type": "view",
            "name": "广场",
			"url": "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx8aab25f866819db7&redirect_uri=http://www.krfer.com/Application/home/car.php&response_type=code&scope=snsapi_userinfo&state=1&connect_redirect=1#wechat_redirect"
        }
    ]
}';
    $wxMenuCreateMsg = $WxApiObj->wxMenuCreate($menu);
    var_dump($_SESSION['update_code']); exit;

    if ($wxMenuCreateMsg['errmsg'] == 'ok') {
    	echo "<script>alert('自定义菜单修改成功！');</script>"; exit;
    }

?>