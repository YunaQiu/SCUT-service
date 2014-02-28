// JavaScript Document

// trim string
if (typeof(String.prototype.trim) !== "function") {
	String.prototype.trim = function() {
		return this.replace(/(^\s+)|(\s+$)/g, "");
	}
}

$(function(){
	$("#login").click(function(){
		//验证用户名密码是否为空
		var userId = $("#userId").val();
		userId = userId.trim();
		var password = $("#password").val();
		password = password.trim();
		if (userId == "" || password == ""){
			alert("请将信息填写完整");
			return;
		}
		
		//向后台查询借书情况
		$("body,tr").css("cursor","wait");
		$.post("mylibrary_catch.php?&t=" + Math.random(),
		{
			id:userId.toUpperCase(),
			password:password
		},
		function(data){
			$("body,tr").css("cursor","pointer");
			if(data[0] == 'error'){
				alert("用户名或密码错误！");
				$('tbody').html('');
				return;
			}
			else if(data[0] == 'empty'){
				alert("当前没有借阅书籍");
				$('tbody').html('');
				return;
			}
			else{
				//将数据填入表格
				var result = "";
				for (var i = 0; i < data.length; i++){
					result += '<tr>'
					for (var j = 0; j < 7; j++)
						result += '<td>' + data[i][j] + '</td>';
					result += '</tr>'
				}
				$('tbody').html(result);
			}
		},
		"json");
	});
});

