<?php
	$save = $_POST["TodayNum"];
	foreach (array("TodaySch","Chancecnt","Getcnt","b1","b2","b3","b4","b5","b6","b7","b8","b9","b10","b11","b12","b13","b14","b15","b16","b17","b18","b19","b20","b21") as $key) {
		$save .= "&" . $key . "=" . $_POST[$key];
	}
	file_put_contents("save", $save);
	echo "data_save=ok";
?>