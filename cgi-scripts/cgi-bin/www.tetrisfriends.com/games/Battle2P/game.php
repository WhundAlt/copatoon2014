<!--
	Note: This is a custom HTML/PHP wrapper based on the original site.
	This is NOT the original!
-->
<?php
  /* by obelisk */

	/** Path of the backend folder (I wish I knew a cleaner way of doing this). */
	$backendPath = '../../../api.tetrisfriends.com/_backend';
	
	include_once $backendPath.'/users.php';
	include_once $backendPath.'/session.php';

	// Start/Continue a session
	// (This makes it possible to easily store data for this "session")
	sessionStart();

	// Check if the user is logged in
	// If logged in
	//   Then continue as usual (get the user data from the session)
	// Else
	//   Set the variables to the guest values
	//$session_id    = sessionGet('session_id',    'oqt2Os172VQ=');
	//$session_token = sessionGet('session_token', 'dee1526046b87df2fb44818f206b812f3baead06:d266c255e5af865a85aa797968746518508c20c6');
	//$username      = sessionGet('username',      'Guest');
	//$user_avatar   = sessionGet('user_avatar',   10);c9094342a1e0dc88669e5aba3792c811a4004b1f:a526cc69e638ebb37ae3a7663dc87bbc3ea443e1
	//$tf_uid        = sessionGet('tf_uid',        123);
	//$logged_in     = (boolean) sessionGet('logged_in');

	//$session_id     = sessionGet('session_id');
	$user_id        = sessionGet('user_id');
	$tf_uid         = sessionGet('tf_uid');
	$user           = ($user_id !== NULL) ? simplexml_load_string(loadUser($user_id)) : NULL;
	$session_id     = $user ? (string)$user->session_id : sessionGuestSessionID();
	$username       = $user ? (string)$user->username : 'Guest';
	$user_avatar    = $user ? (string)$user->avatar : '0';
	$logged_in      = $user ? true : false;
	$session_token  = sessionGenerateToken($logged_in);
	$login_id       = sessionGenerateLoginID($logged_in);
	$email_verified = 1;

	//var_dump($user, $username, $session_id, $session_token, $login_id, $logged_in);

	//if ($logged_in) {
	//	$email_verified = sessionGet('email_verified', $email_verified);
	//}

	// Session ID - Same value across a single login (log out to reset this)
	//$session_id = 'oqt2Os172VQ=';
	// Session Token - New value every time this is requested
	//$session_token = 'dee1526046b87df2fb44818f206b812f3baead06:d266c255e5af865a85aa797968746518508c20c6';
	/** Timestamp of when the game was started. */
	$time_stamp = time();
	/** The displayed name of the user. */
	//$username = 'Flash';
	/** ID of the users avatar. */
	//$user_avatar = 55;
	/** If the users email adress is verified (0 or 1). */
	//$email_verified = 0;
	/** If the user is currently logged in. */
	//$logged_in = false;
	/** TetrisFriends User ID (maybe?) */
	//$tf_uid = 7296827;
	/** IP Adress of the client (i just made one up). */
	$ip_adress = '55.55.55.55';
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>

		<meta http-equiv='X-UA-Compatible' content='IE=EmulateIE7' /><!-- Tetris Friends Header META Data (_headMeta.inc) -->
		<title>Tetris Battle 2P - Free online Tetris game at Tetris Friends</title>
		<meta name="description" content="Play Tetris Battle 2P online for FREE! Play a two minute game against an opponent in this browser-based authentic Tetris game mode." />
		<meta name="google-site-verification" content="PUFXUZk_dDxsvRXfLGX-iQW6nvA1O-T-FhN-G9mORJw" />
		<meta name="y_key" content="3282811995aadfa5" />
		<meta name="keywords" content="tetris, friends, online, games, free, official, authorized, play, simple, fun, flash, multiplayer, puzzle, alexey, pajitnov, live, tetrimino, t-spin, harddrop, freetetris, tetrislive, nintendo, gameboy, authentic, wii, ds, henk, " />
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(3),u=e(4),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],t),e}finally{f.emit("fn-end",[c.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e,n){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now(),!1,n])}},{}],2:[function(e,n,t){function r(e,n){if(!o)return!1;if(e!==o)return!1;if(!n)return!0;if(!i)return!1;for(var t=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var u=navigator.userAgent,f=u.match(a);f&&u.indexOf("Chrome")===-1&&u.indexOf("Chromium")===-1&&(o="Safari",i=f[1])}n.exports={agent:o,version:i,match:r}},{}],3:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],4:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],5:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=v(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||o(t)}function w(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(3),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!E++){var e=x.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+x.offset],null,"api");var t=l.createElement("script");t.src="http://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===l.readyState&&i()}function i(){f("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-x.offset}var u=(new Date).getTime(),f=e("handle"),c=e(3),s=e("ee"),p=e(2),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1123.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:u,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),l[m]?(l[m]("DOMContentLoaded",i,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",o),d[v]("onload",r)),f("mark",["firstbyte",u],null,"api");var E=0,O=e(5)},{}]},{},["loader"]);</script>
		<meta http-equiv="Content-Style-Type" content="text/css" />
		<meta http-equiv="Content-Script-Type" content="text/javascript" />

		<!-- Import shared styles -->
		<link rel='stylesheet' href='//www.tetrisfriends.com/shared_edited_styles.css' type='text/css' />

		<!-- Tetris Friend Common Header (_head.inc) -->
		<!--[if IE]>
			<meta http-equiv="Pragma" content="no-cache" />
			<meta http-equiv="Expires" content="-1" />
		<![endif]-->
		<link rel="shortcut icon" href="//tetrisow-a.akamaihd.net/data5_0_1_1/images/favicon.ico" />
		<link rel='stylesheet' href='//tetrisow-a.akamaihd.net/data5_0_1_1/stylesheets/combined.min.css' type='text/css' media='screen' />		<script type='text/javascript' src='//tetrisow-a.akamaihd.net/data5_0_1_1/javascripts/combined.min.js' charset='utf-8'></script>		<script type='text/javascript' src='//tetrisow-a.akamaihd.net/data5_0_1_1/javascripts/ads/showads.js' charset='utf-8'></script>		<script type='text/javascript'>
			shadowboxInit(true, false,'//tetrisow-a.akamaihd.net/data5_0_1_1/javascripts/shadowbox3/players/flvplayer4_3_1.swf');
		</script>
		<script type='text/javascript'>
			// -- Inserted by the server (probably) --
			var AD_AKAMAI_PATH = '//tetrisow-a.akamaihd.net/data5_0_1_1';
			var TOA_IS_LOGGED_IN = <?php echo $logged_in ? 'true' : 'false'; ?>;
			var TF_UID = <?php echo $tf_uid; ?>;
			// --
		</script>
		<script language="javascript" type="text/javascript">
			<!--
			var jsVersion = 10;
			-->
		</script>
		<script language="javascript1.1" type="text/javascript">
			<!--
			jsVersion = 11;
			-->
		</script>
		<script language="javascript" type="text/javascript">
			<!--
			OAS_INIT('', 'XE&amp;status=active&amp;ar=3&amp;gg=0&amp;us=1&amp;XE', 'results/battle2P', jsVersion);
			checkGuest('<?php echo $ip_adress; ?>', 'www.tetrisfriends.com', '/games/Battle2P/game.php', '<?php echo $time_stamp; ?>');
			-->
		</script>

<script type='text/javascript' src='/ads/toa_ads.js.php?listpos=x79&XE&amp;status=active&amp;ar=3&amp;gg=0&amp;us=1&amp;XE&productId=100'></script>
		<!--[if lt IE 7]>
			<link rel="stylesheet" href="//tetrisow-a.akamaihd.net/data5_0_1_1/stylesheets/extra/ie6_pngfix.css" type="text/css" media="screen" />
		<![endif]-->

		<!-- Start Google Wrapper -->
		<script type="text/javascript">
    		window._gat = {
        			_getTracker: function () {
            			return {
            				_trackEvent: function (category, action, opt_label, opt_value) {
                				if ((!tfGDPREnabled || (tfGDPREnabled && isCookieConsentGiven("analytical"))) && ga) {
									ga('send', 'event', category, action, opt_label, opt_value);
                				}
                			},
            				_trackPageview: function (opt_pagePath) {
                				if ((!tfGDPREnabled || (tfGDPREnabled && isCookieConsentGiven("analytical"))) && ga) {
									ga('send', 'pageview', opt_pagePath);
                				}
                			},
            			}
        			},
        	};
		</script>
		
				<!-- Google DFP -->
				<!-- (Disable ads)
        <script>
          var tfGDPREnabled = 1;; 
          var tfPersonalAdsConsent = 0;
          var tfNonPersonalizedAds = tfPersonalAdsConsent ? 0 : 1;
        </script>
        
        <script>
          var tfAdUnits = [
            { id: 'div-gpt-ad-1530321395777-0', path: '/1607548/TF-SSL_LEFTRAIL_ROS', sizes: [[160, 600], [300, 600]] },
			{ id: 'div-gpt-ad-1530321395777-1', path: '/1607548/TF-SSL_RIGHTRAIL_ROS', sizes: [[160, 600], [300, 600]] },
			{ id: 'div-gpt-ad-1530321395777-2', path: '/1607548/TF-SSL_HP_ATF', sizes: [[300, 250]] },
			{ id: 'div-gpt-ad-1530321395777-4', path: '/1607548/TF-SSL_300x250_ROS', sizes: [[300, 250]] },
			{ id: 'div-gpt-ad-1530321395777-3', path: '/1607548/TF-SSL_728x90_ROS', sizes: [[728, 90]] }
          ];
        </script>
        
        <script async='async' src='http://www.googletagservices.com/tag/js/gpt.js'></script>
        <script>
          var googletag = googletag || {};
          googletag.cmd = googletag.cmd || [];
        </script>
        
        <script>
          googletag.cmd.push(function() {
			for (var i = 0; i < tfAdUnits.length; i++) {
				googletag.defineSlot(tfAdUnits[i].path, tfAdUnits[i].sizes, tfAdUnits[i].id).addService(googletag.pubads());
			}
            googletag.pubads().disableInitialLoad(); // disable for APS
            googletag.pubads().enableSingleRequest();
            googletag.pubads().setRequestNonPersonalizedAds(tfNonPersonalizedAds);
            googletag.enableServices();
          });
				</script>
		-->

		<!-- Amazon APS -->
		<!-- (Disable ads)
        <script>
          // create slot objects for APS
		  var apsSlots = [];
		  for (var i = 0; i < tfAdUnits.length; i++) {
			  apsSlots.push({
				  slotID: tfAdUnits[i].id,
				  slotName: tfAdUnits[i].path,
				  sizes: tfAdUnits[i].sizes
			  });
		  }
        
          //load the apstag.js library
          !function(a9,a,p,s,t,A,g){if(a[a9])return;function q(c,r){a[a9]._Q.push([c,r])}a[a9]={init:function(){q("i",arguments)},fetchBids:function(){q("f",arguments)},setDisplayBids:function(){},targetingKeys:function(){return[]},_Q:[]};A=p.createElement(s);A.async=!0;A.src=t;g=p.getElementsByTagName(s)[0];g.parentNode.insertBefore(A,g)}("apstag",window,document,"script","//c.amazon-adsystem.com/aax2/apstag.js");

          //initialize the apstag.js library on the page to allow bidding
          apstag.init({
             pubID: 'dd30a678-cde3-4417-8603-9709311f07ab',
             adServer: 'googletag'
          });
          apstag.fetchBids({
             slots: apsSlots,
             timeout: 2e3
          }, function(bids) {
             // set apstag targeting on googletag, then trigger the first DFP request in googletag's disableInitialLoad integration
             googletag.cmd.push(function(){
                 apstag.setDisplayBids();
                 googletag.pubads().refresh();
             });
          }); 
				</script>
		-->
		<style type="text/css">
			div.game_results_mini_profile a.home_profile_avatar img,
			div.game_results_mini_profile a img.home_profile_avatar,
			div.game_results_mini_profile img.home_profile_avatar
			{
				position: absolute;
				top: 8px;
				left: 6px;
				height: 60px;
				width: 60px;
			}
		</style>
	</head>

	<body>
		

		<!-- GDPR - Cookie Control -->
		<!-- (Disable this)
		<script src="http://cc.cdn.civiccomputing.com/8.0/cookieControl-8.0.min.js"></script>
        <script>
            var config = {
                apiKey: 'b3200ea6ca83d79e006f63ec0613df563801c493',
                product: 'COMMUNITY',
                text: {
                    title: 'This site uses cookies.',
                    intro:  'Some of these cookies are essential, while others help us to improve your experience by providing insights into how the site is being used.',
                	necessaryTitle : 'Necessary Cookies',
                    necessaryDescription : 'Necessary cookies enable core functionality. The website cannot function properly without these cookies, and can only be disabled by changing your browser preferences.',
                },
                statement: {
                  description: 'For more information visit: ',
                  name : 'Privacy Statement',
                  url: 'http://tetrisonline.com/privacy',
                  updated : '2018/05/21'
                },
                position: 'LEFT',
                theme: 'LIGHT',
                initialState: "CLOSED",
                consentCookieExpiry: 365,
                necessaryCookies: ['PHPSESSID', 'rememberMe', 'autoJoinRoomId', 'autoJoinRoomName', 'policy', 'cookie', 'npa', 'pa'],
                optionalCookies: [
                    {
                        name: 'social',
                        label: 'Social Plugin Cookies',
                        description: 'Social Plugin cookies add additional features such as the ability to use Facebook to log in. Disabling this may cause some features to not work properly.',
                        cookies: ['TFFC'],
                        onAccept: function() {
                            window.fbAsyncInit = function() {
                            	//initFBConnect("","","",true,false,"","http://www.tetrisfriends.com"); // (Disable facebook stuff)
                            };
                            
                            (function(d, s, id){
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) {return;}
                                js = d.createElement(s); js.id = id;
                                js.src = "http://connect.facebook.net/en_US/sdk.js";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        },
                        onRevoke: function () {
                            delete('TFFC');
                            
                            fb_hideGuestUpsell();
                        },
                        thirdPartyCookies: [
                            {"name": "Facebook", "optOutLink": "http://www.facebook.com/policies/cookies/"},
                            {"name": "Twitter", "optOutLink": "http://twitter.com/en/privacy"}
                        ],
                        initialConsentState: "on"
                    },
                	{
                        name : 'analytical',
                        label: 'Analytical Cookies',
                        description: 'Analytical cookies help improve the website by allowing us to tracking our website&rsquo;s usage.',
                        cookies: ['guest_cookie', 'tf_games_played_3', '_ga', '_gid', '_gat', '__utma', '__utmt', '__utmb', '__utmc', '__utmz', '__utmv'],
                        onAccept: function() {
							// Google Analytics
                            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                                    })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');
                            
                            ga('create', 'UA-886022-5', 'auto');
                            ga('send', 'pageview');
                        },
                        onRevoke: function() {
                        	// TF Tracking
                        	delete('guest_cookie');
                        	delete('tf_games_played_3');
                        	
                        	// Google Analytics
                        	window['ga-disable-UA-886022-5'] = true;
                        },
                        thirdPartyCookies: [
                            {"name": "Google", "optOutLink": "http://www.google.com/settings/ads"},
                            {"name": "ScorecardResearch", "optOutLink": "http://www.scorecardresearch.com/Preferences.aspx"}
                        ],
                        
                        initialConsentState: "on"
            	    },
                	{
                        name : 'marketing',
                        label: 'Marketing Cookies',
                        description: 'Marketing cookies help improve the quality ads displayed to users.',
                        cookies: [ 'TFIHA', '__gads', '__gac'],
                        onAccept: function() {
                        },
                        onRevoke: function() {
                            delete('TFIHA');
                        	delete('__gads');
                        	delete('__gac');
                        },
                        thirdPartyCookies: [{"name": "Google", "optOutLink": "http://www.google.com/settings/ads"}],
                        initialConsentState: "off"
            	    }
                ]
            };
            
            CookieControl.load( config );
				</script>
			-->

        
        <script type="text/javascript">
        	            
        	
        	        </script>
		
		<!-- Tetris Friends Top Navigation Bar (_topnav.inc) -->
		<div id='fb_notice' class='fb_notice'></div>
		<div id='tetris_token_notice' class='tetris_token_notice'></div>	
						

		<div id="header" class="tetris_header tetris_game_header" >
			<div id="tetris_header_mouseover" class="tetris_header_mouseover"></div>
			<div class="tetris_friends_logo">
				<a href="//www.tetrisfriends.com/games/Battle2P/game.php" title="Play Free Games at Tetris Friends"><h1>Tetris Friends</h1></a>
			</div>
			<div class="tetris_header_description tetris_hide_text">Online Games</div>
			<div class="tetris_games_counter">&nbsp;</div>
			<div class="tetris_top_nav">
				<ul>
					<li class="home"><a href="/" title="Return Home">Home</a></li>
					<li class="gamesPage"><a href="/games/index.php" title="Play Free Games">Tetris Games</a></li>
					<li class="profile"><a href="/users/profile.php?id=<?php echo $tf_uid; ?>&linkTag=nav" title="Visit Your Profile">My Profile</a></li>
					<li class="friends"><a href="/friends/index.php" title="Visit Your Tetris Friends List">Friends</a></li>
					<li class="shop"><a href="/shop/index.php" title="Customize Your Tetris Experience">Tetris Shop</a></li>
					<li class="missions"><a href="/missions/index.php" title="Challenge Yourself to Tetris Missions">Tetris Missions</a></li>
					<li class="community"><a href="/leaderboard/index.php" title="View the Tetris Leaderboards">Tetris Leaderboard</a>

<!--
						<div class="tetris_sub_menu" onmouseover='$(this).addClass("tetris_sub_menu_hover");' onmouseout='$(this).removeClass("tetris_sub_menu_hover");'>
							<a href="javascript:void(0)" title="Be a part of the Tetris Community">Community</a>
							<ul class="tetris_sub_menu_items">
								<li class="leaderboard"><a href="/leaderboard/index.php" title="View the Tetris Leaderboards">Tetris Leaderboard</a></li>
								<li class="gallery"><a href="/gallery/index.php" title="View the Tetris Gallery">Tetris Gallery</a></li>
								<li class="news"><a href="/news/index.php" title="View Latest Tetris News">Tetris News</a></li>
							</ul>
						</div>
-->
					</li>
					<li class="help"><a href="/help/tips.php" title="Learn Tetris Tips and Strategies">Tetris Tips</a></li>
				</ul>
				
				
				
			</div>
			<div class="tetris_login_area">
				<table>
					<tr>
						<td valign="top">
							<div class="fb_top_nav" style="display: none">
   <a href="javascript:void(0)" class="fbconnect_login_button" disabled title="Please enable Social Plugin Cookies to use this feature!" style="filter: gray; -webkit-filter: grayscale(1); -webkit-filter: grayscale(100%); filter: grayscale(1); filter: grayscale(100%);"></a>							</div>
						</td>
						<td valign="top">
							<?php
							  echo (
									$logged_in ? (
										'<a class="button button_small_grey button_small_grey_signout" href="/users/process.php?logout" alt="Sign out">Sign Out</a>'
									) : (
										'<a class="button button_small_grey button_small_grey_login" href="http://www.tetrisfriends.com/users/login.php?linkTag=nav" title="Login">Login</a>'.
										'</td>														</td>'.
										'<td valign="top">'.
										'<a class="button button_small_grey button_small_grey_register" href="http://www.tetrisfriends.com/users/register.php?saveGame=true&linkTag=nav" title="Register">Sign-up</a>'
									)
								);
							?>
						</td>						
						<td valign="top">
							<a class="button button_small_grey button_small_grey_help" href="/help/help.php" title="View the Help Section">Help</a>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div id="fb-root"></div>

		<div id="wrapper">
			
<div id="rail_left" style="width: 300px; left: -300px; text-align: right;">
	<!-- /1607548/TF-SSL_LEFTRAIL_ROS -->
    <div id='div-gpt-ad-1530321395777-0' style='height:600px; min-width:160px;'>
    <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1530321395777-0'); });
    </script>
    </div>
</div>

<div id="rail_right">
    <!-- /1607548/TF-SSL_RIGHTRAIL_ROS -->
    <div id='div-gpt-ad-1530321395777-1' style='height:600px; min-width:160px;'>
    <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1530321395777-1'); });
    </script>
    </div>
</div>
			<div id="container">
								<div id="home_custom_ad_container" class="home_custom_ad_container" align="center" style="height: auto; padding-bottom: 10px;">
				  	<div id="home_custom_ad_content" class="home_custom_ad_content">
					<script language="JavaScript" type="text/javascript"></script>					</div>
				</div>
				<div id="game_container" class="game_container">
					<div id = 'game_side_menu' class = 'game_side_menu'>
<div id = 'game_side_buttons' class = 'game_side_buttons'><a id = 'game_tutorial' href='javascript:tetrisGameInstructions()'		 class='button button_round_side button_round_tutorial game_tutorial_button' ></a><a id = 'game_options' href='javascript:tetrisGameOptions()' class='button button_round_side button_round_options game_options_button' ></a></div>&nbsp;
</div>					
					<!-- Content -->
					<div id="game_swf" class="game_swf">
						<div id="contentFlash">
							<div id="errorMessage">
								<noscript>Tetris Friends requires that Javascript is enabled in order to
								properly display. <br />
								Please check that your browser has Javascript enabled and reload the
								page.</noscript>
							</div>
						</div>
					</div>
					<div id="game_hidden_swf" class="game_hidden_swf">
						<div id="contentHiddenFlash">
						</div>
					</div>
					<div class='game_loading game_loading_Battle2P'>
						<div class='game_loading_anim'>
							<div class='game_loading_header' style='background: url(//tetrisow-a.akamaihd.net/data5_0_1_1/images/games/Loading_Battle2P_logo.png) no-repeat;'></div>
							<div class='game_loading_sub_header'>This game is brought to you by</div>
						</div>
						<iframe id='game_preroll_container' class='game_preroll_container' frameborder='0' scrolling='no' align='center' width='800' height='385' allowTransparency='true'></iframe>
						<div class='game_loading_footer'>
							<div class='button blue_skip_btn margincenter' onclick='gamePrerollComplete()' style='position: relative; top: 15px; display: none;'></div>
						</div>
					</div>
				</div>

				<br />
				<div class="clear"></div>

				
				<!-- Tetris Friends Footer SEO Data (_footerSEO.php) -->
<br /><div class='home_seo_text'>Tetris&reg; is one of the most popular electronic games of all time. In Tetris Battle 2P, you can play another opponent in a two&ndash;minute match for the top spot. Clear multiple lines and perform big moves and combos to force your opponent to the brink. When you take on tough opponents in Tetris Battle 2P, you better have an understanding of all of your weapons: T&ndash;Spins, Tetrises, and Combos are all valuable tools. This game mode is FREE to play and doesn&rsquo;t require any special downloads to install.</div>				
				<!-- Bottom Navigation Bar (_bottomnav.inc) -->
				<div id="footer" class="tetris_footer">
					<div class="tetris_authentic_logo">
						<a href="http://www.tetris.com" title="Visit Tetris.com" target="_blank">Tetris</a>
					</div>
					<div class="tetris_copyright">
						<img width="585px" height="56px" src="//tetrisow-a.akamaihd.net/data5_0_1_1/images/bottom/copyright.png" alt="Tetris" />
					</div>
					<div class="tetris_bottom_nav">
						<ul>
							<li><a id="footerSupportLink" href="mailto:support@tetrisonline.com" title="Contact Support">Support</a></li>
							<li><a href="/sitemap/" target="_blank" title="View Tetris Friends Sitemap">Sitemap</a></li>
							<li><a href="http://tetrisonline.com/privacy" target="_blank" title="View Tetris Friends Privacy Policy">Privacy Policy</a></li>
							<li class="last"><a href="http://tetrisonline.com/tou" target="_blank" title="View Tetris Friends Terms of Use">Terms of Use</a></li>
						</ul>

						<span id="share">
							<a class="button button_small_grey button_small_grey_sharethisgame" href="javascript:void(0)" onclick="displayShareThisPopup()">&nbsp;</a>
						</span>
					</div>
				</div>
				<div class="tetris_gradient_blue">&nbsp;</div><div class="tetris_gradient_purple">&nbsp;</div><div class="tetris_gradient_violet">&nbsp;</div><div class="tetris_gradient_red">&nbsp;</div>
				<div class="clear"></div>			</div> <!-- container -->
			<div id="home_ad_left_rail" class="home_ad_left_rail png_fix"></div>
			<div id="home_ad_right_rail" class="home_ad_right_rail png_fix"></div>
			
		</div> <!-- wrapper -->

		<div id='game_preroll_script' style='display:none;'>
			<iframe id='game_preroll_script_iframe' frameborder='0' scrolling='no' align='center'></iframe>
		</div>
		
				
		<!-- Common Page elements added just before the body tag is closed (_bodyend.inc) -->
		<!-- Start Google Wrapper -->
		<script type="text/javascript">
    		window._gat = {
        			_getTracker: function () {
            			return {
            				_trackEvent: function (category, action, opt_label, opt_value) {
                				if ((!tfGDPREnabled || (tfGDPREnabled && isCookieConsentGiven("analytical"))) && ga) {
									ga('send', 'event', category, action, opt_label, opt_value);
                				}
                			},
            				_trackPageview: function (opt_pagePath) {
                				if ((!tfGDPREnabled || (tfGDPREnabled && isCookieConsentGiven("analytical"))) && ga) {
									ga('send', 'pageview', opt_pagePath);
                				}
                			},
            			}
        			},
        	};
		</script>
		
		<script type="text/javascript">
			updateSupportLinks('<?php echo $logged_in ? $tf_uid : 'Guest'; ?>');
		</script>
		
				<!-- Begin comScore Tag -->
		
		<script>
		    document.write(unescape("%3Cscript src='" + (document.location.protocol == "http:" ? "http://sb" : "http://b") + ".scorecardresearch.com/beacon.js' %3E%3C/script%3E"));
		</script>
		
		<script>
		  // obtain page location then remove http:// and PHP query params
		  var pageLocation = window.location.href;
		  pageLocation = pageLocation.replace(/http:\/\//, "");
		  pageLocation = pageLocation.split("?");
		  pageLocation = pageLocation[0];  
		
		  COMSCORE.beacon({
		    c1:2,
		    c2:5619092,
		    c3:"",
		    c4:pageLocation,
		    c5:"",
		    c6:"",
		    c15:""
		  });
		
		</script>
		
		<noscript>
		  <img src="http://b.scorecardresearch.com/b?c1=2&c2=5619092&c3=&c4=&c5=&c6=&c15=&cv=1.3&cj=1" style="display:none" width="0" height="0" alt="" />
		</noscript>
		
		<!-- End comScore Tag -->		
		<script type='text/javascript'>
		    // New status and CACHE TIMEOUTS are now in place, so we need to trigger
		    // this reload session more often... if in-game it will run indefinitely,
		    // if on any other page, it will stop after timeout specified below.
			var keepAliveMSEC = 80 * 1000; // two thirds of cache timeout
			var keepAliveLimitMSEC = -1; // 15 min timeout if not in-game
			var keepAliveCount = 0;
			var reloadIntervalId = -1;

		    
		    function startReloadSessionInterval() {
				reloadIntervalId = setInterval("triggerReloadSession()", keepAliveMSEC);
			}
	
			function stopReloadSessionInterval() {
				if (reloadIntervalId) {
					clearInterval(reloadIntervalId);
				}
			}
			
			function triggerReloadSession() {
				if (keepAliveLimitMSEC == -1 || (keepAliveCount < (keepAliveLimitMSEC/keepAliveMSEC))) {
					$.ajax({
						type: "GET",
						url: "/users/ajax/refresh_session.php",
						dataType: "text",
						success: function(response){
							//alert("Response: " + response);
						}
					});
				} else {
					stopReloadSessionInterval();
				}
				keepAliveCount++;
			}

			$(document).ready(function() {
				<?php if ($logged_in) { echo 'startReloadSessionInterval();'; } ?>
			});
			
			pageTracker = _gat._getTracker("UA-886022-5");
			if (typeof(TFHouseAdsEnable) != "undefined") {
				pageTracker._trackEvent("AdsBlocked", "Blocked", "false");
			} else {
				pageTracker._trackEvent("AdsBlocked", "Blocked", "true");
			}
		</script>
		<!-- JavaScript -->
		<script language="JavaScript" type="text/javascript">
			productId = replayProductId = 100;
			productName = "Battle 2P";
			productUrl  = "http://www.tetrisfriends.com/games/Battle2P/game.php";
			productDesc = "Play a two minute game against an opponent in competitive action!Now you can play with Maps!";
			
			isReplayReady = false;
			windowHasFocus = true;
			sk = 0;

			window.document.onfocus = function() { windowHasFocus = true; }
			window.document.onblur  = function() { windowHasFocus = false; }

			function js_tetrisRefreshSession(inForceRefresh) {
				$.get("/users/ajax/refresh_session.php" + (inForceRefresh ? "?forceUserRefresh=true" : ""));
			}
			
			function js_tetrisUpdateGuestSettings(currentSfxId, currentVoxId) {
				if (currentSfxId != "undefined" &&
						currentSfxId != "undefined" &&
						currentVoxId != undefined &&
						currentVoxId != undefined) {
					$.get("/users/ajax/guest_settings.php?guest_sfx_id="+this.currentSfxId+"&guest_vox_id="+currentVoxId);
				}
			}

			function tetrisShowResults(inResults, inIsMultiplayer, inIsAd, inWinAnimId, inWinToneId, inWinAnimName, inWinToneName, inWinnerName) 
			{
				var path = '//tetrisow-a.akamaihd.net/data5_0_1_1';
				var userAvatar =  "0.gif";
				var username   = "Guest";
				var isAdEnabled = inIsAd;
				var isEmailVerified = 0;

				// -- Inserted by the server (probably) --
				<?php
					if ($logged_in) {
						echo (
							'username = "'. $username .'";'.
							'userAvatar = "'. $user_avatar .'.gif";'.
							'isEmailVerified = '. $email_verified .';'
						);
					}
				?>
				// --
				if (path == "") { path = null; }
				$('#home_custom_ad_container').css('padding-bottom', '45px');
				gameShowResults(inResults, '<?php if ($logged_in) { echo '1'; } ?>','/games/Battle2P/game.php', inIsMultiplayer, '', username, userAvatar, path, isAdEnabled, isEmailVerified, inWinAnimId, inWinToneId, inWinAnimName, inWinToneName, inWinnerName, '1');
			}
			
			function js_tetrisShowResults(inResults, inIsMultiplayer, inIsAd, inWinnerId, inWinnerName)
			{
				var callbackFunc = function (inResults, inIsMultiplayer, inIsAd, inWinnerId, inWinnerName) {
					if (inIsMultiplayer) {
						$.get("/users/ajax/get_current_win_effect.php?id=" + inWinnerId,
								function(data){
									var res = data.split(",");
									tetrisShowResults(inResults, inIsMultiplayer, inIsAd, res[1], res[0], res[3], res[2], inWinnerName)
								});
					} else {
						tetrisShowResults(inResults, inIsMultiplayer, inIsAd, 0, 0, 0, 0, inWinnerName)
					}
				};
				
				<?php
					echo (
						$logged_in ? (
							'callbackFunc(inResults, inIsMultiplayer, inIsAd, inWinnerId, inWinnerName);'
						) : (
							'popUpRegisterPopup(function() { callbackFunc(inResults, inIsMultiplayer, inIsAd, inWinnerId, inWinnerName); });'
						)
					);
				?>
			}

			function js_tetrisShowHome(errorCode, errorMsg, errorRQ, errorRS) {
				
			   	if (errorCode == undefined || errorCode == "undefined") {
			   		errorCode = 1000;
			   	}
			   	if (errorMsg == undefined || errorMsg == "undefined") {
			   		errorMsg = '---';
			   	}

			   	popUpGameErrorNotice('<?php echo $logged_in ? $tf_uid : 'Guest'; ?>', errorCode, errorMsg, errorRQ, errorRS, <?php echo $logged_in ? 'true' : 'false' ?>);
			}

			function js_tetrisShowMissionPopup(inXml) {
				<?php if ($logged_in) { echo 'isEmailVerified = '. ($email_verified ? 1 : 0) .';'; } ?>
				gameResultMissions = new Array();
				
				$.xmlDOM(inXml).find('UserMission')
					.each(function(i) {gameResultMissions.push(new GameResultMission(this));});
				var headerHtml = "<link rel='stylesheet' href='//tetrisow-a.akamaihd.net/data5_0_1_1/stylesheets/combined.min.css' type='text/css' media='screen' />";
				headerHtml = headerHtml + "<script type='text/javascript' src='//tetrisow-a.akamaihd.net/data5_0_1_1/javascripts/combined.min.js' charset='utf-8'><\/script>		<script type='text/javascript' src='//tetrisow-a.akamaihd.net/data5_0_1_1/javascripts/ads/showads.js' charset='utf-8'><\/script>";
				gameResultsDisplayAchievementPopups(AD_AKAMAI_PATH, true, headerHtml);
			}

			function replayReady()
			{

			}

			function js_replayReady()
			{
				<?php if ($logged_in) { echo 'stopReloadSessionInterval();'; } ?>
				isReplayReady = true;

				if (replayProductId != 85 && replayProductId != 11 && replayProductId != 4)
				{
					if (replayProductId != "undefined" &&
					    gameResultsGameData != "undefined" &&
					    replayProductId != undefined &&
					    gameResultsGameData != undefined) {
	
						replayLoad(replayProductId, '//tetrisow-a.akamaihd.net/data5_0_1_1');
					}

					if (gameResultsIsMultiplayer) {
						setTimeout("replayStartMP(gameResultsGameData, '//tetrisow-a.akamaihd.net/data5_0_1_1')", 0);
					} else {
						setTimeout("replayStart(gameResultsGameData)", 0);
					}
					isReplayReady = false;
				}
			}

		    function renderFlash(showStartBtn, prerollEnabled) {
			  			  var isPlay = '1';
			  var theStartParam = 'play';
			  var isClickToPlay = true;
			  var windowMode = "window";
			  var analyticsEnabled = true;

			  if (typeof(showStartBtn) == 'undefined' || showStartBtn == '') {
				  showStartBtn = false;
			  }
			  if (typeof(prerollEnabled) == 'undefined' || prerollEnabled == '') {
				  prerollEnabled = false;
			  }
			  
			  if (100 == 85) {
					$('#game_side_buttons').hide();
			  }
			  
			  jQuery.each(jQuery.browser, function(i) {
			  	  if($.browser.msie){
			  			isClickToPlay = false;
			  	  }else if($.browser.mozilla && jQuery.browser.version.substr(0,3) == "1.9"){
			  			isClickToPlay = false;
			  	  }else if($.browser.mozilla){
				  	  if (replayProductId != 101 && replayProductId != 100){
					  	  isClickToPlay = true;
				  	  }
				  	  else{
					  	  isClickToPlay = false;
				  	  }
			  			windowMode = "opaque";
			  	  }else if($.browser.safari){
				  	  if (replayProductId != 101 && replayProductId != 100){
					  	  isClickToPlay = true;
					  }
					  else{
						  isClickToPlay = false;
					  }
				  	  analyticsEnabled = false;
			  	  }else if($.browser.opera){
			  			isClickToPlay = false;
			  			analyticsEnabled = false;
			  	  }else{
			  			isClickToPlay = false;
			  	  }
			  	});

			  if (showStartBtn && replayProductId != 101 && replayProductId != 100 && replayProductId != 3) {
				  isClickToPlay = true;
			  }
			  if (isPlay&& isClickToPlay) {
				theStartParam = "clickToPlay";
			  }

			  var theExternalId = getExternalId('<?php echo $session_id; ?>');
			  var theLoginId = getLoginId(<?php echo $login_id; ?>);

			  
			  flashVars = {
					theGamePath: '',
					sessionId: encodeURIComponent('<?php echo $session_id; ?>'),
					sessionToken: encodeURIComponent('<?php echo $session_token; ?>'),
					timestamp: <?php echo $time_stamp; ?>,
					startParam: theStartParam,
					isForceLogin: 'false',
					isDemo: '',
							ip: '<?php echo $ip_adress; ?>',
							externalId: theExternalId,
							loginId: theLoginId,
							channelId: <?php echo $time_stamp; ?>,
							numGamesToPlayAd: 0,
							isPrerollEnabled: prerollEnabled,
							isAnalyticsEnabled: analyticsEnabled,
							autoJoinRoomId: $.cookie("autoJoinRoomId"),
							autoJoinRoomName: $.cookie("autoJoinRoomName"),
							apiUrl: encodeURIComponent('http://api.tetrisfriends.com/api'),
							showChallenge: 0,
							prerollId: 1 // (This is used by ads, I just set it to any number)		        
					,
					// If logged in:
					friendUserIds: '', blockedToByUserIds: ''
					// If guest:
					// guestId: 10016622, currentSfxId: 3000, currentVoxId: 4001
				};

			  if (replayProductId == 3) {
				  if (prerollEnabled) {
					  pageTracker._trackPageview('/games/Arena/loadingPagePreroll');
				  } else {
				      pageTracker._trackPageview('/games/Arena/loadingPage');
				  }
			  }
			  
		      swfobject.embedSWF("//tetrisow-a.akamaihd.net/data5_0_1_1/games/Battle2P/OWGameBattle2pMaps.swf?version=0", "contentFlash", "760", "560", "9.0.0", {}, flashVars, {wmode: windowMode}, {allowscriptaccess: "always"}, {id:"OWGame", name:"OWGame"});

			  		      
		      '';
		      '';

				function setFocusOnFlash() {
					setTimeout('var fl = document.getElementById("contentFlash"); if (fl) { fl.focus(); }', 3000);
				}

				if (jQuery.browser.msie) {
					  swfobject.addDomLoadEvent(setFocusOnFlash);
				} else {
					if (window.onload) {
						var func = window.onload;
						window.onload = function() {
							func();
							setFocusOnFlash();
						}
					} else {
						window.onload = function() {
							setFocusOnFlash();
						}
					}
				}
				if (false == true) {
					$.cookie("autoJoinRoomId", -1, {expires:'', path:'/'});
					$.cookie("autoJoinRoomName", "", {expires:'', path:'/'});
				}
		    }

		   var isSwf = '1';

		   if (isSwf)
		   {
			    // Checks if user has the correct version of Flash
			    var hasReqestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);
				
			    // If user does, render flash, else display error message
			    if (hasReqestedVersion) {
				    $(document).ready(function() {
						    				sk = 26435407;
											setTimeout('gameTriggerPrerollCheck();', 0);
										  });renderFlash(true, true);			    	
			    } else {

					var customerId = "Guest";
					<?php if ($logged_in) { echo 'customerId = "'. $tf_uid .'"'; } ?>

			    	var errorMsg = document.getElementById('errorMessage');
					errorMsg.innerHTML = '<br /><div align="center" style="font-size: 16px">' +
						'This Tetris game requires the Adobe Flash Player plugin.<br /><br />' +
						'<a href="http://www.adobe.com/go/getflashplayer" onclick="onActivateFlashClick()"><img src="/data/images/adobeflash_activate.png" alt="Get Adobe Flash player"></a><br /><br />' + 
						'If you&rsquo;re still experiencing issues, please visit <a href="http://helpx.adobe.com/flash-player.html">Adobe&rsquo;s Help Page</a> for additional assistance<br /> regarding your specific web browser, or email <a href="mailto:support@tetrisonline.com?subject=TETRISFRIENDS.COM%20SUPPORT%20(FLASH%20ISSUE)&BODY=' + generateFooter(customerId) +
						'">Tetris Online Support</a>.<br /><br />' +
						'</div>';
					
					try {
						pageTracker = _gat._getTracker("UA-886022-5");
					    pageTracker._trackEvent("Errors", "NoFlash");
					} catch (ex) { }
			    }
		   }

			function gameTriggerPrerollCheck() {
								gameTriggerPrerollVideo('SE');
			}
			
			var intervalTimer2 = -1;
		   	function gameTriggerPrerollComplete() {
			   	if (intervalTimer2 != -1) {
			   		clearInterval(intervalTimer2);
			   	}
		   		
				var el = document.getElementById('game_preroll_script_iframe');
				var fn;
				if (el.contentWindow) {
					fn = el.contentWindow.OAS_VIDEO;
				} else if (el.contentDocument) {
					fn = el.contentDocument.OAS_VIDEO;
				}
				console.debug("game_preroll_script_iframe.onload " + fn);
				gameLoadDFPPrerollVideo(fn);
			}
		   	function gameTriggerPrerollVideo(countryCode) {
		   		countryCode = typeof(countryCode) != "undefined" ? countryCode : "";
		   		
				console.group("gameTriggerPrerollVideo() for %s", productName);
				$('#game_container').css('height', '560px');
				$('#contentFlash').css('visibility', 'hidden');
				$('.game_loading').show();

								
				var url = "";
				
				if (url == '') {
					if (navigator && navigator.platform == "MacIntel") {
						url = "/ads/google_video_ad.html";
					} else {
						var groupA = "US";
						var groupB = "GB,CA,NO,DK";
						var groupC = "AU";

						url = "/_test/";
						
						if (groupA.indexOf(countryCode) != -1) {
							url += 'spotx_video_ad_71727.html?v=2';
						} else if (groupB.indexOf(countryCode) != -1) {
							url += 'spotx_video_ad_80014.html?v=2';
						} else if (groupC.indexOf(countryCode) != -1) {
							url += 'spotx_video_ad_80013.html?v=2';
						} else {
							url += 'google_video_ad.html';
						}
					}
				}
				$('#game_preroll_script_iframe').attr('src', url);
				intervalTimer2 = setTimeout('gamePrerollComplete();', 0); // (Changed to 0 from 10000, this effectively disables the preroll add)
			}

			function gameTriggerShowSkipButton() {
				var footer = $("div.game_loading_footer");
				if (footer) {
					footer.css("background-image", "none");
				}
				$(".blue_skip_btn").show();
			}

			function onActivateFlashClick() {
				try {
					pageTracker = _gat._getTracker("UA-886022-5");
				    pageTracker._trackEvent("UI", "ActivateFlash", "Click");
				} catch (ex) { }
			}
		  
			GET_TOA_AD('x79');
		</script>
	<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"0db427ec08","applicationID":"12597004","transactionName":"YAZSZkBSXhZYWhAKC1lMZUBbHFcEVFwXTCZWF0ReVwFgSl5YCQZKRwtA","queueTime":0,"applicationTime":18,"atts":"TEFREAhITRg=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>
