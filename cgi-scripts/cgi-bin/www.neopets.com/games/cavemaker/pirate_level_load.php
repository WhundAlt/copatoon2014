<?php

	/*
		Used by Hannah and the Pirate Caves (Shockwave) to:

		1. Load a user level from a given username ("Load User Level" option in the menu)
		2. Pick and load a new user level each week ("Cave of the Week" option in the menu)

		It is assumed that the level directory specified by $base_path has no subdirectories.

		The game only displays error message that start with "error;". Ones that start with
		"Flashpoint: " were added for this project and were not present in the original game.
	*/

	function read_level($path)
	{
		if(file_exists($path))
		{
			readfile($path);
		}
		else
		{
			die("error;Requested user map does not exist.");
		}
	}

	$base_path = "levels/";

	if(isset($_GET["username"]))
	{
		read_level("{$base_path}{$_GET['username']}.txt");
	}
	elseif(isset($_GET["caveoftheweek"]))
	{
		// Sliced to remove ".." and "." from the array.
		$level_files = array_slice(scandir($base_path), 2);
		$num_levels = count($level_files);

		if($num_levels == 0)
		{
			die("error;Flashpoint: No user maps to pick from.");
		}

		// Cycle through a new level each week.
		// This is meant to emulate the original behavior on Neopets.com where a new level was featured each week.
		$level_index = (idate('W') + idate('Y')*52) % $num_levels;
		read_level("{$base_path}{$level_files[$level_index]}");
	}
	else
	{
		die("error;Flashpoint: Query string does not have 'username' or 'caveoftheweek'. Something very strange happend!");
	}

?>