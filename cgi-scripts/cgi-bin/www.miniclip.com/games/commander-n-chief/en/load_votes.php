<?php
    $db = new SQLite3('poll.db');
    
    $res = $db->query('SELECT name, votes FROM poll2008');
    
    while ($row = $res->fetchArray()) {
        $candLetter = "";
        
        switch ($row['name']) {
            case 'obama':
                $candLetter = "o";
                break;
            case 'mccain':
                $candLetter = "&m";
                break;
            default:
                continue;
        }
        
        echo $candLetter . "=" . $row['votes'];
    }
?>