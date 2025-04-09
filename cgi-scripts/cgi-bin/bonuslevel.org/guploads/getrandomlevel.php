<?php
	$gid = $_REQUEST['gid'];
	$n = $_REQUEST['n'];		// Number of levels
	$typ = $_REQUEST['typ'];	// Type (0 = Random, 1 = Top Rated, 2 = New)
	
	$db = new PDO('sqlite:game' . $gid . '/level.db');
	
	if ($typ == 0) {
		$query = 'SELECT * FROM level ORDER BY RANDOM() LIMIT ' . $n;
	} else if ($typ == 1) {
		$query = 'SELECT * FROM level WHERE r > 3500 ORDER BY RANDOM() LIMIT ' . $n;
	} else if ($typ == 2) {
		$query = "SELECT * FROM level WHERE le > '2018-01-01 00:00:00' ORDER BY RANDOM() LIMIT " . $n;
	}

	$statement = $db->prepare($query);
			
	$statement->execute();
	$result = $statement->fetchAll();
	
	$reply = 'bl=&err=&reqnb=' . $n;
	
	$i = 0;
	foreach ($result as $level) {
		$reply .= '&id' . $i . '=' . $level['id'];
		$reply .= '&t' . $i . '=' . $level['t'];
		$reply .= '&s' . $i . '=' . $level['s'];
		$reply .= '&c' .$i . '=-1';
		$reply .= '&r' . $i . '=' . $level['r'];
		$reply .= '&a' . $i . '=' . $level['a'];
		$reply .= '&v' . $i . '=' . $level['v'];
		$reply .= '&n' . $i . '=' . $level['n'];
		
		$i++;
	}
	
	echo $reply;