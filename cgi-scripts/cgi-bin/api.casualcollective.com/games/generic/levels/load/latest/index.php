<?php
	$hid = $_POST['hid'];
	$gid = $_POST['gid'];
	$h = $_POST['h'];
	$v = $_POST['v'];
	$unrated = $_POST['unrated'];
	$duration = $_POST['duration'];
	$published = $_POST['published'];
	$start = $_POST['start'];
	$limit = $_POST['limit'];
	
	if ($gid == '14') {
		$dbfile = 'splitter2.db';
		$count = 844415;
	} else if ($gid == '15') {
		$dbfile = 'levels.db';
		$count = 31640;
	}
	
	$db = new PDO('sqlite:../../' . $dbfile);
		
	$statement = $db->prepare('SELECT * FROM level ORDER BY id DESC LIMIT ' . $limit . ' OFFSET ' . $start);

	$statement->execute();
	$result = $statement->fetchAll();
			
	$sep = '';
	$reply = '{"error":0,"levels":[';
		
	foreach ($result as $level) {
		$id = $level['id'];
		$averagerating = $level['averagerating'];
		$completes = $level['completes'];
		$levelname = $level['levelname'];
		$leveldesc = $level['leveldesc'];
		$publishtime = $level['publishtime'];
		$loads = $level['loads'];
		$rating = $level['rating'];
		$username = $level['username'];
		
		$levelname = htmlspecialchars(json_encode($levelname), ENT_QUOTES, 'UTF-8');
		$leveldesc = htmlspecialchars(json_encode($leveldesc), ENT_QUOTES, 'UTF-8');
		
		$reply .= $sep;
		
		$reply .= '{';
		
		$reply .= ('"id":'. $id . ',');
		$reply .= ('"levelname":"'. $levelname . '",');
		$reply .= ('"leveldesc":"'. $leveldesc . '",');
		$reply .= ('"publishtime":'. $publishtime . ',');
		$reply .= ('"loads":'. $loads . ',');
		$reply .= ('"completes":'. $completes . ',');
		$reply .= ('"rating":'. $rating . ',');
		$reply .= ('"averagerating":'. $averagerating . ',');
		$reply .= ('"username":"'. $username . '"');
		
		$reply .= '}';
		
		$sep = ",";
	}
	
	$keyword = $reply;
	$keyword .= '],"count":' . $count . '}';

	$hash = hash('md5', getSalt() . $keyword . calc(intval($hid)));
	
	$reply .= '],"count":' . $count . ',"h":"' . $hash . '","hid":' . $hid . '}';
			
	echo $reply;
		
	function getSalt() {
		return 'ilevbioghv890347ho3nrkljebv';
	}
	
	function calc($param1) {
		return $param1 * ($param1 % 11);
	}
