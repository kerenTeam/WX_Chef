<body>
  <!-- header -->
  <header data-am-widget="header" class="am-header am-header-default topform bheader"> <!-- am-header-fixed header固定在顶部-->
  <div class="am-header-left am-header-nav">
    <a href="<?php echo site_url('home/index')?>">
      <i class="am-header-icon am-icon-chevron-left"></i>
    </a>
  </div>
  <h1 class="am-header-title">
  购物车
  </h1>

</header>
<form action="" method="" enctype="multipart/form-data">
  <div data-am-widget="list_news" class="am-u-sm-12 asp cmn">
    <div class="cmn cmnb am-list-news am-list-news-default" >
      <div class="am-list-news-bd">
        <div class="am-text-center oln">点菜</div>
          <ul class="am-list cul">
            <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
              <div class="am-u-sm-3 am-list-thumb">
                <a href="<?php echo site_url('home/food')?>" class="vimg">
                  <img src="skin/img/product/rjx.jpg" alt="蓉记姜葱香辣蟹168"/>
                </a>
              </div>
              <div class=" am-u-sm-9 am-list-main">
                <h3 class="am-list-item-hd">蓉记姜葱香辣蟹 <span class="am-icon-refresh am-fr green"></span></h3>
                <div class="pr"><i class="am-icon-cny"></i><span class="price">168</span></div>
                <div class="fNum">
                  <span class="am-icon-minus" onClick="handle(this, false)"></span>
                  <input type="text" class="numTxt inborder" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" name="numbers" value="1">
                  <span class="am-icon-plus" onClick="handle(this, true)"></span>
                </div>
                <a href="" class="am-fl"><i class="am-icon-trash red ats2"></i></a>
              </div>
            </li>
          </ul>
        <div class="am-text-center oln">套餐</div>
          <ul class="am-list cul">
            
            <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
              <div class="am-u-sm-3 am-list-thumb">
                <a href="<?php echo site_url('home/dinner')?>" class="vimg">
                  <img src="skin/img/product/shiguo.jpg" alt="石锅酱仔排58"/>
                </a>
              </div>
              <div class=" am-u-sm-9 am-list-main">
                <h3 class="am-list-item-hd">日常589元系列</h3>
                <div class="pr"><i class="am-icon-cny"></i><span class="price">589</span></div>
                <div class="fNum">
                  <span class="am-icon-minus" onClick="handle(this, false)"></span>
                  <input type="text" class="numTxt inborder" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" name="numbers" value="1">
                  <span class="am-icon-plus" onClick="handle(this, true)"></span>
                </div>
                <a href="" class="am-fl"><i class="am-icon-trash red ats2"></i></a>
              </div>
            </li>
          </ul>
      </div>
    </div>
  </div>
  <!-- <div class="am-text-center">合计：<i class="am-icon-cny red"></i><input type="text" id="allmoney" readonly class="allmoney red" value="757"></div> -->
  <!-- footer -->
  <div data-am-widget="navbar" class="am-navbar am-shadow am-cf am-navbar-default amft" id="">
    <a href="<?php echo site_url('home/order')?>">
      <div class="am-u-sm-8 a">
        <span class="green"><img src="skin/img/cart.png" alt=""><span id="fen" class="allmoney">2</span>份</span>
        <i class="am-icon-cny red"></i><span id="allmoney" class="allmoney red">757</span>
      </div>
      <div class="am-u-sm-4 b">
        
        <button type="submit" class="am-btn am-btn-success">确认</button>
        
      </div>
    </a>
  </div>
</form>
<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/amazeui.min.js"></script>
<script src="skin/js/num.js"></script>

</body>
</html>