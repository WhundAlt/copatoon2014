<script language="JavaScript">
var expdate = new Date();
var endroit = 1;
expdate.setTime(expdate.getTime() + (1000 * 60 * 60 *24 *31));  
var InternetExplorer = navigator.appName.indexOf("Microsoft") != -1;

function getCookieVal (offset) {
	  var endstr = document.cookie.indexOf (";", offset);
	  if (endstr == -1) endstr = document.cookie.length;
	  return unescape(document.cookie.substring(offset, endstr));
}

function GetCookie (name) {
      return localStorage.getItem(name);
}

function SetCookie (Name, Value, CDate, CPath) {
  localStorage.setItem(Name, Value);
}

function rendu(cookieName) {
	var EPISODEObj = InternetExplorer ? EPISODE : document.EPISODE;
    var SaveGame = GetCookie(cookieName);
	EPISODEObj.SetVariable("/Save:Fichier", SaveGame);
}

function EPISODE_DoFSCommand(command, args) {
	const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    var episode = urlParams.get('episode');
	var episodeNumber = episode.substring(7);
    var EPISODEObj = InternetExplorer ? EPISODE : document.EPISODE;
	var cookieName = "STEP" + episodeNumber;
	if (command == "save") {
		SetCookie (cookieName, args, expdate, "/");
    }
	else if (command == "load") {
		rendu(cookieName);
	}
}

function set_episode() {
	const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    var fileName = urlParams.get('episode');
	var EPISODEObj = document.EPISODE;
	var url = "http://steppenwolfxcreatures/steppenwolf/med/" + fileName + ".swf";
    EPISODEObj.setAttribute('src', url);
}
</script>
<body bgcolor="000000" onload="set_episode()">
<center>
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=4,0,0,0" width="1200" height="800">
	<param name="menu" value="true">
	<param name="movie" value="/steppenwolf/med/main.swf?chapter=archiveheruk_pttwo-6.swf&amp;texttout=infotext_gen1.swf&amp;premov=hometoutepi24.swf&amp;manual=monstermanual_chupa.swf&amp;dossier=dossier_chupa.swf">
	<param name="quality" value="high">
	<param name="bgcolor" value="#000000">
	<embed src="http://steppenwolfxcreatures/steppenwolf/med/episode1.swf" name="EPISODE" quality="high" pluginspage="http://www2.warnerbros.com/pages/entry/download_flash.jsp?frompage=main" type="application/x-shockwave-flash" width="1200" height="800" bgcolor="#000000"></embed>
</object>
</center>
</body>