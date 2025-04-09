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
	<div style="width:939px; height:653px; float:left; text-align:left; background:url(graphics/shell_center_grad.gif) repeat-x;" id="siteContent"><div style="width:939px; height:653px; overflow:auto;"><div style="width:650px; height:15px; margin:23px auto 0 auto;" class="pageHeader">Messages from Mission 1: Fundamentals</div><div style="width:650px; height:15px; margin:23px auto 0 auto;"><img src="graphics/pg_00_333333_ul.gif" width="15" height="15" style="float:left;" alt=""><img src="graphics/trans_spacer.gif" width="620" height="15" style="float:left; background-color:#333333;" alt=""><img src="graphics/pg_00_333333_ur.gif" width="15" height="15" style="float:right;" alt=""></div>
		<div style="width:650px; background:#333333; margin:0 auto 0 auto;">
			<div style="padding-top:5px; padding-bottom:5px; margin-left:12px; margin-right:12px; text-align: justify;">
<span class="txtItalic">Even the Fundamentals Can be Tricky</span><br><br>

After playing Mission One of <span class="txtItalic">The Redistricting Game</span> we hope you will come to your own conclusions about how tricky even the basics of the redistricting process can be.  The mission involving fictional State of Jefferson is intentionally simplified, partly because the state's population is overwhelmingly one party.  With only one party to worry about you as the mapmaker can focus on the three most fundamental concepts of redistricting.  These are:

<div style="margin: 20px 20px 10px 20px;">• <span class="txtUnderline">Population Equality</span> - Each election district must have the same number of constituents. In <span class="txtItalic">The Redistricting Game</span>, this number ranges between 640,000 - 650,000 people, approximating the size of current U.S. congressional districts.  At the federal level, courts tend to enforce the population equality standard very strictly.</div>

<div style="margin: 0 20px 10px 20px;">• <span class="txtUnderline">Contiguity</span> - Each district must be one continuous shape. No "land islands" are allowed. U.S. courts always enforce the principle of contiguity.</div>

<div style="margin: 0 20px 20px 20px;">• <span class="txtUnderline">Compactness</span> - Generally speaking, districts need to be drawn in compact shapes.  Extremely jagged edges and skinny extensions are features that are the hallmarks of gerrymandered districts.  Because compactness is a traditional standard  about which there is no generally accepted method of measurement, the courts in most states do not usually enforce the compactness principle in practice.</div>

<span class="txtItalic">States are Redistricted After Each U.S. Census (and sometimes more frequently...)</span><br>
The U.S. Census is conducted the first year of each decade - e.g. 1980, 1990, 2000, 2010, etc.  Since people often move across state lines, the population of each state will increase or decrease between each census (mostly increase).  But federal law says that the number of U.S. House of Representatives stays constant at 435.  So after each census, Congress adopts a formula that apportions each state a number of districts that is roughly proportional to their share of the country's population.  This is why states with big populations tend to have more representatives than states with smaller populations.<br><br>

Based on these changes, then, the number of congressional districts in a state may change each decade.  If the state's population grows relative to other states, then the state may receive a larger share of the 435 districts.  On the other hand, the state's population can shrink relative to other states - in which case a state may get a smaller share of the 435 representatives (although every state receives at least one).  Of course, a state's population may not change enough to cause any change in its number of congressional districts.  But shifts within that state may require line drawers to redraw districts so that the population in each district is balanced.<br><br>

There are special cases where a state decides to redistrict mid-decade - e.g. between censuses - as well.<br><br>

<span class="txtItalic">Case Study - Mission One</span><br>
Redistricting for Population Equality: Your State, My State.<br>
Every state has experienced shifts in population, and with them, the need to re-adjust their congressional representation. Mission One, set in the fictional state of Jefferson, is similar to the challenge every state experiences after a census: with a new set of statistics regarding population it is necessary to redraw the boundaries of congressional districts in order to keep popular representation fair at the national level.<br><br>

Links<br>
A Beginner's Guide to Redistricting <br>
by Prof. Kareem Crayton, University of Southern California<br>
<a href="resources/beginnersguide.pdf" ,="" target="_blank">http://www.redistrictinggame.org/resources/beginnersguide.pdf</a><br><br>

Annals of Law: Drawing the Line: The New Yorker<br>
<a href="http://www.newyorker.com/archive/2006/03/06/060306fa_fact" target="_blank">http://www.newyorker.com/archive/2006/03/06/060306fa_fact</a><br><br>

Equal Population in Redistricting<br>
<a href="http://aceproject.org/ace-en/topics/bd/bdb/bdb05/bdb05a" target="_blank">http://aceproject.org/ace-en/topics/bd/bdb/bdb05/bdb05a</a><br><br>

Eilperin, Juliet, Fight Club Politics: How Partisanship is Poisoning the House of Representatives, Rowman &amp; Littlefield Publishers, Inc., 2007
</div>
		</div>
		<div style="width:650px; height:15px; margin:0 auto 0 auto;"><img src="graphics/pg_00_333333_ll.gif" width="15" height="15" style="float:left;" alt=""><img src="graphics/trans_spacer.gif" width="620" height="15" style="float:left; background-color:#333333;" alt=""><img src="graphics/pg_00_333333_lr.gif" width="15" height="15" style="float:right;" alt=""></div><div style="width:629px; height:15px; margin:20px auto 0 auto;"><img src="graphics/pg_00_ffffff_ul.gif" width="15" height="15" style="float:left;" alt=""><img src="graphics/trans_spacer.gif" width="599" height="15" style="float:left; background-color:#ffffff;" alt=""><img src="graphics/pg_00_ffffff_ur.gif" width="15" height="15" style="float:right;" alt=""></div>
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
