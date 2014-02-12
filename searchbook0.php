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
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
  <link type="text/css" rel="stylesheet" href="mmenu/css/demo.css" />
  <link type="text/css" rel="stylesheet" href="mmenu/css/jquery.mmenu.css" />
  <link type="text/css" rel="stylesheet" href="mmenu/css/extensions/jquery.mmenu.positioning.css" />

  <script type="text/javascript">
    $(function(){
		$('nav#menu').mmenu();
	});
  </script>
  <style type="text/css">
  	#header {
		font-family:"微软雅黑";
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
  <div id="page">
	<div id="header">
        <a href="#menu"></a>
        SCUT 信息服务
    </div>
    <div id="content" class="container">
    	<p>请输入要查询的书籍名称：</p>
        <form class="form-inline" role="form">
            <div class="form-group">
                <label class="sr-only" for="searchBook">书籍名称：</label>
                <input type="text" class="form-control" id="searchBook" placeholder="书籍名称">
            </div>
            <button type="submit" class="btn btn-primary">查询</button>
        </form>
        <br/>
        <div class="table-responsive">
            <table class="table table-hover" style="background-color:#F9F9F9;">
                <thead style="font-weight:bold;">
                    <th>书名</th>
                    <th>书目id号</th>
                    <th>作者</th>
                    <th>出版社</th>
                    <th>年份</th>
                    <th>索书号</th>
                </thead>
                <tbody>
                    <tr>
                        <td>woci</td>
                        <td>2341</td>
                        <td>2341</td>
                        <td>woci</td>
                        <td>2341</td>
                        <td>2341</td>
                    </tr>
                    <tr>
                        <td>sefwd</td>
                        <td>2341</td>
                        <td>734</td>
                        <td>sefwd</td>
                        <td>2341</td>
                        <td>734</td>
                    </tr>
                    <tr>
                        <td>2341</td>
                        <td>sefwd</td>
                        <td>734</td>
                        <td>2341</td>
                        <td>sefwd</td>
                        <td>734</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
  </div>
  
  <!--侧边菜单栏-->
  <nav id="menu">
    <ul>
        <li><a href="index.php">首页</a></li>
        <li><a href="ecard.php">校园一卡通消费</a></li>
        <li><a href="schedule.php">我的课程表</a></li>
        <li><a href="mylibrary.php">我的图书馆</a></li>
        <li class="mm-selected"><a href="searchbook.php">检索书籍</a></li>
        <li><a href="transcript.php">查询成绩</a></li>
        <li><a href="noticeinfo.php">教务/生活后勤公告</a></li>
        <li><a href="secondmarket.php">华工二手市场</a></li>
        <li><a href="employnotice.php">就业实习</a></li>
        <li><a href="academic.php">学术讲座</a></li>
        <li><a href="#">精品课程</a></li>
        <li><a href="#">失物招领</a></li>
        <li><a href="#">华工地图</a></li>
    </ul>
  </nav>
</body>
</html>