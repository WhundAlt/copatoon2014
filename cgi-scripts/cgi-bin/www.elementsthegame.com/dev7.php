<?php
$saves_dir = 'saves';
if (!file_exists($saves_dir)) {
    mkdir($saves_dir);
} else if (!is_dir($saves_dir)) {
    rename($saves_dir, 'saves-ren');
    mkdir($saves_dir);
}

$data = urldecode(file_get_contents("php://input"));
$data = strstr($data, 'id=');
$data = strstr($data, '&newemail', True);
$user = urlencode($_POST['user']);

// Restore the daily oracle mechanic using system datetime
$lastoracle = $saves_dir . '/' . $user . '_lastoracle.txt';
if (!file_exists($lastoracle)) {
    file_put_contents($lastoracle, '1996-01-01 00:00:00');
}
$datetime = date('Y-m-d H:i:s');
$timediff = strtotime($datetime) - strtotime(file_get_contents($lastoracle));

if ($_POST['fo'] == 2) {
    file_put_contents($lastoracle, $datetime);
}
if ($_POST['fo'] == 1 and $timediff > 86400) {
    $data = preg_replace('/fo=\d/', 'fo=0', $data);
}

file_put_contents($saves_dir . '/' . $user . '.txt', str_replace('&', "\n", $data));
echo '&errorcode=updated&';
//user=potatoman333&psw=ddd&errorcode=%2D1&id=2639084&electrum=4&element=6&email=undefined&lonelyt=65498164&deck1=x000200300270010600012060100406020010603002060400306050010606002060800206090030700003070200107030010706001&deck1n=40&deck2=&deck2n=0&deck3=&deck3n=NaN&decka=x000200300270010600012060100406020010603002060400306050010606002060800206090030700003070200107030010706001&deckan=40&won=0&lost=0&score=0&statu=1%2E327&quests=1&fo=0&newemail=&newpsw=&fhcv=400&cardo=0&fh=32649898
?>