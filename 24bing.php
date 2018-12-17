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
	    $data =array();
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
	    //print_r($data);
	   
		//echo count($data); echo '<hr>';
	   // $data = json_encode($data);
	    $count0 = count($data0);
	    $count1 = count($data1);
	    $count2 = count($data2);
	    $count3 = count($data3);
	    $count4 = count($data4);
	    $count5 = count($data5);
	    $count6 = count($data6);
	    $count7 = count($data7);
	    $count8 = count($data8);
	    $count9 = count($data9);
	    $count10 = count($data10);
	    $count11 = count($data11);
	    $count12 = count($data12);
	    $count13 = count($data13);
	    $count14 = count($data14);
	    $count15 = count($data15);
	    $count16= count($data16);
	    $count17 = count($data17);
	    $count18 = count($data18);
	    $count19 = count($data19);
	    $count20 = count($data20);
	    $count21 = count($data21);
	    $count22 = count($data22);
	    $count23 = count($data23);
		?>
 var count0 =eval('<?php echo $count0;?>');
 var count1 =eval('<?php echo $count1;?>');
 var count2 =eval('<?php echo $count2;?>');
 var count3 =eval('<?php echo $count3;?>');
 var count4 =eval('<?php echo $count4;?>');
 var count5 =eval('<?php echo $count5;?>');
 var count6 =eval('<?php echo $count6;?>');
 var count7 =eval('<?php echo $count7;?>');
 var count8 =eval('<?php echo $count8;?>');
 var count9 =eval('<?php echo $count9;?>');
 var count10=eval('<?php echo $count10;?>');
 var count11=eval('<?php echo $count11;?>');
 var count12=eval('<?php echo $count12;?>');
 var count13=eval('<?php echo $count13;?>');
 var count14=eval('<?php echo $count14;?>');
 var count15=eval('<?php echo $count15;?>');
 var count16 =eval('<?php echo $count16;?>');
 var count17 =eval('<?php echo $count17;?>');
 var count18 =eval('<?php echo $count18;?>');
 var count19=eval('<?php echo $count19;?>');
 var count20 =eval('<?php echo $count20;?>');
 var count21 =eval('<?php echo $count21;?>');
 var count22 =eval('<?php echo $count22;?>');
 var count23 =eval('<?php echo $count23;?>');
<?php
mysqli_close($con);
?>
var dom = document.getElementById("container");
var myChart = echarts.init(dom);
var app = {};option = null;
option = {
    title : {
        text: '24小时单车数量分布',
        subtext: '摩拜单车数据支持',
        x:'center'
    },toolbox:{
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
		type:'scroll',
	    itemGap:25,
		itemWidth:80,
	    itemHeight:25,
        orient: 'vertical',
        left: 'left',
        data: ['0时用车数','1时用车数','2时用车数','3时用车数','4时用车数','5时用车数','6时用车数','7时用车数','8时用车数','9时用车数','10时用车数','11时用车数','12时用车数','13时用车数','14时用车数','15时用车数','16时用车数','17时用车数','18时用车数','19时用车数','20时用车数','21时用车数','22时用车数','23时用车数']
    },
    series : [
        {
            name: '单车数量',
            type: 'pie',
            radius : '55%',
            center: ['50%', '60%'],
            data:[
                {value:count0, name:'0时用车数'},
                {value:count1, name:'1时用车数'},
                {value:count2, name:'2时用车数'},
                {value:count3, name:'3时用车数'},
                {value:count4, name:'4时用车数'},
                {value:count5, name:'5时用车数'},
                {value:count6, name:'6时用车数'},
                {value:count7, name:'7时用车数'},
                {value:count8, name:'8时用车数'},
                {value:count9, name:'9时用车数'},
                {value:count10, name:'10时用车数'},
                {value:count11, name:'11时用车数'},
                {value:count12, name:'12时用车数'},
                {value:count13, name:'13时用车数'},
                {value:count14, name:'14时用车数'},
                {value:count15, name:'15时用车数'},
                {value:count16, name:'16时用车数'},
                {value:count17, name:'17时用车数'},
                {value:count18, name:'18时用车数'},
                {value:count19, name:'19时用车数'},
                {value:count20, name:'20时用车数'},
                {value:count21, name:'21时用车数'},
                {value:count22, name:'22时用车数'},
                {value:count23, name:'23时用车数'},
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