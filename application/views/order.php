<body>
  <!-- header -->
  <header data-am-widget="header" class="am-header am-header-default topform">
    <div class="am-header-left am-header-nav">
      <a href="javascript:" onclick="javascript:history.go(-1);">
        <i class="am-header-icon am-icon-chevron-left"></i>
      </a>
    </div>
    <h1 class="am-header-title">
    支付订单
    </h1>
  </header>
  <form action="" method="">
    <div class="am-list-news-bd">
      <ul class="am-list odl">
 
<?php foreach ($booking as $k => $value): ?>
          <li class="am-g am-list-item-dated">
          <a href="javascript:" class="am-list-item-hd "><?php echo $value->foodname;?> <span class="am-fr gray">X <?php echo $postBooking[$value->foodid];?></span></a>
          <span class="am-list-date ath"><i class="am-icon-cny cc"></i><?php echo $value->foodprice * $postBooking[$value->foodid]; $pricetotal[] = $value->foodprice * $postBooking[$value->foodid];?> </span>
          <!-- 发送到order数据 -->
          <input type="hidden" name="foodname" value="<?php echo $value->foodname;?> ">
          <input type="hidden" name="foodid" value="<?php echo $postBooking[$value->foodid];?>">
          <input type="hidden" name="foodprice" value="<?php echo $value->foodprice * $postBooking[$value->foodid]; $pricetotal[] = $value->foodprice * $postBooking[$value->foodid];?>">
          <input type="hidden" name="pricetotal" value="<?php echo array_sum($pricetotal);?>">
          <!-- 发送到order数据 END-->
        </li>
<?php endforeach ?>
        <li class="am-g am-list-item-dated">
          <a href="javascript:" class="am-list-item-hd red">订单总计</a>
          <span class="am-list-date ath"><i class="am-icon-cny red"><?php echo array_sum($pricetotal);?></i></span>
        </li>  
      </ul>
     </div>
         <hr data-am-widget="divider" style="" class="am-divider am-divider-dashed" />
   <!-- <div class="am-shadow am-margin-vertical-sm">
      <p class="htit"><span class="am-icon-usd red"> </span> 支付方式</p>
      <div class="am-g pay am-cf">

        <label class="am-checkbox am-success am-u-sm-6">
          <input type="checkbox" class="v" name="radio10" value="" data-am-ucheck> 会员卡
        </label>
        <label class="am-checkbox am-success am-u-sm-6 wxradio">
          <input type="checkbox" class="zk" name="radio10" value="" data-am-ucheck> 现金
        </label>
      </div>
      <div class="am-g pay am-cf">
        <label class="am-checkbox am-success am-u-sm-6">
          <input type="checkbox" class="zk fp" name="radio10" value="" data-am-ucheck> 饭票
        </label>
        <label class="am-checkbox am-success am-u-sm-6 wxradio">
          <input type="checkbox" class="zk" name="radio10" value="" data-am-ucheck> 积分
        </label>
      </div>
      <div class="red am-text-sm am-margin-left-sm zkt">亲，选择饭票、现金、积分支付可享受折扣优惠哦！</div>
    </div>-->
    
    
    <div class="am-shadow am-margin-vertical-sm fpa2">
      
      <a href="javascript:;" class="am-cf adc">饭票<span class="am-fr am-icon-xs red">已抵用<span class="am-icon-cny">30</span></span></a>
      <a href="javascript:;" class="am-cf adc">积分<span class="am-fr am-icon-xs red">200积分已抵<span class="am-icon-cny">30</span></span></a>
      <a href="javascript:;" class="am-cf adc">金额<span class="am-fr am-icon-xs am-icon-cny red">10</span></a>

    </div>
    
     <div class="am-shadow am-margin-vertical-sm fpa" style="display: none;">
      <p class="htit"><span class="am-icon-gift red"> </span> 饭票(满300可用)<span class="am-fr">2张可选</span> </p>
      <!-- 有饭票时 -->
      <a href="<?php echo site_url('home/card')?>" class="am-cf adc"><img src="skin/img/qu.png" alt=""> 饭票 <span class="am-icon-cny red">30</span><span class="am-icon-angle-right am-fr  am-icon-sm"></span></a>
      <!-- 没有饭票时 -->
      <a href="javascript:;" class="am-cf adc"><img src="skin/img/qu.png" alt=""> 饭票 <span class="red">未使用</span> <span class="am-icon-angle-right am-fr  am-icon-sm"></span></a>
    </div>
     <hr data-am-widget="divider" style="" class="am-divider am-divider-dashed" />

     <div class="am-shadow am-margin-vertical-sm">
      <p class="htit sad"><span class="am-icon-map-marker red"></span> 服务地址</p>
      
<!--   <div class="am-g ammake">
    <div class="am-u-md-8 am-u-sm-centered">
      <form class="am-form afcheck" action="" method="">
        <fieldset class="am-form-set afiel">
          <input type="text" placeholder="请填写您的姓名" class="uname" required>
          <input type="text" placeholder="请输入详细送餐地址" class="uaddress" required>
          <input type="text" placeholder="请填写能够联系到您的电话号码" class="uphone">
          <input type="text" placeholder="备用联系电话（选填）">
        </fieldset>
        <button type="submit" class="am-btn am-btn-block bred" disabled>保存</button>
      </form>
    </div>
  </div> -->


      <!-- 未添加地址这显示 -->
      <a href="<?php echo site_url('home/address2')?>" class="am-cf adc">添加服务地址 <span class="am-icon-angle-right am-fr  am-icon-sm"></span></a>
      <!-- 已添加过地址 -->
      <div class="am-list-news-bd">
        <ul class="am-list odl">
          <li class="am-g am-list-item-dated lpt2">
          <?php 
               if (empty($_COOKIE['phone']) || empty($_COOKIE['openid'])) {
                      $foods = file_get_contents(APIURL."Get?dis=xq&foodid=".$id);
                      $food = json_decode(json_decode($foods));
               } else {
                 
               }
               
           ?>
            <a href="<?php echo site_url('home/address2')?>" class="am-list-item-hd "> 四川师范大学成龙校区东苑5栋<br>
              张燕<br>
              15780975467
              <span class="am-list-date"><i class="am-icon-angle-right am-icon-sm"></i></span></a>
            </li>
          </ul>
          
        </div>
       
      </div>
      
      <a href="<?php echo site_url('home/payOrder')?>" class="am-u-sm-12 am-btn bgreen os">下一步</button>
      
    </form>
  </body>
<!--<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/amazeui.min.js"></script>
<script>
  $(function(){  
    var cks = $('input:checkbox');
    if($('input:checkbox:checked').size() == 0){
      $('#payorder').attr({
        disabled: 'disable'
      });
    }
    else{
      $('#payorder').removeAttr('disabled');
    }
     cks.click(function() {
        console.log($('input:checkbox:checked').size());
      if($(this).prop("checked")){
         $('#payorder').removeAttr('disabled');
      }
      else if($('input:checkbox:checked').size() == 0){
      $('#payorder').attr({
        disabled: 'disable'
      });
    }   
       if($('.fp').prop("checked")){
        $('.fpa').css('display','block');
      }else{
        $('.fpa').css('display','none');
      }
 
    });

  })
</script>-->
</html>