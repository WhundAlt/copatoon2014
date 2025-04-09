<?php
	$gametable = $_REQUEST['gametable'];
	$gameslug = $_REQUEST['gameslug'];

	if ($gameslug == 'steamdroidtt') {
		echo 'username=DarkMoe&score=0&extradata=0&rank=101&totalscores=1353';
	} else if ($gameslug == 'firebug2') {
		echo 'username=DarkMoe&score=0&extradata=1%7C0%7C0%7C0%7C0%7C0%7C0&rank=101&totalscores=653';
	}
