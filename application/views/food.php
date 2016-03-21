<body class="bpa">
  <header data-am-widget="header" class="am-header am-header-default topform">
    <div class="am-header-left am-header-nav">
      <a href="javascript:" onclick="javascript:history.go(-1);">
        <i class="am-header-icon am-icon-chevron-left"></i>
      </a>
    </div>
    <h1 class="am-header-title">
    尖椒回锅肉
    </h1>
    
  </header>
  <!-- 详情 -->
  <form action="" method="" enctype="mutiltype/data">
    <div class="foodinfo am-shadow">
      <div class="fimg"><img src="skin/img/hgr.png" class="am-img-responsive card" alt="大厨到家"></div>
      <div class="am-g">

        <h2>尖椒回锅肉</h2>
        <div class="months"><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i>月销<span class="">100</span>份</div>
        <p class="am-text-sm"><strong>主料：</strong>五花肉；尖椒</p>
        <p class="am-text-sm"><strong>辅料：</strong>白糖；豆瓣酱；洋葱；芹菜；酱油；鸡精；花生油</p>
        <p class="am-text-sm"><strong>简介：</strong>这道菜色泽鲜亮、 肥而不腻、 入口醇香、 香辣下饭, 绝对是米饭杀手。</p>
        
        <div class="pr"><i class="am-icon-cny"></i><span class="price">18</span></div>
        <div class="foodNum">
          <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
          <input type="text" class="numTxt" name="numbers" readonly="readonly" value="0">
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
 
    <div data-am-widget="navbar" class="am-navbar am-shadow am-cf am-navbar-default amft" id="">
      <a href="<?php echo site_url('home/order')?>">
      <div class="am-u-sm-8 a">
        <img src="skin/img/cl.png" class="cartImg" alt=""><input type="text" id="fen" class="allmoney" value="0">份
        <i class="am-icon-cny red"><input type="text" id="allmoney" class="allmoney" value="0"></i>
      </div>
      <div class="am-u-sm-4 b">
       
           <button type="submit"disabled="disable" class="am-btn am-btn-success tijiao">确认</button>
        
      </div>
      </a>
  </div>
  </form>
   <script src="skin/js/jquery.min.js"></script>
  <script src="skin/js/num.js"></script>
  <script>
    $(function(){
  $('.foodNum span').click(function() {
 if($('.numTxt').val() > 0){ 
        $('.tijiao').removeAttr('disabled').val('选好了');
      
      }
      else
         $('.tijiao').attr({
           disabled: 'disable',
           value: '空篮子'
         }); 

  });
     
    })
  </script>
</body>
</html>