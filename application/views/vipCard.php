<body>
  <header data-am-widget="header" class="am-header am-header-default topform">
    <div class="am-header-left am-header-nav">
      <a href="javascript:" onclick="javascript:history.go(-1);">
        <i class="am-header-icon am-icon-chevron-left"></i>
      </a>
    </div>
    <h1 class="am-header-title">
    会员卡
    </h1>
    
  </header>
    <div class="flexv">
      <div class="fitem">
         <img src="skin/img/vip1.png" alt="">
         <a href="<?=site_url('home/open');?>" class="open">充值</a>
      </div>
      <div class="fitem">
        <img src="skin/img/vip2.png" alt="">
         <!-- 已充值过一次则显示  再次购买-->
        <a href="<?=site_url('home/open');?>" class="open">充值</a>
      </div>
       <div class="fitem">
        <img src="skin/img/vip3.png" alt="">
        <a href="<?=site_url('home/open');?>" class="open">充值</a>
      </div>
       <div class="fitem">
        <img src="skin/img/vip4.png" alt="">
        <a href="<?=site_url('home/open');?>" class="open">充值</a>
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
</html>