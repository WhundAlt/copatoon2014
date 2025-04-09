<?php
$id = $_SERVER['QUERY_STRING'];
header("Location: http://babarageo.com/flash/boss/levels/" . $id . ".txt", true, 301);
exit();