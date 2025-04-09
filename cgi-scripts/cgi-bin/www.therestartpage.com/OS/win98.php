	<style type="text/css">
		html, body, #container {
		overflow: hidden !important;
		cursor:url(OS/../images/blank.gif), -moz-zoom-in;
		}
		/*.w_dos {position:absolute;z-index:999;top:50%;left:50%;margin-left:-512px;margin-top:-384px;width:1024px;height:768px;}*/

		#bios_tl {position:absolute;top:0;left:0;height:400px;width:730px;background:url('OS/media/DOS/bios-start_01.gif') no-repeat 0 0;}
		#bios_tl_2 {position:absolute;display:none;top:0;left:0;height:600px;width:900px;background:url('OS/OS/media/DOS/bios-start_01.gif') no-repeat 0 0;}
		#bios_bl {position:absolute;bottom:10px;left:0px;height:40px;width:730px;background:url('OS/media/DOS/bios-start_01.gif') no-repeat 0 -540px;}
		#bios_tr {position:absolute;top:0px;right:0px;height:180px;width:180px;background:url('OS/media/DOS/bios-start_01.gif') no-repeat -720px 0px;}
		#bios_blink {display:none;position:absolute;top:-3px;left:-12px;height:180px;width:180px;background:url('OS/media/DOS/blinks.gif') no-repeat 0 0;}	
		#dos_blink {display:none;position:absolute;top:0px;left:0px;height:500px;width:800px;background:url('OS/media/DOS/blinks.gif') no-repeat 0 0;}	
		#win98_start { display:none;position:absolute;top:50%;left:50%;height:100%;width:900px;margin:-337.5px 0 0 -450px;background:url('OS/media/win98/loading_win98.gif') no-repeat 0 0; }
	}
	
	.os, .set, #restart_detail, #social-home, .go-back { display: none !important;}
	</style>
	<script>
		$(function(){
			var play= function(file){
				var audio= document.createElement('audio');
				audio.setAttribute('src', file);
				audio.play();
			}
			$('body').css('background','#000');
			setTimeout(function(){$('#bios_tr,#bios_bl,#bios_tl').hide().remove();$('#bios_tl_2').show();play('OS/bios.wav');},5800);

			setTimeout("$('#bios_tl_2').hide().remove();",8000);
			setTimeout("$('#bios_blink').show();",8000);
			setTimeout(function(){$("#bios_blink").hide();$("#win98_start").show();},9000);
			setTimeout(function(){play('OS/media/win98/login.wav');},13000);
			setTimeout("$('#win98_start').hide();$('body').css('background','#008080');",15000);
			
			$('html').mouseover(function()
			{
			$(this).css({cursor: 'none'});
			});
			
			$('body').mouseover(function()
			{
			$(this).css({cursor: 'none'});
			});
			
			$('#container').mouseover(function()
			{
			$(this).css({cursor: 'none'});
			});
		});
	</script>
	<em class="time" title="18000"></em>
	<div id="container"><!-- OPEN holder -->
		<div id="bios_tl"></div>
		<div id="bios_tl_2"></div>
		<div id="bios_blink"></div>
		<div id="bios_bl"></div>
		<div id="bios_tr"></div>
		<div id="win98_start"></div>
	</div><!-- CLOSE holder -->
