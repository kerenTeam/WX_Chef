
<style>
.am-slider-c3{
  margin-top: 11.5%;
  background:none;
  height:100%;
  box-shadow:none!important;
 }
 .am-direction-nav a{
  display:block!important;
 }
  .am-slider-c3 .am-slider-desc {
       bottom: 10px;
    right: 90px;
    height: 30px;
    left: 15%;
    padding-top: 2px;
    padding-right: 5px;
    display: block;
    padding-left: 10px;
}

.am-slider .am-slides img {
    width: 70%;
    display: block;
    margin: auto; 
}
.am-slider-c3 img {
   height:auto;
}
</style>
<body>
  <header data-am-widget="header" class="am-header am-header-default topform">
    <div class="am-header-left am-header-nav">
      <a href="javascript:" onclick="javascript:history.go(-1);">
        <i class="am-header-icon am-icon-chevron-left"></i>
      </a>
    </div>
    <h1 class="am-header-title">
    宴会定制
    </h1>
    
  </header>

  <div data-am-widget="slider" class="am-slider am-slider-c3" data-am-slider='{"controlNav":false}' >
  <ul class="am-slides">
      <li>
        <a href="<?php echo site_url('home/partyInfo')?>">
         <img src="skin/img/party1.png" alt="">
          <div class="am-slider-desc">日常套餐 899系列</div>
        </a> 
      </li>
       <li>
        <a href="<?php echo site_url('home/partyInfo')?>">
         <img src="skin/img/party1.png" alt="">
          <div class="am-slider-desc">婚宴套餐 599系列</div>
        </a> 
      </li>
       <li>
       <a href="<?php echo site_url('home/partyInfo')?>">
         <img src="skin/img/party1.png" alt="">
          <div class="am-slider-desc">团拜宴套餐 1299系列</div>
        </a> 
      </li>
       <li>
       <a href="<?php echo site_url('home/partyInfo')?>">
         <img src="skin/img/party1.png" alt="">
          <div class="am-slider-desc">婚宴套餐 989系列</div>
        </a> 
      </li>
  </ul>
</div> 
 <script src="skin/js/jquery.min.js"></script>
 <script src="skin/js/amazeui.min.js"></script>
 <script>
    $(document).ready(function()
        { 
          var width = $(window).width();
          var height = $(window).height();
         $(".am-slides li img").attr("height",height+'px');

        });
 </script> 

</body>
</html>