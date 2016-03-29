<body class="bpa">
  <header data-am-widget="header" class="am-header am-header-default topform">
    <div class="am-header-left am-header-nav">
      <a href="javascript:" onclick="javascript:history.go(-1);">
        <i class="am-header-icon am-icon-chevron-left"></i>
      </a>
    </div>
    <h1 class="am-header-title">
    <?=$foods['foodName'];?>
    </h1>
    
  </header>
  <!-- 详情 -->
  <form action="" method="" enctype="mutiltype/data">
    <div class="foodinfo am-shadow">
      <div class="fimg"><img src="<?=base_url($foods['foodPic']);?>" class="am-img-responsive card" alt="<?=$foods['foodName'];?>"></div>
      <div class="am-g">
        <h2> <?=$foods['foodName'];?></h2>
        <div class="months"><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i>月销<span class=""> <?=$foods['monthSalesm'];?></span>份</div>
        <p class="am-text-sm"><strong>主料：</strong><?=$foods['masterMaterial'];?></p>
        <p class="am-text-sm"><strong>辅料：</strong><?=$foods['subordinationMaterial'];?></p>
        <p class="am-text-sm"><strong>简介：</strong><?=$foods['note'];?></p>
        
        <div class="pr"><i class="am-icon-cny"></i><span class="price"><?=$foods['price'];?></span></div>
        <div class="foodNum">
          <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
<<<<<<< HEAD
          <input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="2">
=======
          <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
>>>>>>> 5fb14c426e91046bcdd7657cb06b5b6fca4ca89f
          <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
        </div>
        
      </div>
    </div>
    <!-- 评价 -->
    <div class="am-shadow">
      <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default" >
        <h2 class="am-titlebar-title ">
        消费评价
        </h2>
      </div>
      <div class="am-u-sm-5 am-text-center">
        <span class="red am-text-xxl"><?=$foods['appraise'];?></span>分<br>
        <span class="am-text-xs red"><i class="am-icon-star "></i><i class="am-icon-star"></i><i class="am-icon-star"></i><i class="am-icon-star"></i><i class="am-icon-star"></i></span><br>
        <span class="am-text-xs"> 共20人评价</span>
        
      </div>
      <div class="am-u-sm-7 stars">
        <p class="am-text-xs"><span class="am-text-right">菜品</span> <i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i> <?=$foods['dishScore'];?></p>
        <p class="am-text-xs"><span class="am-text-right">厨师</span><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i> <?=$foods['chefScore'];?></p>
        <p class="am-text-xs"><span class="am-text-right">服务员</span> <i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i> <?=$foods['waiterScore'];?></p>
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
<<<<<<< HEAD
          <img src="skin/img/cl.png" class="cartImg" alt=""><span id="fen" class="allmoney">2</span>份
          <i class="am-icon-cny red"></i><span id="allmoney" class="allmoney red">336</span>
=======
          <img src="skin/img/cl.png" class="cartImg" alt=""><input type="text" id="fen" class="allmoney" value="0">份
          <i class="am-icon-cny red"><input type="text" id="allmoney" class="allmoney" readonly="readonly" value="0.00"></i>
>>>>>>> 5fb14c426e91046bcdd7657cb06b5b6fca4ca89f
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
        // $('.tijiao').attr('disabled','disable');
      }
      else{
        $(this).css('display','inline-block'); 
        // $('.tijiao').removeAttr('disabled').html('选好了');
        $(this).parent('.foodNum').find('.reduce').css('display','inline-block');
      }
   });
  // $('.foodNum span').click(function() {
  //   if($('.numTxt').val() > 0){
  //       $('.tijiao').removeAttr('disabled').html('选好了');
    
  // }
  // else{
  //    $('.tijiao').attr({
  //     disabled: 'disable'
  //    }).html('空篮子');
  // }
     
  // });
  
  })
  </script>
</body>
</html>