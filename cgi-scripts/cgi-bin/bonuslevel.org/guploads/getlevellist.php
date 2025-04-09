<?php
	$limit = $_REQUEST['limit'];
	$linf = $_REQUEST['linf'];
	$nbitem = $_REQUEST['nbitem'];
	
	$db = new PDO('sqlite:game5/level.db');
	
	$query = 'SELECT * FROM level ORDER BY id desc LIMIT ' . $limit . ' OFFSET ' . ($linf / 45);
		
	$statement = $db->prepare($query);
			
	$statement->execute();
	$result = $statement->fetchAll();
	
	$reply = 'bl=&err=&reqnb=' . $limit;
	
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
		$reply .= '&ise' . $i . '=' . $level['ise'];
		
		$i++;
	}
	
	$reply .= '&nblvl=4777';
	
	echo $reply;
