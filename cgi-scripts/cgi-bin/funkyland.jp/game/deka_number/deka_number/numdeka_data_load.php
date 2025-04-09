<?php
	$save = file_get_contents("save");
	if ($save) {
		echo $save, "&";
	} else {
		echo "chara_comment=&my_music=1,0,0,0,0,0,0,0,0,0&";
	}
	$name = file_get_contents("name");
	if ($name) {
		echo "chara_name=", $name, "&";
	} else {
		echo "chara_name=??????&";
	}
	echo "entry=ok";
?>