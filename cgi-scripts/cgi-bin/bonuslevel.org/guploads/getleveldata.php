<?php
	$gid = $_REQUEST['gid'];
	$lvlid = $_REQUEST['lvlid'];
		
	$db = new PDO('sqlite:game' . $gid . '/level.db');
	
	$query = 'SELECT * FROM level WHERE id = :lvlid';
	$statement = $db->prepare($query);
	$statement->bindValue(':lvlid', $lvlid, PDO::PARAM_INT);
	
	$statement->execute();
	$result = $statement->fetchAll();
	
	$reply = 'bl=&err=';
		
	$level = $result[0];
	
	$reply .= '&le=' . $level['le'];
	$reply .= '&data=' . $level['data'];
	$reply .= '&ldunk=' . $level['ldunk'];
	/*$reply .= '&bestpd=' . $level['bestpd'];
	$reply .= '&bestu=' . $level['bestu'];
	$reply .= '&bests=' . $level['bests'];
	$reply .= '&besterr=' . $level['besterr'];*/

	$reply .= '&bestpd=&bestu=&bests=0&besterr=';
	
	echo $reply;
