<?php
require_once 'common.php';
if(isset($_GET['id'])) {
    $res = $dbh->query('SELECT * FROM user WHERE id=' . $dbh->quote($_GET['id']));
} else if(isset($_GET['name'])) {
    $res = $dbh->query('SELECT * FROM user WHERE name=' . $dbh->quote($_GET['name']));
} else {
    print 'TODO: user list';
    die;
}

if(isset($res) && !$user = $res->fetch()) abort(404);

$page = max(1, (int)($_GET['page'] ?? 1));
$codes = $dbh->query('
SELECT code.id, short_id, title, swf_id, user_id, user.name AS user_name
FROM code
INNER JOIN user
ON code.user_id = user.id
WHERE user_id=' . $user['id'] . '
ORDER BY favorites DESC
LIMIT ' . ($page-1) * 40 . ' , 40'
);
$total = $dbh->query('
SELECT count(*)
FROM code
WHERE code.user_id=' . $user['id']
)->fetchColumn();
$pager = pager_html($page, $total, 40);

$user_info = render_php('user-info', $user);
$code_thumbs = render_php('code-thumbs', $codes);

print render_php('html', [
    'title' => $user['name'],
    'content' => $user_info . $pager . $code_thumbs . $pager,
]);
