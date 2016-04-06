<body class="bpa">
  <header data-am-widget="header" class="am-header am-header-default topform">
    <div class="am-header-left am-header-nav">
      <a href="javascript:" onclick="javascript:history.go(-1);">
        <i class="am-header-icon am-icon-chevron-left"></i>
      </a>
    </div>
    <h1 class="am-header-title">
    宴会定制
    </h1>
    
  </header>
  <!-- 详情 -->
  <form action="" method="" enctype="mutiltype/data">
    <div class="foodinfo am-shadow">
      <div class=""><img src="skin/img/party1.png" class="am-img-responsive card" alt="大厨到家"></div>
      <div class="am-g">
         <h2>聚会套餐套餐 989元系列</h2>
         <div>八凉十二热一汤两小吃，带您体验川菜独特的风味，绝对让您回味无穷。</div>
        <div class="pr"><i class="am-icon-cny"></i><span class="price">898</span></div>
        <div class="foodNum">
          <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
          <input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
          <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
        </div>
      </div>
      <p class="am-text-center menutit">宴会菜单</p>

      <p class="am-text-center am-text-sm  menuname">凉菜</p>

        <p class="am-text-center am-text-sm">锦绣刺身拼盘</p>
        <p class="am-text-center am-text-sm">椒麻乡村鸡</p>
        <p class="am-text-center am-text-sm">辣子熟女兔丁</p>
        <p class="am-text-center am-text-sm">辣鲜手剥笋</p>
        <p class="am-text-center am-text-sm">田七伴桃仁</p>
        <p class="am-text-center am-text-sm">客家卤汁九香鸭</p>
        <p class="am-text-center am-text-sm">酸辣汁黑木耳</p>
        <p class="am-text-center am-text-sm">蘸酱乳瓜</p>

      <p class="am-text-center am-text-sm  menuname">热菜</p>

        <p class="am-text-center am-text-sm">干烧鲜辽参</p>
        <p class="am-text-center am-text-sm">蓉记姜葱香辣蟹</p>
        <p class="am-text-center am-text-sm">香烹梅花三弄筋</p>
        <p class="am-text-center am-text-sm">清蒸多宝鱼</p>
        <p class="am-text-center am-text-sm">白灼基围虾</p>
        <p class="am-text-center am-text-sm">农家一品鲜</p>
        <p class="am-text-center am-text-sm">鸿运狮子头</p>
        <p class="am-text-center am-text-sm">豉椒火灼耗儿筋</p>
        <p class="am-text-center am-text-sm">香辣仔兔</p>
        <p class="am-text-center am-text-sm">尖椒香香嘴</p>
        <p class="am-text-center am-text-sm">百合苡仁老南瓜</p>
        <p class="am-text-center am-text-sm">清炒时蔬</p>

      <p class="am-text-center am-text-sm  menuname">汤</p>

        <p class="am-text-center am-text-sm">清炖滋补甲鱼汤</p>
        
        <p class="am-text-center am-text-sm  menuname">小吃</p>
        
        <p class="am-text-center am-text-sm">蔗汁红糖小锅魁</p>
        <p class="am-text-center am-text-sm">古镇杏仁糍粑</p>

      <p class="am-text-center am-text-sm  menuname">主食</p>
        <p class="am-text-center am-text-sm">米饭</p>
     <!-- 菜品轮播 --> 
      <p class="am-text-center menutit">菜品展示</p>
       <div data-am-widget="slider" class="am-slider am-slider-c3" data-am-slider='{"controlNav":false}' >
          <ul class="am-slides">
              <li>
                  <a href="<?php echo site_url('home/food')?>"><img src="skin/img/product/rjx.jpg">
                  <div class="am-slider-desc"><div class="am-slider-counter"><span class="am-active">1</span>/4</div>山地土豆烧甲鱼</div></a>
                 
              </li>
              <li>
                  <a href="<?php echo site_url('home/food')?>"><img src="skin/img/product/tscsx.jpg">
                  <div class="am-slider-desc"><div class="am-slider-counter"><span class="am-active">2</span>/4</div>山地土豆烧甲鱼</div></a>
                 
              </li>
              <li>
                  <a href="<?php echo site_url('home/food')?>"><img src="skin/img/product/tqhtr.jpg">
                  <div class="am-slider-desc"><div class="am-slider-counter"><span class="am-active">3</span>/4</div>山地土豆烧甲鱼</div></a>
                 
              </li>
              <li>
                  <a href="<?php echo site_url('home/food')?>"><img src="skin/img/product/qwhqb.jpg">
                  <div class="am-slider-desc"><div class="am-slider-counter"><span class="am-active">4</span>/4</div>山地土豆烧甲鱼</div></a>
                 
              </li>
          </ul>
        </div>

    </div> 
    <!-- 评价 -->
    <div class="am-shadow am-margin-top">
      <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default" >
        <h2 class="am-titlebar-title ">
        消费评价
        </h2>
      </div>
      <div class="am-u-sm-5 am-text-center">
        <span class="red am-text-xxl">9.8</span>分<br>
        <span class="am-text-xs red"><i class="am-icon-star "></i><i class="am-icon-star"></i><i class="am-icon-star"></i><i class="am-icon-star"></i><i class="am-icon-star"></i></span><br>
        <span class="am-text-xs"> 共20人评价</span>
        
      </div>
      <div class="am-u-sm-7 stars">
        <p class="am-text-xs"><span class="am-text-right">菜品</span> <i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i> 4.9分</p>
        <p class="am-text-xs"><span class="am-text-right">厨师</span><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i> 4.9分</p>
        <p class="am-text-xs"><span class="am-text-right">服务员</span> <i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i> 4.9分</p>
      </div>
      <hr data-am-widget="divider" style="" class="am-divider am-divider-dashed" />
      <!-- 文字评论 -->
      <div class="am-shadow">
        <header class="am-comment-hd">
          <!--<h3 class="am-comment-title">评论标题</h3>-->
          <div class="am-comment-meta">
            <a href="#link-to-user" class="am-comment-author"><img src="skin/img/user.jpg" class="am-circle comimg" alt="">某人</a>
            <time datetime="2013-07-27T04:54:29-07:00" title="2013年7月27日 下午7:54 格林尼治标准时间+0800">2014-7-12 15:30</time>
          </div>
        </header>
        <div class="am-comment-bd am-text-xs">
          味道很不错
        </div>
      </div>
      <div class="am-shadow">
        <header class="am-comment-hd">
          <!--<h3 class="am-comment-title">评论标题</h3>-->
          <div class="am-comment-meta">
            <a href="#link-to-user" class="am-comment-author"><img src="skin/img/user.jpg" class="am-circle comimg" alt="">某人</a>
            <time datetime="2013-07-27T04:54:29-07:00" title="2013年7月27日 下午7:54 格林尼治标准时间+0800">2014-7-12 15:30</time>
          </div>
        </header>
        <div class="am-comment-bd am-text-xs">
          味道很不错
        </div>
      </div>
    </div>

    <div data-am-widget="navbar" class="am-navbar am-shadow am-cf am-navbar-default amft" style="bottom:48px;" id="">
      <a href="<?php echo site_url('home/order')?>">
        <div class="am-u-sm-8 green a">
          <img src="skin/img/cl.png" class="cartImg" alt=""><span id="fen" class="allmoney">0</span>份
          <i class="am-icon-cny red"></i><span id="allmoney" class="allmoney red">0</span>
        </div>
        <div class="am-u-sm-4 b">
          
          <button type="submit" class="am-btn am-btn-success tijiao">确定</button>
          
        </div>
      </a>
    </div>
  </form>
   <!-- footer -->
<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default nav-bot">
  <ul class="am-navbar-nav am-cf am-avg-sm-4 am-shadow">
    <li >
      <a href="<?php echo site_url('home/index')?>" class="active">
        <span class=""><img src="skin/img/home2.png" alt=""></span>
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
      <a href="<?php echo site_url('home/ucent')?>">
        <span class=""><img src="skin/img/gr1.png" alt=""></span>
        <span class="am-navbar-label">我的</span>
      </a>
    </li>
  </ul>
</div>
<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/amazeui.min.js"></script>
  <script src="skin/js/num.js"></script>
  <script>
  $(function(){
      var inputs = $('.numTxt');

          inputs.each(function() {
     var numI=$(this).val();
        if(numI == 0){
        $(this).css('display','none');
        $(this).parent('.foodNum').find('.reduce').css('display','none'); 
      }
      else{
        $(this).css('display','inline-block');  
        $(this).parent('.foodNum').find('.reduce').css('display','inline-block');
      }
   });

  
  })
  </script>
</body>
</html>