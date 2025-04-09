<?php
	header('Content-Type: image/png');

	$mode = $_REQUEST['mode'];
	
	$group = $_REQUEST['group'];
	$folder = $_REQUEST['folder'];
	$proj = $_REQUEST['proj'];

	$zip = new ZipArchive;
	
    $zipFile = 'users/group' . $group . '.zip';
	$entry = 'user' . $folder . '\\' . $mode . '\proj' . $proj . '.png';
				
	if ($zip->open($zipFile) === true) {
		echo $zip->getFromName($entry);
		$zip->close();
		
	} else {
		$rawFile = 'users/group' . $group . '/user' . $folder . '/' . $mode . '/proj' . $proj . '.png';
		echo file_get_contents($rawFile);
	}
	