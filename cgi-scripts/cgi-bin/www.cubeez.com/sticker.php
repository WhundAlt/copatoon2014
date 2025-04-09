<?php

	$sticker = $_REQUEST['sticker'];
	
	echo '<?xml version="1.0" encoding="ISO-8859-1" ?><cubeez><sticker><add>done</add><userid></userid><sticker>' . $sticker . '</sticker></sticker></cubeez>';