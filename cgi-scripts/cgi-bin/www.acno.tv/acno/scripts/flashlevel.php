<?php

	$mode = $_REQUEST['mode'];
	$game_id = $_REQUEST['game_id'];

	if ($mode == 'lget') {
		$blet = $_REQUEST['blet'];
		$dummy = $_REQUEST['dummy'];
		
		echo file_get_contents("../levels/" . $blet . ".txt");
	} else if ($mode == 'get') {
		$rank = $_REQUEST['rank'];
		
		$zip = new ZipArchive;
		if ($zip->open("../levels/data_directory.zip") === TRUE) {
			echo $zip->getFromName("data/" . $rank . ".txt");
			$zip->close();
		}
	}
	