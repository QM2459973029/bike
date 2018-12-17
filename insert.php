<?php 
error_reporting(E_ALL ^ E_NOTICE); 
if($_POST){ 
 $Import_TmpFile = $_FILES['file']['tmp_name']; 
 require_once 'conn.php'; 
mysql_select_db('user_info'); //选择数据库    
require_once 'Excel/reader.php'; 
 $data = new Spreadsheet_Excel_Reader(); 
 $data->setOutputEncoding('UTF-8'); 
 $data->read($Import_TmpFile); 
 $array =array(); 
 for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) { 
    for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) { 
     $array[$i][$j] = $data->sheets[0]['cells'][$i][$j]; 
    } 
 }
 sava_data($array); 

} 
 function sava_data($array){    
    $count =0;    
    $total =0; 
    foreach( $array as $tmp){
         //插入的sql语句，其中$tmp[1]去xls的第一列，$Isql = "Select id from xls where id='".$tmp[1]."'"; 
         $sql = "Insert into testpoint value('".$tmp[1]."','".$tmp[2]."','".$tmp[3]."','".$tmp[4]."','".$tmp[5]."','".$tmp[6]."')"; 
         if(mysql_query($sql) ){
            $count++;
         }else{
			echo $sql;
		 }
        $total++; 
    } 
    echo "<script>alert('共有".$total."条数据，导入".$count."条数据！');</script>"; 
     
 } 
    
 function TtoD($text){ 
    $jd1900 = GregorianToJD(1, 1, 1900)-2; 
    $myJd = $text+$jd1900; 
    $myDate = JDToGregorian($myJd); 
    $myDate = explode('/',$myDate); 
    $myDateStr = str_pad($myDate[2],4,'0', STR_PAD_LEFT)."-".str_pad($myDate[0],2,'0', STR_PAD_LEFT)."-".str_pad($myDate[1],2,'0', STR_PAD_LEFT); 
    return $myDateStr;        
    }
?> 