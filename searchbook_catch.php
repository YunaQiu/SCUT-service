<?php
	$searchName = $_POST["name"];
	$page = $_POST['page'];
	$data = file_get_contents('http://junda.100steps.net/booksearch_quick/' . $searchName. '/' . $page);
	$object = json_decode($data);
	$pTotal = $object -> pages_total;
	$bTotal = $object -> books_total;
	$remain = $bTotal - $page * 20;

	$result = "";
	for ($i = 0; ($i < $remain) && ($i < 20); $i++){
		$book = $object -> results[$i];
		$result .= "
		<tr>
			<td>" . $book -> title . "</td>
			<td>" . $book -> id . "</td>
			<td>" . $book -> author . "</td>
			<td>" . $book -> press . "</td>
			<td>" . $book -> year . "</td>
			<td>" . $book -> callno . "</td>			
		</tr>";
	}
	
	if ($bTotal == 0)
		$status = 'none';
	else if ($pTotal <= 1)
		$status = 'all';
	else if ($page == 0)
		$status = 'first';
	else if ($page == $pTotal - 1)
		$status = 'last';
	else
		$status = 'nomal';
		
	$response = new stdClass;
	$response -> result = $result;
	$response -> status = $status;
	echo json_encode($response);
?>