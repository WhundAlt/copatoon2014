<?php
	$offset = $_REQUEST['offset'];
	$row_count = $_REQUEST['row_count'];
	$searchMinRating = $_REQUEST['search[min_rating]'];
	$searchMaxRating = $_REQUEST['search[max_rating]'];
	$searchLevel = $_REQUEST['search']['level_name'];
	$searchUser = $_REQUEST['search']['username'];
	$sort = $_REQUEST['sort'];	// max_date, min_date, relevance, rating
	if ($sort == 'relevance') {
		$sort = 'num_votes DESC';
	} else if ($sort == 'min_date') {
		$sort = 'timestamp ASC';
	} else if ($sort == 'max_date') {
		$sort = 'timestamp DESC';
	} else if ($sort == 'rating') {
		$sort = 'mean_rating DESC';
	}
	
	$where = '1 = 1';
	if ($searchLevel) {
		$where = 'level_name like "%' . $searchLevel . '%"';
	} else if ($searchUser) {
		$where = 'username like "%' . $searchUser . '%"';
	}
		
	$db = new PDO('sqlite:level.db');
	$queryString = 'SELECT * FROM level WHERE ' . $where . ' ORDER BY ' . $sort . ' LIMIT ' . $row_count . ' OFFSET ' . $offset;
		
	$statement = $db->prepare($queryString);
			
	$statement->execute();
	$result = $statement->fetchAll();
	
	if (sizeof($result) == 0) {
		echo '<xml><end>End</end></xml>';
		return;
	}
	
	$reply = '<xml>';
	foreach ($result as $level) {
		$reply .= '<row>';
		$reply .= '<username>' . $level['username'] . '</username>';
		$reply .= '<level_id>' . $level['level_id'] . '</level_id>';
		$reply .= '<user_id>' . $level['user_id'] . '</user_id>';
		$reply .= '<level_name>' . htmlspecialchars($level['level_name'], ENT_XML1, 'UTF-8') . '</level_name>';
		$reply .= '<mean_rating>' . $level['mean_rating'] . '</mean_rating>';
		$reply .= '<num_votes>' . $level['num_votes'] . '</num_votes>';
		$reply .= '<timestamp>' . $level['timestamp'] . '</timestamp>';
		$reply .= '<modified>' . $level['modified'] . '</modified>';
		$reply .= '<created>' . $level['created'] . '</created>';
		$reply .= '</row>';
	}
	
	if (sizeof($result) < $row_count) {
		$reply .= '<end>End</end></xml>';
	} else {
		$reply .= '<end>More</end></xml>';
	}
	
	echo $reply;