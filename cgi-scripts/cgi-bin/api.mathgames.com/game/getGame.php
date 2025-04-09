<?php

	$prefCategory = $_REQUEST["prefCategory"];
	$grade_key = $_REQUEST["grade_key"];
	$limit = $_REQUEST["limit"];
	$language_key = $_REQUEST["language_key"];
	
	$file = substr($prefCategory, 2, count($prefCategory) - 3) . "-" . $grade_key . "-" . $language_key . ".txt";
	
	echo file_get_contents("skills/" . $file);