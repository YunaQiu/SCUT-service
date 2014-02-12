// JavaScript Document
function menu(a){
	var content;
	switch(a){
		case 1:
			content = "ecard.php";
			break;
		case 2:
			content = "schedule.php";
			break;
		case 3:
			content = "mylibrary.php";
			break;
		case 4:
			content = '<h4>请输入要查询的书籍名称：</h4><form class="form-inline" role="form"><div class="form-group"><label class="sr-only" for="searchBook">书籍名称：</label><input type="text" class="form-control" id="searchBook" placeholder="书籍名称"></div><button type="button" class="btn btn-primary" id="search" onclick="doSearch();">查询</button></form><br/><div class="table-responsive"><table class="table table-hover" style="background-color:#F9F9F9;"><thead style="font-weight:bold;"><th>书名</th><th>书目id</th><th>作者</th><th>出版社</th><th>年份</th><th>索书号</th></thead><tbody></tbody></table></div><ul class="pager"><li id="previous" class="disabled"><a>&larr;上一页</a></li><li id="next" class="disabled"><a>下一页&rarr;</a></li></ul><script src="searchbook.js"></script>';
			break;
		case 5:
			content = "transcript.php";
			break;
		case 6:
			content = "noticeinfo.php";
			break;
		case 7:
			content = "secondmarket.php";
			break;
		case 8:
			content = "employnotice.php";
			break;
		case 9:
			content = "academic.php";
			break;
		default:
			return;		
	}
	$("div#content").html(content);
}

$(document).ready(function(){
});
