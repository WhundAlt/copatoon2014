<html>
<body TOPMARGIN=0 LEFTMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 BACKGROUND="/img/shared/bg_pixel.gif"

   onLoad = "
	if(document.applets[0].isActive())
	{ window.scrollBy(0,1000); }
	";

>
<script language="JavaScript">
    var timeStart = new Date();
    function getStartTime(time) {
        var difference = (time - timeStart.getTime()) / 1000.0;
        window.alert( "Time to finish downloading JAR file: " + difference + " seconds" );
    }
</script>
<? if($theGame)
	{ print ( "<SCRIPT>alert('MEGA MONKEY SLUTS')</SCRIPT>" ); }
?>
<TABLE WIDTH=422 HEIGHT=345 CELLPADDING=0 CELLSPACING=0 BORDER=0>
<TR><TD WIDTH=422 HEIGHT=345 VALIGN="MIDDLE" ALIGN="CENTER"><IMG SRC="/img/shared/preload.gif" BORDER=0 HSPACE=0 VSPACE=0></TD></TR></TABLE>
<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
<APPLET CODE="tiptap.tiptapapplet.class" CODEBASE="." WIDTH="422" HEIGHT="345" ARCHIVE="tiptop.jar" MAYSCRIPT HSPACE=4 VSPACE=0>
    <param name="cabbase"	  value="tiptop.cab">
    <param name="config-file-url" value="config.dat" />
    <param name="compress"        value="true" />
    <param name="AdUrl"           value="http://www.popcap.com/tiptop.php" />
    <param name="showDownloadTime" value="false" />
    <param name="timeMethod" value="getStartTime" />
</APPLET>
</body>
</html>