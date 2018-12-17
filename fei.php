<!DOCTYPE html>
<html>

<head>
    <title>MoveLineOverlay</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
        body,
        html {
            width: 100%;
            height: 100%;
            margin: 0;
            font-family: "微软雅黑";
        }

        #allmap {
            width: 100%;
            height: 100%;
        }

        p {
            margin-left: 5px;
            font-size: 14px;
        }button {
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

    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=7loH0l4p9DrNMsX5EgtcGGdkm7ptVvTr"></script>
    <script src="dist/inmap.js"></script>
</head>

<body>
    <div id="allmap" style="height:800px;"></div>
	<div>
	<button onclick="remo();fei(data1,data)">0时刻</button>
	<button onclick="remo();fei(data3,data2)">3时刻</button>
	<button onclick="remo();fei(data5,data4)">6时刻</button>
	<button onclick="remo();fei(data7,data6)">9时刻</button>
	<button onclick="remo();fei(data9,data8)">12时刻</button>
	<button onclick="remo();fei(data11,data10)">15时刻</button>
	<button onclick="remo();fei(data13,data12)">18时刻</button>
	<button onclick="remo();fei(data15,data14)">21时刻</button>
	<button onclick="location.reload();">刷新</button>
	<a style="font-size:8px;margin-left:35px;">[注:]1.默认时刻为0时刻 2.此路径为模拟路径，不代表行车的真实路径 3.线状物较多时需刷新再使用</a>
	</div>
</body>

</html>
<script>
    var inmap = new inMap.Map({
        id: 'allmap',
        skin: "Blueness",
        center: [116.418261, 39.921984],
        zoom: {
            value: 11,
            show: true,
            max: 18,
            min: 5
        },
    })


<?php
        $time ="2017-05-10 0:00:00";//设置数据点时间
        $time1 ="2017-05-10 3:00:00";//设置数据点时间
        $time2 ="2017-05-10 6:00:00";//设置数据点时间
        $time3 ="2017-05-10 9:00:00";//设置数据点时间
        $time4 ="2017-05-10 12:00:00";//设置数据点时间
        $time5 ="2017-05-10 15:00:00";//设置数据点时间
        $time6 ="2017-05-10 18:00:00";//设置数据点时间
        $time7 ="2017-05-10 21:00:00";//设置数据点时间

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
	    $data12 =array();
	    $data13 =array();
	    $data14 =array();
	    $data15 =array();
        $con=mysqli_connect("localhost","root","root"); 
        if (!$con) { 
          die('数据库连接失败'.$mysql_error()); 
       } 
        mysqli_select_db($con,"user_info"); 
	    $result = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time}';");
	    $result2 = mysqli_query($con,"select STARTX,STARTY from point where startTime ='{$time}';");
	    while ($row=mysqli_fetch_array($result,MYSQLI_NUM)){
	    $data[]=$row;
	   }
	   	while ($row2=mysqli_fetch_array($result2,MYSQLI_NUM)){
	    $data1[]=$row2;
	   }
	    $result3 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time1}';");
	    $result4 = mysqli_query($con,"select STARTX,STARTY from point where startTime ='{$time1}';");
	    while ($row=mysqli_fetch_array($result3,MYSQLI_NUM)){
	    $data2[]=$row;
	   }
	   	while ($row2=mysqli_fetch_array($result4,MYSQLI_NUM)){
	    $data3[]=$row2;
	   }
	    $result5 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time2}';");
	    $result6 = mysqli_query($con,"select STARTX,STARTY from point where startTime ='{$time2}';");
	    while ($row=mysqli_fetch_array($result5,MYSQLI_NUM)){
	    $data4[]=$row;
	   }
	   	while ($row2=mysqli_fetch_array($result6,MYSQLI_NUM)){
	    $data5[]=$row2;
	   }	    $result7 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time3}';");
	    $result8 = mysqli_query($con,"select STARTX,STARTY from point where startTime ='{$time3}';");
	    while ($row=mysqli_fetch_array($result7,MYSQLI_NUM)){
	    $data6[]=$row;
	   }
	   	while ($row2=mysqli_fetch_array($result8,MYSQLI_NUM)){
	    $data7[]=$row2;
	   }	    $result9 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time4}';");
	    $result10 = mysqli_query($con,"select STARTX,STARTY from point where startTime ='{$time4}';");
	    while ($row=mysqli_fetch_array($result9,MYSQLI_NUM)){
	    $data8[]=$row;
	   }
	   	while ($row2=mysqli_fetch_array($result10,MYSQLI_NUM)){
	    $data9[]=$row2;
	   }	    $result11 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time5}';");
	    $result12 = mysqli_query($con,"select STARTX,STARTY from point where startTime ='{$time5}';");
	    while ($row=mysqli_fetch_array($result11,MYSQLI_NUM)){
	    $data10[]=$row;
	   }
	   	while ($row2=mysqli_fetch_array($result12,MYSQLI_NUM)){
	    $data11[]=$row2;
	   }
	    $result13 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time6}';");
	    $result14 = mysqli_query($con,"select STARTX,STARTY from point where startTime ='{$time6}';");
	    while ($row=mysqli_fetch_array($result13,MYSQLI_NUM)){
	    $data12[]=$row;
	   }
	   	while ($row2=mysqli_fetch_array($result14,MYSQLI_NUM)){
	    $data13[]=$row2;
	   }
	    $result15 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time7}';");
	    $result16 = mysqli_query($con,"select STARTX,STARTY from point where startTime ='{$time7}';");
	    while ($row=mysqli_fetch_array($result15,MYSQLI_NUM)){
	    $data14[]=$row;
	   }
	   	while ($row2=mysqli_fetch_array($result16,MYSQLI_NUM)){
	    $data15[]=$row2;
	   }
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
	    $data12 = json_encode($data12);
	    $data13 = json_encode($data13);
	    $data14 = json_encode($data14);
	    $data15 = json_encode($data15);

	   // echo count($data);
?>

	var data1 =eval('<?php echo $data1;?>');
	var data =eval('<?php echo $data;?>');
	var data2 =eval('<?php echo $data2;?>');
	var data3 =eval('<?php echo $data3;?>');
	var data4 =eval('<?php echo $data4;?>');
	var data5 =eval('<?php echo $data5;?>');
	var data6 =eval('<?php echo $data6;?>');
	var data7 =eval('<?php echo $data7;?>');
	var data8 =eval('<?php echo $data8;?>');
	var data9 =eval('<?php echo $data9;?>');
	var data10 =eval('<?php echo $data10;?>');
	var data11 =eval('<?php echo $data11;?>');
	var data12 =eval('<?php echo $data12;?>');
	var data13 =eval('<?php echo $data13;?>');
	var data14 =eval('<?php echo $data14;?>');
	var data15 =eval('<?php echo $data15;?>');

console.log(data3);
var points= new Array();
    for(var i = 0;i<data.length;i++){
	   points[i]={
	      from :{
		    city:'',
			lnglat:[data1[i][0],data1[i][1]]
		  },
		  to:{
		    city:'',
            lnglat:[data[i][0],data[i][1]]
		  }
	   }
	}

    var overlay = new inMap.MoveLineOverlay({
        style: {
            normal: {
                markerRadius: 3,
                //marker点颜色,为空或null则默认取线条颜色
                markerColor: '#fff',
                //线条类型 solid、dashed、dotted
                lineType: 'solid',
                //线条宽度
                lineWidth: 0,
                //线条颜色
                colors: ['#F9815C', '#F8AB60', '#EDCC72', '#E2F194', '#94E08A', '#4ECDA5'],
                //移动点半径
                moveRadius: 2,
                //移动点颜色
                fillColor: '#fff',
                //移动点阴影颜色
                shadowColor: '#fff',
                //移动点阴影大小
                shadowBlur: 10,
            }
        },
        data: points,
    });inmap.add(overlay);

function fei(brr,arr){	
	var points= new Array();
    for(var i = 0;i<arr.length;i++){
	   points[i]={
	      from :{
		    city:'',
			lnglat:[brr[i][0],brr[i][1]]
		  },
		  to:{
		    city:'',
            lnglat:[arr[i][0],arr[i][1]]
		  }
	   }
	}
    var overlay = new inMap.MoveLineOverlay({
        style: {
            normal: {
                markerRadius: 3,
                //marker点颜色,为空或null则默认取线条颜色
                markerColor: '#fff',
                //线条类型 solid、dashed、dotted
                lineType: 'solid',
                //线条宽度
                lineWidth: 0,
                //线条颜色
                colors: ['#F9815C', '#F8AB60', '#EDCC72', '#E2F194', '#94E08A', '#4ECDA5'],
                //移动点半径
                moveRadius: 2,
                //移动点颜色
                fillColor: '#fff',
                //移动点阴影颜色
                shadowColor: '#fff',
                //移动点阴影大小
                shadowBlur: 10,
            }
        },
        data: points,
    });
    inmap.add(overlay);
}
function remo(){inmap.remove(overlay);}
</script>