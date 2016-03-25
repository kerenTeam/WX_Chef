<body>
  <style>ul,.am-list{margin-bottom:-0.8rem!important;}</style>
  <header data-am-widget="header" class="am-header am-header-default topform">
    <div class="am-header-left am-header-nav">
      <a href="javascript:" onclick="javascript:history.go(-1);">
        <i class="am-header-icon am-icon-chevron-left"></i>
      </a>
    </div>
    <h1 class="am-header-title">
    我的订单
    </h1>
  </header>
  <!-- 订单分类 -->
  <div data-am-widget="titlebar" class="am-titlebar am-titlebar-cols ana am-shadow" >
    <a href="javascript:" class="current">全部</a>
    <a href="javascript:">待服务</a>
    <a href="javascript:">待付款</a>
    <a href="javascript:">服务中</a>
    <a href="javascript:">待评价</a>
    <a href="javascript:">退款</a>
  </div>
  <!-- 所有订单 -->
  
  <div data-am-widget="list_news" class="am-list-news am-list-news-default admt" >
    <!-- 待评价 -->
    <div class="am-list-news-bd am-shadow">
      
      <ul class="am-list olib">
        <!--缩略图在标题左边-->
        <div class="am-cf otop">
          <time datetime="2015-03-22T04:54:29-07:00" title="">2015-3-22 15:30</time>
          <span class="am-fr am-text-sm">待评价</span>
        </div>
        <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
          <div class="am-u-sm-3 am-list-thumb">
            <a href="<?php echo site_url('home/food')?>" class="rimg">
              <img src="skin/img/product/ddx.jpg" alt="双味大对虾68"/>
            </a>
          </div>
          <div class=" am-u-sm-5 am-list-main">
            <h3 class="am-list-item-hd">双味大对虾</h3>
            <div class="am-list-item-text">X 1</div>
          </div>
          <div class=" am-u-sm-2 am-list-main">
            <!-- 订单价格 -->
            <h3 class="am-list-item-hd"><span class="am-icon-cny">68.00</span></h3>
            <!-- 订单数量 -->
            <!-- <div class="am-list-item-text"></div> -->
          </div>
        </li>
        <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
          <div class="am-u-sm-3 am-list-thumb">
            <a href="<?php echo site_url('home/food')?>" class="rimg">
              <img src="skin/img/product/ddx.jpg" alt="双味大对虾68"/>
            </a>
          </div>
          <div class=" am-u-sm-5 am-list-main">
            <h3 class="am-list-item-hd">双味大对虾</h3>
            <!-- 订单数量 -->
            <div class="am-list-item-text">X 1</div>
          </div>
          <div class=" am-u-sm-2 am-list-main">
            <!-- 订单价格 -->
            <h3 class="am-list-item-hd"><span class="am-icon-cny">68.00</span></h3>
            
          </div>
        </li>
        <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
          <div class="am-u-sm-3 am-list-thumb">
            <a href="<?php echo site_url('home/food')?>" class="rimg">
              <img src="skin/img/product/ddx.jpg" alt="双味大对虾68"/>
            </a>
          </div>
          <div class=" am-u-sm-5 am-list-main">
            <h3 class="am-list-item-hd">双味大对虾</h3>
            <!-- 订单数量 -->
            <div class="am-list-item-text">X 1</div>
          </div>
          <div class=" am-u-sm-2 am-list-main">
            <!-- 订单价格 -->
            <h3 class="am-list-item-hd"><span class="am-icon-cny">68.00</span></h3>
            
          </div>
        </li>
        <div class="oall am-text-sm am-fr am-margin-right-sm">合计：<span class="am-icon-cny am-text-md">204</span></div>
        <hr data-am-widget="divider" class="am-divider am-divider-default ahr" />
        <p class="orderbot am-cf">
          
          <a href="<?php echo site_url('home/comment')?>" class="am-fr am-btn am-btn-primary bgreen am-btn-xs"> 评价
          </a>
          <a href="javascript:" data-am-modal="{target: '#my-alert'}" class="am-fr am-btn am-btn-primary am-btn-xs bgray"> 删除</a>
        </p>
        
      </ul>
      <!-- 删除按钮弹出框 -->
      <div class="am-modal am-modal-confirm" tabindex="-1" id="my-alert">
        <div class="am-modal-dialog">
          <div class="am-modal-bd">
            你，确定要删除这条记录吗？
          </div>
          <div class="am-modal-footer">
            <span class="am-modal-btn" data-am-modal-cancel>取消</span>
            <span class="am-modal-btn" data-am-modal-confirm>确定</span>
          </div>
        </div>
      </div>
    </div>
    <!-- 等待付款 -->
    <div class="am-list-news-bd am-shadow">
      
      <ul class="am-list olib">
        <!--缩略图在标题左边-->
        <div class="am-cf otop">
          <time datetime="2015-03-22T04:54:29-07:00" title="">2015-3-22 15:30</time>
          <span class="am-fr am-text-sm">待付款</span>
        </div>
        <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
          <div class="am-u-sm-3 am-list-thumb">
            <a href="<?php echo site_url('home/food')?>" class="rimg">
              <img src="skin/img/product/ddx.jpg" alt="双味大对虾68"/>
            </a>
          </div>
          <div class=" am-u-sm-5 am-list-main">
            <h3 class="am-list-item-hd">双味大对虾</h3>
            <div class="am-list-item-text">X 1</div>
          </div>
          <div class=" am-u-sm-2 am-list-main">
            <!-- 订单价格 -->
            <h3 class="am-list-item-hd"><span class="am-icon-cny">68.00</span></h3>
            <!-- 订单数量 -->
            <!-- <div class="am-list-item-text"></div> -->
          </div>
        </li>
        <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
          <div class="am-u-sm-3 am-list-thumb">
            <a href="<?php echo site_url('home/food')?>" class="rimg">
              <img src="skin/img/product/ddx.jpg" alt="双味大对虾68"/>
            </a>
          </div>
          <div class=" am-u-sm-5 am-list-main">
            <h3 class="am-list-item-hd">双味大对虾</h3>
            <!-- 订单数量 -->
            <div class="am-list-item-text">X 1</div>
          </div>
          <div class=" am-u-sm-2 am-list-main">
            <!-- 订单价格 -->
            <h3 class="am-list-item-hd"><span class="am-icon-cny">68.00</span></h3>
            
          </div>
        </li>
        <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
          <div class="am-u-sm-3 am-list-thumb">
            <a href="<?php echo site_url('home/food')?>" class="rimg">
              <img src="skin/img/product/ddx.jpg" alt="双味大对虾68"/>
            </a>
          </div>
          <div class=" am-u-sm-5 am-list-main">
            <h3 class="am-list-item-hd">双味大对虾</h3>
            <!-- 订单数量 -->
            <div class="am-list-item-text">X 1</div>
          </div>
          <div class=" am-u-sm-2 am-list-main">
            <!-- 订单价格 -->
            <h3 class="am-list-item-hd"><span class="am-icon-cny">68.00</span></h3>
            
          </div>
        </li>
        <div class="oall am-text-sm am-fr am-margin-right-sm">合计：<span class="am-icon-cny am-text-md">204</span></div>
        <hr data-am-widget="divider" class="am-divider am-divider-default ahr" />
        <p class="orderbot am-cf">
          
          <a href="" class="am-fr am-btn am-btn-primary bgreen am-btn-xs"> 付款
          </a>
          <a href="javascript:" data-am-modal="{target: '#my-alert2'}" class="am-fr am-btn am-btn-primary am-btn-xs bgray"> 取消订单</a>
        </p>
        
      </ul>
      <!-- 取消按钮弹出框 -->
      <div class="am-modal am-modal-confirm" tabindex="-1" id="my-alert2">
        <div class="am-modal-dialog">
          <div class="am-modal-bd">
            你，确定要取消付款吗？
          </div>
          <div class="am-modal-footer">
            <span class="am-modal-btn" data-am-modal-cancel>取消</span>
            <span class="am-modal-btn" data-am-modal-confirm>确定</span>
          </div>
        </div>
      </div>
    </div>
    <!-- 等待服务 -->
    <div class="am-list-news-bd am-shadow">
      
      <ul class="am-list olib">
        <!--缩略图在标题左边-->
        <div class="am-cf otop">
          <time datetime="2015-03-22T04:54:29-07:00" title="">2015-3-22 15:30</time>
          <span class="am-fr am-text-sm">待服务</span>
        </div>
        <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
          <div class="am-u-sm-3 am-list-thumb">
            <a href="<?php echo site_url('home/food')?>" class="rimg">
              <img src="skin/img/product/ddx.jpg" alt="双味大对虾68"/>
            </a>
          </div>
          <div class=" am-u-sm-5 am-list-main">
            <h3 class="am-list-item-hd">双味大对虾</h3>
            <div class="am-list-item-text">X 1</div>
          </div>
          <div class=" am-u-sm-2 am-list-main">
            <!-- 订单价格 -->
            <h3 class="am-list-item-hd"><span class="am-icon-cny">68.00</span></h3>
            <!-- 退款按钮 -->
            <div class="am-list-item-text mback"><a href="javascript:" data-am-modal="{target: '#my-alert3'}">退款</a></div>
          </div>
        </li>
        <div class="oall am-text-sm am-fr am-margin-right-sm">合计：<span class="am-icon-cny am-text-md">68</span></div>
        <!-- <hr data-am-widget="divider" class="am-divider am-divider-default ahr" /> -->
        <p class="orderbot am-cf">
          
          <!-- <a href="<?php echo site_url('home/comment')?>" class="am-fr am-btn am-btn-primary bgreen am-btn-xs"> 付款
          </a>
          <a href="javascript:" data-am-modal="{target: '#my-alert2'}" class="am-fr am-btn am-btn-primary am-btn-xs bgray"> 取消订单</a> -->
        </p>
        
      </ul>
      <!-- 退款按钮弹出框 -->
      <div class="am-modal am-modal-confirm" tabindex="-1" id="my-alert3">
        <div class="am-modal-dialog">
          <div class="am-modal-bd">
            你，确定要退款吗？
          </div>
          <div class="am-modal-footer">
            <span class="am-modal-btn" data-am-modal-cancel>取消</span>
            <span class="am-modal-btn" data-am-modal-confirm>确定</span>
          </div>
        </div>
      </div>
    </div>
    <div class="am-list-news-bd am-shadow">
      
      <ul class="am-list olib">
        <!--缩略图在标题左边-->
        <div class="am-cf otop">
          <time datetime="2015-03-22T04:54:29-07:00" title="">2015-3-22 15:30</time>
          <span class="am-fr am-text-sm">服务中</span>
        </div>
        <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
          <div class="am-u-sm-3 am-list-thumb">
            <a href="<?php echo site_url('home/food')?>" class="rimg">
              <img src="skin/img/product/ddx.jpg" alt="双味大对虾68"/>
            </a>
          </div>
          <div class=" am-u-sm-5 am-list-main">
            <h3 class="am-list-item-hd">双味大对虾</h3>
            <div class="am-list-item-text">X 1</div>
          </div>
          <div class=" am-u-sm-2 am-list-main">
            <!-- 订单价格 -->
            <h3 class="am-list-item-hd"><span class="am-icon-cny">68.00</span></h3>
            <!-- 退款按钮 -->
            <!-- <div class="am-list-item-text mback"><a href="javascript:" data-am-modal="{target: '#my-alert3'}"></a>退款</div> -->
          </div>
        </li>
        <div class="oall am-text-sm am-fr am-margin-right-sm">合计：<span class="am-icon-cny am-text-md">68</span></div>
        <!-- <hr data-am-widget="divider" class="am-divider am-divider-default ahr" /> -->
        <p class="orderbot am-cf">
          
          <!-- <a href="<?php echo site_url('home/comment')?>" class="am-fr am-btn am-btn-primary bgreen am-btn-xs"> 付款
          </a>
          <a href="javascript:" data-am-modal="{target: '#my-alert2'}" class="am-fr am-btn am-btn-primary am-btn-xs bgray"> 取消订单</a> -->
        </p>
        
      </ul>
      <!-- 退款按钮弹出框 -->
      <div class="am-modal am-modal-confirm" tabindex="-1" id="my-alert2">
        <div class="am-modal-dialog">
          <div class="am-modal-bd">
            你，确定要取消付款吗？
          </div>
          <div class="am-modal-footer">
            <span class="am-modal-btn" data-am-modal-cancel>取消</span>
            <span class="am-modal-btn" data-am-modal-confirm>确定</span>
          </div>
        </div>
      </div>
    </div>
    <!-- 服务中 -->
    <div class="am-list-news-bd am-shadow">
      
      <ul class="am-list olib">
        <!--缩略图在标题左边-->
        <div class="am-cf otop">
          <time datetime="2015-03-22T04:54:29-07:00" title="">2015-3-22 15:30</time>
          <span class="am-fr am-text-sm">服务中</span>
        </div>
        <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
          <div class="am-u-sm-3 am-list-thumb">
            <a href="<?php echo site_url('home/food')?>" class="rimg">
              <img src="skin/img/product/ddx.jpg" alt="双味大对虾68"/>
            </a>
          </div>
          <div class=" am-u-sm-5 am-list-main">
            <h3 class="am-list-item-hd">双味大对虾</h3>
            <div class="am-list-item-text">X 1</div>
          </div>
          <div class=" am-u-sm-2 am-list-main">
            <!-- 订单价格 -->
            <h3 class="am-list-item-hd"><span class="am-icon-cny">68.00</span></h3>
            <!-- 退款按钮 -->
            <!-- <div class="am-list-item-text mback"><a href="javascript:" data-am-modal="{target: '#my-alert3'}"></a>退款</div> -->
          </div>
        </li>
        <div class="oall am-text-sm am-fr am-margin-right-sm">合计：<span class="am-icon-cny am-text-md">68</span></div>
        <!-- <hr data-am-widget="divider" class="am-divider am-divider-default ahr" /> -->
        <p class="orderbot am-cf">
          
          <!-- <a href="<?php echo site_url('home/comment')?>" class="am-fr am-btn am-btn-primary bgreen am-btn-xs"> 付款
          </a>
          <a href="javascript:" data-am-modal="{target: '#my-alert2'}" class="am-fr am-btn am-btn-primary am-btn-xs bgray"> 取消订单</a> -->
        </p>
        
      </ul>
      <!-- 退款按钮弹出框 -->
      <div class="am-modal am-modal-confirm" tabindex="-1" id="my-alert2">
        <div class="am-modal-dialog">
          <div class="am-modal-bd">
            你，确定要取消付款吗？
          </div>
          <div class="am-modal-footer">
            <span class="am-modal-btn" data-am-modal-cancel>取消</span>
            <span class="am-modal-btn" data-am-modal-confirm>确定</span>
          </div>
        </div>
      </div>
    </div>
    <div class="am-list-news-bd am-shadow">
      
      <ul class="am-list olib">
        <!--缩略图在标题左边-->
        <div class="am-cf otop">
          <time datetime="2015-03-22T04:54:29-07:00" title="">2015-3-22 15:30</time>
          <span class="am-fr am-text-sm">服务中</span>
        </div>
        <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
          <div class="am-u-sm-3 am-list-thumb">
            <a href="<?php echo site_url('home/food')?>" class="rimg">
              <img src="skin/img/product/ddx.jpg" alt="双味大对虾68"/>
            </a>
          </div>
          <div class=" am-u-sm-5 am-list-main">
            <h3 class="am-list-item-hd">双味大对虾</h3>
            <div class="am-list-item-text">X 1</div>
          </div>
          <div class=" am-u-sm-2 am-list-main">
            <!-- 订单价格 -->
            <h3 class="am-list-item-hd"><span class="am-icon-cny">68.00</span></h3>
            <!-- 退款按钮 -->
            <!-- <div class="am-list-item-text mback"><a href="javascript:" data-am-modal="{target: '#my-alert3'}"></a>退款</div> -->
          </div>
        </li>
        <div class="oall am-text-sm am-fr am-margin-right-sm">合计：<span class="am-icon-cny am-text-md">68</span></div>
        <!-- <hr data-am-widget="divider" class="am-divider am-divider-default ahr" /> -->
        <p class="orderbot am-cf">
          
          <!-- <a href="<?php echo site_url('home/comment')?>" class="am-fr am-btn am-btn-primary bgreen am-btn-xs"> 付款
          </a>
          <a href="javascript:" data-am-modal="{target: '#my-alert2'}" class="am-fr am-btn am-btn-primary am-btn-xs bgray"> 取消订单</a> -->
        </p>
        
      </ul>
    </div>
    <!-- 退款成功 -->
    <div class="am-list-news-bd am-shadow">
      
      <ul class="am-list olib">
        <!--缩略图在标题左边-->
        <div class="am-cf otop">
          <time datetime="2015-03-22T04:54:29-07:00" title="">2015-3-22 15:30</time>
          <span class="am-fr am-text-sm">退款成功</span>
        </div>
        <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
          <div class="am-u-sm-3 am-list-thumb">
            <a href="<?php echo site_url('home/food')?>" class="rimg">
              <img src="skin/img/product/ddx.jpg" alt="双味大对虾68"/>
            </a>
          </div>
          <div class=" am-u-sm-5 am-list-main">
            <h3 class="am-list-item-hd">双味大对虾</h3>
            <div class="am-list-item-text">X 1</div>
          </div>
          <div class=" am-u-sm-2 am-list-main">
            <!-- 订单价格 -->
            <h3 class="am-list-item-hd"><span class="am-icon-cny">68.00</span></h3>
            <!-- 退款按钮 -->
            <!-- <div class="am-list-item-text mback"><a href="javascript:" data-am-modal="{target: '#my-alert3'}"></a>退款</div> -->
          </div>
        </li>
        <div class="oall am-text-sm am-fr am-margin-right-sm">退款金额：<span class="am-icon-cny am-text-md">68</span></div>
        <!-- <hr data-am-widget="divider" class="am-divider am-divider-default ahr" /> -->
        <p class="orderbot am-cf">
          
          <!-- <a href="<?php echo site_url('home/comment')?>" class="am-fr am-btn am-btn-primary bgreen am-btn-xs"> 付款
          </a>
          <a href="javascript:" data-am-modal="{target: '#my-alert2'}" class="am-fr am-btn am-btn-primary am-btn-xs bgray"> 取消订单</a> -->
        </p>
        
      </ul>
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
        <a href="<?php echo site_url('home/cailan')?>">
          <span class=""><img src="skin/img/clz.png" alt=""></span>
          <span class="am-navbar-label">菜篮子</span>
        </a>
      </li>
      <li>
        <a href="<?php echo site_url('home/ucent')?>" class="active">
          <span class=""><img src="skin/img/gr2.png" alt=""></span>
          <span class="am-navbar-label">个人</span>
        </a>
      </li>
    </ul>
  </div>
  <script src="skin/js/jquery.min.js"></script>
  <script src="skin/js/amazeui.min.js"></script>
  <script>
  $(function(){
  $('.ana a').on('click',function(){
  $('.ana a').removeClass('current');
  $(this).addClass('current');
  
  })
  })
  </script>
</body>
</html>