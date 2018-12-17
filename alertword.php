<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 
<title>正在修改密码</title> 
</head> 
<body> 
  <?php 
  session_start (); 
  $username = $_REQUEST ["username"]; 
  $oldpassword = $_REQUEST ["oldpassword"]; 
  $newpassword = $_REQUEST ["newpassword"]; 
   
  $con = mysqli_connect ( "localhost", "root", "root" ); 
  if (! $con) { 
    die ( '数据库连接失败' . $mysqli_error () ); 
  } 
  mysqli_select_db ( $con,"user_info"  ); 
  $dbusername = null; 
  $dbpassword = null; 
  $result = mysqli_query ($con, "select * from user_info where username ='{$username}';" ); 
  while ( $row = mysqli_fetch_array ( $result ) ) { 
    $dbusername = $row ["username"]; 
    $dbpassword = $row ["password"]; 
  } 
  if (is_null ( $dbusername )) { 
    ?> 
  <script type="text/javascript"> 
    alert("用户名不存在"); 
    window.location.href="alertword.html"; 
  </script>  
  <?php 
  } 
  if ($oldpassword != $dbpassword) { 
    ?> 
  <script type="text/javascript"> 
    alert("密码错误"); 
    window.location.href="alertword.html"; 
  </script> 
  <?php 
  } 
  mysqli_query ($con, "update user_info set password='{$newpassword}' where username='{$username}'" ) or die ( "存入数据库失败" . mysqli_error () );//如果上述用户名密码判定不错，则update进数据库中 
  mysqli_close ( $con ); 
  ?> 
 <script type="text/javascript" src="lib/layer/2.4/layer.js"></script>
  <script type="text/javascript">
    alert("密码修改成功!将跳转到登陆页面");
	window.parent.location.href="enter.html";
	var index = parent.layer.getElementFrameIndex(window.name);
	parent.layer.close(index);
	 
  </script> 
</body> 
</html> 
