﻿<!DOCTYPE html style="height:89%;width:75%;">
<html lang="zh">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
<title>骑行数据</title>
 <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=7loH0l4p9DrNMsX5EgtcGGdkm7ptVvTr"></script>
<script type="text/javascript" src="pointtransfertools.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/demo.css">
<style type="text/css">
	@font-face{
		  font-family: 'ITV Reem';
		  src: url(assets/itvreem.woff) format('woff');
		}
		.js-odoo,.js-odoo1,.js-odoo2,.js-odoo3,.js-odoo4,.js-odoo5,.js-odoo6{
			width: 500px;
			margin-top: 37px;
			font-family: 'ITV Reem';
		  font-size: 45px;
		  text-shadow: 1px 1px 5px rgba(0,0,0,0.5);
		  fill: #fff;
		  
		}
		.js-odoo1{margin-left:288px;font-size:66px;margin-top: 0px;}
		.js-odoo{margin-left:85px;font-size: 48px;}
		.js-odoo2{margin-left:142px;font-size: 51px;}
		.js-odoo3{margin-left:331px;font-size: 45px;}
		.js-odoo4{margin-left:98px;font-size: 47px;}
		.js-odoo5{margin-left:233px;font-size: 54px;}
		.js-odoo6{margin-left:283px;font-size: 58px;}
		.js-odoo7{			
		width: 500px;
			margin-top: -700px;
			font-family: 'ITV Reem';
		  font-size: 60px;
		  text-shadow: 1px 1px 5px rgba(0,0,0,0.5);
		  fill: #fff;margin-left:980px;
		  }
		  		.js-odoo8{			
		width: 500px;
			margin-top: 93px;
			font-family: 'ITV Reem';
		  font-size: 53px;
		  text-shadow: 1px 1px 5px rgba(0,0,0,0.5);
		  fill: #fff;margin-left:952px;
		 }		  		.js-odoo9{			
		width: 500px;
			margin-top: 75px;
			font-family: 'ITV Reem';
		  font-size: 48px;
		  text-shadow: 1px 1px 5px rgba(0,0,0,0.5);
		  fill: #fff;margin-left:903px;
		  }.js-odoo10{			
		width: 500px;
			margin-top:211px;
			font-family: 'ITV Reem';
		  font-size: 48px;
		  text-shadow: 1px 1px 5px rgba(0,0,0,0.5);
		  fill: #fff;margin-left:958px;
		  }
</style>

</head>
<body>
<div class="container">
	<div id="allmap"></div>
	<div class="js-odoo1"></div>
	<div class="js-odoo"></div>
	<div class="js-odoo2"></div>
	<div class="js-odoo3"></div>
	<div class="js-odoo4"></div>
	<div class="js-odoo5"></div>
	<div class="js-odoo6"></div>
	<div class="js-odoo7"></div>
	<div class="js-odoo8"></div>
	<div class="js-odoo9"></div>
	<div class="js-odoo10"></div>

	
</div>
<?php
error_reporting(0);
        //$time ="2017-05-10 0:00:00";//设置数据点时间
	    $data =array();
	    $data1 =array();
	    $data2 =array();$bikeid=array();
        $con=mysqli_connect("localhost","root","root"); 
        if (!$con) { 
          die('数据库连接失败'.$mysql_error()); 
       } 
        mysqli_select_db($con,"user_info"); 
	    $result = mysqli_query($con,"select STARTX,STARTY from point;");
	    $result1 = mysqli_query($con,"select ENDX,ENDY from point;");
		$result2 = mysqli_query($con,"select bikeID from point;");
	    while ($row=mysqli_fetch_array($result,MYSQLI_NUM)){
	    $data[]=$row;
	   }
	   	while ($row=mysqli_fetch_array($result1,MYSQLI_NUM)){
	    $data1[]=$row;
	   }
	   	    while ($row=mysqli_fetch_array($result2,MYSQLI_NUM)){
	    $data2[]=$row;
	   }
function formatArray($array)

{

sort($array);

$tem = ”;

$temarray = array();

$j = 0;

for($i=0;$i<count($array);$i++)

{

if($array[$i]!=$tem)

{

$temarray[$j] = $array[$i];

$j++;

}

$tem = $array[$i];

}

return $temarray;

}

//测试 调用函数

$arr = formatArray($data2);
$data2=count($arr);
		//echo count($data); echo '<hr>';
	    $data = json_encode($data);
	    $data1 = json_encode($data1);
	    $data2 = json_encode($data2);
	   // echo count($data);
?>
<script src="lib/odoo.js"></script>
<script type="text/javascript">
var map = new BMap.Map("allmap", {});  
		var data =eval('<?php echo $data;?>');// 添加点数据
		var data1 =eval('<?php echo $data1;?>');// 添加点数据
		var data2 =eval('<?php echo $data2;?>');// 添加点数据
		var points=[];
		var points1=[];
        for (var i = 0; i < data.length; i++) {
		  //array[i] = data[i].split(",");
		  //alert(array[i]);
		  //alert(data[i][0]);
		  //alert(data[i]);
          points.push(new BMap.Point(data[i][0],data[i][1]));
          points1.push(new BMap.Point(data1[i][0],data1[i][1]));
        }
		points=GpsToBaiduPoints(points);
		points1=GpsToBaiduPoints(points1);
		//console.log(points[0]);
		//console.log(points1[0]);
	var distance=0;var alldistance=0;var count1=0;
	var count3=0;var count5=0;var count10=0;count=0;
  for(var j = 0;j<points.length-1;j++){
				//var point1 = new BMap.Point(points[j]);
				//console.log(points[j]);
				//console.log(points1[j]);
				//var point2 = new BMap.Point(points1[j]);
                distance = map.getDistance(points[j],points1[j]);
				//排除异常数据
				if(distance<=10000){count1++;}
				if(distance<=30000&&distance>10000){count3++;}
				if(distance<=50000&&distance>30000){count5++;}
				if(distance>50000){count10++;}
				alldistance=distance+alldistance;
				count++;
		}
		alldistance=(alldistance/10000).toFixed(2);
		var oil=((alldistance/100)*9).toFixed(2);
		var tan=(oil*2.45).toFixed(2);
		var sen=((tan/1000)*10000);
		sen = (sen/365).toFixed(2);
		var renjun=(alldistance/count).toFixed(2);		
odoo.default({ el:'.js-odoo1',value:'共有' + count + '人次参与骑行'})		
odoo.default({ el:'.js-odoo',value:'总骑行' + alldistance + '公里'})
odoo.default({ el:'.js-odoo2',value:'骑距1公里内有' + count1 + '人次'})
odoo.default({ el:'.js-odoo3',value:'骑距1~3公里有' + count3 + '人次'})
odoo.default({ el:'.js-odoo4',value:'骑距3~5公里有' + count5 + '人次'})
odoo.default({ el:'.js-odoo5',value:'骑距5公里以上有' + count10 + '人次'})
odoo.default({ el:'.js-odoo6',value:'人均骑行距离' + renjun + '公里'})
odoo.default({ el:'.js-odoo7',value:'总共减少耗油' + oil + '升'})
odoo.default({ el:'.js-odoo8',value:'减少CO2排放' + tan + '千克'})
odoo.default({ el:'.js-odoo10',value:'该区域共有' + data2 + '辆共享单车'})
</script>

</body>
</html>
