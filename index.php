<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0 user-scalable=yes">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <script type="text/javascript" src="mmenu/js/jquery.mmenu.js"></script>
  <script src="index.js"></script>
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
  <link type="text/css" rel="stylesheet" href="mmenu/css/demo.css" />
  <link type="text/css" rel="stylesheet" href="mmenu/css/jquery.mmenu.css" />
  <link type="text/css" rel="stylesheet" href="mmenu/css/extensions/jquery.mmenu.positioning.css" />

  <script type="text/javascript">
    $(function(){
		$("nav#menu").mmenu();
	});
	
	$(document).ready(function(){
		var height = $(window).height();
		$("#content").css("height", (height - 40) + "px");
		$(window).resize(function() {
			height = $(window).height();
			$("#content").css("height", (height - 40) + "px");
		});
	});
  </script>
  <style type="text/css">
  	html,body,#page{
		height:100%;
	}
  	#header {
		font-family:"微软雅黑";
	}
	#content {
		padding:0px;
		width:100%;
	}
	#welcome {
		padding-top:20px;
	}
	a{
		cursor:pointer;
		text-decoration:none;
	}
	a.btn{
		color:#FFF;
		font-weight:bolder;
	}
	a.btn-default{
		color:#333;
	}
  </style>
</head>

<body>
  <div id="page">
	<div id="header">
        <a href="#menu"></a>
        SCUT 信息服务
    </div>
    
    <div id="welcome" class="container">
    	<h2>请选择你需要查询的服务：</h2><br/>
        <div class="row">
        	<div class="col-sm-5">
                <a class="btn btn-primary btn-lg btn-block" onclick="menu(1)">校园一卡通消费</a>
                <a class="btn btn-default btn-lg btn-block" onclick="menu(2)">我的课程表</a>
                <a class="btn btn-warning btn-lg btn-block" onclick="menu(3)">我的图书馆</a>
                <a class="btn btn-info btn-lg btn-block" onclick="menu(4)">检索书籍</a>
                <a class="btn btn-danger btn-lg btn-block" onclick="menu(5)">查询成绩</a>
                <a class="btn btn-success btn-block btn-lg" onclick="menu(6)">教务/生活后勤公告</a>
            </div>
        	<div class="col-sm-5 col-sm-offset-1">
                <a class="btn btn-primary btn-lg btn-block" onclick="menu(7)">华工二手市场</a>
                <a class="btn btn-default btn-lg btn-block" onclick="menu(8)">就业实习</a>
                <a class="btn btn-warning btn-block btn-lg" onclick="menu(9)">学术讲座</a>
                <a class="btn btn-info btn-lg btn-block">精品课程</a>
                <a class="btn btn-danger btn-lg btn-block">失物招领</a>
                <a class="btn btn-success btn-lg btn-block">华工地图</a>
            </div>
        </div>
    </div>
	<iframe id="content" frameborder="0" scrolling="yes"></iframe>
  </div>
  
  <nav id="menu">
    <ul>
        <li class="mm-selected"><a onclick="menu(0)">首页</a></li>
        <li><a onclick="menu(1)">校园一卡通消费</a></li>
        <li><a onclick="menu(2)">我的课程表</a></li>
        <li><a onclick="menu(3)">我的图书馆</a></li>
        <li><a onclick="menu(4)">检索书籍</a></li>
        <li><a onclick="menu(5)">查询成绩</a></li>
        <li><a onclick="menu(6)">教务/生活后勤公告</a></li>
        <li><a onclick="menu(7)">华工二手市场</a></li>
        <li><a onclick="menu(8)">就业实习</a></li>
        <li><a onclick="menu(9)">学术讲座</a></li>
        <li><a href="#">精品课程</a></li>
        <li><a href="#">失物招领</a></li>
        <li><a href="#">华工地图</a></li>
    </ul>
  </nav>
</body>
</html>