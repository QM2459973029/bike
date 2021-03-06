﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>共享单车信息管理与决策系统</title>
</head>
<body>
<?php
  session_start();
  if(isset( $_SESSION["code"])){//判断code存不存在，如果不存在，说明异常登录
  ?>
  
<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="#">共享单车信息管理与决策</a>
			<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont">&#xe600;</i> 数据管理 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="javascript:;" onclick="adddata()"><i class="Hui-iconfont">&#xe616;</i> EXCEL数据上传</a></li>
							<li><a href="javascript:;" onclick="turn()"><i class="Hui-iconfont">&#xe616;</i> 坐标的批量转换</a></li>
							<li><a href="javascript:;" onclick="count()"><i class="Hui-iconfont">&#xe616;</i> 生成权重值(密度)</a></li>
<!-- 						<li><a href="javascript:;" onclick="wenzi()"><i class="Hui-iconfont">&#xe616;</i>数据统计</a></li>  -->
							<li><a href="clear.php" onclick=""><i class="Hui-iconfont">&#xe616;</i> 清除数据库</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
			<ul class="cl">
				<li>超级管理员</li>
				<li class="dropDown dropDown_hover">
					<a href="#" class="dropDown_A">admin <i class="Hui-iconfont">&#xe6d5;</i></a>
					<ul class="dropDown-menu menu radius box-shadow">
						<li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
						<li><a href="#" onclick="alertword()">修改密码</a></li>
						<li><a href="#" onclick="logout()">退出</a></li>
				</ul>
			</li>
				<li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
					<ul class="dropDown-menu menu radius box-shadow">
						<li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
						<li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
						<li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
						<li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
						<li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
						<li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</div>
</header>
<aside class="Hui-aside">
	<div class="menu_dropdown bk_2">
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i>空间数据的查询<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="sandianSTART.php" data-title="起点散点图" href="javascript:void(0)">起始点散点图</a></li>			
					<li><a data-href="sandianEND.php" data-title="终点散点图" href="javascript:void(0)">停靠点散点图</a></li>
					<li><a data-href="reilistart.php" data-title="热力图" href="javascript:void(0)">起始点热力图</a></li>
					<li><a data-href="reiliend.php" data-title="热力图" href="javascript:void(0)">停靠点热力图</a></li>
					<li><a data-href="startsan.php" data-title="共享单车起点动态分布" href="javascript:void(0)">共享单车起始点动态分布</a></li>
	                <li><a data-href="endsan.php" data-title="共享单车终点动态分布" href="javascript:void(0)">共享单车停靠点动态分布</a></li>
					<li><a data-href="fei.php" data-title="路线图" href="javascript:;">路线图</a></li>				 
					</ul>
		    </dd>
	</dl>

		<dl id="menu-member"> 
 			<dt><i class="Hui-iconfont">&#xe613;</i> 图表数据查询<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt> 
 			<dd>
 				<ul> 
 		      <li><a data-href="24count.php" data-title="24小时骑行数分布" href="javascript:;">24小时骑行数分布</a></li>
			  <li><a data-href="leixing.php" data-title="单车类型分布图" href="javascript:;">单车类型分布图</a></li>
			  <li><a data-href="ripinglv.php" data-title="单车日骑行频率" href="javascript:void(0)">单车日骑行频率</a></li>
			  <li><a data-href="wenzi.php" data-title="数据统计"></i>数据统计</a></li>
 			</ul> 
 		</dd> 
 	</dl> 
		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe620;</i> 数据分析<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a  data-href="startbar.php" data-title="共享单车订单量3D分布" href="javascript:void(0)">共享单车订单量3D分布</a></li>
					<li><a  data-href="dingbin.php" data-title="共享单车订单量平面分布" href="javascript:void(0)">共享单车订单量平面分布</a></li>
					<li><a  data-href="shuliang.php" data-title="共享单车平均量3D分布" href="javascript:void(0)">共享单车平均量3D分布</a></li>
					<li><a  data-href="ribin.php" data-title="共享单车平均量平面分布" href="javascript:void(0)">共享单车平均量平面分布</a></li>
					<li><a data-href="user.php" data-title="共享单车用户3D分布" href="javascript:void(0)">共享单车用户3D分布</a></li>
					<li><a data-href="userbin.php" data-title="共享单车用户平面分布" href="javascript:void(0)">共享单车用户平面分布</a></li>
			</ul>
		</dd>
	</dl>		<dl id="menu-admin">
			<dt><i class="Hui-iconfont">&#xe62e;</i>信息统计及决策报告<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="TCPDF-master\examples\pdf.php" data-title="共享单车信息统计及决策报告">决策报告</a></li>
			</ul>
		</dd>
	</dl>
		<dl id="menu-tongji">
<!-- 			<dt><i class="Hui-iconfont">&#xe61a;</i> 功能模块七<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt> -->
<!-- 			<dd> -->
<!-- 				<ul> -->
<!-- 					<li><a data-href="charts-1.html" data-title="功能模块七" href="javascript:void(0)">功能模块七</a></li> -->
<!-- 					<li><a data-href="charts-2.html" data-title="功能模块七" href="javascript:void(0)">功能模块七</a></li> -->
<!-- 					<li><a data-href="charts-3.html" data-title="功能模块七" href="javascript:void(0)">功能模块七</a></li> -->
<!-- 					<li><a data-href="charts-4.html" data-title="功能模块七" href="javascript:void(0)">功能模块七</a></li> -->
<!-- 					<li><a data-href="charts-5.html" data-title="功能模块七" href="javascript:void(0)">功能模块七</a></li> -->
<!-- 					<li><a data-href="charts-6.html" data-title="功能模块七" href="javascript:void(0)">功能模块七</a></li> -->
<!-- 					<li><a data-href="charts-7.html" data-title="功能模块七" href="javascript:void(0)">功能模块七</a></li> -->
<!-- 			</ul> -->
<!-- 		</dd> -->
<!-- 	</dl> -->
		<dl id="menu-system">
<!-- 			<dt><i class="Hui-iconfont">&#xe62e;</i> 功能模块八<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt> -->
<!-- 			<dd> -->
<!-- 				<ul> -->
<!-- 					<li><a data-href="system-base.html" data-title="功能模块八" href="javascript:void(0)">功能模块八</a></li> -->
<!-- 					<li><a data-href="system-category.html" data-title="功能模块八" href="javascript:void(0)">功能模块八</a></li> -->
<!-- 					<li><a data-href="system-data.html" data-title="功能模块八" href="javascript:void(0)">功能模块八</a></li> -->
<!-- 					<li><a data-href="system-shielding.html" data-title="功能模块八" href="javascript:void(0)">功能模块八</a></li> -->
<!-- 					<li><a data-href="system-log.html" data-title="功能模块八" href="javascript:void(0)">功能模块八</a></li> -->
<!-- 			</ul> -->
<!-- 		</dd> -->
<!-- 	</dl> -->
</div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active">
					<span title="我的地图" data-href="welcome.html">我的地图</span>
					<em></em></li>
		</ul>
	</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="welcome.html"></iframe>
	</div>
</div>
</section>

<div class="contextMenu" id="Huiadminmenu">
	<ul>
		<li id="closethis">关闭当前 </li>
		<li id="closeall">关闭全部 </li>
</ul>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<script type="text/javascript" src="lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
<script type="text/javascript">


/*个人信息*/
function myselfinfo(){
  layer.open({
		type: 2,
		area: ['300px','200px'],
		fix: false, //不固定
		maxmin: true,
		shade:0.4,
		title: '查看信息',
		content: 'userinfo.php'
	});
}
//修改密码
function alertword(){
  var index =  layer.open({
	  type:2,
	  skin: 'demo-class',
      area:['300px','350px'],
	  fix:false,
	  shade:0.4,
	  title:'修改密码',
      content:'alertword.html'
	})}
//添加数据
function adddata(){
  layer.open({
        type:2,
		area:['450px','300px'],
		fixL:false,
	    shade:0.3,
		title:'添加数据',
		content:'up.php'
  })}
 //坐标转换
function turn(){
  layer.open({
        type:2,
		area:['450px','300px'],
		fixL:false,
	    shade:0.3,
		title:'坐标的批量转换',
		content:'gpsturn.php'
  })}
  function clear(){
}
 //生成权重值
  function count(){
  layer.open({
        type:2,
		area:['450px','300px'],
		fixL:false,
	    shade:0.3,
		title:'按照密度生成权重值',
		content:'count.php'
  })}
  //统计
  function wenzi(){
  layer.open({
        type:2,
		area:['100%','100%'],
		fixL:false,
	    shade:0.3,
		title:'统计',
		content:'wenzi.php'
  })}
//退出登陆提示
function logout(){
   var msg="您真的确定要退出登陆吗？";
 if(confirm(msg)==true){
 window.location.href="enter.html";}
 else
 {parent.window.location.reloda();} 
}

</script>
<?php
}else{//code不存在，调用exit.php 退出登录
?>
<script type="text/javascript">
alert("非法登陆！退出登陆！");
window.location.href="exit.php";
</script>
<?php
}
?>
 
</body>
</html>