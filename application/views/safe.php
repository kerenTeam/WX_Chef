<body> 
<form action="" method="" id="form">
    <header data-am-widget="header" class="am-header am-header-default topform">
      <div class="am-header-left am-header-nav">
        <a href="javascript:" onclick="javascript:history.go(-1);">
          <i class="am-header-icon am-icon-chevron-left"></i>
        </a>
      </div>
      <h1 class="am-header-title">
      账号安全
      </h1>
      <div class="am-header-right am-header-nav">
        <input type="submit" class="setf" value="确定">
      </div>
    </header>
<div class="am-list-news-bd">
  <ul class="am-list">

      <li class="am-g am-padding-sm safe">手机号<input type="tel" class="am-fr tel gray" value="15708434450" > 
      </li>
      <li class="am-g am-padding-sm safe">密码<input type="password" class="am-fr gray" value="1234" >
      </li>
  </ul>
</div>
 </form>
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
<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/amazeui.min.js"></script>
<script src="skin/js/imgup.js"></script>
<script>
  $(function(){
    $('#form').submit(function() {
      var phone = $('input[type="tel"]').val();
      var password = $('input[type="password"]').val();
      if(phone ==''||password ==''){
        alert('手机号和密码均不能为空！'); 
        return false;
      }
      if(!(/^1((3|4|5|8|7){1}\d{1}|70)\d{8}$/.test(phone))){
        alert('手机号格式错误！'); 
        $('input[type="tel"]').focus();
        return false;
      }
    });
  })
</script>
</html>