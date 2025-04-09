<!--  -->
<!--  -->
<HTML>
<HEAD>
<TITLE>minuetmixer</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</HEAD>
<BODY bgColor="#882A0C" text="#FFFFFF" link="#FFFFFF" Vlink="#FFFFFF">

<script language="JavaScript" type="text/javascript">
<!--
// -----------------------------------------------------------------------------
// Globals
// Major version of Flash required
var requiredMajorVersion = 8;
// Minor version of Flash required
var requiredMinorVersion = 0;
// Minor version of Flash required
var requiredRevision = 0;
// the version of javascript supported
var jsVersion = 1.0;
// -----------------------------------------------------------------------------
// -->
</script>
<script language="VBScript" type="text/vbscript">
<!-- // Visual basic helper required to detect Flash Player ActiveX control version information
Function VBGetSwfVer(i)
  on error resume next
  Dim swControl, swVersion
  swVersion = 0
  
  set swControl = CreateObject("ShockwaveFlash.ShockwaveFlash." + CStr(i))
  if (IsObject(swControl)) then
    swVersion = swControl.GetVariable("$version")
  end if
  VBGetSwfVer = swVersion
End Function
// -->
</script>
<script language="JavaScript1.1" type="text/javascript">
<!-- // Detect Client Browser type
var isIE  = (navigator.appVersion.indexOf("MSIE") != -1) ? true : false;
var isWin = (navigator.appVersion.toLowerCase().indexOf("win") != -1) ? true : false;
var isOpera = (navigator.userAgent.indexOf("Opera") != -1) ? true : false;
jsVersion = 1.1;
// JavaScript helper required to detect Flash Player PlugIn version information
function JSGetSwfVer(i){
	// NS/Opera version >= 3 check for Flash plugin in plugin array
	if (navigator.plugins != null && navigator.plugins.length > 0) {
		if (navigator.plugins["Shockwave Flash 2.0"] || navigator.plugins["Shockwave Flash"]) {
			var swVer2 = navigator.plugins["Shockwave Flash 2.0"] ? " 2.0" : "";
      		var flashDescription = navigator.plugins["Shockwave Flash" + swVer2].description;
			descArray = flashDescription.split(" ");
			tempArrayMajor = descArray[2].split(".");
			versionMajor = tempArrayMajor[0];
			versionMinor = tempArrayMajor[1];
			if ( descArray[3] != "" ) {
				tempArrayMinor = descArray[3].split("r");
			} else {
				tempArrayMinor = descArray[4].split("r");
			}
      		versionRevision = tempArrayMinor[1] > 0 ? tempArrayMinor[1] : 0;
            flashVer = versionMajor + "." + versionMinor + "." + versionRevision;
      	} else {
			flashVer = -1;
		}
	}
	// MSN/WebTV 2.6 supports Flash 4
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.6") != -1) flashVer = 4;
	// WebTV 2.5 supports Flash 3
	else if (navigator.userAgent.toLowerCase().indexOf("webtv/2.5") != -1) flashVer = 3;
	// older WebTV supports Flash 2
	else if (navigator.userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 2;
	// Can't detect in all other cases
	else {
		
		flashVer = -1;
	}
	return flashVer;
} 
// When called with reqMajorVer, reqMinorVer, reqRevision returns true if that version or greater is available
function DetectFlashVer(reqMajorVer, reqMinorVer, reqRevision) 
{
 	reqVer = parseFloat(reqMajorVer + "." + reqRevision);
   	// loop backwards through the versions until we find the newest version	
	for (i=25;i>0;i--) {	
		if (isIE && isWin && !isOpera) {
			versionStr = VBGetSwfVer(i);
		} else {
			versionStr = JSGetSwfVer(i);		
		}
		if (versionStr == -1 ) { 
			return false;
		} else if (versionStr != 0) {
			if(isIE && isWin && !isOpera) {
				tempArray         = versionStr.split(" ");
				tempString        = tempArray[1];
				versionArray      = tempString .split(",");				
			} else {
				versionArray      = versionStr.split(".");
			}
			versionMajor      = versionArray[0];
			versionMinor      = versionArray[1];
			versionRevision   = versionArray[2];
			
			versionString     = versionMajor + "." + versionRevision;   // 7.0r24 == 7.24
			versionNum        = parseFloat(versionString);
        	// is the major.revision >= requested major.revision AND the minor version >= requested minor
			if ( (versionMajor > reqMajorVer) && (versionNum >= reqVer) ) {
				return true;
			} else {
				return ((versionNum >= reqVer && versionMinor >= reqMinorVer) ? true : false );	
			}
		}
	}	
}
// -->
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<script language=JavaScript>
	<!--
	var tMajorVersion = 10;
	var tMinorVersion = 0;
	var tShockwaveFound = 0;
	if (navigator.mimeTypes && navigator.mimeTypes["application/x-director"] && navigator.mimeTypes["application/x-director"].enabledPlugin) {
	  if (navigator.plugins && navigator.plugins["Shockwave for Director"] && (tVersionIndex = navigator.plugins["Shockwave for Director"].description.indexOf(".")) != - 1) {
	    var tMajorVersionString = navigator.plugins["Shockwave for Director"].description.substring(tVersionIndex-2, tVersionIndex);
	   var tMinorVersionString = navigator.plugins["Shockwave for Director"].description.substring(tVersionIndex+1, tVersionIndex+2);
	   if (parseInt(tMajorVersionString) >= tMajorVersion) {
	     if (tMinorVersion > 0) {
	       if (parseInt(tMinorVersionString) >= tMinorVersion) {
	         tShockwaveFound = 1;
	    }
	     } else {
	       tShockwaveFound = 1;
	     }
	    }
	  }
	} else if (navigator.userAgent && navigator.userAgent.indexOf("MSIE")>=0 && (navigator.userAgent.indexOf("Windows 95")>=0 || navigator.userAgent.indexOf("Windows 98")>=0 || navigator.userAgent.indexOf("Windows NT")>=0 )) {
	  var tVersionString = "";
	  document.write('<script language=VBScript\> \n');
	  document.write('on error resume next \n');
	  document.write('set tSWControl = CreateObject("SWCtl.SWCtl") \n');
	  document.write('if IsObject(tSWControl) then \n');
	  document.write('tVersionString = tSWControl.ShockwaveVersion("") \n');
	  document.write('end if');
	  document.write('</script\> \n');
	  if (tVersionString != "") {
	    tVersionIndex = tVersionString.indexOf(".")
	   var tMajorVersionString = tVersionString.substring(tVersionIndex-2, tVersionIndex);
	   var tMinorVersionString = tVersionString.substring(tVersionIndex+1, tVersionIndex+2);
	   if (parseInt(tMajorVersionString) >= tMajorVersion) {
	     if (tMinorVersion > 0) {
	       if (parseInt(tMinorVersionString) >= tMinorVersion) {
	         tShockwaveFound = 1;
	       }
	     } else {
	       tShockwaveFound = 1;
	     }
	   }
	  }
	}
	
	
	// Version check based upon the values entered above in "Globals"
	var hasReqestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);
	
	if ( tShockwaveFound && hasReqestedVersion ) {
	document.write('<OBJECT classid="clsid:166B1BCA-3F9C-11CF-8075-444553540000"');
	document.write(' codebase="http://download.macromedia.com/pub/shockwave/cabs/director/sw.cab#version=8,5,1,0"');
	document.write(' ID=minuetmixer WIDTH=800 HEIGHT=600>');
	document.write('<PARAM NAME=src VALUE="minuetmixerx9.dcr">');
	document.write('<PARAM NAME=sw2 VALUE=http://www.largeanimal.com/download.php?filename=http://d.trymedia.com/d/largeanimal/30m_pkg53/largeanimal/MinuetMixerSetup.exe&gamename=Minuet+Mixer&linktype=remote >');
	
	document.write('<PARAM NAME=swStretchStyle VALUE=none>');
	document.write('<PARAM NAME=swRemote VALUE="');
	document.write("swSaveEnabled='true' swVolume='false' swRestart='false' swPausePlay='false' swFastForward='false' swContextMenu='false' ");
	document.write('">\n');
	document.write('<EMBED SRC="minuetmixerx9.dcr"');
	document.write(' bgColor=#882A0C name="minuetmixer" swLiveConnect=TRUE logo=FALSE  WIDTH=800 HEIGHT=600 swStretchStyle=none ');
	document.write('swRemote="');
	document.write("swSaveEnabled='true' swVolume='false' swRestart='false' sw2=http://www.largeanimal.com/download.php?filename=http://d.trymedia.com/d/largeanimal/30m_pkg53/largeanimal/MinuetMixerSetup.exe&gamename=Minuet+Mixer&linktype=remote swPausePlay='false' swFastForward='false' swContextMenu='false' ");
	document.write('"');
	document.write(' TYPE="application/x-director" PLUGINSPAGE="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveDirector">');
	document.write('</EMBED>');
	document.write('</OBJECT>');
	} else if ( !(tShockwaveFound) && !(hasReqestedVersion) ) {
	  document.write('<h1>Additional plugins are needed to display the New York Philharmonic Kids website.</h1><h2>Please download and install the <em>Macromedia Flash Player</em> and <em>Macromedia Shockwave Player</em> by click on the links below.</h2>  <h2>It will only take a minute.</h2> <a href="http://www.macromedia.com/go/getflashplayer" target="_blank"><h1>Get the Flash Player.</h1></a>&nbsp;&nbsp;&nbsp;<a href="http://www.macromedia.com/go/getshockwaveplayer" target="_blank"><h1>Get the Shockwave Player</h1></a>');
	  }
	  else if ( !(tShockwaveFound) && (hasReqestedVersion) ) {
	  document.write('<h1>Additional plugins are needed to display the New York Philharmonic Kids website.</h1><h2>Please download and install the <em>Macromedia Shockwave Player</em> by clicking on the link below.</h2>  <h2>It will only take a minute.</h2>  <a href="http://www.macromedia.com/go/getshockwaveplayer" target="_blank"><h1>Get the Shockwave Player</h1></a>');
	  }
	  else {
	  document.write('<h1>Additional plugins are needed to display the New York Philharmonic Kids website.</h1><h2>Please download and install the <em>Macromedia Flash Player</em> by clicking on the link below.</h2>  <h2>It will only take a minute.</h2> <a href="http://www.macromedia.com/go/getflashplayer" target="_blank"><h1>Get the Flash Player</h1></a>');
	  }
	
	//-->
	</script>

</body>
</html>

