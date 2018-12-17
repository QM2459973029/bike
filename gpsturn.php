<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<script src="xlsx.full.min.js"></script>
    <script src="FileSaver.js"></script>
    <script src="pointtransfertools.js"></script>
    <script src="jquery.js"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=HHsBD1TnThBuXNUvwSZgdCsTP2OTSWoO"></script>
    <title>GPS坐标转换百度坐标</title>
	<style type="test/css">
	#map{height:100px;
	width:100px;}
	</style>
</head>
<body>
<p>[注]1.因共享单车数据为原始GPS坐标，但本系统利用了百度地图作为基础，故需要进行坐标的转换。<p><br/>
   <p> 2.本功能是作为中间数据的导出，其坐标转换在其他功能模块都有转换程序，无需再转换。<p><br>

	<button onclick="downloadExl(points)">起点坐标数据的导出</button>
	<button onclick="downloadExl(points1)">终点坐标数据的导出</button>
	<div id="map"></div>
</body>
</html>
<script type="text/javascript">
<?php
        $time ="2017-05-10 8:00:00";//设置数据点时间
	    $data =array();
	    $data1 =array();
        $con=mysqli_connect("localhost","root","root"); 
        if (!$con) { 
          die('数据库连接失败'.$mysql_error()); 
       } 
        mysqli_select_db($con,"user_info"); 
	    $result = mysqli_query($con,"select STARTX,STARTY from point;");
	    $result1 = mysqli_query($con,"select ENDX,ENDY from point};");
	    while ($row=mysqli_fetch_array($result,MYSQLI_NUM)){
	    $data[]=$row;
	   }	    while ($row=mysqli_fetch_array($result1,MYSQLI_NUM)){
	    $data1[]=$row;
	   }
	    //print_r($data);
	   
		//echo count($data); echo '<hr>';
	    $data = json_encode($data);
	    $data1 = json_encode($data1);
	   // echo count($data);
?>  
var data=eval('<?php echo $data;?>');
		var points=[];
        for (var i = 0; i < data.length; i++) {
		  //array[i] = data[i].split(",");
		  //alert(array[i]);
		  //alert(data[i][0]);
		  //alert(data[i]);
          points.push(new BMap.Point(data[i][0],data[i][1]));
        } 
	//console.log(points);
	points=GpsToBaiduPoints(points)
   //points = heatdata(data);
   //console.log(points);
var data1=eval('<?php echo $data1;?>');
		var points1=[];
        for (var i = 0; i < data1.length; i++) {
			          points1.push(new BMap.Point(data1[i][0],data1[i][1]));
        } 
	points1=GpsToBaiduPoints(points1)

        function downloadExl(data, type) {

            var keys = Object.keys(data[0]);
            var firstRow = {};
            keys.forEach(function (item) {
                firstRow[item] = item;
            });
            data.unshift(firstRow);

            var content = {};

            // 把json格式的数据转为excel的行列形式
            var sheetsData = data.map(function (item, rowIndex) {
                return keys.map(function (key, columnIndex) {
                    return Object.assign({}, {
                        value: item[key],
                        position: (columnIndex > 25 ? getCharCol(columnIndex) : String.fromCharCode(65 + columnIndex)) + (rowIndex + 1),
                    });
                });
            }).reduce(function (prev, next) {
                return prev.concat(next);
            });

            sheetsData.forEach(function (item, index) {
                content[item.position] = { v: item.value };
            });

            //设置区域,比如表格从A1到D10,SheetNames:标题，
            var coordinate = Object.keys(content);
            var workBook = {
                SheetNames: ["dataSheet"],
                Sheets: {
                    "dataSheet": Object.assign({}, content, { "!ref": coordinate[0] + ":" + coordinate[coordinate.length - 1] }),
                }
            };
            //这里的数据是用来定义导出的格式类型
            var excelData = XLSX.write(workBook, { bookType: "xlsx", bookSST: false, type: "binary" });
            var blob = new Blob([string2ArrayBuffer(excelData)], { type: "" });
            saveAs(blob, "data.xlsx");
        }
        //字符串转字符流
        function string2ArrayBuffer(s) {
            var buf = new ArrayBuffer(s.length);
            var view = new Uint8Array(buf);
            for (var i = 0; i != s.length; ++i) view[i] = s.charCodeAt(i) & 0xFF;
            return buf;
        }
        // 将指定的自然数转换为26进制表示。映射关系：[0-25] -> [A-Z]。
        function getCharCol(n) {
            let temCol = "",
                s = "",
                m = 0
            while (n > 0) {
                m = n % 26 + 1
                s = String.fromCharCode(m + 64) + s
                n = (n - m) / 26
            }
            return s
        }
</script>