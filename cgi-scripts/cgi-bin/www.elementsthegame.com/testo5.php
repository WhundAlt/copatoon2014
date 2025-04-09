<?php
$saves_dir = 'saves';
$user = urlencode($_POST['user']);
$data = file_get_contents($saves_dir . '/' . $user . ".txt");

// Restore the daily oracle mechanic using system datetime
$lastoracle = $saves_dir . '/' . $user . '_lastoracle.txt';
$datetime = date('Y-m-d H:i:s');
$timediff = strtotime($datetime) - strtotime(file_get_contents($lastoracle));
if ($data !== False and $timediff > 86400) {
    $data = preg_replace('/fo=\d/', 'fo=0', $data);
}

if ($data !== False) {
    $data = "&errorcode=0&" . str_replace("\n", "&", str_replace("\r", "", $data)) . "&";
} else {
    $data = "&errorcode=0&id=1&electrum=&element=&email=undefined&lonelyt=65498164&deck1=&deck1n=&deck2=&deck2n=&deck3=&deck3n=&decka=&deckan=&won=&lost=&score=&statu=&quests=1&fo=0&";
}
echo $data
?>