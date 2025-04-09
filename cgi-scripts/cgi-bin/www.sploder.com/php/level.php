<?PHP

	$author = $_REQUEST['author'];
	$slug = $_REQUEST['slug'];
		
	$slug = substr($slug, 0, strrpos($slug, '/'));
	
	$db = new PDO('sqlite:../sploder.db');
		
	$queryString = 'SELECT * FROM level WHERE author = "' . $author . '" AND slug = "' . $slug . '"';

	$statement = $db->prepare($queryString);
		
	$statement->execute();
	$result = $statement->fetchAll();
	
	$sdate = '20' . $result[0]['date'];
	
	$date = date_parse($sdate);
	
	$year = $date['year'];
	$month = $date['month'];
	$day = $date['day'];
	
	$shortMonth = $month;
	if (strlen($month) == 1) {
		$month = '0' . $month;
	}
	$dateObj = DateTime::createFromFormat('!m', $month);
	$monthName = $dateObj->format('F');
	
	$shortDay = $day;
	if (strlen($day) == 1) {
		$day = '0' . $day;
	}
	$dayName = date('l', strtotime($sdate));
	
	$fullDate = substr($year, 2) . '/' . $month . '/' . $day;
	
	$lvl = $result[0];
	
	$title = $lvl['title'];
	$description = $lvl['description'];
	$difficulty = $lvl['difficulty'];
	
	$group_folder = $lvl['group_folder'];
	$folder = $lvl['folder'];
	$pubkey = $lvl['pubkey'];
	$g_id = $lvl['g_id'];
	$g_swf = $lvl['g_swf'];
	$g_version = $lvl['g_version'];
	$tags = $lvl['tags'];
	$contest = $lvl['contest'];
	$platform = $lvl['platform'];
		
	$platformLbl = '';
	$platformLink = '';
	if ($platform == 'classic game creator') {
		$platformLbl = 'classic';
		$platformLink = 'free-shooter-game-maker';
	} else if ($platform == 'platformer game creator') {
		$platformLbl = 'platformer';
		$platformLink = 'free-platformer-game-maker';
	}
	
	$queryString10 = 'SELECT slug, title, date, views FROM level WHERE author = "' . $author . '" ORDER BY RANDOM() LIMIT 10;';

	$statement10 = $db->prepare($queryString10);
		
	$statement10->execute();
	$result10 = $statement10->fetchAll();
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $title; ?> - Classic Game by <?php echo $author; ?></title>
	<base href="http://www.sploder.com/" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta name="description" content="Game by <?php echo $author; ?> using the classic game maker: <?php echo $description; ?>" />
	<meta name="robots" content="follow" />
	
	
	<meta name="author" content="<?php echo $author; ?>" />
        <meta name="created" content="2007-2-14" />
   
	<link rel="media:thumbnail" href="http://cdn.sploder.com/users/group0/user575_20070128031225/photos/proj1864.png" />
	<link rel="image_src" type="image/png" href="http://cdn.sploder.com/users/group0/user575_20070128031225/photos/proj1864.png" />

	<meta property="og:title" content="<?php echo $title; ?>" />
	<meta property="og:type" content="game" />
	<meta property="og:url" content="http://www.sploder.com/games/members/<?php echo $author; ?>/play/the-fort-vii-2/" />
	<meta property="og:image" content="http://cdn.sploder.com/users/group0/user575_20070128031225/photos/proj1864.png" />
	<meta property="og:site_name" content="Sploder, Make your own Games!" />
	
	<meta property="fb:page_id" content="86361782595" />
	<meta property="fb:admins" content="693386052" />
	
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:site" content="@sploder" />
	<meta name="twitter:creator" content="@sploder" />
	<meta name="twitter:url" content="http://www.sploder.com/games/members/<?php echo $author; ?>/play/the-fort-vii-2/" />
	<meta name="twitter:title" content="<?php echo $title; ?>" />
	<meta name="twitter:description" content="Play this awesome game made by <?php echo $author; ?> using Sploder's <?php echo $platformLbl; ?> game maker!" />
	<meta name="twitter:image" content="http://cdn.sploder.com/users/group<?php echo $group_folder; ?>/user<?php echo $folder; ?>/photos/proj<?php echo $g_id; ?>.png" />
		
	<link rel="canonical" href="http://www.sploder.com/games/members/<?php echo $author; ?>/play/the-fort-vii-2/" />
	<link rel="alternate nofollow" type="application/rss+xml" title="RSS" href="/gamefeed.php" />
	<link href='http://fonts.googleapis.com/css?family=Raleway:800,700,500' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css"  href="http://cdn.sploder.com/css/sploder_v2p22.min.css" />
	
	<script type="text/javascript">
	    function setClass (id, c) { var e = document.getElementById(id); if (e) e.className = c; }
	    function r (im) { 
		if (im.src.indexOf("cdn.") == -1) im.src = "http://cdn.sploder.com/users/" + im.src.split("/users/")[1];
		else im.src = "/chrome/no.gif";
	    }
	</script>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
	
	<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>
	
	
	
        <script type="text/javascript">
        
        var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
		var eventer = window[eventMethod];
		var messageEvent = eventMethod == "attachEvent" ? "onmessage" : "message";
		
		eventer(messageEvent, function (e) {
		    
		    if (e.origin !== "http://multiplayer1.sploder.com:3000" && e.origin !== "http://192.168.2.2:3000") return;
		    
            var pkg = e.data;
            console.log(pkg);
            if (pkg && "cmd" in pkg) {
            
                switch (pkg.cmd) {
                
                    case "height":
                        var iframe_id = "sploder_multiplayer_feed_" + pkg.gamespace;    
                        var iframe_dom = document.getElementById(iframe_id);
                        if (iframe_dom) {

                            iframe_dom.height = pkg.value;

                        }
                
                }
                
            }

		}, false);
        
        </script>
        

</head>

<body id="everyones" class="gamepage" >

	<div id="main">
		<div id="header">
			<div id="title"><h1><a href="/" title="Sploder Make Your Own Games"><span class="hide"><?php echo $title; ?></span></a></h1></div>
			<div id="tools"><ul>

	<li id="parentslink">

		<a href="/parents-teachers.php">Parents &amp; Teachers</a>&nbsp; |

	</li>

	<li>

		<a href="https://www.sploder.com/accounts/login/" id="loginlink">Log in</a>

	</li>

	<li id="signup">

		|&nbsp; <a href="https://www.sploder.com/accounts/register/">Sign up</a>

	</li>

</ul>
</div>
			<ul id="topnav">
				<li id="nav1"><a href="/games/featured/">Play Games</a></li>
				<li id="nav2"><a href="/free-game-creator.php">Make a Game</a></li>
				<li id="nav3"><a href="/games/challenges/">Challenges</a></li>
				<li id="nav4"><a href="/games/members/">Members</a></li>
				<li id="nav5"><a href="/games/contest/">Contest</a></li>
			</ul>
		</div>

		<div id="page">
			<div id="subnav">
				
				<ul class="nav_games">
					<li><a href="/">Home</a></li>
					<li><a href="/games/featured/">Featured</a></li>
					<li><a href="/games/boosts/">Boosts</a></li>
					<li><a href="/games/">Newest</a></li>
					<li><a href="/games/reviews/">Reviews</a></li>
					<li><a href="/games/tournaments/">Tournaments</a></li>
					<li><a href="/graphics/">Graphics</a></li>
					<li><a href="/games/favorites/">Favorites</a></li>
					<li><a href="/games/web/">Web</a></li>
					<li><a href="/games/tags/">Tags</a></li>
					<li><a href="/games/epic/">The EGL</a></li>
					<li><a href="/games/search/">Search</a></li>
				</ul>
				<ul class="nav_members">
					<li><a href="/">Home</a></li>
					<li><a href="/members/all/">Member List</a></li>
					<li><a href="/games/groups/">Groups</a></li>
					<li><a href="/members/staff/">Staff</a></li>
					<li><a href="http://forums.sploder.com">Community Forums</a></li>
					<li><a href="/members/contest/">Member of the Day</a></li>
					<li><a href="/members/hall-of-fame/">Hall of Fame</a></li>
					<li><a href="/messages/">Latest Comments</a></li>
				</ul>
				<ul class="nav_creators">
					<li><a href="/">Home</a></li>
					<li><a href="/free-arcade-game-maker.php">Arcade Creator</a></li>
					<li><a href="/free-platformer-game-maker.php">Platformer Creator</a></li>
					<li><a href="/free-physics-puzzle-game-maker.php">Physics Creator</a></li>
                                        <li><a href="/free-graphics-editor.php">Graphics Editor</a></li>
					<li><a href="/free-shooter-game-maker.php">Classic Creator</a></li>
					<li><a href="/free-3d-game-maker.php">3d Adventure Creator</a></li>
				</ul>
			</div>
			
			<div id="content"><h3><?php echo $title; ?></h3><h4 class="subtitle">By <a href="games/members/<?php echo $author; ?>/"><?php echo $author; ?></a> :: <?php echo $dayName; ?> <?php echo $monthName; ?> <?php echo $day; ?>th, <?php echo $year; ?></h4><div class="vote" id="contestwidget"><div id="contestflash">&nbsp;</div></div>
			    <div id="venue" style="margin: 6px 0 0 20px; float: right;"></div>
			    <script type="text/javascript">
				    swfobject.embedSWF("/contest2.swf", "contestflash", "150", "30", "8", "/swfobject/expressInstall.swf", { g: "<?php echo $g_id; ?>"}, { bgcolor: "#000000", menu: "false", quality: "low", scale: "noscale", salign: "tl", wmode: "opaque", base: "http://www.sploder.com" });
			    </script>
			
			<div class="gameobject">
				<div id="flashcontent">
				    <img class="game_preview" src="http://cdn.sploder.com/users/group0/user575_20070128031225/photos/proj1864.png" />
					<p class="game_loading" style="font-size: 14px; line-height: 16px; width: 320px; padding: 20px; margin-left: -40px;">
						This game requires the Adobe Flash Player.<br /><br /><a href="https://get.adobe.com/flashplayer"><img border="0" alt="Enable Flash" src="enable_flash.gif"/></a>
					</p>
					</div>
			</div>
			<script type="text/javascript">

			    var g_swf = "<?php echo $g_swf; ?>.swf";
			    var g_version = "<?php echo $g_version; ?>";

			    try {
				    if (g_swf == "game2.swf") {
					    var fmv = deconcept.SWFObjectUtil.getPlayerVersion().major;
					    if (fmv == "9") {
						    g_swf = "game2v9.swf";
						    g_version = "9";
					    }
				    }
			    } catch (err) {
			    }

			    var flashvars = {
				    s: "<?php echo $pubkey; ?>",
				    sid: "a3c78939fb5dbc320549c939f60faffb",
				    nu: "1",
				    // EMBED_BETA_VERSION
				    // EMBED_FORCE_SECURE
				    // EMBED_ADTEST
				    // EMBED_CHALLENGE
				    onsplodercom: "true",
				    modified: 1171449856
			    };

			    var params = {
			      menu: "false",
			      quality: "high",
			      scale: "noscale",
			      salign: "tl",
			      bgcolor: "#333333",
                  wmode: "direct",
			      allowScriptAccess: "always",
			      base: "http://www.sploder.com"
			    };

			    swfobject.embedSWF("/" + g_swf, "flashcontent", "640", "480", g_version, "/swfobject/expressInstall.swf", flashvars, params);

			</script>
			
<div class="sharebar">
	<a href="/free-game-creator.php"><img style="float: left;" src="http://cdn.sploder.com/chrome/social_bar_make.gif" width="210" height="36" alt="make a game" /></a>
<div class="share_buttons"><a class="facebook" href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwww.sploder.com%2Fgames%2Fmembers%2F<?php echo $author; ?>%2Fplay%2Fthe-fort-vii-2%2F%3Fref%3Dfb" onclick="javascript:window.open(this.href,
      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=380,width=550');return false;" title="share this on facebook"></a>&nbsp;<a class="twitter" href="https://twitter.com/intent/tweet?text=Playing%20the%20fort.%20VII%20by%20<?php echo $author; ?>%20on%20%40sploder%20-%20&url=http%3A%2F%2Fwww.sploder.com%2Fgames%2Fmembers%2F<?php echo $author; ?>%2Fplay%2Fthe-fort-vii-2%2F%3Fref%3Dtw" onclick="javascript:window.open(this.href,
      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=380,width=550');return false;" title="tweet this!"></a>&nbsp;<a class="googleplus" href="https://plus.google.com/share?url=http%3A%2F%2Fwww.sploder.com%2Fgames%2Fmembers%2F<?php echo $author; ?>%2Fplay%2Fthe-fort-vii-2%2F%3Fref%3Dgp" onclick="javascript:window.open(this.href,
      '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" title="post to google+"></a></div></div>
	  <?php
		if ($description != null) {
			echo '<p class="description" style="overflow: hidden; border: 1px solid #999; padding: 10px; margin: 0; ">' . $description . '</p>';
		}
	  ?>
				<div id="viewpage">
					<div class="set related_set">
						<h4>Play More Awesome Games!</h4>
						<div class="grid">		<div class="game vignette">
			<div class="photo">
				<a href="/games/members/areyousure/play/the-secret-dungeon/"><img src="http://cdn.sploder.com/users/group189/user189210_20090301100321/thumbs/proj518048.png" width="80" height="80" alt="the-secret-dungeon" title="The secret dungeon by areyousure" /></a>
			</div>
			<div class="spacer">&nbsp;</div>
		</div>		<div class="game vignette">
			<div class="photo">
				<a href="/games/members/ravicale/play/grand-quest-v3-2/"><img src="http://cdn.sploder.com/users/group115/user115723_20081011134641/thumbs/proj518665.png" width="80" height="80" alt="grand-quest-v3" title="Grand Quest V.3 by ravicale" /></a>
			</div>
			<div class="spacer">&nbsp;</div>
		</div>		<div class="game vignette">
			<div class="photo">
				<a href="/games/members/mrperson3/play/cc-c-2/"><img src="http://cdn.sploder.com/users/group176/user176164_20090207185601/thumbs/proj515022.png" width="80" height="80" alt="-cc-c" title=" cc c by mrperson3" /></a>
			</div>
			<div class="spacer">&nbsp;</div>
		</div>		<div class="game vignette">
			<div class="photo">
				<a href="/games/members/greengun27/play/the-brawl/"><img src="http://cdn.sploder.com/users/group187/user187592_20090227123902/thumbs/proj517616.png" width="80" height="80" alt="the-brawl" title="the brawl by greengun27" /></a>
			</div>
			<div class="spacer">&nbsp;</div>
		</div>		<div class="game vignette">
			<div class="photo">
				<a href="/games/members/checkthepan/play/the-cavern-2/"><img src="http://cdn.sploder.com/users/group71/user71835_20080523152349/thumbs/proj503540.png" width="80" height="80" alt="the-cavern" title="The Cavern by checkthepan" /></a>
			</div>
			<div class="spacer">&nbsp;</div>
		</div>		<div class="game vignette">
			<div class="photo">
				<a href="/games/members/thepurplepenguin/play/the-maze-of-terror/"><img src="http://cdn.sploder.com/users/group188/user188001_20090227212250/thumbs/proj511778.png" width="80" height="80" alt="the-maze-of-terror" title="THE MAZE OF TERROR by thepurplepenguin" /></a>
			</div>
			<div class="spacer">&nbsp;</div>
		</div><div class="spacer">&nbsp;</div>		<div class="game vignette">
			<div class="photo">
				<a href="/games/members/mega11/play/pirahna-2-reavealed/"><img src="http://cdn.sploder.com/users/group177/user177256_20090209175159/thumbs/proj511784.png" width="80" height="80" alt="pirahna-2-reavealed" title="pirahna 2 reavealed by mega11" /></a>
			</div>
			<div class="spacer">&nbsp;</div>
		</div>		<div class="game vignette">
			<div class="photo">
				<a href="/games/members/ckmike123/play/jurney-to-the-center-of-the-earth/"><img src="http://cdn.sploder.com/users/group154/user154736_20081224124323/thumbs/proj511867.png" width="80" height="80" alt="jurney-to-the-center-of-the-earth" title="jurney to the center of the earth by ckmike123" /></a>
			</div>
			<div class="spacer">&nbsp;</div>
		</div>		<div class="game vignette">
			<div class="photo">
				<a href="/games/members/armurus/play/platform-challenge-1/"><img src="http://cdn.sploder.com/users/group184/user184215_20090221140300/thumbs/proj512281.png" width="80" height="80" alt="platform-challenge-1" title="Platform Challenge 1 by armurus" /></a>
			</div>
			<div class="spacer">&nbsp;</div>
		</div>		<div class="game vignette">
			<div class="photo">
				<a href="/games/members/robomandude/play/egypt-buriel-chambers/"><img src="http://cdn.sploder.com/users/group186/user186702_20090225184032/thumbs/proj513794.png" width="80" height="80" alt="egypt-buriel-chambers" title="Egypt Buriel Chambers by robomandude" /></a>
			</div>
			<div class="spacer">&nbsp;</div>
		</div>		<div class="game vignette">
			<div class="photo">
				<a href="/games/members/undeadspider/play/rubbish-game-trust-me-dont/"><img src="http://cdn.sploder.com/users/group48/user48968_20080225090746/thumbs/proj331934.png" width="80" height="80" alt="rubbish-game-trust-me-dont" title="Rubbish Game. Trust Me, Don't by undeadspider" /></a>
			</div>
			<div class="spacer">&nbsp;</div>
		</div>		<div class="game vignette">
			<div class="photo">
				<a href="/games/members/nukem/play/high-2/"><img src="http://cdn.sploder.com/users/group43/user43226_20080127191808/thumbs/proj509552.png" width="80" height="80" alt="high" title="high by nukem" /></a>
			</div>
			<div class="spacer">&nbsp;</div>
		</div><div class="spacer">&nbsp;</div>
							<div class="spacer">&nbsp;</div>
						</div>
					</div>
				</div>

			<!-- SWFHTTPRequest - for browsers that don't support CORS -->

			<div id="communicator" style="position: fixed; top: 1px; left: 1px;">
				<div id="swfhttpobj"></div>
				<script type="text/javascript">
				       swfobject.embedSWF('http://sploder.us/swfhttprequest.swf', 'swfhttpobj', '1', '1', '9', '/swfobject/expressInstall.swf', null, { allowScriptAccess: 'always', bgcolor: '#000000' });
				</script>
			</div>

			<!-- End SWFHTTPRequest -->
			
			
			<script type="text/javascript">
			us_config = {
				container: 'messages',
				venue: 'games/members/<?php echo $author; ?>/play/<?php echo $slug; ?>/',
				venue_container: 'venue',
				venue_type: 'game',
				owner: '<?php echo $author; ?>',
				username: '',
				ip_address: '198.198.198.198',
				timestamp: '1567444428',
				auth: '',
				use_avatar: true,
				venue_anchor_link: true,
				show_messages: true,
				last_login: '1567358028'
				}

			window.onload = function () {
				var n;
				n = document.createElement('link');
				n.rel = 'stylesheet';
				n.type = 'text/css';
				n.href = 'http://sploder.us/css/venue5.css';
				document.getElementsByTagName('head')[0].appendChild(n);
				n = document.createElement('script');
				n.type = 'text/javascript';
				n.src =  'http://sploder.us/venue7.js';
				document.getElementsByTagName('head')[0].appendChild(n);
				if (window.addthis) addthis.button('#btn1', addthis_ui_config, addthis_share_config);
			}
			</script>

			<a id="messages_top"></a>
			<div id="messages"></div>
			<div class="spacer">&nbsp;</div>

		<div class="tagbox"><p class="tags">Tags: 
		<?php
			$tagsArr = explode(" ", $tags);
			for ($i = 0; $i < count($tagsArr); $i++) {
				$wrapped = $i % 4;
				$tag = $tagsArr[$i];
				echo '<a class="tagcolor' . $wrapped . '" href="games/tags/' . $tag . '/">' . $tag . '</a> ';	
			}
		?>
		</p></div><br />
							<div class="bucket moregames">
							    <div class="art_title art_title_small">
								<h4>
									<img class="avatar" src="http://avatars.sploder.com/a/l/i/<?php echo $author; ?>_24.png" width="24" height="24" />
									More games by <a href="/games/members/<?php echo $author; ?>/"><?php echo $author; ?></a>
								</h4>
							    </div>
							    <ul class="ratings_list">
									<?php
										for ($i = 0; $i < count($result10); $i++) {
											$lvl10 = $result10[$i];
											$slug10 = $lvl10['slug'];
											
											if ($slug10 == $slug) {
												continue;
											}
											
											$d10 = $lvl10['date'];
											$day10 = (int) substr($d10, 6, 2);
											$mon10 = (int) substr($d10, 3, 2);
											$year10 = substr($d10, 0, 2);
											
											$pdate10 = $mon10 . '&middot;' . $day10 . '&middot;' . $year10 . ' &middot';
											
											echo '<li><a href="/games/members/' . $author . '/play/' . $slug10 . '/">' . $lvl10['title'] . '</a>&nbsp; <span class="viewscomments">' . $pdate10 . ' ' .$lvl10['views'] . ' views</span></li>';
										}
									?>
							    </ul>
							</div>
							<div class="spacer">&nbsp;</div></div>
			<div id="sidebar">
				
				
				<div class="gametypeinfo"><p>This is a game made with Sploder's <a href="/<?php echo $platformLink; ?>.php"><?php echo $platformLbl; ?> game creator</a>.</p></div>

	<div id="events" style="width: 260px; height: 480px;">
            <div id="events_ticker"></div>
	</div>
	
	<script type="text/javascript">
            swfobject.embedSWF("/events7.swf", "events_ticker", "260", "480", "9", "/swfobject/expressInstall.swf", { PHPSESSID: "a3c78939fb5dbc320549c939f60faffb" }, { bgcolor: "#000000", menu: "false", quality: "low", scale: "noscale", salign: "tl", wmode: "opaque", base: "http://www.sploder.com" });
        </script>
    
				
				
					    
<div class="skyscraper">    
</div>
    
				<iframe id="sploder_multiplayer_feed_first" scrolling="no" frameBorder="0" style="margin-bottom: 20px;" width="100%" height="0" src="http://multiplayer1.sploder.com:3000/feeds/first"></iframe>
				
				
				<br /><br /><br />
				<div class="spacer">&nbsp;</div>
			</div>			
			<div class="spacer">&nbsp;</div>
			<div id="footer"><div class="spacer">&nbsp;</div></div>
			<div class="spacer">&nbsp;</div>
		</div>
	</div>
	<div id="bottomnav">
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/about.php">About</a></li>
			<li><a href="/parents-teachers.php">Parents</a></li>
			<li><a href="/contact.php">Contact Us</a></li>
			<li><a href="/termsofservice.php">Terms of Service</a></li>
			<li><a href="/privacypolicy.php">Privacy Policy</a></li>
                        <li><a href="http://forums.sploder.com">Forums</a></li>
			<li><a href="http://help.sploder.com" class="help">Help</a></li>
		</ul>
	</div>
</body>
</html>
