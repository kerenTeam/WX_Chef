function previewImage(file)
        {
   //图片文件判断
        var name=file.value;
        var fileName = name.substring(name.lastIndexOf(".")+1).toLowerCase();
        if(fileName !="jpg" && fileName !="jpeg" && fileName !="png" && fileName !="dwg" && fileName !="gif" ){
          // alert("请选择图片格式文件上传(jpg,png,gif,dwg,gif等)！");
          shade('am-icon-meh-o','请选择图片格式文件上传(jpg,png,gif,dwg,gif等)！');
            file.value="";
            return
        }

        var imgs = new Image();
      
        imgs.src = window.URL.createObjectURL(file.files[0]);
        imgs.onload = function(){
       if(imgs.width>500 || imgs.height>500){
        // alert("上传图片的宽或高不能超过500px");
        shade('am-icon-meh-o','上传图片的宽或高不能超过500px');
       }else{
            document.getElementsByTagName('img')[0].src = window.URL.createObjectURL(file.files[0]);
            
         }
        }
        function shade(icon,cue){
        $('.shade').addClass('up');
        setTimeout(function(){$('.shade').removeClass('up');},2000);
        $('.shade div').remove();
        $('.shade').append('<div><span class="'+icon+'"></span><p>'+cue+'</p></div>');
    } 
		}