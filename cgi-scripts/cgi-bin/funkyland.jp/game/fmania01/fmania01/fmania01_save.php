<?php
	file_put_contents("save", 
		"money=" . $_POST["money"] . "&" . 
		"comp_level=" . $_POST["comp_level"] . "&" . 
		"funky_level=" . $_POST["funky_level"] . "&" . 
		"bg_color=" . $_POST["bg_color"] . "&" . 
		"comment=" . $_POST["comment"] . "&" . 
		"item=" . $_POST["item"] . "&" . 
		"norma=" . $_POST["norma"]
	);
	echo "data_save=ok";
?>