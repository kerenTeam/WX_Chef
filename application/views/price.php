<body class="bred">
  <script src="skin/js/echarts.simple.min.js"></script>
  <header data-am-widget="header" class="am-header am-header-default topform">
    <div class="am-header-left am-header-nav">
      <a href="javascript:" onclick="javascript:history.go(-1);">
        <i class="am-header-icon am-icon-chevron-left"></i>
      </a>
    </div>
    <h1 class="am-header-title">
    西兰花
    </h1>
    
  </header>
 <p class="am-text-center am-text-lg mp">三月份</p>
 <div class="am-text-center am-u-sm-6">最高菜价：<i class="am-icon-cny"></i>5.5</div>
 <div class="am-text-center am-u-sm-6">最低菜价：<i class="am-icon-cny"></i>4.8</div>
 <div id="main" style="height: 400px"></div>
 
    <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('main'));

        // 指定图表的配置项和数据
       option = {
    title: {
        text: '价格'
    },
    tooltip: {
        trigger: 'axis'
    },

    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },

    xAxis: {
        type: 'category',
        boundaryGap: false,
        data: ['15日','16日','17日','18日','19日','20日','21日']
    },
    yAxis: {
        type: 'value'
    },
    series: [ 
        {
            name:'西兰花',
            type:'line',
            stack: '总量',
            data:[5, 3, 4, 5, 5.5, 6.8, 9]
        }
    ]


};


   // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>  
 <p class="am-text-center am-text-lg">今日价格：<i class="am-icon-cny"></i>5</p>
</body>
<style>
  #main{
    color:white;
        width: 100%!important;
    -webkit-tap-highlight-color: transparent;
    -webkit-user-select: none;
    background-color: transparent;
    overflow-y: hidden!important;
    overflow-x: scroll!important;
  }

</style>
</html>