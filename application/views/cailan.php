<body>
  <!-- header -->
  <header data-am-widget="header" class="am-header am-header-default topform">
    <div class="am-header-left am-header-nav">
      <a href="javascript:" onclick="javascript:history.go(-1);">
        <i class="am-header-icon am-icon-chevron-left"></i>
      </a>
    </div>
    <h1 class="am-header-title"> 
      菜篮子 
    </h1>
    
  </header>
  <form action="" method="" enctype="multipart/form-data">
  <!-- 菜品栏目 -->
    <div class="am-u-sm-3 cmn">

      <nav class="scrollspy-nav" data-am-scrollspy-nav="{offsetTop: 45}" data-am-sticky>
      <div class="pink typec"><img src="skin/img/type.png" alt="">&nbsp;分类</div>
  <ul class="am-list">
    <li><a href="#1">炖菜</a></li>
    <li><a href="#2">点菜</a></li>
    <li><a href="#3">套餐</a></li>
    <li><a href="#4">燕鲍翅</a></li> 
  </ul>
</nav>
    </div>
    <!-- 菜品选择 -->
    <div class="am-u-sm-9 asp cmn">
    <div data-am-widget="list_news" class="cmn cmnb am-list-news am-list-news-default" >
      
      <div class="am-list-news-bd">
      <p id="1">炖菜</p>
        <ul class="am-list">  
          <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
            <div class="am-u-sm-4 am-list-thumb">
              <a href="<?php echo site_url('home/food')?>" class="">
                <img src="skin/img/food1.png" alt="我最喜欢的一张画"/>
              </a>
            </div>
            <div class=" am-u-sm-8 am-list-main">
              <h3 class="am-list-item-hd"><a href="" class="">小炒肉</a></h3>
              <div class="am-list-item-text"><strong>特点：</strong>肥而不腻，色泽鲜艳，味道巴适。</div>
              <div class="months"><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i>月销<span class="">100</span>份</div>
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
              <div class="months"><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i>月销<span class="">100</span>份</div>
              <div class="pr"><i class="am-icon-cny"></i><span class="price">18</span></div>
              <div class="foodNum">
                <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
                <input type="text" class="numTxt" name="numbers" readonly="readonly" value="0">
                <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
              </div>
            </div>
          </li>
        </ul> 
      <p id="2">点菜</p>
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
              <div class="months"><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i>月销<span class="">100</span>份</div>
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
              <div class="months"><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i>月销<span class="">100</span>份</div>
              <div class="pr"><i class="am-icon-cny"></i><span class="price">18</span></div>
              <div class="foodNum">
                <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
                <input type="text" class="numTxt" name="numbers" readonly="readonly" value="0">
                <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
              </div>
            </div>
          </li>
        </ul> 
      <p id="3">套餐</p>
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
              <div class="months"><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i>月销<span class="">100</span>份</div>
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
              <div class="months"><i class="am-icon-star gray"></i><i class="am-icon-star gray"></i><i class="am-icon-star gray"></i><i class="am-icon-star gray"></i>月销<span class="">100</span>份</div>
              <div class="pr"><i class="am-icon-cny"></i><span class="price">18</span></div>
              <div class="foodNum">
                <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
                <input type="text" class="numTxt" name="numbers" readonly="readonly" value="0">
                <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
              </div>
            </div>
          </li>
        </ul> 
      <p id="4">燕鲍翅</p>
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
  <script src="skin/js/amazeui.min.js"></script>
  <script src="skin/js/num.js"></script>
</body>
</html>