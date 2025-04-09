<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis" />
<title>脱衣マインスイーパ　ver.1.0</title>
<script type="text/javascript" src="swfobject.js"></script>
<script type="text/javascript" src="rightclick.js"></script>
</head>
<body bgcolor="#ffffff" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onload="RightClick.init();">

<div id="flashcontent">
Javascriptを有効にし、<a href="http://www.adobe.com/go/getflashplayer_jp" target="_blank" >最新のFlash Player</a>をインストールしてください。
</div>	
<script type="text/javascript">
	var so = new SWFObject("sweeper.swf", "sweeper", "480", "520", "10", "#ffffff");
	so.addParam("quality", "high");
	so.addParam("name", "sweeper");
	so.addParam("id", "sweeper");
	so.addParam("AllowScriptAccess", "always");
	so.addParam("wmode", "opaque");
	so.addParam("menu", "false");
	so.addVariable("info", "<?php if(array_key_exists("info", $_GET)) echo addslashes($_GET['info']) ?>");
	so.write("flashcontent");
</script>

</body>
</html>
