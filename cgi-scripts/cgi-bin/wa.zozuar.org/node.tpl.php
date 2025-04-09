<div class="node">
  <a href="code.php?c=<?php print rawurlencode($args['short_id']); ?>" name="node-<?php print esc_html($args['short_id']); ?>" class="preview">
    <div class="crop">
      <img width="128" height="128"
           src="swfs/<?php print pathFromId($args['swf_id']) . '/' . $args['swf_id']; ?>.jpg">
    </div>
  </a>
  <div class="meta">
    <?php print l($args['title'], url('code.php', ['c' => $args['short_id']]), 'title'); ?>
    <div class="user">
      by <?php print l($args['user_name'], url('user.php', ['name' => $args['user_name']])); ?>
      <?php if($args['parent']): ?>
      <span class="diff">(diff: <?php print(esc_html($args['diff'])); ?>)</span>
      <?php endif; ?>
    </div>
  </div>
</div>
