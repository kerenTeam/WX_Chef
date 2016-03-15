
    <script>
        var MT_WM = window.MT_WM || {};
        MT_WM.TimeTracker = {rt: 1458014153648, st: Date.now()};
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
 <script src="skin/js/ga.js"></script>

    <link rel="stylesheet" href="skin/css/globe.css">

    <link href="http://xs01.meituan.net/waimai_i/css/page/order/order-detail.e74036c2.css" rel="stylesheet"/>

</head>
<body class="i"> 

	<header id="header" class="header page-header  ">
<a class="j-back-link back-wrap" href="#"
   onclick="if(document.referrer &amp;&amp; document.referrer.indexOf('/order/list')>=0){delayGo(function() {history.go(-1);});} else {delayGo('/order/list')} return false;">
    <i class="icon i-back"></i>
</a>

<div class="header-right"><i class="j-res-phone res-phone"></i></div>
<h1 class="j-page-name page-name">订单详情</h1>
	</header>



<div id="nav" class="nav">
    <p class="nav-wrap">
        <span class="j-nav-item j-nav-status nav-item nav-choose">订单状态</span>
        <span class="j-nav-item j-nav-detail nav-item">订单详情</span>
        <label class="j-nav-bottomline nav-bottomline"></label>
    </p>
</div>

<div id="order-status">
    <div class="timeline">


            <div class="timeline-item">
                <img class="timeline-logo" src="http://p1.meituan.net/xianfu/8adf62cf3cb75f1a4b21380be10af9fa2048.png">

                <div class="timeline-block">
                    <i class="timline-block-arrow"></i>

                    <p class="timeline-title">订单已提交<span
                            class="timeline-time">16:36</span></p>

                        <p class="timeline-sub">请耐心等待商家确认</p>
                </div>
            </div>
                <div class="timeline-connect timeline-connect-21"></div>

            <div class="timeline-item">
                <img class="timeline-logo" src="http://p0.meituan.net/xianfu/794ec85889844239f32764861c56660a2048.png">

                <div class="timeline-block">
                    <i class="timline-block-arrow"></i>

                    <p class="timeline-title">支付成功<span
                            class="timeline-time">16:38</span></p>

                        <p class="timeline-sub"></p>
                </div>
            </div>
                <div class="timeline-connect timeline-connect-12"></div>

            <div class="timeline-item">
                <img class="timeline-logo" src="http://p0.meituan.net/xianfu/a34001a981214d535bd8466da34490502048.png">

                <div class="timeline-block">
                    <i class="timline-block-arrow"></i>

                    <p class="timeline-title">商家已接单<span
                            class="timeline-time">16:38</span></p>

                        <p class="timeline-sub">商品准备中</p>
                </div>
            </div>
                <div class="timeline-connect timeline-connect-21"></div>

            <div class="timeline-item">
                <img class="timeline-logo" src="http://p1.meituan.net/xianfu/e887522748d496915280fc6e97023d1a2048.png">

                <div class="timeline-block">
                    <i class="timline-block-arrow"></i>

                    <p class="timeline-title">订单完成<span
                            class="timeline-time">19:36</span></p>

                        <p class="timeline-sub"></p>
                </div>
            </div>
    </div>
    <div class="bottombar-placeholder"></div>


    <div class="bottombar-down">
        <div class="bottombar">
    <div class="bottombar-icon"><i class="icon-tickO2"></i></div>
            <div class="bottombar-main">

    <div class="bottombar-buttonwrap bottombar-buttonwrap-1">
<a class="combtn bottombar-btn-dark"
                             href="/help/feedback?orderViewId=14111000518350084">订单投诉</a>    </div>
            </div>
        </div>
    </div>

</div>


<div id="order-detail" style="display: none">

    <div class="orderregion">
        <a class="status-hotelname" href="/restaurant/51835">
            <i class="icon1-detail status-hotelname-icon"></i>
            <label class="status-hotelname-name">食来运转</label>
            <i class="icon-arrow-right-thin status-hotelname-back"></i>
        </a>
    </div>

    <div class="orderregion orderregion-top">
        <ul class="orderregion-entries">
            <li class="orderregion-entry">
                <span class="name text-overflow-ellipsis-2">丸子味豆汤饭</span>
                <span class="price">￥20</span>
                <span class="num">×2</span>
            </li>
        </ul>
    </div>

    <div class="orderregion">
        <ul class="orderregion-entries">
            <li class="orderregion-entry order-other-price">
                <span class="name text-overflow-ellipsis-2">包装盒</span>
                <span class="price">￥&nbsp;0</span>
            </li>
            <li class="orderregion-entry order-other-price">
                <span class="name text-overflow-ellipsis-2">配送费</span>
                <span class="price">￥&nbsp;0</span>
            </li>
                <li class="orderregion-entry order-other-price coupon">
                    <span class="name text-overflow-ellipsis-2">首单立减</span>
                    <span class="price">-￥14</span>
                </li>
            <li class="orderregion-entry order-total-price">
                <span class="name text-overflow-ellipsis-2">合计</span>
                <span class="price">￥&nbsp;6</span>
            </li>
        </ul>
    </div>

    <script>if (MT_WM.logFirstScreenTime) MT_WM.logFirstScreenTime();</script>

    <div class="orderregion">
        <h1 class="orderregion-title">
            <i class="icon1-detail status-detail-icon"></i>
            <label class="status-name">订单详情</label>
        </h1>
        <ul class="orderregion-entries-compact">
            <li class="orderregion-entry-compact">
                <span class="label">订单号：</span>14111000518350084
            </li>
            <li class="orderregion-entry-compact">
                <span class="label">下单时间：</span>2014-11-10 16:36:14
            </li>
            <li class="orderregion-entry-compact">
                <span class="label">支付方式：</span>
            
            在线支付
            </li>
            <li class="orderregion-entry-compact">
                <span class="label">手机号：</span>15708434450
            </li>
            <li class="orderregion-entry-compact">
                <span class="label">地址：</span>四川师范大学成龙校区东苑5栋
            </li>
            <li class="orderregion-entry-compact">
                <span class="label">备注：</span>尽快哦
            </li>
            <li class="orderregion-entry-compact">
                <span class="label">配送信息：</span>本订单由食来运转提供配送服务
            </li>
        </ul>
    </div>


    <div class="buy-again-placeholder"></div>
    <div class="buy-again-wrap"><input id="buy-again-btn" class="combtn buy-again-btn" type="button" value="再来一单"/>
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

<script>Raven.config('http://e284c96b17d24de69b3ac24cae61c5d0@sentry.sankuai.com/78').install();</script>  <script src="http://xs01.meituan.net/waimai_i/js/page/order/order-detail.70fb227e.js"></script>
<script>
    require(['page/order/order-detail'], function (orderDetailPage) {
        orderDetailPage.init({
            order: {
                terminal: 'i',
                environment: 'production', // 支付区分测试和线上环境
                baseurl: '',
                channel: '1033',
                orderViewId: "14111000518350084",
                orderTime: "1415608574",
                hastenTime: "0",
                status: "8",
                payStatus: "3",
                phone: "13088036502",  
                courierPhone: "",  
                servicePhone: '4008507777',  
                orderRecInitTime: [0, 1415608717,1415608717],
                serverTime: 1458014153,
                operator_tip: '',
                poiId: 51835,
                foodlist: [
                    
                    {
                        id: 3588752,
                        spu_id: 3588752,
                        count: 2
                    }
                ],
                longitude: 104200459,
                latitude: 30564450
            }
        });
    });
</script>

</body>
</html>
