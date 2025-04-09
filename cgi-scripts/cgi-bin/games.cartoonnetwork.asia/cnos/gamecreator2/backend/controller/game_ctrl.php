<?php

	$method = $_REQUEST['method'];
	
	if ($method == 'fetch_game_data') {
		echo file_get_contents('new_levels.txt');
		
	//	level_id	0
	} else if ($method == 'fetch_random_level') {
		//$level_id = $_REQUEST['level_id'];
		
		$db = new PDO('sqlite:gamecreator2.sqlite3');
		
		$selectQuery = 'SELECT level_id, level_title, level_desc, map_id, goal_id, moderator, '
				. 'moderation_date, thumbnail_filename, inappropriate_status, username FROM levels ORDER BY RANDOM() LIMIT 1;';
				
		$statement = $db->prepare($selectQuery);

		$statement->execute();
		$result = $statement->fetchAll();
		
		$level_id = $result[0]['level_id'];
		$level_title = $result[0]['level_title'];
		$level_desc = $result[0]['level_desc'];
		$map_id = $result[0]['map_id'];
		$goal_id = $result[0]['goal_id'];
		$moderator = $result[0]['moderator'];
		$moderation_date = $result[0]['moderation_date'];
		$thumbnail_filename = $result[0]['thumbnail_filename'];
		$inappropriate_status = $result[0]['inappropriate_status'];
		$username = $result[0]['username'];
		
		$arr = array(	'level_id' => $level_id,
						'level_title' => $level_title,
						'level_desc' => $level_desc,
						'map_id' => $map_id,
						'goal_id' => $goal_id,
						'moderator' => $moderator,
						'moderation_date' => $moderation_date,
						'thumbnail_filename' => $thumbnail_filename,
						'inappropriate_status' => $inappropriate_status,
						'username' => $username,
				);

		$info = json_encode($arr);
		
		echo '{"success": 1,"data": {"levels": [' . $info . ']}}';
		
	} else if ($method == 'fetch_level_data') {
		
		$level_id = $_REQUEST['level_id'];
		
		$db = new PDO('sqlite:gamecreator2.sqlite3');
				
		$statement = $db->prepare('SELECT data FROM levels WHERE level_id = :level_id');
		$statement->bindValue(':level_id', $level_id, PDO::PARAM_STR);

		$statement->execute();
		$result = $statement->fetchAll();

		$data = $result[0]['data'];
		
		echo $data;
	}
	