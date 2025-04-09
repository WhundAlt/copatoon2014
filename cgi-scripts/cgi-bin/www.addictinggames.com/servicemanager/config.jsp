<?php

	$game = $_REQUEST['gameKeyword'];
	echo file_get_contents($game . '.xml');
