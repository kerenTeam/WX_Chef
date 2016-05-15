<link rel="stylesheet" type="text/css" href="skin/css/order.css">
<body>
  <header data-am-widget="header" class="am-header am-header-default topform">
    <div class="am-header-left am-header-nav">
   <!--    <a href="<?php echo site_url('home/index');?>">
        <i class="am-header-icon am-icon-chevron-left"></i>
      </a> -->
    </div>
    <h1 class="am-header-title">
    厨师管理
    </h1>
  </header> 
  <?php if(empty($chef[0]['goodsphone'])):?>
    <div class="am-padding-sm">您没有订单！</div>

  <?php else:?>

  <div class="am-padding-sm">您有订单啦！</div>

  <div class="manage am-shadow am-padding-sm">
    <div class="manageOrder">
      <p><?=$chef[0]['name'];?></p> 
      <p><?=$chef[0]['goodsphone'];?> &nbsp;&nbsp;&nbsp;&nbsp;<a id="tell" href="tel:<?=$chef[0]['goodsphone'];?>"><img src="skin/img/phone.png" alt=""></a></p>
      <p>服务地址: <?=$chef[0]['address'];?></p>
      <p>服务时间: <?=$chef[0]['appointmenttime'];?></p>
      <p class="am-cf manageBor">
        <span class="am-fl">订单号: <?=$chef[0]['billno'];?></span>
        <span class="am-fr">工号: <?=$gh;?></span>
      </p>
      <p class="manageBtn am-text-right">
        <a href="<?php echo site_url('chef/chefOrder?id=').$chef[0]['poorderid'];?>" class="btn am-btn am-btn-warning" title="">查看详情</a>
        <?php  switch ($chef[0]['state']) {
          case '0':
            echo '<a href="'.site_url("chef/chefConfirm?poorderid=").$chef[0]["poorderid"].'&state=6'.'" id="submitBtn" class="btn am-btn am-btn-danger" title="" disabled>确认</a>';
            break;
          case '1':
            echo '<a href="'.site_url("chef/chefConfirm?poorderid=").$chef[0]["poorderid"].'&state=3'.'" class="btn am-btn am-btn-danger" title="">开始服务</a>';
            break;
          case '3':
            echo '<a href="'.site_url("chef/chefConfirm?poorderid=").$chef[0]["poorderid"].'&state=11'.'" class="btn am-btn am-btn-danger" title="">完成服务</a>';
            break;
          case '6':
            echo '<a href="javascript:;" id="submitBtn" class="btn am-btn am-btn-danger" title="" disabled>开始服务</a>';
            break;
        } ?>
        
      </p>
     
      <div class="manageOrderStatus"> <?php switch ($chef[0]['state']) {
        case '0':
          echo "待接单";
          break;
        case '6':
          echo "待出库";
          break;
        case '1':
          echo "已出库";
          break;
        case '3':
          echo "服务中";
          break;
      }?></div>
    </div>
  </div>

  <?php endif;?>

<script type="text/javascript">
  document.getElementById('tell').onclick = function(){
    document.getElementById('submitBtn').removeAttribute('disabled')
  }


  function myrefresh() 
  { 
         window.location.reload(); 
  } 
setTimeout('myrefresh()',5000);
</script>
</body>
</html>