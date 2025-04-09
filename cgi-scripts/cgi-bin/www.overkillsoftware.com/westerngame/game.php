<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="txt/html; charset=utf-8" />
<title>PAYDAY Butcher's Western Pack Bank Shootout</title>
<link rel="stylesheet" href="css/outlaws.css" />
<link rel="stylesheet" href="css/jquery-ui.min.css" />
<link rel="stylesheet" href="css/jquery-ui.structure.min.css" />
<link rel="stylesheet" href="css/jquery-ui.theme.min.css" />
<script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-48410904-7']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/circle-progress.js"></script>
<script type="text/javascript" src="js/outlaws.js"></script>

<!--[if lte IE 8]>
<style type="text/css">
#oldbrowser{display:block !important;}
</style>
<![endif]-->
</head>
<body data-music='yes' data-sound='yes'>
<div id="maincanvas">
<div id="soundcontrol">
<a href="javascript:void(0);" id="soundcontrolprivacypolicy" onclick="togglePrivacyPolicy();">[Privacy Policy]</a>
<a href="javascript:void(0);" id="soundcontrolmusic" onclick="toggleMusic();">Music: [<span>On</span>]</a>
<a href="javascript:void(0);" id="soundcontrolsfx" onclick="toggleSfx();">SFX: [<span>On</span>]</a>
</div>
<div id="mousehitbox">
<div id="targetboxes">
<div id="targetbox1"></div>
<div id="targetbox2"></div>
<div id="targetbox3"></div>
<div id="targetbox4"></div>
<div id="targetbox5"></div>
<div id="targetbox6"></div>
<div id="targetbox7"></div>
<div id="targetbox8"></div>
<div id="targetbox9"></div>
<div id="targetbox10"></div>
</div>
<div id="mousecrosshair"></div>
</div>
<div id="fpsgun"></div>
<div class="hitboxes">
<div class="hitboxnormalguy hitboxguy1 "></div>
<div class="hitboxnormalguy hitboxguy2 "></div>
<div class="hitboxnormalguy hitboxguy3 "></div>
<div class="hitboxnormalguy hitboxguy4 "></div>
<div class="hitboxnormalguy hitboxguy5 "></div>
<div class="hitboxnormalguy hitboxguy6 "></div>
<div class="hitboxnormalguy hitboxguy7 "></div>
<div class="hitboxnormalguy hitboxguy8 "></div>
<div class="hitboxnormalguy hitboxguy9 "></div>
<div class="hitboxnormalguy hitboxguy10 "></div>
<div class="hitboxspecialguy hitboxguy1"></div>
<div class="hitboxspecialguy hitboxguy2"></div>
<div class="hitboxspecialguy hitboxguy3"></div>
<div class="hitboxspecialguy hitboxguy4"></div>
<div class="hitboxspecialguy hitboxguy5"></div>
<div class="hitboxspecialguy hitboxguy6"></div>
<div class="hitboxspecialguy hitboxguy7"></div>
<div class="hitboxspecialguy hitboxguy8"></div>
<div class="hitboxspecialguy hitboxguy9"></div>
<div class="hitboxspecialguy hitboxguy10"></div>
<div class="hitboxcivvy hitboxguy1"></div>
<div class="hitboxcivvy hitboxguy2"></div>
<div class="hitboxcivvy hitboxguy3"></div>
<div class="hitboxcivvy hitboxguy4"></div>
<div class="hitboxcivvy hitboxguy5"></div>
<div class="hitboxcivvy hitboxguy6"></div>
<div class="hitboxcivvy hitboxguy7"></div>
<div class="hitboxcivvy hitboxguy8"></div>
<div class="hitboxcivvy hitboxguy9"></div>
<div class="hitboxcivvy hitboxguy10"></div>
</div>
<div class="misfires">
</div>
<div class="windowsndoors">

<div class="window window2"></div>

<div class="window window5"></div>

<div class="window window7"></div>
<div class="window window9"></div>

<div class="balcony"></div>
<div class="doorleft"></div>
<div class="doorright"></div>
</div>
<div id="saloonbg"></div>
<div id="saloonbgback"></div>
<div id="timeleftcontainer">
<div id="timelefttitle">Time Remaining</div>
<div id="timeleftcircle"></div>
<div id="timelefttimer">30</div>
</div>
<div id="scoreContainer">

$0
</div>
</div>
<div id="titlescreen">
<p><a href="javascript:void(0);" onclick="showInfoScreen();" class="bigbutton animootedbutton startbutton"> <img src="img/text-start.png" alt="Start" /></a></p>
</div>
<div id="startgame">
<p><img src="img/mainlogo2alt.png" alt="Bank Shootout" width="271" height="93" /></p>
<p>The entry deadline for competition scores <span class="red">has now passed!</span> You can still play the Bank Shootout for fun though!</p>
<p class="big">
<img src="img/howtoplay.png" alt="" />
<br />Shoot ENEMY targets to increase your bounty and gain extra time, but shooting a HEISTER will cost you time and points.</p>
<p><a href="javascript:void(0);" onclick="startNewGame();" class="bigbutton animootedbutton"> <img src="img/text-begin.png" alt="Begin" /></a></p>
</div>
<div id="gameover">
<p><img src="img/mainlogo2alt.png" alt="Bank Shootout" width="271" height="93" /></p>
<p class="big">GAME OVER</p>
<p>Your bounty this attempt was: $<strong id="finaltime"></strong></p>
<p class="scorebest"></p>
<p><a href="javascript:void(0);" id="playagainbutton" class="bigbutton" onclick="startNewGame();"><img src="img/text-playagain.png" alt="Play Again" /></a></p>
</div>
<div id="sharepage"></div>
<div id="bigtext"></div>
<a href="http://www.overkillsoftware.com" class="ovklogo" target="_blank"><img src="img/Overkill_logo.png" alt="OVERKILL" /></a>
<div id="oldbrowser">
<p><img src="img/mainlogo2alt.png" alt="Bank Shootout" width="271" height="93" /></p>
<p class="big">YOUR BROWSER IS TOO OLD!</p>
<p>You will need to upgrade your browser in order to play the Bank Shootout.</p>
<p>Please download one of the following browsers:</p>
<p><a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie" target="_blank">&#8226; Internet Explorer 10+</a></p>
<p><a href="https://www.mozilla.org/firefox/" target="_blank">&#8226; Mozilla Firefox</a></p>
<p><a href="https://www.google.com/chrome/" target="_blank">&#8226; Google Chrome</a></p>
<p><a href="https://www.opera.com/" target="_blank">&#8226; Opera</a></p>
</div>
<div id="privacypolicy">
<p><img src="img/mainlogo2alt.png" alt="Bank Shootout" width="271" height="93" /></p>
<p class="big">PRIVACY POLICY</p>
<p class="left">THE BANK SHOOTOUT contest start on April 30 18:00hrs GMT +1 and ends at May 4 18:00hrs GMT +1.</p>
<p class="left">Each of the top 30 High scores will be rewarded with a code will give access to download:<br />
<b>PAYDAY 2 GOTY Edition + The Butcher's Western Pack</b></p>
<p class="left">In order to participate, the user must post their score in Facebook in public status using the hashtag #PAYDAY2Western. </p>
<p>When submitting your email address, it will not be sold onto 3rd parties and will only be used to contact you if you are the winner.</p>
<p class="left">When Posting to Facebook, we will be given access to your Real Name and User ID (And Email Address if given permission).This is so we can contact winner once the competition is over. </p>
<p class="left">The winners will be announced on May 7 18:00hrs GMT+1 on http://www.overkillsoftware.com/games/butcherswesternpack/ and they will be contacted via facebook by The OVERKILL Stuff.</p>
<p class="left">Consider that The bank Shootout contains Google Analytics, so we will be able to track how many people play the game and for how long!</p>
<p><a href="javascript:void(0);" onclick="togglePrivacyPolicy();" class="bigbutton animootedbutton"> <img src="img/text-close.png" alt="Close" /></a></p>
</div>
<div id="emailscore">
</div>
<audio id="backgroundMusic" autoplay="true" loop="true">
<source src="sound/western_pack_website.mp3" type="audio/mpeg" />
<source src="sound/western_pack_website.ogg" type="audio/ogg" />
</audio>

<div id="soundcontainer"></div>
</body></html>