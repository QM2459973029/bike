<!DOCTYPE HTML>
<html>
<head>
  <title>加载海量点</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <style type="text/css">
    html,body{
        margin:0;
        width:100%;
        height:100%;
        background:#ffffff;
    }
    #map{
        width:100%;
        height:100%;
    }
    #panel {
        position: absolute;
        top:30px;
        left:10px;
        z-index: 999;
        color: #fff;
    }
    #login{
        position:absolute;
        width:300px;
        height:40px;
        left:50%;
        top:50%;
        margin:-40px 0 0 -150px;
    }
    #login input[type=password]{
        width:200px;
        height:30px;
        padding:3px;
        line-height:30px;
        border:1px solid #000;
    }
    #login input[type=submit]{
        width:80px;
        height:38px;
        display:inline-block;
        line-height:38px;
    }
button {
margin-top:5px;
margin-left:22px;
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
  <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=7loH0l4p9DrNMsX5EgtcGGdkm7ptVvTr">
  </script>
</head>
<body>
    <div id="map" style="height:800px;"></div>
	
    <script type="text/javascript">
    var map = new BMap.Map("map", {});                        // 创建Map实例
    map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);     // 初始化地图,设置中心点坐标和地图级别
    map.enableScrollWheelZoom(); //启用滚轮放大缩小
	var  mapStyle ={ 
    features: ["road", "building","water","land"],//隐藏地图上的poi
    style : "hardedge"  //设置地图风格为高端黑
    }
    map.setMapStyle(mapStyle);

	//数据库链接获取数据
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
	    $result = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time}';");
	    $result1 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time1}';");
	    $result2 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time2}';");
	    $result3 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time3}';");
	    $result4 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time4}';");
	    $result5 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time5}';");
	    $result6 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time6}';");
	    $result7 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time7}';");
	    $result8 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time8}';");
	    $result9 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time9}';");
	    $result10 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time10}';");
	    $result11= mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time11}';");
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

function shijian(arr){
	map.clearOverlays();
    if (document.createElement('canvas').getContext) {
		// 判断当前浏览器是否支持绘制海量点
		
		var array = new Array();
		var points=[];
        for (var i = 0; i < arr.length; i++) {
		  //array[i] = data[i].split(",");
		  //alert(array[i]);
		  //alert(data[i][0]);
		  //alert(data[i]);

          points.push(new BMap.Point(arr[i][0],arr[i][1]));
        }
        var options = {
            size: BMAP_POINT_SIZE_SMALLER,
            shape: BMAP_POINT_SHAPE_CIRCLE,
            color: 'RED'
        }
        var pointCollection = new BMap.PointCollection(points, options);  // 初始化PointCollection
       pointCollection.addEventListener('click', function (e) {
          alert('单击点的坐标为：' + e.point.lng + ',' + e.point.lat);  // 监听点击事件
        });
        map.addOverlay(pointCollection);  // 添加Overlay
    } else {
        alert('请在chrome、safari、IE8+以上浏览器查看本示例');
    }}
shijian(data);
  </script>
  <div id="time">
  <button onclick="shijian(data)">0时刻</button>
  <button onclick="shijian(data1)">2时刻</button>
  <button onclick="shijian(data2)">4时刻</button>
  <button onclick="shijian(data3)">6时刻</button>
  <button onclick="shijian(data4)">8时刻</button>
  <button onclick="shijian(data5)">10时刻</button>
  <button onclick="shijian(data6)">12时刻</button>
  <button onclick="shijian(data7)">14时刻</button>
  <button onclick="shijian(data8)">16时刻</button>
  <button onclick="shijian(data9)">18时刻</button>
  <button onclick="shijian(data10)">20时刻</button>
  <button onclick="shijian(data11)">22时刻</button>
  <a style="font-size:8px;margin-left:35px;">[注:]默认时刻为0时刻</a>
  </div>
</body>
</html>
