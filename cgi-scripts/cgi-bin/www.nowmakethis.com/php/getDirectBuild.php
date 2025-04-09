<?php

	$URLid = $_REQUEST['URLid'];
	
	$db = new PDO('sqlite:../objects.db');
		
	$queryString = 'SELECT * FROM entry WHERE URLid = ' . $URLid;

	$statement = $db->prepare($queryString);
		
	$statement->execute();
	$result = $statement->fetchAll();
	
	$lvl = $result[0];
	$reply = '<chosenBuild>';
	$reply .= '<URLid>' . $lvl['URLid'] . '</URLid>';
	$reply .= '<userName>' . $lvl['userName'] . '</userName>';
	$reply .= '<buildName>' . $lvl['buildName'] . '</buildName>';
	$reply .= '<level>' . $lvl['level'] . '</level>';
	$reply .= '<code>' . $lvl['code'] . '</code>';
	$reply .= '<ratingAverage>' . $lvl['ratingAverage'] . '</ratingAverage>';
	$reply .= '<guesses>' . $lvl['guesses'] . '</guesses>';
	
	$reply .= '</chosenBuild>';
	
	echo $reply;
	