<?php
/*	echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
	$data = file_get_contents('http://junda.100steps.net/bookdetail/173166');
	echo $data;	
*/
	$searchID = $_GET['id'];
	$data = file_get_contents('http://junda.100steps.net/bookdetail/' . $searchID);
	$object = json_decode($data);
	$name = $object -> 题名;
	$status = "";
	foreach ($object -> 馆藏状态 as $perStatus){
		$status .= "
		<tr>
			<td>" . $perStatus -> 馆址 . "</td>
			<td>" . $perStatus -> 馆藏地 . "</td>
			<td>" . $perStatus -> 书刊状态 . "</td>
			<td>" . $perStatus -> 应还日期 . "</td>
		</tr>";
	}
	$response = new stdClass;
	$response -> name = $name;
	$response -> status = $status;
//	echo $name . $status;
	echo json_encode($response);

?>