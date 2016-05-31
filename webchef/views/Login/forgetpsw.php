<!DOCTYPE html>
<html>
<head>
	<title>大厨到家-忘记密码</title>
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
  <div class="forget">
      <div class="crr-tit fix">
          <ul>
              <li class="active">忘记密码</li>
          </ul>
      </div>
      <div class="forget_step"><img src="skin/img/forget-step1_03.png"></div>
      <div class="forget_form">
          <form class="am-form am-form-horizontal" action='<?=site_url('login/editpwd');?>' method="post">
              <div class="for_step1">
                  <div class="am-form-group">
                      <div class="am-u-sm-9 am-u-sm-offset-3">
                          <div class="yz_ts"></div>
                      </div>
                  </div>
                  <div class="am-form-group">
                      <label class="am-u-sm-3 am-form-label">账户名 :</label>
                      <div class="am-u-sm-9">
                          <input type="text" id="phone" name="phone" class="uname" placeholder="手机号">
                      </div>
                  </div>
                  <div class="am-form-group">
                      <label class="am-u-sm-3 am-form-label">验证码 :</label>
                      <div class="am-u-sm-9 forget-yzm">
                          <div class="validate">
                              <input type="text" id="inputCode" class="am-form-field log_code" placeholder="验证码">
                              <span id="code"></span>
                              <span id="hyz">看不清<br/>换一张</span>
                          </div>
                      </div>
                  </div>
                  <div class="am-form-group">
                      <div class="am-u-sm-9 am-u-sm-offset-3">
                          <button type="button" id="sub" class="am-btn am-btn-danger am-radius">下一步</button>
                      </div>
                  </div>
              </div>
              <div class="for_step2">
                  <div class="am-form-group">
                      <div class="am-u-sm-9 am-u-sm-offset-3">
                          <div class="yz_ts"></div>
                      </div>
                  </div>
                  <div class="am-form-group">
                      <label class="am-u-sm-3 am-form-label"></label>
                      <div class="am-u-sm-9">
                          验证码已发送至您的手机
                      </div>
                  </div>
                  <div class="am-form-group">
                      <label class="am-u-sm-3 am-form-label">验证码 :</label>
                      <div class="am-u-sm-9">
                            <input type="text" placeholder="输入验证码" id="phoneCode" class="reg_yz reg_yz_tex" style="width: 60%;float: left;">
                      </div>
                  </div>
                  <div class="am-form-group">
                      <div class="am-u-sm-9 am-u-sm-offset-3">
                          <button type="button" class="am-btn am-btn-danger am-radius" onclick="step2();">下一步</button>
                      </div>
                  </div>
              </div>
              <div class="for_step3">
                  <div class="am-form-group">
                      <div class="am-u-sm-9 am-u-sm-offset-3">
                          <div class="yz_ts"></div>
                      </div>
                  </div>
                  <div class="am-form-group">
                      <label class="am-u-sm-3 am-form-label">输入新密码 :</label>
                      <div class="am-u-sm-9">
                          <input type="password" name="password" placeholder="输入新密码" class="psw1">
                      </div>
                  </div>
                  <div class="am-form-group">
                      <label class="am-u-sm-3 am-form-label">确认新密码 :</label>
                      <div class="am-u-sm-9">
                          <input type="password" placeholder="确认新密码" class="psw2">
                      </div>
                  </div>
                  <div class="am-form-group">
                      <div class="am-u-sm-9 am-u-sm-offset-3">
                          <button type="submit" class="am-btn am-btn-danger am-radius">完成</button>
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
<script src="skin/js/js.KinerCode.js"></script>
<!-- <script type="text/javascript" src="skin/js/login.js"></script> -->
<script type="text/javascript">
      var code;
      $("#sub").bind("click",function(){
            var ts = $(".for_step1").find(".yz_ts");
            var phone = $("#phone").val();
            if(phone == ''){
                ts.html("<div>手机号不能为空</div>");
            }else if(!(/^1[3|4|5|6|7|8|9][0-9]\d{4,8}$/.test(phone))){
                ts.html("<div>请输入正确的手机号</div>");
            } else{
              if(c.validate()){
                  $.ajax({
                    type: 'post',
                    url: '<?=site_url("postsend/send")?>',
                    data: 'phone='+ phone,
                    success: function(data){
                      console.log(data);
                      code = parseInt(data);
                    }
                  })
                    ts.children().remove();
                    $(".for_step2").css("display","block").siblings().css("display","none");
                    $(".forget_step img").prop("src","skin/img/forget-step2_03.png");
              }else{
                    ts.html("<div>验证码错误</div>");
              }
            } 
            // }
      //       else{
            return false;
        });
      

    function step2(){
      var ts = $(".for_step2").find(".yz_ts");
      if($("#phoneCode").val() == ''){
          ts.html("<div>验证码不能为空</div>");
      }else if($("#phoneCode").val() != code){
          ts.html("<div>验证码错误</div>");
      }
      else{
          ts.children().remove();
          $(".for_step3").css("display","block").siblings().css("display","none");
          $(".forget_step img").prop("src","skin/img/forget-step3_03.png");
      }

    }

    $(".forget_form form").bind("submit",function(){
      var ts = $(".for_step3").find(".yz_ts");
      var psw1 = $(".psw1");
      var psw2 = $(".psw2");
      if(psw1.val() == ''){
          ts.html("<div>密码不能为空</div>");
      }else if(psw2.val() != psw1.val()){
          ts.html("<div>两次密码不一致</div>");
      }else{
        ts.children().remove();
        return true;
      }
      return false;
    });
// 验证码
    var inp = document.getElementById('inputCode');
    var code = document.getElementById('code');
    var submit = document.getElementById('sub');
    document.getElementById('hyz').onclick = function(){
        c.init();
    }


    //======================插件引用主体
    var c = new KinerCode({
        len: 4,//需要产生的验证码长度
//        chars: ["1+2","3+15","6*8","8/4","22-15"],//问题模式:指定产生验证码的词典，若不给或数组长度为0则试用默认字典
        chars: [
            1, 2, 3, 4, 5, 6, 7, 8, 9, 0,
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
        ],//经典模式:指定产生验证码的词典，若不给或数组长度为0则试用默认字典
        question: false,//若给定词典为算数题，则此项必须选择true,程序将自动计算出结果进行校验【若选择此项，则可不配置len属性】,若选择经典模式，必须选择false
        copy: false,//是否允许复制产生的验证码
        bgColor: "gray",//背景颜色[与背景图任选其一设置]
        // bgImg: "skin/img/code.png",//若选择背景图片，则背景颜色失效
        randomBg: false,//若选true则采用随机背景颜色，此时设置的bgImg和bgColor将失效
        inputArea: inp,//输入验证码的input对象绑定【 HTMLInputElement 】
        codeArea: code,//验证码放置的区域【HTMLDivElement 】
        click2refresh: true,//是否点击验证码刷新验证码
        false2refresh: true,//在填错验证码后是否刷新验证码
        validateObj: submit,//触发验证的对象，若不指定则默认为已绑定的输入框inputArea
        // validateEven: "blur",//触发验证的方法名，如click，blur等 
        validateFn: function (result, code) {//验证回调函数
            if (result) {
                $(".for_step1").find(".yz_ts div").remove();
            } else {
                if (this.opt.question) {
                    $(".for_step1").find(".yz_ts").html("<div>请输入验证码</div>");
                } else {
                    $(".for_step1").find(".yz_ts").html("<div>验证码错误</div>");
                }
            }
        }
    });

</script>
</body>
</html>