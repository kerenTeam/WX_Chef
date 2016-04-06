<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/amazeui.min.js"></script>

<body>
<!-- header -->
<header data-am-widget="header" class="am-header am-header-default topform">
  <div class="am-header-left am-header-nav"> <a href="javascript:" onclick="javascript:history.go(-1);"> <i class="am-header-icon am-icon-chevron-left"></i> </a> </div>
  <h1 class="am-header-title"> 热菜 </h1>
</header>
  <div class="cmn cmnb am-list-news am-list-news-default" >
    <div class="am-list-news-bd">
      <ul class="am-list">
	  <?php foreach($foods as $food):?>
     
        <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
         <a href="" class="black">
          <div class="am-u-sm-3 am-text-center am-list-thumb">
            <div class="vimg"> <img src="<?=base_url($food['thumbnail']);?>" alt="<?=$food['foodName'];?>"/> </div>
          </div>
          <div class=" am-u-sm-9 am-list-main">
            <h3 class="am-list-item-hd"><?=$food['foodName'];?></h3>
            <div class="am-list-item-text"><strong>特点：</strong><?=$food['specialty'];?></div>
            <div class="months"><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i><i class="am-icon-star red"></i>月销<span class=""><?=$food['monthSalesm'];?></span>份</div>
            <div class="pr"><i class="am-icon-cny"></i><span class="price"><?=$food['price'];?></span></div>
          </div>
            </a>
        </li>
       
		<?php endforeach;?>
      
      </ul>
    </div>
  </div>
</body>
</html>