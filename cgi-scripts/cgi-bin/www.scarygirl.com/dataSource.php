<?php

	$action = $_REQUEST['action'];
	
	echo '<?xml version="1.0" encoding="UTF-8"?>' . "\r\n";;
	echo '<response>' . "\r\n";
	echo '<type>' . "\r\n";
	echo $action . "\r\n";
	echo '</type>' . "\r\n";
		
	echo '<data>' . "\r\n";
		
	if ($action == 'GET_STATUS') {
		$currentLevel = 2;
		$gameId = 740981;
		$maxLevel = 16;
		$console1 = 1;
		$console2 = 1;
		$console3 = 1;
		$console4 = 1;
		$console5 = 1;
		$console6 = 1;
		$bgStory = 0;
		$skillLevel = 3;
		
		echo '<status>' . "\r\n";
		echo '<loggedIn>false</loggedIn>' . "\r\n";
		echo '<email></email>' . "\r\n";
		echo '<name></name>' . "\r\n";
		echo '<level>' . $currentLevel . '</level>' . "\r\n";
		echo '<gameId>' . $gameId . '</gameId>' . "\r\n";
		echo '<maxlevel>' . $maxLevel . '</maxlevel>' . "\r\n";
		echo '<score>0</score>' . "\r\n";
		echo '<ranking>314373</ranking>' . "\r\n";
		echo '<percentage>0</percentage>' . "\r\n";
		echo '<percentageFish>0</percentageFish>' . "\r\n";
		echo '<percentageTreasures>0</percentageTreasures>' . "\r\n";
		echo '<console1>' . $console1 . '</console1>' . "\r\n";
		echo '<console2>' . $console2 . '</console2>' . "\r\n";
		echo '<console3>' . $console3 . '</console3>' . "\r\n";
		echo '<console4>' . $console4 . '</console4>' . "\r\n";
		echo '<console5>' . $console5 . '</console5>' . "\r\n";
		echo '<console6>' . $console6 . '</console6>' . "\r\n";
		echo '<isBgStory>' . $bgStory . '</isBgStory>' . "\r\n";
		echo '<skillLevel>' . $skillLevel . '</skillLevel>' . "\r\n";
		echo '</status>' . "\r\n";
			
	} else if ($action == 'SAVE_SKILL_LEVEL') {
		$skillLevel = $_REQUEST['skillLevel'];
		
		echo 'updated' . "\r\n";
		
	} else if ($action == 'PLAY_START') {
		
		$skill = $_REQUEST['skill'];
		$home = '';
		if (array_key_exists('home', $_REQUEST)) {
			$home = $_REQUEST['home'];
		}
		
		$level = '';
		if (array_key_exists('level', $_REQUEST)) {
			$level = $_REQUEST['level'];
		}
				
		echo '<playId>3393152</playId>' . "\r\n";
		
	} else if ($action == 'NEW_GAME') {
		echo '<gameId></gameId>' . "\r\n";
		
	} else if ($action == 'PLAY_COMPLETE') {
		$percentage = $_REQUEST['percentage'];
		$score = $_REQUEST['score'];
		$playId = $_REQUEST['playId'];
		$crystals = $_REQUEST['crystals'];
		$fish = $_REQUEST['fish'];
		$treasures = $_REQUEST['treasures'];
		$skill = $_REQUEST['skill'];
		$hash = $_REQUEST['hash'];
		
		echo '<totalScore></totalScore>' . "\r\n";
		
	} else if ($action == 'PLAY_COMPLETE_DIE') {
		$playId = $_REQUEST['playId'];
		$skill = $_REQUEST['skill'];
		$hash = $_REQUEST['hash'];
		
		echo '<totalScore></totalScore>' . "\r\n";
		
	}
	
	echo '</data>' . "\r\n";
	
	echo '<status>' . "\r\n";
	echo 'OK' . "\r\n";
	echo '</status>' . "\r\n";
	echo '</response>' . "\r\n";