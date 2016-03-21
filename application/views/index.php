
  <body>
    <!-- 搜索 -->
    <form action="" method="" class="topform">
      <div class="am-g">
        <button type="submit" class="am-icon-search sb"></button>
        <input type="search" id="search" onfocus="jump()" class="am-form-field" placeholder="请输入菜名或食材">
      </div>
    </form>
    <!-- banner -->
     <div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{}' >
  <ul class="am-slides">
    <!--   <li>
         <img src="skin/img/card.png" class="am-img-responsive card" alt="大厨到家"> 
         <button type="button" class="am-btn am-btn-primary cardbtn" data-am-modal="{target: '#my-alert'}"> 领取
          </button>

      </li> -->
      <li>
         <a href="<?php echo site_url('home/cardGet')?>"><img src="skin/img/card.png" class="am-img-responsive card" alt="大厨到家"></a>
         
      </li>
      <li>
         <a href="<?php echo site_url('home/cardGet')?>"><img src="skin/img/card.png" class="am-img-responsive card" alt="大厨到家"></a>
         
      </li>
      <li>
        <a href="<?php echo site_url('home/cardGet')?>"><img src="skin/img/card.png" class="am-img-responsive card" alt="大厨到家"></a>
         
      </li>
  </ul>
</div>
 
    
    <!-- 菜品 -->
    <ul class="am-gallery am-avg-sm-2 am-avg-md-2 am-avg-lg-4 am-gallery-default am-shadow veg" style="padding-bottom:5px" data-am-gallery="{ pureview: true }" >
      <li>
        <div class="am-gallery-item bred">
          <a href="<?php echo site_url('home/cailan#2')?>">
            <img src="skin/img/menu.png" alt="大厨到家"/>
            <h3 class="am-gallery-title">点菜</h3>
          </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item byellow">
          <a href="<?php echo site_url('home/cailan#3')?>">
            <img src="skin/img/fork.png" alt="大厨到家"/>
            <h3 class="am-gallery-title">套餐</h3>
          </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item bgreen">
          <a href="<?php echo site_url('home/make')?>">
            <img src="skin/img/food.png" alt="大厨到家"/>
            <h3 class="am-gallery-title">宴会定制</h3>
          </a>
        </div>
      </li>
      <li>
        <div class="am-gallery-item bblue">
          <a href="<?php echo site_url('home/cailan#4')?>">
            <img src="skin/img/tea.png" alt="大厨到家"/>
            <h3 class="am-gallery-title">燕鲍翅</h3>
          </a>
        </div>
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
    <div class="am-shadow" data-am-scrollspy="{animation: 'fade'}">
      <p class="htit"><span class="am-icon-eye yellow"></span> 实时菜价</p>

<style type="text/css" media="all">
.d1{
        height: 35px;
    margin: 10px auto;
    width: 90%;  
    overflow: hidden;
    white-space: nowrap;
}
.div2 a{ 
  color:black;
width:80px;
text-align:center;
display:inline-block;
}
.div2{
 height: 35px;
width:auto; 
font-size:14px;
}
</style>
 <div class="d1" id="div1" onmouseover="clearInterval(timer)" onmouseout="timer=setInterval(mar,30)">
    <span class="div2" id="div2"> <a href="<?php echo site_url('home/price')?>">莴笋</a>  <a href="<?php echo site_url('home/price')?>">大白菜</a>  <a href="<?php echo site_url('home/price')?>">鲜猪肉</a>  <a href="<?php echo site_url('home/price')?>">鸡肉</a>  <a href="<?php echo site_url('home/price')?>">河虾</a>  <a href="<?php echo site_url('home/price')?>">鲤鱼</a>  <a href="<?php echo site_url('home/price')?>">大螃蟹</a>  </span><span id="div3" class="div2"></span>
</div>  

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
          <a href="<?php echo site_url('home/cailan')?>">
            <span class=""><img src="skin/img/clz.png" alt=""></span>
            <span class="am-navbar-label">菜篮子</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('home/ucent')?>">
            <span class=""><img src="skin/img/gr1.png" alt=""></span>
            <span class="am-navbar-label">个人</span>
          </a>
        </li>
      </ul>
    </div>
    <script src="skin/js/jquery.min.js"></script>
    <script src="skin/js/amazeui.min.js"></script>
      <script>
     function jump(){
      window.location.href="<?php echo site_url('home/search')?>";
     }
 
  </script>

  <script type="text/javascript" src="skin/js/jquery.als-1.7.min.js"></script>
  <script type="text/javascript">

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