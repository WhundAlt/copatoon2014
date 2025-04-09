<?php
$gameId = ($_POST["gameId"]) ? $_POST["gameId"] : $_GET["gameId"];
echo file_get_contents("_save" . $gameId), ",1";
?>