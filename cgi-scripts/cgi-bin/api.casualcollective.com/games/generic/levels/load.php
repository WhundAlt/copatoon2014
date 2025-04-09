<?php
	$hid = $_POST['hid'];
	$gid = $_POST['gid'];
	$h = $_POST['h'];
	$v = $_POST['v'];
	$i = $_POST['i'];
	$lid = $_POST['lid'];
	
	if ($gid == '14') {
		$dbfile = 'splitter2.db';
	} else if ($gid == '15') {
		$dbfile = 'levels.db';
	}
	
	$db = new PDO('sqlite:' . $dbfile);
	
	$statement = $db->prepare('SELECT * FROM level WHERE id = :id');
	$statement->bindValue(':id', $lid, PDO::PARAM_STR);
	
	$statement->execute();
	$result = $statement->fetchAll();
		
	$level = $result[0];
	
	$data = $level['data'];
	
	$replaydata = $level['replaydata'];
	
	$reply = '{"error":0,"level":{';
	
	if ($gid == '14') {
		$reply .= ('"data":"'. str_replace('"', '\"', $data) . '",');
	} else if ($gid == '15') {
		$reply .= ('"data":"'. $data . '",');
	}
	
	$reply .= ('"replaydata":"'. $replaydata . '"');
		
	$reply .= '}';
		
	$keyword = $reply . '}';

	$hash = hash('md5', getSalt() . $keyword . calc(intval($hid)));
	
	$reply .= ',"h":"' . $hash . '","hid":' . $hid . '}';
			
	echo $reply;
		
	function getSalt() {
		return 'ilevbioghv890347ho3nrkljebv';
	}
	
	function calc($param1) {
		return $param1 * ($param1 % 11);
	}
	