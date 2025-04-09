<html>
<head>
<title>Entertaindom : Pulse Comix : Marvin the Martian</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language=javascript>
<!--
if (((navigator.appVersion.indexOf("Mac") != -1) || (navigator.appVersion.indexOf("PPC") != -1)) &&
     (navigator.appName.indexOf("Microsoft Internet Explorer") != -1)) {
	location.replace("/pages/help/help_toolbox.jsp?need=browser_mac_ie");
}

if ((navigator.appName.indexOf("Netscape") != -1) && (navigator.mimeTypes["application/x-pulse-player"] == null )){
	window.open("http://plugins.entertaindom.com/pulse_installer_3.5.2.8/index.html","Pulse",
            "width=610,height=300,resizable=no,toolbar=no,menubar=no,screenX=center,screenY=center","replace=false")
}
// -->
</script>
<STYLE TYPE="text/css">
BODY, TABLE, TR, TD, TH, BLOCKQUOTE {
	font-family: Verdana, Helvetica, Arial, san-serif;
	color: #FFFFFF;
}
A {
	color: #FFFFFF;
}
</STYLE>
<SCRIPT LANGUAGE="JavaScript">
var IE3 = ((navigator.appName == "Microsoft Internet Explorer") && (parseFloat(navigator.appVersion) < 4.0));

/*
imgsrc = new Array();
imgsrc[0] = "/img/pulsecomix/marvin/run1.gif"; // start
imgsrc[1] = "/img/pulsecomix/marvin/run2.gif"; // stop
imgsrc[2] = "/img/pulsecomix/marvin/action_noblink.gif"; // no action
imgsrc[3] = "/img/pulsecomix/marvin/action_blink.gif"; // action

if (!IE3) {
	img = new Array();
	for (i = 0; i < imgsrc.length; i++) {
		img[i] = new Image();
		img[i].src = imgsrc[i];
	}
}

function chgImg(myNum, myName) {
	if (!IE3) {
		document[myName].src = img[myNum].src;
	}
}

function DoCmd(name)
{
	if (navigator.appName == "Netscape")
		document.Ctrl.Do(name);
	else
		Ctrl.Do(name);
}

*/

function DoCmd(cmdline)
{
	if (navigator.appName.indexOf("Netscape") != -1)
document.embeds["Ctrl"].Do(cmdline);
	else if (document.all) document.all["Ctrl"].Do(cmdline);
	else Ctrl.Do(cmdline); // IE 3.0 doesn't support document.all
}


if (navigator.appName == "Microsoft Internet Explorer")
{
	document.write('<SCR' + 'IPT LANGUAGE="JavaScript" FOR="Ctrl" EVENT="OnEvent(theEvent)">');
	document.write('Ctrl_onEvent(theEvent);');
	document.write('</SCR' + 'IPT>');
}

COUNTER = 0;
READY_TO_START = COUNTER++;
SEGMENT_1 = COUNTER++;
SEGMENT_INTERACT = COUNTER++;
SEGMENT_2 = COUNTER++
FINISHED = COUNTER++;;
CURRENT_SEGMENT = COUNTER = 0;

function Ctrl_onEvent(msg){

	//alert (msg);    // These lines can be useful
	//self.status = msg; //for debugging.

	if (msg == "BvrStart idleloopMarvinSceneParent")
	{
		if (CURRENT_SEGMENT != SEGMENT_INTERACT)
		{
			CURRENT_SEGMENT = SEGMENT_INTERACT;
			//chgImg(3, "interact");
            document["interact"].src = "/img/pulsecomix/marvin/action_blink.gif";
		}
	}
	else if (msg ==  "BvrComplete stream2MarvinSceneParent")
	{
		Reset();
	}
}

function Run()
{
		CURRENT_SEGMENT = SEGMENT_1;
		DoCmd("play obj=MarvinSceneParent pkg=http://www.warnerbros.com/marvin/assets/episode09/stream1PKG.pws transition=0.30 heading=yes behave=stream1");
		//chgImg(1, "start");
       document["interact"].src = "/img/pulsecomix/marvin/action_noblink.gif";
		//chgImg(2, "interact")
}

function Reset()
{
		CURRENT_SEGMENT = READY_TO_START;
		DoCmd("play obj=MarvinSceneParent transition=0.00 heading=no behave=reset");
}

function MarvinCam(){
	DoCmd('play obj=CameraSwitcher  transition=0.00 heading=no behave=cameramarvin');
}

function HoverCam(){
		 DoCmd('play obj=CameraSwitcher  transition=0.00 heading=no behave=hovercam');
}

function Interact()
{
	CURRENT_SEGMENT = SEGMENT_2;
 	DoCmd("play obj=MarvinSceneParent pkg=http://www.warnerbros.com/marvin/assets/episode09/stream2PKG.pws transition=0.30 heading=yes behave=stream2");
}

function makeLinkTo(s)
{
	var href = s.options[s.selectedIndex].value;
	if (href != "") {
		window.top.location.href = s.options[s.selectedIndex].value;
	}
}


//-->
</SCRIPT>
<SCRIPT LANGUAGE="JavaScript">
function emailFriend() {
       window.open('/pages/emailfriend/email_friend.jsp?url=/marvin.html&thisshow=/marvin/','_blank', 'width=300,height=395');
		}
</SCRIPT>
<SCRIPT LANGUAGE="JavaScript">
<!--
     NS4 = (document.layers);
     IE4 = (document.all);
    ver4 = (NS4 || IE4);
   isMac = (navigator.appVersion.indexOf("Mac") != -1);
  isMenu = (NS4 || (IE4 && !isMac));
 if (!ver4) event = null;

  if (isMenu) {
menuVersion = 3;
menuWidth = 120;
borWid = 0;
borSty = "solid";
borCol = "#41566B";
separator = 0;
separatorCol = "#41566B";
fntFam = "Verdana, Arial, Helvetica, sans-serif";
fntBold = true;
fntItal = true;
fntSiz = 8;
fntCol = "#FFFFFF";
overFnt = "#FFFFFF";
itemPad = 5;
backCol = "#41566B";
overCol = "#80B1B1";
imgSrc = "";
imgSiz = 0;

childOffset = null;
childOverlap = null;
perCentOver = null;

clickStart = false;
clickKill = false;
secondsVisible = 0;

keepHilite = false;
NSfontOver = false;

isFrames = false;
navFrLoc = "left";
mainFrName = "main";
  }
//-->
</SCRIPT>
<SCRIPT LANGUAGE="JavaScript1.2">
<!--
  if (isMenu) {
  document.write("<SCRIPT LANGUAGE='JavaScript1.2' SRC='/med/pulsecomix/hierArrays.js'><\/SCRIPT>");
  document.write("<SCRIPT LANGUAGE='JavaScript1.2' SRC='/med/pulsecomix/hierMenus.js'><\/SCRIPT>");
  }
//-->
</SCRIPT>
<script language="javascript">
<!--

var AppName = navigator.appName;

var AppVer = parseInt(navigator.appVersion);

var IE3  = (AppName == "Microsoft Internet Explorer" && AppVer < 4);

function imgOn(imgName) {
        if (document.images && !IE3) {
        document[imgName].src = eval(imgName + "_on.src");
        }
}

function imgOff(imgName) {
        if (document.images && !IE3) {
        document[imgName].src = eval(imgName + "_off.src");
        }
}

if (document.images && !IE3) {

        }
// -->
</script>
</head>
<body bgcolor="#41566B" text="#80B1B1" link="#80B1B1" vlink="#80B1B1" alink="#80B1B1" leftmargin="0" topmargin="50" marginwidth="0" marginheight="0">
    <center>
<table width="780" border="0" cellspacing="0" cellpadding="0">
  <tr>
      <table width="320" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="6"><OBJECT ID="Ctrl" WIDTH=320 HEIGHT=240
		 classid="CLSID:D6016EE7-A8FF-11D1-B37E-A4759ECD7909"
		 CODETYPE="application/x-pulse-player"
		 CODEBASE="http://plugins.entertaindom.com/pulse_installer_3.5.2.8/english/PulsePlayerAxWin.cab">
		 <PARAM NAME="URL" VALUE="http://www.warnerbros.com/marvin/assets/episode09/marvin.pwc">
		 <param name="FrameRate" value="30">
         <param name="Hardware" value="0">
	    <param name="BGcolor" value="0xFFFFFF">
		<param name="CoreVersion" value="3.5.1.8">
	    <param name="Name" value="Ctrl">
		<EMBED NAME="Ctrl" MAYSCRIPT SRC="http://www.warnerbros.com/marvin/assets/episode09/marvin.pwc" WIDTH=640 HEIGHT=480 FRAMERATE=30 HARDWARE=1
		 TYPE="application/x-pulse-player" PLUGINSPAGE="http://plugins.entertaindom.com/pulse_installer_3.5.2.8/"
		 COREVERSION="3.5.1.8"></EMBED></OBJECT></td>
        </tr>
        <tr>
            <td><a href="javascript:Run()" onClick="Run();return false" onMouseOut="imgOff('playplay')" onMouseOver="imgOn('playplay'),window.status='play the episode';return true"><p name="playplay" alt="run" border="25" style="text-align:center;">Play</p></a></td>
        </tr>
      </table>
  </tr>
</table>
    </center>
</body>
</html>

