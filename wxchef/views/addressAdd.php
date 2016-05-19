 
    <script>
        var MT_WM = window.MT_WM || {};
        MT_WM.TimeTracker = {rt: 1458023068759, st: Date.now()};
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

    
    <link href="http://xs01.meituan.net/waimai_i/css/page/address/address_edit.aded697c.css" rel="stylesheet"/>

</head>
<body class="i"> 

<!-- 网页公共的头部部分 -->
    <header id="header" class="header page-header top-form">
    
    <a class="j-back-link back-wrap" href="javascript:" href="<?=site_url('home/ucent');?>">
        <i class="am-header-icon am-icon-chevron-left"></i>
    </a>
    <a class="addr-save j-addr-save" href="javascript:void(0);">保存</a>
    <h1 class="page-name">新增收货地址</h1>
    </header>



<div class="main-wrap">
    <div class="fill-section-wrap">
        <h3>联系人</h3>
        <ul class="fill-section customer-section">
            <li>
                <span class="fill-type">姓名：</span>
                <div class="fill-section-right">
                    <input type="text" class="fill-input j-name" placeholder="请输入收餐人的姓名" />
                    <div class="customer-gender">
                        <span class="customer-gender-choice" data-gender="0"><i class="i-circle"></i>先生</span>
                        <span class="customer-gender-choice" data-gender="1"><i class="i-circle"></i>女士</span>
                    </div>
                </div>
            </li>
            <li>
                <span class="fill-type">电话：</span>
                <div class="fill-section-right"><input type="text" class="fill-input j-phone" maxlength="11" placeholder="请填写收餐手机号码" /></div>
            </li>
        </ul>
    </div>
    <div class="fill-section-wrap">
        <h3>收货地址</h3>
        <ul class="fill-section address-section">
            <li>
                <span class="fill-type">小区/大厦/学校：</span>
                <a class="fill-section-right" href="javascript:">
                    <i class="icon-loc-hollow addr-icon"></i>
                    <i class="addr-arrow"></i>
                    <input type="text" class="addr-choose j-address" readonly placeholder="点击选择" />
                </a>
            </li>
            <li>
                <span class="fill-type">楼号－门牌号：</span>
                <div class="fill-section-right">
                    <input type="text" class="fill-input j-house-number" placeholder="例：16号楼－101室" />
                </div>
            </li>
        </ul>
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

<script>Raven.config('http://e284c96b17d24de69b3ac24cae61c5d0@sentry.sankuai.com/78').install();</script>  <script src="http://xs01.meituan.net/waimai_i/js/page/address/address_edit.7f8ec067.js"></script>
<script>
    require(['page/address/address_edit'],function(page) {
        page.init({
            _baseurl_: '',
            type: '1',
            source: '2',
            csrfToken: 'AThI1+I5stk1MyznXBRM9KSrOk4ZekEt3DMp0zJi1UMpRhGu2T5NWPTUHQ+Fa69V' //anti-CSRF
        });
    });
</script>

</body>
</html>
