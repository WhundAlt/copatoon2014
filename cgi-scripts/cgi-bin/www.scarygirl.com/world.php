<?php
	$level = 'home';
	if (array_key_exists('level', $_REQUEST)) {
		$level = $_REQUEST['level'];
	}
?>

<!DOCTYPE>
<html>
<head>
</head>
<body style="background-color: black; text-align: center;">
	<object type="application/x-shockwave-flash" id="gameSwf" data="container.swf?level=<?php echo $level; ?>&amp;serverURL=http://www.scarygirl.com/&amp;version=14" width="760" height="480" style="visibility: visible;"><param name="menu" value="false"><param name="allowFullScreen" value="true"><param name="flashvars" value="shouldAllowFullScreen=true"></object>
</body>
</html>