<?php
	$id = $_REQUEST['id'];
	
	$id = str_replace('/', '', $id);
	$id = ltrim($id, "0");
	
	$db = new PDO('sqlite:level.db');
		
	$queryString = 'SELECT highscores FROM level WHERE level_id = "' . $id . '"';

	$statement = $db->prepare($queryString);
		
	$statement->execute();
	$result = $statement->fetchAll();
	
	echo $result[0]["highscores"];