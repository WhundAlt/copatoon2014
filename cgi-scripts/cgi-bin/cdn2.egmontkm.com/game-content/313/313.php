<!DOCTYPE html>
<html>
	<head> 
		<meta charset="utf-8">
		<title>313</title>
		<style type="text/css">
			body {

				padding: 0px;
				border: 0px;
				margin: 0px;
			}
			
			#wrapper {
				display: block;
			}
		</style>

		<script type="text/javascript" src="howler.min.js" charset="utf-8"></script>
		<script type="text/javascript" src="preloadjs.js" charset="utf-8"></script>
		<script type="text/javascript" src="313-game.js" charset="utf-8"></script>
		<script type="text/javascript" src="313-lang.js" charset="utf-8"></script>
		<script>
			var gameScale = 1;
			
			if (window.innerWidth >= 640 && window.innerHeight >= 744) {
				gameScale = 2;
			}

		</script>
	</head>
	<body onload="T13.init('<?php echo $_GET["lang"] ?>',gameScale,'gfx/');" bgcolor="#000000">
		<div id="wrapper">
		<script>document.write("<canvas id=\"canvas\" width=\""+(gameScale*320)+"\" height=\""+(gameScale*372)+"\"></canvas>");</script>
		</div>
		<script>

			var wrapperWidth = (gameScale*320);
			var wrapperHeight = (gameScale*372);
			
			if (window.innerWidth > window.innerHeight) { // landscape
				wrapperWidth = window.innerWidth * (wrapperHeight / window.innerHeight);
			}
					
			var wrapper = document.getElementById("wrapper");
		
			wrapper.style.width = wrapperWidth+"px";
			wrapper.style.height = wrapperHeight+"px";
			
			var viewPortTag=document.createElement('meta');
			viewPortTag.id="viewport";
			viewPortTag.name = "viewport";
			viewPortTag.content = "width="+wrapperWidth;
			document.getElementsByTagName('head')[0].appendChild(viewPortTag);

		</script>
	</body>
</html>