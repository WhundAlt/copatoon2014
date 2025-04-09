<?php
header('Content-Type: text/xml; charset=utf-8');
// Define Score Functions
function json_load_fix($file) {
    if (!file_exists($file)) {
        file_put_contents($file, '[]');
    } else if (!is_file($file)) {
        unlink($file);
        file_put_contents($file, '[]');
    } else if (filesize($file) == 0) {
        file_put_contents($file, '[]');
    }
    return json_decode(file_get_contents($file), true);
}

function GetAllTimeScores($args) {
    extract($args);
    return json_load_fix($gameName . '/-1.xml');
}
function GetTodaysScores($args) {
    extract($args);
    return json_load_fix($gameName . '/' . gmdate('Y-m-d') . '.xml');
}
function IsHighScore($args) {
    extract($args);
    $dateTime = gmdate('Y-m-d\TH:i:s\Z');
    
    if (!file_exists($gameName)) {
        mkdir($gameName);
    } else if (!is_dir($gameName)) {
        unlink($gameName);
        mkdir($gameName);
    }
    
    $allTimePos = NULL;
    $allTimeLoc = $gameName . '/-1.xml';
    $allTime = json_load_fix($allTimeLoc);
    foreach ($allTime as $num => $record) {
        if ($score > $record['Score']) {
            $allTimePos = $num;
            break;
        }
    }
    $c = count($allTime);
    if ($allTimePos === NULL and $c < 10) {
        $allTimePos = $c;
    }
    
    $todayPos = NULL;
    $todayLoc = $gameName . '/' . gmdate('Y-m-d') . '.xml';
    $today = json_load_fix($todayLoc);
    foreach ($today as $num => $record) {
        if ($score > $record['Score']) {
            $todayPos = $num;
            break;
        }
    }
    $c = count($today);
    if ($todayPos === NULL and $c < 10) {
        $todayPos = $c;
    }
    
    if ($allTimePos !== NULL or $todayPos !== NULL) {
        session_start();
        $_SESSION['ddtmm.allTime'] = $allTime;
        $_SESSION['ddtmm.allTimeLoc'] = $allTimeLoc;
        $_SESSION['ddtmm.allTimePos'] = $allTimePos;
        $_SESSION['ddtmm.today'] = $today;
        $_SESSION['ddtmm.todayLoc'] = $todayLoc;
        $_SESSION['ddtmm.todayPos'] = $todayPos;
        $_SESSION['ddtmm.dateTime'] = $dateTime;
        return 'true';
    } else {
        return 'false';
    }
}
function AddScore($args) {
    extract($args);
    
    session_start();
    $allTime = $_SESSION['ddtmm.allTime'];
    $allTimeLoc = $_SESSION['ddtmm.allTimeLoc'];
    $allTimePos = $_SESSION['ddtmm.allTimePos'];
    $today = $_SESSION['ddtmm.today'];
    $todayLoc = $_SESSION['ddtmm.todayLoc'];
    $todayPos = $_SESSION['ddtmm.todayPos'];
    $dateTime = $_SESSION['ddtmm.dateTime'];
    session_unset();
    session_destroy();
    
    $record = array(array(
        'Score' => $score,
        'Wave' => $wave,
        'Name' => $name,
        'Time' => $dateTime
    ));
    if ($allTimePos !== NULL) {
        array_splice($allTime, $allTimePos, 0, $record);
        if (count($allTime) > 10) $allTime = array_slice($allTime, 0, 10, true);
        file_put_contents($allTimeLoc, json_encode($allTime));
    }
    if ($todayPos !== NULL) {
        array_splice($today, $todayPos, 0, $record);
        if (count($today) > 10) $today = array_slice($today, 0, 10, true);
        file_put_contents($todayLoc, json_encode($today));
    }
    return 'true';
}

// Parse soap request and get name and args
$instruction = simplexml_load_file('php://input')->children('s', true)->Body->children()[0];
$name = $instruction->getName();
$args = array();
foreach ($instruction->children() as $element) {
    $args[$element->getName()] = (string) $element;
}

// Call respective function and get results.
$json = $name($args);
file_put_contents('H:/log.txt', print_r($json, true));
if (gettype($json) == 'array') {
    $response = '';
    foreach ($json as $record) {
        $response .= '<ScoreRecord>';
        foreach ($record as $key => $value) {
            $response .= sprintf('<%1$s>%2$s</%1$s>', $key, $value);
        }
        $response .= '</ScoreRecord>';
    }
} else {
    $response = $json;
}
// Format and return results.
echo sprintf('<s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/"><s:Body xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema"><%1$sResponse xmlns="http://tempuri.org/"><%1$sResult>%2$s</%1$sResult></%1$sResponse></s:Body></s:Envelope>', $name, $response);
?>