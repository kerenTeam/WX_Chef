<body>
  <header data-am-widget="header" class="am-header am-header-default topform">
    <div class="am-header-left am-header-nav">
      <a href="javascript:" onclick="javascript:history.go(-1);">
        <i class="am-header-icon am-icon-chevron-left"></i>
      </a>
    </div>
    <h1 class="am-header-title">
    我的饭票
    </h1>
    
  </header>
  <!-- 无饭票 -->


<!--   <div class="cardno">
    <img  class="am-block" src="skin/img/nocard.jpg" alt="">
    暂无可用饭票
  </div> -->



  <!-- 可用饭票 --> 
  <div class="am-list-news-bd">
    <ul class="am-list acr">
      <li class="am-g pflist">
        <a href="javascript:" class="flexDisplay">

         <div class="am-u-sm-3 am-text-center">
           <img src="skin/img/cimg.png" class="pnimg" alt="">
           <div class="am-text-xs gray">主题套餐</div>
         </div>
         <div class="am-u-sm-6">
           <h5 class="black">主题套餐饭票</h5>
           <div class="am-text-xs gray">使用期限：2016.3.30-2016.4.30</div>
         </div>
         <div class="am-u-sm-3 fpr">
           <!-- <img src="skin/img/fprb.png"> -->
           <div class="am-text-right fpc">
             <span class="am-icon-cny"> 5</span>
             <div>无门槛使用</div>
           </div>
         </div>

        </a>
      </li>
    <?php if(!empty($cards)):?>
      <?php foreach($cards as $val):?>
      <li class="am-g">
        <a href="javascript:"><img src="skin/img/card1.png" alt=""></a>
      </li>

    <?php endforeach;?>
      
    <?php else:?>
      <li class="am-g">
       <div class="cardno">
          <img  class="am-block" src="skin/img/nocard.jpg" alt="">
          暂无可用饭票！
        </div>
      </li>
    <?php endif;?>
    </ul>
  </div>
  <!-- 失效饭票 -->
<!--   <h3 class="am-text-center">失效饭票</h3>
  <div class="am-list-news-bd">
    <ul class="am-list acr">
      <li class="am-g">
        <a href="javascript:"><img src="skin/img/cardo.png" alt=""></a>
      </li>
    </ul>
  </div> -->
</body>
</html>