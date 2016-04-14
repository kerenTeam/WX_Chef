<body>
  <header data-am-widget="header" class="am-header am-header-default topform">
    <div class="am-header-left am-header-nav">
      <a href="javascript:" onclick="javascript:history.go(-1);">
        <i class="am-header-icon am-icon-chevron-left"></i>
      </a>
    </div>
    <h1 class="am-header-title">
    订单详情
    </h1>
    
  </header>

  <!-- 详情 -->
  <form action="" method="" enctype="mutiltype/data">
   
  <div class="am-shadow am-padding am-cf am-text-sm">
     <img src="skin/img/addr.png" style="width:auto" class="am-fl" alt="">
     <div class="am-fr moa">
       服务人：张三&nbsp;&nbsp;&nbsp;&nbsp;<a href="tel:15708434450" class="black">15708434450</a><br> 
       地  址：成都市高新区天府五街美年广场。
     </div>
  </div>
<!--       <hr data-am-widget="divider" class="am-divider am-divider-dashed" />
 -->
    <div class="foodinfo am-padding am-shadow">
 
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
     
     <div class="am-shadow am-padding-sm am-cf mob">
        <span class="am-fl red">合计：108元</span>
        <a href="javascript:" class="am-fr am-btn am-btn-primary bgreen am-btn-xs checkOrder"> 确定</a>
        <a href="javascript:" class="am-fr am-btn am-btn-primary am-btn-xs bgray cancelO"> 取消
        </a>     
        </div>
  </form>
  
<script src="skin/js/jquery.min.js"></script>
<script>
  $(function(){

    $('.checkOrder').bind('click',function() { 
      if(confirm("确认接受订单吗？")){
         $(this).text('已接受');
         // $(this).next('.cancelO').css('display','');
         $(this).unbind('click')
      }
      else{
         return false;
      } 

      // $(this).parent('p').find('.cancelO').css('display','');
        return true; 
    });
     $('.cancelO').click(function() { 
      if(confirm("确认取消此订单吗？")){
         $(this).prev('.checkOrder').text('已取消');
         $(this).css('display','none');
       }
      else{
        
        return false; 
      } 
     
      
    });
  })
  </script>
</body>
</html>