<?php
	file_put_contents($_POST["chara"], str_replace("&onLoad=[type Function]","",urldecode(file_get_contents("php://input"))));
	echo "data_save=ok";
?>