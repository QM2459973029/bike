<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 
  <title>注册用户</title> 
</head> 
<body> 
  <?php  
    session_start(); 
$code=$_POST["passcode"];
if( $code == $_SESSION["Checknum"])
{
    $username=$_REQUEST["username"]; 
    $password=$_REQUEST["password"]; 
    $password2=$_REQUEST["password2"]; 

  if($password!=$password2)
	  {
	  ?>
     <script type="text/javascript"> 
      alert("两次密码输入不一致！"); 
    window.location.href="register.html";
	</script>
  <?php
  }
  ?>
  <?php
    $con=mysqli_connect("localhost","root","root"); 
    if (!$con) { 
      die('数据库连接失败'.$mysql_error()); 
    } 
    mysqli_select_db($con,"user_info"); 
    $dbusername=null; 
    $dbpassword=null; 
    $result=mysqli_query($con,"select * from user_info where username ='{$username}' and isdelete =0;"); 
    while ($row=mysqli_fetch_array($result)) { 
      $dbusername=$row["username"]; 
      $dbpassword=$row["password"]; 
    } 
    if(!is_null($dbusername)){ 
  ?> 
  <script type="text/javascript"> 
    alert("用户已存在"); 
    window.location.href="register.html"; 
  </script>
  <?php  
    } 
    mysqli_query($con,"insert into user_info (username,password) values('{$username}','{$password}')") or die("存入数据库失败".mysqli_error($con)) ; 
    mysqli_close($con); 
  ?> 
  <script type="text/javascript"> 
    alert("注册成功"); 
    window.location.href="enter.html";
  </script>    
  <?php
}
    else {?>
	<script type="text/javascript"> 
      alert("验证码输入错误！"); 
    window.location.href="register.html";
  </script>
  <?php
	}
  ?>
</body> 
</html> 