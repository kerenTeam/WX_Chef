<body>
  <header data-am-widget="header" class="am-header am-header-default topform">
    <div class="am-header-left am-header-nav">
      <a href="javascript:" onclick="javascript:history.go(-1);">
        <i class="am-header-icon am-icon-chevron-left"></i>
      </a>
    </div>
    <h1 class="am-header-title">
    新增地址
    </h1>
    
  </header>
  <br>
  <div class="am-g ammake">
    <div class="am-u-md-8 am-u-sm-centered">
      <form class="am-form afcheck" action="<?=site_url('home/addressAdd2');?>" method="post">
        <fieldset class="am-form-set afiel">
          <input type="text" placeholder="请填写您的姓名" class="uname" name='name' required>
          <input type="text" placeholder="请输入详细送餐地址" class="uaddress" name='Address' required>
<<<<<<< HEAD
          <input type="text" placeholder="请填写能够联系到您的电话号码" name='GoodsPhone' class="uphone">
          <input type="text" placeholder="备用联系电话（选填）" name='SparePhone'> 
          <input type="radio" placeholder="是否默认？" name='IsDefault' value="1">是否默认该地址为收货地址？
=======
          <input type="text" placeholder="请填写能够联系到您的电话号码" name='userphone' class="uphone">
          <input type="text" placeholder="备用联系电话（选填）">
          <label class="am-checkbox am-success am-u-sm-6">
            设为默认 <input type="checkbox" name="" value="" data-am-ucheck>
          </label>
>>>>>>> 038864b746b856045341aa64b77fa0fe7f1154f2
        </fieldset>
        <button type="submit" class="am-btn am-btn-block bred" disabled>保存</button>
      </form>
    </div>
  </div>
</body>
 <script src="skin/js/jquery.min.js"></script>
 <script src="skin/js/amazeui.min.js"></script>
 <script>
   $(function(){
      
      $('input[type="text"]').keyup(function() { 
        var name = $('.uname').val();
        var address = $('.uaddress').val();
        var phone = $('.uphone').val();
         if(name!='' && address!='' && phone!=''){
            $('.bred').removeAttr('disabled')
      }else{
           $('.bred').attr('disabled','disable');
      } 
      });
  
      $('.afcheck').bind('submit',function() { 
        
        if(!(/^1((3|4|5|8|7){1}\d{1}|70)\d{8}$/.test($('.uphone').val()))){
          alert("请输入正确电话号码");
          $('.uphone').focus();
          return false;
        }
      });
   })
 </script>
</html>