<!DOCTYPE html>
<html>
<head>
	<title>大厨到家-促销活动</title>
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

</head>
<body class="act_bg">
  <div class="header">
    <div class="center">
      <ul class="clear">
        <li><a href="<?=site_url('home/index');?>">首页</a></li>
        <li><a href="<?=site_url('usercenter/personal');?>">我的订单</a></li>
        <!-- <li><a href="<?=site_url('home/recommend');?>">我的大厨</a></li> -->
        <li><a href="<?=site_url('home/help');?>">联系我们</a></li>
        <li><a href="<?=site_url('shopcar/car');?>">购物篮</a></li>
        <?php if(!isset($_SESSION['phone'])):?>
        <li><a href="<?=site_url('login/index');?>">登录</a>/<a href="<?=site_url('login/register');?>">注册</a></li>
        <?php else:?>
        <li><div  class="am-dropdown headerdown" data-am-dropdown>
            <a href="javascript:;" class="am-dropdown-toggle" data-am-dropdown-toggle><?=$_SESSION['phone'];?> <span class="am-icon-caret-down"></span></a>
            <ul class="am-dropdown-content">
              <li><a href="<?=site_url('usercenter/personal');?>"><i class="am-icon-home"></i> 我的主页</a></li>
              <li><a href="<?=site_url('usercenter/userInfo');?>"><i class="am-icon-user"></i> 个人信息</a></li>
              <li><a href="<?=site_url('usercenter/address');?>"><i class="am-icon-map-marker"></i>&nbsp;&nbsp;地址管理</a></li>
              <li class="am-divider"></li>
              <li><a href="<?=site_url('login/outlogin')?>"><i class="am-icon-power-off"></i> 退出登录</a></li>
            </ul>
        </div></li>
      <?php endif;?>
      </ul>
    </div>
  </div>
  <div class="content">
      <div class="activity">
          <div class="act_banner">
              <img src="skin/img/activity_bg_01.jpg">
          </div>
          <div class="act_ctt">
              <div class="act_rule">
                  <p>1.本页面中商品均为大厨到家用户专享。</p>
                  <p>2.参考本页面商品购买，每款商品每个用户限购数量为1件。</p>
                  <p>3.购买页面中商品并完成收货后，均可获赠“鑫世界 畅购全球”
                      代金券99元。用户可登录“鑫世界”进入“个人中心”查询并
                      使用。
                  </p>
                  <p>4.活动有效期为：3月22日-10月24日</p>
                  <p>
                      5.本页面涉及的促销活动（包括但不限于方式,商品及价格），最
                       终解释权归“大厨到家”所有。客服电话：800-820-8820
                  </p>
              </div>
              <div class="act_order">
                  <div class="act_order_tit">
                      <h1>限时销售</h1>
                  </div>
                  
                  <div class="act_lists">
                      <ul>
                          <li>
                              <div class="am-g">
                                  <div class="am-u-sm-4">
                                      <div class="act_ord_pic">
                                          <img src="skin/img/act_ord_08.png">
                                          <div class="sellout">售完</div>
                                      </div>
                                  </div>
                                  <div class="am-u-sm-8">
                                      <div class="act_ord_cap">
                                          <h1>小厨小吃店</h1>
                                          <h2>蓉记姜葱香辣蟹</h2>
                                          <p>推荐指数 <span class="index-num"><i></i></span></p>
                                          <h3>抢购价： ￥<span>99</span></h3>
                                          <a href="javascript:;" class="am-btn am-btn-danger am-radius">立即购买</a>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="am-g">
                                  <div class="am-u-sm-4">
                                      <div class="act_ord_pic">
                                          <img src="skin/img/act_ord_08.png">
                                      </div>
                                  </div>
                                  <div class="am-u-sm-8">
                                      <div class="act_ord_cap">
                                          <h1>小厨小吃店</h1>
                                          <h2>蓉记姜葱香辣蟹</h2>
                                          <p>推荐指数 <span class="index-num"><i></i></span></p>
                                          <h3>抢购价： ￥<span>99</span></h3>
                                          <a href="javascript:;" class="am-btn am-btn-danger am-radius">立即购买</a>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="am-g">
                                  <div class="am-u-sm-4">
                                      <div class="act_ord_pic">
                                          <img src="skin/img/act_ord_08.png">
                                      </div>
                                  </div>
                                  <div class="am-u-sm-8">
                                      <div class="act_ord_cap">
                                          <h1>小厨小吃店</h1>
                                          <h2>蓉记姜葱香辣蟹</h2>
                                          <p>推荐指数 <span class="index-num"><i></i></span></p>
                                          <h3>抢购价： ￥<span>99</span></h3>
                                          <a href="javascript:;" class="am-btn am-btn-danger am-radius">立即购买</a>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="am-g">
                                  <div class="am-u-sm-4">
                                      <div class="act_ord_pic">
                                          <img src="skin/img/act_ord_08.png">
                                      </div>
                                  </div>
                                  <div class="am-u-sm-8">
                                      <div class="act_ord_cap">
                                          <h1>小厨小吃店</h1>
                                          <h2>蓉记姜葱香辣蟹</h2>
                                          <p>推荐指数 <span class="index-num"><i></i></span></p>
                                          <h3>抢购价： ￥<span>99</span></h3>
                                          <a href="javascript:;" class="am-btn am-btn-danger am-radius">立即购买</a>
                                      </div>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>

    <script src="skin/js/jquery.min.js"></script>




