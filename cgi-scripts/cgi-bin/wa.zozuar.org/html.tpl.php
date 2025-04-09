<!doctype html>
<html>
  <head>
    <meta charset="utf-8"/>
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta property="og:title" content="<?php print esc_html($args['title']); ?> :: Dead Code Preservation"/>
    <?php if(!empty($args['og_image'])): ?>
    <meta property="og:image" content="<?php print esc_html($args['og_image']); ?>"/>
    <?php endif; ?>
    <link rel="stylesheet" href="style.css?<?php print filemtime('style.css'); ?>"/>
    <title><?php print esc_html($args['title']); ?> :: Dead Code Preservation</title>
  </head>

  <body>
    <header>
      <a href="<?php print esc_html(url()); ?>" id="home"><h4><strong>Dead Code Preservation</strong><small> :: Archived AS3 works from wonderfl.net</small></h4></a>
    </header>

    <div>
      <?php print $args['content']; ?>
    </div>

    <footer>
    </footer>

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
