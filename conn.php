<?php 
$host="localhost"; 
$user="root"; 
$password="root"; 
$database="user_info"; 
$connect=@mysql_connect("$host","$user","$password"); 
if(!$connect) 
{ 
  echo "database connect wrong"; 
  exit; 
  } 
$db=mysql_select_db("$database",$connect); 
$sql=mysql_query('set names utf8');
?> 