<body>
<!-- 加载动画 -->
<!-- <div class="onturn am-center am-vertical-align">
   <span class="am-icon-spinner am-icon-pulse am-vertical-align-middle"></span>
</div>
 -->
<!-- 注册弹框 -->
<div class="tk">
  <div class="tkcontent">
    <span><img class="closetk" src="skin/img/closetk.png" alt="大厨到家"></span>
    <img src="skin/img/tk.png" class="renote" alt="大厨到家">
    <div class="tktxt">
      <div class="am-text-sm">亲，你还没有注册哟！注册即可享优惠</div>
      <a class="rega" href="<?php echo site_url('home/register')?>">立即注册</a>
      <p class="am-text-xs">已注册，直接<a class="red" href="<?php echo site_url('home/login2')?>"> 登录</a></p>
    </div>
  </div>
</div>
<!-- banner -->
<div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{}' >
  <ul class="am-slides">
    <?php foreach($banners as $val):?>
    <li>
      <a href="<?=site_url($val['url']);?>"><img src="<?=$val['thumb']?>" class="am-img-responsive card" alt="<?=$val['title']?>"></a>
      
    </li>
  <?php endforeach;?>
  </ul>
</div>
<!-- 菜品 -->
<ul class="am-gallery am-avg-sm-2 am-avg-md-2 am-avg-lg-4 am-gallery-default am-shadow veg" data-am-gallery="{ pureview: true }" >
  <li>
    <a href="<?php echo site_url('home/cailan')?>">
      <div class="am-gallery-item bred">
        <img src="skin/img/menu.png" alt="大厨到家"/>
        <h3 class="am-gallery-title">点菜</h3>
      </div>
    </a>
  </li>
  <li>
    <a href="<?php echo site_url('home/party')?>">
      <div class="am-gallery-item byellow">
        <img src="skin/img/fork.png" alt="大厨到家"/>
        <h3 class="am-gallery-title">套餐</h3>
      </div>
    </a>
  </li>
  <li>
    <a href="<?php echo site_url('home/party')?>">
      <div class="am-gallery-item bgreen">
        <img src="skin/img/food.png" alt="大厨到家"/>
        <h3 class="am-gallery-title">宴会定制</h3>
      </div>
    </a>
  </li>
  <li>
    <a href="<?php echo site_url('home/cailan#6')?>">
      <div class="am-gallery-item bblue">
        <img src="skin/img/tea.png" alt="大厨到家"/>
        <h3 class="am-gallery-title">燕鲍翅</h3>
      </div>
    </a>
  </li>
</ul>
<!-- 热销 -->
<div class="am-g am-shadow hot">
  <p class="htit"><img src="skin/img/fire.png" alt=""> 特色服务</p>
  <div class="am-u-sm-4">
    <a href="<?php echo site_url('home/vip')?>" class="am-thumbnail">
      <img class="am-circle" src="skin/img/vip.png"/>
      <p class="purple">会员</p>
    </a>
  </div>
  <div class="am-u-sm-4">
    <a href="<?php echo site_url('home/custom')?>" class="am-thumbnail">
      <img class="am-circle" src="skin/img/kf.png"/>
      <p class="sc">客服</p>
    </a>
  </div>
  <div class="am-u-sm-4">
    <a href="<?php echo site_url('home/priceSearch')?>" class="am-thumbnail">
      <img class="am-circle" src="skin/img/cj.png"/>
      <p class="pink">菜价查询</p>
    </a>
  </div>
  
</div>
<div class="am-shadow">
  <p class="htit"><span class="am-icon-eye yellow"></span> 实时菜价<a href="<?php echo site_url('home/priceSearch')?>" class="am-fr am-text-xs gray">更多》</a></p>
  <div class="d1" id="div1" onmouseover="clearInterval(timer)" onmouseout="timer=setInterval(mar,30)">
    <span class="div2" id="div2"> <a href="<?php echo site_url('home/price')?>">西兰花 5.5元一斤</a>  <a href="<?php echo site_url('home/price')?>">大白菜 5.5元一斤</a>  <a href="<?php echo site_url('home/priceSearch')?>">西兰花 5.5元一斤</a>  <a href="<?php echo site_url('home/priceSearch')?>">鸡肉 25.5元一斤</a>  <a href="<?php echo site_url('home/priceSearch')?>">西兰花 5.5元一斤</a>  <a href="<?php echo site_url('home/priceSearch')?>">西兰花 5.5元一斤</a>  <a href="<?php echo site_url('home/priceSearch')?>">鲤鱼 15.5元一斤</a>  </span><span id="div3" class="div2"></span>
  </div>
  <div>
  </div>
</div>
<div class="am-g am-shadow life">
  <p class="htit"><img src="skin/img/heart.png" alt=""> 精品生活</p>
  <figure> 
     <a href="<?php echo site_url('home/lifeInfo')?>">
       <img src="skin/img/article/it1.png" alt="大厨到家">
       <figcaption>关于美食那些事儿<br><span class="am-text-sm">食色性也</span></figcaption>
     </a>  
  </figure>
  <figure> 
     <a href="<?php echo site_url('home/lifeInfo')?>">
       <img src="skin/img/article/it1.png" alt="大厨到家">
       <figcaption>关于美食那些事儿<br><span class="am-text-sm">食色性也</span></figcaption>
     </a>  
  </figure>
</div>
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
<script src="skin/js/amazeui.min.js"></script>
<script type="text/javascript">

  $(function(){
    $('.closetk').bind('click', function() {
       $('.tk').css('display','none');
      // $('.tk').fadeOut('400');
    });
  })


// $(document).ready(function(){ 
//   $('.onturn').css({ 
//     display: 'none'
//   });
// });

var s,s2,s3,timer;
function init(){
s=getid("div1");
s2=getid("div2");
s3=getid("div3");
s3.innerHTML=s2.innerHTML;
timer=setInterval(mar,30)
}
function mar(){
if(s2.offsetWidth<=s.scrollLeft){
s.scrollLeft-=s2.offsetWidth;
}else{s.scrollLeft++;}
}
function getid(id){
return document.getElementById(id);
}
window.onload=init;
</script>
</body>
</html>