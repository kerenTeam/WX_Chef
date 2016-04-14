

<body>
  <!-- header -->
  <header data-am-widget="header" am-header-fixed class="am-header am-header-default topform">
    <div class="am-header-left am-header-nav">
      <a href="javascript:" onclick="javascript:history.go(-1);">
        <i class="am-header-icon am-icon-chevron-left"></i>
      </a>
    </div>
    <h1 class="am-header-title">
    支付订单
    </h1>
  </header>

  <form action="<?php echo site_url('orderWXPay/payOrder')?>"  method="post"> 
    <div class="am-list-news-bd">
      <ul class="am-list odl">
<?php foreach ($booking as $k => $value): ?>
          <li class="am-g am-list-item-dated">
          <a href="javascript:" class="am-list-item-hd "><?php echo $value['foodname'];?> <span class="am-fr gray">X <?php echo $postBooking[$value['foodid']];?></span></a>
          <span class="am-list-date ath"><i class="am-icon-cny cc"></i><?php echo $value['foodprice'] * $postBooking[$value['foodid']]; $pricetotal[] = $value['foodprice'] * $postBooking[$value['foodid']]; ?> </span>
          <!-- 发送到order数据 -->
           <!--------------------这里是我的foodID ------------------------>
          <input type="hidden" name="foodid[]" value="<?php echo $value['foodid'];?> ">
           <!--------------------这里是我的numbers------------------------>
          <input type="hidden" name="numbers[]" value="<?php echo $postBooking[$value['foodid']];?>">
          <!-- 发送到order数据 END-->
        </li>
<?php endforeach ?>

        <li class="am-g am-list-item-dated">
          <a href="javascript:" class="am-list-item-hd red">订单总计:</a>
          <span class="am-list-date ath"><i class="am-icon-cny red" id='money'><?php echo array_sum($pricetotal);?></i></span>
        </li>  

      </ul>
     </div>
         <hr data-am-widget="divider" style="" class="am-divider am-divider-dashed" />
 
    <div class="am-shadow am-margin-vertical-sm fpa2">
       <?php if(empty($usercoupon)):?>
            
            <a href="javascript:;" disabled class="am-cf adc">饭票已经用光了哦<span class="am-fr am-icon-xs red">没有饭票 </span></a>
      <?php else:?>
           <a class="am-cf adc fclick">饭票可用<?=count($usercoupon);?>张<span class="am-fr am-icon-xs red">选择 <span class="am-icon-angle-down"></span></span></a>
       <div class="am-list-news-bd" id="fpc" style="display: none">
      <ul class="am-list odl"> 
      <?php foreach($usercoupon as $val):?>
          <li class="am-g am-list-item-dated">
           <a href="javascript:" class="am-list-item-hd "><img src="<?php echo IP.$val['img'];?>" alt="<?=$val['coupponname']?>"><?=$val['coupponname']?></a> 
           <input type="hidden" value="<?=$val['usercouponid']?>" id='couponid' />
           <span class="am-list-date ath"> <i class="am-icon-cny"><?=$val['coupponmoney'];?></i></span>
          </li>
        <?php endforeach;?>
      </ul>
     </div>
   <?php endif;?>
  <!-- 积分 -->
   <?php if(empty($jifen)):?>
      <a href="javascript:;" class="am-cf adc">积分<span class="am-fr am-icon-xs red">你还没有积分!</span></a>
    <?php else:?>
       <a href="javascript:;" class="am-cf adc">积分<span class="am-fr am-icon-xs red">300积分已抵用 <span class="am-icon-cny" id='jifenmoney'>30</span> <input type="checkbox" id="jifen"></span></a>
    <?php endif;?>

      <a href="javascript:;" class="am-cf adc">应付金额<span class="am-fr am-icon-xs am-icon-cny red" id='pricetotal'></span></a>

    </div>
    
      <hr data-am-widget="divider" style="" class="am-divider am-divider-dashed" />

     <div class="am-shadow am-margin-vertical-sm">
      <p class="htit sad"><span class="am-icon-map-marker red"></span> 服务地址</p>
    
    
      <!-- 未添加地址这显示 -->
      <div class="am-list-news-bd">
         <?php if(empty($address)):?>
           <a href="<?php echo site_url('home/address2')?>" class="am-cf adc">添加服务地址 <span class="am-icon-angle-right am-fr  am-icon-sm"></span></a>
           <input type="hidden" name="UserPhone" value="123456789"/>

           <div class="am-g ammake">
              <div class="am-u-md-8 am-u-sm-centered">
                <form class="am-form afcheck" action="<?=site_url('home/addressAdd2');?>" method="post">
                </form>
              </div>
            </div>
         <?php else:?>
            <input type="hidden" name="UserPhone" value="<?=$_SESSION['phone'];?>"/>
   
                 <!-- 已添加过地址 -->
                 <ul class="am-list odl">
                      <li class="am-g am-list-item-dated lpt2">
                        <a href="<?php echo site_url('home/address2')?>" class="am-list-item-hd "><?=$address[0]['address'];?><br>
                        <?=$address[0]['name'];?><br>
                        <?=$address[0]['userphone'];?>
                       <input type="hidden" name="memberaddressid" value="<?php echo $address[0]['memberaddressid'];?>">
                        <span class="am-list-date"><i class="am-icon-angle-right am-icon-sm"></i></span></a>
                      </li>
                 </ul>  
          <?php endif;?>
        </div>
       
      </div>
      <div class="am-shadow am-margin-vertical-sm">
      <p class="htit sad am-cf">
      <span class="am-fl" style="line-height: 43px;">是否需要服务员</span> 
      <label class="am-checkbox am-success am-fr"><input type="checkbox" data-am-ucheck></label></p>
      </div>
      <button type="submit" class="am-u-sm-12 am-btn bgreen os" id="pay">去支付</button>
    </form>
    <!-- 支付方式弹框 -->
<!--     <div class="tkp" style="display: none">
    </div>
    <div class="am-shadow fpa payway" style="display: none">
      <p class="htit sad red"><span class="am-icon-usd"></span> 支付方式</p>
      <a href="<?php echo site_url('home/paySuccess')?>" class="am-cf adc">会员卡支付 <span class="am-icon-angle-right am-fr  am-icon-xs"></span></a>
      <a href="<?php echo site_url('home/paySuccess')?>" class="am-cf adc">Apple Pay <span class="am-icon-angle-right am-fr  am-icon-xs"></span></a>
      <a href="javascript:;" class="am-cf adc">微信支付<span class="am-icon-angle-right am-fr  am-icon-xs"></span></a>
      <a href="<?php echo site_url('home/paySuccess')?>" class="am-cf adc">支付宝支付<span class="am-icon-angle-right am-fr  am-icon-xs"></span></a>
      <a href="<?php echo site_url('home/paySuccess')?>" class="am-cf adc">线下支付<span class="am-icon-angle-right am-fr  am-icon-xs"></span></a>
    </div> -->
    
  </body>
 <script src="skin/js/jquery.min.js"></script>
<script src="skin/js/amazeui.min.js"></script>
 <script>
        var payable = '';
        //总金额
        var amount = $('#money').text();
        var jifenmoney = $('#jifenmoney').text();
        payable = amount - jifenmoney;
        $('#pricetotal').text(payable);

     
   
      $(function(){
         // 弹出支付选项弹框
         $('#pay').click(function() {
            
           

          $('body').css('overflow-y','hidden');
          $('.tkp,.payway').fadeIn(400);
        });
         //隐藏弹框
         $('.tkp').click(function() { 
          $('body').css('overflow-y','auto');
          $('.tkp,.payway').fadeOut(400); 
        });
         //点击选项后隐藏弹框并调用支付接口
         $('.payway a').click(function() {
           $('.tkp,.payway').fadeOut(400);
           
         });

        $('.fclick').click(function() {
          console.log('.fclick');
           $('#fpc').slideToggle(400);          
        });
        $('#fpc li').click(function() {
          $('#fpc').slideUp(400);
          $('.fclick').html('饭票<span class="am-fr am-icon-xs red">'+$(this).find('.am-list-item-hd').text()+'<input type="hidden" name="couponid" value="'+$(this).find('#couponid').val()+'" /><span class="am-icon-cny" id="youhui" >'+$(this).find('.am-icon-cny').html()+'</span></span>');

         if($('#jifen').prop("checked")){
           var discount = $('#youhui').text();
          payable = amount - discount - jifenmoney;
          $('#pricetotal').text(payable);
    
        }else {
          var discount = $('#youhui').text();
          payable = amount - discount;
          $('#pricetotal').text(payable);
       }
        });
     
      })
// function getorders(){
//             $.ajax({
//                type: "POST",
//                url: "<?=site_url('pricesearch/payOrder');?>",
//                data: $('#formorder').serialize(),
//                success: function(msg){
//                   console.log(msg);
//                }
//             });
//}
     

    </script>

</html>