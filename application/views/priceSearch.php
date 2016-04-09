<body>
  <style>
  .am-selected {
  background-color: #F85554;
  }
  .am-selected button {
  color: white;
  }
  </style>
  <header data-am-widget="header" class="am-header am-header-default topform">
    <div class="am-header-left am-header-nav">
      <a href="javascript:" onclick="javascript:history.go(-1);">
        <i class="am-header-icon am-icon-chevron-left"></i>
      </a>
    </div>
    <h1 class="am-header-title">
    菜市场
    </h1>
  </header>
  <form action="" method="" class="pform">
    <br>
         
    <div class="am-u-sm-4 sbnt">
      <select data-am-selected="{maxHeight: 100}">
      <?php foreach($cai as $val):?>
        <option value="<?=$val->foodmarketid;?>"><?=$val->name;?></option>
      <?php endforeach;?>
      </select>
    </div>
    <div class="am-u-sm-4 sbnt">
      <select data-am-selected="{maxHeight: 100}">
        <option value="b">蔬菜</option>
        <option value="o">肉类</option>
        <option value="m">鱼类</option>
        <option value="phone">家禽</option>
        <option value="im">海鲜</option>
      </select>
    </div>
    <div class="am-u-sm-4 sbnt">
      <select id="adate" class="date" data-am-selected="{maxHeight: 100}">
      
      </select>
    </div>
    <br>
  </form>
  <table class="am-table am-shadow pta">
    <thead>
      <tr>
        <th>菜名</th>
        <th>重量</th>
        <th>价格</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><a href="<?php echo site_url('home/price')?>">西兰花</a></td>
        <td>1kg</td>
        <td>5.5</td>
      </tr>
      <tr>
        <td><a href="<?php echo site_url('home/price')?>">小青菜</a></td>
        <td>1kg</td>
        <td>8</td>
      </tr>
      <tr>
        <td><a href="<?php echo site_url('home/price')?>">瘦肉</a></td>
        <td>1kg</td>
        <td>30</td>
      </tr>
      
    </tbody>
  </table>
</body>
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
 })
</script>
</html>