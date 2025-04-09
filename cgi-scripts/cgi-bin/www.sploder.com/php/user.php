<?php

	$group = $_REQUEST['group'];
	$folder = $_REQUEST['folder'];
	$g_id = $_REQUEST['proj'];

	$db = new PDO('sqlite:../sploder.db');
		
	$queryString = 'SELECT data FROM level WHERE g_id = ' . $g_id;

	$statement = $db->prepare($queryString);
		
	$statement->execute();
	$result = $statement->fetchAll();
	
	$data = $result['0']['data'];
	
	echo $data;