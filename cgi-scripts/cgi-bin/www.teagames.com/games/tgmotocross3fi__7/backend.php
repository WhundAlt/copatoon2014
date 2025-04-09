<?php

switch ($_POST["command"]) {
    case "getattribs":
        echo "attrib0=9";
        break;
    case "endgame":
        echo "ok=ok";
        break;
}
