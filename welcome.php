<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0 user-scalable=yes">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <script src="index.js"></script>
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">

  <style type="text/css">
  	body {
		background-color:#EEE;
		padding-top:20px;
	}
  	h3 {
		font-weight:bolder;
	}
	a.btn{
		color:#FFF;
		font-weight:bolder;
		text-decoration:none;
	}
	a.btn-default{
		color:#333;
	}
  </style>
</head>

<body>
  <div class="container">
    <h3>请选择你需要查询的服务：</h3><br/>
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
</body>
</html>