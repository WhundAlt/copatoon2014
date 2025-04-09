<?php
$file = 'dlc_' . $_POST['id'] . '.swf';
header('Content-Description: File Transfer');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: no-store');
header('Pragma: no-cache');
header("Content-Length: " . filesize($file));
header('Content-Type: application/octet-stream');
readfile($file);
?>