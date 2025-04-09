<?php
	$id = $_REQUEST['id'];
		
	$db = new PDO('sqlite:../nserver.thewayoftheninja.org/level.db');
	
	if (substr_count($id, '-') > 0) {
		$levelId = explode('-', $id)[0];
		$replayId = explode('-', $id)[1];
		
		$queryString = 'SELECT data FROM replay WHERE level_id = "' . $levelId . '" AND replay_id ="' . $replayId . '"';

		$statement = $db->prepare($queryString);
			
		$statement->execute();
		$result = $statement->fetchAll();
		
		echo $result[0]["data"];
	} else {

		$queryString = 'SELECT data FROM level WHERE level_id = "' . $id . '"';

		$statement = $db->prepare($queryString);
			
		$statement->execute();
		$result = $statement->fetchAll();
		
		echo $result[0]["data"];	
	}