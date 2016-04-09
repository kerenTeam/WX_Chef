<body>
  <!-- header -->
  <header data-am-widget="header" class="am-header am-header-default topform bheader"> <!-- am-header-fixed header固定在顶部-->
  <div class="am-header-left am-header-nav">
    <a href="<?php echo site_url('home/index')?>">
      <i class="am-header-icon am-icon-chevron-left"></i>
    </a>
  </div>
  <h1 class="am-header-title">
      购物车
  </h1>

</header>


<form action="<?=site_url('home/order');?>" method="post" enctype="multipart/form-data">
  <div data-am-widget="list_news" class="am-u-sm-12 asp cmn">
    <div class="cmn cmnb am-list-news am-list-news-default" >
      <div class="am-list-news-bd">
        <div class="am-text-center oln">点菜</div>
          <ul class="am-list cul">
		  <?php if(!empty($carts)):?>
		  <?php unset($_SESSION['booking']); foreach($carts as $cart):?>
			<?php  
        $id = $cart['foodid'];
        $shopid = $cart['shopid'];
				$foods = file_get_contents(APIURL."Get?dis=xq&foodid=".$id);
        $food = json_decode(json_decode($foods));
       
        if(!isset($_SESSION['booking'])){
         $this->session->set_userdata('booking',$food);
        }else{
          $booking = $_SESSION['booking'];

          $book = array_merge($booking,$food);
          $this->session->set_userdata('booking',$book);
        }
			?>
            <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
              <div class="am-u-sm-3 am-text-center am-list-thumb">
                <a href="<?php echo site_url('home/food?id=').$food[0]->foodid.'&number='.$cart['number'].'&shopid='.$shopid;?>" class="vimg">
                  <img src="<?php echo IP.$food[0]->thumbnail;?>" id="img" alt="<?=$food[0]->foodname;?>"/>
                </a>
              </div>
              <div class=" am-u-sm-9 am-list-main">
                <h3 class="am-list-item-hd cartb"><?=$food[0]->foodname;?></h3>
                <input type="hidden" name="foodid[]" value="<?=$food[0]->foodid;?>">
                <div class="pr"><i class="am-icon-cny"></i><span class="price" id="price"><?=$food[0]->foodprice;?></span></div>
                <div class="fNum">
                  <span class="am-icon-minus" onClick="handle(this, false)"></span>
                  <input type="text" class="numTxt inborder" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" 
                  name="numbers[]" value="<?php if(empty($cart->number)){echo $cart['number']; }else{echo $cart->number; };?>">
                  <span class="am-icon-plus" onClick="handle(this, true)"></span>
                </div>
                 <a href="<?php echo site_url('home/change?id=').$food[0]->foodid.'&pid='.$food[0]->foodpid.'&shopid='.$shopid;?>"><span class="am-icon-refresh am-fr green"></span></a>
                <a href="<?=site_url('home/delcart?id=').$id.'&shopid='.$shopid;?>" class="am-fl" onclick="return confirm('你确定要删除吗?')"><i class="am-icon-trash red ats2"></i></a>
              </div>
            </li>
			<?php endforeach;?>
			<?php else:?>
			<p class="am-margin-right-lg">你还没有添加任何食物！</p>
			<?php endif;?>
          </ul>
        <div class="am-text-center oln">套餐</div>
          <ul class="am-list cul">
            
            <!-- <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
              <div class="am-u-sm-3 am-text-center am-list-thumb">
                <a href="<?php echo site_url('home/dinner')?>" class="vimg">
                  <img src="skin/img/product/shiguo.jpg" alt="石锅酱仔排58"/>
                </a>
              </div>
              <div class=" am-u-sm-9 am-list-main">
                <h3 class="am-list-item-hd cartb">日常589元系列</h3>
                <div class="pr"><i class="am-icon-cny"></i><span class="price">589</span></div>
                <div class="fNum">
                  <span class="am-icon-minus" onClick="handle(this, false)"></span>
                  <input type="text" class="numTxt inborder" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" name="numbers" value="1">
                  <span class="am-icon-plus" onClick="handle(this, true)"></span>
                </div>
                <a href="" class="am-fl"><i class="am-icon-trash red ats2"></i></a>
              </div>
            </li> -->
          </ul>
      </div>
    </div>
  </div>
  <!-- <div class="am-text-center">合计：<i class="am-icon-cny red"></i><input type="text" id="allmoney" readonly class="allmoney red" value="757"></div> -->
  <!-- footer -->
  <div data-am-widget="navbar" class="am-navbar am-shadow am-cf am-navbar-default amft" id="">
   
      <div class="am-u-sm-8 a">
        <span class="green"><img src="skin/img/cart.png" alt=""><span id="fen" class="allmoney"></span>份</span>
        <i class="am-icon-cny red"></i><span id="allmoney" class="allmoney red"></span>
      </div>
      <div class="am-u-sm-4 b">
        
        <button   type="submit" class="am-btn am-btn-success">确认</button>
        
      </div>
 
  </div>
</form>
<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/amazeui.min.js"></script>

<!--<script>
 $(function(){
	 var nums = $(".numTxt");
	 var all = 0;
	 var fen = 0;
	 nums.each(function() {
		 var pr = $(this).parentsUntil('li').find('.price').html();
		  console.log(pr);
		fen += parseInt($(this).val());
		all += parseInt($(this).val())*parseFloat(pr);
	});
	$('#fen').html(fen);
	$('#allmoney').html(all.toFixed(2));
	 })
</script>-->
<script src="skin/js/num.js"></script>
</body>
</html>