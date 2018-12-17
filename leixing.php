<!DOCTYPE html>
<html style="height: 100%">
   <head>
       <meta charset="utf-8">
   </head>
   <body style="height: 100%; margin: 0">
       <div id="container" style="height: 100%"></div>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-gl/echarts-gl.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-stat/ecStat.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/china.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/world.js"></script>
       <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ZUONbpqGBsYGXNIYHicvbAbM"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/simplex.js"></script>
       <script type="text/javascript">
var dom = document.getElementById("container");
var myChart = echarts.init(dom);
var app = {};option = null;
<?php
        $value =1;
        $value2 =2;
	    $data =array();
	    $data2 =array();
        $con=mysqli_connect("localhost","root","root"); 
        if (!$con) { 
          die('数据库连接失败'.$mysql_error()); 
       } 
        mysqli_select_db($con,"user_info"); 
	    $result = mysqli_query($con,"select biketype from point where biketype ='{$value}';");
	    $result2 = mysqli_query($con,"select biketype from point where biketype ='{$value2}';");
	    while ($row=mysqli_fetch_array($result,MYSQLI_NUM)){
	    $data[]=$row;
	   }
	   	while ($row2=mysqli_fetch_array($result2,MYSQLI_NUM)){
	    $data2[]=$row2;
	   }
	     $count1 = count($data);
	    $count2 = count($data2);
		//echo "<script> var data=\"$count1\"; var data2=\"$count2\";</script>";
?>


	var data2 =eval("<?php echo $count2;?>");
	var data =eval("<?php echo $count1;?>");
option = {
    title : {
        text: '两种单车类型数量分布',
        subtext: '摩拜单车数据支持',
        x:'center'
    },	toolbox:{
	    show:true,
			y: 'top',
			feature:{
			    dataView : {
        show : true,
        title : '数据视图',
        readOnly: false,
        lang: ['数据视图', '关闭', '刷新']
    },
			    restore : {
        show : true,
        title : '还原'
    },
			 saveAsImage:{show:true,
				 title:'保存为图片',
				 type:'png',
				 lang:['点击保存']}
		}
	},
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
		itemWidth:80,
	    itemHeight:25,
        orient: 'vertical',
        left: 'left',
        data: ['A类经典版','B类轻骑版']
    },
    series : [
        {
            name: '单车数量',
            type: 'pie',
            radius : '55%',
            center: ['50%', '60%'],
            data:[
                {value:data2, name:'A类经典版'},
                {value:data, name:'B类轻骑版'}
            ],
            itemStyle: {
                emphasis: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            }
        }
    ]
};

if (option && typeof option === "object") {
    myChart.setOption(option, true);
}
       </script>
   </body>
</html>