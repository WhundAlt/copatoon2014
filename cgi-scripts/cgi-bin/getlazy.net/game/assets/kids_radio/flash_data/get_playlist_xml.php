<?php
$location = isset($_GET["id"]) ? "$_GET[id].xml" : "16554.xml";
header("HTTP/1.1 301 Moved Permanently"); 
header("Location: $location");
exit();
?>