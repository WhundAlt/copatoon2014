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
	<div style="width:939px; height:653px; float:left; text-align:left; background:url(graphics/shell_center_grad.gif) repeat-x;" id="siteContent"><div style="width:939px; height:653px; overflow:auto;"><div style="width:700px; height:15px; margin:23px auto 0 auto;" class="pageHeader">Help &amp; FAQ<a name="returntotop"></a></div><div style="width:700px; height:15px; margin:23px auto 0 auto;"><img src="graphics/pg_00_333333_ul.gif" width="15" height="15" style="float:left;" alt=""><img src="graphics/trans_spacer.gif" width="670" height="15" style="float:left; background-color:#333333;" alt=""><img src="graphics/pg_00_333333_ur.gif" width="15" height="15" style="float:right;" alt=""></div>
		<div style="width:700px; background:#333333; margin:0 auto 0 auto;">
			<div style="padding-top:5px; padding-bottom:5px; margin-left:12px; margin-right:12px;">
<div id="faqWrapper">
<span class="faqHeader">The Big Three Questions</span><br>
	<div class="faqAnchorIndent">
	<a href="#movethelines">How do I move the lines on the map?</a><br>
	<a href="#populationrange">Why must the population be in the range of 640,000 and 650,000?</a><br>
	<a href="#whatispc">What is Political Capital and how do I spend it?</a>
	</div><br>
	
<span class="faqHeader">Overview</span><br>
Choosing a Mission<br>
	<div class="faqAnchorIndent">
	<a href="#chooseamission">How do I choose a mission?</a><br>
	<a href="#outoforder">Can I play the missions out of order?</a><br>
	<a href="#suggestfuturemissions">How do I suggest future missions to the game designers?</a>
	</div><br>
Choosing a Party<br>
	<div class="faqAnchorIndent">
	<a href="#chooseparty">Why must I choose a party?</a><br>
	<a href="#whichpartytoplay">Does it matter which party I play?</a><br>
	<a href="#partybesides">Why can't I choose a party besides Democrat and Republican?</a>
	</div><br>
Understanding Your Mission<br>
	<div class="faqAnchorIndent">
	<a href="#goalofthegame">What is the goal of this game and how do I win?</a><br>
	<a href="#whoami">Who am I as the player of this game?</a><br>
	<a href="#reread">Can I re-read the mission instructions once I start the game?</a><br>
	<a href="#populationrange">Why must the population be in the range of 640,000 and 650,000?</a><br>
	<a href="#boss">Is the Party Head my boss?</a>
	</div><br>
Playing the Game<br>
	<div class="faqAnchorIndent">
	<a href="#winningmission">How do I know if I am winning a mission?</a><br>
	<a href="#threetabs">What are the three tabs on the left side of the screen?</a>
	</div><br>
1: Draw and ReDraw Map<br>
	<div class="faqAnchorIndent">
	<a href="#movethelines">How do I move the lines on the map?</a><br>
	<a href="#littlehouses">What are the little houses on the map?</a><br>
	<a href="#redbluedots">What are the blue and red dots?</a><br>
	<a href="#movereps">Can I move the Reps around to see the map better?</a><br>
	<a href="#undomove">Can I undo a move?</a><br>
	<a href="#bottomtabs">What are the Tabs on the bottom of the map?</a><br>
	<a href="#boxwithnumbers">What is the box with numbers that appears in the left margin?</a><br>
	<a href="#coolmap">How can I share the cool map I made with everyone?</a><br>
	<a href="#removedistrict">Can I remove a district?</a><br>
	<a href="#adddistrict">Can I add a district?</a>
	</div><br>
2: Get Feedback<br>
	<div class="faqAnchorIndent">
	<a href="#getfeedbacktab">How do I use the three tabs within the Get Feedback tab - State Legislature, Governor, and State Courts?</a><br>
	<a href="#completefeedback">How do I complete the "Get Feedback" Tab?</a><br>
	<a href="#whatispc">What is Political Capital and how do I spend it?</a><br>
	<a href="#bribery">Is spending Political Capital the same as bribery?</a><br>
	<a href="#getmore">Why can't I get more Political Capital?</a><br>
	<a href="#nodeal">Does it hurt me to say "no" to a Political Capital deal?</a><br>
	<a href="#whipcount">What is a "whip count"?</a><br>
	<a href="#yeasnays">How do I influence the Yeas and Nays?</a><br>
	<a href="#detractors">Who are these "detractors" on the bottom half of the screen ? they aren't State Legislators ? and why am I dealing with them?</a><br>
	<a href="#influence">How do I influence the Governor?</a><br>
	<a href="#questionmark">The State Courts has a question mark.  How do I know if my plan will be approved?</a><br>
	<a href="#spendpc">Can I spend Political Capital on the State Courts?</a><br>
	<a href="#pcactivists">Can I spend Political Capital on the activists on the screen?</a>
	</div><br>
3: Submit for Approval<br>
	<div class="faqAnchorIndent">
	<a href="#vetoing">Why is the Governor vetoing my map?</a>
	</div><br>
Election Results<br>
	<div class="faqAnchorIndent">
	<a href="#maprejected">Does it hurt me if I Submit for Approval and my map is rejected?</a>
	</div><br>
Survey<br>
	<div class="faqAnchorIndent">
	<a href="#fillingoutsurvey">Do I get anything for filling out the survey?</a>
	</div><br>
Technical Difficulties<br>
	<div class="faqAnchorIndent">
	<a href="#technicalissues">I am having technical difficulties with the game.  What can I do?</a>
	</div><br><br>

<div class="faqHeader"><a name="choosemission">Choosing a Mission</a></div>

<div class="faqQuestion"><a name="chooseamission">How do I choose a mission?</a></div>

<div class="faqAnswer">A: Click on a mission on the mission select page.  You may play the missions in any order.  If it is your first time playing the redistricting game, we recommend playing the missions in numerical order.</div>

<div class="imgWrapper"><img src="graphics/faq/selectmission.gif" width="500" height="251" alt=""></div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="outoforder">Can I play the missions out of order?</a></div>

<div class="faqAnswer">A:  Yes.  You may play the missions out of order.  If it your first time playing the redistricting game, we recommend playing the missions in numerical order.</div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="suggestfuturemissions">How do I suggest future missions to the game designers?</a></div>

<div class="faqAnswer">A:  You may email the usc_interactive@cinema.usc.edu  to suggest a new mission.</div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqHeader">Choosing a Party</div>

<div class="faqQuestion"><a name="chooseparty">Why must I choose a party?</a></div>

<div class="faqAnswer">A:  Traditionally political parties play a large role in the redistricting process.  To simulate a realistic redistricting process the player (you) must have a political party affiliation.</div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="whichpartytoplay">Does it matter which party I play?</a></div>

<div class="faqAnswer">A:  No.  You may play as either party.</div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="partybesides">Why can't I choose a party besides Democrat and Republican?</a></div>

<div class="faqAnswer">A:  The only parties with a substantial impact on the redistricting process are the two major parties.  Other political parties feel the impact of the redistricting process but do not have a large enough national party apparatus to exert major influence.</div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqHeader"><a name="understandmission">Understanding Your Mission</a></div>

<div class="faqQuestion"><a name="goalofthegame">What is the goal of this game and how do I win?</a></div>

<div class="faqAnswer">A:  You win by passing each mission.  To pass a mission your map must be approved by the three branches of the state government.</div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="whoami">Who am I as the player of this game?</a></div>

<div class="faqAnswer">A:  You are a map designer working for your political party.  Your map design must pass the approval process to become law.</div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="reread">Can I re-read the mission instructions once I start the game?</a></div>

<div class="faqAnswer">A:  Yes.  You can click the "Mission" tab on the top of the game page to re-read your mission.</div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="imgWrapper"><img src="graphics/faq/missionbriefing1.gif" width="412" height="241" alt=""><br>
<img src="graphics/faq/missionbriefing_anim.gif" width="485" height="363" alt=""></div>

<div class="faqQuestion"><a name="populationrange">Why must the population be in the range of 640,000 and 650,000?</a></div>

<div class="faqAnswer">A:  As of the 2000 U.S. census, 640,000-650,000 is the population range of typical Congressional districts in the United States.  Population equality for each district ensures the "one person, one vote" guarantee in the Constitution.<br>

Note:  If a state has fewer than 640,000 people, the people of that state still have one Congressional Representative, as guaranteed by the Constitution.</div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="boss">Is the Party Head my boss?</a></div>

<div class="faqAnswer">A:  Sort of.  The Party Head gives you your mission.  You are also constrained by redistricting laws and the interests of various citizens and characters.</div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqHeader"><a name="playinggame">Playing the Game</a></div>

<div class="faqQuestion"><a name="winningmission">How do I know if I am winning a mission?</a></div>

<div class="faqAnswer">A:  There are various status indicators in the game.<br>

On the Draw Map tab:<br>
When you roll your mouse over the map, a statistics box appears in the left margin.  A red X in this box means you have not yet completed the mission objectives.  A green check in this box means you have completed the mission objectives.</div>

<div class="imgWrapper"><img src="graphics/faq/demobox.gif" width="451" height="289" alt=""></div>

<div class="faqAnswer">A green check mark next to a representative means their district is in the correct population range.</div>

<div class="imgWrapper"><img src="graphics/faq/winningmission1.gif" width="470" height="342" alt=""></div>

<div class="faqAnswer">A representative's facial expressions indicate whether or not they are happy with the plan.<br>
You may get direct feedback from the reps by rolling the mouse over them - they will tell you what they are thinking.<br>

On the Get Feedback tab:<br>
This tab will give you direct feedback on whether your plan will pass the state legislature, the governor, and the courts.  Roll over the people on this tab to see exactly what they are thinking.</div>

<div class="imgWrapper"><img src="graphics/faq/getfeedbacksubtabs.gif" width="484" height="364" alt=""></div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="threetabs">What are the three tabs on the left side of the screen?</a></div>

<div class="faqAnswer">A:  The three tabs represent three different stages of completing a redistricting map and getting it passed into law (both in the game and in real life).  The "Draw the Map" tab is where you make changes to the map.  The "Get Feedback" tab is where you get feedback on whether your map will pass the approval process and/or spend political capital.  The "Submit for Approval" tab is how you see whether your map is approved and your mission completed.</div>  

<div class="faqQuestion">More details on each tab can be found below.</div>

<div class="imgWrapper"><img src="graphics/faq/3tabs.gif" width="500" height="387" alt=""></div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqHeader"><a name="drawmap">1: Draw and ReDraw Map</a></div>

<div class="faqQuestion"><a name="movethelines">How do I move the lines on the map?</a></div>

<div class="faqAnswer">A:  Click and drag on the blocks of a district.  Hold the mouse button down until you are done drawing.  When you release the mouse button, the game will recalculate the population for each district.<br>

Note:  Each block on the map represents one census block.</div>

<div class="imgWrapper"><img src="graphics/faq/drawlines_anim.gif" width="380" height="275" alt=""></div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="littlehouses">What are the little houses on the map?</a></div>

<div class="faqAnswer">A:  The houses show where each representative lives.  You may notice that the representatives get angry when you redraw the map so that they no longer live in their own district.  This is because, in real life, a candidate must live within the boundaries of the district he or she wants to represent.</div>

<div class="imgWrapper"><img src="graphics/faq/rephouse_anim.gif" width="334" height="247" alt=""></div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="redbluedots">What are the blue and red dots?</a></div>

<div class="faqAnswer">A: The red and blue dots represent party and population density.  Red dots are Republican voters and blue dots are Democrat voters.  You may also see white dots.  These represent undecided voters.</div>

[redandbluedots.gif]<br><br>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="movereps">Can I move the Reps around to see the map better?</a></div>

<div class="faqAnswer">A: Yes.  You may click and drag the rep boxes around the screen.</div>

<div class="imgWrapper"><img src="graphics/faq/dragarep1.gif" width="487" height="363" alt=""><br>
<img src="graphics/faq/dragarep2.gif" width="487" height="363" alt=""></div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="undomove">Can I undo a move?</a></div>

<div class="faqAnswer">A:  Yes.  You may undo one map move by clicking the "Undo" button in the lower right corner of the Draw Map tab.</div>

<div class="imgWrapper"><img src="graphics/faq/undo_anim.gif" width="487" height="364" alt=""></div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="bottomtabs">What are the Tabs on the bottom of the map?</a></div>

<div class="faqAnswer">A:  The tabs on the bottom of the map are different filters you may apply.  The "Party" filter enables you to see party affiliation and population density via the red and blue dots.  The "Terrain" filter shows you the map with only the terrain of the state.</div>

<div class="imgWrapper"><img src="graphics/faq/partyfilter.gif" width="486" height="363" alt=""><br>
<img src="graphics/faq/terrainfilter.gif" width="486" height="363" alt=""></div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="boxwithnumbers">What is the box with numbers that appears in the left margin?</a></div>

<div class="faqAnswer">A:  The box with numbers shows demographic information for each census block.  Rolling the mouse over a census block shows you the population and party breakdown of that block.  You may want to use this information as you strategize how to redraw the map.</div>

<div class="imgWrapper"><img src="graphics/faq/demobox.gif" width="451" height="289" alt=""></div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="coolmap">How can I share the cool map I made with everyone?</a></div>

<div class="faqAnswer">A: You can click "Print Screen" on a PC or "Apple-Shift-3" on a Mac.  This will capture screen to your clipboard.  From there open any image editing program (such as Windows Paint or Adobe Photoshop) and paste the image.<br>

Share your maps by posting them in the game's online forum at <a href="/">http://redistrictinggame.org</a></div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="removedistrict">Can I remove a district?</a></div>

<div class="faqAnswer">A:  Yes.  You may completely remove a district by drawing another district over it.  The representative from the removed district will appear on the left side of the screen.</div>

<div class="imgWrapper"><img src="graphics/faq/removedistrict_anim.gif" width="486" height="363" alt=""></div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="adddistrict">Can I add a district?</a></div>

<div class="faqAnswer">A:  Only if you have removed a district or are playing Mission 4.  The representative will appear on the left side of the screen and you may place him/her back into a cell to restart the district.</div>

<div class="imgWrapper"><img src="graphics/faq/adddistrict_anim.gif" width="486" height="363" alt=""></div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqHeader"><a name="getfeedback">2: Get Feedback</a></div>

<div class="faqQuestion"><a name="getfeedbacktab">How do I use the three tabs within the Get Feedback tab - State Legislature, Governor, and State Courts?</a></div>

<div class="faqAnswer">A:  Each tab reflects a branch of the state government.  For your map to become law, it must pass through all three branches: the State Legislature, the Governor, and the State Courts.  You can click on each tab to get feedback on how your map stands with each branch of government.</div>

<div class="imgWrapper"><img src="graphics/faq/getfeedback1.gif" width="486" height="363" alt=""><br>
<img src="graphics/faq/getfeedback2.gif" width="486" height="363" alt=""><br>
<img src="graphics/faq/getfeedback3.gif" width="486" height="363" alt=""><br>
<img src="graphics/faq/getfeedback4.gif" width="486" height="363" alt=""></div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="completefeedback">How do I complete the "Get Feedback" Tab?</a></div>

<div class="faqAnswer">A:  The Get Feedback Tab tells you the status of your map and indicates whether your map will pass the Approval Process.  If your map is acceptable to all three branches of government, you should Submit for Approval.  If one of the branches is going to prevent your map from being adopted, you may need to go back and redraw the map.<br>

Note: On the Hard Missions - if the Get Feedback tab indicates your map will not be approved, you also have the option to spend Political Capital to boost you map's chances of approval.</div>

<div class="imgWrapper"><img src="graphics/faq/getfeedback2.gif" width="486" height="363" alt=""></div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="whatispc">What is Political Capital and how do I spend it?</a></div>

<div class="faqAnswer">A:  Political Capital appears in the Hard Missions only.  Political Capital is a resource you can spend to influence different people to accept your map.  To spend Political Capital you roll the mouse over a character and select an amount you would like to spend.</div>

<div class="imgWrapper"><img src="graphics/faq/politicalcapital1.gif" width="486" height="363" alt=""><br>
<img src="graphics/faq/politicalcapital2.gif" width="486" height="363" alt=""></div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="bribery">Is spending Political Capital the same as bribery?</a></div>

<div class="faqAnswer">A:  No.  Political Capital is a simplified representation of real world influence.  Influence can range from simple persuasion, such as educating people on the merits of a map, to an exchange of political favors.</div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="getmore">Why can't I get more Political Capital?</a></div>

<div class="faqAnswer">A:  Political Capital is a limited resource and must be spent wisely.  Once you spend it, it is gone.<br>

Note: You get fresh Political Capital each time you start a mission.</div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="nodeal">Does it hurt me to say "no" to a Political Capital deal?</a></div>

<div class="faqAnswer">A:  No.  In fact, saying "no" allows you to explore other offers.</div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqHeader"><a name="statelegislature">State Legislature</a></div>

<div class="faqQuestion"><a name="whipcount">What is a "whip count"?</a></div>

<div class="faqAnswer">A:  A "whip count" is a preliminary vote count that assesses whether your map will pass the State Legislature.<br>

Note: It's called a "whip count" because in real life it is traditionally administered by the minority or majority whip in the State Legislature.</div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="yeasnays">How do I influence the Yeas and Nays?</a></div>

<div class="faqAnswer">A:  You may go back to the Draw Map screen and redraw the map.  And, on the hard missions you may spend Political Capital on your "detractors" at the bottom of the screen.</div>

<div class="imgWrapper"><img src="graphics/faq/influence.gif" width="486" height="363" alt=""></div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="detractors">Who are these "detractors" on the bottom half of the screen - they aren't State Legislators - and why am I dealing with them?</a></div>

<div class="faqAnswer">A:  The "detractors" on the bottom of the screen are the Congressional Reps of your party, who hold influence over State Legislators.  When you spend Political Capital on a detractor it makes them happier and influences them to secure you more Yea votes from State Legislators.</div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqHeader"><a name="stategovernor">State Governor</a></div>

<div class="faqQuestion"><a name="influence">How do I influence the Governor?</a></div>

<div class="faqAnswer">A:  If the Governor is going to veto, you'll have to go back and redraw the map to appease him/her.  You may also be able to attempt to gain more Yea votes in the State Legislature, until you have enough to override the veto.</div>

<div class="imgWrapper"><img src="graphics/faq/getfeedback3.gif" width="486" height="363" alt=""></div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqHeader"><a name="statecourts">State Courts</a></div>

<div class="faqQuestion"><a name="questionmark">The State Courts has a question mark.  How do I know if my plan will be approved?</a></div>

<div class="faqAnswer">A:  State Courts will not speak out on a plan until a case is brought before them - hence the question mark.  It's very difficult to know for certain how the courts will rule until they actually make their ruling.  The characters on the bottom half of the screen will tell you if they are bringing a court case against your map.  They will also tell you whether or not they think they stand a good chance of winning.</div>

<div class="imgWrapper"><img src="graphics/faq/getfeedback4.gif" width="486" height="363" alt=""></div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="spendpc">Can I spend Political Capital on the State Courts?</a></div>

<div class="faqAnswer">A:  No.  The only action you can take to influence the courts is to revise the map.</div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="pcactivists">Can I spend Political Capital on the activists on the screen?</a></div>

<div class="faqAnswer">A:  No.  You can't influence the activists with Political Capital.  The only action you can take is to revise the map.</div>

<div class="imgWrapper"><img src="graphics/faq/courts.gif" width="486" height="363" alt=""></div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqHeader"><a name="submitapproval">3: Submit for Approval</a></div>

<div class="faqQuestion"><a name="vetoing">Why is the Governor vetoing my map?</a></div>

<div class="faqAnswer">A:  The Governor vetoes the map when it does not suit the interests of his/her party.</div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion"><a name="maprejected">Does it hurt me if I Submit for Approval and my map is rejected?</a></div>

<div class="faqAnswer">A.  No.  You will be able to return to the map and redraw the lines.</div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqQuestion">Is there anything the player does on the Submit for Approval tab?</div>

<div class="faqAnswer">A:  No.  The approval process is out of your hands as a player.</div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqHeader"><a name="electionresults">Election Results</a></div>

<div class="faqQuestion">Election! What election?</div>

<div class="faqAnswer">A:  Redistricting is only important insofar as it affects eventual election outcomes.  Election results are due to many factors, but the map you draw has direct influence on the outcome.  By playing this game you can see how as a mapmaker you can wield tremendous power.</div>
 
<div class="imgWrapper"><img src="graphics/faq/election.gif" width="486" height="363" alt=""></div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqHeader"><a name="survey">Survey</a></div>

<div class="faqQuestion"><a name="fillingoutsurvey">Do I get anything for filling out the survey?</a></div>

<div class="faqAnswer">A:  As a matter of fact, you receive a custom designed political button for your participation in the survey.  There are two different buttons for each mission - one when you play as a Democrat and one when you play as a Republican.  Collect 'em all.</div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

<div class="faqHeader"><a name="technicaldifficulties">Technical Difficulties</a></div>

<div class="faqQuestion"><a name="technicalissues">I am having technical difficulties with the game.  What can I do?</a></div>

<div class="faqAnswer">The game should work on a variety of browsers.  However you will have the least problems if you run the latest version of Adobe Flash and the latest version of the browsers - especially Internet Explorer and Firefox.</div>

<div class="faqReturnToTop"><a href="#returntotop">top</a></div>

</div></div>
		</div>
		<div style="width:700px; height:15px; margin:0 auto 0 auto;"><img src="graphics/pg_00_333333_ll.gif" width="15" height="15" style="float:left;" alt=""><img src="graphics/trans_spacer.gif" width="670" height="15" style="float:left; background-color:#333333;" alt=""><img src="graphics/pg_00_333333_lr.gif" width="15" height="15" style="float:right;" alt=""></div><div style="width:629px; height:15px; margin:20px auto 0 auto;"><img src="graphics/pg_00_ffffff_ul.gif" width="15" height="15" style="float:left;" alt=""><img src="graphics/trans_spacer.gif" width="599" height="15" style="float:left; background-color:#ffffff;" alt=""><img src="graphics/pg_00_ffffff_ur.gif" width="15" height="15" style="float:right;" alt=""></div>
		<div style="width:629px; background:#ffffff; margin:0 auto 0 auto;">
			<div style="padding-top:5px; padding-bottom:5px; margin-left:12px; margin-right:12px; text-align: center; color: #000000;"><a href="/"><img src="graphics/btn_home.gif" width="95" height="28" alt="Home" style="padding-right:5px;"></a><a href="game.php"><img src="graphics/btn_game.gif" width="95" height="28" alt="Game" style="padding-right:5px;"></a><a href="resourceguide.php"><img src="graphics/btn_resources.gif" width="95" height="28" alt="Resources" style="padding-right:5px;"></a><a href="forums.php"><img src="graphics/btn_forums.gif" width="95" height="28" alt="Forums" style="padding-right:5px;"></a><a href="about.php"><img src="graphics/btn_about.gif" width="95" height="28" alt="About" style="padding-right:5px;"></a><a href="takeaction.php"><img src="graphics/btn_takeaction.gif" width="95" height="28" alt="Take Action"></a> </div>
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
