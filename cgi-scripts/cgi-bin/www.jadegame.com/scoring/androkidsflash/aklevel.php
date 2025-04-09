<?php
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . str_replace("?", "_", basename($_SERVER["REQUEST_URI"])));
    exit();
?>