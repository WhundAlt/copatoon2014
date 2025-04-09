<?php
require_once 'common.php';

$sql = '
SELECT c.title, c.as3_code, c.short_id, u.name AS user_name
FROM code AS c
INNER JOIN user u
ON c.user_id = u.id
WHERE c.short_id = ?
';
$get_code = $dbh->prepare($sql);

if($get_code->execute([$_GET['l']]) === FALSE) abort(500);
$l = $get_code->fetch();

if($get_code->execute([$_GET['r']]) === FALSE) abort(500);
$r = $get_code->fetch();

if(!$l || !$r) abort(500);

$diff_html = render_php('diff', [
    'l' => $l,
    'r' => $r,
]);

print render_php('html', [
    'title' => 'Diff view',
    'content' => $diff_html,
]);
