<?php
$file = "savedata/" . urlencode($_POST["username"]) . ".txt";
if (is_file($file)) {
    echo "result=success&playerdata=" . file_get_contents($file);
} else {
    echo "result=No savedata found for that username";
}
?>