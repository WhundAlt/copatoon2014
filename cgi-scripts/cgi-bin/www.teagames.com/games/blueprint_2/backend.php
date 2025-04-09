<?php

switch ($_POST["command"]) {
    case "getattribs":
        echo "attrib0=12";
        break;
    case "endgame":
        echo "ok=ok";
        break;
}
