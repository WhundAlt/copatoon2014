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
	<div style="width:939px; height:653px; float:left; text-align:left; background:url(graphics/shell_center_grad.gif) repeat-x;" id="siteContent"><div style="width:939px; height:653px; overflow:auto;"><div style="width:650px; height:15px; margin:23px auto 0 auto;" class="pageHeader">Messages from Mission 4: Voting Rights Act</div><div style="width:650px; height:15px; margin:23px auto 0 auto;"><img src="graphics/pg_00_333333_ul.gif" width="15" height="15" style="float:left;" alt=""><img src="graphics/trans_spacer.gif" width="620" height="15" style="float:left; background-color:#333333;" alt=""><img src="graphics/pg_00_333333_ur.gif" width="15" height="15" style="float:right;" alt=""></div>
		<div style="width:650px; background:#333333; margin:0 auto 0 auto;">
			<div style="padding-top:5px; padding-bottom:5px; margin-left:12px; margin-right:12px; text-align: justify;">
<span class="txtItalic">Here comes the Judge!</span><br>
Mission Four reflects the gains made in redistricting fairness by the Voting Rights Act of 1965 and its later amendments (VRA).  While this law is associated with the Civil Rights movement and efforts to deny black voter registration, it also drew the federal judiciary further into the process of political redistricting.  Specifically, the VRA suspended the use of literacy tests and poll taxes in the voter registration process - both effective means of barring minority voters from participating in elections.  In order to prevent new tactics of denying or limiting the voting power of racial minorities, the VRA required states to obtain "preclearance" from the Department of Justice before introducing new devices or "prerequisites to qualification" that might be used to deny or limit the exercise of the right to vote.  Redistricting is one of the state election practices subject to federal preclearance review.<br><br>

Under Section 2 of the VRA, plaintiffs can challenge the unfair political representation of racial and language minority communities in court.  In the redistricting context, a state may violate the VRA by failing to protect a numerically large and geographically compact group of voters in a single district.  Usually, a state cannot divide such a group if it could make up a majority in a single district.  By showing attention to these concerns, the law guarantees a norm of fair play to racial communities of interest that have been historically denied political power.  But as shown in Mission Four, drawing districts that reflect minority political power can have partisan consequences, such as packing a district with a predominant party.<br><br>

<span class="txtItalic">Case Study Mission 4</span><br>
Ethnic Enclave: Virginia in 1992.<br>
Virginia Democrats should have been happy: they controlled of both state legislative houses, the Governor's office, and were gaining a congressional seat due to Virginia's population growth.  But because of the new district, minority groups and the Justice Department pressured the state to draw the new district with a majority-of African-Americans.  In order to create the district, African American voters would need to be pulled from several districts around the state, which might have put safe Democrat districts into jeopardy.  The Republican Party recognized this advantage and offered to help minority groups with money, technical assistance, and legal help for the creation of a new African American majority district. Democratic leaders avoided this dilemma by crafting a plan that satisfied both the partisan and racial concerns, but that success was short lived.  The 1992 elections resulted in a Democrat victory - 7 seats to 4, but the Republican wave starting in 1994 swept many conservative Democrats out of office.   Virginia now has one majority African American district (held by a Democrat), but Republicans now hold an 8-3 advantage in the congressional delegation overall.<br><br>

<span class="txtItalic">Links</span><br>
Voting Rights Act: United States Department of Justice Civil Rights Division Voting Section: <a href="http://www.usdoj.gov/crt/voting/intro/intro.htm" target="_blank">http://www.usdoj.gov/crt/voting/intro/intro.htm</a><br><br>

Just Trying Voting Here: 11 of America's Worst Places to Cast a Ballot (or Try)<br>
<a href="http://www.motherjones.com/news/feature/2006/09/just_try_voting_here.html" target="_blank">http://www.motherjones.com/news/feature/2006/09/just_try_voting_here.html</a><br><br>

Voting Rights Act on Wikipedia<br>
<a href="http://en.wikipedia.org/wiki/Voting_Rights_Act" target="_blank">http://en.wikipedia.org/wiki/Voting_Rights_Act</a>
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
