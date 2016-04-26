<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/amazeui.min.js"></script>
<body>
  <!-- header -->
  <header data-am-widget="header"class="am-header am-header-default topform bheader" style="position:fixed!important;top:0px !important; width: 100%;height: 49px;z-index: 9999"> <!-- data-am-sticky  am-header-fixed header固定在顶部-->
  <div class="am-header-left am-header-nav">
    <a href="<?php echo site_url('home/index')?>">
      <i class="am-header-icon am-icon-chevron-left"></i>
    </a>
  </div>
  <h1 class="am-header-title">
  净菜
  </h1>

</header>

<form action="<?=site_url('home/addcart');?>" method='post'  id='question' enctype="multipart/form-data">
 <!-- style="position: fixed;top:49px;left:0;width:100%;height:100%;" -->
  <!-- 菜品栏目 -->
  <div class="am-u-sm-3 cmn aml"><!--  style="height: 100%;overflow-y:auto; " -->
     <nav class="scrollspy-nav" data-am-scrollspy-nav="{offsetTop: -48}" data-am-sticky="{top:49}">
    <div class="pink typec"><img src="skin/img/type.png" alt="">&nbsp;分类</div>
    <ul class="am-list typel">
      <li><a href="#1"><img src="skin/img/t1.png" alt="">&nbsp;热菜</a></li>
      <li><a href="#2"><img src="skin/img/t2.png" alt="">&nbsp;小吃</a></li>
      <li><a href="#3"><img src="skin/img/t3.png" alt="">&nbsp;海河鲜</a></li>
      <li><a href="#4"><img src="skin/img/t4.png" alt="">&nbsp;凉菜</a></li>
      <li><a href="#5"><img src="skin/img/t5.png" alt="">&nbsp;汤</a></li>
      <li><a href="#6"><img src="skin/img/t6.png" alt="">&nbsp;燕鲍翅</a></li>
      <li><a href="#7"><img src="skin/img/t7.png" alt="">&nbsp;套餐</a></li>
    </ul>
    </nav>
  </div>
  <!-- 菜品选择 --> <!-- style="height: 100%;overflow-y:auto;padding-bottom: 8.5rem;" -->
  <div data-am-widget="list_news" class="am-u-sm-9 asp cmn amr">
    <div class="cmn cmnb am-list-news am-list-news-default" >
      <div class="am-list-news-bd"> 
        <div class="cptit" id="1"><span>热菜</span></div>
        <ul class="am-list"> 
           
          <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
            <div class="am-u-sm-4 am-text-center am-list-thumb">
              <a href="<?php echo site_url('home/food')?>" class="vimg">
                <img src="skin/img/exp.gif" data-original="skin/img/product/rjx.jpg" class="lazy" alt="蓉记姜葱香辣蟹168"/>
              </a>
            </div>
            <div class=" am-u-sm-8 am-list-main">
             <a href="<?php echo site_url('home/food')?>" class="gray">
              <h3 class="am-list-item-hd black">蓉记姜葱香辣蟹</h3>
              <div class="am-list-item-text"><strong>特点：</strong>肥而不腻，色泽鲜艳，味道巴适。</div>
              <div class="months">推荐指数：<i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i>月销<span>123</span>份</div>
             </a>
              <div class="pr"><i class="am-icon-cny"></i><span class="price">126</span><span class="am-text-xs gray"> /份</span></div>
              <div class="foodNum">
            
                <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
                <input type="text" class="numTxt" name="numbers[]" onkeydown="if(event.keyCode==13)event.keyCode=9" onkeypress="return IsNum(event)" oninput="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
                <span class="add am-icon-plus-circle"></span><!--  onClick="handle(this, true)" -->
              </div>
            </div>
          </li> 
          <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
            <div class="am-u-sm-4 am-text-center am-list-thumb">
              <a href="<?php echo site_url('home/food')?>" class="vimg">
                <img src="skin/img/exp.gif" data-original="skin/img/product/rjx.jpg" class="lazy" alt="蓉记姜葱香辣蟹168"/>
              </a>
            </div>
            <div class=" am-u-sm-8 am-list-main">
             <a href="<?php echo site_url('home/food')?>" class="gray">
              <h3 class="am-list-item-hd black">蓉记姜葱香辣蟹</h3>
              <div class="am-list-item-text"><strong>特点：</strong>肥而不腻，色泽鲜艳，味道巴适。</div>
              <div class="months">推荐指数：<i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i>月销<span>123</span>份</div>
             </a>
              <div class="pr"><i class="am-icon-cny"></i><span class="price">126</span><span class="am-text-xs gray"> /份</span></div>
              <div class="foodNum">
            
                <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
                <input type="text" class="numTxt" name="numbers[]" onkeydown="if(event.keyCode==13)event.keyCode=9" onkeypress="return IsNum(event)" oninput="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
                <span class="add am-icon-plus-circle"></span><!--  onClick="handle(this, true)" -->
              </div>
            </div>
          </li> 
          <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
            <div class="am-u-sm-4 am-text-center am-list-thumb">
              <a href="<?php echo site_url('home/food')?>" class="vimg">
                <img src="skin/img/exp.gif" data-original="skin/img/product/rjx.jpg" class="lazy" alt="蓉记姜葱香辣蟹168"/>
              </a>
            </div>
            <div class=" am-u-sm-8 am-list-main">
             <a href="<?php echo site_url('home/food')?>" class="gray">
              <h3 class="am-list-item-hd black">蓉记姜葱香辣蟹</h3>
              <div class="am-list-item-text"><strong>特点：</strong>肥而不腻，色泽鲜艳，味道巴适。</div>
              <div class="months">推荐指数：<i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i>月销<span>123</span>份</div>
             </a>
              <div class="pr"><i class="am-icon-cny"></i><span class="price">126</span><span class="am-text-xs gray"> /份</span></div>
              <div class="foodNum">
            
                <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
                <input type="text" class="numTxt" name="numbers[]" onkeydown="if(event.keyCode==13)event.keyCode=9" onkeypress="return IsNum(event)" oninput="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
                <span class="add am-icon-plus-circle"></span><!--  onClick="handle(this, true)" -->
              </div>
            </div>
          </li> 
          <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
            <div class="am-u-sm-4 am-text-center am-list-thumb">
              <a href="<?php echo site_url('home/food')?>" class="vimg">
                <img src="skin/img/exp.gif" data-original="skin/img/product/rjx.jpg" class="lazy" alt="蓉记姜葱香辣蟹168"/>
              </a>
            </div>
            <div class=" am-u-sm-8 am-list-main">
             <a href="<?php echo site_url('home/food')?>" class="gray">
              <h3 class="am-list-item-hd black">蓉记姜葱香辣蟹</h3>
              <div class="am-list-item-text"><strong>特点：</strong>肥而不腻，色泽鲜艳，味道巴适。</div>
              <div class="months">推荐指数：<i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i>月销<span>123</span>份</div>
             </a>
              <div class="pr"><i class="am-icon-cny"></i><span class="price">126</span><span class="am-text-xs gray"> /份</span></div>
              <div class="foodNum">
            
                <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
                <input type="text" class="numTxt" name="numbers[]" onkeydown="if(event.keyCode==13)event.keyCode=9" onkeypress="return IsNum(event)" oninput="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
                <span class="add am-icon-plus-circle"></span><!--  onClick="handle(this, true)" -->
              </div>
            </div>
          </li> 
        </ul>
        <div class="cptit" id="2"><span>小吃</span></div>
        <ul class="am-list"> 
           
          <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
            <div class="am-u-sm-4 am-text-center am-list-thumb">
              <a href="<?php echo site_url('home/food')?>" class="vimg">
                <img src="skin/img/exp.gif" data-original="skin/img/product/rjx.jpg" class="lazy" alt="蓉记姜葱香辣蟹168"/>
              </a>
            </div>
            <div class=" am-u-sm-8 am-list-main">
             <a href="<?php echo site_url('home/food')?>" class="gray">
              <h3 class="am-list-item-hd black">蓉记姜葱香辣蟹</h3>
              <div class="am-list-item-text"><strong>特点：</strong>肥而不腻，色泽鲜艳，味道巴适。</div>
              <div class="months">推荐指数：<i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i>月销<span>123</span>份</div>
             </a>
              <div class="pr"><i class="am-icon-cny"></i><span class="price">126</span><span class="am-text-xs gray"> /份</span></div>
              <div class="foodNum">
            
                <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
                <input type="text" class="numTxt" name="numbers[]" onkeydown="if(event.keyCode==13)event.keyCode=9" onkeypress="return IsNum(event)" oninput="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
                <span class="add am-icon-plus-circle"></span><!--  onClick="handle(this, true)" -->
              </div>
            </div>
          </li> 
        </ul>
        <div class="cptit" id="3"><span>河海鲜</span></div>
        <ul class="am-list"> 
           
          <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
            <div class="am-u-sm-4 am-text-center am-list-thumb">
              <a href="<?php echo site_url('home/food')?>" class="vimg">
                <img src="skin/img/exp.gif" data-original="skin/img/product/rjx.jpg" class="lazy" alt="蓉记姜葱香辣蟹168"/>
              </a>
            </div>
            <div class=" am-u-sm-8 am-list-main">
             <a href="<?php echo site_url('home/food')?>" class="gray">
              <h3 class="am-list-item-hd black">蓉记姜葱香辣蟹</h3>
              <div class="am-list-item-text"><strong>特点：</strong>肥而不腻，色泽鲜艳，味道巴适。</div>
              <div class="months">推荐指数：<i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i>月销<span>123</span>份</div>
             </a>
              <div class="pr"><i class="am-icon-cny"></i><span class="price">126</span><span class="am-text-xs gray"> /份</span></div>
              <div class="foodNum">
            
                <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
                <input type="text" class="numTxt" name="numbers[]" onkeydown="if(event.keyCode==13)event.keyCode=9" onkeypress="return IsNum(event)" oninput="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
                <span class="add am-icon-plus-circle"></span><!--  onClick="handle(this, true)" -->
              </div>
            </div>
          </li> 
        </ul>
        <div class="cptit" id="4"><span>凉菜</span></div>
        <ul class="am-list"> 
           
          <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
            <div class="am-u-sm-4 am-text-center am-list-thumb">
              <a href="<?php echo site_url('home/food')?>" class="vimg">
                <img src="skin/img/exp.gif" data-original="skin/img/product/rjx.jpg" class="lazy" alt="蓉记姜葱香辣蟹168"/>
              </a>
            </div>
            <div class=" am-u-sm-8 am-list-main">
             <a href="<?php echo site_url('home/food')?>" class="gray">
              <h3 class="am-list-item-hd black">蓉记姜葱香辣蟹</h3>
              <div class="am-list-item-text"><strong>特点：</strong>肥而不腻，色泽鲜艳，味道巴适。</div>
              <div class="months">推荐指数：<i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i>月销<span>123</span>份</div>
             </a>
              <div class="pr"><i class="am-icon-cny"></i><span class="price">126</span><span class="am-text-xs gray"> /份</span></div>
              <div class="foodNum">
            
                <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
                <input type="text" class="numTxt" name="numbers[]" onkeydown="if(event.keyCode==13)event.keyCode=9" onkeypress="return IsNum(event)" oninput="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
                <span class="add am-icon-plus-circle"></span><!--  onClick="handle(this, true)" -->
              </div>
            </div>
          </li> 
        </ul>
        <div class="cptit" id="5"><span>汤</span></div>
        <ul class="am-list"> 
           
          <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
            <div class="am-u-sm-4 am-text-center am-list-thumb">
              <a href="<?php echo site_url('home/food')?>" class="vimg">
                <img src="skin/img/exp.gif" data-original="skin/img/product/rjx.jpg" class="lazy" alt="蓉记姜葱香辣蟹168"/>
              </a>
            </div>
            <div class=" am-u-sm-8 am-list-main">
             <a href="<?php echo site_url('home/food')?>" class="gray">
              <h3 class="am-list-item-hd black">蓉记姜葱香辣蟹</h3>
              <div class="am-list-item-text"><strong>特点：</strong>肥而不腻，色泽鲜艳，味道巴适。</div>
              <div class="months">推荐指数：<i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i>月销<span>123</span>份</div>
             </a>
              <div class="pr"><i class="am-icon-cny"></i><span class="price">126</span><span class="am-text-xs gray"> /份</span></div>
              <div class="foodNum">
            
                <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
                <input type="text" class="numTxt" name="numbers[]" onkeydown="if(event.keyCode==13)event.keyCode=9" onkeypress="return IsNum(event)" oninput="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
                <span class="add am-icon-plus-circle"></span><!--  onClick="handle(this, true)" -->
              </div>
            </div>
          </li> 
        </ul>
        <div class="cptit" id="6"><span>燕鲍翅</span></div>
        <ul class="am-list"> 
           
          <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
            <div class="am-u-sm-4 am-text-center am-list-thumb">
              <a href="<?php echo site_url('home/food')?>" class="vimg">
                <img src="skin/img/exp.gif" data-original="skin/img/product/rjx.jpg" class="lazy" alt="蓉记姜葱香辣蟹168"/>
              </a>
            </div>
            <div class=" am-u-sm-8 am-list-main">
             <a href="<?php echo site_url('home/food')?>" class="gray">
              <h3 class="am-list-item-hd black">蓉记姜葱香辣蟹</h3>
              <div class="am-list-item-text"><strong>特点：</strong>肥而不腻，色泽鲜艳，味道巴适。</div>
              <div class="months">推荐指数：<i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i>月销<span>123</span>份</div>
             </a>
              <div class="pr"><i class="am-icon-cny"></i><span class="price">126</span><span class="am-text-xs gray"> /份</span></div>
              <div class="foodNum">
            
                <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
                <input type="text" class="numTxt" name="numbers[]" onkeydown="if(event.keyCode==13)event.keyCode=9" onkeypress="return IsNum(event)" oninput="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
                <span class="add am-icon-plus-circle"></span><!--  onClick="handle(this, true)" -->
              </div>
            </div>
          </li> 
        </ul>
        <div class="cptit" id="7"><span>套餐</span></div>
        <ul class="am-list"> 
           
          <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
            <div class="am-u-sm-4 am-text-center am-list-thumb">
              <a href="<?php echo site_url('home/food')?>" class="vimg">
                <img src="skin/img/exp.gif" data-original="skin/img/product/rjx.jpg" class="lazy" alt="蓉记姜葱香辣蟹168"/>
              </a>
            </div>
            <div class=" am-u-sm-8 am-list-main">
             <a href="<?php echo site_url('home/food')?>" class="gray">
              <h3 class="am-list-item-hd black">蓉记姜葱香辣蟹</h3>
              <div class="am-list-item-text"><strong>特点：</strong>肥而不腻，色泽鲜艳，味道巴适。</div>
              <div class="months">推荐指数：<i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i>月销<span>123</span>份</div>
             </a>
              <div class="pr"><i class="am-icon-cny"></i><span class="price">126</span><span class="am-text-xs gray"> /份</span></div>
              <div class="foodNum">
            
                <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
                <input type="text" class="numTxt" name="numbers[]" onkeydown="if(event.keyCode==13)event.keyCode=9" onkeypress="return IsNum(event)" oninput="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
                <span class="add am-icon-plus-circle"></span><!--  onClick="handle(this, true)" -->
              </div>
            </div>
          </li> 
        </ul>
      </div>
    </div>
  </div>

  <!-- footer -->
  <div data-am-widget="navbar" class="am-navbar am-shadow am-cf am-navbar-default amft" id="">
     
      <div class="am-u-sm-8 a">
        <span class="green"><img src="skin/img/cart.png" id="car" alt=""><span id="fen" class="allmoney">0</span>份</span>
        <i class="am-icon-cny red"></i><span id="allmoney" class="allmoney red">0</span>
      </div>
      <div class="am-u-sm-4 b">
        
        <button type='submit'  class="am-btn am-btn-success">确认</button>
        
      </div>
  </div>
</form>

<script src="skin/js/num_cailan.js"></script>
<script src="skin/js/jqueryLazyload.js"></script>
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
 $("img.lazy").lazyload();
}) 
</script>
<style>
   .oo{
      font-size:20px;
      z-index:99999999;
       -webkit-transition:0.5s left linear,
                      0.5s top ease-in,
                      0.1s 0.5s visibility linear;
        transition:0.5s left linear,
                   0.5s top ease-in,
                   0.1s 0.5s visibility linear;
  }
</style>
<script type="text/javascript">
    var add = document.getElementsByClassName("add"); 
    var car = document.getElementById("car");
    for (var i = 0; i < add.length; i++) {
        add[i].onclick = function(){
            clearTimeout(par);
            var x = this.getBoundingClientRect().left;
            var y = this.getBoundingClientRect().top;
            var car_x = car.getBoundingClientRect().left;
            var car_y = car.getBoundingClientRect().top;
            var div = document.createElement("div");
            div.style.position = "fixed";
            div.style.left = x + "px";
            div.style.top = y + "px";
            div.setAttribute("class","add am-icon-plus-circle oo");
            document.documentElement.appendChild(div);
             handle(this, true);
             var par = setTimeout(function(){
          // var divX = parseInt(div.style.left);
         //  var divY = parseInt(div.style.top);
         div.style.zIndex=99999;
                    div.style.left=car_x + "px";
                    div.style.top=car_y + "px";//加单位很重要，不然不会动
        // var speedX = (car_x-divX)/10;
        // var speedY = (car_y-divY)/30;
        // speedX=speedX>0?Math.ceil(speedX):Math.floor(speedX);
        // // speedY=speedY>0?Math.ceil(speedY):Math.floor(speedY);
        // div.style.left = divX + speedX + "px";
        // div.style.top = divY + speedY + "px";
        // if(divY == car_y && divX == car_x){
        //  clearInterval(par);
        //  div.parentNode.removeChild(div);
        // }
        // // console.log(divX)
        // console.log(divX,divY +'======'+ car_x,car_y); 
        var remove=setTimeout(function(){
               div.parentNode.removeChild(div);
      },550)
      },1)
        }
    }
</script>
</body>
</html>