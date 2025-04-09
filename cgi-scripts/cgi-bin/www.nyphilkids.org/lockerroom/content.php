
<HTML>
<HEAD>
<SCRIPT LANGUAGE="javascript" SRC="http://www.nyphilkids.org/common/common.js"></SCRIPT>
<meta http-equiv=Content-Type content="text/html;  charset=ISO-8859-1">
<TITLE>newsstand_main</TITLE>
<SCRIPT LANGUAGE=JavaScript>
<!--
function openWindow(theURL) {   
  newsWin = window.open(theURL,'newsWindow','resizable=yes,width=575,height=410,menubar=yes,status=no,scrollbars=yes');  
  newsWin.focus();
}
//-->
</SCRIPT>

<SCRIPT LANGUAGE=JavaScript>
<!--
var InternetExplorer = navigator.appName.indexOf("Microsoft") != -1;
// Handle all the the FSCommand messages in a Flash movie
function lockerroom_DoFSCommand(command, args) {
  var lockerroomObj = InternetExplorer ? lockerroom : document.lockerroom;
  //
  // Place your code here...
  //
}
// Hook for Internet Explorer 
if (navigator.appName && navigator.appName.indexOf("Microsoft") != -1 && 
	  navigator.userAgent.indexOf("Windows") != -1 && navigator.userAgent.indexOf("Windows 3.1") == -1) {
	document.write('<SCRIPT LANGUAGE=VBScript\> \n');
	document.write('on error resume next \n');
	document.write('Sub lockerroom_FSCommand(ByVal command, ByVal args)\n');
	document.write('  call lockerroom_DoFSCommand(command, args)\n');
	document.write('end sub\n');
	document.write('</SCRIPT\> \n');
}
//-->
</SCRIPT>


</HEAD>
<BODY bgcolor="#6699FF">
<SCRIPT LANGUAGE="javascript" SRC="http://www.nyphilkids.org/common/body.js"></SCRIPT>
<!-- URL's used in the movie-->
<!-- text used in the movie-->
<!--mGlobalManagerEspana10/10/99newsDummy
--><OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
 codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
 WIDTH="100%" HEIGHT="100%" id="newsstand_main" ALIGN="" ID="lockerroom">
 <PARAM NAME=movie VALUE="lockerroom.swf?swfstate="> <PARAM NAME=quality VALUE=high> <PARAM NAME=salign VALUE=T> <PARAM NAME=bgcolor VALUE=#6699FF> <EMBED src="lockerroom.swf?swfstate=" quality=high salign=T bgcolor=#6699FF  WIDTH="100%" HEIGHT="100%" swLiveConnect="true" NAME="lockerroom" ALIGN=""
 TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer"></EMBED>
</OBJECT>
</BODY>
</HTML>
