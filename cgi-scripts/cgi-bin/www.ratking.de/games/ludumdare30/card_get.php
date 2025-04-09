<?php
	$uid = $_GET['uid'];
	
	$db = new PDO('sqlite:continue.db');
		
	$queryString = 'SELECT data FROM path WHERE uid = "' . $uid . '"';

	$statement = $db->prepare($queryString);
		
	$statement->execute();
	$result = $statement->fetchAll();
	
	echo $result[0]['data'];