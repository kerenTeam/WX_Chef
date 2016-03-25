<body>
  <!-- header -->
  <header data-am-widget="header" class="am-header am-header-default topform">
    <div class="am-header-left am-header-nav">
      <a href="javascript:" onclick="javascript:history.go(-1);">
        <i class="am-header-icon am-icon-chevron-left"></i>
      </a>
    </div>
    <h1 class="am-header-title">
    搜索
    </h1>
    <div class="am-header-right am-header-nav">
      <a href="<?php echo site_url('home/index')?>" class="">
        首页
      </a>
    </div>
  </header>
  <form action="" method="" class="topform">
    <div class="am-g">
      <button type="submit" class="am-icon-search sb"></button>
      <input type="search" class="am-form-field" placeholder="请输入菜名或食材">
    </div>
  </form>
    <div class="hotsou">
        <div class="am-text-sm">热门搜索：</div>
        <a href="<?php echo site_url('home/dinner')?>">团拜宴</a><a href="<?php echo site_url('home/food')?>">清炖滋补甲鱼汤</a><a href="<?php echo site_url('home/food')?>">婚宴</a><a href="<?php echo site_url('home/dinner')?>">松茸乳鸽盅</a><a href="<?php echo site_url('home/food')?>">红花汁扣辽参</a><a href="<?php echo site_url('home/food')?>">清汤竹荪炖血燕</a>

    </div>
</body>
</html>