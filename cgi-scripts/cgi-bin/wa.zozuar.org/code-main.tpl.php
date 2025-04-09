<div class="code-main">
  <?php
     $code = $args['code'];
     $tags = $args['tags'];
     $comments = $args['comments'];
     $parent = $args['parent'];
     ?>
  <h1><?php print esc_html($code['title']); ?></h1>
  <?php if(!empty($code['description'])): ?>
  <pre class="description"><?php print esc_html($code['description']); ?></pre>
  <?php endif; ?>
  <div class="swf-col">
    
    <object width="465" height="465" data="swfs/<?php print pathFromId($code['swf_id']) . '/' . $code['swf_id']; ?>.swf">
      <param name="movie" value="swfs/<?php print pathFromId($code['swf_id']) . '/' . $code['swf_id']; ?>.swf"/>
      <param name="base" value=".">
      <param name="allowFullscreen" value="true">
      <param name="wmode" value="direct">
      <a href="http://www.adobe.com/go/getflash">
        <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>
      </a>
    </object>
    <div>by <?php print l($code['user_name'], url('user.php', ['name' => $code['user_name']])); ?>
      <span class="mtime"><?php print date('d M Y', $code['mtime']); ?></span></div>
    <div class="meta">
      <ul>
        <?php if($parent): ?>
        <li>
          Forked from <?php print l($parent['user_name'], url('user.php', ['name' => $parent['user_name']])); ?>'s
          <?php print l($parent['title'], url('code.php', ['c' => $parent['short_id']])); ?>
        </li>
        <?php if($code['diff']): ?>
        <li>
          <?php print l('Diff: ' . $code['diff'], url('diff.php', ['l' => $parent['short_id'], 'r' => $code['short_id']])); ?>
        </li>
        <?php endif; ?>
        <?php endif; ?>

        <?php if($args['related_count']): ?>
        <li>
          <?php print l('Related works: ' . $args['related_count'], url('tree.php', ['root' => $code['root'] ?? $code['id']], 'node-' . $code['short_id'])); ?>
        </li>
        <?php endif; ?>

      <?php if(!empty($comments)): ?>
      <h2>Talk</h2>
      <?php foreach($comments as $comment): ?>
      <div class="comment">
        <div class="comment-meta">
          <?php print l($comment['user_name'], url('user.php', ['name' => $comment['user_name']])); ?>
          <span class="time">
            at <?php print date('d M Y H:i', $comment['time']); ?>
          </span>
          <div class="text">
            <?php print esc_html($comment['comment']); ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
      <?php endif; ?>

      <?php if(!empty($tags)): ?>
      <h2>Tags</h2>
      <div class="tags">
        <?php foreach($tags as $tag): ?>
        <?php print l($tag['tag'], url('tag.php', ['tag' => $tag['tag']]), 'tag'); ?>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>

      <div class="embed-code">
        Embed
        <input type="text" readonly="" value="<?php print esc_html('<iframe scrolling="no" src="http://wa.zozuar.org/embed.php?c=' . $code['short_id']  . '" width="465" height="490"></iframe>'); ?>" onclick="javascript:this.select();">
      </div>
    </div>

  </div>
  <pre class="as3-col"><?php print esc_html($code['as3_code']); ?></pre>
</div>
