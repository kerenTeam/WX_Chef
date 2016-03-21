
<link rel="stylesheet" href="skin/css/globe.css">

<link href="skin/css/orderList.css" rel="stylesheet"/>
</head>
<body class="i">
<header data-am-widget="header" class="am-header am-header-default topform">
  <div class="am-header-left am-header-nav">
    <a href="javascript:" onclick="javascript:history.go(-1);">
      <i class="am-header-icon am-icon-chevron-left"></i>
    </a>
  </div>
  <h1 class="am-header-title">
  我的订单
  </h1>
</header>
<div class="list" id="order-list">
  <!-- 已完成订单 -->
  <div class="field">
    <a href="<?php echo site_url('home/orderI')?>">
      <div class="field-head">
        <span class="field-head-name">订单号：12234354</span>
        <span class="field-head-status">订单完成</span>
      </div>
      <div class="avatar">
        <img src="skin/img/user.jpg" class="suoimg"/>
      </div>
      <div class="content">
        <p class="delivery_tip">黄焖鸡</p>
        <p class="price"><i class="am-icon-cny"></i>6</p>
        
        <p class="order-time">2014-11-10 16:36
          <a href="javascript:" data-am-modal="{target: '#my-alert'}" class="am-fr am-btn am-btn-primary am-btn-xs bgray"> 删除
          </a>
          <a href="<?php echo site_url('home/comment')?>" class="am-fr am-btn am-btn-primary bgreen am-btn-xs"> 评价
          </a></p>
          
        </div>
      </a>
    </div>
    <!-- 删除按钮弹出框 -->
    <div class="am-modal am-modal-confirm" tabindex="-1" id="my-alert">
      <div class="am-modal-dialog">
        <div class="am-modal-bd">
          你，确定要删除这条记录吗？
        </div>
        <div class="am-modal-footer">
          <span class="am-modal-btn" data-am-modal-cancel>取消</span>
          <span class="am-modal-btn" data-am-modal-confirm>确定</span>
        </div>
      </div>
    </div>
    <!-- 未付款订单 -->
    <div class="field">
      <div class="field-head">
        <span class="field-head-name">订单号：12234354</span>
        <span class="field-head-status">订单未完成</span>
      </div>
      <div class="avatar">
        <img src="skin/img/user.jpg" class="suoimg"/>
      </div>
      <div class="content">
        <p class="delivery_tip">黄焖鸡</p>
        <p class="price"><i class="am-icon-cny"></i>6</p>
        <p class="order-time">2014-11-10 16:36
          <a href="javascript:" class="am-fr am-btn am-btn-primary am-btn-xs bgray" data-am-modal="{target: '#my-alert2'}"> 取消
          </a>
          <a href="<?php echo site_url('home/order')?>" class="am-fr am-btn am-btn-primary am-btn-xs bgreen"> 付款
          </a></p>
          
        </div>
      </div>
      <!-- 取消按钮弹出框 -->
    <div class="am-modal am-modal-confirm" tabindex="-1" id="my-alert2">
      <div class="am-modal-dialog">
        <div class="am-modal-bd">
          你，确定要取消付款吗？
        </div>
        <div class="am-modal-footer">
          <span class="am-modal-btn" data-am-modal-cancel>取消</span>
          <span class="am-modal-btn" data-am-modal-confirm>确定</span>
        </div>
      </div>
    </div>
 
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
          <a href="<?php echo site_url('home/cailan')?>">
            <span class=""><img src="skin/img/clz.png" alt=""></span>
            <span class="am-navbar-label">菜篮子</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('home/ucent')?>" class="active">
            <span class=""><img src="skin/img/gr2.png" alt=""></span>
            <span class="am-navbar-label">个人</span>
          </a>
        </li>
      </ul>
    </div>
    <script src="skin/js/jquery.min.js"></script>
    <script src="skin/js/amazeui.min.js"></script>

  </body>
</html>