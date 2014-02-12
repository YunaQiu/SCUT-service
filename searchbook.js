// JavaScript Document
var page = 0;
var book;

$(document).ready(function(){
	$("#search").click(function(){
		var searchBook = $("#searchBook").val();
		searchBook = searchBook.replace(/(^\s+)|(\s+$)/g, "");
		if (searchBook == "")
			return;
		book = searchBook;
		doSearch(0);
	});
});

function doSearch(goPage){
	$.post("searchbook.php?&t=" + Math.random(),
	{
		name:book,
		page:goPage
	},
	function(data){
		$('tbody').html(data.result);
//		alert(data.status);
//		alert(goPage);
		page = goPage;
		switch (data.status){
			case "none":
				alert("找不到相关书籍");
				$(".pager li").attr("class","disabled");
				$(".pager li").attr("onclick", "return;");
				break;
			case "all":
				$(".pager li").attr("class","disabled");
				$(".pager li").attr("onclick", "return;");
				break;
			case "first":
				$("#previous").attr("class","disabled");
				$("#next").attr("class","");
				$("#previous").attr("onclick", "return;");
				$("#next").attr("onclick", "doSearch(page + 1);");
				break;
			case "last":
				$("#previous").attr("class","");
				$("#next").attr("class","disabled");
				$("#previous").attr("onclick", "doSearch(page - 1);");
				$("#next").attr("onclick", "return;");
				break;
			case "nomal":
				$("#previous").attr("class","");
				$("#next").attr("class","");
				$("#previous").attr("onclick", "doSearch(page - 1);");
				$("#next").attr("onclick", "doSearch(page + 1);");
		}
	},
	"json");
}

