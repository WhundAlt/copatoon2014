<?php
require_once 'common.php';

$tree = get_tree($_GET['root']);

if(!$tree) abort(404);

print render_php('html', [
    'title' => 'Forks tree',
    'content' =>  '<h1>Forks tree</h1><div class="fork-tree">' . render_tree($tree, $_GET['root'], 0) . '</div>',
]);
