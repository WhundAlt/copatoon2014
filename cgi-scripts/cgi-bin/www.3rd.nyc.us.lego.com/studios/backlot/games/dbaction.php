<?php
header('Cache-Control: no-cache');
header('Expires: -1');
header('Content-Type: text/plain');

function backlot_respond($status, $inner = '') {
	echo('<RESPONSE STATUS="' . ($status ? 'OK' : 'ERROR') . '"');
	
	if ($inner !== '') {
		echo('>' . $inner . '</RESPONSE>');
		return;
	}
	
	echo('/>');
}

function backlot_act_db() {
	$action = '';

	if (isset($_POST['ACTION']) === true) {
		$action = $_POST['ACTION'];
	}

	$file_name = dirname(__FILE__) . '/state.txt';

	switch ($action) {
		case 'GetUserInfo':
		if (is_file($file_name) === true) {
			$file_contents = file_get_contents($file_name);
			
			if ($file_contents !== false) {
				echo($file_contents);
				return;
			}
		}
		
		echo('login=1&guid=00000000-0000-0000-0000-000000000000&level=1');
		break;
		case 'SaveLevel':
		$level = 1;
		
		if (isset($_POST['LEVEL']) === true) {
			$level = intval($_POST['LEVEL']);
		}
		
		$file_resource_pointer = @fopen($file_name, 'w');
		
		if ($file_resource_pointer === false) {
			backlot_respond(false);
			return;
		}
		
		@fwrite($file_resource_pointer, 'login=1&guid=00000000-0000-0000-0000-000000000000&level=' . $level);
		@fclose($file_resource_pointer);
		backlot_respond(true);
		break;
		default:
		backlot_respond(false, 'No script action passed in.');
	}
}

backlot_act_db();
?>