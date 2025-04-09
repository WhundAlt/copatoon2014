<?php
$path = "user_data/" . $_POST["id"] . "/";
$name = $_POST["pass"];
if (!is_dir($path)) {
	echo "php_error";
} else {
	$timePrev = file_get_contents($path . "login");
	$timeNow = time();
	if (date("Y-m",$timePrev) != date("Y-m",$timeNow)) {
		echo "2";
	} else if (date("Y-m-d",$timePrev) != date("Y-m-d",$timeNow)) {
		echo "1";
	} else {
		echo "0";
	}
	file_put_contents($path . "login", $timeNow);
}
?>