<?php
$con=mysqli_connect("localhost","root","root","user_info");
// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

mysqli_query($con,"DELETE FROM testpoint");
echo "<script language='javascript'>alert('清空完成！');history.go(-1); </script>";
mysqli_close($con);
?>