<?php
	$url = $_SERVER['REQUEST_URI'];
	$level = substr($url, strrpos($url, '/') + 1);
	
	$db = new PDO('sqlite:../level.db');

	$queryString = 'SELECT data FROM level WHERE id = "' . $level . '"';

	$statement = $db->prepare($queryString);
		
	$statement->execute();
	$result = $statement->fetchAll();
	$level = $result[0];

	$data = $level['data'];
	
	echo $data;
