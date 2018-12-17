<!DOCTYPE html>
<html style="height: 100%">
   <head>
	   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   </head>
   <body style="height: 100%; margin: 0">
       <div id="container" style="height: 95%"></div>
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
<?php
         $time0 ="2017-05-10 0:00:00";//设置数据点时间
        $time1 ="2017-05-10 1:00:00";//设置数据点时间
        $time2 ="2017-05-10 2:00:00";//设置数据点时间
        $time3 ="2017-05-10 3:00:00";//设置数据点时间
        $time4 ="2017-05-10 4:00:00";//设置数据点时间
        $time5 ="2017-05-10 5:00:00";//设置数据点时间
        $time6 ="2017-05-10 6:00:00";//设置数据点时间
        $time7 ="2017-05-10 7:00:00";//设置数据点时间
        $time8 ="2017-05-10 8:00:00";//设置数据点时间
        $time9 ="2017-05-10 9:00:00";//设置数据点时间
        $time10 ="2017-05-10 10:00:00";//设置数据点时间
        $time11 ="2017-05-10 11:00:00";//设置数据点时间
        $time12 ="2017-05-10 12:00:00";//设置数据点时间
        $time13 ="2017-05-10 13:00:00";//设置数据点时间
        $time14 ="2017-05-10 14:00:00";//设置数据点时间
        $time15 ="2017-05-10 15:00:00";//设置数据点时间
        $time16 ="2017-05-10 16:00:00";//设置数据点时间
        $time17 ="2017-05-10 17:00:00";//设置数据点时间
        $time18 ="2017-05-10 18:00:00";//设置数据点时间
        $time19 ="2017-05-10 19:00:00";//设置数据点时间
        $time20 ="2017-05-10 20:00:00";//设置数据点时间
        $time21 ="2017-05-10 21:00:00";//设置数据点时间
        $time22 ="2017-05-10 22:00:00";//设置数据点时间
        $time23 ="2017-05-10 23:00:00";//设置数据点时间
        $con=mysqli_connect("localhost","root","root"); 
        if (!$con) { 
          die('数据库连接失败'.$mysql_error()); 
       } 
        mysqli_select_db($con,"user_info"); 
	    $result0 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time0}';");
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
	    $result11 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time11}';");
	    $result12 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time12}';");
	    $result13 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time13}';");
	    $result14 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time14}';");
	    $result15 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time15}';");
	    $result16 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time16}';");
	    $result17 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time17}';");
	    $result18 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time18}';");
	    $result19 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time19}';");
	    $result20 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time20}';");
	    $result21 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time21}';");
	    $result22 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time22}';");
	    $result23 = mysqli_query($con,"select ENDX,ENDY from point where startTime ='{$time23}';");
	    while ($row=mysqli_fetch_array($result0,MYSQLI_NUM)){
	    $data0[]=$row;
	   }	    while ($row=mysqli_fetch_array($result1,MYSQLI_NUM)){
	    $data1[]=$row;
	   }	    while ($row=mysqli_fetch_array($result2,MYSQLI_NUM)){
	    $data2[]=$row;
	   }	    while ($row=mysqli_fetch_array($result3,MYSQLI_NUM)){
	    $data3[]=$row;
	   }	    while ($row=mysqli_fetch_array($result4,MYSQLI_NUM)){
	    $data4[]=$row;
	   }	    while ($row=mysqli_fetch_array($result5,MYSQLI_NUM)){
	    $data5[]=$row;
	   }	    while ($row=mysqli_fetch_array($result6,MYSQLI_NUM)){
	    $data6[]=$row;
	   }	    while ($row=mysqli_fetch_array($result7,MYSQLI_NUM)){
	    $data7[]=$row;
	   }	    while ($row=mysqli_fetch_array($result8,MYSQLI_NUM)){
	    $data8[]=$row;
	   }	    while ($row=mysqli_fetch_array($result9,MYSQLI_NUM)){
	    $data9[]=$row;
	   }	    while ($row=mysqli_fetch_array($result10,MYSQLI_NUM)){
	    $data10[]=$row;
	   }	    while ($row=mysqli_fetch_array($result11,MYSQLI_NUM)){
	    $data11[]=$row;
	   }	    while ($row=mysqli_fetch_array($result12,MYSQLI_NUM)){
	    $data12[]=$row;
	   }	    while ($row=mysqli_fetch_array($result13,MYSQLI_NUM)){
	    $data13[]=$row;
	   }	    while ($row=mysqli_fetch_array($result14,MYSQLI_NUM)){
	    $data14[]=$row;
	   }	    while ($row=mysqli_fetch_array($result15,MYSQLI_NUM)){
	    $data15[]=$row;
	   }	    while ($row=mysqli_fetch_array($result16,MYSQLI_NUM)){
	    $data16[]=$row;
	   }	    while ($row=mysqli_fetch_array($result17,MYSQLI_NUM)){
	    $data17[]=$row;
	   }	    while ($row=mysqli_fetch_array($result18,MYSQLI_NUM)){
	    $data18[]=$row;
	   }	    while ($row=mysqli_fetch_array($result19,MYSQLI_NUM)){
	    $data19[]=$row;
	   }	    while ($row=mysqli_fetch_array($result20,MYSQLI_NUM)){
	    $data20[]=$row;
	   }	    while ($row=mysqli_fetch_array($result21,MYSQLI_NUM)){
	    $data21[]=$row;
	   }	    while ($row=mysqli_fetch_array($result22,MYSQLI_NUM)){
	    $data22[]=$row;
	   }	    while ($row=mysqli_fetch_array($result23,MYSQLI_NUM)){
	    $data23[]=$row;
	   }
	   $leng0=count($data0);
	   $leng1=count($data1);
	   $leng2=count($data2);
	   $leng3=count($data3);
	   $leng4=count($data4);
	   $leng5=count($data5);
	   $leng6=count($data6);
	   $leng7=count($data7);
	   $leng8=count($data8);
	   $leng9=count($data9);
	   $leng10=count($data10);
	   $leng11=count($data11);
	   $leng12=count($data12);
	   $leng13=count($data13);
	   $leng14=count($data14);
	   $leng15=count($data15);
	   $leng16=count($data16);
	   $leng17=count($data17);
	   $leng18=count($data18);
	   $leng19=count($data19);
	   $leng20=count($data20);
	   $leng21=count($data21);
	   $leng22=count($data22);
	   $leng23=count($data23);
for($i=1;$i<$leng0;$i++){
     if(115.5<=$data0[$i][0] && $data0[$i][0]<=117.5){
	   if(39.5<=$data0[$i][1] && $data0[$i][1<=10.5]){
	     $arr0[]=$data0[$i];
	   }
	 }
}for($i=1;$i<$leng1;$i++){
     if(115.5<=$data1[$i][0] && $data1[$i][0]<=117.5){
	   if(39.5<=$data1[$i][1] && $data1[$i][1<=10.5]){
	     $arr1[]=$data1[$i];
	   }
	 }
}for($i=1;$i<$leng2;$i++){
     if(115.5<=$data2[$i][0] && $data2[$i][0]<=117.5){
	   if(39.5<=$data2[$i][1] && $data2[$i][1<=10.5]){
	     $arr2[]=$data2[$i];
	   }
	 }
}for($i=1;$i<$leng3;$i++){
     if(115.5<=$data3[$i][0] && $data3[$i][0]<=117.5){
	   if(39.5<=$data3[$i][1] && $data3[$i][1<=10.5]){
	     $arr3[]=$data3[$i];
	   }
	 }
}for($i=1;$i<$leng4;$i++){
     if(115.5<=$data4[$i][0] && $data4[$i][0]<=117.5){
	   if(39.5<=$data4[$i][1] && $data4[$i][1<=10.5]){
	     $arr4[]=$data4[$i];
	   }
	 }
}for($i=1;$i<$leng5;$i++){
     if(115.5<=$data5[$i][0] && $data5[$i][0]<=117.5){
	   if(39.5<=$data5[$i][1] && $data5[$i][1<=10.5]){
	     $arr5[]=$data5[$i];
	   }
	 }
}for($i=1;$i<$leng6;$i++){
     if(115.5<=$data6[$i][0] && $data6[$i][0]<=117.5){
	   if(39.5<=$data6[$i][1] && $data6[$i][1<=10.5]){
	     $arr6[]=$data6[$i];
	   }
	 }
}for($i=1;$i<$leng7;$i++){
     if(115.5<=$data7[$i][0] && $data7[$i][0]<=117.5){
	   if(39.5<=$data7[$i][1] && $data7[$i][1<=10.5]){
	     $arr7[]=$data7[$i];
	   }
	 }
}for($i=1;$i<$leng8;$i++){
     if(115.5<=$data8[$i][0] && $data8[$i][0]<=117.5){
	   if(39.5<=$data8[$i][1] && $data8[$i][1<=10.5]){
	     $arr8[]=$data8[$i];
	   }
	 }
}for($i=1;$i<$leng9;$i++){
     if(115.5<=$data9[$i][0] && $data9[$i][0]<=117.5){
	   if(39.5<=$data9[$i][1] && $data9[$i][1<=10.5]){
	     $arr9[]=$data9[$i];
	   }
	 }
}for($i=1;$i<$leng10;$i++){
     if(115.5<=$data10[$i][0] && $data10[$i][0]<=117.5){
	   if(39.5<=$data10[$i][1] && $data10[$i][1<=10.5]){
	     $arr10[]=$data10[$i];
	   }
	 }
}for($i=1;$i<$leng11;$i++){
     if(115.5<=$data11[$i][0] && $data11[$i][0]<=117.5){
	   if(39.5<=$data11[$i][1] && $data11[$i][1<=10.5]){
	     $arr11[]=$data11[$i];
	   }
	 }
}for($i=1;$i<$leng12;$i++){
     if(115.5<=$data12[$i][0] && $data12[$i][0]<=117.5){
	   if(39.5<=$data12[$i][1] && $data12[$i][1<=10.5]){
	     $arr12[]=$data12[$i];
	   }
	 }
}for($i=1;$i<$leng13;$i++){
     if(115.5<=$data13[$i][0] && $data13[$i][0]<=117.5){
	   if(39.5<=$data13[$i][1] && $data13[$i][1<=10.5]){
	     $arr13[]=$data13[$i];
	   }
	 }
}for($i=1;$i<$leng14;$i++){
     if(115.5<=$data14[$i][0] && $data14[$i][0]<=117.5){
	   if(39.5<=$data14[$i][1] && $data14[$i][1<=10.5]){
	     $arr14[]=$data14[$i];
	   }
	 }
}for($i=1;$i<$leng15;$i++){
     if(115.5<=$data15[$i][0] && $data15[$i][0]<=117.5){
	   if(39.5<=$data15[$i][1] && $data15[$i][1<=10.5]){
	     $arr15[]=$data15[$i];
	   }
	 }
}for($i=1;$i<$leng16;$i++){
     if(115.5<=$data16[$i][0] && $data16[$i][0]<=117.5){
	   if(39.5<=$data16[$i][1] && $data16[$i][1<=10.5]){
	     $arr16[]=$data16[$i];
	   }
	 }
}for($i=1;$i<$leng17;$i++){
     if(115.5<=$data17[$i][0] && $data17[$i][0]<=117.5){
	   if(39.5<=$data17[$i][1] && $data17[$i][1<=10.5]){
	     $arr17[]=$data17[$i];
	   }
	 }
}for($i=1;$i<$leng18;$i++){
     if(115.5<=$data18[$i][0] && $data18[$i][0]<=117.5){
	   if(39.5<=$data18[$i][1] && $data18[$i][1<=10.5]){
	     $arr18[]=$data18[$i];
	   }
	 }
}for($i=1;$i<$leng19;$i++){
     if(115.5<=$data19[$i][0] && $data19[$i][0]<=117.5){
	   if(39.5<=$data19[$i][1] && $data19[$i][1<=10.5]){
	     $arr19[]=$data19[$i];
	   }
	 }
}for($i=1;$i<$leng20;$i++){
     if(115.5<=$data20[$i][0] && $data20[$i][0]<=117.5){
	   if(39.5<=$data20[$i][1] && $data20[$i][1<=10.5]){
	     $arr20[]=$data20[$i];
	   }
	 }
}for($i=1;$i<$leng21;$i++){
     if(115.5<=$data21[$i][0] && $data21[$i][0]<=117.5){
	   if(39.5<=$data21[$i][1] && $data21[$i][1<=10.5]){
	     $arr21[]=$data21[$i];
	   }
	 }
}for($i=1;$i<$leng22;$i++){
     if(115.5<=$data22[$i][0] && $data22[$i][0]<=117.5){
	   if(39.5<=$data22[$i][1] && $data22[$i][1<=10.5]){
	     $arr22[]=$data22[$i];
	   }
	 }
}for($i=1;$i<$leng23;$i++){
     if(115.5<=$data23[$i][0] && $data23[$i][0]<=117.5){
	   if(39.5<=$data23[$i][1] && $data23[$i][1<=10.5]){
	     $arr23[]=$data23[$i];
	   }
	 }
}
	    //print_r($arr);
	   
		//echo count($data); echo '<hr>';
	    $data0 = json_encode($arr0);
	    $data1 = json_encode($arr1);
	    $data2 = json_encode($arr2);
	    $data3 = json_encode($arr3);
	    $data4 = json_encode($arr4);
	    $data5 = json_encode($arr5);
	    $data6 = json_encode($arr6);
	    $data7 = json_encode($arr7);
	    $data8 = json_encode($arr8);
	    $data9 = json_encode($arr9);
	    $data10 = json_encode($arr10);
	    $data11 = json_encode($arr11);
	    $data12 = json_encode($arr12);
	    $data13 = json_encode($arr13);
	    $data14 = json_encode($arr14);
	    $data15 = json_encode($arr15);
	    $data16 = json_encode($arr16);
	    $data17 = json_encode($arr17);
	    $data18 = json_encode($arr18);
	    $data19 = json_encode($arr19);
	    $data20 = json_encode($arr20);
	    $data21 = json_encode($arr21);
	    $data22 = json_encode($arr22);
	    $data23 = json_encode($arr23);
	   // echo count($data);
?>
var data0 =eval('<?php echo $data0;?>');
var data1 =eval('<?php echo $data1;?>');
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
var data16 =eval('<?php echo $data16;?>');
var data17 =eval('<?php echo $data17;?>');
var data18 =eval('<?php echo $data18;?>');
var data19 =eval('<?php echo $data19;?>');
var data20 =eval('<?php echo $data20;?>');
var data21 =eval('<?php echo $data21;?>');
var data22 =eval('<?php echo $data22;?>');
var data23 =eval('<?php echo $data23;?>');
var dom = document.getElementById("container");
var myChart = echarts.init(dom);
var app = {};
option = null;
option={
    timeline:{
         data:[
            '1998-01-01','1999-01-01','2000-01-01','2001-01-01','2002-01-01',
            '2003-01-01','2004-01-01','2005-01-01','2006-01-01','2007-01-01','2007-01-01','2008-01-01','2009-01-01','2010-01-01',
			 '2011-01-01','2012-01-01','2013-01-01','2014-01-01','2015-01-01','2016-01-01','2017-01-01','2018-01-01','2019-01-01'
        ],
label : {
    show: false,
    interval: 'auto',
    textStyle: {
        color: '#333'
    }  
        },
lineStyle:{
	color: '#666',
    width: 1,
    type: 'dashed'
		},
	    autoPlay:true,
		playInterval:1000
    },
		
options:[
	{
	 title : {
                'text':'0时刻共享单车坐标点经纬度分布',
                'subtext':'数据来自膜拜单车',x:'center'
            },
    xAxis: {
            min: 'dataMin',
            name:'经度',//x轴的名称
            nameLocation:'end',//x轴名称的显示位置'middle'，'end'
            nameRotate:30,//坐标轴名字旋转角度值
            max: 'dataMax'
			},
    yAxis: {
            min: 'dataMin',
            name:'纬度',//x轴的名称
            nameLocation:'end',//x轴名称的显示位置'middle'，'end'
            nameRotate:30,//坐标轴名字旋转角度值
            max: 'dataMax'
			},
    series: [{
        symbolSize: 5,
        data: data0,
        type: 'scatter'
    }]
},

        {
            title : {'text':'0时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data0}
            ]
        },
        {
            title : {'text':'1时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data1}
            ]
        },
        {
            title : {'text':'2时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data2}
            ]
        },
		        {
            title : {'text':'3时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data3}
            ]
        },
				        {
            title : {'text':'4时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data4}
            ]
        },
				        {
            title : {'text':'5时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data5}
            ]
        },
				        {
            title : {'text':'6时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data6}
            ]
        },
				        {
            title : {'text':'7时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data7}
            ]
        },
				        {
            title : {'text':'8时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data8}
            ]
        },
				        {
            title : {'text':'9时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data9}
            ]
        },
				        {
            title : {'text':'10时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data10}
            ]
        },
				        {
            title : {'text':'11时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data11}
            ]
        },
				        {
            title : {'text':'12时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data12}
            ]
        },
				        {
            title : {'text':'13时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data13}
            ]
        },
				        {
            title : {'text':'14时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data14}
            ]
        },
				        {
            title : {'text':'15时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data15}
            ]
        },
				        {
            title : {'text':'16时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data16}
            ]
        },
				        {
            title : {'text':'17时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data17}
            ]
        },
				        {
            title : {'text':'18时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data18}
            ]
        },
				        {
            title : {'text':'19时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data19}
            ]
        },
			        {
            title : {'text':'20时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data20}
            ]
        },
							        {
            title : {'text':'21时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data21}
            ]
        },
							        {
            title : {'text':'22时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data22}
            ]
        },
							        {
            title : {'text':'23时刻共享单车坐标点经纬度分布'},
            series : [
                {'data': data23}
            ]
        }					
]
};
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}
       </script>
   </body>
</html>