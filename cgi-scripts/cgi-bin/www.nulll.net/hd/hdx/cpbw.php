<?php

	$a = $_REQUEST['a'];	//	0 = list levels (Top Rated), 1 = list levels (Most Recent), 2 = get level data
	$b = $_REQUEST['b'];	//	page (0 index)
	$c = $_REQUEST['c'];	//	x (unk)
	$d = $_REQUEST['d'];	//	d = id
	
	$db = new PDO('sqlite:hdxyth.db');

	if ($a == '0' || $a == '1') {
		$query = 'SELECT data FROM level LIMIT 15 OFFSET ' . (((int) $b) * 15);
		
		$statement = $db->prepare($query);
		
		$statement->execute();
		$result = $statement->fetchAll();
		
		$total = count($result);
		
		$reply = 'a=k&b=' . $total . '&';
		
		$letters = range('a','z');
		$numLetter = 2;
		foreach ($result as $level) {
			$data = $level['data'];
			
			$reply = $reply . $letters[$numLetter] . '=' . $data . '&';
			$numLetter++;
		}
		
	} else if ($a == '2') {
		$query = 'SELECT level_data FROM level WHERE id = :id LIMIT 1';
		$statement = $db->prepare($query);
		$statement->bindValue(':id', $d, PDO::PARAM_STR);
				
		$statement->execute();
		$result = $statement->fetchAll();
		
		$reply = 'a=k&b=01&c=';
				
		$data = $result[0]['level_data'];
		$reply = $reply . $data . '&';
	}
	
	$reply .= 'r=000095&s=0';
	
	echo $reply;
