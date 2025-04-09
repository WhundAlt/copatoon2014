<?php
	$gid = $_REQUEST['gid'];
	$nb = $_REQUEST['nb'];
	
	$db = new PDO('sqlite:game' . $gid . '/level.db');
	
	$query = 'SELECT * FROM level WHERE ';
	$or = '';
	for ($i = 0; $i < $nb; $i++) {
		$query .= (' ' . $or . ' id = :l' . $i . ' ');
		$or = 'OR';
	}
	$query .= 'LIMIT ' . $nb;
	
	$statement = $db->prepare($query);
	
	for ($i = 0; $i < $nb; $i++) {
		$statement->bindValue(':l' . $i, $_REQUEST['l' . $i], PDO::PARAM_INT);
	}
		
	$statement->execute();
	$result = $statement->fetchAll();
	
	$reply = 'bl=&err=&reqnb=' . $nb;
	
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
	
	echo $reply;
