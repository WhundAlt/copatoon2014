<?php

	$url = $_REQUEST['url'];

	$zip = new ZipArchive;
	$end = strpos($url, '/');
	$end = strpos($url, '/', $end + strlen('/'));
    $zipFile = substr($url, 0, $end) . ".zip";
	$entry = substr($url, $end + 1);
		
	if ($zip->open($zipFile) === true) {
		echo $zip->getFromName($entry);
		$zip->close();
		
	} else {
		header('Content-Type: image/png');
		echo file_get_contents($url);
	}
	