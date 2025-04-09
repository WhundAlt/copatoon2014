<?php

$q = explode("|", $_GET["q"]);
switch ($q[0]) {
    case "gettxt":
        header("Location: " . $q[1], true, 301);
        break;
}

?>