<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>The ReDistricting Game</title>
<link rel='stylesheet' href='style.css' type='text/css' media='all' />
<script type='text/javascript' src='main.js'></script>
</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59002310-1', 'auto');
  ga('send', 'pageview');

</script>
<div style="width:960px; height:90px; margin:10px auto 0 auto; position:relative;">
	
		<div style="margin-left:22px; width:140px;" class="menuItem" id="submenu1" onmouseout="subMenuTimer();" onmouseover="clearSubMenuTimer();"><a href="index.php"><div class="menuOption">Home</div></a><a href="game.php"><div class="menuOption">Play Game</div></a></div>
	
	<div style="margin-left:72px; width:180px;" class="menuItem" id="submenu2" onmouseout="subMenuTimer();" onmouseover="clearSubMenuTimer();"><a href="resourceguide.php"><div class="menuOption">Learn More</div></a><a href="engagerep.php"><div class="menuOption">View Your Rep</div></a><a href="howdoesmystatedoit.php"><div class="menuOption">How Does My State Do It</div></a><a href="links.php"><div class="menuOption">State Links</div></a><a href="faq.php"><div class="menuOption">Help &amp; FAQ</div></a><a href="glossary.php"><div class="menuOption">Glossary</div></a></div>

	<div style="margin-left:220px; width:140px;" class="menuItem" id="submenu4" onmouseout="subMenuTimer();" onmouseover="clearSubMenuTimer();"><a href="about.php"><div class="menuOption">About the Game</div></a><a href="http://redistrictinggame.blogspot.com/" target="_blank"><div class="menuOption">Buzz</div></a></div>

	<div style="margin-left:278px; width:180px;" class="menuItem" id="submenu5" onmouseout="subMenuTimer();" onmouseover="clearSubMenuTimer();"><a href="emailafriend.php"><div class="menuOption">Tell Friends</div></a><a href="engagerep.php"><div class="menuOption">Tell Congress</div></a></div>

	<div style="width:15px; height:90px; float:left;"><img src="graphics/shell_top_left.gif" width="15" height="90" alt=""></div>
	
	<div style="width:382px; height:90px; float:left;">
		<div style="height:60px; background:url('graphics/shell_top_upper_grad.gif') repeat-x;"><a href="index.php"><img src="graphics/shell_annenberg_logo.gif" width="227" height="32" style="margin-top:8px; float:left;" alt=""></a><a href="index.php"><img src="graphics/shell_top_garry_left.jpg" width="52" height="60" style="float:right" alt=""></a></div>
		<div style="height:30px; background:url('graphics/shell_top_lower_grad.gif') repeat-x;"><a href="game.php" onmouseover="highlightMenu('game', true); hideSubMenu(); menuControl('submenu1', 'block');" onmouseout="highlightMenu('game', false);"><img src="graphics/shell_nav_game.gif" width="50" height="18" style="margin-left:2px" alt="" id="game"></a><a href="resourceguide.php" onmouseover="highlightMenu('resources', true); hideSubMenu(); menuControl('submenu2', 'block');" onmouseout="highlightMenu('resources', false);"><img src="graphics/shell_nav_resources.gif" width="82" height="18" alt="" id="resources"></a><a href="forums.php" onmouseover="highlightMenu('forums', true); hideSubMenu();" onmouseout="highlightMenu('forums', false);"><img src="graphics/shell_nav_forums.gif" width="66" height="18" alt="" id="forums"></a><a href="about.php" onmouseover="highlightMenu('about', true); hideSubMenu(); menuControl('submenu4', 'block');" onmouseout="highlightMenu('about', false);"><img src="graphics/shell_nav_about.gif" width="58" height="18" alt="" id="about"></a><a href="takeaction.php" onmouseover="highlightMenu('takeaction', true); hideSubMenu(); menuControl('submenu5', 'block');" onmouseout="highlightMenu('takeaction', false);"><img src="graphics/shell_nav_takeaction.gif" width="96" height="18" alt="" id="takeaction"></a></div>
	</div>
	
	<div style="width:62px; height:90px; float:left;"><a href="index.php"><img src="graphics/shell_top_garry_right.jpg" width="62" height="90" alt=""></a></div>
	<div style="width:477px; height:90px; float:left;">
		<div style="height:21px; background:url('graphics/shell_top_right_upper_grad.gif') repeat-x;"><img src="graphics/shell_top_right_side.gif" width="18" height="21" alt=""></div>
		<div style="height:69px; background:url('graphics/shell_top_right_lower_grad.gif') repeat-x;"><a href="index.php"><img src="graphics/shell_redist_logo.gif" width="477" height="30" alt="" style="margin-top:24px;"></a></div>
	</div>
	<div style="width:24px; height:90px; float:left;"><img src="graphics/shell_top_right.gif" width="24" height="90" alt=""></div>
</div>



<div style="width:960px; height:653px; margin:0 auto;">
	<div style="width:15px; height:653px; float:left; background:url(graphics/shell_center_grad.gif) repeat-x;"><img src="graphics/shell_side_left_top.gif" width="15" height="18" alt="" style="float:left;"><img src="graphics/shell_side_left_grad.gif" width="6" height="618" alt="" style="float:left; clear:left;"><img src="graphics/shell_side_left_bottom.gif" width="6" height="17" alt="" style="float:left; clear:left;"></div>
	<div style="width:939px; height:653px; float:left; text-align:left; background:url(graphics/shell_center_grad.gif) repeat-x;" id="siteContent"><div style="width:939px; height:653px; overflow:auto;"><div style="width:629px; height:15px; margin:23px auto 0 auto;" class="pageHeader">Quotes About Mission 4</div><div style="width:629px; height:15px; margin:23px auto 0 auto;"><img src="graphics/pg_00_333333_ul.gif" width="15" height="15" style="float:left;" alt=""><img src="graphics/trans_spacer.gif" width="599" height="15" style="float:left; background-color:#333333;" alt=""><img src="graphics/pg_00_333333_ur.gif" width="15" height="15" style="float:right;" alt=""></div>
		<div style="width:629px; background:#333333; margin:0 auto 0 auto;">
			<div style="padding-top:5px; padding-bottom:5px; margin-left:12px; margin-right:12px; text-align: center;">
<div class="quoteText">"Once the process was started by the desire to buttress Republican districts, the question still is regardless of that, how cognizant of ethnicity can you be in crafting a district, how distorted can a district become when the purpose is to capture a particular race or ethnicity?"</div>
<div class="quoteName">- John Alford, political scientist at Rice University in Houston.</div>

<div class="quoteText">"The implicit message to African Americans is, we're going to let you vote, but we're going to rig it so your vote doesn't count."</div>
<div class="quoteName">- U.S. Representative Rep. Max Sandlin (D-Texas) testifying at the Texas Redistricting Trial in Federal Court</div>

<div class="quoteLinks">Sources:<br>
John Alford, cited in Fox News Article "Supreme Court Mulls Texas Redistricting Map by Jane Roh," March 02, 2006, <a href="http://www.foxnews.com/story/0,2933,186542,00.html" target="_blank" class="external">http://www.foxnews.com/story/0,2933,186542,00.html</a><br>
Sandlin: cited in Austin Chronicle, "Rights and Consequences, The Redistricting Trial?Pits 'Partisan Gerrymandering' against the Voting Rights Act" by Michael Kind, 
<a href="http://www.chrontourage.com/gyrobase/Issue/story?oid=oid%3A190686" target="_blank" class="external">http://www.chrontourage.com/gyrobase/Issue/story?oid=oid%3A190686</a>

</div></div>
		</div>
		<div style="width:629px; height:15px; margin:0 auto 0 auto;"><img src="graphics/pg_00_333333_ll.gif" width="15" height="15" style="float:left;" alt=""><img src="graphics/trans_spacer.gif" width="599" height="15" style="float:left; background-color:#333333;" alt=""><img src="graphics/pg_00_333333_lr.gif" width="15" height="15" style="float:right;" alt=""></div><div style="width:629px; height:15px; margin:20px auto 0 auto;"><img src="graphics/pg_00_ffffff_ul.gif" width="15" height="15" style="float:left;" alt=""><img src="graphics/trans_spacer.gif" width="599" height="15" style="float:left; background-color:#ffffff;" alt=""><img src="graphics/pg_00_ffffff_ur.gif" width="15" height="15" style="float:right;" alt=""></div>
		<div style="width:629px; background:#ffffff; margin:0 auto 0 auto;">
			<div style="padding-top:5px; padding-bottom:5px; margin-left:12px; margin-right:12px; text-align: center; color: #000000;"><a href="index.php"><img src="graphics/btn_home.gif" width="95" height="28" alt="Home" style="padding-right:5px;"></a><a href="game.php"><img src="graphics/btn_game.gif" width="95" height="28" alt="Game" style="padding-right:5px;"></a><a href="resourceguide.php"><img src="graphics/btn_resources.gif" width="95" height="28" alt="Resources" style="padding-right:5px;"></a><a href="forums.php"><img src="graphics/btn_forums.gif" width="95" height="28" alt="Forums" style="padding-right:5px;"></a><a href="about.php"><img src="graphics/btn_about.gif" width="95" height="28" alt="About" style="padding-right:5px;"></a><a href="takeaction.php"><img src="graphics/btn_takeaction.gif" width="95" height="28" alt="Take Action"></a> </div>
		</div>
		<div style="width:629px; height:15px; margin:0 auto 0 auto;"><img src="graphics/pg_00_ffffff_ll.gif" width="15" height="15" style="float:left;" alt=""><img src="graphics/trans_spacer.gif" width="599" height="15" style="float:left; background-color:#ffffff;" alt=""><img src="graphics/pg_00_ffffff_lr.gif" width="15" height="15" style="float:right;" alt=""></div>
</div></div>
	<div style="width:6px; height:653px; float:left; background:url(graphics/shell_side_right_grad.gif) repeat-y;"><img src="graphics/shell_side_right_top.gif" width="6" height="28" alt=""></div>
</div>


<div style="width:6px; height:653px; float:left; background:url('graphics/shell_side_right_grad.gif') repeat-y;"><img src="graphics/shell_side_right_top.gif" width="6" height="28" alt=""></div>
</div>

<div style="width:960px; height:25px; margin:0 auto;">
	<div style="width:23px; height:25px; float:left;"><img src="graphics/shell_bottom_left.gif" width="23" height="25" alt=""></div>
	<div style="width:913px; height:25px; float:left; background:url('graphics/shell_bottom_mid_grad.gif') repeat-x;"></div>
	<div style="width:24px; height:25px; float:left;"><img src="graphics/shell_bottom_right.gif" width="24" height="25" alt=""></div>
</div>
<div style="margin:10px 0 0 0;"></div>

</body></html>
