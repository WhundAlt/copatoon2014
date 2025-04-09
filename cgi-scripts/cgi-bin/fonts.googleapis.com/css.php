<?php
	$uri = $_SERVER['REQUEST_URI'];
	$params = substr($uri, strlen('/css?family='));
	
	header('content-type: text/css; charset=utf-8');
	
	if ($params == 'Heebo:400,700|Source+Code+Pro') {
		echo file_get_contents('heebo.txt');
	} else if ($params == 'Open+Sans:300,400,600') {
		echo file_get_contents('openSans.txt');
	} else if ($params == 'Roboto:400,700,400italic,700italic') {
		echo file_get_contents('roboto.txt');
	} else if ($params == 'Sue+Ellen+Francisco') {
		echo file_get_contents('sueEllenFrancisco.txt');
	}
	
	