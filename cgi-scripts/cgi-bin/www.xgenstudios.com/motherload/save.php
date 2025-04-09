<?php
$folder = "savedata";
if (!file_exists($folder)) {
    mkdir($folder);
} else if (!is_dir($folder)) {
    unlink($folder);
    mkdir($folder);
}
file_put_contents($folder . "/" . urlencode($_POST["username"]) . ".txt", $_POST["playerdata"]);
echo "result=success";
?>