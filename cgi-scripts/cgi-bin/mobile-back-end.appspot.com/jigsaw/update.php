<?php
$progress = ($_POST["progress"]) ? $_POST["progress"] : $_GET["progress"];
$gameId = ($_POST["gameId"]) ? $_POST["gameId"] : $_GET["gameId"];
file_put_contents("_save" . $gameId, $progress);
echo $progress, ",1";
?>