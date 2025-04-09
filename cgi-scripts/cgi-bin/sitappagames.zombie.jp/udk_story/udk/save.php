<?php
$path = "user_data/" . $_POST["user_id"] . "/";
$name = $_POST["user_pass"] . ".txt";
if (!is_dir($path)) {
	echo "res=error";
} else {
	file_put_contents($path . $name, $_POST["save_data"]);
	echo "res=ok";
}
?>