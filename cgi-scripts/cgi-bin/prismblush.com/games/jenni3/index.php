<!DOCTYPE HTML>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
	<title></title>
  	<link rel="preload" href="img/PHONEbackground2.png" as="image">
  	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/modalbox.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/game.css">
	<link rel="stylesheet" href="user/patreon.css">

	<link href="http://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="jennitruthordare.js"></script>
    <script src="cookie.js.php"></script>
    <script src="settings.js"></script>
    
    <!-- delay readystart until mobile.js is loaded -->
  	<link rel="preload" href="mobile.js" as="script">
    <script>
    	$.holdReady( true );
    	$.getScript( "mobile.js", function() {
    	  $.holdReady( false );
    	});    	
    </script> 

<!-- <style>
	body { display: none; }
</style>
 -->
</head>
<body id="gamebody">
<!-- SESSION SCRIPT	 -->
	<div id="loggedin patreon" class="hide">
			</div>

	<!-- SESSION BEG SCRIPT -->
	<div class="login hide">
					<div id="loginwrap">
				<h3>Login with Patreon to unlock exclusive content</h3>
				<div>
						<a href="http://www.patreon.com/oauth2/authorize?response_type=code&client_id=2895ec06c7075d7413dd63da226a923e3812c9aa5b8a550d508518834f565db4&redirect_uri=" target="_parent">
		<img src="user/patreonlogin.png" id="login">
	</a>				</div>
				<div>
				<button id="loginno">No thanks</button></div>
			</div>
			<script type="text/javascript">
				var valid_user = true;
			</script>
			
	</div>


	<!-- GAME CONTENT WRAPPER -->
	<div class="content">
		<div class="modal-overlay closedmodal" id="modal-overlay"></div>
		
		<!-- LOADER -->
		<div id="loading">
		<div class="loading-content">
			<div class="spinner-container">
				<div class="double-bounce1 bounce"></div>
				<div class="double-bounce2 bounce"></div>
			</div>
			<div class="spinner-text">Loading</div>
			<div class="barcontainer">
				<div class="bar"></div>
			</div>			
		</div>
		</div>

		<!-- GAME -->
		<div id="gamewrap" class="hidden">
			<div id="stage">
				<div id="curtain"></div>
				
				<div id="canvascontainer"></div>
				<div id="textbox" class="closed" onscroll="">
					<div id="story" class="vertical dragscroll"></div>
					<div id="achievements" class="achievement"></div>
					<div id="expandtextbox" class="closed widget" onclick="expandwidget()"></div>
				</div>	
				<div id="showtextbox" class="widget" onclick="hidebox()"></div>

				<div id="stat_playscore" class="statbox">
					<span class="stat">Score:</span><span id="statvalue_playscore"></span>
				</div>
			</div>

		</div>

		<h3 id="more" class="hide"><a></a></h3>

		<!-- MODAL -->
		<div class="modal closedmodal" id="modal">
		  <button class="close-button" id="close-button">Obvious Close Button</button>
		  <div class="modal-guts">
				
			<h1>Modal Example</h1>
			<div id="stat_playscore" class="modal-score">
				<span class="stat">Score:</span><span id="statvalue_playscore"></span>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae expedita corrupti laudantium aperiam, doloremque explicabo ipsum earum dicta saepe delectus totam vitae ipsam doloribus et obcaecati facilis eius assumenda, cumque.</p>		     

		  </div>
		</div>
		<button id="open-button" class="open-button hide">Open Button</button>


		<!-- DEBUG -->
		<div class="autostatbox"></div>
		<div class='header' style="display:none;">
			<button id='save'>Save</button> 
			<form id="jsonFile" name="jsonFile" enctype="multipart/form-data" method="post">
				<input type='file' id='fileinput'>
				<input type='button' id='btnLoad' value='Load' onclick='loadFile();'>
			</form>
		</div>
	

<!-- SCRIPT -->
		<script type="text/javascript">
		// prevent dragging
			$(document).on("dragstart", function() {
			     return false;
			});			

		// scrollbar jumping

		// modal
			var modal = document.querySelector("#modal");
			var modalOverlay = document.querySelector("#modal-overlay");
			var closeButton = document.querySelector("#close-button");
			var openButton = document.querySelector("#open-button");
			closeButton.addEventListener("click", function() {
			  modal.classList.toggle("closedmodal");
			  modalOverlay.classList.toggle("closedmodal");
			});
			openButton.addEventListener("click", function() {
			  modal.classList.toggle("closedmodal");
			  modalOverlay.classList.toggle("closedmodal");
			});		

		// hide box widget
			function hidebox() {
				$("#textbox")[0].classList.toggle("hidden");
			}

		// expand box widget
			function expandwidget() {
				var expandtextbox = document.getElementById('expandtextbox');
				var textbox = document.getElementById('textbox');
				textbox.classList.toggle("closed");
				textbox.classList.toggle("open");
				expandtextbox.classList.toggle("closed");
				expandtextbox.classList.toggle("open");
			}
			
		// Achievements
			var achievementTag = document.getElementById("achievements");
			var achivementTimer;
		
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

		<script src="mobile.js"></script> 
		
<!-- external -->
		<script src="lib/pixi-skeleton.js"></script>
		<script src="lib/enscroll-0.6.2.min.js"></script>
		<script src="lib/dragscroll.js"></script>
		
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-simulate/1.0.1/jquery.simulate.min.js"></script>
		<!-- <script src="lib/jquery.simulate.js"></script> -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/pixi.js/4.8.2/pixi.min.js"></script>
		<!-- <script src="lib/pixi.js"></script> -->
		<script src="lib/pixi-spine.min.js"></script>
		<!-- <script src="lib/pixi-spine.js"></script> -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/json5/0.5.1/json5.min.js"></script>
		<!-- <script src="lib/json5.js"></script> -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/howler/2.0.15/howler.core.min.js"></script>
		<!-- <script src="lib/howler.core.js"></script> -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/howler/2.0.15/howler.spatial.min.js"></script>
		<!-- <script src="lib/plugins/howler.spatial.js"></script> -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		<!-- <script src="lib/jquery.easing.1.3.js"></script> -->

		<!-- internal -->
		<script src="ink.js"></script>
		<script src="visualassets.js"></script>
		<script src="soundassets.js"></script>
		<script src="reader.js"></script>
		<script src="main.js"></script>
		<script src="filters.js"></script>
		
<!-- 		<script>
		$(window).on("load", function() {
		     $("body").fadeIn(1);
		});
		</script>
 -->	
	<!-- deferred loading -->
		<script>
			function init() {
			var imgDefer = document.getElementsByTagName('img');
			for (var i=0; i<imgDefer.length; i++) {
			if(imgDefer[i].getAttribute('data-src')) {
			imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
			} } }
			window.onload = init;
		</script> 

		<a id="downloadAnchorElem" style="display:none"></a>

		<div style="position:absolute;left:-99999px;top:-99999px;visibility:hidden">
		<img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="shader/noise.png">
		<img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="user/patreonlogin.png">
		<img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="user/patreon_logo.png">
		<img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/SPLT_toiletfloor.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/GAPE_prop_pole.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/OFAC_jenni.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/FOND_jenni.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/CUMO_pillow.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/UNDE_jenni.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/TOILET_floor.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/BAR.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/MAKE_jenni_1.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/LOBBY_floor.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/NAKE_jenni.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/BLOW_jenni_2.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/ROOM.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/PROS_jenni.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/CUMO_sink.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/SPLT_lobbyfloor.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/BAR_floor.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/COND_jenni_1.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/TOILET.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/GRAFFITI.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/GAPE_prop_weight.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/GROP_jenni.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/MAKE_jenni_2.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/DIRT_jenni.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/TITLE.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/CUMO_jenni.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/blank.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/FUCF_jenni.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/SPLT_jenni.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/BLOW_jenni_3.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/SPLT_spafloor.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/BLOW_jenni_4.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/BAR_floor.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/SPLT_gymfloor.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/INTRO_deepthroat.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/BLOW_jenni_1.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/TITLE_base.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/FLAS_jenni.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/GAPE_jenni.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/SHOT_jenni.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/SHOT_spatub.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/SPLT_barfloor.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/COND_losecondom.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/CUMO_stool.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/CFAC_jenni.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/GAPE_prop_bottle.png">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/SPA.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/GYM.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/LOBBY.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/SPA_floor.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/PHONEbackground.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/CUMO_spatub.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/BAR.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/GYM_floor.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/ROOM_floor.jpg">
	    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="img/prefetch/FUCM_jenni.png">
		</div>
	</div>
<!--
//var textboxheight = document.getElementById('textbox').clientHeight;
//document.getElementById('textbox').classlist.height = textboxheight+'px';
//document.getElementById('textbox').classList.toggle("hidden")
//$('#someDiv').height();
 -->
<!-- 
<p class="show parsed"> 
text lines
    <span class="" tooltip="infinite" tooltip-position="bottom" style="
    text-decoration: underline;
"> hell </span> test

</p>
-->
</body>
</html>
