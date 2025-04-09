<?php

	$email = $_REQUEST['Email'];
	$action = $_REQUEST['Action'];
	$ver = $_REQUEST['ver'];
	$pass = $_REQUEST['Pass'];
	
	if ($action == 'loadAccount') {
		echo 'Result=Success&UID=9876397&Reason=loadedAccount';
	} else if ($action == 'loadStory') {
		echo 'Result=Success&extra=ycm';
	} else if ($action == 'saveStory') {
		echo 'PID0=2102252&MoveSel=1&Result=Success&Reason=saved&CS=15d7705457ee35';
	} else if ($action == 'loadStoryProfile') {
		echo 'Result=Success&CS=15d7705e468caf&PN1=Pichu&extra=ypyyyy&extra2=yeyyyyyy&extra3=waryycyrwywarypwwwcqapycymywyyyrwymwwawymymymynymyyymymym&extra4=yqym&extra5=cqca';
	}