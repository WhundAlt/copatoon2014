<?php

	//	ver: 152
	//	Pass: moemoe
	//	Email: moe@moe.com
	//	Action: createAccount
	$pass = $_REQUEST['Pass'];
	$email = $_REQUEST['Email'];
	$action = $_REQUEST['Action'];
	if ($action == 'createAccount') {
		$user = substr($email, 0, strpos($email, '@'));
		file_put_contents('ptd2/' . $user . '.txt', $pass);
		
		echo 'Result=Success&Reason=loadedAccount';
	} else if ($action == 'loadAccount') {
		echo 'Result=Success&Reason=loadedAccount';
	} else if ($action == 'loadStory') {
		
		$reply = 'Result=Success&' .
			'Nickname1=Crystal&Version1=2&dw=5&' .
			'extra=yoyywymym&' .
			'dextra1=mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm&dcextra1=aocq&' .
			'dextra2=mmmymmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm&dcextra2=coey&' .
			'dextra3=mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm&dcextra3=acym&' .
			'dextra4=mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm&dcextra4=qwye&' .
			'dextra5=mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm&dcextra5=pywo&' .
			'dextra6=mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm&dcextra6=wrra';
		
		echo 'Result=Success&dw=5&extra=ycm';
		
	} else if ($action == 'saveStory') {
		
		$dextra1 = $_REQUEST['dextra1'];
		$dextra2 = $_REQUEST['dextra2'];
		$dextra3 = $_REQUEST['dextra3'];
		$dextra4 = $_REQUEST['dextra4'];
		$dextra5 = $_REQUEST['dextra5'];
		$dextra6 = $_REQUEST['dextra6'];
		
		$dcextra1 = $_REQUEST['dcextra1'];
		$dcextra2 = $_REQUEST['dcextra2'];
		$dcextra3 = $_REQUEST['dcextra3'];
		$dcextra4 = $_REQUEST['dcextra4'];
		$dcextra5 = $_REQUEST['dcextra5'];
		$dcextra6 = $_REQUEST['dcextra6'];
		
		$extra = $_REQUEST['extra'];
		$extra2 = $_REQUEST['extra2'];
		$extra3 = $_REQUEST['extra3'];
		$extra4 = $_REQUEST['extra4'];
		$extra5 = $_REQUEST['extra5'];
		
		$needD = $_REQUEST['needD'];
		
		$whichProfile = $_REQUEST['whichProfile'];
		
		echo 'PID0=15433323&Result=Success&Reason=saved&CS=15c2608ad82a09';
		
	} else if ($action == 'load1on1') {
		echo 'Result=Success&extra=ycm&extra2=yqym';
	}
	