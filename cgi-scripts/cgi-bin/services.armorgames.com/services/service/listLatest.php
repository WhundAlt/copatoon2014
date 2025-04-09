<?php

require dirname(__DIR__) . '/vo/GameShareVO.php';
require dirname(__DIR__) . '/vo/GameShareListVO.php';

class GameShare {
	
	public function listBy($interval, $metric, $max_items, $page) {
		$list = new GameShareListVO();
		$list->isOk = true;
		$list->status = 'success';
		$listarr = array();
		
		$dbfile = 'iHateTraffic.db';
				
		$total = 13;
		
		$db = new PDO('sqlite:' . $dbfile);
		
		$statement = $db->prepare('SELECT * FROM level ORDER BY id DESC LIMIT ' . $total . ' OFFSET ' . $page);

		$statement->execute();
		$result = $statement->fetchAll();
		
		//for ($i = 0; $i < $total; $i++) {
		$i = 0;
		foreach ($result as $level) {
			$share = new GameShareVO();
			$share->isOk = true;
			$share->status = 'success';
			$value = [
				'gs_id' => $i,
				'created' => $level['created'],
				'gameshare_id' => $i,
				'flash_share_id' => $i,
				'long_url' => '',
				'short_url' => '',
				'thumbnail_url' => $level['thumbnail_url'],
				'gameshare_name' => $level['name'],
				'country' => '',
				'tempstat_views_daily' => $level['views_daily'],
				'tempstat_views_weekly' => $level['views_weekly'],
				'tempstat_views_monthly' => 1000,
				'tempstat_views_alltime' => $level['views_alltime'],
				'tempstat_ratings_daily' => $level['ratings_daily'],
				'tempstat_ratings_weekly' => $level['ratings_weekly'],
				'tempstat_ratings_monthly' => 69,
				'tempstat_ratings_alltime' => $level['ratings_alltime'],
				'staff_pick' => '',
				'fun_factor' => 0,
				'creator_uid' => $level['creator_uid'],
				'createdOn' => 'December 31, 1969',
				'timestamp' => '0',
				'rating' => [
					'daily' => [
						'rating' => 0,
						'count' => 69
					],
					'weekly' => [
						'rating' => 0,
						'count' => 69
					],
					'alltime' => [
						'rating' => 0,
						'count' => 69
					]
				],
				'views' => [
					'daily' => 1000,
					'weekly' => 1000,
					'alltime' => 1000
				]
			];
			$share->value = $value;
			$listarr[$i] = $share;
			
			$i++;
		}
		$list->value = [
			'metric' => $metric,
			'interval' => $interval,
			'page' => $page,
			'list' => $listarr,
			'total' => $total
		];
		return $list;
	}
}
