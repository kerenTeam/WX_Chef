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
<?php if($carts == NULL && $taocan == NULL):?>
    <div class="am-margin">购物车空空如也，老鼠都是含着泪离开的~~</div>
<?php else:;?>

<form action="<?=site_url('orderWXPay/order');?>" method="post" enctype="multipart/form-data">
  <div data-am-widget="list_news" class="am-u-sm-12 asp cmn">
    <div class="cmn cmnb am-list-news am-list-news-default" >
      <div class="am-list-news-bd">
       <?php if(!empty($carts)):?>
        <div class="am-text-center oln">点菜</div>
          <ul class="am-list cul">
		 
        <!-- <?php var_DumP($carts);?> -->
		  <?php unset($_SESSION['booking']); foreach($carts as $cart):?>
			<?php 
        $id = $cart['foodid'];
        $shopid = $cart['shopid'];
				$foods = file_get_contents(POSTAPI."API_Food?dis=xq&foodid=".$id);
        $food = json_decode(json_decode($foods),true);
     
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
                <a href="<?php echo site_url('home/food?id=').$food[0]['foodid'].'&number='.$cart['number'].'&shopid='.$shopid;?>" class="vimg">
                  <img src="<?php echo IP.$food[0]['thumbnail'];?>" id="img" alt="<?=$food[0]['foodname'];?>"/>
                </a>
              </div>
              <div class=" am-u-sm-9 am-list-main">
                <h3 class="am-list-item-hd cartb"><?=$food[0]['foodname'];?></h3>
                <input type="hidden" name="foodid[]" value="<?=$food[0]['foodid'];?>">
                <div class="pr"><i class="am-icon-cny"></i><span class="price" id="price"><?=$food[0]['foodprice'];?></span></div>
                <div class="fNum">
                  <span class="am-icon-minus" onClick="handle(this, false)"></span>
                  <input type="text" class="numTxt inborder" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" 
                  name="numbers[]" value="<?=$cart['number'];?>">
                  <span class="am-icon-plus" onClick="handle(this, true)"></span>
                </div>
                 <a href="<?php echo site_url('home/change?id=').$food[0]['foodid'].'&pid='.$food[0]['foodpid'].'&shopid='.$shopid;?>"><span class="am-icon-refresh am-fr green"></span></a>
                <a href="<?=site_url('home/delcart?id=').$id.'&shopid='.$shopid;?>" class="am-fl" onclick="return confirm('你确定要删除吗?')"><i class="am-icon-trash red ats2"></i></a>
              </div>
            </li>
		      	<?php endforeach;?>
          </ul>
          <?php endif;?>
          <?php if(!empty($taocan)):?>
         <div class="am-text-center oln">套餐</div>
          <ul class="am-list cul">
          <?php foreach($taocan as $k=>$v):?>
           <?php 
            $id = $v['foodid'];
            $shopid = $v['shopid'];
            $foods = file_get_contents(POSTAPI."API_Food?dis=xq&foodid=".$id);
            $food = json_decode(json_decode($foods),true);
            // var_dumP($food);
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
                <a href="<?php echo site_url('home/dinner')?>" class="vimg">
                  <img src="<?php echo IP.$food[0]['thumbnail']?>" alt="<?=$food[0]['foodname']?>"/>
                </a>
              </div>
              <div class=" am-u-sm-9 am-list-main">
                <h3 class="am-list-item-hd cartb"><?=$food[0]['foodname'];?></h3>
                <input type="hidden" name="foodid[]" value="<?=$food[0]['foodid'];?>">
                <div class="pr"><i class="am-icon-cny"></i><span class="price"><?=$food[0]['foodprice']?></span></div>
                <div class="fNum">
                  <span class="am-icon-minus" onClick="handle(this, false)"></span>
                  <input type="text" class="numTxt inborder" onkeypress="return IsNum(event)" onchange="ueserWrite(this)" onfocus="blurWrite(this)" name="numbers[]" value="<?=$v['number'];?>">
                  <span class="am-icon-plus" onClick="handle(this, true)"></span>
                </div>
                <a href="<?=site_url('home/delcart?id=').$id.'&shopid='.$shopid;?>" class="am-fl"><i class="am-icon-trash red ats2"></i></a>
              </div>
            </li> 
          <?php endforeach;?>
           </ul>
         <?php endif;?>
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
<?php endif;?>
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