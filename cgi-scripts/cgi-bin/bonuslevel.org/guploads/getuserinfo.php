<?php

	$unb = $_REQUEST['unb'];	// Number of users requested
	
	$db = new PDO('sqlite:game5/level.db');
	
	$query = 'SELECT a, n FROM level WHERE ';
	$or = '';
	for ($i = 0; $i < $unb; $i++) {
		$query .= (' ' . $or . ' a = :u' . $i . ' ');
		$or = 'OR';
	}
	
	$query .= 'LIMIT ' . $unb;
	
	$statement = $db->prepare($query);
	
	for ($i = 0; $i < $unb; $i++) {
		$statement->bindValue(':u' . $i, $_REQUEST['u' . $i], PDO::PARAM_INT);
	}
		
	$statement->execute();
	$result = $statement->fetchAll();
	
	$reply = 'bl=&err=&nbus=15';
	
	$i = 0;
	foreach ($result as $level) {
		$reply .= '&i' . $i . '=' . $level['a'];
		$reply .= '&u' . $i . '=' . $level['n'];
		
		$i++;
	}
	
	echo $reply;