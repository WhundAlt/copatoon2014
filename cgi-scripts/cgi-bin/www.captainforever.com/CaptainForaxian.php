<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="test/html; charset=iso-8859-1" />
      <meta name="title" content="Captain Forever" />
   </head>
   <script language="JavaScript" type="text/javascript">function localStorageSupported()
      {
      	try
      	{
      		return 'localStorage' in window && window['localStorage'] !== null;
      	}
      	catch (e)
      	{
      		return false;
      	}
      }
      
      function hookMouseWheel()
      {
      	if (window.addEventListener)
      	window.addEventListener('DOMMouseScroll', onMouseWheel, false);
      	window.onmousewheel = document.onmousewheel = onMouseWheel;
      }
      
      function isOverSwf(mEvent)
      {
      	var elem;
      	if (mEvent.srcElement) {
      		elem = mEvent.srcElement;
      	} else if (mEvent.target) {
      		elem = mEvent.target;
      	}
      
      	if ((elem.nodeName.toLowerCase() == "object" &&
      	elem.getAttribute("classid") == "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000") ||
      	(elem.nodeName.toLowerCase() == "embed" &&
      	elem.getAttribute("type") == "application/x-shockwave-flash")) {
      		return true;
      	}
      
      	return false;
      }
      
      function onMouseWheel(event)
      {
      	if (!event)
      		event = window.event;
      
      	if (isOverSwf(event)) {
      		return cancelEvent(event);
      	}
      
      	return true;
      }
      
      function cancelEvent(e)
      {
      	e = e ? e : window.event;
      	if (e.stopPropagation)
      		e.stopPropagation();
      	if (e.preventDefault)
      		e.preventDefault();
      	e.cancelBubble = true;
      	e.cancel = true;
      	e.returnValue = false;
      	return false;
      }
      
      hookMouseWheel();
      
      gameWidth = 700;
      gameHeight = 525;
      if( localStorageSupported() )
      {
      	if( localStorage["gameWidth"] != null && localStorage["gameHeight"] != null )
      	{
      		gameWidth = parseInt(localStorage["gameWidth"]);
      		gameHeight = parseInt(localStorage["gameHeight"]);
      	}
      }
      
      function onLoadGame()
      {
      	d = document.getElementById("game");
      	d.style.width = gameWidth + "px";
      	d.style.height = gameHeight + "px";
      }
      
      function getWindowHeight()
      {
      	return self.innerHeight || (document.documentElement.clientHeight || document.body.clientHeight);
      }
      
      function embiggenGame()
      {
      	d = document.getElementById("game");
      	gameWidth = gameWidth + 100;
      	gameHeight = gameWidth * 3 / 4;
      	d.style.width = gameWidth + "px";		
      	d.style.height= gameHeight + "px";
      	window.scroll( 0, d.offsetTop - ( getWindowHeight() - gameHeight ) / 2 );
      	if( localStorageSupported() )
      	{
      		localStorage["gameWidth"] = gameWidth;
      		localStorage["gameHeight"] = gameHeight;
      	}
      }
      
      function emsmallenGame()
      {
      	d = document.getElementById("game");
      	gameWidth = gameWidth - 100;
      	if( gameWidth < 700 )
      	{
      		gameWidth = 700;
      	}
      	gameHeight = gameWidth * 3 / 4;
      	d.style.width = gameWidth + "px";		
      	d.style.height= gameHeight + "px";
      	window.scroll( 0, d.offsetTop - ( getWindowHeight() - gameHeight ) / 2 );
      	if( localStorageSupported() )
      	{
      		localStorage["gameWidth"] = gameWidth;
      		localStorage["gameHeight"] = gameHeight;
      	}
      }
      
      function embiggenMinigame()
      {
      	d = document.getElementById("minigame");
      	gameWidth = ( gameWidth / 256 + 1 ) * 256;
      	gameHeight = ( gameWidth / 256 ) * 224;
      	d.style.width = gameWidth + "px";		
      	d.style.height= gameHeight + "px";
      	window.scroll( 0, d.offsetTop - ( getWindowHeight() - gameHeight ) / 2 );
      }
      
      function emsmallenMinigame()
      {
      	d = document.getElementById("minigame");
      	gameWidth = ( gameWidth / 256 - 1 ) * 256;
      	if( gameWidth < 256 )
      	{
      		gameWidth = 256;
      	}
      	gameHeight = ( gameWidth / 256 ) * 224;
      	d.style.width = gameWidth + "px";		
      	d.style.height= gameHeight + "px";
      	window.scroll( 0, d.offsetTop - ( getWindowHeight() - gameHeight ) / 2 );
      }
   </script>
   <body onload="onLoadGame()">
      <div class="minigame" id="minigame">
         <OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" WIDTH="100%" HEIGHT="100%" id="CF">
            <PARAM NAME=movie VALUE="http://farbsfarbsfarbs.appspot.com/files/CFF.swf?vers=7">
            <PARAM NAME=quality VALUE=high>
            <PARAM NAME=bgcolor VALUE=#000000>
            <PARAM NAME="allowScriptAccess" VALUE="always">
            <PARAM NAME="allowNetworking" VALUE="all">
            <PARAM NAME=vers VALUE=7>
            <EMBED clas="gameInner" src="http://farbsfarbsfarbs.appspot.com/files/CFF.swf?vers=7" quality=high vers=7 bgcolor=#000000 WIDTH="700px" HEIGHT="700px" NAME="Captain Foraxian" ALIGN="" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer" allowScriptAccess="always" allowNetworking="all" ></EMBED>
         </OBJECT>
      </div>
      <div class=main id="game">
         <form name="GameScale"><input type="button" class=button value="+" OnClick="embiggenMinigame();">SCREEN SIZE<input type="button" class=button value="-" OnClick="emsmallenMinigame();"></form>
      </div>
   </body>