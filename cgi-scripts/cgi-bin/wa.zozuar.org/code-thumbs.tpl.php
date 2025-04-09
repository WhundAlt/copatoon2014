<ul class="codes thumbs">
  <?php foreach($args as $code): ?>
  <?php $img_html = '<img width="170" height="170" src="swfs/' . pathFromId($code['swf_id']) . '/' . $code['swf_id'] . '.jpg">'; ?>
  <li class="code-thumb">
    <?php print l($img_html, url('code.php', ['c' => $code['short_id']]), '', TRUE); ?>
    <div class="meta">
      <?php print l($code['title'], url('code.php', ['c' => $code['short_id']]), 'title'); ?>
      <?php print l($code['user_name'], url('user.php', ['name' => $code['user_name']]), 'user'); ?>
    </div>
  </li>
  <?php endforeach; ?>
</ul>
