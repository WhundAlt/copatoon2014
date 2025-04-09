<?php

$action = $_GET["action"];
if ($action == "get")
{
	echo "<result></result>";
}
else if ($action == "check")
{
	echo "0:0:0:0";
}
else if ($action == "register")
{
	echo "OK";
}

?>