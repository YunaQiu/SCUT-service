<?php
	$searchName = $_POST["name"];
	$page = $_POST['page'] * 3;
	$data = file_get_contents('http://junda.100steps.net/booksearch/' . $searchName. '/' . $page);
	$object = json_decode($data);
	$offset = $object -> book_offset;
	$pTotal = $object -> pages_total;
	$bTotal = $object -> books_total;

	$result = "";
	for ($j = $page; ($j < $page + 3) && ($j < $pTotal); $j++){
		for ($i = 0; ($i < $bTotal - $offset) && ($i < 5); $i++){
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
		$data = file_get_contents('http://junda.100steps.net/booksearch/' . $searchName. '/' . ($j + 1));
		$object = json_decode($data);
		$offset = $object -> book_offset;
	}
	if ($bTotal == 0)
		$status = 'none';
	else if ($pTotal <= 3)
		$status = 'all';
	else if ($page == 0)
		$status = 'first';
	else if ($j == $pTotal)
		$status = 'last';
	else
		$status = 'nomal';
	$response = new stdClass;
	$response -> result = $result;
	$response -> status = $status;
	echo json_encode($response);
?>