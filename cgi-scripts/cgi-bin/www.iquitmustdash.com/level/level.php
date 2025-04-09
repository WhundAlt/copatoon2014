<?php
	$url = $_SERVER['REQUEST_URI'];
	$level = substr($url, strrpos($url, '/') + 1);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>I Quit Must Dash</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="/assets/application-e0b223bf046102c71c3000db8d6394b5.css" media="all" rel="stylesheet" type="text/css" />
    <script src="/assets/application-fe10468cdb685128eba66fc59c536a77.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js" type="text/javascript"/></script>
	<script type="text/javascript">
		var flashvars = {
			level: "<?php echo $level; ?>",

		};
		var params = {
			menu: "false",
			wmode: "direct"
		};
		var attributes = {
			id: "iqmd",
			name: "iqmd"
		};

		swfobject.embedSWF("/assets/iqmd.swf", "flashcontent", "640", "576", "11.0.0","expressInstall.swf", flashvars, params, attributes);
    </script>
    <meta content="authenticity_token" name="csrf-param" />
<meta content="qWLecEmsM570I1DlZcoSdXgulsj5P12iFTxXNOoV4gM=" name="csrf-token" />
    <!-- [if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
  </head>
  <body>
    <header class="center">
  	<div class="header-item">
  	<ul id="nav-menu">
  		<li id="nav-item-play" class="nav-item">
			<a href="/">Play</a>
		</li>
  		<li id="nav-item-levels" class="nav-item">
			<a href="/levels">Levels</a>
		</li>
  	</ul>
  </div>
  	<div class="header-item desktop-only">
      <a href="http://t.co/H6stw47FE1"><img alt="Logo" border="0" src="/assets/logo-dfc673a34cd6a8c80691a28c18f7ef9b.png" /></a>
  </div>
</header>
    <div class="container" id="main">
      <div class="center">
	<p id="notice"></p>
<div id="flashcontent">
	<h1>You need to download the latest <a href="http://get.adobe.com/flashplayer/?no_ab=1">Flash Player Version</a> to run this game</h1>
</div>
	<h3>0 plays</h3>
	<h3>Submitted on 11 Dec 12:00</h3>
</div>
      <footer class="footer">
  <small>
  	iquitmustdash.com © 2013
  </small>
</footer>
      
    </div>
  </body>
</html>
