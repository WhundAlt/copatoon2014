<?php

	$g_id = $_REQUEST['game_id'];
	
	$db = new PDO('sqlite:../sploder.db');
		
	$queryString = 'SELECT contest FROM level WHERE g_id = ' . $g_id;

	$statement = $db->prepare($queryString);
		
	$statement->execute();
	$result = $statement->fetchAll();
	
	echo $result[0]['contest'];
	
//&lastContest=561&accepting_entries=1&voting=0&complete=0&is_winner=1&can_nominate=0&already_nominated=0&session=0