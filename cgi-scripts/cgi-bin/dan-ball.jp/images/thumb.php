<?php
	header('Content-type: image/gif');

	$game = $_REQUEST['game'];
	$folder = $_REQUEST['folder'];
	$id = $_REQUEST['id'];
	
	$zip = new ZipArchive;
	
    $zipFile = $game . '.zip';
	//$entry = $game . '\\' . $folder . '\\' . $id . '.gif';
	
	$entry = $game . '/' . $folder . '/' . $id . '.gif';
	if ($zip->open($zipFile) === true) {
		echo $zip->getFromName($entry);
		$zip->close();
	} else {
		echo 'raul';
	}