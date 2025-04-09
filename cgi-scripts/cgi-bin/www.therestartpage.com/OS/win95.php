<style type="text/css">
html, body, #container {
		overflow: hidden !important;
		cursor:url(OS/../images/blank.gif), -moz-zoom-in;
		}
 body,html {height:100%;padding:0;margin:0;background-position: left bottom;
	background-repeat: repeat-x;
	background-attachment: fixed;
	background-color: #FFF;}
	.container {
		width:900px;
		margin:0 auto 0 auto;
	}
	
.os, .set, #restart_detail, #social-home, .go-back { display: none !important;}
	
	.bios {
		position:absolute;
		top:50px;
		display:none;
	}
	
	

	.screen {
		position:relative;
height:100%;
overflow:hidden;
text-align:center;
width:100%;
	}

	.total {	left:0;
	top:0;
	padding:0;
	width:100%;
	text-align:center;
	height:100%;
	}

	.bottom {
		position:absolute;
		width: 100%;

		bottom:0px;
		z-index:999;
		float:left;
		height:15px;
	}
	</style>
	
	<script>
		$(function(){
			$('body').css('background','#000');
			var play= function(file){
				var audio= document.createElement('audio');
				audio.setAttribute('src', file);
				audio.play();
			}
			$('.bios,#boot_windows95_screen').hide();
			
			setTimeout("$('#bios0').show();",1000);
			setTimeout("$('#bios0').hide();",3000);
			
			setTimeout("$('#bios1').show();",3000);
			setTimeout("$('#bios1').hide();",5000);
			
			setTimeout("$('#bios2').show()",5000);
			setTimeout("$('#bios2').hide()",7000);
			
			setTimeout("$('#bios3').show();",7000);
			setTimeout("$('#bios3').hide();",9000);
			
			setTimeout("$('#bios4').show();",9000);
			setTimeout("$('#bios4').hide();",12000);
			
			setTimeout("$('#bios5').show();",12000);
			setTimeout("$('#bios5').hide();",15000);
			
			setTimeout("$('#bios6').show();",15000);
			setTimeout("$('#bios6').hide();",18000);
			
			setTimeout("$('#bios7').show();",18000);
			setTimeout("$('#bios7').hide();",21000);
			
			setTimeout("$('#bios8').show();",21000);
			setTimeout("$('#bios8').hide();",24000);
			
			setTimeout("$('#bios9').show();",24000);
			setTimeout("$('#bios9').hide();",27000);
			
			setTimeout("$('#bios10').show();",27000);
			setTimeout("$('#bios10').hide();",36000);
			
			setTimeout("$('#bios11').show();",30000);
			setTimeout("$('#bios11').hide();",36000);
			
			setTimeout("$('#boot_windows95_screen').show();",36000);
			setTimeout("$('#boot_windows95_screen').hide();",42000);
			
			//setTimeout("$('#win_gif_2').show()",36000);
			//setTimeout("$('#win_gif_2').hide();",42000);

			setTimeout("$('.win95_container').hide();",36000);
			
			setTimeout(function(){play('OS/media/win95/login.wav')},41000);					

			setTimeout("$('body').css('background','#008080');",42000);
			//setTimeout("$('#bootup').hide();",51000);
			
			$('body').mouseover(function()
			{
			$(this).css({cursor: 'none'});
			});

		});
	</script>
	
	<body>
	
	<em class="time" title="48000"></em>

	<div class = "win95_container container">
		<div id = "bios">
			<img src = "OS/media/win95/0.gif" id = "bios0" class = "bios"/>
			<img src = "OS/media/win95/1.jpg" id = "bios1" class = "bios"/>
			<img src = "OS/media/win95/2.jpg" id = "bios2" class = "bios"/>
			<img src = "OS/media/win95/3.jpg" id = "bios3" class = "bios"/>
			<img src = "OS/media/win95/4.jpg" id = "bios4" class = "bios"/>
			<img src = "OS/media/win95/5.jpg" id = "bios5" class = "bios"/>
			<img src = "OS/media/win95/6.jpg" id = "bios6" class = "bios"/>
			<img src = "OS/media/win95/7.jpg" id = "bios7" class = "bios"/>
			<img src = "OS/media/win95/8.jpg" id = "bios8" class = "bios"/>
			<img src = "OS/media/win95/9.jpg" id = "bios9" class = "bios"/>
			<img src = "OS/media/win95/10.jpg" id = "bios10" class = "bios"/>
			<img src = "OS/media/win95/11.jpg" id = "bios11" class = "bios"/>
			
		</div> <!-- Bios Ends-->
	</div> <!-- Class Ends -->
		<!--<div id = "bootup">-->
			
		<div id="boot_windows95_screen">
			<div class="screen" style="width:100%;text-align:center;height:100%;"><img src="OS/media/win95/win95_900.gif" height="100%" id="win_gif_1" /></div>
			<div style="position:absolute;height:15px;bottom:0px;float:left;width:100%;display:block;background-image: url(OS/media/win95/win95_loading.gif);background-repeat: repeat-x;background-position: left center;" id="win_gif_2"></div>
		</div>
		<!--</div>--> <!-- Bootup -->
		
		<!--<div id = "desktop">
		</div>--> <!-- Desktop Ends -->
	</body>
