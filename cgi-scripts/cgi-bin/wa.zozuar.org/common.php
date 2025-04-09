<?php

require_once 'db.php';

$dbh = new PDO('sqlite:db.db'); // change this!!

// returns a path from a 40-char id
function pathFromId($id) {
    return substr($id, 0, 1) . '/' . substr($id, 0, 2) . '/' . substr($id, 0, 4);
}

// render a template
function render_php($path, $args){
    ob_start();
    include($path . '.tpl.php');
    $var = ob_get_contents();
    ob_end_clean();
    return $var;
}

// escape html
function esc_html($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

// set an HTTP error code and abort request with a helpful error message
function abort($code) {
    $code = (int)$code;
    http_response_code($code);
    print render_php('html', [
        'title' => $code,
        'content' => '<h1>' . $code . ' :(</h1>',
    ]);
    die;
}

// pager - adapted from http://stackoverflow.com/a/3707457
function pager_html($page, $total, $limit) {
    $pages = ceil($total / $limit);
    if($pages<2) return '';
    $first_query = http_build_query(['page' => 1] + $_GET);
    $prev_query = http_build_query(['page' => ($page-1)] + $_GET);
    $prevlink = ($page > 1) ? '<a href="?' . $first_query . '" title="First page">&laquo;</a> <a href="?' . $prev_query . '" title="Previous page">&lsaquo;</a>' : '<span class="disabled">&laquo;</span> <span class="disabled">&lsaquo;</span>';

    $last_query = http_build_query(['page' => $pages] + $_GET);
    $next_query = http_build_query(['page' => ($page+1)] + $_GET);
    $nextlink = ($page < $pages) ? '<a href="?' . $next_query . '" title="Next page">&rsaquo;</a> <a href="?' . $last_query . '" title="Last page">&raquo;</a>' : '<span class="disabled">&rsaquo;</span> <span class="disabled">&raquo;</span>';

    return '<div class="pager">' . $prevlink . ' Page ' . $page . ' of ' . $pages . ' ' . $nextlink . '</div>';
}

// fork trees


// returns an array of records of tree members keyed by code id
function get_tree_members($root_id) {
    global $dbh;
    $qid = $dbh->quote($root_id);
    $res = $dbh->query('
SELECT c.id, c.short_id, c.title, c.swf_id, c.favorites, c.parent, c.user_id, c.diff, u.name AS user_name
FROM code AS c
INNER JOIN user u
ON c.user_id = u.id
WHERE root=' . $qid . ' OR c.id=' . $qid . '
ORDER BY favorites DESC'
    );
    foreach($res as $rec) $ret[$rec['id']] = $rec;
    return $ret;
}

function count_tree_members($root_id) {
    global $dbh;
    $qid = $dbh->quote($root_id);
    $res = $dbh->query('SELECT count(id) FROM code WHERE root=' . $dbh->quote($root_id))->fetch();
    return $res[0];
}

function get_tree($root_id) {
    $members = get_tree_members($root_id);
    foreach($members as $member) {
        $pid = $member['parent'];
        $members[$pid]['children'][] = $member['id'];
    }
    return $members;
}

function render_tree($tree, $id, $active) {
    $node = $tree[$id];
    $ret = render_php('node', $node);
    if(isset($node['children'])) {
        $ret .= '<div class="forks">';
        foreach($node['children'] as $child_id) {
            $ret .= render_tree($tree, $child_id, $active);
        }
        $ret .= '</div>';
    }
    return $ret;
}

function base_url() {
    $http_protocol = (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? 'https' : 'http';
    $base_url = $http_protocol . '://' . $_SERVER['HTTP_HOST'];
    return $base_url . '/';
}

function url($path = '', $query = [], $fragment = FALSE) {
    $ret = $path;
    if($query) $ret .= '?' . http_build_query($query, null, '&', PHP_QUERY_RFC3986);
    if($fragment !== FALSE) $ret .= '#' . rawurlencode($fragment);
    return base_url() . $ret;
}    

// return an HTML link, if is_html is true $text will not be escaped.
function l($text, $url, $css_class = '', $is_html = FALSE) {
    return '<a href="' . esc_html($url) . '" class="' . esc_html($css_class) . '">' . ($is_html ? $text : esc_html($text)) . '</a>';
}