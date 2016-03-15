<html><head>
    <title>订单确认</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="edge">    <link href="//p0.meituan.net" rel="dns-prefetch">
    <link href="//p1.meituan.net" rel="dns-prefetch">
    <link href="//mc.meituan.net" rel="dns-prefetch">
    <link href="//xs01.meituan.net" rel="dns-prefetch">
    <script async="" src="//www.google-analytics.com/analytics.js"></script><script>
    var MT_WM = window.MT_WM || {};
    MT_WM.TimeTracker = {rt: 1457951522614, st: Date.now()};
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
    
    <link href="http://xs01.meituan.net/waimai_i/css/page/html/faq.72d4cd4f.css" rel="stylesheet">
    <link href="http://xs01.meituan.net/waimai_i/css/page/order/order.37f04a97.css" rel="stylesheet">
</head>
<body class="i">
    <header id="header" class="header page-header  ">
        <a class="j-back-link back-wrap" href="javascript:;" onclick="">
            <i class="icon i-back"></i>
        </a>
        <div class="header-right"></div>
        <h1 class="j-page-name page-name">订单确认</h1>
    </header>
    <form action="post">
        <div id="address-section"><a class="address-field address-choose j-address-chooose" href="javascript:"><i class="addr-add"></i><span>选择收货地址</span></a></div>
        <div id="choose-pay-wrap" class="order-region">
            <ul id="choose-pay" class="order-region-entries pay-online">
                <li id="order-paytype-2" class="order-region-entry">在线支付<span class="j-order-payonline-discount order-payonline-discount borderradius-2" style="display: none;"></span><i class="i-circle icon-tickthick order-payonline-check"></i><i class="i-circle order-payonline-uncheck"></i></li>
                <li id="order-paytype-1" class="order-region-entry" style="display: none;">货到付款<i class="i-circle icon-tickthick order-payoffline-check"></i><i class="i-circle order-payoffline-uncheck"></i></li>
            </ul>
        </div>
        <div id="poi-coupon" class="order-region">
            <ul class="order-region-entries">
                <li>
                    <a id="poi-coupon-link" class="order-region-entry" href="/order/poicoupons">
                        <span>商家代金券</span><span class="order-coupon-num"><span id="poi-coupon-info" data-couponid="-1">无可用商家代金券</span><i class="icon-arrow-right-thin"></i></span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="order-region">
            <div id="order-timefield" class="order-timefield clearfix">
                <label class="order-timefield-label">送达时间</label>
                <span id="user_receive_time" class="order-timefield-span"><span class="order-timefield-txt" data-unixtime="0">立即送出(大约19:10送达)</span><i class="icon-arrow-right-thin"></i></span>
            </div>
            <div class="order-field clearfix">
                <label class="order-label">备注：</label>
                <input class="order-input" type="text" id="user_caution" placeholder="请填写备注">
            </div>
        </div>
        <script type="text/template" id="template-food-item">
        <li class="order-region-entry">
            <% if (sendPrice!=null) { %><span class="order-entry-price">￥<%=sendPrice%></span><% } %>
            <% if (totalPrice!=null) { %><span class="order-entry-price">￥<%=totalPrice%></span><% } %>
            <% if (boxPrice!=null) { %><span class="order-entry-price">￥<%=boxPrice%></span><% } %>
            <% if (num!=null) { %><span class="order-entry-num">￥<%=price%>&times;<%=num%></span><% } %>
            <span class="order-entry-name text-overflow-ellipsis-2 food-name-width"><%=name%><% if (!!icon) { %><img
            class="i-x15 order-entry-icon" src="<%=icon%>"><% } %></span>
        </li>
        </script>
        <div id="order-foods-wrap" class="order-region">
            <h1 class="order-region-title">菜品信息</h1>
            <ul class="order-region-entries" id="food-items">         <li class="order-region-entry">             <span class="order-entry-price">￥26</span><span class="order-entry-num">￥13×2</span>             <span class="order-entry-name text-overflow-ellipsis-2 food-name-width">小碗（牛杂）</span>         </li>              <li class="order-region-entry">             <span class="order-entry-price">￥4</span>             <span class="order-entry-name text-overflow-ellipsis-2 food-name-width">配送费</span>         </li>              <li class="order-region-entry">             <span class="order-entry-price">￥2</span>             <span class="order-entry-name text-overflow-ellipsis-2 food-name-width">餐盒费</span>         </li>     </ul>
        </div>
        <div id="order-actv" class="order-region" style="display: none;">
            <h1 class="order-region-title">商家活动</h1>
        <ul id="order-actv-list" class="order-region-entries"></ul>
    </div>
    <div id="delivery-tip" class="order-tips-thirdpart">由美团专送提供高品质配送服务</div>
</form>
<div class="order-btn-field-placeholder"></div>
<div class="order-btn-field">
    <input id="order-submit" class="combtn order-btn" type="submit" value="立即下单">
    <span class="order-total-field"><span id="order-total" class="order-total">￥32</span></span>
</div>
<style>
    .loading-mask{
        display:none!important;
    }
</style>
<script>if (MT_WM.logFirstScreenTime) MT_WM.logFirstScreenTime();</script>
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
<script>Raven.config('http://e284c96b17d24de69b3ac24cae61c5d0@sentry.sankuai.com/78').install();</script>  <script src="http://xs01.meituan.net/waimai_i/js/page/order/order.097051b9.js"></script>
<script>
require(['page/order/order'], function (orderPage) {
orderPage.init({
environment: 'production', // 支付区分测试和线上环境
baseurl: '',
csrfToken: 'xP8+IpN8BovlNMK8fhnTnCDxH7Ou4Tk5FgV4HaarnYvLDeov9M3dOkInCpHXo+Pm' //anti-CSRF
});
});
</script>
<div id="dialog1457951523803" class="tipdialog" style="top: 378.5px; left: 140.5px; opacity: 0; display: none;"><div class="tipdialog-content"><span>请输入收货地址</span></div></div></body></html>