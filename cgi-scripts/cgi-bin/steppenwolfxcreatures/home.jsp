<body bgcolor="000000">
<center>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="https://web.archive.org/web/20040715071937oe_/http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=4,0,0,0" width="1155" height="480">
					<param name="menu" value="true">
					<param name="movie" value="/steppenwolf/med/main.swf?chapter=archiveheruk_pttwo-6.swf&amp;texttout=infotext_gen1.swf&amp;premov=hometoutepi24.swf&amp;manual=monstermanual_chupa.swf&amp;dossier=dossier_chupa.swf">
					<param name="quality" value="high">
					<param name="bgcolor" value="#000000">
				<embed src="http://steppenwolfxcreatures/steppenwolf/med/main.swf?chapter=archiveheruk_pttwo-6.swf&amp;texttout=infotext_gen1.swf&amp;premov=hometoutepi24.swf&amp;manual=monstermanual_chupa.swf&amp;dossier=dossier_chupa.swf" quality="high" pluginspage="http://www2.warnerbros.com/pages/entry/download_flash.jsp?frompage=main" type="application/x-shockwave-flash" width="1270.5" height="528" bgcolor="#000000"></embed>
</object>
</center>
</body>
<script language="JavaScript">
var hasCookie = document.cookie.indexOf("WBOLClient") != -1;
var uAgent = navigator.userAgent.toLowerCase();
var isMac = (uAgent.indexOf("mac") >= 0 || uAgent.indexOf("ppc") >= 0);
var isIE = (uAgent.indexOf("msie") >= 0 || uAgent.indexOf("microsoft") >= 0);
var is4down = (uAgent.indexOf("4.") >= 0 && isMac && isIE);
var is5Up = (uAgent.indexOf("5.") >= 0 && isMac && isIE);
if (isMac && isIE && is4down && !is5Up){
	//alert(uAgent);
	document.location = "/web/steppenwolf/mac_upgrade.jsp";
}
function launchwin(query) {
var browserHeight = screen.height;
var browserWidth = screen.width;
var wihe = 'width='+screen.availWidth+',height='+screen.availHeight; 


var chapter = parseInt(query.substring(16,17));
var correctFileName = "episode1.html";
if (query.substring(26,27) == "p") {
	correctFileName = "prologue_ch" + chapter;
} 
if (query.substring(26,27) == "r") {
	correctFileName = "recap_ch" + chapter;
} 
if (query.substring(26,27) == "e") {
	var episode = parseInt(query.substring(34,35));
	var correctFile = ((chapter * 4) - 4) + episode;
	correctFileName = "episode" + correctFile;
}

var popURL = "/steppenwolf/play.jsp?episode=" + correctFileName;
var brName = navigator.appName.toLowerCase();

open(popURL, "code", "toolbar=false,scrollbars=no,"+wihe+",status=false,directories=false,menubar=false,screenx=0,screeny=0,location=false,left=0,top=0");
}
function launchFriendWin(){
	window.open("email_friend.jsp", "emailfriend","toolbar=0,scrollbars=0,menubar=0,resizable=0,width=300,height=395");
}

function launchNotifyWin(){
	window.open("email_notify.jsp", "emailnotify","toolbar=0,scrollbars=0,menubar=0,resizable=0,width=300,height=395");
}

function launchAta(){
	window.open("/steppenwolf/ata.html", "sweepstakes","toolbar=0,scrollbars=1,menubar=0,resizable=0,width=575,height=500");
}

function launchHighscore(){
	window.open("/web/steppenwolf/highscore.jsp", "sweepstakes","toolbar=0,scrollbars=1,menubar=0,resizable=0,width=575,height=500");
}

function launchPromoTrailer(){
   	var wihe = 'width='+screen.availWidth+',height='+screen.availHeight; 
    window.open("/web/steppenwolf/email_trailer.jsp", "promotrailer","toolbar=0,scrollbars=1,menubar=0,resizable=0," +wihe);
}

</script>
