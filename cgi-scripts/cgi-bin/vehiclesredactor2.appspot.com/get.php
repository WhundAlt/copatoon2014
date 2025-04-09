<?php
	$levelId = $_REQUEST['ident'];
	
	$db = new PDO('sqlite:level.db');

	$queryString = 'SELECT data FROM level WHERE id = "' . $levelId . '"';

	$statement = $db->prepare($queryString);
		
	$statement->execute();
	$result = $statement->fetchAll();
	$level = $result[0];

	$data = $level['data'];
	
	echo $data;
