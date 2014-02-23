<?php
	$searchName = $_POST["name"];
	$page = $_POST['page'];
	$data = file_get_contents('http://junda.100steps.net/booksearch_quick?type=json&bookname=' . $searchName. '&page_index=' . $page);
	$object = json_decode($data);
	$pTotal = $object -> pages_total;
	$bTotal = $object -> books_total;
	$remain = $bTotal - $page * 20;

	$result = "";
	for ($i = 0; ($i < $remain) && ($i < 20); $i++){
		$book = $object -> results[$i];
		$result .= "
		<tr class='book' data-toggle='modal' data-target='#detail'>
			<td id='title'>" . $book -> title . "</td>
			<td id='id'>" . $book -> id . "</td>
			<td id='author'>" . $book -> author . "</td>
			<td id='press'>" . $book -> press . "</td>
			<td id='year'>" . $book -> year . "</td>
			<td id='callno'>" . $book -> callno . "</td>			
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