<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/amazeui.min.js"></script>
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
 <!-- style="position: fixed;top:49px;left:0;width:100%;height:100%;" -->
  <!-- 菜品栏目 -->
  <div class="am-u-sm-3 cmn"><!--  style="height: 100%;overflow-y:auto; " -->
     <nav class="scrollspy-nav" data-am-scrollspy-nav="{offsetTop:149}" data-am-sticky="{top:49}">
    <div class="pink typec"><img src="skin/img/type.png" alt="">&nbsp;分类</div>
    <ul class="am-list typel">
    <?php foreach($cates as $cate):?>
      <li><a href="#<?=$cate['id']?>"><img src="<?=base_url($cate['packicon']);?>" alt="">&nbsp;<?=$cate['packname'];?></a></li>
    <?php endforeach;?>
    </ul>
    </nav>
  </div>
  <!-- 菜品选择 --> <!-- style="height: 100%;overflow-y:auto;padding-bottom: 8.5rem;" -->
  <div data-am-widget="list_news" class="am-u-sm-9 asp cmn">
    <div class="cmn cmnb am-list-news am-list-news-default" >
      <div class="am-list-news-bd">

      <?php foreach($cates as $val):?>
        <p id="<?=$val['id']?>"><?=$val['packname']?></p>
        <ul class="am-list">
        <?php $pid = $val['id']; $foods = $this->db->query("select * from food where pid ='$pid'");$food = $foods->result_array();?>
        <?php foreach($food as $v):?>
          <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
            <div class="am-u-sm-4 am-list-thumb">
              <a href="<?php echo site_url('home/food?id=').$v['id'];?>" class="vimg">
                <img src="<?=base_url($v['thumbnail']);?>" alt="<?=$v['foodName'];?>"/>
              </a>
            </div>
            <div class=" am-u-sm-8 am-list-main">
              <h3 class="am-list-item-hd"><?=$v['foodName'];?></h3>
              <div class="am-list-item-text"><strong>特点：</strong><?=$v['specialty'];?>。</div>
              <div class="months"><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i>月销<span class="vimg"><?=$v['monthSalesm'];?></span>份</div>
              <div class="pr"><i class="am-icon-cny"></i><span class="price"><?=$v['price'];?></span><span class="am-text-xs gray"> /份</span></div>
              <div class="foodNum">
                <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
                <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
                <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
              </div>
            </div>
          </li>
        <?php endforeach;?>
        </ul>
      <?php endforeach;?>
      </div>
    </div>
  </div>
  <!-- footer -->
  <div data-am-widget="navbar" class="am-navbar am-shadow am-cf am-navbar-default amft" id="">
    <a href="<?php echo site_url('home/cart')?>">
      <div class="am-u-sm-8 a">
        <span class="green"><img src="skin/img/cart.png" alt=""><span id="fen" class="allmoney">0</span>份</span>
        <i class="am-icon-cny red"></i><span id="allmoney" class="allmoney red">0</span>
      </div>
      <div class="am-u-sm-4 b">
        
        <button type="submit" class="am-btn am-btn-success">确认</button>
        
      </div>
    </a>
  </div>
</form>

<script src="skin/js/num.js"></script>
<script>
// var urlstr = location.href;
// //alert((urlstr + '/').indexOf($(this).attr('href')));
// var urlstatus=false;
// $(".typel li a").each(function () {
// if ((urlstr + '/').indexOf($(this).attr('href')) > -1&&$(this).attr('href')!='') {
// $(this).addClass('currenta'); urlstatus = true;
// } else {
// $(this).removeClass('currenta');
// }
// });
// if (!urlstatus) {$(".typel li a").eq(0).addClass('currenta'); }

 $(function(){

// $('.typel li a').on('click',function(){
// $('.typel li a').removeClass('currenta');
// $(this).addClass('currenta');
// })

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