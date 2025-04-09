<?php
	header('Content-Type: text/html');

	$folder = $_REQUEST['folder'];
	$file = $_REQUEST['file'];

	$zip = new ZipArchive;
	
    $zipFile = '';
	$entry = $file;
					
	if ($zip->open($zipFile) === true) {
		echo $zip->getFromName($entry);
		$zip->close();
	}
	