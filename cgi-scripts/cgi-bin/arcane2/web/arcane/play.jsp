<title>WB Online : Arcane</title>
<head>
<style>

/* Create two equal columns that floats next to each other */
.column {
  float: left;
}

.left {
}

.right {
}

</style>
</head>
<script language="JavaScript">
var expdate = new Date();
var endroit = 1;
var ou = 0;
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

function episode1(){
	var EPISODEObj = InternetExplorer ? EPISODE : document.EPISODE;
    var SaveGame = GetCookie("ARC1");
    
	if (SaveGame == "1") {
		EPISODEObj.GotoFrame(1032);
	}
	else if (SaveGame == "2") {
		EPISODEObj.GotoFrame(1035);
	}	
	else if (SaveGame == "3") {
		EPISODEObj.GotoFrame(1038);
	}	
	else if (SaveGame == "4")
		{
		EPISODEObj.GotoFrame(1041);
	}
	else if (SaveGame == "5")
		{
		EPISODEObj.GotoFrame(1044);
	}	
 	else {
      alert("No Saved game");
    }
}

function episode2(){
	var EPISODEObj = InternetExplorer ? EPISODE : document.EPISODE;
    var SaveGame = GetCookie("ARC2");
    
	if (SaveGame == "1") {
		EPISODEObj.GotoFrame(939);
	}
	else if (SaveGame == "2") {
		EPISODEObj.GotoFrame(942);
	}	
	else if (SaveGame == "3") {
		EPISODEObj.GotoFrame(945);
	}	
	else if (SaveGame == "4")
		{
		EPISODEObj.GotoFrame(948);
	}
	else if (SaveGame == "5")
		{
		EPISODEObj.GotoFrame(951);
	}
	else if (SaveGame == "6")
	{
		EPISODEObj.GotoFrame(954);
	}	
 	else {
      alert("No Saved game");
    }
}

function episode5(){
	var EPISODEObj = InternetExplorer ? EPISODE : document.EPISODE;
    var SaveGame = GetCookie("ARC5");
    
	if (SaveGame == "1") {
		EPISODEObj.GotoFrame(934);
	}
	else if (SaveGame == "2") {
		EPISODEObj.GotoFrame(937);
	}	
	else if (SaveGame == "3") {
		EPISODEObj.GotoFrame(940);
	}	
	else if (SaveGame == "4")
		{
		EPISODEObj.GotoFrame(943);
	}
	else if (SaveGame == "5")
		{
		EPISODEObj.GotoFrame(946);
	}
	else if (SaveGame == "6")
	{
		EPISODEObj.GotoFrame(949);
	}	
 	else {
      alert("No Saved game");
    }
}

function EPISODE_DoFSCommand(command, args) {
	const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    var episode = urlParams.get('episode');
	var episodeNumber = 1;
	if (episode == "recap") {
	}
	else if (episode == "prologue") {
	}
	else if (episode == "current") {
		episodeNumber = "8";
	}
	else {
		episodeNumber = episode.substring(15);
	}
    var EPISODEObj = InternetExplorer ? EPISODE : document.EPISODE;
	var cookieName = "ARC" + episodeNumber;
	if (command == "where") {
		ou = args;
	}
	else if (command == "save") {
		if (episodeNumber == "1" || episodeNumber == "2" || episodeNumber == "5") {
			SetCookie(cookieName, ou, expdate, "/");
		}
		else {
			SetCookie (cookieName, args, expdate, "/");
		}
    }
	else if (command == "load") {
		if(episodeNumber == "1") {
			episode1();
		}
		else if (episodeNumber == "2") {
			episode2();
		}
		else if (episodeNumber == "5") {
		    episode5();
		}
		else {
			rendu(cookieName);
		}
	}
}

function set_episode() {
	const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    var episode = urlParams.get('episode');
	var EPISODEObj = document.EPISODE;
	var url = "http://arcane2/arcane/swf/";
	if (episode == "recap") {
		url = url + "recap.swf";
	}
	else if (episode == "prologue") {
		url = url + "prologue.swf";
	}
	else if (episode == "current") {
		url = "http://arcane2/arcane/swf/Arc2Episode8.swf";
	}
	else {
		var episodeNumber = episode.substring(15);
		url = url + "Arc2Episode" + episodeNumber + ".swf";
	}
    EPISODEObj.setAttribute('src', url);
}
</script>
<body bgcolor="000000" onload="set_episode()">
<center>
<div class="column left">
	<embed src="http://arcane2/arcane/generator/playpage.swf" name="launcher" quality="high" pluginspage="http://www2.warnerbros.com/pages/entry/download_flash.jsp?frompage=main" type="application/x-shockwave-flash" width="300" height="600" bgcolor="#000000"></embed>
</div>
<div class="column right">
	<embed name="EPISODE" quality="high" pluginspage="http://www2.warnerbros.com/pages/entry/download_flash.jsp?frompage=main" type="application/x-shockwave-flash"  width="900" height="655" bgcolor="#000000"></embed>
</div>
</center>
</body>