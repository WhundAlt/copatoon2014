<?PHP

	$id = $_REQUEST["id"];
	
	$zip = new ZipArchive;
	if ($zip->open("play_directory.zip") === TRUE) {
		echo $zip->getFromName("play/" . $id . ".php");
		$zip->close();
	}