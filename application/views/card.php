     <script>
        var MT_WM = window.MT_WM || {};
        MT_WM.TimeTracker = {rt: 1457945937841, st: Date.now()};
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
        <link href="skin/css/foods.css" rel="stylesheet"/>   
    <link rel="stylesheet" href="http://xs01.meituan.net/waimai_i/css/page/coupon/coupon.ec35d783.css">

<body class="i"> 

  <header data-am-widget="header" class="am-header am-header-default topform">
      <div class="am-header-left am-header-nav">
          <a href="javascript:" onclick="javascript:history.go(-1);">

                <i class="am-header-icon am-icon-chevron-left"></i>
          </a>
      </div>

      <h1 class="am-header-title">
          我的优惠券
      </h1>
 
  </header>

<div class="coupon-direction"><a href="/static/html/faq-coupon.html"><i class="tip-icon"></i>代金券使用说明</a></div>
<div id="no-coupon" class="no-coupon">
    <p>暂无可用优惠券</p>
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
<script src="http://xs01.meituan.net/waimai_i/js/page/coupon/my_coupon.da4554b2.js"></script>
<script>
    require(['page/coupon/my_coupon'], function (page) {
        page.init();
    });
</script>

</body>
</html>
