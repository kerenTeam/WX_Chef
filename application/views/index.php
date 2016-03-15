  <body>
    <!-- 搜索 -->
    <form action="" method="" class="topform">
      <div class="am-g">
        <button type="submit" class="am-icon-search sb"></button>
        <input type="search" id="search" onfocus="jump()" class="am-form-field" placeholder="请输入菜名或食材">
      </div>
    </form>
    <!-- banner -->
    <a href=""><img src="skin/img/card.png" class="am-img-responsive card" alt="大厨到家"></a>
    <!-- 菜品 -->
    <ul class="am-gallery am-avg-sm-4 am-avg-md-4 am-avg-lg-4 am-gallery-default am-shadow veg" data-am-gallery="{ pureview: true }" >
      <li>
        <div class="am-gallery-item">
          <a href="cailan.php">
            <img src="skin/img/menu.png" class="am-circle" alt="大厨到家"/>
            <h3 class="am-gallery-title red">点菜</h3>
          </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
          <a href="">
            <img src="skin/img/fork.png" class="am-circle" alt="大厨到家"/>
            <h3 class="am-gallery-title yellow">套餐</h3>
          </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
          <a href=" ">
            <img src="skin/img/food.png" class="am-circle" alt="大厨到家"/>
            <h3 class="am-gallery-title green">宴会定制</h3>
          </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item">
          <a href="">
            <img src="skin/img/tea.png" class="am-circle" alt="大厨到家"/>
            <h3 class="am-gallery-title pink">燕鲍翅</h3>
          </a>
        </div>
      </li>
    </ul>
    <!-- 热销 -->
    
    <div class="am-g am-shadow hot" data-am-scrollspy="{animation: 'fade'}">
      <p class="htit"><img src="skin/img/fire.png" alt=""> 特色服务</p>
      <div class="am-u-sm-4">
        <a href="#" class="am-thumbnail">
          <img class="am-circle" src="skin/img/ds.png"/>
          <p class="purple">点杀</p>
        </a>
      </div>
      <div class="am-u-sm-4">
        <a href="#" class="am-thumbnail">
          <img class="am-circle" src="skin/img/sc.png"/>
          <p class="sc">水产</p>
        </a>
      </div>
      <div class="am-u-sm-4">
        <a href="#" class="am-thumbnail">
          <img class="am-circle" src="skin/img/cj.png"/>
          <p class="blue">菜价查询</p>
        </a>
      </div>
      <div class="am-u-sm-4">
        <a href="#" class="am-thumbnail">
          <img class="am-circle" src="skin/img/js.png"/>
          <p class="green">酒水</p>
        </a>
      </div>
      <div class="am-u-sm-4">
        <a href="#" class="am-thumbnail">
          <img class="am-circle" src="skin/img/hg.png"/>
          <p class="pink">火锅</p>
        </a>
      </div>
      <div class="am-u-sm-4">
        <a href="#" class="am-thumbnail">
          <img class="am-circle" src="skin/img/kf.png"/>
          <p class="purple">客服</p>
        </a>
      </div>
    </div>
    <div class="am-shadow fcai">
      <a href="" class="am-btn am-btn-default am-btn-block bpurple">厨师风采</a>
      <a href="" class="am-btn am-btn-default am-btn-block bgreen">服务员风采</a>
      <p class=""><span class="am-icon-eye pink"></span> 发现美食</p>
      <div class="am-g am-btn-group bota">
        <a href="" class="am-u-sm-6 am-btn am-btn-primary am-round  bpurple">推荐</a>
        <a href="" class="am-u-sm-6 am-btn am-btn-primary am-round  bgreen">专题栏目</a>
      </div>
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
      window.location.href="search.php";
     }
  </script>
  </body>
</html>