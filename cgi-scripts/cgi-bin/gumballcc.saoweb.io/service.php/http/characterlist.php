<?php
	$filter = $_REQUEST['filter'];
	$page = $_REQUEST['page'];
	$pageSize = $_REQUEST['pageSize'];
	
	$db = new PDO('sqlite:profile.db');
	
	$queryString = 'SELECT * FROM character ';
	if ($filter != '') {
		$queryString .= 'WHERE name like "%' . $filter .'%" ';
	}
	$queryString .= 'ORDER BY date DESC LIMIT ' . $pageSize . ' OFFSET ' . ($page * $pageSize);
	
	$statement = $db->prepare($queryString);
		
	$statement->execute();
	$result = $statement->fetchAll();
	
	$queryString = 'SELECT count(1) as total FROM character ';
	if ($filter != '') {
		$queryString .= 'WHERE name like "%' . $filter .'%"';
	}
	
	$statement = $db->prepare($queryString);
		
	$statement->execute();
	$resultCount = $statement->fetchAll();
	
	$total = $resultCount[0]['total'];
	
	$reply = '<?xml version="1.0" encoding="utf-8" ?>';
	$reply .= '<data total="' . $total . '" page="' . $page . '">';
	
	for ($i = 0; $i < count($result); $i++) {
		$res = $result[$i];
		$reply .= ('<character id="' . $res['id'] . '">');
		$reply .= ('<name><![CDATA[' . $res['name'] . ']]></name>');
		$reply .= ('<username><![CDATA[' . $res['username'] . ']]></username>');
		$reply .= ('<image><![CDATA[' . $res['image'] . ']]></image>');
		$reply .= ('<thumb><![CDATA[' . $res['thumb'] . ']]></thumb>');
		$reply .= ('<date><![CDATA[' . $res['date'] . ']]></date>');
		$reply .= ('<body><![CDATA[' . $res['body'] . ']]></body>');
		$reply .= ('<likes>' . $res['likes'] . '</likes>');
		$reply .= ('<dislikes>' . $res['dislikes'] . '</dislikes>');
		$reply .= ('<featured>' . $res['featured'] . '</featured>');
		$reply .= ('<views>' . $res['views'] . '</views>');
		$reply .= ('<moderation>' . $res['moderation'] . '</moderation>');
		$reply .= '</character>';
	}
	$reply .= '</data>';
	
	echo $reply;
