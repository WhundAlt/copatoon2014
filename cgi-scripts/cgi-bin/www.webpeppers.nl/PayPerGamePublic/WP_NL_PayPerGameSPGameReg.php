<?php
$to_do = '';

if (isset($_POST['ToDo']) === true) {
	$to_do = $_POST['ToDo'];
}

$game = '';

if (isset($_POST['game']) === true) {
	$game = $_POST['game'];
}
	
switch ($to_do) {
	case 'GetJackpot':
	switch ($game) {
		case 'CreepyPinball':
		echo('0,00 euro');
		break;
	}
	break;
	case 'GetGamePayed':
	switch ($game) {
		case 'CreepyPinball':
		echo('1');
		break;
	}
	break;
	case 'GetCredits':
	echo('Free');
	break;
}
?>