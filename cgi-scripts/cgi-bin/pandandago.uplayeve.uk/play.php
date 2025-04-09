<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=11">
		<meta http-equiv="X-UA-Compatible" content="IE=10">
		<meta http-equiv="X-UA-Compatible" content="IE=9">
		<meta http-equiv="X-UA-Compatible" content="IE=8">
		<meta http-equiv="X-UA-Compatible" content="IE=7">
		<script src="mpandanda.js"></script>
		<script src="Quests.js"></script>
		<script src="json.js"></script>
		<script src="jquery.min.js"></script>
		<title>Play PandandaGO!</title>
		<meta charset="utf-8" />
		<meta name="keywords" content="Pandanda, pandanda, fpdn, freepandanda, fpdn.me, private, server, pandanda, 2012, pandanda, 2015, pandanda, 2016, 2017, 2018, mpandanda, mPandanda, mpandanda.eu, www.mpandanda.eu, mpdn, pdps, FreePandanda, pandanda, kids, flash, games, multiplayer, clothes, quests, online, pandandaland, red, panda, land, safe, fun, educational, kid, game, popular, fun, mmo, rpg, virtual, world, explore"/>
		<meta name="description" content="Play the offline version of mPandanda - PandandaGO!"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
		<script type="text/javascript">
			window.cookieconsent_options = {"message":"In order to continue using our website, you need to accept our usage of cookies in order to access all the functions of our website.","dismiss":"Accept","learnMore":"More info","link":null,"theme":"light-bottom"};
		</script> 
	</head>
	<body>
		<table align="center" border="0" cellspacing="0" cellpadding="0">
			<tr valign="top" align="center">
				<td width="100%" height="100%">
					<select id="partySwitcher" onchange="partySwitcherChanged()">
						<option value="none||">No festival selected</option>
						<option value="snowy|snowy|winter">Snowy Locations</option>
						<option value="pumpkinfestival2016|pumpkin|pumpkin">Pumpkin Festival 2016</option>
						<option value="winterfestival2016|winter|christmas">Winter Festival 2016</option>
						<option value="marchofthesnowmen2017|winter|snowmen">March of the Snowmen 2017</option>
						<option value="tropicalbreak2017|summer|tropical">Tropical Break 2017</option>
						<option value="anniversary2017|anniversary|">mPD's 1st Anniversary 2017</option>
						<option value="friendshipfestival2017|friendship|friendship">Friendship Festival 2017</option>
						<option value="easterfestival2017|easter|easter">Easter Egg Hunt 2017</option>
						<option value="earthday2017||">Earth Day 2017</option>
						<option value="backgroundweek2017||">Background Week 2017</option>
						<option value="moonfestival2017|moon|">Moon Festival 2017</option>
						<option value="waterday2017|waterday|">Water Day 2017</option>
						<option value="campday2017||">Camp Day 2017</option>
						<option value="musicfestival2017|music|">Music Festival 2017</option>
						<option value="tropicalbreak2017|summer|tropical">Summer Festival 2017</option>
						<option value="harvestfestival2017|harvest|">Harvest Festival 2017</option>
						<option value="pumpkinfestival2017|pumpkin|pumpkin">Pumpkin Festival 2017</option>
						<option value="thanksgiving2017|snowy|winter">Thanksgiving 2017</option>
						<option value="winterfestival2017|winter|christmas">Winter Festival 2017</option>
						<option value="marchofthesnowmen2018|winter|snowmen">March of the Snowmen 2018</option>
						<option value="winterolympics2018|winter|">Winter Olympics 2018</option>
						<option value="tropicalbreak2018|summer|tropical">Tropical Break 2018</option>
						<option value="superbowl2018|summer|tropical">Super Bowl 2018</option>
						<option value="anniversary2018|anniversary2|">mPD's 2nd Anniversary 2018</option>
						<option value="friendshipfestival2018|friendship2|friendship">Friendship Festival 2018</option>
						<option value="aprilfools2018||">April Fools Day 2018</option>
						<option value="easterfestival2018|easter|easter">Easter Egg Hunt 2018</option>
						<option value="summerrefresh2018||">Summer Refresh 2018</option>
						<option value="footballfestival2018|football|football">Football Festival 2018</option>
						<option value="4thofjuly2018|4thofjuly|">4th of July 2018</option>
						<option value="sailorsfestival2018|sailors|">Sailors Festival 2018</option>
						<option value="summerfestival2018|summer|tropical">Summer Festival 2018</option>
						<option value="harvestfestival2018|harvest|">Harvest Festival 2018</option>
						<option value="petpeeve2018||">Pet Peeve Week 2018</option>
						<option value="10anniversary|anniversary|">10th Pandanda Anniversary 2018</option>
						<option value="pumpkinfestival2018|pumpkin|pumpkin">Pumpkin Festival 2018</option>
						<option value="thanksgiving2018|snowy|winter">Thanksgiving 2018</option>
						<option value="marchofthesnowmen22018|winter|snowmen">Snowmen Marching 2018</option>
						<option value="winterfestival2018|winter|christmas">Winter Festival 2018</option>
						<option value="candyfestival2019|candy|candy">Candy Festival 2019</option>
						<option value="tropicalbreak2019|summer|tropical">Tropical Break 2019</option>
						<option value="anniversary2019|anniversary|">mPD's 3rd Anniversary 2019</option>
						<option value="friendshipfestival2019|friendship|friendship">Friendship Festival 2019</option>
						<option value="stpatrick2019|stpatrick|">St. Patrick's Day 2019</option>
						<option value="aprilfools2018||">April Fools Day 2019</option>
						<option value="dragonfestival2019||">Dragon Festival 2019</option>
						<option value="easterfestival2019|easter|easter">Easter Egg Hunt 2019</option>
						<option value="equestrian2019||">mPandanda Equestrian 2019</option>
						<option value="desertexploration2019|desert|">Desert Exploration 2019</option>
						<option value="summerfestival2019|summer|tropical">Summer Festival 2019</option>
						<option value="junglefestival2019|summer|">Jungle Festival 2019</option>
						<option value="backgroundweek2019||">Background Week 2019</option>
						<option value="harvestfestival2019|harvest|">Harvest Festival 2019</option>
						<option value="pandandafestival2019|pandanda|">Pandanda Festival 2019</option>
					</select> 
					<div id="mpdapiswf"><embed src="mpdapi.swf?v=2019-02-01" id="mpdapi" name="mpdapi" allowscriptaccess="always" quality="high" width="935px" height="600px" type="application/x-shockwave-flash" wmode="transparent"></embed></div>
					<div id="mpdswf"><embed src="mpdn.swf?v=2019-09-27" id="mpandanda" name="mpandanda" allowscriptaccess="always" quality="high" width="935px" height="600px" type="application/x-shockwave-flash" wmode="transparent"></embed></div>
					<div id="chromewarning"><img src="chrome.png" usemap="#image-map"><map name="image-map"><area target="_blank" alt="" title="" href="http://chrome.google.com/webstore/detail/mpandanda/nmkanpammcgemjmhfojkealnbpfnlbin/" coords="170,123,776,218" shape="rect"><area target="_blank" alt="" title="" href="http://get.adobe.com/flashplayer/" coords="173,484,776,578" shape="rect"></map></div>
				</td>
			</tr>
		</table>
		<script>
		$(document).ready(function(){
			var gameRatio = window.innerHeight / 600;
			if(Math.round(gameRatio * 935) > window.innerWidth) gameRatio = window.innerWidth / 935;
			document.getElementById("mpandanda").width = String(Math.round(gameRatio * 935)) + "px";
			document.getElementById("mpandanda").height = String(Math.round(gameRatio * 600)) + "px";
			document.getElementById("mpdapi").width = String(Math.round(gameRatio * 935)) + "px";
			document.getElementById("mpdapi").height = String(Math.round(gameRatio * 600)) + "px";
			var ua = navigator.userAgent;
			if(!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini|Mobile|mobile|CriOS/i.test(ua) && /Chrome/i.test(ua))
			{
				if(typeof navigator.mimeTypes["application/x-shockwave-flash"] === "undefined")
				{
					flashInterval = setInterval(flashEnabled, 1000);
					selectDiv("chromewarning").style.visibility = "visible";
					selectDiv("chromewarning").style.pointerEvents = "auto";
				}
			}
		});
		function flashEnabled()
		{
			if(typeof navigator.mimeTypes["application/x-shockwave-flash"] !== "undefined")
			{
				selectDiv("chromewarning").removeAttribute("style");
				clearInterval(flashInterval);
			}
		}
		</script>
		<style>
		#partySwitcher
		{
			visibility:hidden;
			margin: 0 auto;
		}
		#mpdswf 
		{
			left: 0;
			right: 0;
			position: absolute;
			z-index:10049;
		}
		#mpdapiswf 
		{
			position: absolute;
			left: 0;
			right: 0;
			pointer-events:none;
			visibility:hidden;
			z-index:20050;
		}
		#chromewarning
		{
			position: absolute;
			margin: 0 auto;
			left: 0;
			right: 0;
			pointer-events:none;
			visibility:hidden;
			z-index:40050;
		}
		#youtubeframe
		{
			position: absolute;
			left: 0;
			right: 0;
			pointer-events:none;
			width: 640px;
			margin: 0 auto;
			margin-top: 3px;
			z-index:10045;
		}
		</style>
	</body>
</html>