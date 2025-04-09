<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>Lost in Time Interactive</title>
    
    <script type="text/javascript" src="swfobject.js"></script>
    
    <style type="text/css" media="screen">
      html, body { height: 700px; width: 900px; }
      body {
        margin: 0;
        padding: 0;
        overflow: auto;
        text-align: center;
        background-color: #000000;
      }
      #flashContent {
        display: none;
      }
    </style>
    
        
    <script type="text/javascript">
      var swfVersionStr = "10.0.0";
      var xiSwfUrlStr = "playerProductInstall.swf";
      var flashvars = {server:"http://www.civilwarmo.org/cwmo_game"};
      var params = {};
      params.quality = "high";
      params.bgcolor = "#000000";
      params.allowscriptaccess = "sameDomain";
      params.allowfullscreen = "true";
      var attributes = {};
      attributes.id = "MHMCivilWar";
      attributes.name = "MHMCivilWar";
      attributes.align = "middle";
      swfobject.embedSWF(
        "MHMCivilWar.swf", "flashContent", 
        "900", "700", 
        swfVersionStr, xiSwfUrlStr, 
        flashvars, params, attributes
      );
      swfobject.createCSS("#flashContent", "display:block;text-align:left;");
    </script>
  </head>
  <body>
    <div id="flashContent">
      <p>
        To view this page ensure that Adobe Flash Player version
        10.0.0 or greater is installed.
      </p>
      <script type="text/javascript">
        var pageHost = ((document.location.protocol == "https:") ? "https://" :	"http://"); 
        document.write("<a href='http://www.adobe.com/go/getflashplayer'><img src='" 
          + pageHost + "www.adobe.com/images/shared/download_buttons/get_flash_player.gif' alt='Get Adobe Flash player' /></a>" ); 
      </script>
    </div>
    
    <noscript>
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="900" height="700" id="MHMCivilWar">
        <param name="movie" value="MHMCivilWar.swf" width="900" height="700">
        <param name="quality" value="high"/>
        <param name="bgcolor" value="#000000"/>
        <param name="allowScriptAccess" value="sameDomain"/>
        <param name="allowFullScreen" value="true"/>
        <!--[if !IE]>-->
        <object type="application/x-shockwave-flash" data="MHMCivilWar.swf" width="900" height="700">
          <param name="quality" value="high"/>
          <param name="bgcolor" value="#000000"/>
          <param name="allowScriptAccess" value="sameDomain"/>
          <param name="allowFullScreen" value="true"/>
        <!--<![endif]-->
        <!--[if gte IE 6]>-->
          <p>
            Either scripts and active content are not permitted to run or Adobe Flash Player version
            10.0.0 or greater is not installed.
          </p>
        <!--[if !IE]>-->
        </object>
        <!--<![endif]-->
      </object>
    </noscript>
  </body>
</html>
