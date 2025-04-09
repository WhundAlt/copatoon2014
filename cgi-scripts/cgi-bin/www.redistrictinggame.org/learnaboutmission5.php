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
	<div style="width:939px; height:653px; float:left; text-align:left; background:url(graphics/shell_center_grad.gif) repeat-x;" id="siteContent"><div style="width:939px; height:653px; overflow:auto;"><div style="width:650px; height:15px; margin:23px auto 0 auto;" class="pageHeader">Messages from Mission 5: Reform Mission</div><div style="width:650px; height:15px; margin:23px auto 0 auto;"><img src="graphics/pg_00_333333_ul.gif" width="15" height="15" style="float:left;" alt=""><img src="graphics/trans_spacer.gif" width="620" height="15" style="float:left; background-color:#333333;" alt=""><img src="graphics/pg_00_333333_ur.gif" width="15" height="15" style="float:right;" alt=""></div>
		<div style="width:650px; background:#333333; margin:0 auto 0 auto;">
			<div style="padding-top:5px; padding-bottom:5px; margin-left:12px; margin-right:12px; text-align: justify;">
<span class="txtItalic">Blind Justice</span><br>
Sometimes less is more.  The final mission of the Redistricting Game simulates the reform proposal put forward by U.S. Representative John Tanner (TN).   The proposed bill restricts the mapmaker's ability to use partisan and demographic information as to draw congressional districts. Tanner's Fairness and Independence in Redistricting Act (FAIR Act) seeks to eliminate the problems with partisan bickering and manipulation that often surrounds the current process of redistricting. By creating independent oversight in each state and limiting the factors that can be considered in drawing lines, the Tanner Proposal seeks to make a more fair redistricting process for the entire country.<br><br>

Specifically, the FAIR Act mandates the establishment of independent redistricting commissions in each state. These commissions would be charged with drawing non-partisan district maps.  The law would also eliminate the practice of mid-term redistricting, limiting the process to once every ten years. This independent commission would present a non-partisan solution to what has become a very partisan problem, with the ultimate goal of leading to better popular representation at the federal level.<br><br>

Tanner's proposal is one idea among many to reform the system.  There is no single "right answer" to the problems illustrated in this simulation. There are other reform strategies and proposed solutions that attempt to combat these problems in different ways. We feel that familiarity with these plans, both their advantages and disadvantages, is important to the process of developing and enacting redistricting reforms.  There are other proposed reform packages and bills, as you become familiar with them, we urge you to contact your representative and express your opinion.<br><br>

<span class="txtItalic">Case Study: Mission 5</span><br>
Currently, state reform efforts have taken two major directions, both based upon independent committees or commissions but with varying degrees of legislative oversight. Below are summaries of each direction, followed by information on international redistricting practices.<br><br>

<span class="txtUnderline">States having Commissions with Full Oversight</span><br>
<span class="txtItalic">Arizona, Hawaii, Idaho, New Jersey, Washington</span><br>
Currently Arizona, Hawaii, Idaho, New Jersey, and Washington have all instituted redistricting reforms based upon independent commissions. Arizona relies upon a five-person commission to draw its maps with stringent rules governing commission membership, with the additional stipulation that maps be drawn as competitively as possible. Hawaii's legislative leaders appoint an 8-member civilian commission, and that commission elects its final and ninth member. Idaho's legislative leaders appoint a 6-member commission comprised of people who have not served as either elected or appointed officials. New Jersey entrusts the task of redistricting to a 13-member commission, composed of 12 members chosen by the state's current legislators with the final member chosen by the commission itself. Washington has a system similar to Hawaii's in that its 5-member civilian commission has its initial 4 members appointed, but the commission itself chooses its 5th member, in this case, its chair.<br><br>

Arizona  <a href="http://www.fairvote.org/?page=292" target="_blank">http://www.fairvote.org/?page=292</a><br>
Hawaii  <a href="http://www.fairvote.org/?page=301" target="_blank">http://www.fairvote.org/?page=301</a><br>
Idaho  <a href="http://www.fairvote.org/?page=302" target="_blank">http://www.fairvote.org/?page=302</a><br>
New Jersey  <a href="http://www.fairvote.org/?page=320" target="_blank">http://www.fairvote.org/?page=320</a><br>
Washington  <a href="http://www.fairvote.org/?page=337" target="_blank">http://www.fairvote.org/?page=337</a><br><br>

<span class="txtUnderline">States having Commissions with Less Oversight</span><br>
<span class="txtItalic">Iowa and Maine</span><br>
Both Iowa and Maine have independent redistricting commissions with less legislative oversight than the other systems. Iowa places control over redistricting in the hands of a non-partisan agency attached to its state legislature, the Legislative Service Bureau. Maine's legislature appoints a 15-member commission, but the state's governor retains veto power and the state Supreme Court reserves the right to draw a map if the commission cannot meet its deadline.<br><br>

Iowa  <a href="http://www.fairvote.org/?page=305" target="_blank">http://www.fairvote.org/?page=305</a><br>
Maine  <a href="http://www.fairvote.org/?page=309" target="_blank">http://www.fairvote.org/?page=309</a><br><br>

<span class="txtItalic">An International Perspective</span><br>
The U.S. is not alone in grappling with the intricacies of defining electoral districts. (In fact, even the term, <span class="txtItalic">redistricting</span>, is unique to the United States; the United Kingdom uses <span class="txtItalic">redistribution</span> and the process is widely known as <span class="txtItalic">delimitation</span>.)  International delimitation practices vary widely with the authority resting in different hands.  A study compiled by the IFES sponsored Delimitation Equity Project compares delimitation practices in 87 nations, analyzes different systems responsible for initiating, overseeing, and approving national delimitation.<br><br>

<span class="txtItalic">To learn more:</span><br>
From the IFES Delimitation Equity Project:<br>
<span class="txtItalic">Delimitation Equity Project - Resource Guide</span><br>
Author: Lisa Hanley, Jeremy Grace, Peter Schrott, Horacio Boneo, Ron Johnson, Michael Maley, Alan McRobie, Charles Pattie, David Rossite.  Date of Publication: 05/01/2006<br>
<a href="http://www.ifes.org/publications-detail.html?id=292" target="_blank">http://www.ifes.org/publications-detail.html?id=292</a><br><br>

Establishing the Rules of the Game: Election Laws in Democracies<br>
By Louis Massicotte, André Blais, Antoin Yoshinaka, University of Toronto Press, 2004  Incorporating original data collected from more than 60 democracies around the world, this text describes rules governing the conduct of elections.<br><br>

<span class="txtItalic">Links</span><br>
Redistricting - Common Cause<br>
<a href="http://www.commoncause.org/site/pp.asp?c=dkLNK1MQIwG&amp;b=196481" target="_blank">http://www.commoncause.org/site/pp.asp?c=dkLNK1MQIwG&amp;b=196481</a><br><br>

Redistricting Reform Watch<br>
<a href="http://www.fairvote.org/?page=1389" target="_blank">http://www.fairvote.org/?page=1389</a>
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
