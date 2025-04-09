<?php
require_once 'common.php';

$page = max(1, (int)($_GET['page'] ?? 1));
$codes = $dbh->query('
SELECT code.id, short_id, title, swf_id, user_id, user.name AS user_name
FROM code
INNER JOIN user
ON code.user_id = user.id
ORDER BY favorites DESC
LIMIT ' . ($page-1) * 40 . ' , 40'
);
$total = $dbh->query('
SELECT count(*)
FROM code
INNER JOIN user
ON code.user_id = user.id'
)->fetchColumn();
$pager = pager_html($page, $total, 40);

$code_thumbs = render_php('code-thumbs', $codes);

print render_php('html', [
    'title' => 'Wonderfl ActionScript Archive',
    'content' => '<h1>Codes</h1>' . $pager . $code_thumbs . $pager,
]);
