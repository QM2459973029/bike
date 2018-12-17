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
option = null;

var hours = ['1', '2', '3', '4', '5', '6', '7',
        '8', '9', '10','11'];
var days = ['1', '2', '3',
        '4', '5', '6', '7', '8', '9', '10', '11'];

<?php
	    $data =array();
        $con=mysqli_connect("localhost","root","root"); 
        if (!$con) { 
          die('数据库连接失败'.$mysql_error()); 
       } 
        mysqli_select_db($con,"user_info"); 
	    $result = mysqli_query($con,"select ENDX,ENDY from point;");
	    while ($row=mysqli_fetch_array($result,MYSQLI_NUM)){
	    $data[]=$row;
	   }
	    //print_r($data);
	   
		//echo count($data); echo '<hr>';
	    $data = json_encode($data);
	   // echo count($data);
?>
    var data =eval('<?php echo $data;?>');
	var arr=new Array();var leng=data.length;
	var latarr=new Array();
for(i=0;i<data.length;i++){
   arr[i]=data[i][0]; 
   latarr[i]=data[i][1];
}
var lngmax = 116.89;
var lngmin = 115.89;
var latmax = 40.3;
var latmin = 39.5;
//console.log(lngmax);
//console.log(lngmin);
//console.log(latmax);
//console.log(latmin);
var lngcha=lngmax-lngmin;
var latcha=latmax-latmin;
var chang=lngcha/11;
var kuan=latcha/11;

var fenbu=new Array();
var a0=0;
var a1=0;
var a2=0;
var a3=0;
var a4=0;
var a5=0;
var a6=0;
var a7=0;
var a8=0;
var a9=0;
var a10=0;
var a11=0;
var a12=0;
var a13=0;
var a14=0;
var a15=0;
var a16=0;
var a17=0;
var a18=0;
var a19=0;
var a20=0;
var a21=0;
var a22=0;
var a23=0;
var a24=0;
var a25=0;
var a26=0;
var a27=0;
var a28=0;
var a29=0;
var a30=0;
var a31=0;
var a32=0;
var a33=0;
var a34=0;
var a35=0;
var a36=0;
var a37=0;
var a38=0;
var a39=0;
var a40=0;
var a41=0;
var a42=0;
var a43=0;
var a44=0;
var a45=0;
var a46=0;
var a47=0;
var a48=0;
var a49=0;
var a50=0;
var a51=0;
var a52=0;
var a53=0;
var a54=0;
var a55=0;
var a56=0;
var a57=0;
var a58=0;
var a59=0;
var a60=0;
var a61=0;
var a62=0;
var a63=0;
var a64=0;
var a65=0;
var a66=0;
var a67=0;
var a68=0;
var a69=0;
var a70=0;
var a71=0;
var a72=0;
var a73=0;
var a74=0;
var a75=0;
var a76=0;
var a77=0;
var a78=0;
var a79=0;
var a80=0;
var a81=0;
var a82=0;
var a83=0;
var a84=0;
var a85=0;
var a86=0;
var a87=0;
var a88=0;
var a89=0;
var a90=0;
var a91=0;
var a92=0;
var a93=0;
var a94=0;
var a95=0;
var a96=0;
var a97=0;
var a98=0;
var a99=0;
var a100=0;
var a101=0;
var a102=0;
var a103=0;
var a104=0;
var a105=0;
var a106=0;
var a107=0;
var a108=0;
var a109=0;
var a110=0;
var a111=0;
var a112=0;
var a113=0;
var a114=0;
var a115=0;
var a116=0;
var a117=0;
var a118=0;
var a119=0;
var a120=0;

for(i=0;i<data.length;i++){
  for(n=0;n<11;n++){
	 if((latmin + kuan*n) < data[i][1] && data[i][1] < (latmin + kuan*(n+1))){
	     for(k=0;k<11;k++){
		    if((lngmin + chang*k) < data[i][0] && data[i][0] < (lngmin + chang*(k+1))){
               if(n==0 && k==0){a0++;}
               if(n==0 && k==1){a1++;}
               if(n==0 && k==2){a2++;}
               if(n==0 && k==3){a3++;}
               if(n==0 && k==4){a4++;}
               if(n==0 && k==5){a5++;}
               if(n==0 && k==6){a6++;}
               if(n==0 && k==7){a7++;}
               if(n==0 && k==8){a8++;}
               if(n==0 && k==9){a9++;}
               if(n==0 && k==10){a10++;}
               if(n==1 && k==0){a11++;}
               if(n==1 && k==1){a12++;}
               if(n==1 && k==2){a13++;}
               if(n==1 && k==3){a14++;}
               if(n==1 && k==4){a15++;}
               if(n==1 && k==5){a16++;}
               if(n==1 && k==6){a17++;}
               if(n==1 && k==7){a18++;}
               if(n==1 && k==8){a19++;}
               if(n==1 && k==9){a20++;}
               if(n==1 && k==10){a21++;}
               if(n==2 && k==0){a22++;}
               if(n==2 && k==1){a23++;}
               if(n==2 && k==2){a24++;}
               if(n==2 && k==3){a25++;}
               if(n==2 && k==4){a26++;}
               if(n==2 && k==5){a27++;}
               if(n==2 && k==6){a28++;}
               if(n==2 && k==7){a29++;}
               if(n==2 && k==8){a30++;}
               if(n==2 && k==9){a31++;}
               if(n==2 && k==10){a32++;}
               if(n==3 && k==0){a33++;}
               if(n==3 && k==1){a34++;}
               if(n==3 && k==2){a35++;}
               if(n==3 && k==3){a36++;}
               if(n==3 && k==4){a37++;}
               if(n==3 && k==5){a38++;}
               if(n==3 && k==6){a39++;}
               if(n==3 && k==7){a40++;}
               if(n==3 && k==8){a41++;}
               if(n==3 && k==9){a42++;}
               if(n==3 && k==10){a43++;}
               if(n==4 && k==0){a44++;}
               if(n==4 && k==1){a45++;}
               if(n==4 && k==2){a46++;}
               if(n==4 && k==3){a47++;}
               if(n==4 && k==4){a48++;}
               if(n==4 && k==5){a49++;}
               if(n==4 && k==6){a50++;}
               if(n==4 && k==7){a51++;}
               if(n==4 && k==8){a52++;}
               if(n==4 && k==9){a53++;}
               if(n==4 && k==10){a54++;}
               if(n==5 && k==0){a55++;}
               if(n==5 && k==1){a56++;}
               if(n==5 && k==2){a57++;}
               if(n==5 && k==3){a58++;}
               if(n==5 && k==4){a59++;}
               if(n==5 && k==5){a60++;}
               if(n==5 && k==6){a61++;}
               if(n==5 && k==7){a62++;}
               if(n==5 && k==8){a63++;}
               if(n==5 && k==9){a64++;}
               if(n==5 && k==10){a65++;}
               if(n==6 && k==0){a66++;}
               if(n==6 && k==1){a67++;}
               if(n==6 && k==2){a68++;}
               if(n==6 && k==3){a69++;}
               if(n==6 && k==4){a70++;}
               if(n==6 && k==5){a71++;}
               if(n==6 && k==6){a72++;}
               if(n==6 && k==7){a73++;}
               if(n==6 && k==8){a74++;}
               if(n==6 && k==9){a75++;}
               if(n==6 && k==10){a76++;}
               if(n==7 && k==0){a77++;}
               if(n==7 && k==1){a78++;}
               if(n==7 && k==2){a79++;}
               if(n==7 && k==3){a80++;}
               if(n==7 && k==4){a81++;}
               if(n==7 && k==5){a82++;}
               if(n==7 && k==6){a83++;}
               if(n==7 && k==7){a84++;}
               if(n==7 && k==8){a85++;}
               if(n==7 && k==9){a86++;}
               if(n==7 && k==10){a87++;}
               if(n==8 && k==0){a88++;}
               if(n==8 && k==1){a89++;}
               if(n==8 && k==2){a90++;}
               if(n==8 && k==3){a91++;}
               if(n==8 && k==4){a92++;}
               if(n==8 && k==5){a93++;}
               if(n==8 && k==6){a94++;}
               if(n==8 && k==7){a95++;}
               if(n==8 && k==8){a96++;}
               if(n==8 && k==9){a97++;}
               if(n==8 && k==10){a98++;}
               if(n==9 && k==0){a99++;}
               if(n==9 && k==1){a100++;}
               if(n==9 && k==2){a101++;}
               if(n==9 && k==3){a102++;}
               if(n==9 && k==4){a103++;}
               if(n==9 && k==5){a104++;}
               if(n==9 && k==6){a105++;}
               if(n==9 && k==7){a106++;}
               if(n==9 && k==8){a107++;}
               if(n==9 && k==9){a108++;}
               if(n==9 && k==10){a109++;}
               if(n==10 && k==0){a110++;}
               if(n==10 && k==1){a111++;}
               if(n==10 && k==2){a112++;}
               if(n==10 && k==3){a113++;}
               if(n==10 && k==4){a114++;}
               if(n==10 && k==5){a115++;}
               if(n==10 && k==6){a116++;}
               if(n==10 && k==7){a117++;}
               if(n==10 && k==8){a118++;}
               if(n==10 && k==9){a119++;}
               if(n==10 && k==10){a120++;}
			}
		 }
			   }
	}
}
var point = [[0,0,a0],[0,1,a1],[0,2,a2],[0,3,a3],[0,4,a4],[0,5,a5],[0,6,a6],[0,7,a7],[0,8,a8],[0,9,a9],[0,10,a10],[1,0,a11],[1,1,a12],[1,2,a13],[1,3,a14],[1,4,a15],[1,5,a16],[1,6,a17],[1,7,a18],[1,8,a19],[1,9,a20],[1,10,a21],[2,0,a22],[2,1,a23],[2,2,a24],[2,3,a25],[2,4,a26],[2,5,a27],[2,6,a28],[2,7,a29],[2,8,a30],[2,9,a31],[2,10,a32],
[3,0,a33],[3,1,a34],[3,2,a35],[3,3,a36],[3,4,a37],[3,5,a38],[3,6,a39],[3,7,a40],[3,8,a41],[3,9,a42],[3,10,a43],[4,0,a44],[4,1,a45],[4,2,a46],[4,3,a47],[4,4,a48],[4,5,a49],[4,6,a50],[4,7,a51],[4,8,a52],[4,9,a53],[4,10,a54],[5,0,a55],[5,1,a56],[5,2,a57],[5,3,a58],[5,4,a59],[5,5,a60],[5,6,a61],[5,7,a62],[5,8,a63],[5,9,a64],[5,10,a65],[6,0,a66],[6,1,a67],[6,2,a68],[6,3,a69],[6,4,a70],[6,5,a71],[6,6,a72],[6,7,a73],[6,8,a74],[6,9,a75],[6,10,a76],[7,0,a77],[7,1,a78],[7,2,a79],[7,3,a80],[7,4,a81],[7,5,a82],[7,6,a83],[7,7,a84],[7,8,a85],[7,9,a86],[7,10,a87],[8,0,a88],[8,1,a89],[8,2,a90],[8,3,a91],[8,4,a92],[8,5,a93],[8,6,a94],[8,7,a95],[8,8,a96],[8,9,a97],[8,10,a98],[9,0,a99],[9,1,a100],[9,2,a101],[9,3,a102],[9,4,a103],[9,5,a104],[9,6,a105],[9,7,a106],[9,8,a107],[9,9,a108],[9,10,a109],[10,0,a110],[10,1,a111],[10,2,a112],[10,3,a113],[10,4,a114],[10,5,a115],[10,6,a116],[10,7,a117],[10,8,a118],[10,9,a119],[10,10,a120]];




option = {
    tooltip: {},
    visualMap: {
        max: 20,
        inRange: {
            color: ['#313695', '#4575b4', '#74add1', '#abd9e9', '#e0f3f8', '#ffffbf', '#fee090', '#fdae61', '#f46d43', '#d73027', '#a50026']
        }
    },
	title : {
                'text':'北京市共享单车起始点3D分布',
                'subtext':'数据来自摩拜单车',x:'center'
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
    xAxis3D: {
        type: 'category',
        data: hours
    },
    yAxis3D: {
        type: 'category',
        data: days
    },
    zAxis3D: {
        type: 'value'
    },
    grid3D: {
        boxWidth: 80,
        boxDepth: 80,
        viewControl: {
            // projection: 'orthographic'
        },
        light: {
            main: {
                intensity: 1.2,
                shadow: true
            },
            ambient: {
                intensity: 0.3
            }
        }
    },
    series: [{
        type: 'bar3D',
        data: point.map(function (item) {
            return {
                value: [item[1], item[0], item[2]],
            }
        }),
        shading: 'lambert',

        label: {
            textStyle: {
                fontSize: 16,
                borderWidth: 1
            }
        },

        emphasis: {
            label: {
                textStyle: {
                    fontSize: 20,
                    color: '#900'
                }
            },
            itemStyle: {
                color: '#900'
            }
        }
    }]
};
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}
       </script>
   </body>
</html>