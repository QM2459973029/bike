<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 
</head> 
<body> 
<?php 
session_start ();//将session销毁时调用destroy 
session_destroy ();?>
 
<script type="text/javascript"> 
// var msg="您真的确定要退出登陆吗？";
// if(confirm(msg)==true){
// window.location.href="enter.html";}
// else
	   window.location.href="enter.html";
	 
</script> 

 
</body> 
</html> 
