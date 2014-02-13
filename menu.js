// JavaScript Document
function menu(a, from){
	var content;
	switch(a){
		case 0:
			content = "welcome.php";
			break;
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
	if (from == "index")
		$("iframe").attr("src",content);
	else 
		window.location.href = content;
}
