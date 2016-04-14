

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
 <?php if(isset($_SESSION['phone'])){
        // 总金额
        $money = array_sum($pricetotal);
        // 优惠卷
        $fan = file_get_contents(POSTAPI."API_UserCoupon?UserPhone=".$_SESSION['phone']);
        $userphone = json_decode(json_decode($fan),true);
        foreach ($userphone as $key => $value) {
            if($money > $value['usethreshold']){
                $usercoupon[$key] = $value;
            }
        }
       
  }
  ?>
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
       <a href="javascript:;" class="am-cf adc">积分<span class="am-fr am-icon-xs red"><span id='diyong'><?=$jifen;?></span>积分已抵用 <span class="am-icon-cny" id='jifenmoney'></span> <input type="checkbox" name='jifen' id="jifen" value="1"></span></a>
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

           <div class="am-g ammake am-padding-sm">
        <input type="text" class="am-form-field am-radius am-margin-bottom-sm" placeholder="请输入用餐桌数" required>
        <input type="text" class="am-form-field am-radius am-margin-bottom-sm" placeholder="请输入用餐时间" required>
        <input type="text" class="am-form-field am-radius am-margin-bottom-sm" placeholder="请输入联系方式" required>
   <br>
            <button type='button' class="am-fr am-btn am-btn-success" onclick="getorders();">提交</button>
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
        var jine = '';
        var discount =0;
        //总金额
        var dijifen = $('#diyong').text();
        jine = dijifen/100;
        $('#jifenmoney').text(jine);
        var amount = $('#money').text();

        payable = amount;
        $('#pricetotal').text(payable);
        var jifenmoney = 0;
        // 积分
     
        
      
      $(function(){
         // 弹出支付选项弹框

        $('.fclick').click(function() {
          console.log('.fclick');
           $('#fpc').slideToggle(400);          
        });
        $('#fpc li').click(function() {
          $('#fpc').slideUp(400);
          $('.fclick').html('饭票<span class="am-fr am-icon-xs red">'+$(this).find('.am-list-item-hd').text()+'<input type="hidden" name="couponid" value="'+$(this).find('#couponid').val()+'" /><span class="am-icon-cny" id="youhui" >'+$(this).find('.am-icon-cny').html()+'</span></span>');
            discount = $('#youhui').text();
            payable = amount - discount - jifenmoney;
            $('#pricetotal').text(payable);

        });

         $('#jifen').click(function(){
           if($('#jifen').prop("checked")){
           // alert(jifenmoney);
            jifenmoney = $('#jifenmoney').text();
            payable = amount - discount - jifenmoney;
            $('#pricetotal').text(payable);
    
        }else{
           payable = amount - discount;
            $('#pricetotal').text(payable);
        }
       
        })
       
     
      })

      var name=$('#name').val();
      var address=$('#Address').val();
      var phone=$('#GoodsPhone').val();


function getorders(){
            $.ajax({
               type: "POST",
               url: "<?=site_url('pricesearch/payOrder');?>",
               data: $('#formorder').serialize(),
               success: function(msg){
                  console.log(msg);
               }
            });
}
     

    </script>

</html>