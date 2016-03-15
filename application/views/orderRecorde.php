


<!DOCTYPE HTML>
<html>
<head>
    <title>订单记录</title>
<meta charset="utf-8"/>
<meta name="viewport"
      content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<meta name="format-detection" content="telephone=no"/>
<meta http-equiv="X-UA-Compatible" content="edge" />    <link href="//p0.meituan.net" rel="dns-prefetch">
    <link href="//p1.meituan.net" rel="dns-prefetch">
    <link href="//mc.meituan.net" rel="dns-prefetch">
    <link href="//xs01.meituan.net" rel="dns-prefetch">
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="http://xs01.meituan.net/waimai_i/img/favicon3.png">
    <link rel="icon" href="http://xs01.meituan.net/waimai_i/img/favicon3.png" size="16x16 32x32">
    <link rel="apple-touch-icon-precomposed" href="http://xs01.meituan.net/waimai_i/img/favicon4.d04bcada.png" size="114x114">
    <script>
        var MT_WM = window.MT_WM || {};
        MT_WM.TimeTracker = {rt: 1458012889579, st: Date.now()};
        MT_WM.logFirstScreenTime = function () {
            MT_WM.TimeTracker.fst = Date.now();
        };
        window.addEventListener('load', function () {
            //保存性能时间
            MT_WM.TimeTracker.lt = Date.now();
        });
        MT_WM.STATIC_ROOT = 'http://xs01.meituan.net/waimai_i/56e1569a';
        function delayGo(u, t) {
            setTimeout(function () {
                if (typeof u == 'string') location = u;
                else if (typeof u == 'function') u();
            }, (t == null ? 300 : t));
        }
    </script>
    <script type="text/javascript">
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-45741865-3', 'i.waimai.meituan.com');
        ga('send', 'pageview');
    </script>
    <link rel="stylesheet" href="http://xs01.meituan.net/waimai_i/css/global.d421112e.css">

    
    <link href="http://xs01.meituan.net/waimai_i/css/page/order/order-list.134345ee.css" rel="stylesheet"/>

</head>
<body class="i"> 

	<header id="header" class="header page-header  ">
    <div class="header-right"></div>
      <h1 class="j-page-name page-name">我的订单</h1>
	</header>


    <div class="list" id="order-list">


<div class="field">
    <div class="field-head">
        <span class="field-head-name">食来运转</span>
        <span class="field-head-status">订单完成</span>
    </div>
    <a class="field-item clearfix" href="/order/statusdetail/14111000518350084">
        <div class="avatar">
            <img src="http://xs01.meituan.net/waimai_i/img/shoploading.c7f7066c.png" data-src-retina="http://p0.meituan.net/xianfu/8ffa0162c3519ca2e23f3e3b9f977914325740.jpg"
                 class="j-avatar-img avatar-img"/>
        </div>
        <div class="content">
            <p class="price">￥6</p>

            <p class="order-time">2014-11-10 16:36</p>

            <p class="delivery_tip">本订单由食来运转【送餐到寝】提供配送服务</p>
        </div>
        <i class="field-arrow icon-arrow-right"></i>
    </a>
</div>

            <script>if (MT_WM.logFirstScreenTime) MT_WM.logFirstScreenTime();</script>
    </div>

<div id="user-bar-wrap">
    <div class="user-bar-placeholder"></div>
<div class="user-bar">
        <a class="user-bar-btn" href="/"><i class="ico-bowl-fill"></i><span
                class="user-bar-btn-txt">首页</span></a>
        <a class="user-bar-btn user-bar-btn-focus" href="/order/list"><i class="ico-paper"></i><span
                class="user-bar-btn-txt">订单</span></a>
        <a class="user-bar-btn" href="/account/redirect"><i class="ico-user"></i><span
                class="user-bar-btn-txt">我的</span></a>
</div>
</div>

<script src="http://xs01.meituan.net/waimai_i/js/lib/wm_lib.578b6b32.js"></script>

<script>require.config({
    baseUrl: "http://xs01.meituan.net/waimai_i/56e1569a/js",
    shim: {
        'zepto': {
            exports: 'Zepto'
        },
        'jquery': {
            exports: 'Zepto'
        }
    },
    paths: {
        'zepto': 'fe_common/lib/zepto',
        'jquery': 'fe_common/lib/zepto'
    }
});</script>

<script>Raven.config('http://e284c96b17d24de69b3ac24cae61c5d0@sentry.sankuai.com/78').install();</script>  <script src="http://xs01.meituan.net/waimai_i/js/lib/webp.lazyload.d9bc6605.js"></script>
<script src="http://xs01.meituan.net/waimai_i/js/page/order/order-list.323cf8fe.js"></script>
<script>
    require(['page/order/order-list'], function (page) {
        page.init({
            terminal: 'i',
            environment : 'production', // 支付区分测试和线上环境
            baseurl: '',
            pageCount: 1
        });
    });
</script>

</body>
</html>
