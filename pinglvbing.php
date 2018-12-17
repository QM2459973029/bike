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
var app = {};
<?php
	    $data =array();$bikeid=array();$times=array();
        $con=mysqli_connect("localhost","root","root"); 
        if (!$con) { 
          die('数据库连接失败'.$mysql_error()); 
       } 
        mysqli_select_db($con,"user_info"); 
	    $result = mysqli_query($con,"select bikeID from point;");
	    while ($row=mysqli_fetch_array($result,MYSQLI_NUM)){
	    $data[]=$row;
	   }
	     $count = count($data);
		for($i=0;$i<$count;$i++){
			//var_dump($data[$i][0]);
		 $bikeid[$i] =$data[$i][0];
		}
		// var_dump($bikeid);
	    $data = array_count_values($bikeid);
		//echo count($data); echo '<hr>';
	    //$data = json_encode($data);
	    //echo count($data);
		//echo '<hr>';
		//var_dump($data);
		foreach ($data as $key => $value) {  
       // echo $value . "<br>";  
       $times[]=$value;
}
//var_dump($times);
$times = array_count_values($times);$shu=array();$ci=array();
//var_dump($times);
foreach($times as $key => $value){
$shu[]=$key;
$ci[]=$value;
}
//var_dump($shu);
//var_dump($ci);
?>
var shu=<?php echo json_encode($shu); ?>;
var ci=<?php echo json_encode($ci); ?>;

option = null;
option = {
    title : {
        text: '单车日骑行频率饼状图',
        subtext: '摩拜单车提供',
        x:'center'
    },
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },	
		toolbox:{
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
    legend: {
        orient: 'vertical',
        left: 'left',
        data: ['1','4','2','3','6','5','7','8','10']
    },
    series : [
        {
            name: '日骑行频率',
            type: 'pie',
            radius : '55%',
            center: ['50%', '60%'],
            data:[
				{value:ci[0],name:'1'},
				{value:ci[1],name:'4'},
				{value:ci[2],name:'2'},
				{value:ci[3],name:'3'},
				{value:ci[4],name:'6'},
				{value:ci[5],name:'5'},
				{value:ci[6],name:'7'},
				{value:ci[8],name:'8'},
				{value:ci[9],name:'10'}
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
;
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}
       </script>
   </body>
</html>