<style>
  .am-selected{
    width:150px!important;
   
  }
  .am-selected span{
    text-align:right;
  }
  #inputfile{
        margin-top: -2rem;
  }
</style>
<link rel="stylesheet" href="skin/css/login.css">
<body>
  <form action="<?=site_url('home/userdatum');?>" method="post" enctype="multipart/form-data" >
    <header data-am-widget="header" class="am-header am-header-default topform">
      <div class="am-header-left am-header-nav">
        <a href="javascript:" onclick="javascript:history.go(-1);">
          <i class="am-header-icon am-icon-chevron-left"></i>
        </a>
      </div>
      <h1 class="am-header-title">
      <?=$user[0]['username'];?>
      </h1>
      <div class="am-header-right am-header-nav">
      <input type="hidden" name='UserId' value="<?=$user[0]['userid'];?>"/>
        <input type="submit" class="setf" value="确定">
      </div>
    </header>
    <div class="am-list-news-bd">
      <ul class="am-list userS">
           <li class="am-g am-list-item-dated">
          <div class="am-u-sm-4">头像</div>
          <?php if($user[0]['userimage'] == ''):?>
            <div class="am-u-sm-8" id="feedback"> 
                <!-- <div class="wx_type_img">
                  <input type="file" id="imgUpload" name="UserImage" accept="image/jpeg,image/jpg,image/png,image/gif" onchange="previewImage(this)" class="upload-add">
                  
                  <div id="preview"> <img style="border-radius: 50%;" src="skin/img/vip.png" alt="选择图片"> </div>
                </div>  -->
                 <img src="skin/img/vip.png" onclick="getElementById('inputfile').click()" title="点击添加图片" alt="点击添加图片">
                <input type="file" name="image" style="opacity:0;filter:alpha(opacity=0);" id="inputfile"/>
            </div>
          <?php else:?>
             <div class="am-u-sm-8" id="feedback"> <!-- previewImage(this) -->
             <!-- <div class="wx_type_img">
                <input type="file" id="imgUpload" name="UserImage" onchange="previewImage(this)" class="upload-add">
                 
                <div id="preview"> 
                <input type="hidden" name='UserImage' value="<?php echo $user[0]['userimage'];?>" />
                <img style="border-radius: 50%;" src="<?php echo IP.$user[0]['userimage'];?>" alt="选择图片"> </div>
              </div>  -->
               <input type="hidden" name='UserImage' value="<?php echo $user[0]['userimage'];?>" />
                <img src="<?php echo IP.$user[0]['userimage'];?>" onclick="getElementById('inputfile').click()" title="点击添加图片" alt="点击添加图片">
                <input type="file" name="image" style="opacity:0;filter:alpha(opacity=0);" id="inputfile"/>
            </div>
          <?php endif;?>
        </li>
        <li class="am-g am-list-item-dated">
          <div class="am-u-sm-4">昵称</div>
          <div class="am-u-sm-8">
            <input type="text" value="<?=$user[0]['username'];?>" placeholder="未填写" name='UserName'>
          </div>
        </li>
        <li class="am-g am-list-item-dated">
          <div class="am-u-sm-4">口味</div>
          <div class="am-u-sm-8">
            <input type="text" value="<?=$user[0]['personaltaste']?>" placeholder="未填写" name='PersonalTaste'>
          </div>
        </li>
        <li class="am-g am-list-item-dated">
          <div class="am-u-sm-4">喜爱菜系</div>
          <div class="am-u-sm-8">
            <?php header("Content-Type:text/html;charset=utf-8"); echo urldecode($user[0]['likecuisine']);?>
            <select multiple data-am-selected class="vegtype" name='LikeCuisine[]'>
              <option value="粤菜">粤菜</option>
              <option value="川菜">川菜</option>
              <option value="鲁菜">鲁菜</option>
              <option value="湘菜">湘菜</option>
            </select>
          </div>
          <style>
          .am-selected-list li{
            line-height:2rem;
          }
          </style>
        </li>
     
      </ul>
    </div>

  </form>
  <div class="shade">
  <div> <span class="am-icon-meh-o"></span>
    <p>请输入正确的手机号码</p>
  </div>
</div>
    <!-- footer -->
    <div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default nav-bot">
      <ul class="am-navbar-nav am-cf am-avg-sm-4 am-shadow">
        <li >
      <a href="<?php echo site_url('home/index')?>">
        <span class=""><img src="skin/img/home1.png" alt=""></span>
        <span class="am-navbar-label">首页</span>
      </a>
    </li>
    <li>
      <a href="<?php echo site_url('home/cart')?>">
        <span class=""><img src="skin/img/clz.png" alt=""></span>
        <span class="am-navbar-label">菜篮子</span>
      </a>
    </li>
    <li>
      <a href="<?php echo site_url('home/search')?>">
        <span class=""><img src="skin/img/ss.png" alt=""></span>
        <span class="am-navbar-label">搜索</span>
      </a>
    </li>
    <li>
      <a href="<?php echo site_url('home/ucent')?>" class="active">
        <span class=""><img src="skin/img/gr2.png" alt=""></span>
        <span class="am-navbar-label">我的</span>
      </a>
    </li>
      </ul>
    </div>
</body>
<script src="skin/js/jquery.min.js"></script>
<script src="skin/js/amazeui.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#inputfile").change(function(){
        //创建FormData对象
        var data = new FormData();
        //为FormData对象添加数据
        //
        $.each($('#inputfile')[0].files, function(i, file) {
            data.append('upload_file', file);
            
        });
        $.ajax({
            url:'submit_form_process.php',
            type:'POST',
            data:data,
            cache: false,
            contentType: false,    //不可缺
            processData: false,    //不可缺
            success:function(data){
                console.log(data);
                data = $(data).html();
                if($("#feedback").children('img').length == 0) $("#feedback").append(data.replace(/&lt;/g,'<').replace(/&gt;/g,'>'));
                else $("#feedback").children('img').eq(0).before(data.replace(/&lt;/g,'<').replace(/&gt;/g,'>'));
            }
        });
    });
});
</script>
</html>