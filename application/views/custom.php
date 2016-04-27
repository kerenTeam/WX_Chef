<link rel="stylesheet" type="text/css" href="skin/css/order.css">
<body class="customBody">
  <header data-am-widget="header" class="am-header am-header-default topform">
    <div class="am-header-left am-header-nav">
      <a href="<?php echo site_url('home/index');?>">
        <i class="am-header-icon am-icon-chevron-left"></i>
      </a>
    </div>
    <h1 class="am-header-title">
    客服
    </h1>
  </header>
  <div class="customBanner">
    <img src="skin/img/custom.png" alt="">
  </div>
  <form class="am-form am-form-horizontal customForm">
    <div class="am-form-group">
      <label class="am-u-sm-2 am-text-right">区域</label>
      <div class="am-u-sm-10 customAdd">
        <select name="province" class="am-radius"></select>
        <select name="city" class="am-radius"></select>
        <select name="area" class="am-radius"></select>
      </div>
    </div>
    <div class="am-form-group">
      <label class="am-u-sm-2 am-text-right">桌数</label>
      <div class="am-u-sm-10">
        <select class="am-radius">
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
        <input id="phone" class="am-radius" type="tel" placeholder="请输入你的联系电话">
        <p class="customP">输入电话，客服稍后会给您回电</p>
      </div>
      <div class="am-u-sm-1"></div>
    </div>
  <!-- footer -->
  <div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default nav-bot customFooter">
    <div class="customBtn">
      <button type="submit" class="btn am-btn am-btn-danger customSubmit">提 交</button>
    </div>
  </div>
  <!-- modal -->
    <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
    <div class="am-modal-dialog am-radius">
      <div class="am-modal-hd am-text-danger">提 示
        <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
      </div>
      <div class="am-modal-bd customBtn">
        <p class="customModalP">客服已收到您的查询信息，正在处理。请留意我们给您的去电(400-820-1790)</p>
        <a href="javascript:;" class="btn am-btn am-btn-danger am-radius">好</a>
      </div>
    </div>
  </div>
  </form>


<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/address.js"></script>
<script type="text/javascript">
    new PCAS("province","city","area","四川省","成都市");
    $('.customForm').bind('submit',function(){
      var phone = $("#phone");
        if(phone.val() == ''){
          alert("请输入手机号");
        }else if(!(/^1((3|4|5|8|7){1}\d{1}|70)\d{8}$/.test(phone.val()))){
          alert("请输入正确的手机号");
        }else{
          
          $('#doc-modal-1').modal('open')
          return false;
        }
      return false;
    })
</script>
</body>
</html>