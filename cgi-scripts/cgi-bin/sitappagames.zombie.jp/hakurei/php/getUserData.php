<?php
$path = "user_data/" . $_POST["id"] . "/";
$name = $_POST["pass"];
if (!is_dir($path)) {
	echo "php_error";
} else {
	echo file_get_contents($path . $name);
}
?>