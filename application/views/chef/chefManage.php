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
  <div class="am-padding-sm">您有订单啦！</div>
  <div class="manage am-shadow am-padding-sm">
  
    <div class="manageOrder">
      <p>张先生</p>
      <p>18020504012 &nbsp;&nbsp;&nbsp;&nbsp;<a id="tell" href="tel:18020504012"><img src="skin/img/phone.png" alt=""></a></p>
      <p>服务地址: 成都市金牛区花牌坊成营饭店</p>
      <p>服务时间: 2016/4/25 18:00</p>
      <p class="am-cf manageBor">
        <span class="am-fl">订单号: 1021245345</span>
        <span class="am-fr">工号: DECdsfadfadfasd25</span>
      </p>
      <p class="manageBtn am-text-right">
        <a href="<?php echo site_url('chef/chefOrder');?>" class="btn am-btn am-btn-warning" title="">查看详情</a>
        <a href="javascript:;" id="submitBtn" class="btn am-btn am-btn-danger" title="" disabled>确认</a>
      </p>
      <div class="manageOrderStatus">待接单</div>
    </div>
  </div>



<script type="text/javascript">
  document.getElementById('tell').onclick = function(){
    document.getElementById('submitBtn').removeAttribute('disabled')
  }
</script>
</body>
</html>