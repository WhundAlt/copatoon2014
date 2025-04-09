<?php

	$g_id = $_REQUEST['g'];

	$db = new PDO('sqlite:../sploder.db');
		
	$queryString = 'SELECT author, difficulty, rating FROM level WHERE g_id = ' . $g_id;

	$statement = $db->prepare($queryString);
		
	$statement->execute();
	$result = $statement->fetchAll();
	
	$result = $result['0'];
	
	$author = $result['author'];
	$difficulty = $result['difficulty'];
	$rating = $result['rating'];
	
	echo '&username=' . $author . '&difficulty=' . $difficulty . '&rating=' . $rating;
	
	/*$len = strlen($gameId);
	
	if ($len == 1) {
		$first = '0';
		$second = $gameId;
	} else {
		$first = substr($gameId, 0, 1);
		$second = substr($gameId, 1, 1);
	}
		
	echo file_get_contents('gamedata/' . $first . '/' . $second . '/' . $gameId . '.txt');
*/