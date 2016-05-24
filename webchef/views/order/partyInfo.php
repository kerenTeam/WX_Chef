        <link href="skin/css/city.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
      .am-slider-default .am-control-thumbs li{
        width: 16.66%;
      }
    </style>
<div class="center">
  <!-- info -->
  <div class="food-info">
    <div class="info-tit">
      <h1><?=$foods[0]['foodname'];?></h1>
      <p><span><?=$foods[0]['foodtrait'];?></span></p>
    </div>
    <ul class="am-g foodBanner">
      <li class="am-u-sm-8">
        <div
          class="am-slider am-slider-default info-pics"
          data-am-flexslider="{controlNav: 'thumbnails', directionNav: false, slideshow: false, animationSpeed: 400}">
          <ul class="am-slides">
          <?php foreach ($foodspic as $key => $value):?>
            <li data-thumb="<?=IP.$value['imgaddress']?>">
            <img src="<?=IP.$value['imgaddress']?>" /></li>
          <?php endforeach;?>
           
          </ul>
          <div class="viewMenu" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 1, width: 400, height: 600}">
            <i class="am-icon-leanpub"></i> 查看菜单
          </div>
          <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
            <div class="am-modal-dialog">
              <div class="am-modal-hd">
                <img src="skin/img/lc (1).jpg" style="width: 100%;height: 200px;">
                <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
              </div>
              <div class="am-modal-bd infoMadel" style="max-height: 380px;">
                <h2>菜单</h2>
               <?=$foods[0]['packagedetails'];?>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li class="am-u-sm-4">
        <div class="info-handle clear">
          <h1>价格 <span>￥ <?=$foods[0]['foodprice'];?></span></h1>
          <ul class="am-avg-sm-3 food-assess">
            <li>已售 <span>35412</span></li>
            <li><span>5</span> 分</li>
            <li><span>32412</span> 人评价</li>
          </ul>
          <div class="food-num clear">
            <div>数量</div>
            <div class="num-btn">
              <span id="subtract"><img src="skin/img/jian.png"></span>
              <input value="1"></input>
              <span id="plus"><img src="skin/img/jia.jpg"></span>
            </div>
          </div>
          <ul class="buy-food">
            <li>
              <!-- <button class="am-btn am-btn-danger am-radius buy-sbm">立即购买</button> -->
              <a href="<?=site_url('shopcar/car');?>" class="am-btn am-btn-danger am-radius buy-sbm">立即购买</a>
            </li>
            <li>
              <a class="am-btn am-btn-default am-radius join-car" href="javascript:;">
                <img src="skin/img/shop-car_03.png">
              </a>
            </li>
            <li>
              <div class="food-collect food-share">
                <div class="bdsharebuttonbox">
                  <a href="javascript:;" class=" bds_more" data-cmd="more" style="padding: 0;float: none;background: none;height: auto;font-size: 20px;position: absolute;top: 0;left: 0;width: 100%;height: 100%;">
                    
                    <!-- <div class="bdsharebuttonbox"><a href="javascript:;" class="bds_more" data-cmd="more"></a></div> -->
                    <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
                  </a>
                </div>
                <img src="skin/img/share_03.png">
                <span> 分享</span>
              </div>
            </li>
          </ul>
        </div>
      </li>
    </ul>
    <div class="food-brief">
      <p>主料：<span>五花肉；尖椒。</span></p>
      <p>辅料：<span>白糖；豆瓣酱；洋葱；芹菜；酱油；鸡精；花生油。<span></p>
    </div>
    <form class="custom am-form am-form-horizontal">
      <div class="am-g">
        <hr data-am-widget="divider" style="" class="am-divider am-divider-dotted" />
        <div class="am-u-sm-10">
          
          <div class="customBanner">
            <img src="skin/img/custom.png" alt="">
          </div>
          <form class="am-form am-form-horizontal customForm">
            <div class="am-form-group">
              <label class="am-u-sm-2 am-text-right">区域</label>
              <div class="am-u-sm-10 customAdd" style="margin-top:-0.5rem;">
                
                <div class="demo">
                  <div class="infolist">
                    <div class="liststyle">
                      <span id="Province" style="display:none;">
                        <i>请选择省份</i>
                        <ul>
                          <li><a href="javascript:void(0)" alt="请选择省份">请选择省份</a></li>
                        </ul>
                        <input type="hidden" name="cho_Province" value="请选择省份">
                      </span>
                      <span id="City">
                        <i>请选择城市</i>
                        <ul>
                          <li><a href="javascript:void(0)" alt="请选择城市">请选择城市</a></li>
                        </ul>
                        <input type="hidden" name="cho_City" value="请选择城市">
                      </span>
                      <span id="Area">
                        <i>请选择地区</i>
                        <ul>
                          <li><a href="javascript:void(0)" alt="请选择地区">请选择地区</a></li>
                        </ul>
                        <input type="hidden" name="cho_Area" value="请选择地区">
                      </span>
                      <span id="Insurer">
                        <i>请选择乡镇街道</i>
                        <ul>
                          <li><a href="javascript:void(0)" alt="请选择乡镇街道">请选择乡镇街道</a></li>
                        </ul>
                        <input type="hidden" name="cho_Insurer" value="请选择乡镇街道">
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="am-form-group">
              <label class="am-u-sm-2 am-text-right">桌数</label>
              <div class="am-u-sm-10">
                <select class="am-radius" style="width: 400px">
                  <option>请选择您的用餐桌数</option>
                  <option>10桌以下</option>
                  <option>10~20桌</option>
                  <option>20~30桌</option>
                  <option>30桌以上</option>
                </select>
              </div>
            </div>
            <div class="am-form-group">
              <label class="am-u-sm-2 am-text-right">电话</label>
              <div class="am-u-sm-10">
                <input id="phone" style="width: 400px" class="am-radius" type="tel" placeholder="请输入你的联系电话">
                <p class="customP">输入电话，客服稍后会给您回电</p>
              </div>
              <div class="am-u-sm-1"></div>
            </div>
            <div class="am-form-group">
              <div class="am-u-sm-offset-2">
                <button type="button" class="btn am-btn am-btn-danger customSubmit">提 交</button>
              </div>
            </div>
            <!-- 客服弹出框 -->
            <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-2">
              <div class="am-modal-dialog am-radius">
                <div class="am-modal-hd am-text-danger">提 示
                  <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
                </div>
                <div class="am-modal-bd customBtn">
                  <p class="customModalP">客服正在处理。<br>请留意我们给您的去电(400-820-1790)</p>
                  <a href="javascript:;" class="btn am-btn am-btn-sm am-btn-danger am-radius" data-am-modal-close>好</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      <!-- 消费评论 -->
      <div class="food-appraise borBtm">
        <div class="food-appraise-tit clear">
          <h2>消费评价</h2>
        </div>
        <ul class="am-avg-sm-3 consume">
          <li>
            <div class="raise-num">
              <h1><span>9.2</span>分</h1>
              <span class="index-num"><i></i></span>
              <br/>
              <p>共<span>1266</span>人评论</p>
            </div>
          </li>
          <li>
            <div class="raise-num2">
              <ul class="am-avg-sm-3">
                <li class="text-r">菜品</li>
                <li><span class="index-num"><i></i></span></li>
                <li class="text-l"><span class="pingfen">4.9分</span></li>
              </ul>
              <ul class="am-avg-sm-3">
                <li class="text-r">厨师</li>
                <li><span class="index-num"><i></i></span></li>
                <li class="text-l"><span class="pingfen">4.9分</span></li>
              </ul>
              <ul class="am-avg-sm-3">
                <li class="text-r">服务员</li>
                <li><span class="index-num"><i></i></span></li>
                <li class="text-l"><span class="pingfen">4.9分</span></li>
              </ul>
            </div>
          </li>
          <li>
            <div class="raise-num3">
              <ul class="am-avg-sm-3">
                <li class="text-r">5分&nbsp;&nbsp;</li>
                <li><div class="raise-rate"><i style="width: 90%"></i></div></li>
                <li class="text-l"><span class="pingfen">&nbsp;&nbsp;36580人</span></li>
              </ul>
              <ul class="am-avg-sm-3">
                <li class="text-r">4分&nbsp;&nbsp;</li>
                <li><div class="raise-rate"><i style="width: 5%"></i></div></li>
                <li class="text-l"><span class="pingfen">&nbsp;&nbsp;420人</span></li>
              </ul>
              <ul class="am-avg-sm-3">
                <li class="text-r">3分&nbsp;&nbsp;</li>
                <li><div class="raise-rate"><i style="width: 2%"></i></div></li>
                <li class="text-l"><span class="pingfen">&nbsp;&nbsp;47人</span></li>
              </ul>
              <ul class="am-avg-sm-3">
                <li class="text-r">2分&nbsp;&nbsp;</li>
                <li><div class="raise-rate"><i style="width: 2%"></i></div></li>
                <li class="text-l"><span class="pingfen">&nbsp;&nbsp;32人</span></li>
              </ul>
              <ul class="am-avg-sm-3">
                <li class="text-r">1分&nbsp;&nbsp;</li>
                <li><div class="raise-rate"><i style="width: 1%"></i></div></li>
                <li class="text-l"><span class="pingfen">&nbsp;&nbsp;21人</span></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <!-- 评价 -->
      <!--           <div class="food-btm">
        <ul class="clear food-btm-nav">
          <li class="active">全部</li>
          <li>晒图</li>
          <li>好评</li>
          <li>中评</li>
          <li>差评</li>
        </ul>
        <ul class="food-pls">
          <li>
            <h1>利尔诉你 <span class="index-num"><i></i></span></h1>
            <p>蔬菜很新鲜，菜品也看着不错哟。配送速度真的是一流的！</p>
          </li>
          <li>
            <h1>利尔诉你 <span class="index-num"><i></i></span></h1>
            <p>蔬菜很新鲜，菜品也看着不错哟。配送速度真的是一流的！</p>
          </li>
          <li>
            <h1>利尔诉你 <span class="index-num"><i></i></span></h1>
            <p>蔬菜很新鲜，菜品也看着不错哟。配送速度真的是一流的！</p>
          </li>
          <li>
            <h1>利尔诉你 <span class="index-num"><i></i></span></h1>
            <p>蔬菜很新鲜，菜品也看着不错哟。配送速度真的是一流的！</p>
          </li>
          <li>
            <h1>利尔诉你 <span class="index-num"><i></i></span></h1>
            <p>蔬菜很新鲜，菜品也看着不错哟。配送速度真的是一流的！</p>
          </li>
        </ul>
        <div class="pls-page">
          <ul data-am-widget="pagination"
            class="am-pagination am-pagination-select"
            >
            <li class="am-pagination-prev ">
              <a href="javascript:;" class="">上一页</a>
            </li>
            <li class="am-pagination-select">
              <select>
                <option value="javascript:;" class="">1
                  / 3
                </option>
                <option value="javascript:;" class="">2
                  / 3
                </option>
                <option value="javascript:;" class="">3
                  / 3
                </option>
              </select>
            </li>
            <li class="am-pagination-next ">
              <a href="javascript:;" class="">下一页</a>
            </li>
          </ul>
        </div>
      </div> -->
      <div class="pingjia">
        <div class="am-shadow borBtm">
          <header class="am-comment-hd">
            <!--<h3 class="am-comment-title">评论标题</h3>-->
            <div class="am-comment-meta">
              <a href="#link-to-user" class="am-comment-author"><img src="skin/img/user.jpg" class="am-circle comimg" alt="">157****4450</a>
              <span class="am-fr"><time datetime="2013-07-27T04:54:29-07:00" title="2013年7月27日 下午7:54 格林尼治标准时间+0800">2014-7-12</time></span>
            </div>
          </header>
          <div class="am-comment-bd am-text-xs combo">
            味道很不错,服务人员很耐心
          </div>
          <ul data-am-widget="gallery" class="am-gallery am-avg-sm-12 am-gallery-default am-no-layout" data-am-gallery="{ pureview: true }">
            <li>
              <div class="am-gallery-item">
                <a href="skin/img/food_info_03.png" class="">
                  <img src="skin/img/food_info_03.png">
                </a>
              </div>
            </li>
            <li>
              <div class="am-gallery-item">
                <a href="skin/img/food_info_03.png" class="">
                  <img src="skin/img/food_info_03.png">
                </a>
              </div>
            </li>
          </ul>
        </div>
        <div class="am-shadow borBtm">
          <header class="am-comment-hd">
            <!--<h3 class="am-comment-title">评论标题</h3>-->
            <div class="am-comment-meta">
              <a href="#link-to-user" class="am-comment-author"><img src="skin/img/user.jpg" class="am-circle comimg" alt="">157****4450</a>
              <span class="am-fr"><time datetime="2013-07-27T04:54:29-07:00" title="2013年7月27日 下午7:54 格林尼治标准时间+0800">2014-7-12</time></span>
            </div>
          </header>
          <div class="am-comment-bd am-text-xs combo">
            味道很不错,服务人员很耐心
          </div>
          <ul data-am-widget="gallery" class="am-gallery am-avg-sm-12 am-gallery-default am-no-layout" data-am-gallery="{ pureview: true }">
            <li>
              <div class="am-gallery-item">
                <a href="skin/img/food_info_03.png" class="">
                  <img src="skin/img/food_info_03.png">
                </a>
              </div>
            </li>
            <li>
              <div class="am-gallery-item">
                <a href="skin/img/food_info_03.png" class="">
                  <img src="skin/img/food_info_03.png">
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="skin/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="skin/js/city4.city.js"></script>
<script type="text/javascript" src="skin/js/city4.js"></script>
<script type="text/javascript">
$(function(){
$('body').addClass('min-center');
$('.liststyle ul').css('overflow','scroll');
$('.customSubmit').live('click',function(){
var phone = $("#phone");
if(phone.val() == ''){
alert("请输入手机号");
}else if(!(/^1((3|4|5|8|7){1}\d{1}|70)\d{8}$/.test(phone.val()))){
alert("请输入正确的手机号");
}else{
$('#doc-modal-2').modal('open');
return false;
}
return false;
})
})
</script>
<script type="text/javascript">
$(function(){
var remove = $("#subtract");
var add = $("#plus");
var num = $(".num-btn").find("input");
remove.bind('click',nums);
add.bind('click',nums);
function nums(){
var count = num.val();
if($(this).attr('id') == "subtract"){
if(count <= 1){
return false;
}else{
count--;
}
}else{
if(count >= 99){
return false;
}else{
count++;
}
}
num.val(count);
}
num.keyup(function(){
var oNumber = num.val();
if (num.val() != oNumber) {
num.val(oNumber);
}
if ( isNaN(oNumber) || oNumber <= 0) {
num.val(1);
}
if (oNumber >= 1000) {
num.val(1000);
}
})
// 收藏
$("#food-collect").click(function(){
var or = $(this).hasClass('house');
$(this).toggleClass('house');
});
});
</script>