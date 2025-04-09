<?php
if(isset($_GET["getpixiloader"]))
{
	echo '["Patreon\/choice9slice.png","img\/arrow.png","img\/susu_movie.json","img\/bg.json","img\/friend_01.png","img\/bg_bedroom.jpg","img\/incubus.png","img\/bg_bedroom_tv.jpg","img\/bg_bedroom_tv_on.jpg","img\/susu_nurse.json","img\/bg_black.jpg","img\/intro.json","img\/bg_church.jpg","img\/bg_church_booth_01.jpg","img\/cu_jogging_suprise.jpg","img\/bg_church_booth_02.jpg","img\/bg_church_room.jpg","img\/intro_succubus.png","img\/bg_church_room.png","img\/priest.png","img\/bg_clinic_inside.jpg","img\/bg_clinic_lobby.jpg","img\/prop_onahole.json","img\/bg_convention.jpg","img\/cu_library_book.jpg","img\/bg_convention_hotel_room.jpg","img\/bg_convention_hotel_room_wasted.jpg","img\/cu_jogging_cumlip.json","img\/bg_convention_hotel_roomup.jpg","img\/cu_library_kiss.jpg","img\/bg_front_entrance.jpg","img\/bg_frontentrance.jpg","img\/bg_hell.png","img\/screenframe.png","img\/bg_jogging_01.jpg","img\/bg_jogging_02.jpg","img\/bg_jogging_03.jpg","img\/susu_church.json","img\/bg_jogging_04.jpg","img\/bg_jogging_05.jpg","img\/bg_library_books.jpg","img\/cu_library_whisper.jpg","img\/bg_library_inside.jpg","img\/bg_movie.jpg","img\/susu_church_reveal.json","img\/bg_movie_lobby.jpg","img\/bg_peephole.jpg","img\/bg_shower.jpg","img\/susu_convention.json","img\/bg_summoning.png","img\/bg_tv_rpg_01.png","img\/bg_tv_rpg_02.png","img\/susu_convention_crowd.json","img\/bg_tv_rpg_03.png","img\/bg_tv_rpg_04.png","img\/bg_tv_rpg_05.png","img\/susu_jogging.json","img\/choices_eye.png","img\/susu_succubus.json","img\/credit1.png","img\/credit2.png","img\/credit3.png","img\/cu_bandaid.jpg","img\/susu_jogging_01.png","img\/cu_cellphone.png","img\/susu_jogging_02.png","img\/susu_jogging_03_wink.png","img\/cu_jackoff_02.json","img\/energy.json","img\/cu_onahole.jpg","img\/transition.json","img\/cu_pants.jpg","img\/cu_pants_check.jpg","img\/susu_library.json","img\/cu_postal_box.jpg","img\/cu_postal_clipboard.jpg","img\/cuframe.png","img\/susu_library_idle.png","img\/susu_movie_01_crawling_out.png","img\/susu_movie_01_on_screen.png","img\/susu_postal_handjob.json","img\/susu_postal_reveal.json","pixi-tween\/examples\/bunny.png","pixi-tween\/package.json","shader\/noise.png","arrow.png","bg.png","choice9slice.png","choice9slice_pink.png","choices_eye.png","cuframe.png","gamebg.png","logo.png","nineslice.png","noise.png","patreon.png","patreon_logo.png","patreonlogin.png","player.png","textbox.png"]';
	die();
}

if(isset($_GET["getsoundloader"]))
{
	echo '["sound\/ambient_arcade.mp3","sound\/ambient_bedroom.mp3","sound\/ambient_church.mp3","sound\/ambient_convention.mp3","sound\/ambient_dream.mp3","sound\/ambient_hospital.mp3","sound\/ambient_library.mp3","sound\/ambient_morning.mp3","sound\/ambient_neon.mp3","sound\/ambient_projector.mp3","sound\/ambient_trees.mp3","sound\/choiceclick.wav","sound\/click.wav","sound\/music_01.mp3","sound\/music_03.mp3","sound\/music_game.mp3","sound\/music_intrigue.mp3","sound\/music_intrigue_2.mp3","sound\/music_love.mp3","sound\/music_spooky.mp3","sound\/sfx_alarm.mp3","sound\/sfx_bookclose.mp3","sound\/sfx_bookopen.mp3","sound\/sfx_choir.mp3","sound\/sfx_clothes.mp3","sound\/sfx_clothes_02.mp3","sound\/sfx_curtain.mp3","sound\/sfx_doorbell.mp3","sound\/sfx_footsteps.mp3","sound\/sfx_footsteps_02.mp3","sound\/sfx_heartbeat.mp3","sound\/sfx_jogging.mp3","sound\/sfx_leafrustle.mp3","sound\/sfx_leatherstrap.mp3","sound\/sfx_monitorbeep.mp3","sound\/sfx_next.wav","sound\/sfx_pat.mp3","sound\/sfx_shower.mp3","sound\/sfx_sting_01.mp3","sound\/sfx_sting_02.mp3","sound\/sfx_syringe.mp3","sound\/sfx_tray.mp3","sound\/ui_choiceclick.wav","sound\/ui_next.wav"]';
	die();
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
	<title></title>
	<link rel="stylesheet" href="animate.css">
	<link rel="stylesheet" href="base.css">
	<link rel="stylesheet" href="platform.css">
    <link rel="stylesheet" href="extend.css">    	
	<link rel="stylesheet" href="theme.css">
	
	
	<link href="http://fonts.googleapis.com/css?family=Nunito|Quicksand" rel="stylesheet">	
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

createCookie('PHPSESSID','hreua62nh7j3ic1gsva7r9o8d9',7);</script>
</head>
<body>
	<div class="content">
					<div id="loggedin">
				<img src="patreon_logo.png">&nbsp; Welcome gen_5f3e2ca29af40				<a href="?logout=1">Log out</a>
			</div>
			<script type="text/javascript">
				valid_user = '66ee84cb54aec8b99ea990300fccfc1f';
			</script>
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
		<div id="gamewrap" class="noselect">

			<div id="canvascontainer"></div>
			<div id="textbox">
				<div id="story" class="">
				</div>
				<div id="achievements" class="achievement"></div>
			</div>	
			<div id="showtextbox" onclick="myFunction()"></div>
						<!--
			<div id="stat_stamina" class='statbox'>
				<span id="statname_energy" class="capitalize"></span>: <span id="statvalue_energy"></span>
			</div>
			<div id="stat_energy" class='statbox'>
				<span id="statname_energy" class="capitalize"></span>: <span id="statvalue_energy"></span>
			</div>
			-->
		</div>
		<div id="statbox" style="display:none;">
		</div>
	</div>
	<div class='header' style="display:none;">
		<button id='save'>Save</button> 
		<form id="jsonFile" name="jsonFile" enctype="multipart/form-data" method="post">
			<input type='file' id='fileinput'>
			<input type='button' id='btnLoad' value='Load' onclick='loadFile();'>
		</form>
	</div>


	
	<script type="text/javascript">
		function myFunction() {
			var x = document.getElementById('textbox');
			if (x.style.display === 'none') {
				x.style.display = 'inline-block';
			} else {
				x.style.display = 'none';
			}
		}
		
		var achievementTag = document.getElementById("achievements");
		var achivementTimer;
		
		// Achievement stuff
		function displayAchievement(title, description) {
			achievementTag.innerHTML = "<div id='closeAchievement' onclick='closeAchievement()'>x</div><h2>"+title+"</h2><p>"+description+"</p>";
			achievementTag.className = "open";
			
			achievementTimer = setTimeout(function(){
				achievementTag.className = "";
			}, 7000);
		}
		
		function closeAchievement() {
			achievementTag.className = "";
			clearTimeout(achievementTimer);
		}
	</script>
    <script src="ink.js"></script>
    <script src="susu.js"></script>
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
