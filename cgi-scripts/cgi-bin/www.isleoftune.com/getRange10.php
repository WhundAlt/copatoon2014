<?php

	$startRange = $_REQUEST['startRange'];

	$db = new PDO('sqlite:levels.db');
		
	$queryString = 'SELECT * FROM level ORDER BY thumbsTotal DESC LIMIT 10 OFFSET ' . $startRange;

	$statement = $db->prepare($queryString);
		
	$statement->execute();
	$result = $statement->fetchAll();
	
	$reply = '<top10Islands>';
	
	foreach ($result as $lvl) {
		$reply .= '<entry>';
		$reply .= '<name>' . $lvl['name'] . '</name>';
		$reply .= '<rank>' . $lvl['rank'] . '</rank>';
		$reply .= '<code>' . $lvl['code'] . '</code>';
		$reply .= '<thumbsUp>' . $lvl['thumbsUp'] . '</thumbsUp>';
		$reply .= '<thumbsDown>' . $lvl['thumbsDown'] . '</thumbsDown>';
		$reply .= '<thumbsTotal>' . $lvl['thumbsTotal'] . '</thumbsTotal>';
		$reply .= '<URLid>' . $lvl['URLid'] . '</URLid>';
		$reply .= '</entry>';
	}
	
	$reply .= '</top10Islands>';
	
	echo $reply;
	