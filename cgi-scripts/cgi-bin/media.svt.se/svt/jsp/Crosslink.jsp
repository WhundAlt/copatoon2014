<?php
$fp_url = "d={$_GET['d']}/a={$_GET['a']}";
$game_page = file_get_contents($fp_url);
echo $game_page;
?>