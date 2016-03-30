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
         <h2>婚宴套餐 898元系列</h2>
        <div class="pr"><i class="am-icon-cny"></i><span class="price">898</span></div>
        <div class="foodNum">
          <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
          <input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="2">
          <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
        </div>
      </div>
      <p class="am-text-center menutit">宴会菜单</p>

      <p class="am-text-center am-text-sm  menuname">凉菜</p>

        <p class="am-text-center am-text-sm">石锅酱仔排</p>
        <p class="am-text-center am-text-sm">玉米香脆骨</p>
        <p class="am-text-center am-text-sm">菌香豉汁肥牛</p>

      <p class="am-text-center am-text-sm  menuname">热菜</p>

        <p class="am-text-center am-text-sm">腊味荷兰豆</p>
        <p class="am-text-center am-text-sm">香辣仔兔</p>
        <p class="am-text-center am-text-sm">葱油干烧裸斑</p>

      <p class="am-text-center am-text-sm  menuname">炖菜</p>

        <p class="am-text-center am-text-sm">金银萝卜炖排骨</p>
        <p class="am-text-center am-text-sm">百合苡仁老南瓜</p>
        <p class="am-text-center am-text-sm">葱香鸡蛋干</p>

      <p class="am-text-center am-text-sm  menuname">主食</p>
        <p class="am-text-center am-text-sm">米饭</p>
     <!-- 菜品轮播 -->
      <p class="am-text-center menutit">菜品展示</p>
       <div data-am-widget="slider" class="am-slider am-slider-c3" data-am-slider='{&quot;controlNav&quot;:false}' >
          <ul class="am-slides">
              <li>
                  <img src="skin/img/product/rjx.jpg">
                  <div class="am-slider-desc"><div class="am-slider-counter"><span class="am-active">1</span>/4</div>山地土豆烧甲鱼</div>
                 
              </li>
              <li>
                  <img src="skin/img/product/tscsx.jpg">
                  <div class="am-slider-desc"><div class="am-slider-counter"><span class="am-active">2</span>/4</div>山地土豆烧甲鱼</div>
                 
              </li>
              <li>
                  <img src="skin/img/product/tqhtr.jpg">
                  <div class="am-slider-desc"><div class="am-slider-counter"><span class="am-active">3</span>/4</div>山地土豆烧甲鱼</div>
                 
              </li>
              <li>
                  <img src="skin/img/product/qwhqb.jpg">
                  <div class="am-slider-desc"><div class="am-slider-counter"><span class="am-active">4</span>/4</div>山地土豆烧甲鱼</div>
                 
              </li>
          </ul>
        </div>

    </div> 
    <div data-am-widget="navbar" class="am-navbar am-shadow am-cf am-navbar-default amft" style="bottom:48px;" id="">
      <a href="<?php echo site_url('home/order')?>">
        <div class="am-u-sm-8 green a">
          <img src="skin/img/cl.png" class="cartImg" alt=""><span id="fen" class="allmoney">2</span>份
          <i class="am-icon-cny red"></i><span id="allmoney" class="allmoney red">1796</span>
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