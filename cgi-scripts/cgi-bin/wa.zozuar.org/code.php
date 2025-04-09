<?php
require_once 'common.php';
if(isset($_GET['id'])) {
    $where = 'c.id=' . $dbh->quote($_GET['id']);
} else if(isset($_GET['c'])) {
    $where = 'c.short_id=' . $dbh->quote($_GET['c']);
} else {
    abort(404);
}

$res = $dbh->query('
SELECT c.id, c.short_id, c.user_id, c.swf_id, c.as3_code, c.favorites, c.parent, c.root, c.title, c.description, c.mtime, c.diff, u.name AS user_name
FROM code AS c
INNER JOIN user u
ON c.user_id = u.id
WHERE ' . $where
);

if(!$res) abort(500);
if(!$code = $res->fetch()) abort(404);

$res = $dbh->query('
SELECT c.time, c.comment, c.user_name
FROM comment AS c
WHERE c.code_id = ' . $dbh->quote($code['id']) . '
ORDER BY c.time ASC'
);
if(!$res || !($comments = $res->fetchAll())) {
    $comments = [];
}

$res = $dbh->query('
SELECT tag FROM tag WHERE tag.code_id = ' . $dbh->quote($code['id']) . '
ORDER BY tag'
);
if(!$res || !($tags = $res->fetchAll())) {
    $tags = [];
}

if(!empty($code['parent'])) {
    $res = $dbh->query('
SELECT short_id, title, u.name AS user_name FROM code
INNER JOIN user u ON code.user_id = u.id
WHERE code.id = ' . $dbh->quote($code['parent'])
    );
    if($res) $parent = $res->fetch();
}

$code_main = render_php('code-main', [
    'code' => $code,
    'parent' => $parent ?? FALSE,
    'tags' => $tags,
    'comments' => $comments,
    'related_count' => count_tree_members($code['root'] ?? $code['id']),
]);

print render_php('html', [
    'title' => $code['title'],
    'og_image' => url('swfs/' . pathFromId($code['swf_id']) . '/' . $code['swf_id'] . '.jpg'),
    'content' => $code_main,
]);
