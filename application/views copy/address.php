
    <script>
        var MT_WM = window.MT_WM || {};
        MT_WM.TimeTracker = {rt: 1458019082311, st: Date.now()};
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

    <link rel="stylesheet" href="http://xs01.meituan.net/waimai_i/css/page/address/address_list.583080e3.css">

</head>
<body class="i"> 

	  <header data-am-widget="header" class="am-header am-header-default topform">
      <div class="am-header-left am-header-nav">
          <a href="javascript:" onclick="javascript:history.go(-1);">

                <i class="am-header-icon am-icon-chevron-left"></i>
          </a>
      </div>

      <h1 class="am-header-title">
          我的地址
      </h1>
 
  </header>


<a class="address-add asa" href="<?php echo site_url('home/addressAdd')?>">
    <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
    <span>新增地址</span>
</a>

    <ul id="address-list" class="address-list myaddress-list">
            <li data-addr-id="8636455"> 
                        <input data-node="addr-data" type="hidden" name="phone" value="15708434450"/>
                        <input data-node="addr-data" type="hidden" name="gd_addr_type" value="餐饮服务;中餐厅;中餐厅"/>
                        <input data-node="addr-data" type="hidden" name="bind_type" value="15"/>
                        <input data-node="addr-data" type="hidden" name="id" value="8636455"/>
                        <input data-node="addr-data" type="hidden" name="house_number" value="11-02"/>
                        <input data-node="addr-data" type="hidden" name="address" value="大业美食城"/>
                        <input data-node="addr-data" type="hidden" name="name" value="王菲"/>
                        <input data-node="addr-data" type="hidden" name="gender" value="先生"/>
                        <input data-node="addr-data" type="hidden" name="longitude" value="104069102"/>
                        <input data-node="addr-data" type="hidden" name="latitude" value="30653777"/>
                <div class="address-info">
                    <p class="customer-info"><span class="contect-name">王菲</span><span class="contect-gender">先生</span><span class="contect-phone">15708434450</span></p>
                    <p class="address-dtl"><span class="contect-address">大业美食城</span> <span class="contect-number">11-02</span></p>
                </div>
                <div class="contect-button">
                    <a class="dele" href="javascript:;">删除</a>
                    <a class="edit" href="<?php echo site_url('home/editAddress')?>">编辑</a>
                </div>
            </li>
    </ul>

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

<script>Raven.config('http://e284c96b17d24de69b3ac24cae61c5d0@sentry.sankuai.com/78').install();</script>  <script src="http://xs01.meituan.net/waimai_i/js/page/address/address_list.3fc591a1.js"></script>
<script>
    require(['page/address/address_list'], function(page) {
        page.init({
            _baseurl_ : '',
            source : '1',
            csrfToken: 'w73NQP9xMB70N4FOY/3kxGClIi6krxg428bnpRZPeHmNjaewYA1owrUJ1WNxLbrY' //anti-CSRF
        });
    });
</script>

</body>
</html>
