<?php
	if ($_POST["new_game"]) {
		file_put_contents("name", $_POST["name"]);
		file_put_contents("save", "money=0&comp_level=0&funky_level=0&bg_color=1&comment=&item=0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0&norma=1,1,1,1,1,1");
		echo "entry=new&id=1&pw=1";
	} else {
		echo "entry=ok";
		$name = file_get_contents("name");
		if ($name) {
			echo "&name=", $name;
		} else {
			echo "&name=";
		}
		$save = file_get_contents("save");
		if ($save) {
			echo "&comment_block=0&", $save;
		} else {
			echo "money=0&comp_level=0&funky_level=0&bg_color=1&comment=&item=0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0&norma=1,1,1,1,1,1";
		}
	}
?>