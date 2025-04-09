<?php
	
	$db = new PDO('sqlite:../objects.db');
		
	$queryString = 'SELECT * FROM entry ORDER BY RANDOM() LIMIT 10;';

	$statement = $db->prepare($queryString);
		
	$statement->execute();
	$result = $statement->fetchAll();
	
	$reply = '<randomBuilds>';
	
	foreach ($result as $lvl) {
		$reply .= '<entry>';
		$reply .= '<URLid>' . $lvl['URLid'] . '</URLid>';
		$reply .= '<userName>' . $lvl['userName'] . '</userName>';
		$reply .= '<buildName>' . $lvl['buildName'] . '</buildName>';
		$reply .= '<level>' . $lvl['level'] . '</level>';
		$reply .= '<code>' . $lvl['code'] . '</code>';
		$reply .= '<ratingAverage>' . $lvl['ratingAverage'] . '</ratingAverage>';
		$reply .= '<guesses>' . $lvl['guesses'] . '</guesses>';
		$reply .= '</entry>';
	}
	
	$reply .= '</randomBuilds>';
	
	echo $reply;
	