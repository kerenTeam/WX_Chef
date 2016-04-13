<body>
  <form action="" method="">
    <header data-am-widget="header" class="am-header am-header-default topform">
      <div class="am-header-left am-header-nav">
        <a href="javascript:" onclick="javascript:history.go(-1);">
          <i class="am-header-icon am-icon-chevron-left"></i>
        </a>
      </div>
      <h1 class="am-header-title">
      牛仔裤的夏天
      </h1>
      <div class="am-header-right am-header-nav">
        <input type="submit" class="setf" value="确定">
      </div>
    </header>
    <div class="am-list-news-bd">
      <ul class="am-list userS">
        <li class="am-g am-list-item-dated">
          <div class="am-u-sm-4">头像</div>
          <div class="am-u-sm-8"><img class="am-circle" src="skin/img/USER.jpg" alt=""></div>
        </li>
        <li class="am-g am-list-item-dated">
          <div class="am-u-sm-4">昵称</div>
          <div class="am-u-sm-8">
            <input type="text" value="牛仔裤的夏天">
          </div>
        </li>
        <li class="am-g am-list-item-dated">
          <div class="am-u-sm-4">口味</div>
          <div class="am-u-sm-8">
            <input type="text" value="未填写">
          </div>
        </li>
        <li class="am-g am-list-item-dated">
          <div class="am-u-sm-4">热爱菜系</div>
          <div class="am-u-sm-8">
            <select multiple data-am-selected class="vegtype">
              <option value="a">粤菜</option>
              <option value="b">川菜</option>
              <option value="o">鲁菜</option>
              <option value="m">湘菜</option>
            </select>
          </div>
          <style>
          .am-selected-list li{
            line-height:2rem;
          }
          </style>
        </li>
      </ul>
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
  </form>
</body>
<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/amazeui.min.js"></script>
<script>
  $(function(){
    $('.am-selected-status').html('点击选择');
  })
</script>
</html>