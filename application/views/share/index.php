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
    // var titlekf=['互联网之子1','互联网之子2','互联网之子3','互联网之子4','互联网之子5','互联网之子6','互联网之子7','互联网之子8'];
    // var title = titlekf[Math.floor(Math.random()*titlekf.length)];
    var title = '<?php echo $_SESSION['userinfo']['nickname']; ?> -- Biji Coffee Company';
    var desc = 'Biji Company is looking for the best coffee in Indonesia, that is why the website of the Biji Coffee Company introduce the image of public and traveling company.';
    var link = 'http://www.csswinner.com/details/biji-coffee-company/10426';
    var imgUrl = '<?php echo $_SESSION['userinfo']['headimgurl']; ?>';

</script>
<!-- 分享响应 API -->
<script src="<?php echo base_url('application/views/share/js/demo.js');?>"> </script>



<body class="am-shadow">
    <header data-am-widget="header" class="am-header am-header-default topform">
      <div class="am-header-left am-header-nav">
        <a href="javascript:" onclick="<?php echo site_url('home/orderR')?>">
          <i class="am-header-icon am-icon-chevron-left"></i>
        </a>
      </div>
      <h1 class="am-header-title">
      分享
      </h1>
    </header> 
    <div class="shareto"><span class="am-icon-share"></span><!-- <img src="skin/img/shareto.jpg" alt=""> --></div>
    <!-- content -->
    <div class="shareimg"><img src="skin/img/article/it1.png" alt=""></div>
    <div class="am-padding-sm am-text-sm">
      <p class="sline">
        感谢亲！当前积分累计<span class="red">300</span>分。<br>
        每分享一次可以<span class="red">增加30积分</span>
      </p>
      <a href="javascript:;" class="share" id="share">分享</a>
    </div>
    <!-- footer -->
    <div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default nav-bot">
      <ul class="am-navbar-nav am-cf am-avg-sm-4 am-shadow">
        <li >
      <a href="<?php echo site_url('home/index')?>">
        <span class=""><img src="skin/img/home1.png" alt=""></span>
        <span class="am-navbar-label">首页</span>
      </a>
    </li>
    <li>
      <a href="<?php echo site_url('home/cart')?>">
        <span class=""><img src="skin/img/clz.png" alt=""></span>
        <span class="am-navbar-label">菜篮子</span>
      </a>
    </li>
    <li>
      <a href="<?php echo site_url('home/search')?>">
        <span class=""><img src="skin/img/ss.png" alt=""></span>
        <span class="am-navbar-label">搜索</span>
      </a>
    </li>
    <li>
      <a href="<?php echo site_url('home/ucent')?>" class="active">
        <span class=""><img src="skin/img/gr2.png" alt=""></span>
        <span class="am-navbar-label">我的</span>
      </a>
    </li>
      </ul>
    </div>
</body>
<script src="skin/js/jquery.min.js"></script>
<script>
  $(function(){
    $('#share').click(function(){
      $('.shareto').fadeIn(400);
    });
     $('.shareto').click(function(){
      $('.shareto').fadeOut(400);
     })
  })
 
</script>
</html>

