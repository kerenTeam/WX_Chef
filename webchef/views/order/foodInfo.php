
    <style type="text/css">
      .am-slider-default .am-control-thumbs li{
        width: 16.66%;
      }
      .am-slider .am-slides img{
        height: 400px;
      }
      .am-slider-default .am-control-thumbs img{
        height: 70px;
      }
    </style>

      <div class="center">
        <!-- info -->
        <div class="food-info">
          <div class="info-tit">
              <h1><?=$foods['foodname'];?></h1>
              <p>特点:<span><?=$foods['foodtrait'];?></span></p>
          </div>
          <ul class="am-g foodBanner">
              <li class="am-u-sm-8">
                  <div
                    class="am-slider am-slider-default info-pics"
                    data-am-flexslider="{controlNav: 'thumbnails', directionNav: false, slideshow: false, animationSpeed: 400}">
                    <ul class="am-slides">
                    <?php foreach($foodspic as $val):?>
                      <li data-thumb="<?=IP.$val['imgaddress'];?>">
                        <img src="<?=IP.$val['imgaddress'];?>" /></li>
                    <?php endforeach;?>
                    </ul>
                  <div class="viewMenu" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 1, width: 400, height: 600}">
                    <i class="am-icon-leanpub"></i> 查看菜单
                  </div>
                    <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
                      <div class="am-modal-dialog">
                        <div class="am-modal-hd">
                          <img src="skin/img/food_info_03.png" style="width: 100%;height: 200px;">
                          <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
                        </div>
                        <div class="am-modal-bd infoMadel" style="max-height: 380px;">
                          <h2><?=$foods['ingredients'];?></h2>
                          <p><?=$foods['accessories'];?></p>
                         
                        </div>
                      </div>
                    </div>
                  </div>
              </li>
              <li class="am-u-sm-4">
                  <div class="info-handle clear">
                        <h1>价格 <span>￥<span id="foodPrice"><?php if($foods['discountproportion']){echo $foods['foodprice']*$foods['discountproportion'];}else{echo $foods['foodprice'];}?></span></span></h1>
                        <ul class="am-avg-sm-3 food-assess">
                            <li>已售 <span>100</span></li>
                            <li><span><?php $zong=$foods['foodstar'] + $fen['cookscore'] + $fen['consumptionscore']; $pin = $zong/3*2;echo round($pin);?></span> 分</li>
                            <li><span><?php echo count($evaluate);?></span> 人评价</li>
                        </ul>
                        <div class="food-num clear">
                            <div>数量</div>
                            <div class="num-btn">
                                <span id="subtract"><img src="skin/img/jian.png"></span>
                                <input id="foodNum" value="1"></input>
                                <span id="plus"><img src="skin/img/jia.jpg"></span>
                            </div>
                        </div>
                        <ul class="buy-food">
                            <li>
                                <!-- <button href="<?=site_url('shopcar/car');?>" class="am-btn am-btn-danger am-radius buy-sbm">立即购买</button> -->
                              <?php if($foods['foodkind'] ==1):?>
                                <input type="hidden" value="0" />
                              <?php else:?>
                                <input type="hidden" value="2" />
                              <?php endif;?>
                                <?php if(isset($foods['number'])):?>
                                <a href="javascript:;" class="am-btn am-btn-danger am-radius buy-sbm">已加入购物车</a>
                               <?php else:?>
                                <a id='<?=$foods['foodid'];?>' href="javascript:;" class="joinCar am-btn am-btn-danger am-radius buy-sbm">加入购物车</a>
                               <?php endif;?>
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
              <p>主料：<span><?=$foods['ingredients'];?></span></p>
              <p>辅料：<span><?=$foods['accessories'];?><span></p>
          </div>
          <div class="food-image-text">
              <h1>简介：<span>快炒家常菜。</span></h1>
              <p>
               <?=$foods['blurb'];?>
            </p>
        <!--     <img src="skin/img/food_info_03.png">
            <img src="skin/img/food_info_03.png"> -->
          </div>
          <!-- 消费评论 -->
          <div class="food-appraise">
              <div class="food-appraise-tit clear">
                  <h2>消费评价</h2>
                  <span>我买过单，<a href="javascript:;">我要评价</a></span>
                  
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
          <div class="food-btm">
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
          </div>
        </div>
      </div>
  </div>
<script src="skin/js/jquery.min.js"></script>
<script type="text/javascript">
// 加入购物车
$('.joinCar').bind('click',function(){
  var id = $(this).attr('id');
  var numbers = $('#foodNum').val();
  var code = $(this).prev().val();
  $.ajax({
    type:'post',
    url:'<?=site_url("order/partyadd");?>',
    data:'id='+id+'&numbers='+numbers+'&code='+code,
    success:function(data){
       location.reload();
    }
  });
})





    $(function(){
$('body').addClass('min-center');
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


