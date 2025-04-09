<?php

	session_name('agi_session');
	session_start();
	
	$id = $_REQUEST['id'];
	//$random = $_REQUEST['random'];
	
	$game = $_SESSION['game'];
	
	$db = new PDO('sqlite:' . $game . '.db');
	
	if ($game == 'roadDead2' || $game == 'gapMonsters') {
		$statement = $db->prepare('SELECT thumb FROM level WHERE save_id = :save_id');
		$statement->bindValue(':save_id', $id, PDO::PARAM_STR);
		
		$statement->execute();
		$result = $statement->fetchAll();
		
		$level = $result[0];
		
		$thumb = $level['thumb'];
		
		$path = str_replace('images/thumb', 'file', $thumb);
		$path = str_replace('.png', '.zlib', $path);
		
		echo file_get_contents('../apifiles.ngfiles.com/savedata/' . $path);
		
	} else {
		$statement = $db->prepare('SELECT level_data FROM level WHERE save_id = :save_id');
		$statement->bindValue(':save_id', $id, PDO::PARAM_STR);
		
		$statement->execute();
		$result = $statement->fetchAll();
		
		$level = $result[0];
		
		$data = $level['level_data'];
		
		echo $data;
	}