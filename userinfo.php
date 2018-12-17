<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 
<title>欢迎登录界面</title> 
</head> 
<body> 
 
<?php 
session_start (); 
  ?> 
欢迎登录: <?php 
  echo "${_SESSION["username"]}";//显示登录用户名 
  ?><hr> 
您的ip：<?php 
  echo "${_SERVER['REMOTE_ADDR']}";//显示ip 
  ?> 
<hr> 
您的语言： 
<?php 
  echo "${_SERVER['HTTP_ACCEPT_LANGUAGE']}";//使用的语言 
  ?> 
<hr> 
浏览器版本： 
<?php 
  echo "${_SERVER['HTTP_USER_AGENT']}";//浏览器版本信息 
  ?>   
 </body> 
</html> 
