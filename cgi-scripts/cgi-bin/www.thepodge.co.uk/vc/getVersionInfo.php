<?php
	$slug = $_REQUEST['slug'];

	if ($slug == 'beachcrazy') {
		echo '&s=1&lv=1.0&zip=file_distrozip_76_beachcrazy_distro.zip&';
		
	} else if ($slug == 'citysiegesniper') {
		echo '&s=1&lv=1.1&zip=file_distrozip_55_sniperdistro.zip&';
		
	} else {	//	TODO other games
		echo '&s=1&lv=1.11&zip=file_distrozip_29_dibbles_v1-11.zip&';
	}