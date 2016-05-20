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
  <?php if(empty($chef)):?>
    <div class="am-padding-sm">您没有订单！</div>

  <?php else:?>

  <div class="am-padding-sm">您有订单啦！</div>


  <?php foreach($chef as $val):?>
      <div class="manage am-shadow am-padding-sm am-margin-bottom-sm">
    <div class="manageOrder">
      <p><?=$val['name'];?></p> 
      <p><?=$val['goodsphone'];?> &nbsp;&nbsp;&nbsp;&nbsp;<a id="tell" href="tel:<?=$val['goodsphone'];?>"><img src="skin/img/phone.png" alt=""></a></p>
      <p>服务地址: <?=$val['address'];?></p>
      <p>服务时间: <?=str_replace('T',' ',$val['appointmenttime']);?></p>
      <p class="am-cf manageBor">
        <span class="am-fl">订单号: <?=$val['billno'];?></span>
        <span class="am-fr">工号: <?=$gh;?></span>
      </p>
      <p class="manageBtn am-text-right">
        <a href="<?php echo site_url('chef/chefOrder?id=').$val['poorderid'];?>" class="btn am-btn am-btn-warning" title="">查看详情</a>
        <?php  switch ($val['state']) {
          case '0':
            echo '<a href="'.site_url("chef/chefConfirm?poorderid=").$val["poorderid"].'&state=6'.'" id="submitBtn" class="btn am-btn am-btn-danger" title="" disabled>确认</a>';
            break;
          case '1':
            echo '<a href="'.site_url("chef/chefConfirm?poorderid=").$val["poorderid"].'&state=3'.'" class="btn am-btn am-btn-danger" title="">开始服务</a>';
            break;
          case '3':
            echo '<a href="'.site_url("chef/chefConfirm?poorderid=").$val["poorderid"].'&state=8'.'" class="btn am-btn am-btn-danger" title="">完成服务</a>';
            break;
          case '6':
            echo '<a href="javascript:;" id="submitBtn" class="btn am-btn am-btn-danger" title="" disabled>开始服务</a>';
            break;
        } ?>
        
      </p>
     
      <div class="manageOrderStatus"> <?php switch ($val['state']) {
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
    <?php endforeach;?>
  <?php endif;?>

<script type="text/javascript">
  document.getElementById('tell').onclick = function(){
    document.getElementById('submitBtn').removeAttribute('disabled')
  }


  function myrefresh() 
  { 
         window.location.reload(); 
  } 
setTimeout('myrefresh()',1000*60*2);
</script>
</body>
</html>