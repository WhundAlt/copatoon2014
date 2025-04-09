<?php
$output = "&ret=0&msg=&mi=";
try {
	$db = new PDO("sqlite:pzl.db");

	$rows = $db->query("select * from stgs where no=" . $_POST['no']);
	
	$cols = ["cr", "msg", "stg", "h", "w", "jkn"];
	foreach ($rows as $row) {
		foreach ($cols as $col) {
			$output .= "&" . $col . "=" . $row[$col];
		}
	}
	echo $output;
} catch(PDOException $e) {
	echo $output;
}
?>