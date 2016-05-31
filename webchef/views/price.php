<!DOCTYPE html>
<html>
<head>
	<title>大厨到家</title>
    <meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="<?php echo base_url();?>webchef/" />
  	<meta name="description" content="">
  	<meta name="keywords" content="">
  	<!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">
    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="icon" type="image/png" href="skin/img/LOGO-ug_03.png">
    <link rel="stylesheet" href="skin/css/amazeui.min.css">
    <link rel="stylesheet" type="text/css" href="skin/css/home.css">
    <link rel="stylesheet" type="text/css" href="skin/css/custom.css">
</head>

<body class="price_bg">
<!-- header -->
<div class="header price_hd">
  <div class="center">
    <ul class="clear">
        <li><a href="<?=site_url('home/index');?>">首页</a></li>
        <li><a href="<?=site_url('usercenter/personal');?>">我的订单</a></li>
        <!-- <li><a href="<?=site_url('home/recommend');?>">我的大厨</a></li> -->
        <li><a href="<?=site_url('home/help');?>">联系我们</a></li>
        <li><a href="<?=site_url('shopcar/car');?>">购物篮</a></li>
        <li><a href="<?=site_url('login/index');?>">登录</a>/<a href="<?=site_url('login/register');?>">注册</a></li>
    </ul>
  </div>
</div>
<!-- content -->
<div class="content">
	<!-- center -->
      <div class="center">
		<div class="content-tit price_tit clear">
          <!-- 指引 -->
          <ol class="am-breadcrumb am-margin-bottom-0">
          <li><a href="<?=site_url('home/index');?>">首页</a></li>
          <li class="am-active">实时菜价</li>
        </ol>
        <ul class="clear">
                <li><a href="<?=site_url('home/add');?>">点菜</a></li>
                <li><a href="<?=site_url('order/custom');?>">宴席</a></li>
                <li><a href="<?=site_url('order/vegetable');?>">净菜</a></li>
                <li><a href="javascript:;">特色服务 <i class="am-icon-sort-desc"></i></a>
                  <div class="subMenu">
                    <a href="<?=site_url('service/service');?>" title="">服务</a>
                    <a href="<?=site_url('service/elegance');?>" title="">伴餐</a>
                    <a href="<?=site_url('service/ceremonyType');?>" title="">庆典</a>
                    <a href="<?=site_url('home/price');?>" title="">菜价</a>
                  </div>
                </li>
        </ul>
        </div>
        <!-- 中间部分 -->
        <div class="c_middle"> 
        	<!-- <p class="market">菜市场</p> -->
        	<table id="market_list">
        	<thead class="market_list_first">
	        	<td>
	        		<select data-am-selected class="caijia" id="caishi">
              <?php foreach($cai as $v):?>
	        		  <option value="<?=$v['foodmarket'];?>"><?=$v['foodmarket']?></option>
              <?php endforeach;?>
	        		</select>
	        	</td>
	        	<td>
	        		<select data-am-selected class="caijia" id="cates">
                <?php foreach($cates as $v):?>
	        		  <option value="<?=$v['marketcategorie']?>"><?=$v['marketcategorie']?></option>
                <?php endforeach;?>
	        		
	        		</select>
	        	</td>
	        	<td>
	        		<select data-am-selected id="adate" class="caijia">
	        		</select>
	        	</td>        	
        	</thead>
          <tbody id="group_one">
          	<tr>
  	        	<td>菜名</td>
  	        	<td>重量</td>
  	        	<td>价格</td>
          	</tr>
          	<tr>
  	        	<td><a href="<?=site_url('home/priceChart');?>">西兰花</a></td>
  	        	<td>1Kg</td>
  	        	<td class="price">￥5.5</td>
          	</tr>
          	<tr>
  	        	<td><a href="<?=site_url('home/priceChart');?>">小青菜</a></td>
  	        	<td>1Kg</td>
  	        	<td class="price">￥5.5</td>
          	</tr>
          	<tr>
  	        	<td><a href="<?=site_url('home/priceChart');?>">瘦肉(全瘦)</a></td>
  	        	<td>1Kg</td>
  	        	<td>￥5.5</td>
  	        	</tr>
            </tbody>
        	</table>
        </div>
        <!-- 中间部分结束 -->

      </div>
</div>

  
<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/amazeui.min.js"></script>
<script>
 $(function(){
     var adate = $('#adate');
     var html;//定义selec追加的html元素
     var now = new Date();
 
  for(var i=0;i<7;i++){
      var date = new Date(now.getTime() - i * 24 * 3600 * 1000);//循环得出每天的日期
      var month = date.getMonth() + 1;
      var day = date.getDate();
      var year = date.getFullYear(); 
      html+= '<option value="'+year+'-'+month+'-'+day+'">'+year+'-'+month+'-'+day+'</option>';
     adate.html(html);
  }

    // var cai =  $("#caishi").val();
    //   var cate =  $("#cates").val();
    //   var time =  $("#adate").val();
  $('.caijia').on('change',function(){
    // 菜市场
    var cai =  $("#caishi").val();
    // 分类
    var cate =  $("#cates").val();
    // 时间
    var time =  $("#adate").val();
    $('#group_one').html('<tr><td></td><td>加载中。。。</td><td></td></tr>')
    $.ajax({
        type:'post',
        url:'<?=site_url("postsend/caiprice");?>',
        data: 'name='+cai+'&time='+time+'&cates='+cate,
        success:function(data){
          $('#group_one').html(data);
        }
    })
  })

 })

</script>
</body>
</html>

