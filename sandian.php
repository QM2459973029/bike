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
    }  #container {
   height: 100%
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
  </style>
  <script type="text/javascript" src="pointtransfertools.js"></script>
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=7loH0l4p9DrNMsX5EgtcGGdkm7ptVvTr">
  </script>
  <script type="text/javascript" src="ziroom-map.js"></script>
</head>
<body> 
 <div id="container"></div>
 <div id="map"></div>
    <script type="text/javascript">
	var myMap = new ZMap("container");
    var map = new BMap.Map("map", {});                        // 创建Map实例
    map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);     // 初始化地图,设置中心点坐标和地图级别
    map.enableScrollWheelZoom(); //启用滚轮放大缩小
	
	//数据库链接获取数据		
	<?php
        $time ="2017-05-10 0:00:00";//设置数据点时间
	    $data =array();
        $con=mysqli_connect("localhost","root","root"); 
        if (!$con) { 
          die('数据库连接失败'.$mysql_error()); 
       } 
        mysqli_select_db($con,"user_info"); 
	    $result = mysqli_query($con,"select STARTX,STARTY from point where startTime ='{$time}';");
	    while ($row=mysqli_fetch_array($result,MYSQL_NUM)){
	    $data[]=$row;
	   }
	    //print_r($data);
	    //echo '<hr>';
	    $data = json_encode($data);
	    //echo $data;
		?>   	
    if (document.createElement('canvas').getContext) {
		// 判断当前浏览器是否支持绘制海量点
		var data =eval('<?php echo $data;?>');// 添加海量点数据
		var array = new Array();
		var points=[];
        for (var i = 0; i < data.length; i++) {
		  //array[i] = data[i].split(",");
		  //alert(array[i]);
		  //alert(data[i][0]);
		  //alert(data[i]);

          points.push(new BMap.Point(data[i][0],data[i][1]));
        }
		var transferedData = GpsToBaiduPoints(points);
        var options = {
            size: BMAP_POINT_SIZE_SMALL,
            shape: BMAP_POINT_SHAPE_CIRCLE,
            color: '#d340c3'
        }
        var pointCollection = new BMap.PointCollection(transferedData, options);  // 初始化PointCollection
        pointCollection.addEventListener('click', function (e) {
          alert('单击点的坐标为：' + e.point.lng + ',' + e.point.lat);  // 监听点击事件
        });
        map.addOverlay(pointCollection);  // 添加Overlay
    } else {
        alert('请在chrome、safari、IE8+以上浏览器查看本示例');
    }
  </script>
</body>
</html>
