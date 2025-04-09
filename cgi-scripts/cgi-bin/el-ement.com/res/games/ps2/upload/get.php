<?php

$db = new PDO("sqlite:ps2.sqlite");
$rows = $db->query("select * from stage order by id desc limit " . $_REQUEST["c"] . " offset " . $_REQUEST["n"]);
foreach ($rows as $row) {
	echo $row["code"] . "\n" . $row["id"] . "\n";
}

?>