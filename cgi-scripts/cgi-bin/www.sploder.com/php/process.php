<?php

	$url = $_REQUEST['id'];

	$db = new PDO('sqlite:../sploder.db');
	
	$offset = 0;
	if (substr_count($url, '/') == 3) {
		$offset = substr($url, strrpos($url, '/') + 1);
		$url = substr($url, 0, strrpos($url, '/'));
	}
	$date = date_parse($url);
	
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
	$dayName = date('l', strtotime($url));
	
	$fullDate = substr($year, 2) . '/' . $month . '/' . $day;
	
	$queryString = 'SELECT * FROM level WHERE date = "' . $fullDate . '" ORDER BY g_id ASC LIMIT 48 OFFSET ' . ($offset);

	$statement = $db->prepare($queryString);
		
	$statement->execute();
	$result = $statement->fetchAll();
	
	$qTotal = 'SELECT count(1) FROM level WHERE date = "' . $fullDate . '"';
	
	$staTotal = $db->prepare($qTotal);
	$staTotal->execute();
	$resultTotal = $staTotal->fetchAll();
	
	$resultTotal = $resultTotal[0][0];
	
	function weekOfMonth($when = null) {
		if ($when === null) $when = time();
		$week = strftime('%U', $when); // weeks start on Sunday
		$firstWeekOfMonth = strftime('%U', strtotime(date('Y-m-01', $when)));
		return 1 + ($week < $firstWeekOfMonth ? $week : $week - $firstWeekOfMonth);
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Games Created Online: <?php echo $dayName; ?>, <?php echo $monthName; ?> <?php echo $shortDay; ?>th, <?php echo $year; ?></title>
	<base href="http://www.sploder.com/" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta name="description" content="Sploder's archive of games published on <?php echo $monthName; ?> <?php echo $shortDay; ?>th, <?php echo $year; ?>.  Sploder is an online game creator. Create fun games that you can publish and share with friends." />
	<meta name="robots" content="follow" />
	
	<meta http-equiv="last-modified" content="' . gmdate('Y-m-d@H:i:s', 1179115200).' GMT" />

	<link rel="canonical" href="http://www.sploder.com/games/archive/2007/05/14/" />
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
	
	
	
	<script type="text/javascript">var _sf_startpt=(new Date()).getTime()</script>
	
	
	        <style type="text/css">
            div.sidecal { }
            div.sidecal h2, div.sidecal h3 { color: #666; text-align: center; font-weight: normal; }
            div.sidecal h2 a, div.sidecal h3 a { color: #666; font-weight: normal; }
            div.sidecal h2 a:hover, div.sidecal h3 a:hover { color: #999; }
            div.sidecal span { color: #333 }

            table.calendar    { border-left:1px solid #666; padding: 0; margin: 0 0 10px 0; }
            td.calendar-day  { min-height: 20px; font-size: 11px; position:relative; } * html div.calendar-day { height:20px; }
            td.calendar-day-np  { background:#222; min-height:20px; } * html div.calendar-day-np { height:20px; }
            td.calendar-day-head { background:#555; font-weight:bold; text-align:center; padding:5px; border:1px solid #666; border-left: none; }
            a.day-number, div.day-number    { display: block; background:#000; padding: 5px 0; text-align:center; color: #fff; font-weight: normal; }
            div.day-number { color: #666; }
            a.day-number:hover { background: #666; }
            td.calendar-day, td.calendar-day-np { width: 120px; padding: 0; border-bottom: 1px solid #666; border-right: 1px solid #666; }
            td.current-day a { background: #ccc; color: #000; }
        </style>
        

</head>

<body id="everyones" class="" >

	<div id="main">
		<div id="header">
			<div id="title"><h1><a href="/" title="Sploder Make Your Own Games"><span class="hide">Games Archive</span></a></h1></div>
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
			
			<div id="content"><h3>Games Archive</h3><h4 class="subtitle">Games published on <?php echo $monthName; ?> <?php echo $shortDay; ?>th, <?php echo $year; ?></h4><p>This game archive contains all games published publicly. Browse these games for the current day using the paging buttons below, or use the calendar on the right to browse dates.
			<div id="viewpage">
				<div class="set">
				
				<?php
				
				$i = 0;
				foreach ($result as $level) {
					if ($i > 0 && $i % 2 == 0) {
						echo '<div class="spacer">&nbsp;</div>';
					}
					$i++;
					
					echo '<div class="game">';
					echo '<div class="photo">';
					echo '<a href="/games/members/' . $level['author'] . '/play/' . $level['slug'] . '/">';
					echo '<img src="http://cdn.sploder.com/users/group' . $level['group_folder'] . '/user' . $level['folder'] . '/thumbs/proj' . $level['g_id'] . '.png" width="80" height="80" alt="' . $level['slug'] . '" onerror="r(this)" /></a>';
					echo '</div>';
					echo '<p class="gamedate">' . $shortMonth . '&middot;' . $shortDay . '&middot;' . substr($year, 2) . '</p>';
					echo '<h4><a href="/games/members/' . $level['author'] . '/play/' . $level['slug'] . '/">' . $level['title'] . '</a></h4>';
					echo '<h5><a href="games/members/' . $level['author'] . '/">' . $level['author'] . '</a></h5>';
					echo '<p class="gamevote"><img src="http://cdn.sploder.com/chrome/rating' . $level['stars'] . '.gif" width="64" height="12" border="0" alt="15 stars" /> ' . $level['votes'] . ' votes</p>';
					echo '<p class="gameviews">' . $level['views'] . ' views</p>';
					echo '<div class="spacer">&nbsp;</div>';
					echo '</div>';
					
				}
				
				?>
				<div class="spacer">&nbsp;</div>
				</div>
				<div class="pagination">
					<?php
					$currentPage = $offset / 48;
					$pages = ceil($resultTotal / 48);
					
					if ($pages == 1) {
						echo '<span class="page_button page_button_inactive">page 1 of 1</span>';
						
					} else {
					
						if ($currentPage + 1 < $pages) {
							echo '<a class="page_button page_next" href="/games/archive/' . $url . '/' . ($offset + 48) . '">next &raquo;</a>';
						}
						
						for ($j = $pages; $j > 0; $j--) {
							$page = ($j - 1) * 48;
							
							if ($j - 1 == $currentPage) {
								echo '<span class="page_button" title="/games/archive/' . $url . '/">' . $j . '</span>';
							} else {
								echo '<a class="page_button" href="/games/archive/' . $url . '/' . $page . '/">' . $j . '</a>';
							}
						}
						
						if ($currentPage == 0) {
							echo '<span class="page_button page_button_inactive">&laquo;</span>';
						} else {
							echo '<a class="page_button page_previous" href="/games/archive/' . $url . '/' . ($offset - 48) . '">&laquo;</a>';
						}
					}
					?>
					<div class="spacer">&nbsp;</div>
				</div>
			</div>
			<div class="spacer">&nbsp;</div></div>
			<div id="sidebar">
				
				<?php
					echo '<div class="sidecal"><h2>';
					
					$d = new DateTime($url);
					$d->modify('previous month');
					$prevMonthDate = $d->format('m');
					if ($month == $prevMonthDate) {
						$d->modify('last day of previous month');
					}
					$prevMonthDate = $d->format('Y/m/d');
					
					$d = new DateTime($url);
					$d->modify('next month');
					$nextMonthDate = $d->format('m');
					
					if ((((int) $month + 2) % 12) == $nextMonthDate) {
						$d->modify('last day of previous month');
					}
					$nextMonthDate = $d->format('Y/m/d');
					
					echo '<a href="/games/archive/' . $prevMonthDate . '/">&laquo;</a> ' . $monthName . '<a href="/games/archive/' .$nextMonthDate . '/">&raquo;</a></h2><table cellpadding="0" cellspacing="0" class="calendar"><tr class="calendar-row"><td class="calendar-day-head">S</td><td class="calendar-day-head">M</td><td class="calendar-day-head">T</td><td class="calendar-day-head">W</td><td class="calendar-day-head">T</td><td class="calendar-day-head">F</td><td class="calendar-day-head">S</td></tr>';
									
					$yearMonth = $year . '/' . $month . '/';
					
					$firstDay = date('l', strtotime($yearMonth . '01'));
					$days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
										
					$dayIndex = array_search($firstDay, $days);
										
					$lastDay = date("t", strtotime($url));
										
					$numWeeks = weekOfMonth(strtotime($year . '/' . $month . '/' . $lastDay));
					
					for ($k = 0; $k < $numWeeks; $k++) {
						echo '<tr class="calendar-row">';
						
						if ($k == 0 && $k < $dayIndex) {
							$l = 0;
							for (; $l < $dayIndex; $l++) {
								echo '<td class="calendar-day-np">&nbsp;</td>';
							}
							$diff = 7 - $l;
							
							for ($m = 0; $m < $diff; $m++) {
								$dDay = ($m + 1);
								$dDay2 = $dDay;
								if ($dDay < 10) {
									$dDay2 = '0' . $dDay;
								}
								
								if ($dDay == $day) {
									echo '<td class="calendar-day current-day">';
								} else {
									echo '<td class="calendar-day">';
								}
								
								echo '<a class="day-number" href="/games/archive/' . $year . '/' . $month . '/' . $dDay2 . '/">' . $dDay . '</a></td>';
							}
							
						} else {
							$baseDay = ($k * 7) - $dayIndex;
							for ($m = 0; $m < 7; $m++) {
								$dDay = ($m + 1) + $baseDay;
								$dDay2 = $dDay;
								if ($dDay < 10) {
									$dDay2 = '0' . $dDay;
								}
								
								if ($dDay > $lastDay) {
									echo '<td class="calendar-day-np">&nbsp;</td>';
								} else {
									if ($dDay == $day) {
										echo '<td class="calendar-day current-day">';
									} else {
										echo '<td class="calendar-day">';
									}
									
									echo '<a class="day-number" href="/games/archive/' . $year . '/' . $month . '/' . $dDay2 . '/">' . $dDay . '</a></td>';
								}
							}
						}
						
						echo '</tr>';
					}
					echo '</table>';
					
					$prev = '<span>&laquo;</span>';
					$nyear = (int) $year;
					if ($nyear > 2007) {
						$prev = '<a href="/games/archive/' . ($year - 1) . '/' . $month . '/' . $day . '/">&laquo;</a>';
					}
					
					$next = '<span>&raquo;</span>';
					if ($nyear < 2019) {
						$next = '<a href="/games/archive/' . ($year + 1) . '/' . $month . '/' . $day . '/">&raquo;</a>';
					}
					
					echo '<h3>' . $prev . ' ' . $year . ' ' . $next . '</h3></div>';
					
				?>
								
				<br /><br /><br />
				<div class="spacer">&nbsp;</div>
			</div>			
			<div class="spacer">&nbsp;</div>
			<div id="footer">	    
    <div class="spacer">&nbsp;</div></div>
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