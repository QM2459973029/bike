<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<script src="xlsx.full.min.js"></script>
    <script src="FileSaver.js"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=HHsBD1TnThBuXNUvwSZgdCsTP2OTSWoO"></script>
    <title>权重值生成</title>
	<style type="test/css">
	#map{height:100px;
	width:100px;}
	</style>
</head>
<body>
<p>[注]1.此数据为中间数据的导出，因热力图的需求设置权重值。</p>
<p>2.权重值的生成安装密度函数生成，点的密度越高，权重值越高。</p>
	<button onclick="downloadExl(points)">权重值数据导出</button>
	<div id="map"></div>
</body>
</html>
<script type="text/javascript">
<?php
        $time ="2017-05-10 0:00:00";//设置数据点时间
	    $data =array();
        $con=mysqli_connect("localhost","root","root"); 
        if (!$con) { 
          die('数据库连接失败'.$mysql_error()); 
       } 
        mysqli_select_db($con,"user_info"); 
	    $result = mysqli_query($con,"select STARTX,STARTY from point where startTime ='{$time}';");
	    while ($row=mysqli_fetch_array($result,MYSQLI_NUM)){
	    $data[]=$row;
	   }
	    //print_r($data);
	   
		//echo count($data); echo '<hr>';
	    $data = json_encode($data);
	   // echo count($data);
?>
var map = new BMap.Map("map", {});
    map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);     // 初始化地图,设置中心点坐标和地图级别
    map.enableScrollWheelZoom();
    var points =[];
    var data =eval('<?php echo $data;?>');
	var markerArr = [];
    var selecteddataCopy = [];
    var selectedObjArr = [];
    var defaultDistance = 25000;
    var defaultCount = 10;
    var maxCount = defaultCount;

    function heatdata(data){
        selectedObjArr = [];
        var distance;
        for(var i = 0;i<data.length;i++){
            var count = defaultCount;
            for(var j = 0;j<data.length-1;j++){
				var point1 = new BMap.Point(data[j]);
				var point2 = new BMap.Point(data[j+1]);
                distance = map.getDistance(point1,point2);
                if( distance < defaultDistance){
                    count += (defaultDistance-distance)/defaultDistance;
                }
            }
            if(maxCount<count){
                maxCount = count;
            }
            var obj = {};
            obj["lng"] = data[i][0];
            obj["lat"] = data[i][1];
            obj["count"] = Math.round(count);
            selectedObjArr.push(obj);
        }

        return selectedObjArr;
    }
   points = heatdata(data);

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
                SheetNames: ["helloSheet"],
                Sheets: {
                    "helloSheet": Object.assign({}, content, { "!ref": coordinate[0] + ":" + coordinate[coordinate.length - 1] }),
                }
            };
            //这里的数据是用来定义导出的格式类型
            var excelData = XLSX.write(workBook, { bookType: "xlsx", bookSST: false, type: "binary" });
            var blob = new Blob([string2ArrayBuffer(excelData)], { type: "" });
            saveAs(blob, "hello.xlsx");
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