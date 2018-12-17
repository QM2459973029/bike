<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=7loH0l4p9DrNMsX5EgtcGGdkm7ptVvTr"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/library/Heatmap/2.0/src/Heatmap_min.js"></script>
    <script type="text/javascript" src="heat.js"></script>
    <title>热力图功能示例</title>
    <style type="text/css">
		ul,li{list-style: none;margin:0;padding:0;float:left;}
		html{height:100%}
		body{height:100%;margin:0px;padding:0px;font-family:"微软雅黑";}
		#container{height:100%;width:100%;}
		button {
margin-top:5px;
margin-left:15px;
	display: inline-block;
	outline: none;
	cursor: pointer;
	text-align: center;
	text-decoration: none;
	font: 14px/100% Arial, Helvetica, sans-serif;
	padding: .5em 2em .55em;
	text-shadow: 0 1px 1px rgba(0,0,0,.3);
	-webkit-border-radius: .5em; 
	-moz-border-radius: .5em;
	border-radius: .5em;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
	box-shadow: 0 1px 2px rgba(0,0,0,.2);
}
button:hover {
	text-decoration: none;
}
button:active {
	position: relative;
	top: 1px;
}
    </style>
	<script type="text/javascript">
	    function openHeatmap(){
        heatmapOverlay.show();
    }
	</script>
</head>
<body onload="openHeatmap()">
	<div id="container" style="height:800px;"></div>
	  <div id="time">
  <button onclick="heat(data)">0时刻</button>
  <button onclick="heat(data1)">2时刻</button>
  <button onclick="heat(data2)">4时刻</button>
  <button onclick="heat(data3)">6时刻</button>
  <button onclick="heat(data4)">8时刻</button>
  <button onclick="heat(data5)">10时刻</button>
  <button onclick="heat(data6)">12时刻</button>
  <button onclick="heat(data7)">14时刻</button>
  <button onclick="heat(data8)">16时刻</button>
  <button onclick="heat(data9)">18时刻</button>
  <button onclick="heat(data10)">20时刻</button>
  <button onclick="heat(data11)">22时刻</button>
  <a style="font-size:8px;margin-left:15px;">[注:]1.默认时刻为0时刻2.数据量较大时加载缓慢</a>
  </div>
</body>
</html>
<script type="text/javascript">
<?php
        $time ="2017-05-10 0:00:00";//设置数据点时间
        $time1 ="2017-05-10 2:00:00";//设置数据点时间
        $time2 ="2017-05-10 4:00:00";//设置数据点时间
        $time3 ="2017-05-10 6:00:00";//设置数据点时间
        $time4 ="2017-05-10 8:00:00";//设置数据点时间
        $time5 ="2017-05-10 10:00:00";//设置数据点时间
        $time6 ="2017-05-10 12:00:00";//设置数据点时间
        $time7 ="2017-05-10 14:00:00";//设置数据点时间
        $time8 ="2017-05-10 16:00:00";//设置数据点时间
        $time9 ="2017-05-10 18:00:00";//设置数据点时间
        $time10 ="2017-05-10 20:00:00";//设置数据点时间
        $time11 ="2017-05-10 22:00:00";//设置数据点时间
	    $data =array();
	    $data1 =array();
	    $data2 =array();
	    $data3=array();
	    $data4 =array();
	    $data5 =array();
	    $data6 =array();
	    $data7 =array();
	    $data8 =array();
	    $data9 =array();
	    $data10 =array();
	    $data11 =array();
        $con=mysqli_connect("localhost","root","root"); 
        if (!$con) { 
          die('数据库连接失败'.$mysql_error()); 
       } 
        mysqli_select_db($con,"user_info"); 
	    $result = mysqli_query($con,"select STARTX,STARTY from point where startTime ='{$time}';");
	    $result1 = mysqli_query($con,"select STARTX,STARTY from point where startTime ='{$time1}';");
	    $result2 = mysqli_query($con,"select STARTX,STARTY from point where startTime ='{$time2}';");
	    $result3 = mysqli_query($con,"select STARTX,STARTY from point where startTime ='{$time3}';");
	    $result4 = mysqli_query($con,"select STARTX,STARTY from point where startTime ='{$time4}';");
	    $result5 = mysqli_query($con,"select STARTX,STARTY from point where startTime ='{$time5}';");
	    $result6 = mysqli_query($con,"select STARTX,STARTY from point where startTime ='{$time6}';");
	    $result7 = mysqli_query($con,"select STARTX,STARTY from point where startTime ='{$time7}';");
	    $result8 = mysqli_query($con,"select STARTX,STARTY from point where startTime ='{$time8}';");
	    $result9 = mysqli_query($con,"select STARTX,STARTY from point where startTime ='{$time9}';");
	    $result10 = mysqli_query($con,"select STARTX,STARTY from point where startTime ='{$time10}';");
	    $result11= mysqli_query($con,"select STARTX,STARTY from point where startTime ='{$time11}';");
	    while ($row=mysqli_fetch_array($result,MYSQL_NUM)){
	    $data[]=$row;
	   }	    while ($row1=mysqli_fetch_array($result1,MYSQL_NUM)){
	    $data1[]=$row1;
	   }  while ($row1=mysqli_fetch_array($result2,MYSQL_NUM)){
	    $data2[]=$row1;
	   }  while ($row1=mysqli_fetch_array($result3,MYSQL_NUM)){
	    $data3[]=$row1;
	   }  while ($row1=mysqli_fetch_array($result4,MYSQL_NUM)){
	    $data4[]=$row1;
	   }  while ($row1=mysqli_fetch_array($result5,MYSQL_NUM)){
	    $data5[]=$row1;
	   }  while ($row1=mysqli_fetch_array($result6,MYSQL_NUM)){
	    $data6[]=$row1;
	   }  while ($row1=mysqli_fetch_array($result7,MYSQL_NUM)){
	    $data7[]=$row1;
	   }  while ($row1=mysqli_fetch_array($result8,MYSQL_NUM)){
	    $data8[]=$row1;
	   }  while ($row1=mysqli_fetch_array($result9,MYSQL_NUM)){
	    $data9[]=$row1;
	   }  while ($row1=mysqli_fetch_array($result10,MYSQL_NUM)){
	    $data10[]=$row1;
	   }  while ($row1=mysqli_fetch_array($result11,MYSQL_NUM)){
	    $data11[]=$row1;
	   } 
	    //print_r($data);
	    //echo '<hr>';
	    $data = json_encode($data);
	    $data1 = json_encode($data1);
	    $data2 = json_encode($data2);
	    $data3 = json_encode($data3);
	    $data4 = json_encode($data4);
	    $data5 = json_encode($data5);
	    $data6 = json_encode($data6);
	    $data7 = json_encode($data7);
	    $data8 = json_encode($data8);
	    $data9 = json_encode($data9);
	    $data10 = json_encode($data10);
	    $data11 = json_encode($data11);
	    //echo $data;
		?>  
		var data =eval('<?php echo $data;?>');// 添加海量点数据
		var data1 =eval('<?php echo $data1;?>');// 添加海量点数据
		var data2 =eval('<?php echo $data2;?>');// 添加海量点数据
		var data3 =eval('<?php echo $data3;?>');// 添加海量点数据
		var data4 =eval('<?php echo $data4;?>');// 添加海量点数据
		var data5 =eval('<?php echo $data5;?>');// 添加海量点数据
		var data6 =eval('<?php echo $data6;?>');// 添加海量点数据
		var data7 =eval('<?php echo $data7;?>');// 添加海量点数据
		var data8 =eval('<?php echo $data8;?>');// 添加海量点数据
		var data9 =eval('<?php echo $data9;?>');// 添加海量点数据
		var data10 =eval('<?php echo $data10;?>');// 添加海量点数据
		var data11=eval('<?php echo $data11;?>');// 添加海量点数据
    var map = new BMap.Map("container");          // 创建地图实例
    var point = new BMap.Point(116.418261, 39.921984);
    map.centerAndZoom(point, 11);             // 初始化地图，设置中心点坐标和地图级别
    map.enableScrollWheelZoom(); // 允许滚轮缩放
	var  mapStyle ={ 
    features: ["road", "building","water","land"],//隐藏地图上的poi
    style : "grayscale"  //设置地图风格为高端黑
    }
    map.setMapStyle(mapStyle);
  

   var data =eval('<?php echo $data;?>');

function heat(arr){
	map.clearOverlays();
    var points =[];
   points = heatdata(arr);
    if(!isSupportCanvas()){
    	alert('热力图目前只支持有canvas支持的浏览器,您所使用的浏览器不能使用热力图功能~')
    }
	//详细的参数,可以查看heatmap.js的文档 https://github.com/pa7/heatmap.js/blob/master/README.md
	//参数说明如下:
	/* visible 热力图是否显示,默认为true
     * opacity 热力的透明度,1-100
     * radius 势力图的每个点的半径大小   
     * gradient  {JSON} 热力图的渐变区间 . gradient如下所示
     *	{
			.2:'rgb(0, 255, 255)',
			.5:'rgb(0, 110, 255)',
			.8:'rgb(100, 0, 255)'
		}
		其中 key 表示插值的位置, 0~1. 
		    value 为颜色值. 
     */
	heatmapOverlay = new BMapLib.HeatmapOverlay({"radius":10,});
	map.addOverlay(heatmapOverlay);
	heatmapOverlay.setDataSet({data:points,max:100});
    function setGradient(){
     	/*格式如下所示:
		{
	  		0:'rgb(102, 255, 0)',
	 	 	.5:'rgb(255, 170, 0)',
		  	1:'rgb(255, 0, 0)'
		}*/
     	var gradient = {};
     	var colors = document.querySelectorAll("input[type='color']");
     	colors = [].slice.call(colors,0);
     	colors.forEach(function(ele){
			gradient[ele.getAttribute("data-key")] = ele.value; 
     	});
        heatmapOverlay.setOptions({"gradient":gradient});
    }
	//判断浏览区是否支持canvas
    function isSupportCanvas(){
        var elem = document.createElement('canvas');
        return !!(elem.getContext && elem.getContext('2d'));
    }
}
heat(data);
</script>