<?php
try {
	$db = new PDO("sqlite:crackerland.db");
	$rows = $db->query("select * from BBS where stageId=" . $_POST["d1"] . " and mode=" . $_POST["d2"] . " limit 11 offset " . $_POST["d0"]);
			
	$output = "start=" . ($_POST["d0"]+1) . "mode=" . $_POST["d2"];
	$i = 1;
	foreach ($rows as $row) {
		$output .= "&n" . $i . "=" . $row["n"];
		$output .= "&c" . $i . "=" . $row["c"];
		$i++;
	}
	echo $output;
} catch(PDOException $e) {
	echo "start=1mode=0";
}
?>