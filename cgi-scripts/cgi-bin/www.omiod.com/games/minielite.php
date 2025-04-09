<!DOCTYPE html>
<html lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>miniElite</title>
<link href='//fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
<style>
		* {
			text-shadow: 0 0 10px #0f0;
		}

		html {
			height: 100%;
		}

		body {
			color:#0a0;
			font-family: 'Offside', sans-serif;
			font-size:27px;
			overflow:hidden;
			height:100%;

			background-color:#030;
			background-image: -ms-linear-gradient(top, #040 0%, #000 100%);
			background-image: -moz-linear-gradient(top, #040 0%, #000 100%);
			background-image: -o-linear-gradient(top, #040 0%, #000 100%);
			background-image: -webkit-linear-gradient(top, #040 0%, #000 100%);
			background-image: linear-gradient(to bottom, #040 0%, #000 100%);
		}
		#cursor {
			color:#0d0;
			font-size:32px;
			vertical-align:middle;
		}
		#maininput {
			background-color:transparent;
			border:0;
			font-family: 'Offside', sans-serif;
			font-size:32px;
			color:#0f0;
			outline:0;
			vertical-align:middle;
		}
		#log div {
			font-size:24px;
			color:#0f0;
			opacity:0.5;
			padding:0 7px;
		}
		#log div:first-child {
			color:#0f0;
			font-size:28px;
			opacity:1;
		}

		#log div:nth-child(n+5) {
			color:#0c0;
			font-size:23px;
		}

		#log div:nth-child(n+10) {
			color:#0a0;
			font-size:19px;
		}

		a {
			color:#cf0;
		}
		.name {display: inline-block;}
		.name:first-letter {text-transform: uppercase;}

		#bottombar {
			width:100%;
			height:20px;
			background-color:rgba(255,255,255,0.8);
			position:fixed;
			bottom:0;
			left:0;
			font-size:12px;
			padding:10px;
		}
		#bottombar a {
			font-size:12px;
			text-shadow:none;
		}

	</style>
</head>
<body>
<span id='cursor'>&#9654;</span><input id="maininput" type='text' autofocus="autofocus">
<div id='log'></div>
<div id='bottombar'>

<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_pinterest_pinit"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50f1ded464e7e401"></script>

</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">

//////////////////

(function(){
    var credits = 100;
	var cargo = 0;
	var cargoSize = 5;
	var price = 10;
	var damage = 0;
	var enemy_damage;
	var status = 'landed';

	var planetName = newName();
	var planets = newPlanets( 2+Math.floor(Math.random() * 7) );

	function newName(){
		var cons = "bbccddffgghhjkkllmmnnpprrssstttvvwwxyz";
		var vocs = "aaeeiiou";
		var doubles = "bcdfklmnprstvxz"
		var baseSeq = "cvCvCvCvCvCvCv";
		var chr,seq;

		var start = ( Math.random()>0.5 ? 0 : 1 );
		var len = 4 + Math.floor(Math.random()*4)+start;
		var seq = baseSeq.substring(start,len);
		var out = "";

		for (var i = 0 ; i < seq.length ; i++ ) {
			switch ( seq[i] ) {
				case 'v':
					chr = any( vocs );
					break;
				case 'c':
				case 'C':
					chr = any( cons );
					break;
			}
			out += chr;
			if ( seq[i] == 'C' && doubles.indexOf(chr)!=-1 &&  Math.random()>0.4 ) out += chr;
		}

		return (seq,out);
	}

	function newPlanets(pnum){
		arr = [];
		for (var i=0 ; i<pnum ; i++ ) {
			var name = newName();
			arr.push( name );
		}
		return arr;
	}

	function addLog(txt){
		//var out = '<div>(' + status + ') '+txt+'</div>';
		var out = '<div>'+txt+'</div>';
		$("#log").prepend(out);
	}

	function any(arr){
		return  arr[Math.floor(Math.random() * arr.length)];
	}

	function doAction(action){

		var actions = action.split(" ");

		if ( damage < 100 ) {

			switch (actions[0]) {

				case 'hello':
				case 'hi':
				case 'pray':
				case 'talk':
					addLog( any(["Nobody hears you.","...","Nothing happens."]) );
					break;

				case 'help':
				case 'h':
					addLog("You can GO to other planets, LOOK around, BUY and SELL things, FIGHT bad guys, know more ABOUT this, and something else too.");
					break;

				case 'status':
					addLog("Your hull is at " + (100-damage) + "%, have " + credits + " credits and you are carring " + cargo + " tons out of " + cargoSize );
					break;

				case 'look':
				case 'l':
					switch (status) {
						case 'inspace':
							addLog("You are in open space. Why don't you GO to your destination?");
							break;
						case 'encounter':
							addLog("A pirate ship is blocking your path, you should FIGHT. ");
							break;
						default:
							addLog("You are at the <span class='name'>" + planetName + " space port.</span>");
					}
					break;

				case 'repair':
					if ( damage>0 ) {
						addLog("The workshop is out of service.");
					} else {
						addLog("You don't need this.");
					}
					break;

				case 'walk':
				case 'run':
					addLog( any(["You are too lazy for this.","Not again...","You know it is useless.","Ok. You are now tired."]) );
					break;

				case 'go':
				case 'fly':
					if ( status != "encounter" ) {
						if ( actions[1] != undefined ) {
							if ( $.inArray( actions[1] , planets) != -1 ) {
								if ( Math.random() > 0.5 ) {
									status = 'landed';
									price = 5 + Math.floor( Math.random()* 10 );
									planetName = actions[1];
									planets = newPlanets( 2+Math.floor(Math.random() * 7) );
									addLog("Arrived at <span class='name'>" + planetName + "</span>");
								} else {
									status = 'encounter';
									enemy_damage = 0;
									addLog("A pirate ship blocks your path !!!");
								}
							} else {
								addLog("You should check the MAP for the list of reachable planets.");
							}
						} else {
							addLog("If you don't know where to go, use the MAP.")
						}
					} else {
						addLog("You can't escape. You should fight!");
					}
					break;

				case 'buy':
				case 'b':
					if ( credits >= price ) {
						if ( cargo < cargoSize ) {
							credits -= price;
							cargo += 1;
							addLog("Bought 1 ton for "+price+" credits. Cargo holds " + cargo + " out of " + cargoSize);
						} else {
							addLog("Your cargo is full.");
						}
					} else {
						addLog("You don't have enough credits.")
					}
					break;

				case 'sell':
				case 's':
					if ( cargo >= 1 ) {
						credits += price;
						cargo -= 1;
						addLog("Sold 1 ton for "+price+" credits");
					} else {
						addLog("Your cargo is empty.");
					}
					break;

				case 'map':
					var list = "";
					for (var i = 0 ; i < planets.length ; i++ ) {
						list += "&bull; <span class='name'>" + planets[i] + "</span><br>";
					}
					addLog("Reachable planets:<br>"+list);
					break;

				case 'fight':
				case 'fire':
					if ( status == 'encounter' ) {
						var lost = 0;
						if ( Math.random() > 0.75 ) {
							var hit = 10+Math.floor( Math.random()* 30 );
							damage += hit;
							//addLog("You lost "+hit );
							lost = hit;
						}
						hit = 10+Math.floor( Math.random()* 50 );
						enemy_damage += hit;
						addLog("You inflicted "+hit+" damage points" + ( lost>0? ", and lost "+lost : "" ) + ( enemy_damage >= 100 ? ", pirate ship exploded" : "" ) + ( damage >= 100 ? ", but your ship exploded! Game Over" : "" ) + ".");

						if ( enemy_damage >= 100 ) {
							status = "inspace";
						}
					} else {
						addLog( any(["Nothing to fight today.","No bad dudes in sight.","You have no reasons to do this now."]) );
					}
					break;

				case 'pledge':
					addLog("Yeah, <a href='//elite.frontier.co.uk/' target='_blank' rel='nofollow'>this is a nice idea.</a> I did it :-)");
					break;

				case 'elite':
					addLog("It was a great game, but <a href='//elite.frontier.co.uk/' target='_blank' rel='nofollow'>Elite Dangerous</a> is going to be awesome.");
					break;

				case 'about':
					addLog("This is a 1-day project by <a href='//www.omiod.com'>Omiod</a> made just to wait for the release of <a href='//elite.frontier.co.uk/' target='_blank' rel='nofollow'>Elite Dangerous</a>!");
					break;

				case 'fastkat':
					addLog("You can play <a href='//www.omiod.com/games/fastkat.php'>FastKat</a> and <a href='//www.omiod.com/games/FK2/'>FastKat 2</a> if you already got bored.");
					break;

				default:
					addLog( any(["I don't understand, sorry.","You tried, but nothing happens.","You should refrain from doing this again.","There are better things to do than this."]) );


			}

		} else {

			if ( actions[0] == "restart" ) {
				location.reload();
			} else {
				addLog( "Game over, Plaease RESTART" );
			}

		}


	}

	function activate(){
		$("#maininput").focus();
	}

	function init(){

		$("input[type=text]").blur(function(){
		  setTimeout(activate, 333);
		}).keypress(function(e) {
			if(e.which == 13) {
				var command = $(this).val();
				if ( command != "" ) {
					$(this).val("");
					doAction( command.toLowerCase() );
				}
			}
		});

	}

	init();

	addLog("Welcome to miniElite 0.1");
	addLog("Type HELP for... help.");
	doAction('look');

}());

</script>
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
</body></html>
