<?php

$op0 = $_REQUEST['op0'];

if ($op0 == 'get') {
	$var0 = $_REQUEST['var0'];
	$val0 = $_REQUEST['val0'];
	$tot = $_REQUEST['tot'];

	echo '<getset varr="_root.myid" val="2" />';
	
} else if ($op0 == 'set') {
	
	echo '<o />';
}
