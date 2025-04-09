<?php
require_once 'common.php';

if(isset($res) && !$user = $res->fetch()) abort(404);

$page = max(1, (int)($_GET['page'] ?? 1));
$codes = $dbh->query('
SELECT code.id, short_id, title, swf_id, user_id, user.name AS user_name
FROM code
INNER JOIN tag
ON code.id = tag.code_id
INNER JOIN user
ON code.user_id = user.id
WHERE tag=' . $dbh->quote($_GET['tag']) . '
ORDER BY favorites DESC
LIMIT ' . ($page-1) * 40 . ' , 40'
);
$total = $dbh->query('
SELECT count(*)
FROM code
INNER JOIN tag
ON code.id = tag.code_id
WHERE tag=' . $dbh->quote($_GET['tag'])
)->fetchColumn();

$pager = pager_html($page, $total, 40);

$code_thumbs = render_php('code-thumbs', $codes);
$title_html = '<h1>Tag: ' . esc_html($_GET['tag']) . '</h1>';

print render_php('html', [
    'title' => $_GET['tag'],
    'content' => $title_html . $pager . $code_thumbs . $pager,
]);
