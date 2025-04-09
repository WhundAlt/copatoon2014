<?php
$path = "user_data/" . $_POST["id"] . "/";
$name = $_POST["pass"];
if (!is_dir($path)) {
	echo "php_error";
} else {
	$dataPrev = file_get_contents($path . $name);
	file_put_contents($path . $name, $_POST["data"]);
	echo $dataPrev != $_POST["data"] ? "1" : "0";
}
?>