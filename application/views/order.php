<body>
  <!-- header -->
  <header data-am-widget="header" class="am-header am-header-default topform">
    <div class="am-header-left am-header-nav">
      <a href="javascript:" onclick="javascript:history.go(-1);">
        <i class="am-header-icon am-icon-chevron-left"></i>
      </a>
    </div>
    <h1 class="am-header-title">
    支付订单
    </h1>
  </header>
  <form action="" method="">
    <div class="am-list-news-bd">
      <ul class="am-list odl">
        <li class="am-g am-list-item-dated">
          <a href="javascript:" class="am-list-item-hd ">香辣鸡翅 X1</a>
          <span class="am-list-date"><i class="am-icon-cny"></i>30</span>
        </li>
        <li class="am-g am-list-item-dated">
          <a href="javascript:" class="am-list-item-hd ">鱼香茄子 X1</a>
          <span class="am-list-date"><i class="am-icon-cny"></i>20</span>
        </li>
        <li class="am-g am-list-item-dated">
          <a href="javascript:" class="am-list-item-hd ">鱼香茄子 X1</a>
          <span class="am-list-date"><i class="am-icon-cny"></i>20</span>
        </li>
        <li class="am-g am-list-item-dated">
          <a href="javascript:" class="am-list-item-hd">订单总计</a>
          <span class="am-list-date"><i class="am-icon-cny red">70</i></span>
        </li>
        <!--  <p class="marginl">合计：<i class="am-icon-cny red">70</i></p> -->
      
      </ul>
        <hr data-am-widget="divider" style="" class="am-divider am-divider-dashed" />
    </div>
    <div class="am-shadow">
      <p class="htit"><span class="am-icon-gift red"> </span> 优惠券<span class="am-fr">2张可选</span> </p>
      <a href="<?php echo site_url('home/card')?>" class="am-cf adc"><img src="skin/img/qu.png" alt=""> 优惠券 <span class="am-icon-cny"></span>5 <span class="am-icon-angle-right am-fr  am-icon-sm"></span></a>
    </div>
    

    <hr data-am-widget="divider" style="" class="am-divider am-divider-dashed" />
    <div class="am-shadow">
      <p class="htit sad"><span class="am-icon-map-marker red"></span> 服务地址</p>

      <!-- 未添加地址这显示 -->
      <a href="<?php echo site_url('home/address2')?>" class="am-cf adc">添加服务地址 <span class="am-icon-angle-right am-fr  am-icon-sm"></span></a>
      <!-- 已添加过地址 -->
      <div class="am-list-news-bd">
        <ul class="am-list odl">
          <li class="am-g am-list-item-dated lpt2">
            <a href="<?php echo site_url('home/address2')?>" class="am-list-item-hd "> 四川师范大学成龙校区东苑5栋<br>
              张燕<br>
              15780975467
              <span class="am-list-date"><i class="am-icon-angle-right am-icon-sm"></i></span></a>
            </li>
          </ul>
          
        </div>
        <!--   <p class="htit sad"><span class="am-icon-phone green"></span> 联系方式</p>
        <input type="tel" class="am-form-field" placeholder="电话号码">
        <br> -->
      </div>
      
      <button type="submit" class="am-u-sm-12 am-btn bgreen os">提交</button>
      <!-- 演示  可删除-->
      <a href="<?php echo site_url('home/paySuccess')?>">提交</a>
    </form>
  </body>
</html>