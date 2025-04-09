<?PHP 

	$level = $_GET['level'];
		
	echo file_get_contents("levels/" . $level . ".txt");
