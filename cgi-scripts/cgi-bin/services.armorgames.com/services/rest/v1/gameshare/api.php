<?php
		
	function getGameShares($dbId, $page, $max_items) {
		$db = new PDO('sqlite:' . $dbId . '.db');
	
		$query = 'SELECT * FROM level ORDER BY id DESC LIMIT ' . $max_items . ' OFFSET ' . (($page - 1) * $max_items);
		
		$statement = $db->prepare($query);
	
		$statement->execute();
		$result = $statement->fetchAll();

		$reply = '{"version":1,"code":200,"message":"OK","payload":{"gameshares":[';
		
		foreach ($result as $data) {
			$flagged = $data['flagged'];
			if ($flagged == '') {
				$flagged = null;
			}
		
			$reply .= '{'
					. '"id":' . $data['id'] . ','
					. '"game_id": 17899,'
					. '"name":"' . $data['name'] . '",'
					. '"description":"' . $data['description'] . '",'
					. '"uid":"' . $data['uid'] . '",'
					. '"data": null,'
					. '"share_id":"' . $data['share_id'] . '",'
					. '"long_url":"' . $data['long_url'] . '",'
					. '"short_url":"' . $data['short_url'] . '",'
					. '"thumbnail_url":"' . $data['thumbnail_url'] . '",'
					. '"status":"' . $data['status'] . '",'
					. '"flagged": null,'
					. '"created_date":"' . $data['created_date'] . '",'
					. '"updated_date":"' . $data['updated_date'] . '",'
					
					. '"player_info": {'
						. '"uid":"' . $data['uid'] . '",'
						. '"username":"' . $data['username'] . '",'

						. '"avatar_sizes": {'					
							. '"tiny":"' . $data['avatar_tiny'] . '",'
							. '"small":"' . $data['avatar_small'] . '",'
							. '"medium":"' . $data['avatar_medium'] . '",'
							. '"large":"' . $data['avatar_large'] . '"'
						. '},'
						. '"profile_url":"' . $data['profile_url'] . '"'
					. '},'
					
					. '"stats": {'
						. '"likes_daily":' . $data['likes_daily'] . ','
						. '"likes_weekly":' . $data['likes_weekly'] . ','
						. '"likes_monthly":' . $data['likes_monthly'] . ','
						. '"likes_alltime":' . $data['likes_alltime'] . ','
					
						. '"dislikes_daily":' . $data['dislikes_daily'] . ','
						. '"dislikes_weekly":' . $data['dislikes_weekly'] . ','
						. '"dislikes_monthly":' . $data['dislikes_monthly'] . ','
						. '"dislikes_alltime":' . $data['dislikes_alltime'] . ','
						
						. '"views_daily":' . $data['views_daily'] . ','
						. '"views_weekly":' . $data['views_weekly'] . ','
						. '"views_monthly":' . $data['views_monthly'] . ','
						. '"views_alltime":' . $data['views_alltime']
					. '},'
					
					. '"created_relative_time":"' . $data['created_relative_time'] . '",'
					. '"updated_relative_time":"' . $data['updated_relative_time'] . '"'
				. '},';
		}
		
		$reply = rtrim($reply, ',');
		
		if (isset($_REQUEST['page'])) {
			$reply .= '], "sortDesc": true,"total": 201,"page": ' . $page . ',"count": 8}}';
		}
		
		return $reply;
	}
	
	function getLevel($dbId, $share_id) {
		$db = new PDO('sqlite:' . $dbId . '.db');
	
		$query = 'SELECT * FROM level WHERE share_id = :share_id';
		
		$statement = $db->prepare($query);
		$statement->bindValue(':share_id', $share_id, PDO::PARAM_STR);
		
		$statement->execute();
		$result = $statement->fetchAll();

		$reply = '{"version":1,"code":200,"message":"OK","payload":';
		
		$data = $result[0];
		
		$flagged = $data['flagged'];
		if ($flagged == '') {
			$flagged = null;
		}
	
		$reply .= '{'
				. '"id":' . $data['id'] . ','
				. '"game_id": 17899,'
				. '"name":"' . $data['name'] . '",'
				. '"description":"' . $data['description'] . '",'
				. '"uid":"' . $data['uid'] . '",'
				. '"data":"' . $data['data'] . '",'
				. '"share_id":"' . $data['share_id'] . '",'
				. '"long_url":"' . $data['long_url'] . '",'
				. '"short_url":"' . $data['short_url'] . '",'
				. '"thumbnail_url":"' . $data['thumbnail_url'] . '",'
				. '"status":"' . $data['status'] . '",'
				. '"flagged": null,'
				. '"created_date":"' . $data['created_date'] . '",'
				. '"updated_date":"' . $data['updated_date'] . '",'
				
				. '"player_info": {'
					. '"uid":"' . $data['uid'] . '",'
					. '"username":"' . $data['username'] . '",'

					. '"avatar_sizes": {'					
						. '"tiny":"' . $data['avatar_tiny'] . '",'
						. '"small":"' . $data['avatar_small'] . '",'
						. '"medium":"' . $data['avatar_medium'] . '",'
						. '"large":"' . $data['avatar_large'] . '"'
					. '},'
					. '"profile_url":"' . $data['profile_url'] . '"'
				. '},'
				
				. '"stats": {'
					. '"likes_daily":' . $data['likes_daily'] . ','
					. '"likes_weekly":' . $data['likes_weekly'] . ','
					. '"likes_monthly":' . $data['likes_monthly'] . ','
					. '"likes_alltime":' . $data['likes_alltime'] . ','
				
					. '"dislikes_daily":' . $data['dislikes_daily'] . ','
					. '"dislikes_weekly":' . $data['dislikes_weekly'] . ','
					. '"dislikes_monthly":' . $data['dislikes_monthly'] . ','
					. '"dislikes_alltime":' . $data['dislikes_alltime'] . ','
					
					. '"views_daily":' . $data['views_daily'] . ','
					. '"views_weekly":' . $data['views_weekly'] . ','
					. '"views_monthly":' . $data['views_monthly'] . ','
					. '"views_alltime":' . $data['views_alltime']
				. '},'
				
				. '"created_relative_time":"' . $data['created_relative_time'] . '",'
				. '"updated_relative_time":"' . $data['updated_relative_time'] . '"'
			. '}'
		. '}';
			
		return $reply;
	}
	
	function getRandomLevel($dbId) {
		$db = new PDO('sqlite:' . $dbId . '.db');
	
		$query = 'SELECT * FROM level ORDER BY RANDOM() LIMIT 1';
		
		$statement = $db->prepare($query);
		
		$statement->execute();
		$result = $statement->fetchAll();

		$reply = '{"version":1,"code":200,"message":"OK","payload":';
		
		$data = $result[0];
		
		$flagged = $data['flagged'];
		if ($flagged == '') {
			$flagged = null;
		}
	
		$reply .= '{'
				. '"id":' . $data['id'] . ','
				. '"game_id": 17899,'
				. '"name":"' . $data['name'] . '",'
				. '"description":"' . $data['description'] . '",'
				. '"uid":"' . $data['uid'] . '",'
				. '"data":"' . $data['data'] . '",'
				. '"share_id":"' . $data['share_id'] . '",'
				. '"long_url":"' . $data['long_url'] . '",'
				. '"short_url":"' . $data['short_url'] . '",'
				. '"thumbnail_url":"' . $data['thumbnail_url'] . '",'
				. '"status":"' . $data['status'] . '",'
				. '"flagged": null,'
				. '"created_date":"' . $data['created_date'] . '",'
				. '"updated_date":"' . $data['updated_date'] . '",'
				
				. '"player_info": {'
					. '"uid":"' . $data['uid'] . '",'
					. '"username":"' . $data['username'] . '",'

					. '"avatar_sizes": {'					
						. '"tiny":"' . $data['avatar_tiny'] . '",'
						. '"small":"' . $data['avatar_small'] . '",'
						. '"medium":"' . $data['avatar_medium'] . '",'
						. '"large":"' . $data['avatar_large'] . '"'
					. '},'
					. '"profile_url":"' . $data['profile_url'] . '"'
				. '},'
				
				. '"stats": {'
					. '"likes_daily":' . $data['likes_daily'] . ','
					. '"likes_weekly":' . $data['likes_weekly'] . ','
					. '"likes_monthly":' . $data['likes_monthly'] . ','
					. '"likes_alltime":' . $data['likes_alltime'] . ','
				
					. '"dislikes_daily":' . $data['dislikes_daily'] . ','
					. '"dislikes_weekly":' . $data['dislikes_weekly'] . ','
					. '"dislikes_monthly":' . $data['dislikes_monthly'] . ','
					. '"dislikes_alltime":' . $data['dislikes_alltime'] . ','
					
					. '"views_daily":' . $data['views_daily'] . ','
					. '"views_weekly":' . $data['views_weekly'] . ','
					. '"views_monthly":' . $data['views_monthly'] . ','
					. '"views_alltime":' . $data['views_alltime']
				. '},'
				
				. '"created_relative_time":"' . $data['created_relative_time'] . '",'
				. '"updated_relative_time":"' . $data['updated_relative_time'] . '"'
			. '}'
		. '}';
			
		return $reply;
	}