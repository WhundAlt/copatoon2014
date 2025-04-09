<?php
	$data = $_FILES["Filedata"]["tmp_name"];
	file_put_contents('../save/save.xml', file_get_contents($data));
?>
