<body>
  <!-- header -->
  <header data-am-widget="header" class="am-header am-header-default topform bheader">
  <div class="am-header-left am-header-nav">
    <a href="<?php echo site_url('home/index')?>">
      <i class="am-header-icon am-icon-chevron-left"></i>
    </a>
  </div>
  <h1 class="am-header-title">
  服务
  </h1>
  
</header>
<form action="" method=""><!--  enctype="multipart/form-data" --> 
  <div class="foodNum">
    <span class="reduce am-icon-minus-circle" onClick="handle(this, false)"></span>
    <input type="text" class="numTxt" name="numbers"  onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" value="0">
    <span class="add am-icon-plus-circle" onClick="handle(this, true)"></span>
  </div>
  <!-- footer -->
  <div data-am-widget="navbar" class="am-navbar am-shadow am-cf am-navbar-default amft" id="">
    <a href="<?php echo site_url('home/cart')?>">
      <div class="am-u-sm-8 a">
        <span class="green"><img src="skin/img/cart.png" alt=""><span id="fen" class="allmoney">总价</span>
        <i class="am-icon-cny red"></i><span id="allmoney" class="allmoney red">0</span>
      </div>
      <div class="am-u-sm-4 b">
        
        <button type="submit" class="am-btn am-btn-success">确认</button>
        
      </div>
    </a>
  </div>
</form>
<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/amazeui.min.js"></script>
<script src="skin/js/num.js"></script>
<script> 

 $(function(){
 
var inputs = $('.numTxt');
inputs.each(function() {
var numI=$(this).val();
if(numI == 0){
$(this).css('display','none');
$(this).parent('.foodNum').find('.reduce').css('display','none');
}
else{
$(this).css('display','inline-block');
$(this).parent('.foodNum').find('.reduce').css('display','inline-block');
}
});

})

</script>
</body>
</html>