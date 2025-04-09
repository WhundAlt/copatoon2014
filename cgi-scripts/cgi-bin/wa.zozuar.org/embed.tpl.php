<!doctype html>
<html>
  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css?<?php print filemtime('style.css'); ?>"/>
  </head>

  <body class="embed stopped">
    <img class="when-stopped" width="465" height="465"
         src="swfs/<?php print pathFromId($args['swf_id']) . '/' . $args['swf_id']; ?>.jpg">

    <a class="when-stopped" href="javascript:document.body.classList.remove('stopped')">
      <img id="overlay" width="465" height="465" src="play.png" alt="Play">
    </a>
    
    <object class="when-playing" width="465" height="465" data="swfs/<?php print pathFromId($args['swf_id']) . '/' . $args['swf_id']; ?>.swf">
      <param name="movie" value="swfs/<?php print pathFromId($args['swf_id']) . '/' . $args['swf_id']; ?>.swf"/>
      <param name="base" value=".">
      <param name="allowFullscreen" value="true">
      <param name="wmode" value="direct">
      <a href="http://www.adobe.com/go/getflash">
        <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/>
      </a>
    </object>

    <div id="embed-footer">
      <a class="when-playing" href="javascript:document.body.classList.add('stopped')" style="float:right">[Stop]</a>
      <a href="code.php?c=<?php print rawurlencode($args['short_id']); ?>" target="top">
        <?php print esc_html($args['title']); ?>
      </a>
      by
      <a href="user.php?name=<?php print rawurlencode($args['user_name']); ?>" target="top">
        <?php print esc_html($args['user_name']); ?>
      </a>
    </div>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-19994293-2', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
