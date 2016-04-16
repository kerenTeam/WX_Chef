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

  <form action="<?php echo site_url('orderWXPay/payOrder');?>" id="form" method="post"> 
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
        <a href="javascript:" class="am-list-item-hd "> 服务员人数 <span class="am-fr gray">X <?php echo $writes[0]; ?></span></a>
          <span class="am-list-date ath"><i class="am-icon-cny cc"></i> <?php echo $writes[0]*80; ?></span>
          <input type="hidden" name="Waiters" value="<?php echo $writes[0]; ?>">
        </li> 
        <?php if (empty($servmoneydata)): ?>
        <li class="am-g am-list-item-dated">
        <a href="javascript:" class="am-list-item-hd "> 菜品消费额满300元,不收取服务费 <span class="am-fr gray"></span></a>
        </li> 
        <?php else: ?>
        <li class="am-g am-list-item-dated">
        <a href="javascript:" class="am-list-item-hd "> 服务费 <span class="am-fr gray"></span></a>
          <span class="am-list-date ath"><i class="am-icon-cny cc"></i> <?php echo $servmoneydata; ?></span>
        </li> 
        <?php endif ?>
        

        <li class="am-g am-list-item-dated">
          <a href="javascript:" class="am-list-item-hd red">订单总计:</a>
          <span class="am-list-date ath"><i class="am-icon-cny red" id='money'><?php echo array_sum($pricetotal) + $writes[0]*80+$servmoneydata;?></i></span>
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
        if(!empty($userphone)){
          foreach ($userphone as $key => $value) {
              if($money > $value['usethreshold']){
                  $usercoupon[$key] = $value;
              }
          } 
        }
  }
  ?>
    <div class="am-shadow am-margin-vertical-sm fpa2">
       <?php if(empty($usercoupon)):?>
            
            <a href="javascript:;" disabled class="am-cf adc">饭票<span class="am-fr am-icon-xs red">无可用饭票 </span></a>
      <?php else:?>

           <a class="am-cf adc fclick">饭票可用<?=count($usercoupon);?>张<span class="am-fr am-icon-xs red">选择 <span class="am-icon-angle-down"></span></span></a>
       <div class="am-list-news-bd" id="fpc" style="display: none">
      <ul class="am-list odl"> 
      <?php foreach($usercoupon as $val):?>
          <li class="am-g am-list-item-dated">
           <a href="javascript:" class="am-list-item-hd "><img src="<?php echo IP.$val['img'];?>" alt="<?=$val['coupponname']?>" class="cardimg"><?=$val['coupponname']?></a> 
           <input type="hidden" name="usercouponid" value="<?=$val['usercouponid']?>" id='couponid' />
           <span class="am-list-date ath"> <i class="am-icon-cny"><?=$val['coupponmoney'];?></i></span>
          </li>
        <?php endforeach;?>
      </ul>
     </div>
   <?php endif;?>
  <!-- 积分 -->
   <?php if(empty($jifen)):?>
      <a href="javascript:;" class="am-cf adc">积分<span class="am-fr am-icon-xs red">你还没有积分!</span></a>
      <input type="checkbox" name='jifen' id="jifen" value="0" checked>
    <?php else:?>
       <a href="javascript:;" class="am-cf adc">积分<span class="am-fr am-icon-xs red"><span id='diyong'><?=$jifen;?></span>积分已抵用  <span class="am-icon-cny" id='jifenmoney'></span> <input type="checkbox" name='jifen' id="jifen" value="1"></span></a>
    <?php endif;?>

      <a href="javascript:;" class="am-cf adc">应付金额<span class="am-fr am-icon-xs am-icon-cny red" id='pricetotal'></span></a>
      <input type="hidden" name='yfje' value="0" id='yfje'>

    </div>
    
      <hr data-am-widget="divider" style="" class="am-divider am-divider-dashed" />

     <div class="am-shadow am-margin-vertical-sm">
      <p class="htit sad"><span class="am-icon-map-marker red"></span> 服务地址</p>
    
    
      <!-- 未添加地址这显示 -->
      <div class="am-list-news-bd">
          <?php if(empty($address)):?>
      
          <!-- <div class="am-g ammake am-padding-sm">
          <input type="tel" class="am-form-field am-radius am-margin-bottom-sm ofp" placeholder="请输入联系 电话" name='phone'>
          <input type="text" class="am-form-field am-radius am-margin-bottom-sm ofn" placeholder="请输入联系人姓名"  name='name'>
          <input type="text" class="am-form-field am-radius am-margin-bottom-sm ofa" placeholder="请输入用餐 地址"  name='address'>
          </div>  -->
           <a href="<?php echo site_url('home/address2')?>" class="am-cf adc">添加服务地址 <span class="am-icon-angle-right am-fr  am-icon-sm"></span></a>
         <?php else:?>
            <!--------------    UserPhone   -------------->
            <input type="hidden" name="UserPhone" value="<?=$_SESSION['phone'];?>"/>
   
                 <!-- 已添加过地址 -->
                 <ul class="am-list odl">
                      <li class="am-g am-list-item-dated lpt2 mbtop">
                        <a href="<?php echo site_url('home/address2')?>" class="am-list-item-hd "><?=$address[0]['address'];?><br>
                        <?=$address[0]['name'];?><br>
                        <?=$address[0]['userphone'];?>
            <!--------------    address   -------------->
                       <input type="hidden" name="memberaddressid" value="<?php echo $address[0]['memberaddressid'];?>">
                        <span class="am-list-date"><i class="am-icon-angle-right am-icon-sm"></i></span></a>
                      </li>
                 </ul>  
          <?php endif;?>
        </div> 
        </div>
      <button type="submit" class="am-u-sm-12 am-btn bgreen os" id="pay">去支付</button>
    </form>
 
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
        $('#jifenmoney').text(jine.toFixed(2));
        var amount = $('#money').text();

        payable = amount;
        $('#pricetotal').text(payable); 
        $('#yfje').val(payable);
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
            $('#yfje').val(payable);

        });

         $('#jifen').click(function(){
           if($('#jifen').prop("checked")){
           // alert(jifenmoney);
            jifenmoney = $('#jifenmoney').text();
            payable = amount - discount - jifenmoney;
            $('#pricetotal').text(payable);
            $('#yfje').val(payable);
    
        }else{
           payable = amount - discount;
            $('#pricetotal').text(payable);
            $('#yfje').val(payable);
        }
        })
        // $('#form').submit(function() { 
        
        //   var phone = $('input[type="tel"]').val();
        //     if( $('.ofp').val()==''||$('.ofa').val()==''||$('.ofn').val()==''){
        //       alert('还有信息未输入');
        //       $(this).focus();
        //       return false;
        //     }
        //   if(!(/^1((3|4|5|8|7){1}\d{1}|70)\d{8}$/.test(phone))){
        //     alert('请输入正确的电话号码');
        //     $('.ofp').focus();
        //       return false;
        //   }
        // });
     
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