<?php
header('Cache-Control: no-cache');
header('Expires: -1');
header('Content-Type: text/plain');

function galidor_respond($status, $inner = '') {
	echo('<RESPONSE STATUS="' . ($status ? 'OK' : 'ERROR') . '"');
	
	if ($inner !== '') {
		echo('>' . $inner . '</RESPONSE>');
		return;
	}
	
	echo('/>');
}

function galidor_act_db() {
	$action = '';

	if (isset($_POST['action']) === true) {
		$action = $_POST['action'];
	}

	$file_name = dirname(__FILE__) . '/player_data.txt';

	switch ($action) {
		case 'READPLAYERDATA':
		if (is_file($file_name) === true) {
			$file_contents = file_get_contents($file_name);
			
			if ($file_contents !== false) {
				echo($file_contents);
				return;
			}
		}
		
		galidor_respond(true);
		break;
		case 'SAVEPLAYERDATA':
		$species = '';
		$strength = '';
		$speed = '';
		$agility = '';
		$endurance = '';
		$charm = '';
		$intelligence = '';
		$experience = '';
		$arm = '';
		$leg = '';
		$lastLocation = '';
		$challengesWon = '';
		$challengesLost = '';
		$canBeChallenged = '';
		$geography = '';
		$quest = '';
		$inventory = '';
		
		if (isset($_POST['Species']) === true) {
			$species = $_POST['Species'];
		}
		
		if (isset($_POST['Strength']) === true) {
			$strength = $_POST['Strength'];
		}
		
		if (isset($_POST['Speed']) === true) {
			$speed = $_POST['Speed'];
		}
		
		if (isset($_POST['Agility']) === true) {
			$agility = $_POST['Agility'];
		}
		
		if (isset($_POST['Endurance']) === true) {
			$endurance = $_POST['Endurance'];
		}
		
		if (isset($_POST['Charm']) === true) {
			$charm = $_POST['Charm'];
		}
		
		if (isset($_POST['Intelligence']) === true) {
			$intelligence = $_POST['Intelligence'];
		}
		
		if (isset($_POST['Experience']) === true) {
			$experience = $_POST['Experience'];
		}
		
		if (isset($_POST['Arm']) === true) {
			$arm = $_POST['Arm'];
		}
		
		if (isset($_POST['Leg']) === true) {
			$leg = $_POST['Leg'];
		}
		
		if (isset($_POST['LastLocation']) === true) {
			$lastLocation = $_POST['LastLocation'];
		}
		
		if (isset($_POST['ChallengesWon']) === true) {
			$challengesWon = $_POST['ChallengesWon'];
		}
		
		if (isset($_POST['ChallengesLost']) === true) {
			$challengesLost = $_POST['ChallengesLost'];
		}
		
		if (isset($_POST['canBeChallenged']) === true) {
			$canBeChallenged = $_POST['canBeChallenged'];
		}
		
		if (isset($_POST['Geography']) === true) {
			$geography = $_POST['Geography'];
		}
		
		if (isset($_POST['Quest']) === true) {
			$quest = $_POST['Quest'];
		}
		
		if (isset($_POST['Inventory']) === true) {
			$inventory = $_POST['Inventory'];
		}
		
		$file_resource_pointer = @fopen($file_name, 'w');
		
		if ($file_resource_pointer === false) {
			galidor_respond(true);
			return;
		}
		
		@fwrite($file_resource_pointer, '<PLAYER SPECIES="' . $species . '" STR="' . $strength . '" SPD="' . $speed . '" AGL="' . $agility . '" ENDR="' . $endurance . '" CHM="' . $charm . '" INTL="' . $intelligence . '" EXP="' . $experience . '" ARM_ID="' . $arm . '" LEG_ID="' . $leg . '" LOC="' . $lastLocation . '" WON="' . $challengesWon . '" LOST="' . $challengesLost . '" canBeChallenged="' . $canBeChallenged . '"><GEO>' . $geography . '</GEO><HIST>' . $quest . '</HIST><INV>' . $inventory . '</INV></PLAYER>');
		@fclose($file_resource_pointer);
		galidor_respond(true);
		break;
		case 'GETCHALLENGERS':
		return;
		case 'UPDATECHALLENGER':
		galidor_respond(true);
		break;
		default:
		galidor_respond(false);
	}
}

galidor_act_db();
?>