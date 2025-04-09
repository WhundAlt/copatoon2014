<?php

switch ($_GET['mode']) {
    case 'getdata':
        header("Location: http://www.kutar.com/img/" . $_GET['file'], true, 301);
        break;
    case 'rsys':
        echo 'ranklevel=-1&rank=-1&err=1';
        break;
}

?>