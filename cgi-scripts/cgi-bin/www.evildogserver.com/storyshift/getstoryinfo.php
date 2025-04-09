<?php
	$id = $_REQUEST['storyid'];

	$db = new PDO('sqlite:story.db');
	
	$query = 'SELECT info FROM story WHERE id = ' . $id;

	$statement = $db->prepare($query);

	$statement->execute();
	$result = $statement->fetchAll();
	
	echo $result[0]['info'];
