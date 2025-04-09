<?php

	$lvl = $_REQUEST['getlvl'];
	
	if ($lvl == '0') {
		echo file_get_contents('levels.txt');
		
	} else {
		$db = new PDO('sqlite:android.db');
		
		$queryString = 'SELECT * FROM level WHERE id = ' . $lvl;

		$statement = $db->prepare($queryString);
			
		$statement->execute();
		$result = $statement->fetchAll();
		
		$data = $result[0]['data'];
		
		echo $data;
	}