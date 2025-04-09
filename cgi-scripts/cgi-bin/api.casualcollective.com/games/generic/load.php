<?php
	$gid = $_REQUEST['gid'];

	if ($gid == '14') {
		echo '{"error":0,"api":"http:\/\/storage.cloud.casualcollective.com\/zones\/cc\/14","v":4,"sid":"eod8ah2ja8fqo2bfop4u460745"}';
	} else if ($gid == '15') {
		echo '{"error":0,"api":"http:\/\/storage.cloud.casualcollective.com\/zones\/pub\/15","v":4,"sid":"eod8ah2ja8fqo2bfop4u460745"}';
	}