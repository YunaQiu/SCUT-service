<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0 user-scalable=yes">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <script src="searchbook.js"></script>
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">

  <style type="text/css">
  	body {
		background-color:#EEE;
		padding-top:20px;
	}
  	h5 {
		font-weight:bolder;
	}
	a{
		cursor:pointer;
	}
  </style>
</head>

<body>
  <div class="container">
    <h5>请输入要查询的书籍名称：</h5>
    <form class="form-inline" role="form">
    	<div class="form-group">
        	<label class="sr-only" for="searchBook">书籍名称：</label>
            <input type="text" class="form-control" id="searchBook" placeholder="书籍名称">
        </div>
        <button type="button" class="btn btn-primary" id="search">查询</button>
    </form><br/>
    <div class="table-responsive">
    	<table class="table table-hover" style="background-color:#F9F9F9;">
        	<thead style="font-weight:bold;">
            	<th>书名</th>
                <th>书目id</th>
                <th>作者</th>
                <th>出版社</th>
                <th>年份</th>
                <th>索书号</th>
            </thead>
            <tbody></tbody>
        </table>
        </div>
        <ul class="pager">
            <li id="previous" class="disabled"><a>&larr;上一页</a></li>
            <li id="next" class="disabled"><a>下一页&rarr;</a></li>
        </ul>
  </div>
</body>
</html>