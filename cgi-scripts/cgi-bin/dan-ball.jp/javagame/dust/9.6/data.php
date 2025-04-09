<?php
	$id = $_REQUEST['id'];
	$folder = $_REQUEST['folder'];
	
	$db = new PDO('sqlite:dust.db');
		
	$queryString = 'SELECT data FROM level WHERE id = ' . $id;

	$statement = $db->prepare($queryString);
		
	$statement->execute();
	$result = $statement->fetchAll();
	$level = $result[0];
	$data = $level['data'];
	
	echo $data;