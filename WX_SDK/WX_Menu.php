<?php 
/**
 * @Author: Harris-Aaron
 * @Date:   2016-04-13 11:53:42
 * @Last Modified by:   Harris-Aaron
 * @Last Modified time: 2016-04-14 23:18:47
 */
include_once "WX_API.php";            //  API
$WxApiObj = new WxApi();
$menu = '{
    "button": [
        {
            "type": "view",
            "name": "大厨点菜",
            "url": "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxa997c956cf6631b0&redirect_uri=http://www.krfer.com/index.php/home/index&response_type=code&scope=snsapi_userinfo&state=1&connect_redirect=1#wechat_redirect"
        },
        {
            "name": "大厨到家",
            "sub_button": [
                {
                    "type": "view",
                    "name": "套餐",
                    "url": "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxa997c956cf6631b0&redirect_uri=http://www.krfer.com/index.php/home/cailan#fe7ad9a9-1bec-4929-b160-85f9a784f527&response_type=code&scope=snsapi_userinfo&state=1&connect_redirect=1#wechat_redirect"
                },
                {
                    "type": "view",
                    "name": "宴会定制",
                    "url": "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxa997c956cf6631b0&redirect_uri=http://www.krfer.com/index.php/home/party&response_type=code&scope=snsapi_userinfo&state=1&connect_redirect=1#wechat_redirect"
                }
            ]
        },
                {
            "name": "我的大厨",
            "sub_button": [
                {
                    "type": "view",
                    "name": "我的信息",
                    "url": "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxa997c956cf6631b0&redirect_uri=http://www.krfer.com/index.php/home/ucent&response_type=code&scope=snsapi_userinfo&state=1&connect_redirect=1#wechat_redirect"
                },
                {
                    "type": "view",
                    "name": "app下载",
                    "url": "https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxa997c956cf6631b0&redirect_uri=http://www.krfer.com/index.php/home/registgift&response_type=code&scope=snsapi_userinfo&state=1&connect_redirect=1#wechat_redirect"
                }
            ]
        }
    ]
}';
    $wxMenuCreateMsg = $WxApiObj->wxMenuCreate($menu);
    var_dump($_SESSION['update_code']); 

    if ($wxMenuCreateMsg['errmsg'] == 'ok') {
        echo "<script>alert('自定义菜单修改成功！');</script>"; exit;
    }

?>