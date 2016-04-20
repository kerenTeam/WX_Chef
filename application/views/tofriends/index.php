<?php 

        $jsapiTicket = json_decode(file_get_contents("https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token=".$_SESSION['update_code']."&type=jsapi"),TRUE);
        if (isset($jsapiTicket['errcode'])) {
          $this->indexwxapi->wxAccessToken(APPID,APPSECRET);
          $jsapiTicket = json_decode(file_get_contents("https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token=".$_SESSION['update_code']."&type=jsapi"),TRUE);
        }
        $_SESSION['jsapi_ticket'] = $jsapiTicket['ticket'];
   
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $url = "$protocol$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $timestamp = time();
        
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $str = "";
        for ($i = 0; $i < 16; $i++) {
          $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        $nonceStr = $str;
    
        // 这里参数的顺序要按照 key 值 ASCII 码升序排序
        $string = "jsapi_ticket=".$_SESSION['jsapi_ticket']."&noncestr=$nonceStr&timestamp=$timestamp&url=$url";
    
        $signature = sha1($string);
    
        $signPackage = array("appId" => APPID, "nonceStr" => $nonceStr, "timestamp" => $timestamp, "url" => $url, "signature" => $signature, "rawString" => $string);

?>

<!-- https 适应IOS9 -->
<script src="https://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript">
///
///    微信分享api接口
///
wx.config({
      debug: false,  
      appId: '<?php echo APPID; ?>',
      timestamp: '<?php echo $signPackage["timestamp"];?>',
      nonceStr: '<?php echo $signPackage["nonceStr"];?>',
      signature: '<?php echo $signPackage["signature"];?>',
      jsApiList: [
        'onMenuShareTimeline',
        'onMenuShareAppMessage',
        'onMenuShareQQ',
        'onMenuShareWeibo',
        'onMenuShareQZone'
      ]
  });
///
///    自定义分享数据  标题随机
///
    var titlekf=['互联网之子1','互联网之子2','互联网之子3','互联网之子4','互联网之子5','互联网之子6','互联网之子7','互联网之子8'];
    var title = titlekf[Math.floor(Math.random()*titlekf.length)];
    var desc = '在长大的过程中，我才慢慢发现，我身边的所有事，别人跟我说的所有事，那些所谓本来如此，注定如此的事，它们其实没有非得如此，事情是可以改变的。更重要的是，有些事既然错了，那就该做出改变。';
    var link = 'http://movie.douban.com/subject/25785114/';
    var imgUrl = 'http://p3.music.126.net/mpJ6ZoLwKiVwODlGMjRU8Q==/2898312652933130.jpg';

</script>
<!-- 分享响应 API -->
<script src="views/tofriends/js/demo.js"> </script>

