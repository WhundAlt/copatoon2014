<?php
	$data = $_POST["data_string"];
	file_put_contents('../save/save.xml', $data);
?>
