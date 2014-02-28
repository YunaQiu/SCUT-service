<?php
	$cookie_file = tempnam('./tmp','cookie');
	$login_url = 'http://202.38.232.10/opac/servlet/opac.go';
	$userId = $_POST['id'];
	$password = $_POST['password'];
	$post_fields = array (
	    "cmdACT" => "mylibrary.login",
	    "libcode" => "",
	    "method" => "mylib",
	    "userid" => $userId,
	    "passwd" => $password,
	);
	$post_fields = http_build_query($post_fields);
//	$post_fields    =    'cmdACT=mylibrary.login&method=mylib&userid=D1330252240&passwd=522481';

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $login_url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
	curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file);
//	$contents1 = curl_exec($ch);
	curl_exec($ch);
	curl_close($ch);


	$url='http://202.38.232.10/opac/servlet/opac.go?cmdACT=loan.list';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file);
	$contents = curl_exec($ch);
	curl_close($ch);
	
	unlink($cookie_file);
	$result = array();
	if ($str = strpos($contents,"您还没有登录或登录超时"))
		$result[0] = 'error';
	else if ($str = strpos($contents,"当前没有借阅"))
		$result[0] = 'empty';
	else{
		$pattern = '#<td>([\d]+)</td><td>[\w]+</td><td><a[^>]*>([^/]+)/([^<]+)</a></td><td>[\d:]*</td><td>[^<]+</td><td>([^<]+)</td><td>([\d-]+)</td><td>([\d-]+)</td><td[^<]*>[\d/]+</td><td[^<]*>([^<]+)</td>#';
		preg_match_all($pattern,$contents,$arr,PREG_SET_ORDER);
		$i = 0;
		foreach ($arr as $row){
			$result[$i] = array($row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7]);
			$i++;
		}
	}
	echo json_encode($result);
?>
