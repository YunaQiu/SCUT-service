<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0 user-scalable=yes">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="jquery.min.js"></script>
  <script src="bootstrap/bootstrap.min.js"></script>
  <script src="mylibrary.js"></script>
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
  </style>
</head>

<body>
  <div class="container">
    <h5>查询借书情况：</h5>
    <form class="form-inline" role="form">
        <div class="form-group">
            <label class="sr-only" for="userId">借书证号码</label>
            <input type="text" class="form-control" id="userId" placeholder="借书证号码">
        </div>
        <div class="form-group">
            <label class="sr-only" for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password">
        </div>
        <button type="button" class="btn btn-primary" id="login">查询</button>
    </form><br/>
    <div class="table-responsive" id="bookList">
    	<table class="table table-hover" style="background-color:#F9F9F9;">
        	<thead style="font-weight:bold;">
            	<th>序号</th>
                <th>书名</th>
                <th>作者</th>
                <th>馆藏点</th>
                <th>借阅时间</th>
                <th>应还时间</th>
                <th>是否过期</th>
            </thead>
            <tbody></tbody>
        </table>
    </div>
  </div>
</body>
</html>