<?php
    header("Content-Type: text/xml; charset=utf-8");

    $puzzleID = ($_GET["puzzle"] ? $_GET["puzzle"] : 1 + date_parse_from_format('z', time()) % 357);

    if ($puzzleID < 1 || $puzzleID > 357)
        return;

    $file_name = "puzzles/puzzle-" . $puzzleID . ".xml";

    $fh = fopen($file_name, "rt");

    echo fread($fh, filesize($file_name));

    fclose($fh);
?>
