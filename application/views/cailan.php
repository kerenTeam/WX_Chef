  <body>
<!-- header -->
  <header data-am-widget="header" class="am-header am-header-default topform">
      <div class="am-header-left am-header-nav">
          <a href="javascript:" onclick="javascript:history.go(-1);">

                <i class="am-header-icon am-icon-chevron-left"></i>
          </a>
      </div>

      <h1 class="am-header-title">
          <a href="#title-link" class="">
            点杀
          </a>
      </h1>
 
  </header>
    <form action="" method="" enctype="multipart/form-data">
   <div data-am-sticky>
<!-- tab -->
  <div data-am-widget="tabs" class="am-tabs am-tabs-d2 am-shadow">
      <ul class="am-tabs-nav am-cf">
          <li class="am-active"><a href="[data-tab-panel-0]">商品</a></li>
          <li class=""><a href="[data-tab-panel-1]">评价</a></li>
      </ul>
      <div class="am-tabs-bd">
          <div data-tab-panel-0 class="am-tab-panel am-active">
            <!-- 菜品选择 -->
              <div data-am-widget="list_news" class="am-list-news am-list-news-default" >
 

            <div class="am-list-news-bd">
            <ul class="am-list">  
                <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                  <div class="am-u-sm-4 am-list-thumb">
                    <a href="" class="">
                      <img src="skin/img/food1.png" alt="我最喜欢的一张画"/>
                    </a>
                  </div>

                  <div class=" am-u-sm-8 am-list-main">
                      <h3 class="am-list-item-hd"><a href="" class="">小炒肉</a></h3>

                      <div class="am-list-item-text"><strong>特点：</strong>肥而不腻，色泽鲜艳，味道巴适。</div>
                      <div class="months">月销<span class="">100</span>份</div> 
                       <div class="pr"><i class="am-icon-cny"></i><span class="price">18</span></div>

                     <div class="foodNum">
                       <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
                           <input type="text" class="numTxt" name="numbers" readonly="readonly" value="0">
                           <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
                     </div> 

                  </div>
                </li> 

                 <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                  <div class="am-u-sm-4 am-list-thumb">
                    <a href="" class="">
                      <img src="skin/img/food1.png" alt="我最喜欢的一张画"/>
                    </a>
                  </div>

                  <div class=" am-u-sm-8 am-list-main">
                      <h3 class="am-list-item-hd"><a href="http://www.douban.com/online/11624755/" class="">小炒肉</a></h3>

                      <div class="am-list-item-text"><strong>特点：</strong>肥而不腻，色泽鲜艳，味道巴适。</div>
                      <div class="months">月销<span class="">100</span>份</div> 
                       <div class="pr"><i class="am-icon-cny"></i><span class="price">18</span></div>

                     <div class="foodNum">
                       <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
                           <input type="text" class="numTxt" name="numbers" readonly="readonly" value="0">
                           <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
                     </div> 

                  </div>
                </li> 
              </ul>
            </div> 
         </div>

          </div>
          <div data-tab-panel-1 class="am-tab-panel ">
            <!-- 评论 -->
            <article class="am-comment"> <!-- 评论容器 -->
              <a href="">
                <img class="am-comment-avatar" alt=""/> <!-- 评论者头像 -->
              </a>

              <div class="am-comment-main"> <!-- 评论内容容器 -->
                <header class="am-comment-hd">
                  <!--<h3 class="am-comment-title">评论标题</h3>-->
                  <div class="am-comment-meta"> <!-- 评论元数据 -->
                    <a href="#link-to-user" class="am-comment-author">..</a> <!-- 评论者 -->
                    评论于 <time datetime="">...</time>
                  </div>
                </header>

                <div class="am-comment-bd">...</div> <!-- 评论内容 -->
              </div>
            </article>

            <article class="am-comment"> <!-- 评论容器 -->
              <a href="">
                <img class="am-comment-avatar" alt=""/> <!-- 评论者头像 -->
              </a>

              <div class="am-comment-main"> <!-- 评论内容容器 -->
                <header class="am-comment-hd">
                  <!--<h3 class="am-comment-title">评论标题</h3>-->
                  <div class="am-comment-meta"> <!-- 评论元数据 -->
                    <a href="#link-to-user" class="am-comment-author">..</a> <!-- 评论者 -->
                    评论于 <time datetime="">...</time>
                  </div>
                </header>

                <div class="am-comment-bd">...</div> <!-- 评论内容 -->
              </div>
            </article>

            <article class="am-comment"> <!-- 评论容器 -->
              <a href="">
                <img class="am-comment-avatar" alt=""/> <!-- 评论者头像 -->
              </a>

              <div class="am-comment-main"> <!-- 评论内容容器 -->
                <header class="am-comment-hd">
                  <!--<h3 class="am-comment-title">评论标题</h3>-->
                  <div class="am-comment-meta"> <!-- 评论元数据 -->
                    <a href="#link-to-user" class="am-comment-author">..</a> <!-- 评论者 -->
                    评论于 <time datetime="">...</time>
                  </div>
                </header>

                <div class="am-comment-bd">...</div> <!-- 评论内容 -->
              </div>
            </article>
          </div>
        
      </div>
  </div>
</div>
<!-- footer -->
  <div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default amft" id="">
      <div class="am-u-sm-8 a">
        <i class="am-icon-shopping-cart"><input type="text" id="fen" class="allmoney" value="0">份</i>
        <i class="am-icon-cny"></i><input type="text" id="allmoney" class="allmoney" value="0">
      </div>
      <div class="am-u-sm-4 b">
       
           <button type="submit" class="am-btn am-btn-success">确认</button>
        
      </div>
  </div> 
</form>
<script src="skin/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="skin/js/amazeui.min.js"></script>
<script src="skin/js/num.js"></script>

</body>
</html>