<?php
$path = "user_data/" . $_POST["id"] . "/";
$name = $_POST["pass"];
if (is_dir($path)) {
	echo "php_error";
} else {
	mkdir($path,0777,true);
	file_put_contents($path . $name, $_POST["data"]);
	file_put_contents($path . "login", time());
	echo "1";
}
?>