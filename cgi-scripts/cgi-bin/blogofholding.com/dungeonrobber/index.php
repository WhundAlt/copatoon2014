<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <title>Dungeon Robber</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css" media="screen">
        html, body { height:100%; background-color: #ffffff;}
        body { margin:0; padding:0; overflow:hidden; }
        #flashContent { width:100%; height:100%; }
    </style>

    <script>
function loadgame() {
    return localStorage.getItem("dungeonrobbersave");
}       

function savegame(mysave) {

    if (typeof(localStorage) == 'undefined' ) {
        alert('Your browser does not support HTML5 localStorage. Try upgrading.');
    } else {
        try {
            localStorage.setItem("dungeonrobbersave", mysave); //saves to the database, "key", "value"
        } catch (e) {
            if (e == QUOTA_EXCEEDED_ERR) {
                alert('Quota exceeded!'); //data wasn.t successfully saved due to quota exceed so throw an error
            }
        }
        }
}
</script>
</head>

<body bgcolor=black style="background-color:#000">
    <div id="flashContent" align=center style="background-color: #000">
        <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="1000" height="600" id="randomdungeonmap9" align="middle">
            <param name="movie" value="randomdungeonmap14.swf" />
            <param name="quality" value="high" />
            <param name="bgcolor" value="#ffffff" />
            <param name="play" value="true" />
            <param name="loop" value="true" />
            <param name="wmode" value="window" />
            <param name="scale" value="noscale" />
            <param name="menu" value="true" />
            <param name="devicefont" value="false" />
            <param name="salign" value="" />
            <param name="allowScriptAccess" value="sameDomain" />
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="randomdungeonmap14.swf" width="1000" height="600">
                <param name="movie" value="randomdungeonmap14.swf" />
                <param name="quality" value="high" />
                <param name="bgcolor" value="#ffffff" />
                <param name="play" value="true" />
                <param name="loop" value="true" />
                <param name="wmode" value="window" />
                <param name="scale" value="noscale" />
                <param name="menu" value="true" />
                <param name="devicefont" value="false" />
                <param name="salign" value="" />
                <param name="allowScriptAccess" value="sameDomain" />
                <!--<![endif]-->
                <a href="http://www.adobe.com/go/getflash">
                    <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
                </a>
                <!--[if !IE]>-->
            </object>
            <!--<![endif]-->
        </object>
    </div>
</body>

</html>