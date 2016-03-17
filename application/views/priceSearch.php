<body> 
<style>
    .am-selected { 
    background-color: #F85554;
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
  <option value="b">百家菜市场</option>
  <option value="o">中和菜市场</option>
  <option value="m">伊藤</option>
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
 <select class="date" data-am-selected="{maxHeight: 100}">
   <option value="2016-3-16">2016-3-16</option>
  <option value="2016-3-15">2016-3-15</option>
  <option value="2016-3-14">2016-3-14</option>
  <option value="2016-3-13">2016-3-13</option>
  <option value="2016-3-12">2016-3-12</option>
  <script>
    $(function(){
      document.write('<option value="">'++'</option>')
    })
  </script> 
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
            <td>西兰花</td>
            <td>1kg</td>
            <td>5.5</td>
        </tr>
        <tr>
            <td>小青菜</td>
            <td>1kg</td>
            <td>8</td>
        </tr>
        <tr>
            <td>瘦肉</td>
            <td>1kg</td>
            <td>30</td>
        </tr>
       
    </tbody>
</table>

</body>
    <script src="skin/js/jquery.min.js"></script>
    <script src="skin/js/amazeui.min.js"></script>
</html>
