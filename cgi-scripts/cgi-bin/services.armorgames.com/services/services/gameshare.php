<?php

session_name('agi_session');
session_start();

require dirname(__DIR__) . '/vo/GameShareVO.php';
require dirname(__DIR__) . '/vo/GameShareListVO.php';

function serializeShare($data) {
	$share = new GameShareVO();
	$share->isOk = true;
	$share->status = 'success';
	$share->value = [
		'gs_id' => $data['id'],
		'created' => $data['created'],
		'gameshare_id' => $data['id'],
		'flash_share_id' => $data['flash_id'],
		'long_url' => '',
		'short_url' => 'http://armor.ag/' . $data['short_id'],
		'thumbnail_url' => $data['thumbnail_url'],
		'gameshare_name' => $data['name'],
		'country' => '',
		'tempstat_views_daily' => $data['views_daily'],
		'tempstat_views_weekly' => $data['views_weekly'],
		'tempstat_views_monthly' => 0,
		'tempstat_views_alltime' => $data['views_alltime'],
		'tempstat_ratings_daily' => $data['ratings_daily'],
		'tempstat_ratings_weekly' => $data['ratings_weekly'],
		'tempstat_ratings_monthly' => 0,
		'tempstat_ratings_alltime' => $data['ratings_alltime'],
		'staff_pick' => ($data['staff_pick'] ? '1' : ''),
		'creator_uid' => $data['creator_uid'],
		'fun_factor' => $data['fun_factor'],
		'data' => $data['data'],
		'creator' => [
			'profile_url' => 'http://armorgames.com/user/',
			'avatar_url' => null,
			'username' => null,
			'uid' => $data['creator_uid']
		],
		'createdOn' => date('F j, Y', strtotime($data['created'])),
		'timestamp' => 0,
		'rating' => [
			'daily' => [
				'rating' => 0,
				'count' => $data['ratings_daily']
			],
			'weekly' => [
				'rating' => 0,
				'count' => $data['ratings_weekly']
			],
			'alltime' => [
				'rating' => 0,
				'count' => $data['ratings_alltime']
			]
		],
		'views' => [
			'daily' => $data['views_daily'],
			'weekly' => $data['views_weekly'],
			'alltime' => $data['views_alltime']
		]
	];
	return $share;
}

class GameShare {

	public function listBy($interval, $metric, $max_items, $page) {
		$list = new GameShareListVO();
		$list->isOk = true;
		$list->status = 'success';
		$listarr = array();

		$gameId = $_SESSION['gameKey'];

		$db = new PDO('sqlite:services/' . $gameId . '.db');
		$count = $db->query('SELECT count(*) FROM level')->fetchAll()[0];

		if ($metric == 'mostviewed') {
			$dbmetric = 'views';
		} elseif ($metric == 'mostrated') {
			$dbmetric = 'ratings';
		}
		
		$query = 'SELECT * FROM level ORDER BY ' . $dbmetric . '_' . $interval . ' DESC LIMIT ' . $max_items . ' OFFSET ' . (($page - 1) * $max_items);

		$statement = $db->prepare($query);

		$statement->execute();
		$result = $statement->fetchAll();

		$i = 0;
		foreach ($result as $level) {
			$listarr[$i] = serializeShare($level);
			$i++;
		}

		$list->value = [
			'metric' => $metric,
			'interval' => $interval,
			'page' => $page,
			'list' => $listarr,
			'total' => $count
		];
		return $list;
	}

	public function listLatest($max_items, $page) {
		$list = new GameShareListVO();
		$list->isOk = true;
		$list->status = 'success';
		$listarr = array();

		$gameId = $_SESSION['gameKey'];

		$db = new PDO('sqlite:services/' . $gameId . '.db');
		$count = $db->query('SELECT count(*) FROM level')->fetchAll()[0];

		$query = 'SELECT * FROM level ORDER BY id DESC LIMIT ' . $max_items . ' OFFSET ' . (($page - 1) * $max_items);

		$statement = $db->prepare($query);

		$statement->execute();
		$result = $statement->fetchAll();

		$i = 0;
		foreach ($result as $level) {
			$listarr[$i] = serializeShare($level);
			$i++;
		}
		$list->value = [
			'page' => $page,
			'list' => $listarr,
			'total' => $count
		];
		return $list;
	}

	public function listStaffPicks($max_items, $page) {
		$list = new GameShareListVO();
		$list->isOk = true;
		$list->status = 'success';
		$listarr = array();

		$gameId = $_SESSION['gameKey'];

		$db = new PDO('sqlite:services/' . $gameId . '.db');
		$count = $db->query('SELECT count(*)  FROM level WHERE staff_pick == 1')->fetchAll()[0];

		$query = 'SELECT * FROM level WHERE staff_pick == 1 ORDER BY id DESC LIMIT ' . $max_items . ' OFFSET ' . (($page - 1) * $max_items);

		$statement = $db->prepare($query);

		$statement->execute();
		$result = $statement->fetchAll();

		$i = 0;
		foreach ($result as $level) {
			$listarr[$i] = serializeShare($level);
			$i++;
		}
		$list->value = [
			//'metric' => $metric,
			//'interval' => $interval,
			'page' => $page,
			'list' => $listarr,
			'total' => $count
		];
		return $list;
	}


	public function get($flash_id) {
		$gameId = $_SESSION['gameKey'];

		$db = new PDO('sqlite:services/' . $gameId . '.db');

		$query = 'SELECT * FROM level WHERE flash_id = :flash_id';
		$statement = $db->prepare($query);
		$statement->bindValue(':flash_id', $flash_id, PDO::PARAM_STR);

		$statement->execute();
		$result = $statement->fetchAll();

		return serializeShare($result[0]);
	}

	public function getRandomShare() {
		$gameId = $_SESSION['gameKey'];
		error_log($gameId);

		$db = new PDO('sqlite:services/' . $gameId . '.db');

		$query = 'SELECT * FROM level ORDER BY RANDOM() LIMIT 1';
		$statement = $db->prepare($query);
		$statement->execute();

		$result = $statement->fetchAll();

		return serializeShare($result[0]);
	}

	public function incrementView($flash_id, $param2) {
		$gameId = $_SESSION['gameKey'];

		$db = new PDO('sqlite:services/' . $gameId . '.db');

		$query = 'SELECT * FROM level WHERE flash_id = :flash_id';
		$statement = $db->prepare($query);
		$statement->bindValue(':flash_id', $flash_id, PDO::PARAM_STR);

		$statement->execute();
		$result = $statement->fetchAll();

		return serializeShare($result[0]);
	}
}
