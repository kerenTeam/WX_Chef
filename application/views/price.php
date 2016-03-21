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
 <script src="skin/js/Chart.js"></script>

<canvas id="myChart" height="300"></canvas>

<script>
    //曲线图
    var data = {
        labels: ["15", "16", "17", "18", "19", "20", "21"],
        datasets: [
            {//后面的曲线
                fillColor: "rgba(220,220,220,0.1)",//背景填充色，最后一个是透明度
                strokeColor: "rgba(220,220,220,1)",//曲线颜色
                pointColor: "rgba(220,220,220,1)",//点中心颜色
                pointStrokeColor: "#fff",//点边框颜色
                data: [3.6, 5.0, 4.9, 5.1, 5.1, 5.5, 4.0]//图表数据
            } 
        ]
    }
    var options = {//图表参数

        //Boolean - If we show the scale above the chart data
        scaleOverlay : false,

        //是否使用自定义格式
        scaleOverride : false,

        //** 当scaleOverride为true时必须要写下面三个值并且只有为true时下面三个值可用，默认都为NULL **
        //图表纵轴行数
        scaleSteps : 10,
        //图表纵轴单位长度
        scaleStepWidth : 1,
        //图表纵轴最小值
        scaleStartValue : 0,

        //坐标轴颜色
        scaleLineColor : "rgba(255,255,255,0.1)",

        //坐标轴宽度
        scaleLineWidth : 1,

        //是否显示纵轴数值标记
        scaleShowLabels : true,

        //Interpolated JS string - can access value
        scaleLabel : "<%=value%>",

        //坐标轴字体
        scaleFontFamily : "'微软雅黑'",

        //坐标轴文字大小，单位为像素
        scaleFontSize : 14,

        //坐标轴字体的粗细,可能的值为normal、bold、bolder、lighter或100-900
        scaleFontStyle : "normal",

        //坐标轴文字颜色
        scaleFontColor : "white",

        //是否显示网格线
        scaleShowGridLines : false,

        //网格线颜色
        scaleGridLineColor : "rgba(0,0,0,0)",

        //网格线宽度
        scaleGridLineWidth : 0,

        //连接线是否为曲线
        bezierCurve : true,

        //是否在线上显示点
        pointDot : true,

        //点半径，单位像素
        pointDotRadius : 3,

        //点外的环半径，单位像素
        pointDotStrokeWidth : 1,

        //Boolean - Whether to show a stroke for datasets
        datasetStroke : true,

        //线宽，单位像素
        datasetStrokeWidth : 2,

        //是否填充颜色
        datasetFill : true,

        //是否显示动画
        animation : true,

        //动画分多少步完成
        animationSteps : 60,

        //动画过度效果，具体值看Chart.js第494行
        animationEasing : "easeOutQuart",

        //动画进行中
        //onAnimationProgress: function(){},

        //动画结束后
        onAnimationComplete : null//function(){}
    };
    //Get the context of the canvas element we want to select
    var ctx = document.getElementById("myChart").getContext("2d");
    new Chart(ctx).Line(data,options);
</script>

 <!-- <div id="main" style="height: 400px"></div>
 
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
    </script>  -->
 <p class="am-text-center am-text-lg">今日价格：<i class="am-icon-cny"></i>5</p>
</body>
<style>
 
canvas{
    margin: 80px auto 30px auto;
    display: block;
}
@media only screen and (max-width: 414px) {
    canvas{
      width:370px!important;  
    }
}
@media only screen and (max-width: 375px) {
    canvas{
      width:340px!important;  
    }
}
@media only screen and (max-width: 320px) {
      canvas{
      width:300px!important;  
    } 
}
</style> 
</html>