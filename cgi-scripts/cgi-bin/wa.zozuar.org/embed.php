<?php
require_once 'common.php';
if(!isset($_GET['c'])) abort(404);

$res = $dbh->query('
SELECT c.id, c.short_id, c.user_id, c.swf_id, c.as3_code, c.favorites, c.parent, c.root, c.title, c.description, u.name AS user_name
FROM code AS c
INNER JOIN user u
ON c.user_id = u.id
WHERE c.short_id=' . $dbh->quote($_GET['c'])
);

if(!$res) abort(500);
if(!$code = $res->fetch()) abort(404);

print render_php('embed', $code);