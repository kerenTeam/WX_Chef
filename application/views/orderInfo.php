
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

<header data-am-widget="header" class="am-header am-header-default topform">
      <div class="am-header-left am-header-nav">
          <a href="javascript:" onclick="javascript:history.go(-1);">

                <i class="am-header-icon am-icon-chevron-left"></i>
          </a>
      </div>

      <h1 class="am-header-title">
          订单详情
      </h1> 
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
                <span class="am-icon-user u pink"></span>

                <div class="timeline-block">
                    <i class="timline-block-arrow"></i>

                    <p class="timeline-title">订单已提交<span
                            class="timeline-time">16:36</span></p>

                        <p class="timeline-sub">请耐心等待商家确认</p>
                </div>
            </div>
                <div class="timeline-connect timeline-connect-21"></div>

            <div class="timeline-item">
                 <span class="am-icon-credit-card-alt c pink"></span>

                <div class="timeline-block">
                    <i class="timline-block-arrow"></i>

                    <p class="timeline-title">支付成功<span
                            class="timeline-time">16:38</span></p>

                        <p class="timeline-sub"></p>
                </div>
            </div>
                <div class="timeline-connect timeline-connect-12"></div>

            <div class="timeline-item">
                <span class="am-icon-home h pink"></span>
                <div class="timeline-block">
                    <i class="timline-block-arrow"></i>

                    <p class="timeline-title">商家已接单<span
                            class="timeline-time">16:38</span></p>

                        <p class="timeline-sub">商品准备中</p>
                </div>
            </div>
                <div class="timeline-connect timeline-connect-21"></div>

            <div class="timeline-item">
                 <span class="am-icon-shopping-basket s pink"></span>

                <div class="timeline-block">
                    <i class="timline-block-arrow"></i>

                    <p class="timeline-title">订单完成<span
                            class="timeline-time">19:36</span></p>

                        <p class="timeline-sub"></p>
                </div>
            </div>
    </div>
    <div class="bottombar-placeholder"></div>

 

</div>


<div id="order-detail" style="display: none"> 

    <div class="orderregion orderregion-top">
        <ul class="orderregion-entries">
            <li class="orderregion-entry">
                <span class="name text-overflow-ellipsis-2">火锅</span>
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
