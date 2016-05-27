<!DOCTYPE html>
<html>
<head>
	<title>大厨到家-登录</title>
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
    <link rel="stylesheet" type="text/css" href="skin/css/login.css">
</head>
<body>
<div class="logMain">
  <div class="logHead">
      <a href="<?=site_url('home/index');?>">
          <img src="skin/img/log_logo.png">
      </a>
  </div>
  <div class="logContent">
      <div class="log_ewm">
          <img src="skin/img/erweima.png">
          <p>手机应用</p>
      </div>
      <div class="logForm">
          <form class="am-form log_form" action="" method="post">
              <h1>登录</h1>
              <div class="yz_ts"></div>
              <div class="am-form-group am-form-icon">
                  <i class="am-icon-user"></i>
                  <input type="text" class="am-form-field name" placeholder="手机号/邮箱登录" name="UserPhone">
              </div>
              <div class="am-form-group am-form-icon">
                  <i class="am-icon-lock password"></i>
                  <input type="password" class="am-form-field log_psw" placeholder="密码" name="UserPwd">
              </div>
              <div class="validate">
                  <input type="text" id="inputCode" class="am-form-field log_code" placeholder="验证码" name="code">
                  <span id="code"></span>
                  <span id="hyz">看不清<br/>换一张</span>
              </div>
              <div class="group">
                  <label class="am-checkbox am-danger">
                      <input type="checkbox" data-am-ucheck name="check" />
                      记住密码
                  </label>
              </div>
              <div class="group">
                  <input type="submit" value="登 录" class="am-btn am-btn-danger am-radius log_btn" id="sub" />
              </div>
              <div class="log_link fix">
                  <a href="<?=site_url('login/register');?>" class="fl">新用户注册</a>
                  <a href="<?=site_url('login/forget');?>" class="fr">忘记密码？</a>
              </div>
              <div class="qqwx">
                  <div class="hr-tit">
                      <p>第三方账号登录</p>
                  </div>
                  <div class="log_qw">
                      <a href="javascript:;" class="am-icon-btn am-primary am-icon-qq" onclick="notLogin();">
                      </a>
                      <a href="javascript:;" class="am-icon-btn am-success am-icon-weixin" onclick="notLogin();">
                      </a>
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
<script src="skin/js/js.KinerCode.js"></script>
<script type="text/javascript" src="skin/js/login.js"></script>
</body>
</html>