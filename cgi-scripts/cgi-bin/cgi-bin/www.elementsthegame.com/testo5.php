<?php
$data = file_get_contents("saves/" . urlencode($_POST["user"]) . ".txt");
if ($data !== False) {
    $data = "&errorcode=0&" . str_replace("\n", "&", str_replace("\r", "", $data)) . "&";
} else {
    $data = "&errorcode=0&id=1&electrum=&element=&email=undefined&lonelyt=65498164&deck1=&deck1n=&deck2=&deck2n=&deck3=&deck3n=&decka=&deckan=&won=&lost=&score=&statu=&quests=1&fo=0&";
}
echo $data
?>