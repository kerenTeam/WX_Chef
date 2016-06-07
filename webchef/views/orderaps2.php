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
    <link rel="stylesheet" href="skin/css/zyUpload.css" type="text/css">

</head>
<body>
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
<!-- 评价 -->
<div class="content">
    <div class="center">
        <div class="crr-tit clear aps_tit">
            <ul>
                <li class="active">商品评价</li>
            </ul>
        </div>

        <form class="ops_form am-form">
            <div class="orderaps">
                <div class="am-g">
                    <div class="am-u-sm-3">
                        <div class="ops_ord">
                            <a href="<?=site_url('home/info');?>">
                                <img src="skin/img/lc (1).jpg">
                                <p>鲜椒拌贡菜</p>
                            </a>
                            <a href="" title=""></a>
                        </div>
                    </div>
                    <div class="am-u-sm-9" id="AddDP">
                        <input id="environment" name="environment" value="0" type="txt" hidden>
                        <div class="ops_app">
                            <ul class="ops_star Star">
                                <li>
                                    <span class="number">菜品</span><span class="Select"> 
                                    <a onMouseOver="javascript:setProfix('environment_');showStars(1,'environment');" 
                                    onMouseOut="javascript:setProfix('environment_');clearStars('environment');"
                                     href="javascript:setProfix('environment_');setStars(1,'environment');">
                                    <img id="environment_1" title="差(1)" src="skin/img/icon_star_1.gif"></a>
                                    
                                    <a onMouseOver="javascript:setProfix('environment_');showStars(2,'environment');" 
                                    onMouseOut="javascript:setProfix('environment_');clearStars('environment');"
                                     href="javascript:setProfix('environment_');setStars(2,'environment');">
                                     <img id="environment_2" title="一般(2)" src="skin/img/icon_star_1.gif"></a>
                                     
                                     <a onMouseOver="javascript:setProfix('environment_');showStars(3,'environment');" 
                                     onMouseOut="javascript:setProfix('environment_');clearStars('environment');"
                                      href="javascript:setProfix('environment_');setStars(3,'environment');">
                                     <img id="environment_3" title="好(3)" src="skin/img/icon_star_1.gif"></a>
                                     
                                     <a onMouseOver="javascript:setProfix('environment_');showStars(4,'environment');" 
                                     onMouseOut="javascript:setProfix('environment_');clearStars('environment');"
                                      href="javascript:setProfix('environment_');setStars(4,'environment');">
                                     <img id="environment_4" title="很好(4)" src="skin/img/icon_star_1.gif"></a>
                                     
                                     <a onMouseOver="javascript:setProfix('environment_');showStars(5,'environment');" 
                                     onMouseOut="javascript:setProfix('environment_');clearStars('environment');" 
                                     href="javascript:setProfix('environment_');setStars(5,'environment');">
                                     <img id="environment_5" title="非常好(5)" src="skin/img/icon_star_1.gif"></a> </span>
                                </li>
                            </ul>
                            <!--  -->
                            <div class="ops_text">
                                <p>添加评论</p>
                                <textarea placeholder="来分享一下你的感受吧！" rows="5"></textarea>
                                <!-- <div class="am-form-group am-form-file show-btn">
                                  <button type="button" class="am-btn am-btn-default am-btn-sm show-btn">
                                    <i class="am-icon-cloud-upload"></i> 电脑晒图</button>
                                  <input type="file" multiple>
                                </div> -->
                                <div id="demo" class="demo"></div>
                                <div class="show-img">
                                    <!-- <img src="skin/img/jian.png">
                                    <img src="skin/img/jia.jpg"> -->
                                </div>
                            </div>
                            <div class="aps_ts"></div>
                            <button type="submit" class="am-btn am-btn-secondary">发表评价</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>






  <div class="logFoot">
      <ul>
          <li><a href="javascript:;">在线客服</a></li>
          <li><a href="javascript:;">服务协议</a></li>
          <li><a href="javascript:;">反馈我们</a></li>
      </ul>
      <p>
        增值电信业务许可证 : 沪B2-20150033 | 沪ICP备 09007032 | 上海工商行政管理 Copyright ©2008-2015 ele.me, All Rights Reserved. 
      </p>
  </div>
</div>
<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/amazeui.min.js"></script>
<script type="text/javascript" src="skin/js/star.js"></script>
<!-- 引用核心层插件 -->
<script src="skin/js/zyFile.js"></script>
<!-- 引用控制层插件 -->
<script src="skin/js/zyUpload.js"></script>
<!-- 引用初始化JS -->
<script src="skin/js/jq22.js"></script>
<script type="text/javascript">
    $(".ops_form").bind("submit",function(){
        if($("#rating").val() < 1){
            $(".aps_ts").html("你还没有给厨师打分！")
        }else{
            if($("#taste").val() < 1){
                $(".aps_ts").html("你还没有给服务打分！")
                }else{
                    if($("#environment").val() < 1){
                        $(".aps_ts").html("你还没有给菜品打分！")
                    }else{
                        $(".aps_ts").html("");
                        return true;
                }
            
            }
        }
        return false;
    });
    
</script>
</body>
</html>