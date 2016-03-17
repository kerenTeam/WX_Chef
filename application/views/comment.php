<body>
  <script type="text/javascript" src="skin/js/star.js"></script>
  
  <header data-am-widget="header" class="am-header am-header-default topform">
    <div class="am-header-left am-header-nav">
      <a href="javascript:" onclick="javascript:history.go(-1);">
        <i class="am-header-icon am-icon-chevron-left"></i>
      </a>
    </div>
    <h1 class="am-header-title">
    评价
    </h1>
  </header>
  <!-- 评价内容填写 -->
  <form action="" method="">
  <!-- 保存打分内容 -->

    <input id="rating" name="serving" value="0" hidden type="txt">
    <input id="taste" name="taste" value="0"  hidden type="txt">
    <input id="environment" name="environment"  hidden value="0" type="txt">
    <div id="AddDP" class="am-shadow">
      <ul class="clist">
        <li>菜品<span class="Select">
        <a onMouseOver="javascript:setProfix('star_');showStars(1,'rating');"
          onMouseOut="javascript:setProfix('star_');clearStars('rating');"
          href="javascript:setProfix('star_');setStars(1,'rating');">
        <img id="star_1" title="差(1)" src="skin/img/icon_star_1.gif"></a>
        
        <a onMouseOver="javascript:setProfix('star_');showStars(2,'rating');"
          onMouseOut="javascript:setProfix('star_');clearStars('rating');"
          href="javascript:setProfix('star_');setStars(2,'rating');">
        <img id="star_2" title="一般(2)" src="skin/img/icon_star_1.gif"></a>
        
        <a onMouseOver="javascript:setProfix('star_');showStars(3,'rating');"
          onMouseOut="javascript:setProfix('star_');clearStars('rating');"
          href="javascript:setProfix('star_');setStars(3,'rating');">
        <img id="star_3" title="好(3)" src="skin/img/icon_star_1.gif"></a>
        
        <a onMouseOver="javascript:setProfix('star_');showStars(4,'rating');"
          onMouseOut="javascript:setProfix('star_');clearStars('rating');"
          href="javascript:setProfix('star_');setStars(4,'rating');">
        <img id="star_4" title="很好(4)" src="skin/img/icon_star_1.gif"></a>
        
        <a onMouseOver="javascript:setProfix('star_');showStars(5,'rating');"
          onMouseOut="javascript:setProfix('star_');clearStars('rating');"
          href="javascript:setProfix('star_');setStars(5,'rating');">
        <img id="star_5" title="非常好(5)" src="skin/img/icon_star_1.gif"></a></span></li>
        
        
        
        <li>厨师<span class="Select">
        <a onMouseOver="javascript:setProfix('taste_');showStars(1,'taste');"
          onMouseOut="javascript:setProfix('taste_');clearStars('taste');"
          href="javascript:setProfix('taste_');setStars(1,'taste');">
        <img id="taste_1" title="差(1)" src="skin/img/icon_star_1.gif"></a>
        
        <a onMouseOver="javascript:setProfix('taste_');showStars(2,'taste');"
          onMouseOut="javascript:setProfix('taste_');clearStars('taste');"
          href="javascript:setProfix('taste_');setStars(2,'taste');">
        <img id="taste_2" title="一般(2)" src="skin/img/icon_star_1.gif"></a>
        
        <a onMouseOver="javascript:setProfix('taste_');showStars(3,'taste');"
          onMouseOut="javascript:setProfix('taste_');clearStars('taste');"
          href="javascript:setProfix('taste_');setStars(3,'taste');">
        <img id="taste_3" title="好(3)" src="skin/img/icon_star_1.gif"></a>
        
        <a onMouseOver="javascript:setProfix('taste_');showStars(4,'taste');"
          onMouseOut="javascript:setProfix('taste_');clearStars('taste');"
          href="javascript:setProfix('taste_');setStars(4,'taste');">
        <img id="taste_4" title="很好(4)" src="skin/img/icon_star_1.gif"></a>
        
        <a onMouseOver="javascript:setProfix('taste_');showStars(5,'taste');"
          onMouseOut="javascript:setProfix('taste_');clearStars('taste');"
          href="javascript:setProfix('taste_');setStars(5,'taste');">
        <img id="taste_5" title="非常好(5)" src="skin/img/icon_star_1.gif"></a> </span></li>
        
        
        
        
        <li>服务<span class="Select">
        <a onMouseOver="javascript:setProfix('environment_');showStars(1,'environment');"
          onMouseOut="javascript:setProfix('environment_');clearStars('environment');"
          href="javascript:setProfix('environment_');setStars(1,'environment');">
        <img id="environment_1" title="差(1)" src="skin/img/icon_star_1.gif"></a>
        
        <a onMouseOver="javascript:setProfix('environment_');showStars(2,'environment');"
          onMouseOut="javascript:setProfix('environment_');clearStars('environment');"
          href="javascript:setProfix('environment_');setStars(2,'environment');">
        <img id="environment_2" title="一般(2)" src="skin/img/icon_star_1.gif"></a>
        
        <a onMouseOver="javascript:setProfix('environment_');showStars(3,'environment');"
          onMouseOut="javascript:setProfix('environment_');clearStars('environment');"
          href="javascript:setProfix('environment_');setStars(3,'environment');">
        <img id="environment_3" title="好(3)" src="skin/img/icon_star_1.gif"></a>
        
        <a onMouseOver="javascript:setProfix('environment_');showStars(4,'environment');"
          onMouseOut="javascript:setProfix('environment_');clearStars('environment');"
          href="javascript:setProfix('environment_');setStars(4,'environment');">
        <img id="environment_4" title="很好(4)" src="skin/img/icon_star_1.gif"></a>
        
        <a onMouseOver="javascript:setProfix('environment_');showStars(5,'environment');"
          onMouseOut="javascript:setProfix('environment_');clearStars('environment');"
          href="javascript:setProfix('environment_');setStars(5,'environment');">
        <img id="environment_5" title="非常好(5)" src="skin/img/icon_star_1.gif"></a> </span></li>
  
      </ul>
    </div>
     <textarea class="am-u-sm-12 am-shadow cmt" rows="5" id="doc-ta-1" placeholder="你的意见对我们至关重要"></textarea>
    <!-- footer -->
    <div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default amft" id="">
      <div class="am-u-sm-8 a">
      </div>
      <div class="am-u-sm-4 b">
        
        <button type="submit"class="am-btn am-btn-success">发表</button>
        
      </div>
    </div>
  </form>
</body>
<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/amazeui.min.js"></script>
</html>