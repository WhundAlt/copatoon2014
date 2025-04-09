<?php
if(isset($_GET["getkey"]) && empty($_GET["getkey"]) == false)
{
	echo "252cd0c538fef8c1b3aa2de0b729d878";
	die();
}

if(isset($_GET["getpixiloader"]))
{
	echo '["balysle\/balysle_doubt.png","balysle\/balysle_headhit.png","balysle\/balysle_hit.png","balysle\/balysle_laugh.png","balysle\/balysle_neutral.png","balysle\/balysle_reachdown.png","balysle\/balysle_shadow.png","balysle\/balysle_turniphit.png","balysle\/balysle_turniphold.png","balysle\/fembalysle_neutral.png","balysle\/fembalysle_transform.png","balysle\/femboybalysle_neutral.png","balysle\/femboybalysle_transform.png","balysle\/futabalysle_neutral.png","balysle\/futabalysle_transform.png","bg\/props\/dummy.png","bg\/props\/dummyfrog.png","bg\/props\/frog.png","bg\/backyard.png","bg\/backyardlater.png","bg\/backyardtransition.png","bg\/bg.png","bg\/cave_entrance.png","bg\/cave_stairs.png","bg\/cave_stairs_closed.png","bg\/forest_day.png","bg\/forest_night.png","bg\/intro.png","bg\/prologue.png","bg\/sanctuary.png","cutaway\/blackout.png","cutaway\/cu_backyard_crate.png","cutaway\/cu_backyard_crate_dummy.png","cutaway\/cu_backyard_crate_frog.png","cutaway\/cu_backyard_crate_froghump.png","cutaway\/cu_backyard_crate_frogjump.png","cutaway\/cu_backyard_crate_frogzap.png","cutaway\/cu_backyard_turnipbox.png","cutaway\/cu_sanctuary_balysle_charge.png","cutaway\/cu_sanctuary_balysle_dodge.png","cutaway\/cu_sanctuary_balysle_kicked.png","cutaway\/cu_sanctuary_balysle_kicked_1.png","cutaway\/cu_sanctuary_balysle_kicked_2.png","cutaway\/cu_sanctuary_balysle_knockedout.png","cutaway\/cu_sanctuary_balysle_kockedout.png","cutaway\/cu_sanctuary_balysle_pigjump.png","cutaway\/cu_sanctuary_balysle_pigzap.png","cutaway\/cu_sanctuary_balysle_standing.png","cutaway\/cu_sanctuary_ceiling.png","cutaway\/cu_sanctuary_ceiling_stone.png","cutaway\/cu_sanctuary_ceiling_stonefall.png","cutaway\/cu_sanctuary_ceiling_transform.png","cutaway\/cu_sanctuary_ceiling_zap.png","cutaway\/cu_sanctuary_cockrock.png","cutaway\/cu_sanctuary_egg.png","cutaway\/cu_sanctuary_necklace.png","cutaway\/cu_sanctuary_pigdog.png","cutaway\/cu_sanctuary_slip.png","hazel\/angry.png","hazel\/annoyed.png","hazel\/concern.png","hazel\/glee.png","hazel\/happy.png","hazel\/joy.png","hazel\/miffed.png","hazel\/neutral.png","hazel\/pick.png","hazel\/sad.png","hazel\/shy.png","hazel\/stare.png","hazel\/turnip.png","hazel\/turnipangry.png","hazel\/turnipdig.png","hazel\/turnipgross.png","hazel\/turnipneutral.png","hazel\/turnippick.png","hazel\/turnipworried.png","hazel\/worried.png","inset\/inset_01.png","monty\/angry.png","monty\/cheer.png","monty\/dummy.png","monty\/dummyhug.png","monty\/holding.png","monty\/laughing.png","monty\/neutral.png","monty\/ponder.png","monty\/praise.png","monty\/reach.png","monty\/thinking.png","monty\/turnip.png","other\/pigdog_attack.png","other\/pigdog_boob.png","other\/pigdog_neutral.png","other\/pigdog_transform.png","other\/pigdog_turnip.png","pixi-tween\/examples\/bunny.png","pixi-tween\/package.json","sex\/sex_fembalysle_0.png","sex\/sex_fembalysle_01.png","sex\/sex_fembalysle_02.png","sex\/sex_fembalysle_03.png","sex\/sex_femboybalysle_01.png","sex\/sex_femboybalysle_02.png","sex\/sex_femboybalysle_03.png","sex\/sex_femboyfutabalysle_02.png","sex\/sex_femboyfutabalysle_03.png","sex\/sex_futabalysle_01.png","sex\/sex_futabalysle_02.png","sex\/sex_futabalysle_03.png","spine\/intro_bg.json","spine\/pie.json","spine\/prologue.json","spine\/rain.json","spine\/sexbalysle.json","spine\/sexbalysle.png","spine\/skeleton.json","spine\/transition.json","unused\/angel2.json","arrow.png","cu_sanctuary_balysle_kicked_1.png","cu_sanctuary_balysle_kicked_2.png","gamebg.png","patreon.png","patreon_logo.png","patreonlogin.png","player.png","textfield.png"]';
	die();
}

if(isset($_GET["getsoundloader"]))
{
	echo '["sound\/ambient_forest.mp3","sound\/ambient_sanctuary.mp3","sound\/ambient_sanctuarydeep.mp3","sound\/click.wav","sound\/fx_crack.mp3","sound\/fx_demon_laugh.mp3","sound\/fx_groan.mp3","sound\/fx_helpme.mp3","sound\/fx_snort.mp3","sound\/fx_spell.mp3","sound\/fx_spellcharge_1.mp3","sound\/fx_spellcharge_2.mp3","sound\/fx_summon.mp3","sound\/fx_thud_1.mp3","sound\/fx_thud_2.mp3","sound\/fx_woosh.mp3","sound\/music_backyard.mp3","sound\/music_evening.mp3","sound\/music_prologue.mp3","sound\/music_sanctuary.mp3","sound\/music_sexy.mp3","sound\/music_smooth.mp3","sound\/pop.mp3","sound\/rainloop.wav","sound\/test.mp3"]';
	die();
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
	<title></title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="platform.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="addstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Bad+Script|Nunito|Quicksand" rel="stylesheet">	
	<!--<script src="../../src/pixi/loaders/SpineLoader.js"></script>
	<script src="../../src/pixi/extras/Spine.js"></script>-->
<script>
function createCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}
function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

createCookie('PHPSESSID','8ddi808n7jmb6ac912vkj389iq',7);</script>
</head>
<body>
	<div class="content">
		<h1></h1>
				<div id="loading">
			<div class="spinner">
				<div class="double-bounce1"></div>
				<div class="double-bounce2"></div>
				<div class="spinner-text">Loading</div>
			</div>
			<div id="loadingbarcont">
				<div id="loadingbar"></div>
			</div>
		</div>
		<div id="gamewrap">
			<div id="canvascontainer"></div>
			<div id="textbox" class="">
				<div id="story" class="">
				</div>	
			</div>	
			<script type="text/javascript">
				valid_user = true;
			</script>
					</div>
	</div>
	<div class='header' style="display:none;">
		<button id='save'>Save</button> 
		<form id="jsonFile" name="jsonFile" enctype="multipart/form-data" method="post">
			<input type='file' id='fileinput'>
			<input type='button' id='btnLoad' value='Load' onclick='loadFile();'>
		</form>
	</div>
    <script src="ink.js"></script>
    <script src="Hazel.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.js"></script>
    <script type="text/javascript" src="jquery.simulate.js"></script>
	<script src="lib/enscroll-0.6.2.min.js"></script>

	<script src="lib/pixi.js"></script>
	<script src="lib/pixi-spine.js"></script>
	<script src="lib/pixi-skeleton.js"></script>
	<script src="lib/json5.js"></script>
	<script src="lib/howler.core.js"></script>
	<script src="lib/plugins/howler.spatial.js"></script>
	<script src="settings.js"></script>
	<script src="reader.js"></script>
    <script src="main.js"></script>
	<a id="downloadAnchorElem" style="display:none"></a>
</body>
</html>
