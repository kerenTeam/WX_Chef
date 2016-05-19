<body class="am-padding-bottom-lg">
  <header data-am-widget="header" class="am-header am-header-default topform">
    <div class="am-header-left am-header-nav">
      <a href="<?php echo site_url('chef/index')?>">
        <i class="am-header-icon am-icon-chevron-left"></i>
      </a>
    </div>
    <h1 class="am-header-title">
    订单详情
    </h1>
    
  </header>

  <!-- 详情 -->

  <div class="am-shadow am-padding am-cf am-text-sm">
     <img src="skin/img/addr.png" style="width:auto" class="am-fl" alt="">
     <div class="am-fr moa">
       服务人：<?=$poorder[0]['name']?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="tel:15708434450" class="black"><?=$poorder[0]['goodsphone'];?></a><br> 
       地  址：<?=$poorder[0]['address'];?>
     </div>
  </div>
<!--       <hr data-am-widget="divider" class="am-divider am-divider-dashed" />
 -->
    <div class="foodinfo am-padding">
 
      <p class="am-text-center red">菜品查看</p>

      <p class="am-text-center am-text-sm  menuname">凉菜</p>

        <p class="am-text-center am-text-sm">老成都拌土鸡元<span class="red"> x1</span></p>
        <p class="am-text-center am-text-sm">辣鲜手剥笋<span class="red"> x1</span></p>
        <p class="am-text-center am-text-sm">捞汁珊瑚蜇头<span class="red"> x1</span></p>
        <p class="am-text-center am-text-sm">田七伴桃仁<span class="red"> x1</span></p>
        <p class="am-text-center am-text-sm">客家卤汁九香鸭<span class="red"> x1</span></p>

      <p class="am-text-center am-text-sm  menuname">热菜</p>

        <p class="am-text-center am-text-sm">白灼基围虾<span class="red"> x1</span></p>
        <p class="am-text-center am-text-sm">百年全家福<span class="red"> x1</span></p>
        <p class="am-text-center am-text-sm">双椒蒸江团<span class="red"> x1</span></p>
        <p class="am-text-center am-text-sm">山地土豆烧甲鱼<span class="red"> x1</span></p>
        <p class="am-text-center am-text-sm">馋嘴呱呱叫<span class="red"> x1</span></p>
        <p class="am-text-center am-text-sm">石锅酱仔排<span class="red"> x1</span></p>
        <p class="am-text-center am-text-sm">香辣仔兔<span class="red"> x1</span></p>
        <p class="am-text-center am-text-sm">川味小炒肉<span class="red"> x1</span></p>
        <p class="am-text-center am-text-sm">豆豉鲮鱼油麦菜<span class="red"> x1</span></p>
        <p class="am-text-center am-text-sm">百合苡仁老南瓜<span class="red"> x1</span></p>
        <p class="am-text-center am-text-sm">腊味荷兰豆<span class="red"> x1</span></p>
        <p class="am-text-center am-text-sm">清炒时蔬<span class="red"> x1</span></p>

      <p class="am-text-center am-text-sm  menuname">汤</p>

        <p class="am-text-center am-text-sm">酸萝卜老鸭汤<span class="red"> x1</span></p>
        
        <p class="am-text-center am-text-sm  menuname">小吃</p>
        
        <p class="am-text-center am-text-sm">波记小丝煎饺<span class="red"> x1</span></p>
        <p class="am-text-center am-text-sm">冰糖银耳羹<span class="red"> x1</span></p>

      <p class="am-text-center am-text-sm  menuname">主食</p>
        <p class="am-text-center am-text-sm">米饭</p>
 
    </div>  
         <div class="am-padding-sm am-cf mob">
            <span class="am-fl red" style="line-height: 26px;">合计：<?=$poorder[0]['discountmoney']?>元</span>
            <a href='<?=site_url('chef/index');?>' class="am-fr am-btn am-btn-primary bgreen am-btn-xs checkOrder"> 确定</a>
         </div> 

</body>
</html>