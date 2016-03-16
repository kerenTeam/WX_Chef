  
  <body>
    <!-- 搜索 -->
    <form action="" method="" class="topform">
      <div class="am-g">
        <button type="submit" class="am-icon-search sb"></button>
        <input type="search" id="search" onfocus="jump()" class="am-form-field" placeholder="请输入菜名或食材">
      </div>
    </form>
    <!-- banner -->
     <div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{}' >
  <ul class="am-slides">
      <li>
         <a href=""><img src="skin/img/card.png" class="am-img-responsive card" alt="大厨到家"></a>
         
      </li>
      <li>
         <a href=""><img src="skin/img/card.png" class="am-img-responsive card" alt="大厨到家"></a>
         
      </li>
      <li>
         <a href=""><img src="skin/img/card.png" class="am-img-responsive card" alt="大厨到家"></a>
         
      </li>
      <li>
        <a href=""><img src="skin/img/card.png" class="am-img-responsive card" alt="大厨到家"></a>
         
      </li>
  </ul>
</div>



    
    <!-- 菜品 -->
    <ul class="am-gallery am-avg-sm-2 am-avg-md-2 am-avg-lg-4 am-gallery-default am-shadow veg" data-am-gallery="{ pureview: true }" >
      <li>
        <div class="am-gallery-item bred">
          <a href="<?php echo site_url('home/buy')?>">
            <img src="skin/img/menu.png" alt="大厨到家"/>
            <h3 class="am-gallery-title">点菜</h3>
          </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item byellow">
          <a href="">
            <img src="skin/img/fork.png" alt="大厨到家"/>
            <h3 class="am-gallery-title">套餐</h3>
          </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item bgreen">
          <a href="<?php echo site_url('home/make')?>">
            <img src="skin/img/food.png" alt="大厨到家"/>
            <h3 class="am-gallery-title">宴会定制</h3>
          </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item bblue">
          <a href="">
            <img src="skin/img/tea.png" alt="大厨到家"/>
            <h3 class="am-gallery-title">燕鲍翅</h3>
          </a>
        </div>
      </li>
    </ul>
    <!-- 热销 -->
    
    <div class="am-g am-shadow hot">
      <p class="htit"><img src="skin/img/fire.png" alt=""> 特色服务</p>
      <div class="am-u-sm-4">
        <a href="<?php echo site_url('home/buy')?>" class="am-thumbnail">
          <img class="am-circle" src="skin/img/vip.png"/>
          <p class="purple">会员</p>
        </a>
      </div>
      <div class="am-u-sm-4">
        <a href="<?php echo site_url('home/custom')?>" class="am-thumbnail">
          <img class="am-circle" src="skin/img/kf.png"/>
          <p class="sc">客服</p>
        </a>
      </div>
      <div class="am-u-sm-4">
        <a href="<?php echo site_url('home/priceSearch')?>" class="am-thumbnail">
          <img class="am-circle" src="skin/img/cj.png"/>
          <p class="pink">菜价查询</p>
        </a>
      </div>
     
    </div>
    <div class="am-shadow fcai" data-am-scrollspy="{animation: 'fade'}">
      <p class="htit"><span class="am-icon-eye yellow"></span> 实时菜价</p>
     <ul class="am-avg-sm-3 am-avg-md-3 am-avg-lg-3 noborder">
  <li><a href=""><img class="am-thumbnail" src="skin/img/food1.png" />西兰花</a></li>
  <li><a href=""><img class="am-thumbnail" src="skin/img/food1.png" />西兰花</a></li>
  <li><a href=""><img class="am-thumbnail" src="skin/img/food1.png" />西兰花</a></li>
  <li><a href=""><img class="am-thumbnail" src="skin/img/food1.png" />西兰花</a></li>
  <li><a href=""><img class="am-thumbnail" src="skin/img/food1.png" />西兰花</a></li>
  <li><a href=""><img class="am-thumbnail" src="skin/img/food1.png" />西兰花</a></li>
  <li><a href=""><img class="am-thumbnail" src="skin/img/food1.png" />西兰花</a></li>
  <li><a href=""><img class="am-thumbnail" src="skin/img/food1.png" />西兰花</a></li>
  <li><a href=""><img class="am-thumbnail" src="skin/img/food1.png" />西兰花</a></li>
   
</ul>
    </div>
    <!-- footer -->
    <div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default nav-bot">
      <ul class="am-navbar-nav am-cf am-avg-sm-4 am-shadow">
        <li >
          <a href="<?php echo site_url('home/index')?>" class="active">
            <span class=""><img src="skin/img/home.png" alt=""></span>
            <span class="am-navbar-label">首页</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('home/buy')?>">
            <span class=""><img src="skin/img/clz.png" alt=""></span>
            <span class="am-navbar-label">菜篮子</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('home/ucent')?>">
            <span class=""><img src="skin/img/gr.png" alt=""></span>
            <span class="am-navbar-label">个人</span>
          </a>
        </li>
      </ul>
    </div>
    <script src="skin/js/jquery.min.js"></script>
    <script src="skin/js/amazeui.min.js"></script>
      <script>
     function jump(){
      window.location.href="<?php echo site_url('home/search')?>";
     }
  </script>
  </body>
</html>