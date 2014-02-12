// JavaScript Document
function menu(a){
	var content;
	switch(a){
		case 0:
			$("#welcome").css("display","block");
			$("iframe").css("display","none");
			return;
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
			content = 'searchbook.php';
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
	$("iframe").attr("src",content);
	$("#welcome").css("display","none");
	$("iframe").css("display","block");
}

$(document).ready(function(){
});
