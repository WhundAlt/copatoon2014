







<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>The Legend of Zelda: The Wind Waker</title>
	<link href="css/zelda.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="js/flash_detect.js"></script>
<script type="text/javascript" language="javascript" src="js/zelda.js"></script>

<script type="text/javascript" language="javascript" src="js/downloads.js"></script>

<map name="topRight" id="topRight">
<area alt="Newsletter Signup" coords="555,20,670,39" href="newsletter.jsp" target="_blank" onclick="launchNewsletter(); return false;" shape="RECT"/>
<area alt="Nintendo" coords="671,14,771,41" shape="RECT" href="http://www.nintendo.com" target="_blank" />
</map>
</head>
<body onload="initialize();">
<table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%"><tr><td valign="middle" align="center">

<table width="804" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td width="804"><img src="img/frame_top.gif" width="804" height="47" alt="" border="0" usemap="#topRight"/></td>
</tr>
</table>

<table width="804" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td width="45" valign="top" background="img/frame_lc.gif"><img src="img/frame_lt.gif" width="45" height="246" alt="" border="0" /></td>
	<td rowspan="2" valign="top">

<map name="downloads" id="downloads">
<area alt="Behind the Legend" coords="13,5,156,29" href="legend.jsp" onclick="return launchLegendHTML();" shape="RECT">
<area alt="Zelda Forums" coords="164,3,278,29" href="forum.jsp" target="_blank" onclick="launchForum(); return false;" shape="RECT">
</map>
<table width="730" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td><img src="img/dl_topnav.gif" width="730" height="40" alt="" border="0" usemap="#downloads" /></td>
</tr>
</table>
<table width="730" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td background="img/dl_background.jpg" align="center">
		<table width="730" border="0" cellpadding="0" cellspacing="0">
			<tr><td width="730"><img src="img/spacer.gif" width="730" height="19" alt="" border="0" /></td></tr>
		</table>


<!-- BEGIN CONTENT ON DOWNLOADS PAGE, WALLPAPER -->
<script language="JavaScript" type="text/javascript">
<!--

// create all variables for image preloading.
var wpIconsOff = new Array();
var wpIconsOn = new Array();
var wpPreview = new Array();
var numberItems = 6;
var selectedWp = 7;

function initialize() {
	if (document.images) {
	// preload images
		for (var i = 7; i <= 6 + numberItems; i++) {
			wpIconsOff[i] = new Image();
			wpIconsOff[i].src = "img/dl/wp_" + i + "_off.gif";
			wpIconsOn[i] = new Image();
			wpIconsOn[i].src = "img/dl/wp_" + i + "_on.gif";
			wpPreview[i] = "img/dl/wp_" + i + "_preview.gif";
		}
	}
}


function wpOver(num) {
	if (selectedWp != num) {
		swapImage("wp_" + num + "_icon", wpIconsOn[num]);
	}
}

function wpOut(num) {
	if (selectedWp != num) {
		swapImage("wp_" + num + "_icon", wpIconsOff[num]);
	}
}

function wpClick(num) {
	swapImageNoPre("wp_preview", wpPreview[num]);
	swapImage("wp_" + selectedWp + "_icon", wpIconsOff[selectedWp]);
	swapImage("wp_" + num + "_icon", wpIconsOn[num]);
	selectedWp = num;
	return false;
}

//-->
</script>

<map name="wallpaper" id="wallpaper"><area alt="Wallpaper" coords="1,-1,105,28" nohref shape="RECT">
<area href="downloads.jsp?page=2" coords="106,0,232,28" alt="Screensaver" shape="RECT">
<area href="downloads.jsp?page=3" coords="233,0,296,28" alt="Video" shape="RECT">
</map>
		<table width="730" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td width="15"><img src="img/spacer.gif" width="15" height="8" alt="" border="0" /></td>
				<td width="342">
					
							<table width="342" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td width="23"><img src="img/spacer.gif" width="23" height="1" alt="" border="0" /></td>
				<td width="12"><img src="img/spacer.gif" width="12" height="1" alt="" border="0" /></td>
				<td width="108"><img src="img/spacer.gif" width="108" height="1" alt="" border="0" /></td>
				<td width="188"><img src="img/spacer.gif" width="188" height="1" alt="" border="0" /></td>
				<td width="11"><img src="img/spacer.gif" width="11" height="1" alt="" border="0" /></td>
			</tr>
			<tr>
				<td><img src="img/spacer.gif" width="1" height="1" alt="" border="0" /></td>
				<td colspan="4"><img src="img/dl_frame_top.gif" width="319" height="12" alt="" border="0" /></td>
			</tr>
			<tr>
				<td><img src="img/spacer.gif" width="1" height="1" alt="" border="0" /></td>
				<td valign="top"><img src="img/dl_frame_tl_logo.gif" width="12" height="219" alt="" border="0" /></td>
				<td colspan="2" bgcolor="#C8D5E9" align="center" valign="top">
						<img src="img/dl_tabs_wallpaper.gif" width="296" height="28" alt="" border="0" usemap="#wallpaper">
						<div class="dlMargin">
						<div class="dlText" align="left">To decorate your desktop with these exciting images, follow these instructions: <span class="dlLink"><a href="instructions_mac.jsp" target="instructions" onclick="launchInstructions('instructions_mac.jsp'); return false;">MAC</a> | <a href="instructions_pc.jsp" target="instructions" onclick="launchInstructions('instructions_pc.jsp'); return false;">PC</a>&nbsp;&nbsp;&nbsp;&nbsp;</span><br />&nbsp;</div>
						
						<a href="http://media.zelda.com/zelda/gcn/img/dl/wallpaper7_med.jpg" target="wallpaper" onclick="return wpClick(7)" onmouseover="wpOver(7)" onmouseout="wpOut(7)"><img src="img/dl/wp_7_on.gif" name="wp_7_icon" width="82" height="64" alt="" border="0" /></a><img src="img/spacer.gif" width="9" height="1" alt="" border="0" /><a href="http://media.zelda.com/zelda/gcn/img/dl/wallpaper8_med.jpg" target="wallpaper" onclick="return wpClick(8)" onmouseover="wpOver(8)" onmouseout="wpOut(8)"><img src="img/dl/wp_8_off.gif" name="wp_8_icon" width="82" height="64" alt="" border="0" /></a><img src="img/spacer.gif" width="9" height="1" alt="" border="0" /><a href="http://media.zelda.com/zelda/gcn/img/dl/wallpaper9_med.jpg" target="wallpaper" onclick="return wpClick(9)" onmouseover="wpOver(9)" onmouseout="wpOut(9)"><img src="img/dl/wp_9_off.gif"  name="wp_9_icon" width="82" height="64" alt="" border="0" /></a><br /><img src="img/spacer.gif" width="264" height="8" alt="" border="0" /><br /><a href="http://media.zelda.com/zelda/gcn/img/dl/wallpaper10_med.jpg" target="wallpaper" onclick="return wpClick(10)" onmouseover="wpOver(10)" onmouseout="wpOut(10)"><img src="img/dl/wp_10_off.gif" name="wp_10_icon" width="82" height="64" alt="" border="0" /></a><img src="img/spacer.gif" width="9" height="1" alt="" border="0" /><a href="http://media.zelda.com/zelda/gcn/img/dl/wallpaper11_med.jpg" target="wallpaper" onclick="return wpClick(11)" onmouseover="wpOver(11)" onmouseout="wpOut(11)"><img src="img/dl/wp_11_off.gif" name="wp_11_icon" width="82" height="64" alt="" border="0" /></a><img src="img/spacer.gif" width="9" height="1" alt="" border="0" /><a href="http://media.zelda.com/zelda/gcn/img/dl/wallpaper12_med.jpg" target="wallpaper" onclick="return wpClick(12)" onmouseover="wpOver(12)" onmouseout="wpOut(12)"><img src="img/dl/wp_12_off.gif" name="wp_12_icon" width="82" height="64" alt="" border="0" /></a><br /></div>	
									</td>
				<td rowspan="2" valign="top"><img src="img/dl_frame_right.gif" width="11" height="269" alt="" border="0" /></td>
			</tr>
			<tr>
				<td colspan="3" rowspan="2"><img src="img/dl_frame_bl_logo.gif" width="143" height="84" alt="" border="0" /></td>
				<td bgcolor="#C8D5E9" nowrap="nowrap"><img src="img/spacer.gif" width="1" height="10" alt="" border="0" /><br /><img src="img/spacer.gif" width="1" height="40" alt="" border="0" align="left" />
						<div align="right"><span class="dlLink"><a href="downloads.jsp?page=4">MORE WALLPAPERS &gt;&gt;</a>&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
				</td>
			</tr>
			<tr>
				<td colspan="2"><img src="img/dl_frame_br_logo.gif" width="199" height="34" alt="" border="0" /></td>
			</tr>
		</table>	

				</td>
				<td width="19"><img src="img/spacer.gif" width="19" height="1" alt="" border="0" /></td>
				<td width="319">
					
							<table width="319" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td width="12"><img src="img/spacer.gif" width="12" height="1" alt="" border="0" /></td>
				<td width="296"><img src="img/spacer.gif" width="296" height="1" alt="" border="0" /></td>
				<td width="11"><img src="img/spacer.gif" width="11" height="1" alt="" border="0" /></td>
			</tr>
			<tr>
				<td colspan="3"><img src="img/dl_frame_top.gif" width="319" height="12" alt="" border="0" /></td>
			</tr>
			<tr>
				<td><img src="img/dl_frame_left.gif" width="12" height="269" alt="" border="0" /></td>
				<td bgcolor="#E0E8F3" align="center" valign="top">
					<img src="img/spacer.gif" width="1" height="3" alt="" border="0" /><br /><img src="img/spacer.gif" width="2" height="1" alt="" border="0" /><img src="img/dl/wp_7_preview.gif" name="wp_preview" width="291" height="218" alt="" border="0" />
					
					<table width="296" border="0" cellpadding="0" cellspacing="0" align="center">
						<tr>
							<td width="1"><img src="img/spacer.gif" width="1" height="8" alt="" border="0" /></td>
							<td width="295"><img src="img/spacer.gif" width="295" height="8" alt="" border="0" /></td>
						</tr>
						<tr>
							<td><img src="img/spacer.gif" width="1" height="35" alt="" border="0" /></td>
							<td background="img/dl_frame_bg.gif" align="center" valign="middle"><span class="dlLabel">SIZES:&nbsp;&nbsp;</span> <span class="dlLink"><a href="http://media.zelda.com/zelda/gcn/img/dl/wallpaper7_small.jpg" target="wallpaper" onclick="launchWp(selectedWp, 'small'); return false;">800 x 600</a> | <a href="http://media.zelda.com/zelda/gcn/img/dl/wallpaper7_med.jpg" target="wallpaper" onclick="launchWp(selectedWp, 'med'); return false;">1024 x 768</a> | <a href="http://media.zelda.com/zelda/gcn/img/dl/wallpaper7_large.jpg" target="wallpaper" onclick="launchWp(selectedWp, 'large'); return false;">1280 x 1024</a></span></td>
						</tr>
					</table>
									</td>
				<td><img src="img/dl_frame_right.gif" width="11" height="269" alt="" border="0" /></td>
			</tr>
			<tr>
				<td colspan="3"><img src="img/dl_frame_bottom.gif" width="319" height="13" alt="" border="0" /></td>
			</tr>
			<tr><td colspan="3"><img src="img/spacer.gif" width="1" height="21" alt="" border="0" /></td></tr>
		</table>	

				</td>
				<td width="35"><img src="img/spacer.gif" width="35" height="8" alt="" border="0" /></td>
			</tr>
			</table>



<!-- END CONTENT ON DOWNLOADS PAGE -->
	</td>
</tr>
</table>

<table width="730" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td><img src="img/dl_footer.gif" width="730" height="25" alt="" border="0" /></td>
</tr>
</table>
</td>
	<td width="29" valign="top" background="img/frame_rc.gif"><img src="img/frame_rt.gif" width="29" height="246" alt="" border="0"></td>
</tr>
<tr>
	<td background="img/frame_lc.gif" valign="bottom"><img src="img/frame_lb.gif" width="45" height="154" alt="" border="0" /></td>
	<td background="img/frame_rc.gif" valign="bottom"><img src="img/frame_rb.gif" width="29" height="154" alt="" border="0" /></td>
</tr>
</table>
<table width="804" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td width="71" valign="top" rowspan="2"><img src="img/frame_bl.gif" width="71" height="33" alt="" border="0" /></td>
	<td width="682" valign="top" colspan="2"><img src="img/frame_bc.gif" width="682" height="14" alt="" border="0" /></td>
	<td width="51" valign="top" rowspan="2"><img src="img/frame_br.gif" width="51" height="33" alt="" border="0" /></td>
</tr>
<tr>
	<td align="left" valign="top"><span class="nav"><a href="parents.jsp" target="_blank" onclick="launchParents(); return false;">Parents' Info</a> | <a href="faq.jsp" target="_blank" onclick="launchFAQ(); return false;">FAQ</a> | <a href="http://www.nintendo.com/privacy.jsp" target="_blank">Privacy Policy</a></span></td>
	<td align="right" valign="top"><span class="copyright"><a href="http://www.nintendo.com/copyright.jsp" target="_blank">&copy; 2002, 2003 Nintendo. TM, &reg; and the Nintendo GameCube<br /> logo are trademarks of Nintendo. &copy; 2003 Nintendo.</a></span></td>
</tr>
</table>

<table width="804" border="0" cellspacing="0" cellpadding="0">
<tr>
	<td width="75" rowspan="2"><img src="img/spacer.gif" width="75" height="1" alt="" border="0" /></td>
	<td><img src="img/spacer.gif" width="1" height="2" alt="" border="0" /></td>
	<td width="13" rowspan="2"><img src="img/spacer.gif" width="13" height="1" alt="" border="0" /></td>
	<td><img src="img/spacer.gif" width="1" height="2" alt="" border="0" /></td>
	<td width="13" rowspan="2"><img src="img/spacer.gif" width="13" height="1" alt="" border="0" /></td>
	<td width="121"><img src="img/spacer.gif" width="121" height="1" alt="" border="0" /></td>
	<td width="50" rowspan="2"><img src="img/spacer.gif" width="50" height="1" alt="" border="0" /></td>
</tr>
<tr>
	<td width="196" valign="top"><a href="http://www.nintendopower.com/zwwbundle/" target="_blank"><img src="img/btn_linkup.gif" width="196" height="74" alt="Link Up With Great Bundle Paks!" border="0" /></a></td>
	<td><img src="img/spacer.gif" width="336" height="1" alt="" border="0" /></td>
	<td valign="top" align="left"></td>
</tr>
</table>

</td></tr></table>

</body>
</html>
