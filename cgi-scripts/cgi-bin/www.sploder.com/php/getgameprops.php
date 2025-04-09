<?php

	$pubkey = $_REQUEST['pubkey'];

	$db = new PDO('sqlite:../sploder.db');
		
	$queryString = 'SELECT gameprops FROM level WHERE pubkey = "' . $pubkey . '"';

	$statement = $db->prepare($queryString);
		
	$statement->execute();
	$result = $statement->fetchAll();
	
	$gameprops = $result['0']['gameprops'];
	
	echo $gameprops;
	
	/*$first = substr($pubkey, 0, 1);
	$second = substr($pubkey, 1, 1);
	
	echo file_get_contents('data/' . $first . '/' . $second . '/' . $pubkey . '.txt');*/