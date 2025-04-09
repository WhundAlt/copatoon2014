<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name="description" content="Paladin Studios' EnerCities">
	<meta name="keywords" content="enercities, serious, game, energy, management, paladin, studios">
	<link href="shell/assets/shellstyle.css.php" rel="stylesheet" type="text/css" media="screen" />
	<title>Enercities</title>

	<SCRIPT TYPE="text/javascript">
	<!--
	function openUrl(url)
	{
		window.location=url;
	}
	//-->
	</SCRIPT>
	<!--[if IE 8]>
		<style>
		table
		{
			padding-top:9px !important;
		}
		.button
		{
			line-height: 18px;
		}

		</style>
	<![endif]-->

</head>
<body>
	<div class="header">
		<div class="menu">
			<ul>
				<li class='home'><a href='http://www.enercities.eu/'></a></li>
				<li class='cur'>
					<a href='game.php'>Play Game</a>
				</li>
				<li >
					<a href='toolbox.php'>Teachers</a>
				</li>
        </div>
    </div>





<div class="container">
	<div class="middle">
		<div class='noborder'><script language='VBScript'>
		function DetectUnityWebPlayerActiveX
			on error resume next
			dim tControl
			dim res
			res = 0
			set tControl = CreateObject("UnityWebPlayer.UnityWebPlayer.1")
			if IsObject(tControl) then

				res = 1
			end if
			DetectUnityWebPlayerActiveX = res
		end function
		</script>

	<iframe scrolling="no" frameborder="0" src='shell/assets/unity/nojavascript.html'  id='unityFrame'></iframe>

	<script type='text/javascript'>

			function GetUnity () {
				if (navigator.appVersion.indexOf("MSIE") != -1 && navigator.appVersion.toLowerCase().indexOf("win") != -1)
					return document.getElementById("UnityObject");
				else if (navigator.appVersion.toLowerCase().indexOf("safari") != -1)
					return document.getElementById("UnityObject");
				else
					return document.getElementById("UnityEmbed");
			}

			function DetectUnityWebPlayer () {
        		var tInstalled = false;
        		if (navigator.appVersion.indexOf("MSIE") != -1 && navigator.appVersion.toLowerCase().indexOf("win") != -1) {
					tInstalled = DetectUnityWebPlayerActiveX();
        		}
        		else {
            		if (navigator.mimeTypes && navigator.mimeTypes["application/vnd.unity"]) {
                		if (navigator.mimeTypes["application/vnd.unity"].enabledPlugin && navigator.plugins && navigator.plugins["Unity Player"]) {
                 			tInstalled = true;
            			}
         			}
        		}
        		return tInstalled;
 	   		}
				
		if(DetectUnityWebPlayer())
		{
			var unityPath = 'playgame.php';
		} else {
			var unityPath = 'installunity.html';
		}

		document.getElementById('unityFrame').src = 'shell/assets/unity/'+unityPath;

	</script>


	</div>
		</div>
		<div class="footer">
		<!--div class='footerLeft'></div>
<div class='footerRight'></div-->
		<div class='footerMiddle'>

			<table class='footerTable'>
				<tr>
					<td style='width:212px'>
						<div class='logo'>
							<a href='http://ec.europa.eu/energy/intelligent/'>
								<img src='shell/assets/images/logoieea.png' />
							</a>
						</div>
					</td>
					<td style='width:496px'>
						<div class='message'>
							The sole responsibility for the content of this webpage lies with the authors. It does not necessarily reflect the opinion of the European Communities. The European Commission is not responsible for any use that may be made of the information contained therein.
						</div>
					</td>
					<td style='width:154px'>
						<div class='projectPage'>
							<a href='http://www.enercities.eu/project'><div class='button'>Project Page</div></a>
						</div>
					</td>
				</tr>
			</table>
		</div>

		<div class='footMessage'>
Copyright &copy; consortium partners:
<a href='http://www.paladinstudios.com' target='_blank'>Paladin Studios</a>,
<a href='http://www.roc-nijmegen.nl' target='_blank'>ROC Nijmegen</a>,
<a href='http://www.qeam.com' target='_blank'>Qeam</a>,
<a href='http://www.lmc.ac.uk' target='_blank'>LMC</a>,
<a href='http://www.akademie-klausenhof.org' target='_blank'>Akademie Klausenhof</a>,
<a href='http://www.ncyclades.gr' target='_blank'>KEK</a>,
<a href='http://www.lu-velenje.si' target='_blank'>LUV </a> and
<a href='http://www.apegr.org' target='_blank'>Agencia de la Energ&iacute;a de Granada</a>.
		</div>

	</body>
</html>