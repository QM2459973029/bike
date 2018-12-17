<!DOCTYPE> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>数据的导入</title> 
</head> 

<body> 

<script> 
 function import_check(){ 
    var f_content = form1.file.value; 
    var fileext=f_content.substring(f_content.lastIndexOf("."),f_content.length) 
        fileext=fileext.toLowerCase() 
     if (fileext!='.xls') 
        { 
         alert("对不起，导入数据格式必须是xls格式文件哦，请您调整格式后重新上传，谢谢 ！");            
         return false; 
        } 
 } 
</script> 

    <table width="98%" border="0" align="center" style="margin-top:20px; border:1px solid #9abcde;"> 
    <form id="form1" name="form1" enctype="multipart/form-data" method="post" action="insert.php"> 
    
        <tr> 
            <td width="18%" height="50"> 选择你要导入的数据表</td> 
            <td width="82%"><label> 
            <input name="file" type="file" id="file" size="50" /> 
            </label> 
                <label> 
                <input name="button" type="submit" class="nnt_submit" id="button" value="导入数据"    onclick="import_check();"/> 
                </label> 
 </td> 
        </tr> 
        <tr> 
            <td colspan="2" bgcolor="#DDF0FF">  [<span class="STYLE1">注</span>]数据导入格式说明:</td> 
        </tr> 
        <tr> 
            <td colspan="2">    1、其它.导入数据表文件必须是<strong>execel</strong>文件格式{.<span class="STYLE2">xls</span>}为扩展名．</td> 
        </tr> 
        <tr> 
            <td colspan="2">  2、execel文件导入数据顺序必须如：ID    | 经度  | 纬度  </td> 
        </tr> 
        <tr> 
            <td colspan="2"> </td> 
        </tr></form> 
    </table> 
</body> 
</html> 