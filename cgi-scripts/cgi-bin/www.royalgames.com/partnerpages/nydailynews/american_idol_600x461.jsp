<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>American Idol</title>
		<style type="text/css">
		body {
			margin:0px; background:black;
		}
		#kingGameContainer {
			position:relative; width:600px; height:461px; overflow:hidden; background: black;
		}
		#kingGameContainer div {
			position:absolute; left:0px; top:0px; width:600px; height:461px; overflow:hidden; visibility:hidden;
		}
		</style>
		<script type="text/javascript" src="http://www.royalgames.com/partnerpages/nydailynews/swfobject.js"></script>
		<script type="text/javascript">
		var width = 600;
		var height = 461;
		var beginPollAt = -1;

		function poll() {
			var now = new Date().getTime();
			if (beginPollAt < 0) {
				beginPollAt = now;
			}
			var elapsed = now - beginPollAt;
			var el = document.getElementById("loaderObj");
			if (elapsed > 300) {
				el.style.visibility = "visible";
			}
			var eg = document.getElementById("gameObj");
			var p = 0;
			if (eg != null) {
				p = eg.PercentLoaded();
			}
			el.SetVariable("percentDone", p);
			if (p == 100) {
				eg.style.visibility = "visible";
				el.style.display = "none";
			}
			else {
				setTimeout("poll()", 50);
			}
		}

		function onLeavePage(url) {
				document.forms.redirform.t.value = url;
				document.forms.redirform.submit();
		}

		function onIdolReady() {
			var eg = document.getElementById("gameObj");
			eg.setIdolProperty("auxPromo", "/servlet/SelectServlet?partner=nydailynews&lang=en_US&country=US&target=%2Fsignup.jsp%3FgameId=77");
			eg.setIdolProperty("auxPath", "http://images.midasplayer.com/games/american_idol/");
			eg.startIdol();
		}

		window.onload = function() {
			setTimeout("poll()", 50);
			var soLoader = new SWFObject("/flash/kingloader_black.swf", "loaderObj", width, height, "8", "#000000");
			soLoader.write("loader");
			var soGame = new SWFObject("/practice_games/american_idol_promo.swf", "gameObj", width, height, "8", "#000000");
			soGame.write("game");
		}
		</script>
	</head>
	<body>
		<div id="kingGameContainer">
			<div id="game"></div>
			<div id="loader"></div>
		</div>
		<form name="redirform" method="post" action="american_idol_600x461.jsp">
			<input type="hidden" name="t" value="" />
		</form>
	</body>
</html>


