<?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// PINKY DINKY DOO - SYSTEM 1.0 - SEPTEMBER 2008
// SIMPLE CALL TO COMMAND TO OBTAIN FEATURED STORY AND DISPLAY SOME OF ITS META-DETA.
// J.C. MARSELLA >> JASPER CONSULTING
//
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
include ("include/global.inc.php");
include ("command/StoryCommand.inc.php");

$storyCommand						= new StoryCommand();
$storyCommand->setLogger($logger);
$storyCommand->setEnvironment($env);
$featuredStory						= $storyCommand->getFeaturedStory();
$hasFeaturedStory					= ($featuredStory->getID() > 0) ? true : false;
$SID								= ($hasFeaturedStory) ? Utils::EncodeNumber($featuredStory->getID()) : "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Pinky Dinky Doo - Podcasts - Kid created video story podcasts</title>
<!--[if IE]>
<link href="stylesheet-ie.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if !IE]>-->
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
<!--<![endif]-->
<link rel="shortcut icon" href="favicon.ico" />
<script type="text/javascript" src="scripts/unitpngfix/unitpngfix.js"></script>
<SCRIPT SRC="scripts/swfobject.js" TYPE="text/javascript"></SCRIPT>
</head>
<body id="pinky_body_grownups_global">
<!-- Main Body Container -->
<div id="pinky_main_container">
	<!-- HEADER -->
	<!-- Top Flash Container -->
	<div id="pinky_flash_container">
		<DIV ID="PinkyFlashHeader">
		<SCRIPT TYPE="text/javascript">
			var so = new SWFObject("flash/index_html.swf?section=podcasts", "PinkyFlash", "970", "222", "9", false, "best");
			so.addParam("scale", "noScale");
			so.addParam("wmode", "transparent");
			so.addParam("menu", "false");
			so.addParam("quality", "best");
			so.addParam("flashvars", "initialFile=index.swf&amp;loadURL=flash/&amp;section=podcasts");
			so.write("PinkyFlashHeader");
		</SCRIPT>
		</DIV>
	</div>
	<!-- MAIN BODY -->
	<!-- Main Content Area -->
	<div id="pinky_main_content_container">
	<!--Sidebar-->
		<div id="sidebar"> 
			<div class="pinky_top_menu_podcasts">
				<div id="sidemenu">
					<div class="sideimage"><img src="images/podcasts/title_sidemenu_podcasts_154x28.png" title="Podcasts" alt="Podcasts" width="154" height="28" /></div>
				  <div class="clear"></div>           
					<ul>
					<li class="divider"></li>
					<li><a href="podcasts.html" target="_self">Pinky's Audio Podcasts</a></li>
					<li class="divider"></li>
					<li><a class="selected" href="podcasts_user_generated.php" style="font-size: .78em;" target="_self">Kid Created Video Podcasts</a></li>
					<li class="divider"></li>
					<li><a href="podcasts_instructions.html" target="_self">Instructions</a></li>
					<li class="divider"></li>
					<li><a href="podcasts_faqs.html">FAQs</a></li>
					<li class="divider"></li>
					</ul>
				</div><!-- close side menu-->
			</div><!-- close menu_podcasts-->
			<div class="pinky_shorter_images"><a href="http://store.sesamestreet.org/Dept.aspx?cp=21415_21459" target="_blank"><img src="images/grownups/sidebar_shop_pinky_214x147.png" title="Shop Pinky Products" alt="Shop Pinky Products" width="214" height="147" /></a></div>
	  </div><!-- close sidebar-->   
		<!--///////////////////////////////////////////////////////////// open main_content -->  
		<div id="main_content">
		<!-- content -->
			<a name="top" style="float: left; clear: both;"><img src="images/podcasts/title_kids_created_story_podcasts_629x37.png" title="Kid Crerated Video Story Podcasts" alt="Kid Crerated Video Story Podcasts" width="629" height="37" class="title_image" /></a>
		  <div class="kids_created_video" style='height: auto; min-height: 355px;'>
		<?php	if ($hasFeaturedStory) { ?>
				<div style="float: left; margin-bottom: 4px; text-align: left; width: 390px; margin-right: 10px; clear: both;">
					<div style="width: 390px; float: left; clear: both; font-weight: bold; font-size: 14px; margin-bottom: 2px;"><?php echo $featuredStory->getTitle()?></div>
					<div style="width: 390px; float: left; clear: both; margin-bottom: 1px; padding-top: 1px; padding-bottom: 4px;">By: <strong><?php echo $featuredStory->getAuthor()?></strong> &raquo; Age: <strong><?php echo $featuredStory->getAuthorAge()?></strong> &raquo; From: <strong><?php echo $featuredStory->getAuthorLocation()?></strong></div>
				</div>
				<div id="PinkyFlashContent" style='width: 400px; height: 340px; float: left; padding: 0; margin: 0;'><SCRIPT TYPE="text/javascript">
						var so = new SWFObject("flash/storyboxPlayer.swf", "PinkyFlash2", "400", "340", "9", false, "best");
						so.addParam("scale", "noScale");
						so.addParam("wmode", "transparent");
						so.addParam("menu", "false");
						so.addParam("quality", "best");
						so.addParam("flashVars","STORYID=<?php echo $SID?>&loadURL=flash/");
						so.write("PinkyFlashContent");
					</SCRIPT></div>
		<?php	} else { ?>
				<div style="float: left; padding: 3px; text-align: left; width: 400px; font-weight: bold; height: 355px; line-height: 355px;" align="center">-- THERE IS NO FEATURED STORY AT THE MOMENT --</div>
		<?php	} ?>
			</div><!-- close kids_created_video -->
			<div style="width:234; height:355px; padding:0px; margin:0px; float:right; padding-right:9px;"><img src="images/podcasts/img_kids_created_podcasts_right_side_234x355.png" width="234" height="355" border="0" usemap="#Map2" />
			<map name="Map2" id="Map2"><area shape="rect" coords="15,37,210,167" href="storybox.html" target="_self" title="Create Your Own Story Podcast" alt="Create Your Own Story Podcast" /><area shape="rect" coords="15,178,215,333" href="podcasts.html" target="_self" title="Pinky's Audio Podcasts" alt="Pinky's Audio Podcasts" />
			</map></div>
			<div style="padding-bottom:5px; padding-top: 5px;" class="clear"></div>
			<div class="content">
				<h3>This Week's Featured Story Podcast</h3><?php
				$_desc				= Utils::formatForDisplay($featuredStory->getDescription());
				$_desc				= ($_desc == '') ? '-- Description Goes Here --' : $_desc;
				?><p style="margin-top: 2px;"><?php echo $_desc?></p>
				<div style="padding-bottom: 8px;" class="clear"><!-- --></div>
				<a href="http://itunes.apple.com/WebObjects/MZStore.woa/wa/viewPodcast?id=297281866"><img title="Subscribe with iTunes" alt="Subscribe with iTunes" style="position:relative; right: 7px;" src="images/podcasts/btn_subscribe_with_itunes_204x34.png" width="204" height="34"/></a>
				<div class="clear"></div>
				<!--divider-->
				<div style=" padding-top:10px;" class="clear"></div>
				<div style="padding-bottom:10px;" class="clear"></div>
				<!--divider-->
				<!--start copying content block -->
			
				<!--end divider-->
			
				<!--end content block-->
				<!--a href="#"><img src="images/grownups/btn_printer_friendly_229x55.png" width="229" height="55" align="left" class="printer_friendly" /></a--></div>
			</div>
	  <div style="padding-bottom:50px;" class="clear"><!-- --></div>
		</div><!-- close main_content -->
		<!-- FOOTER -->
		<div id="pinky_footer">
		<img src="images/global/footer_970x226.png" width="970" height="260" border="0" usemap="#Map" style="padding:0px; margin:0px;" />
		<map name="Map" id="Map">
		<area shape="rect" coords="403,212,492,233" href="http://www.sesamestreet.org/termsofuse" target="_blank" alt="terms" />
		<area shape="rect" coords="218,211,396,236" href="http://www.sesameworkshop.org/" target="_blank" title="Sesame Workshop" alt="Sesame Workshop" />
		<area shape="rect" coords="498,212,595,233" href="http://www.sesamestreet.org/privacypolicy" target="_blank" alt="privacy" />
		<area shape="rect" coords="598,212,677,233" href="http://store.sesamestreet.org/Dept.aspx?cp=21415_21459" target="_blank" alt="shop" />
		<area shape="rect" coords="688,187,762,250" href="http://www.cartoonpizza.com" target="_blank" title="Cartoon Pizza" alt="Cartoon Pizza" />
		</map>
<div class="footerCopyright">
	Pinky Dinky Doo<sup>TM</sup> and associated characters, trademarks and design elements are owned and licensed by Cartoon Pizza, Inc. and Sesame Workshop. (c) 2008 Cartoon Pizza, Inc. and Sesame Workshop.  All Rights Reserved.
</div>
		</div>
	</div>
</div><!-- close pinky_main_container-->
</body>
</html>
