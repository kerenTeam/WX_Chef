<body>
  <!-- header -->
  <header data-am-widget="header" data-am-sticky class="am-header am-header-default topform bheader"> <!-- am-header-fixed header固定在顶部-->
  <div class="am-header-left am-header-nav">
    <a href="<?php echo site_url('home/index')?>">
      <i class="am-header-icon am-icon-chevron-left"></i>
    </a>
  </div>
  <h1 class="am-header-title">
  菜篮子
  </h1>
  
</header>
<form action="" method="" enctype="multipart/form-data">
 
  <!-- 菜品选择 --> <!-- style="height: 100%;overflow-y:auto;padding-bottom: 8.5rem;" -->
  <div data-am-widget="list_news" class="am-u-sm-12 asp cmn">
    <div class="cmn cmnb am-list-news am-list-news-default" >
      <div class="am-list-news-bd">
        <p id="1">热菜</p>
        <ul class="am-list">
          <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
            <div class="am-u-sm-4 am-list-thumb">
              <a href="<?php echo site_url('home/food')?>" class="vimg">
                <img src="skin/img/product/rjx.jpg" alt="蓉记姜葱香辣蟹168"/>
              </a>
            </div>
            <div class=" am-u-sm-8 am-list-main">
              <h3 class="am-list-item-hd"><a href="<?php echo site_url('home/food')?>" class="black">蓉记姜葱香辣蟹</a></h3>
              <div class="am-list-item-text"><strong>特点：</strong>肥而不腻，色泽鲜艳，味道巴适。</div>
              <div class="months"><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i>月销<span class="vimg">100</span>份</div>
              <div class="pr"><i class="am-icon-cny"></i><span class="price">168</span><span class="am-text-xs gray"> /份</span></div>
              <input type="hidden" class="unit" value="2">
              <div class="foodNum">
                <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
                <input type="text" class="numTxt" name="numbers" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
                <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
              </div>
            </div>
          </li>
          <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
            <div class="am-u-sm-4 am-list-thumb">
              <a href="<?php echo site_url('home/food')?>" class="vimg">
                <img src="skin/img/product/lrjd.jpg" alt="烂肉豇豆  28"/>
              </a>
            </div>
            <div class=" am-u-sm-8 am-list-main">
              <h3 class="am-list-item-hd"><a href="<?php echo site_url('home/food')?>" class="black">烂肉豇豆</a></h3>
              <div class="am-list-item-text"><strong>特点：</strong>肥而不腻，色泽鲜艳，味道巴适。</div>
              <div class="months"><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i>月销<span class="vimg">100</span>份</div>
              <div class="pr"><i class="am-icon-cny"></i><span class="price">28</span><span class="am-text-xs gray"> /份</span></div>
              <input type="hidden" class="unit" value="10">
              <div class="foodNum">
                <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
                <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
                <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
              </div>
            </div>
          </li>

      
        </ul>
      </div>
    </div>
  </div>
  <!-- footer -->
  <div data-am-widget="navbar" class="am-navbar am-shadow am-cf am-navbar-default amft" id="">
    <a href="<?php echo site_url('home/cart')?>">
      <div class="am-u-sm-8 a">
        <span class="green"><img src="skin/img/cart.png" alt=""><span id="fen" class="allmoney">总价</span>
        <i class="am-icon-cny red"></i><span id="allmoney" class="allmoney red">0</span>
      </div>
      <div class="am-u-sm-4 b">
        
        <button type="submit" class="am-btn am-btn-success">确认</button>
        
      </div>
    </a>
  </div>
</form>
<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/amazeui.min.js"></script>
<script src="skin/js/num_unit.js"></script>
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