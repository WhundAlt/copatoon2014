<?php
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $_REQUEST['gameKeyword'] . '.xml');
    exit();
?>