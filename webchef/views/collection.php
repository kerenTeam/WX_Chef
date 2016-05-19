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

    <link rel="stylesheet" type="text/css" href="skin/css/collect.css">
</head>
<body>
<div class="header">
    <div class="center">
      <ul class="clear">
        <li><a href="<?=site_url('home/index');?>">首页</a></li>
        <li><a href="<?=site_url('home/personal');?>">我的订单</a></li>
        <!-- <li><a href="<?=site_url('home/recommend');?>">我的大厨</a></li> -->
        <li><a href="<?=site_url('home/help');?>">联系我们</a></li>
        <li><a href="<?=site_url('home/car');?>">购物篮</a></li>
        <li><a href="<?=site_url('login/index');?>">登录</a>/<a href="<?=site_url('login/register');?>">注册</a></li>
      </ul>
    </div>
  </div>
  <div class="content">
        <div class="content-tit clear">
          <!-- 指引 -->
      <div class="center">
          <ol class="am-breadcrumb am-margin-bottom-0">
          <li><a href="<?=site_url('home/home');?>">首页</a></li>
          <li><a href="<?=site_url('home/personal');?>">个人中心</a></li>
          <li class="am-active">我的收藏</li>
        </ol>
        <ul class="clear">
                <li><a href="<?=site_url('home/add');?>">点菜</a></li>
                <li><a href="<?=site_url('home/custom');?>">宴席</a></li>
                <li><a href="<?=site_url('home/vegetable');?>">净菜</a></li>
                <li><a href="javascript:;">特色服务 <i class="am-icon-sort-desc"></i></a>
                  <div class="subMenu">
                    <a href="<?=site_url('home/service');?>" title="">服务</a>
                    <a href="<?=site_url('home/elegance');?>" title="">伴餐</a>
                    <a href="<?=site_url('home/ceremonyType');?>" title="">庆典</a>
                    <a href="<?=site_url('home/price');?>" title="">菜价</a>
                  </div>
                </li>
        </ul>
        </div>
        </div>
    <div class="center">
      <div class="personal clear">
          <div class="per-pl">
            <div class="per-nav">
              <h1><a href="<?=site_url('home/personal');?>">我的主页</a></h1>
            </div>
            <div class="per-nav">
              <h1>订单中心</h1>
              <ul>
                  <li><a href="<?=site_url('home/myorder');?>">我的订单</a></li>
                  <!-- <li><a href="<?=site_url('home/collection');?>" class="active">我的收藏</a></li> -->
                  <li><a href="<?=site_url('home/appraise');?>">我的评价</a></li>
                  <li><a href="<?=site_url('home/back');?>">我的退款</a></li>
              </ul>
            </div>
            <div class="per-nav">
              <h1>我的账户</h1>
              <ul>
                  <!-- <li><a href="<?=site_url('home/balance');?>">我的余额</a></li> -->
                  <li><a href="<?=site_url('home/coupon');?>">优惠劵</a></li>
                  <li><a href="<?=site_url('home/member');?>">会员卡</a></li>
              </ul>
            </div>
            <div class="per-nav per-last">
              <h1>设置</h1>
              <ul>
                  <li><a href="<?=site_url('home/userInfo');?>">个人信息</a></li>
                  <li><a href="<?=site_url('home/address');?>">收货地址</a></li>
              </ul>
            </div>
          </div>
          <div class="per-pr">
              
              <!--  最近订单 -->
              <div class="per-ctt collect">
                  <div class="crr-tit clear">
                    <ul>
                        <li class="active">全部收藏</li>
                    </ul>
                  </div>
                  <p>您暂时还没有收藏的菜品</p>
                  <!-- <ul class="am-avg-sm-6">
                      <li>
                        <a href="<?=site_url('home/info');?>">
                          <div class="collect_list">
                          
                              <img src="skin/img/orderimg_03.png">
                              <h2><span>4.5</span> 尖椒回锅肉</h2>
                              <p>价格:<span>￥30.00</span></p>

                          </div>
                        </a>
                      </li>
                  </ul> -->
              </div>


              <!-- 足迹 -->
              <div class="per-ctt">
                  <div class="crr-tit clear">
                    <ul>
                        <li class="active">美食足迹</li>
                    </ul>
                  </div>
                  <ul class="am-avg-sm-4 footmarks">
                      <li>
                        <a href="<?=site_url('home/info');?>">
                          <div class="footmark">
                          
                              <img src="skin/img/orderimg_03.png">
                              <h2>回锅肉</h2>
                              <span class="index-num"><i></i></span>

                          </div>
                        </a>
                      </li>
                      <li>
                        
                        <a href="<?=site_url('home/info');?>">
                          <div class="footmark">
                          
                              <img src="skin/img/orderimg_03.png">
                              <h2>回锅肉</h2>
                              <span class="index-num"><i></i></span>

                          </div>
                        </a>
                      </li>
                      <li>
                        
                        <a href="<?=site_url('home/info');?>">
                          <div class="footmark">
                          
                              <img src="skin/img/orderimg_03.png">
                              <h2>回锅肉</h2>
                              <span class="index-num"><i></i></span>

                          </div>
                        </a>
                      </li>
                      <li>
                        
                        <a href="<?=site_url('home/info');?>">
                          <div class="footmark">
                          
                              <img src="skin/img/orderimg_03.png">
                              <h2>回锅肉</h2>
                              <span class="index-num"><i></i></span>

                          </div>
                        </a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      </div>
  </div>

  <div class="footer">
    <div class="center">
      <ul class="am-avg-sm-4">
        <li>
          <h1>用户帮助</h1>
          <p><a href="javascript:;">服务中心</a></p>
          <p><a href="javascript:;">常见问题</a></p>
          <p><a href="javascript:;">在线客服</a></p>
        </li>
        <li>
          <h1>商务合作</h1>
          <p><a href="javascript:;">服务中心</a></p>
          <p><a href="javascript:;">常见问题</a></p>
          <p><a href="javascript:;">在线客服</a></p>
        </li>
        <li>
          <h1>关于我们</h1>
          <p><a href="javascript:;">服务中心</a></p>
          <p><a href="javascript:;">常见问题</a></p>
          <p><a href="javascript:;">在线客服</a></p>
        </li>
        <li>
          <div class="erweima">
            <img src="skin/img/erweima.png">
            <h2> 下载手机版</h2>
            <span> 手机订餐方便</span>
          </div>
        </li>
      </ul>
      <p class="footer-btm">&copy; 2012 成都可人软件有限公司&nbsp;&nbsp;&nbsp;蜀ICP备12007958号-1&nbsp;&nbsp;&nbsp;Powered By DeepTime</p>
    </div>
  </div>

<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/amazeui.min.js"></script>
</body>
</html>