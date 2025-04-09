<?php
	$page = $_REQUEST['page'];
	$filter = $_REQUEST['filter'];	//	new_maps, mostPlayed, hardest
	
	$db = new PDO('sqlite:level.db');
	
	$order = '';
	if ($filter == 'new_maps') {
		$order = ' date DESC ';
	} else if ($filter == 'hardest') {
		$order = ' playing_time DESC ';
	} else if ($filter == 'most_played' || $filter == 'mostPlayed') {
		$order = ' play DESC ';
	}
	$queryString = 'SELECT * FROM level ORDER BY ' . $order . ' LIMIT ' . ($page * 100);

	$statement = $db->prepare($queryString);
		
	$statement->execute();
	$result = $statement->fetchAll();
	
	$response = '&nbResult=' . $page * 100;
	$response .= '&nbField=9';
	
	$i = 0;
	foreach ($result as $level) {
		$response .= '&id_map' . $i . '=' . $level['id'];
		$response .= '&name' . $i . '=' . $level['title'];
		$response .= '&level_designer' . $i . '=' . $level['author'];
		$response .= '&nb_players' . $i . '=' . $level['players'];
		$response .= '&map' . $i . '=' . $level['data'];
		$response .= '&nb_play' . $i . '=' . $level['play'];
		$response .= '&playing_time' . $i . '=' . $level['playing_time'];
		$response .= '&activated' . $i . '=' . $level['activated'];
		$response .= '&date' . $i . '=' . $level['date'];
		
		$i++;
	}
	
	echo $response;