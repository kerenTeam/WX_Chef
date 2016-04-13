<?php 
ini_set('date.timezone','Asia/Shanghai');
//打印输出数组信息
function printf_info($data)
{
    foreach($data as $key=>$value){
        echo "<font color='#00ff55;'>$key</font> : $value <br/>";
    }
}

//①、获取用户openid
$tools = new JsApiPay();
$openId = $tools->GetOpenid();
//②、统一下单
$input = new WxPayUnifiedOrder();
$input->SetBody("test");
$input->SetAttach("test");
$input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis"));
$input->SetTotal_fee("1");
$input->SetTime_start(date("YmdHis"));
$input->SetTime_expire(date("YmdHis", time() + 600));
$input->SetGoods_tag("test");
$input->SetNotify_url("http://paysdk.weixin.qq.com/example/notify.php");
$input->SetTrade_type("JSAPI");
$input->SetOpenid($openId);
$order = WxPayApi::unifiedOrder($input);
// echo '<font color="#f00"><b>统一下单支付单信息</b></font><br/>';
// printf_info($order);
$jsApiParameters = $tools->GetJsApiParameters($order);

//获取共享收货地址js函数参数
$editAddress = $tools->GetEditAddressParameters();

//③、在支持成功回调通知中处理成功之后的事宜，见 notify.php
/**
 * 注意：
 * 1、当你的回调地址不可访问的时候，回调通知会失败，可以通过查询订单来确认支付是否成功
 * 2、jsapi支付时需要填入用户openid，WxPay.JsApiPay.php中有获取openid流程 （文档可以参考微信公众平台“网页授权接口”，
 * 参考http://mp.weixin.qq.com/wiki/17/c0f37d5704f0b64713d5d2c37b468d75.html）
 */
?>
    <script type="text/javascript">
  //调用微信JS api 支付
  function jsApiCall()
  {
    WeixinJSBridge.invoke(
      'getBrandWCPayRequest',
      <?php echo $jsApiParameters; ?>,
          function(res)
          {
            WeixinJSBridge.log(res.err_msg);
            if (res.err_msg == "get_brand_wcpay_request:ok")
            { makeform.submit();}
            else if (res.err_msg == "get_brand_wcpay_request:cancel")
            { alert("已取消微信支付,你可选择其他支付或线下付款");}
          }
    );
  }

  function callpay()
  {
    if (typeof WeixinJSBridge == "undefined"){
        if( document.addEventListener ){
            document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
        }else if (document.attachEvent){
            document.attachEvent('WeixinJSBridgeReady', jsApiCall); 
            document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
        }
    }else{
        jsApiCall();
    }
  }
  </script>
  <script type="text/javascript">
  //获取共享地址
  function editAddress()
  {
    WeixinJSBridge.invoke(
      'editAddress',
      <?php echo $editAddress; ?>,
      function(res){
        var value1 = res.proviceFirstStageName;
        var value2 = res.addressCitySecondStageName;
        var value3 = res.addressCountiesThirdStageName;
        var value4 = res.addressDetailInfo;
        var tel = res.telNumber;
        
        alert(value1 + value2 + value3 + value4 + ":" + tel);
      }
    );
  }
  
  window.onload = function(){
    if (typeof WeixinJSBridge == "undefined"){
        if( document.addEventListener ){
            document.addEventListener('WeixinJSBridgeReady', editAddress, false);
        }else if (document.attachEvent){
            document.attachEvent('WeixinJSBridgeReady', editAddress); 
            document.attachEvent('onWeixinJSBridgeReady', editAddress);
        }
    }else{
      editAddress();
    }
  };
  
  </script>

 <!------------------  微信支付 END  ------------------>

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
  <form action="<?php echo site_url('home/payOrder')?>" method="post"> 

    <div class="am-list-news-bd">
      <ul class="am-list odl">
<?php foreach ($booking as $k => $value): ?>
          <li class="am-g am-list-item-dated">
          <a href="javascript:" class="am-list-item-hd "><?php echo $value['foodname'];?> <span class="am-fr gray">X <?php echo $postBooking[$value['foodid']];?></span></a>
          <span class="am-list-date ath"><i class="am-icon-cny cc"></i><?php echo $value['foodprice'] * $postBooking[$value['foodid']]; $pricetotal[] = $value['foodprice'] * $postBooking[$value['foodid']];?> </span>
          <!-- 发送到order数据 -->
           <!--------------------这里是我的foodID------------------------>
          <input type="hidden" name="foodid[]" value="<?php echo $value['foodid'];?> ">
           <!--------------------这里是我的numbers------------------------>
          <input type="hidden" name="numbers[]" value="<?php echo $postBooking[$value['foodid']];?>">
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
 
    <div class="am-shadow am-margin-vertical-sm fpa2">
      <?php $_SESSION['openid'] = 18081322659;

            if (!empty($_SESSION['phone']))
            { $UserCoupon = file_get_contents(POSTAPI."API_UserCoupon?UserPhone=".$_SESSION['openid']);
            }else if(!empty($_SESSION['openid']))
            {$UserCoupon = file_get_contents(POSTAPI."API_UserCoupon?UserPhone=".$_SESSION['phone']);  } if (!empty($UserCoupon)) 
            { $UserCoupondata = json_decode(json_decode($UserCoupon));  }

            if ($UserCoupondata == 0): ?>
            <a href="javascript:;" disabled class="am-cf adc">饭票已经用光了哦<span class="am-fr am-icon-xs red">无可用饭票 </span></a>
      <?php else: ?>
             <?php //var_dump($UserCoupondata); ?>
               <a class="am-cf adc fclick">饭票可用3张<span class="am-fr am-icon-xs red">选择 <span class="am-icon-angle-down"></span></span></a>
       <div class="am-list-news-bd" id="fpc" style="display: none">
      <ul class="am-list odl"> 
          <li class="am-g am-list-item-dated">
           <a href="javascript:" class="am-list-item-hd "><img src="skin/img/fp.png" alt="饭票"> 主题套餐</a> 
           <span class="am-list-date ath"> <i class="am-icon-cny">20</i></span>
          </li> 
          <li class="am-g am-list-item-dated">
           <a href="javascript:" class="am-list-item-hd "><img src="skin/img/fp.png" alt="饭票"> 主题套餐</a> 
           <span class="am-list-date ath"> <i class="am-icon-cny">50</i></span>
          </li> 
          <li class="am-g am-list-item-dated">
           <a href="javascript:" class="am-list-item-hd "><img src="skin/img/fp.png" alt="饭票"> 主题套餐</a> 
           <span class="am-list-date ath"> <i class="am-icon-cny">100</i></span>
          </li> 
      </ul>
     </div>
              <!--------------------这里是我的优惠劵ID------------------------>
             <input type="hidden" name="UserCouponId" value="<?php echo $UserCoupondata[0]['couponid'];?>">
            

      <?php endif ?>
              <!--------------------这里是我的个人ID------------------------>
      <input type="hidden" name="UserPhone" value="<?php  if (!empty($_SESSION['phone'])) { echo $_SESSION['phone']; } else { echo $_SESSION['openid']; } ?>">
      
      <?php $integral = json_decode(file_get_contents(POSTAPI."API_User?dis=jf&UserPhone=".$_SESSION['phone']));?>
      <a href="javascript:;" class="am-cf adc">积分<span class="am-fr am-icon-xs red">200积分已抵用 <span class="am-icon-cny">30</span></span></a>
      <a href="javascript:;" class="am-cf adc">应付金额<span class="am-fr am-icon-xs am-icon-cny red">10</span></a>

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
    

      <!-- 未添加地址这显示 -->
      <div class="am-list-news-bd">
       
           <!-- unset($_COOKIE['phone']);  -->
          <?php  if (empty($_COOKIE['phone']) && empty($_COOKIE['openid'])): ?>  
           <a href="<?php echo site_url('home/address2')?>" class="am-cf adc">添加服务地址 <span class="am-icon-angle-right am-fr  am-icon-sm"></span></a>
          <?php else: ?> 
                 <!-- 已添加过地址 -->
                 <ul class="am-list odl">
                 <?php 
                      if (!empty($_COOKIE['phone']))
                      { $foods = file_get_contents(POSTAPI."API_MenberAddress?dis=default&value=".$_COOKIE['phone']);
                      }else if(!empty($_COOKIE['openid']))
                      {$foods = file_get_contents(POSTAPI."API_MenberAddress?dis=default&value=".$_COOKIE['openid']);} 
                      if (!empty($foods)) { $food = json_decode(json_decode($foods));  }

                      if (!empty($food)): ?>
                      <li class="am-g am-list-item-dated lpt2">
                        <a href="<?php echo site_url('home/address2')?>" class="am-list-item-hd "> <?php echo $food[0]->address; ?><br>
                        <?php echo $food[0]->name; ?><br>
                        <?php echo $food[0]->userphone; ?>
                        <!--------------------这里是服务地址ID------------------------>
                        <input type="hidden" name="memberaddressid" value="<?php echo $food[0]->memberaddressid;?>">
                        <span class="am-list-date"><i class="am-icon-angle-right am-icon-sm"></i></span></a>
                      </li>
                 <?php endif ?>
                 </ul>  
          <?php endif ?>

        </div>
       
      </div>
      
      <!-- <a href="<?php echo site_url('home/payOrder')?>" class="am-u-sm-12 am-btn bgreen os">下一步</button> -->
      <button type="button" class="am-u-sm-12 am-btn bgreen os" id="pay">支付</button>
    </form>
    <!-- 支付方式弹框 -->
    <div class="tkp" style="display: none">
    </div>
    <div class="am-shadow fpa payway" style="display: none">
      <p class="htit sad red"><span class="am-icon-usd"></span> 支付方式</p>
      <a href="<?php echo site_url('home/paySuccess')?>" class="am-cf adc">会员卡支付 <span class="am-icon-angle-right am-fr  am-icon-xs"></span></a>
      <a href="<?php echo site_url('home/paySuccess')?>" class="am-cf adc">Apple Pay <span class="am-icon-angle-right am-fr  am-icon-xs"></span></a>
      <a  onclick="callpay()" href="javascript:;" class="am-cf adc">微信支付<span class="am-icon-angle-right am-fr  am-icon-xs"></span></a>
      <a href="<?php echo site_url('home/paySuccess')?>" class="am-cf adc">支付宝支付<span class="am-icon-angle-right am-fr  am-icon-xs"></span></a>
      <a href="<?php echo site_url('home/paySuccess')?>" class="am-cf adc">线下支付<span class="am-icon-angle-right am-fr  am-icon-xs"></span></a>
    </div>
    
  </body>
 <script src="skin/js/jquery.min.js"></script>
<script src="skin/js/amazeui.min.js"></script>
 <script>
     
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
          $('.fclick').html('饭票<span class="am-fr am-icon-xs red">'+$(this).find('.am-list-item-hd').text()+'<span class="am-icon-cny">'+$(this).find('.am-icon-cny').html()+'</span></span>');
        });
     
      })

    </script>

</html>