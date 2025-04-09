<?php
	$levelId = $_REQUEST['ident'];
	
	$db = new PDO('sqlite:level.db');

	$queryString = 'SELECT count(1) FROM level';

	$statement = $db->prepare($queryString);
		
	$statement->execute();
	$result = $statement->fetchAll();
	$count = $result[0][0];

	echo $count;