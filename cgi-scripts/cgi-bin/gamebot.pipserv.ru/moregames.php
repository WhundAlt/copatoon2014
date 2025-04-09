<?php
	if (isset($_GET['id'])) {
		echo 'a1=14522&a2=15850&a3=15000&a4=15100&a5=13770';
	} else if (isset($_GET['img'])) {
		//echo 'img/' . $_GET['img'] . '.gif';
		echo file_get_contents('img/' . $_GET['img'] . '.gif');
	}
	