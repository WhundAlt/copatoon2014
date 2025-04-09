<div class="user-info">
  <?php if($args['icon_id']): ?>
  <img class="avatar" width="100" height="100"
       src="icon/<?php print pathFromId($args['icon_id']) . '/' . $args['icon_id']; ?>.jpg">
  <?php endif; ?>
  <h1><?php print(esc_html($args['name'])); ?></h1>
  <div>
      URL: <a class="url" href="<?php print esc_html($args['url']); ?>"><?php print esc_html($args['url']); ?></a>
  </div>
  <div>
      <?php print $args['description']; ?>
  </div>
  <hr>
</div>
