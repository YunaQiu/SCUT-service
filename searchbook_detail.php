<?php
	$searchID = $_GET['id'];
	$data = file_get_contents('http://junda.100steps.net/bookdetail?type=json&id=' . $searchID);
	$object = json_decode($data);
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
	$response -> status = $status;
	echo json_encode($response);

?>