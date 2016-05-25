<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/lib/font-awesome/css/font-awesome.min.css">
    <!-- e8 style -->
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/css/common.css">
    <link rel="stylesheet" href="/dygzz/Public/e8admin/default/css/main.css">
    <script src="/dygzz/Public/e8admin/default/lib/echarts/esl.js" type="text/javascript"></script>
</head>

<body>

    <div class="topbar">
        <!-- 面包屑 -->
        <div class="topbar-mbx">
	<ul class="list-inline">
		<li>
			<a class="color-gray" href="/dygzz/admin.php/Center/index">
			<i class="fa fa-home fa-lg"></i>
			控制中心
			</a>
		</li>
	</ul> 
</div><!-- /.mbx -->
    </div><!-- /.topbar -->

    <div class="page-content">

        <div class="page-header col-sm-12">
            <h1>控制中心</h1>
        </div>

        <div class="col-sm-12"> 
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="active"><a href="#home" role="tab" data-toggle="tab">网站访问量统计</a></li>
              <li><a href="#profile" role="tab" data-toggle="tab">服务器配置信息</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active" id="home">
                    <div id="main" style="height: 400px; width:100%; border:1px solid #CCC;">
                    </div>
                    <div class="" style="width:100%; text-align:center; padding:5px 0;">
                        <button class="btn btn-default" id="last">上一月</button>
                        <button class="btn btn-default" id="now">本月</button>
                        <button class="btn btn-default" id="next">下一月</button>
                    </div>
              </div>
              <div class="tab-pane" id="profile">
                <table class="table table-form">
                    <tr><td>主机名：<?php echo ($serverinfo['pc']); ?></td></tr>
                    <tr><td>服务器操作系统：<?php echo ($serverinfo['osname']); ?></td></tr>
                    <tr><td>服务器语言：<?php echo ($serverinfo['language']); ?></td></tr>
                    <tr><td>PHP服务器：<?php echo ($serverinfo['os']); ?></td></tr>
                    <tr><td>服务器PHP版本：<?php echo ($serverinfo['php_version']); ?></td></tr>
                    <tr><td>服务器Mysql版本：<?php echo ($serverinfo['mysql_version']); ?></td></tr>
                    <tr><td>服务器时间：<?php echo ($serverinfo['time']); ?></td></tr>
                    <tr><td>服务器端口：<?php echo ($serverinfo['port']); ?></td></tr>
                    <tr><td>MySQL已使用大小：<?php echo ($serverinfo['mysql_size']); ?></td></tr>
                    <tr><td>服务器最大上传文件大小：<?php echo ($serverinfo['max_upload']); ?></td></tr>
                    <tr><td>服务器最大脚本执行时间：<?php echo ($serverinfo['max_ex_time']); ?></td></tr>
                </table>
              </div>
            </div>
        </div>
    </div><!-- /.page-content -->

    <!-- jQuery文件 -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="/dygzz/Public/e8admin/default/lib/bootstrap/bootstrap.min.js"></script>

    <script type="text/javascript" language="javascript">
        var PUBLIC = "/dygzz/Public";
        var APP = "/dygzz/admin.php";
        var myChart;
        var year = <?php echo ($y); ?>;
        var mouth = <?php echo ($m); ?>;
        var dataNow = new Array();
        var dataLast = new Array();

        <?php if(is_array($visitCount["now"])): foreach($visitCount["now"] as $k=>$count): ?>var c = <?php echo ($count); ?>;
            dataNow.push(c);<?php endforeach; endif; ?>

        <?php if(is_array($visitCount["last"])): foreach($visitCount["last"] as $key=>$count_): ?>var cc = <?php echo ($count_); ?>;
            dataLast.push(cc);<?php endforeach; endif; ?>

        // 按需加载
        // Step:3 conifg ECharts's path, link to echarts.js from current page.
        // Step:3 为模块加载器配置echarts的路径，从当前页面链接到echarts.js，定义所需图表路径
        require.config({
            paths: {
                echarts: PUBLIC+'/e8admin/default/lib/echarts/echarts' //echarts.js的路径
            }
        });
        // Step:4 require echarts and use it in the callback.
        // Step:4 动态加载echarts然后在回调函数中开始使用，注意保持按需加载结构定义图表路径
        require(
        [
            'echarts',
            'echarts/chart/line'
        ],
        //回调函数
        DrawEChart
        );

        //渲染ECharts图表
        function DrawEChart(ec) {
            //图表渲染的容器对象
            var chartContainer = document.getElementById("main");
            //加载图表
            myChart = ec.init(chartContainer);
            option = {
                title : {
                    text: '本月和上月网站访问量统计图表',
                    subtext: '本月和上月网站访问量统计图表'
                },
                tooltip : {
                    trigger: 'axis'
                },
                legend: {
                    data:['本月访问人数','上月访问人数']
                },
                toolbox: {
                    show : true,
                    feature : {
                        mark : {show: true},
                        dataView : {show: true, readOnly: false},
                        magicType : {show: true, type: ['line', 'bar']},
                        restore : {show: true},
                        saveAsImage : {show: true}
                    }
                },
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        boundaryGap : false,
                        data : ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31']
                    }
                ],
                yAxis : [
                    {
                        type : 'value',
                        axisLabel : {
                            formatter: '{value} 人'
                        }
                    }
                ],
                series : [
                    {
                        name:'本月访问人数',
                        type:'line',
                        data:dataNow,
                        markPoint : {
                            data : [
                                {type : 'max', name: '最大值'},
                                {type : 'min', name: '最小值'}
                            ]
                        },
                        markLine : {
                            data : [
                                {type : 'average', name: '平均值'}
                            ]
                        }
                    },
                    {
                        name:'上月访问人数',
                        type:'line',
                        data:dataLast,
                        markPoint : {
                            data : [
                                {type : 'max', name: '最大值'},
                                {type : 'min', name: '最小值'}
                            ]
                        },
                        markLine : {
                            data : [
                                {type : 'average', name : '平均值'}
                            ]
                        }
                    }
                ]
            };
            myChart.setOption(option);
        }

        //下一个月数据
        $("#next").click(function(){

            $.ajax({
                    type: "get",
                    url: APP + "/Center/next/y/" + year + "/m/" + mouth ,
                    dataType: "json",
                    success: function(data){
                        if (data.status == 1) {
                            var dataN = data.dataN;
                            var dataL = data.dataL;
                            year = data.y;
                            mouth = data.m;
                            setChartData(dataN,dataL);
                        } else {
                            alert("请求数据失败!");
                        }
                    },
                    error: function(request){
                        alert("请求数据失败,请联系维护人员!");
                    }
            });
        });


        //上一个月数据
        $("#last").click(function(){
            $.ajax({
                    type: "get",
                    url: APP + "/Center/last/y/" + year + "/m/" + mouth ,
                    dataType: "json",
                    success: function(data){
                        if (data.status == 1) {
                            var dataN = data.dataN;
                            var dataL = data.dataL;
                            year = data.y;
                            mouth = data.m;
                            setChartData(dataN,dataL);
                        } else {
                            alert("请求数据失败!");
                        }
                    },
                    error: function(request){
                        alert("请求数据失败,请联系维护人员!");
                    }
            });
        });

        //当前月数据
        $("#now").click(function(){
            $.ajax({
                    type: "get",
                    url: APP + "/Center/now",
                    dataType: "json",
                    success: function(data){
                        if (data.status == 1) {
                            var dataN = data.dataN;
                            var dataL = data.dataL;
                            year = data.y;
                            mouth = data.m;
                            setChartData(dataN,dataL);
                        } else {
                            alert("请求数据失败!");
                        }
                    },
                    error: function(request){
                        alert("请求数据失败,请联系维护人员!");
                    }
            });
        });


        //重新渲染图表
        function setChartData(dataN,dataL) {
            myChart.clear();
            option = {
                title : {
                    text: '本月和上月网站访问量统计图表',
                    subtext: '本月和上月网站访问量统计图表'
                },
                tooltip : {
                    trigger: 'axis'
                },
                legend: {
                    data:['本月访问人数','上月访问人数']
                },
                toolbox: {
                    show : true,
                    feature : {
                        mark : {show: true},
                        dataView : {show: true, readOnly: false},
                        magicType : {show: true, type: ['line', 'bar']},
                        restore : {show: true},
                        saveAsImage : {show: true}
                    }
                },
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        boundaryGap : false,
                        data : ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31']
                    }
                ],
                yAxis : [
                    {
                        type : 'value',
                        axisLabel : {
                            formatter: '{value} 人'
                        }
                    }
                ],
                series : [
                    {
                        name:'本月访问人数',
                        type:'line',
                        data:dataN,
                        markPoint : {
                            data : [
                                {type : 'max', name: '最大值'},
                                {type : 'min', name: '最小值'}
                            ]
                        },
                        markLine : {
                            data : [
                                {type : 'average', name: '平均值'}
                            ]
                        }
                    },
                    {
                        name:'上月访问人数',
                        type:'line',
                        data:dataL,
                        markPoint : {
                            data : [
                                {type : 'max', name: '最大值'},
                                {type : 'min', name: '最小值'}
                            ]
                        },
                        markLine : {
                            data : [
                                {type : 'average', name : '平均值'}
                            ]
                        }
                    }
                ]
            };
            myChart.setOption(option);
        }

    </script>

</body>
</html>