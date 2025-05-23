<!DOCTYPE HTML>
<html>

<head>
<title>FastKat</title>
<meta charset="utf-8">
<meta name="description" content="HTML5 browser game. Avoid hitting the particles by moving with your mouse. Try to stay alive and earn as many points as possible.">
<meta name="keywords" content="html5, javascript, three.js, 3D, particles, game, browser game, race game, first person race">
<meta name="viewport" content="width=device-width,user-scalable=no; initial-scale=1.0; maximum-scale=1.0;" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta property='og:url' content='//www.omiod.com/games/fastkat.php' />
<meta property='og:image' content='//www.omiod.com/gfx/fastkat/fk1screenshot.png' />
<meta property='og:description' content='HTML5 browser game. Avoid hitting the particles by moving with your mouse. Try to stay alive and earn as many points as possible.' />
<style type="text/css">
			@font-face {
			  font-family: 'Geo';
			  font-style: normal;
			  font-weight: normal;
			  src: local('Geo'), local('Geo-Regular'), url('//themes.googleusercontent.com/font?kit=PZuLMEHg-ApVzHRFEvyOKg') format('truetype');
			}

			body {
				background-color: #000;
				margin: 0px;
				overflow: hidden;
				cursor:crosshair;
			}

			a {
				color:#0078ff;
			}

			.hud {
				position:absolute;
				z-index:9999;
				color:white;
				font-family: 'Geo', serif;
				font-size: 100%;
				font-style: normal;
				text-shadow: 0px 0px 12px #ddd, 0px 0px 6px #ddd;
			}

			.but {
				color:white;
				font-family: 'Geo', serif;
				font-size: 100%;
				font-style: normal;
				border-radius:0.3em;
				border:0.1em solid white;
				background-color: rgba(99,99,99,0.65);
				cursor:pointer;
				text-shadow: 0px 0px 2px #fff;
			}

			.but:hover {
				background-color: #404040;
			}

			#score {
				top:0px;
				right:20px;
			}

			#lives {
				top:10px;
				left:20px;
				letter-spacing:10px;
				font-size:100%;
			}

			#start, #options, #optionsExit {
				position:absolute;
				z-index:9999;
				text-align:center;
			}

			#start {
				top:50%;
				left:50%;
				width:6.2em;
				margin-left:-3.1em;
			}

			#options {
				top:68%;
				left:50%;
				width:6.2em;
				margin-left:-3.1em;
				font-size:60%;
			}

			#optionsExit {
				top:68%;
				left:50%;
				width:6.2em;
				margin-left:-3.1em;
				font-size:60%;
			}

			#hiscore {
				position:absolute;
				z-index:9999;
				top:10px;
				left:50%;
				width:10em;
				margin-left:-5em;
				text-align:center;
				font-size:90%;
				line-height:70%;
			}

			#info {
				position:absolute;
				z-index:9999;
				bottom:65px;
				left:50%;
				width:20em;
				margin-left:-10em;
				text-align:center;
				font-size:60%;
			}

			small {
				font-size:70%;
			}

			#title {
				position:absolute;
				z-index:9999;
				top:19%;
				left:50%;
				width:600px;
				margin-left:-300px;
				text-align:center;
				font-size: 200%;
			}

			#fk2 {
				position:absolute;
				text-decoration:none;
				padding:3px;
				width:120px;
				top:9px;
				left:10px;
			}

			#fk2 a {
				margin-bottom:10px;
			}

			/* #like {
				position:absolute;
				bottom:5px;
				left:50%;
				width:500px;
				margin-left:-250px;
				text-align:center;
			} */

			#optionspanel {
				position:absolute;
				top:0;
				left:50%;
				height:100%;
				width:10em;
				margin-left:-5em;
				display:none;
			}

			#opt_xaxis, #opt_yaxis, #opt_invincible, #opt_swirlonly, #opt_clear {
				position:absolute;
				left:50%;
				width:7em;
				margin-left:-3.5em;
				text-align:center;

				color:white;
				font-family: 'Geo', serif;
				font-size: 50%;
				font-style: normal;
				border-radius:0.3em;
				border:0.1em solid white;

				cursor:pointer;
				text-shadow: 0px 0px 2px #fff;

			}

			#opt_clear {
				background-color:#821;
			}

			#opt_xaxis { top:15%; }
			#opt_yaxis { top:23%; }
			#opt_swirlonly { top:40%; }
			#opt_invincible { top:48%; }
			#opt_clear { top:85%; }



			.active {
				background-color:#48f;
			}

			.inactive {
				background-color: rgba(66,120,140,0.65);
			}


		</style>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-58832-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>
<body id='body'>
<div id='score' class='hud'></div>
<div id='lives' class='hud'></div>
<div id='hiscore' class='hud'></div>
<div id='title' class='hud'>FastKat</div>
<div id='info' class='hud'></div>
<div id='like'>




</div>

<div id='fk2'>
<a href='//fastkat.omiod.com'><img src="//fastkat.omiod.com/gfx/fastkat_hub.png"></a>
<a href="https://docs.google.com/forms/d/e/1FAIpQLSfOe5VPWsDbG3XMMX3BEUH6eH3FJZ57fCp7NGHwvrrLRCX5hQ/viewform" target="_blank"><img src="//omiod.com/gfx2016/give_feedback.png"></a>
</div>


<div id='optionspanel'>
<div id='opt_xaxis' class='active' onClick="clickOption(event)">invert X axis</div>
<div id='opt_yaxis' class='active' onClick="clickOption(event)">invert Y axis</div>
<div id='opt_invincible' class='active' onClick="clickOption(event)">invincible</div>
<div id='opt_swirlonly' class='active' onClick="clickOption(event)">swirls only</div>
<div id='optionsExit' class='but' onClick="optionsExit()">OK</div>
<div id='opt_clear' class='but' onClick="resetHiscore()">Reset hi-score</div>
</div>
<div id='start' class='but' onClick="start()">START</div>
<div id='options' class='but smaller' onClick="showOptions()">OPTIONS</div>
<script type="text/javascript" src="js/Three.js"></script>
<script type="text/javascript">

			var STARS = 200;
			var FAR = 4000;
			var SAFE = 50;
			var PHASELEN = 10000;
			var NPHASES = 6;

			var speed;
			var score;
			var phase;
			var toNextPhase;
			var nextFrame;
			var nextP;
			var hiscore;
			var maxSpeed;

			var cr,cg,cb;

			var options = {"opt_xaxis":0 , "opt_yaxis":0 , "opt_invincible":0 , "opt_swirlonly":0 };

			var lives;
			var collision;

			var interval,hintsTimer;
			var tmp;
			var fullscreen=false;

			var container;
			var camera, scene, renderer;

			var particles, particle, count = 0;

			var mouseX = 0, mouseY = 0;

			var windowHalfX = window.innerWidth / 2;
			var windowHalfY = window.innerHeight / 2;

			var c1,c2;
			var bdy = document.getElementById("body");

			var messageNow = 0;
			var messages = [
				"version 1.4.3 - 2012/01/30",
				"run as fast as possible, avoiding any obstacle",
				"now with more reactive controls!",
				"and gets even faster after a while",
				"press F11 to enter/exit full screen",
				"this game works best with Chrome and a fast PC",
				"if too slow, try reducing the window size",
				"Firefox4 works fine too",
				"and they say IE9 does too!",
				"press ESC while playing to return here",
				"LMB = brakes"
				];

			function handleKeyDown(event) {
				if (event.keyCode == 27) {

					interval=window.clearInterval(interval);
					optionsExit();
					gameOver();

					if (event.preventDefault) event.preventDefault();
					if (event.stopPropagation) event.stopPropagation();
				}
			}

			container = document.createElement( 'div' );
			document.body.appendChild( container );

			camera = new THREE.Camera( 80, window.innerWidth / window.innerHeight, 1, FAR - 250 );
			camera.position.z = FAR;

			scene = new THREE.Scene();

			init();

			reset();
			titleScreen();
			onWindowResize();

			function get(id) {
				var v = localStorage.getItem(id) || 0;
				return parseInt(v);
			}

			function set(id,value) {
				localStorage.setItem(id,value);
				updateOption(id);
			}

			function updateOption(id) {
				value = get(id);
				var o = document.getElementById(id);
				if ( value == 0 ) {
					o.className = "inactive";
				} else {
					o.className = "active";
				}
			}

			function resetHiscore() {
				localStorage.setItem("hiscore", 0);
				hiscore = 0;
				hide("opt_clear");
			}

			function clickOption(e) {
				var id = e.target.id;
				var v = get(id);
				v = 1-v;
				set(id,v);
			}

			function html(id,txt) {
				var o = document.getElementById(id);
				o.innerHTML = txt;
			}

			function show(id) {
				var o = document.getElementById(id);
				o.style.display='block';
			}

			function hide(id) {
				var o = document.getElementById(id);
				o.style.display='none';
			}

			function titleScreen() {
				hiscore = localStorage.getItem("hiscore");
				if ( hiscore == 0 || hiscore == undefined || hiscore == null ) hiscore = 0;

				//var o = document.getElementById("hiscore");
				//o.innerHTML = "hi-score "+hiscore;
				html("hiscore","hi-score "+hiscore);

				show("hiscore");
				show("title");
				// show("omiod");
				show("fk2");
				// show("fkneon");
				//show("fkgl");
				// show("like");
				show("options");
				show("info");
				hide("lives");

				if (interval != undefined) interval=window.clearInterval(interval);
				if (hintsTimer != undefined) hintsTimer=window.clearInterval(hintsTimer);

				interval = setInterval(demo, 1000 / 60);
				hintsTimer = setInterval(showHints, 3000);
			}

			function start() {
				hide("start");
				hide("hiscore");
				hide("title");
				// hide("omiod");
				hide("fk2");
				// hide("fkneon");
				//hide("fkgl");
				// hide("like");
				hide("info");
				hide("options");
				show("lives");

				options.opt_xaxis = get("opt_xaxis");
				options.opt_yaxis = get("opt_yaxis");
				options.opt_invincible = get("opt_invincible");
				options.opt_swirlonly = get("opt_swirlonly");

				if (interval != undefined) interval=window.clearInterval(interval);
				if (hintsTimer != undefined) hintsTimer=window.clearInterval(hintsTimer);

				reset();
				updateLives();
				interval = setInterval(loop, 1000 / 60);

				maxSpeed = 50;

				initPhase( 1 );
			}

			function gameOver() {
				var startext = [];
				startext[0] = "START";
				startext[1] = "TRY AGAIN";
				startext[2] = "ONCE MORE";
				startext[3] = "DO IT AGAIN";
				startext[4] = "RESTART";
				startext[5] = "WANNA PLAY";
				startext[6] = "ONE MORE TIME";
				startext[7] = "GO !!!";
				bdy.style.backgroundColor = '#000';

				html("start",startext[ Math.floor(Math.random() * startext.length) ]);

				show("start")

				hiscore = localStorage.getItem("hiscore");
				if ( hiscore == 0 || hiscore == undefined || hiscore == null ) hiscore = 0;

				if ( hiscore < score && options.opt_invincible == 0 ) {
					hiscore = score;
					localStorage.setItem("hiscore", hiscore);
				}

				titleScreen();
			}

			function initPhase( ph ) {
				phase = ph;
				toNextPhase = 3000 + Math.random() * PHASELEN;

				if ( options.opt_swirlonly == 1 ) phase = 3;

				switch ( phase ) {

					case 0:
						break;

					case 1:
						break;

					case 2:
						c1 = Math.random() * 6.28;
						if ( Math.random() > 0.5 )
							c2 = Math.random() * 0.005;
						else
							c2 = 0;
						break;

					case 3:
						c1=Math.random()*500 + 10;
						c2=Math.random()*20 + 1;
						break;

					case 4:
						c1 = Math.random()*500 + 10;
						c2 = c1/2;
						break;

					case 5:
						c1 = Math.random()*10 + 5;
						c2 = Math.random()*10 + 5;
						break;

				}

				//console.log("init phase :"+c1+" , "+c2)

			}


			function updateLives() {
				var out = "";
				for ( var i = 0; i<lives ; i++ ) out += "¤";
				//var lv = document.getElementById("lives");
				//lv.innerHTML = out;
				html("lives",out);
			}

			function reset() {
				speed = 0;
				score = 0;
				phase = 4;
				nextFrame = 0;
				nextP = 0;
				lives = 2;
				collision = 0;

				for ( var i = 0; i < STARS; i ++ ) {
					particle = particles[ i ];
					particle.position.x = (i % 2) * 1200 - 600;
					particle.position.y = -300;
					particle.position.z = i * ( FAR / STARS ) ;
					particle.scale.x = particle.scale.y = 17;
				}
			}

			function init() {
				resetFont();

				particles = new Array();

				for ( var i = 0; i < STARS; i ++ ) {

					//particle = particles[ i ] = new THREE.Particle( new THREE.ParticleCircleMaterial( { color: 0xffffff, opacity: 1, blending: THREE.AdditiveBlending } ) );
					//particle = particles[ i ] = new THREE.Particle( new THREE.ParticleCircleMaterial( { color: 0xffffff, opacity: 1, blending: THREE.SubtractiveBlending } ) );
					particle = particles[ i ] = new THREE.Particle( new THREE.ParticleCircleMaterial( { color: 0xffffff, opacity: 1 } ) );

					scene.addObject( particle );
				}

				renderer = new THREE.CanvasRenderer();
				//renderer.setClearColor( 0xff0000, 1 );
				renderer.setSize( window.innerWidth, window.innerHeight );
				container.appendChild( renderer.domElement );

				document.addEventListener( 'mousemove', onDocumentMouseMove, false );
				//document.addEventListener( 'touchstart', onDocumentTouchStart, false );
				//document.addEventListener( 'touchmove', onDocumentTouchMove, false );
				document.addEventListener( 'mousedown', onDocumentMouseDown, false );
				window.addEventListener( 'resize', onWindowResize, false );
				window.addEventListener('keydown', handleKeyDown, true)

				//updateLives();

			}

			function resetFont() {
				var wh = window.innerHeight / 11;
				bdy.style.fontSize = wh+'px';
			}

			function onWindowResize(){
				windowHalfX = window.innerWidth / 2;
				windowHalfY = window.innerHeight / 2;
				camera.aspect = window.innerWidth / window.innerHeight;
				camera.updateProjectionMatrix();
				renderer.setSize( window.innerWidth, window.innerHeight );
				resetFont();

				fullscreen = ( window.innerWidth == window.outerWidth )
				//console.log("full:"+fullscreen);

				//console.log( window.innerWidth +","+ document.body.clientWidth +","+ document.width +","+  document.documentElement.clientWidth +","+ window.outerWidth );

			}

			function onDocumentMouseMove( event ) {

				if ( options.opt_xaxis == 0 )
					mouseX = event.clientX - windowHalfX;
				else
					mouseX = windowHalfX -event.clientX;

				if ( options.opt_yaxis == 0 )
					mouseY = event.clientY - windowHalfY;
				else
					mouseY = windowHalfY -event.clientY;

			}

			/*
			function onDocumentTouchStart( event ) {
				if ( event.touches.length == 1 ) {
					event.preventDefault();
					mouseX = event.touches[ 0 ].pageX - windowHalfX;
					mouseY = event.touches[ 0 ].pageY - windowHalfY;
				}
			}

			function onDocumentTouchMove( event ) {
				if ( event.touches.length == 1 ) {
					event.preventDefault();
					mouseX = event.touches[ 0 ].pageX - windowHalfX;
					mouseY = event.touches[ 0 ].pageY - windowHalfY;
				}
			}
			*/

			function onDocumentMouseDown( event ) {
				event.preventDefault();
				speed = speed *0.75;
			}

			//

			function loop() {

				camera.position.x += ( (mouseX/windowHalfX)*700 - camera.position.x ) * .08;
				camera.position.y += ( -(mouseY/windowHalfY)*600 - camera.position.y ) * .08;

				loopSpeed = speed;

				if ( speed < 50 ) {
					cr = cg = cg = 1;
				} else if ( speed > 90 ) {
					cr = Math.random();
					cg = Math.random();
					cb = Math.random();
				} else if ( speed > 80 ) {
					cr = 1;
					cg = 0;
					cb = 0;
				} else if ( speed > 70 ) {
					cr = 0.8;
					cg = 0.2;
					cb = 1.0;
				} else if ( speed > 60 ) {
					cr = 1;
					cg = 0.9;
					cb = 0.1;
				} else {
					cr = 0.5;
					cg = 0.9;
					cb = 1;
				}

				for ( var i = 0; i < STARS; i ++ ) {
					particle = particles[ i ];
					particle.position.z += loopSpeed;

					var color = particles[ i ].materials[ 0 ].color;

					if ( speed >= 50 ) {
						color.r = (particle.position.z / FAR * cr );
						color.g = (particle.position.z / FAR * cg );
						color.b = (particle.position.z / FAR * cb );

					} else {
						color.r = color.g = color.b = (particle.position.z / FAR);
					}

					//color.r = color.g = color.b = (particle.position.z / FAR);
					color.updateStyleString();


					if (particle.position.z > FAR) {
						particle.position.z -= FAR;

						nextFrame ++;

						switch ( phase ) {
							case 1:
								if ( Math.random() < 0.95 ) {
									particle.position.x = Math.random() * 3000 - 1500;
									particle.position.y = Math.random() * 3000 - 1500;
								} else {
									particle.position.x = camera.position.x + Math.random() * 200 - 100;
									particle.position.y = camera.position.y + Math.random() * 200 - 100;
								}
								break;

							case 2:
								tmp = Math.random() * 3000 - 1500;
								particle.position.x = camera.position.x + Math.cos(c1)*tmp;
								particle.position.y = camera.position.y + Math.sin(c1)*tmp;
								c1 += c2;
								break;

							case 3:
								particle.position.x = camera.position.x + c1 * Math.cos(nextFrame/c2);
								particle.position.y = camera.position.y + c1 * Math.sin(nextFrame/c2);
								break;

							case 4:
								particle.position.x = camera.position.x + Math.random() * c1 - c2;
								particle.position.y = camera.position.y + Math.random() * c1 - c2;
								break;

							case 5:
								particle.position.x = 1000 * Math.cos(nextFrame/c1);
								particle.position.y = 1000 * Math.sin(nextFrame/c2);
								break;


						}

					}

					if ( options.opt_invincible == 0 ) {
						if ( Math.abs( particle.position.x-camera.position.x) < SAFE && Math.abs( particle.position.y-camera.position.y) < SAFE && Math.abs( particle.position.z-camera.position.z) < SAFE ) {
							if ( collision < 0 ) {
								lives --;
								updateLives();
							}
							speed = -3;
							collision = 50;
						}
					}

				}

				speed += 0.06;
				maxSpeed = Math.min(maxSpeed + 0.008 , 150 );

				if ( speed > maxSpeed ) {
					speed = maxSpeed;
				}

				if ( speed > 50 ) {
					score ++;
				}

				toNextPhase -= Math.floor(speed);
				if ( toNextPhase < 0 ) {
					initPhase( Math.floor( Math.random() * NPHASES )+1 );
				}

				collision --;
				if ( collision > 0 ) {
					tmp = Math.floor( Math.random()*collision*5);
					bdy.style.backgroundColor = 'rgb('+tmp+','+Math.floor( tmp/2 )+',0)';
				} else {
					bdy.style.backgroundColor = '#000';
				}

				html("score",score);
				//html("score", Math.floor(speed) );

				renderer.render( scene, camera );

				if ( collision < 0 && lives <=0 ) {
					interval=window.clearInterval(interval);
					gameOver();
				}

			}

///

			function demo() {

				for ( var i = 0; i < STARS; i ++ ) {
					particle = particles[ i ];
					particle.position.z += 0.1;

					var color = particles[ i ].materials[ 0 ].color;
					if ( Math.abs(i - collision) < 10 ) {
						if ( i % 2 == 0 ) {
							color.r = (particle.position.z / FAR);
							color.g = color.b = 0;
						} else {
							color.g = (particle.position.z / FAR);
							color.r = color.b = 0;
						}
					} else {
						color.r = color.g = color.b = (particle.position.z / FAR * 0.33);
					}
					color.updateStyleString();
				}

				collision ++;
				if ( collision >= STARS ) collision = 0;

				renderer.render( scene, camera );

				/*
				if ( !fullscreen )
					show("info");
				else
					hide("info");
				*/

			}

			function showHints() {
				//console.log("hints");

				//var o = document.getElementById("info");
				//o.innerHTML = messages[messageNow];
				html("info",messages[messageNow]);

				messageNow++;
				if ( messageNow >= messages.length ) messageNow = 0;
			}

			function showOptions() {
				hide("start");
				hide("options");
				hide("title");
				hide("info");
				hide("score");

				html("hiscore","options");
				updateOption("opt_xaxis");
				updateOption("opt_yaxis");
				updateOption("opt_invincible");
				updateOption("opt_swirlonly");
				show("opt_clear");

				show("optionspanel");


			}

			function optionsExit() {
				hide("optionspanel");
				html("hiscore","hi-score "+hiscore);

				show("start");
				show("options");
				show("title");
				show("info");
				show("score");
			}

		</script>
</body>
</html>
