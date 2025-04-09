<!DOCTYPE html>
<html>
<head>
	<title>Cartoon Network Universe: FusionFall</title>
	
	<style type="text/css">
		body {
			margin: 0; 
			padding: 0;
			width: 100%;
			height: 100%;
			background-color: black;
			color: white;
			overflow: hidden;
		}
		#container {
			margin: 0;
			padding: 0;
			width: 100%;
			height: 100%;
			clear: both;
		}
		#client {
			background-color: black;
		}
	</style>

	<script type="text/javascript">
		function OnResize() {
			var unity = document.getElementById('Unity_embed');
			unity.style.width = window.innerWidth + 'px';
			unity.style.height = window.innerHeight + 'px';
		}
	</script>
</head>
<body onresize="OnResize()">
	<div id="container">
		<script language="JavaScript" type="text/javascript">
			// allows us to skip the login screen 
			function authDoCallback(param) {
				var unity = document.getElementById('Unity_embed');
			    unity.SendMessage("GlobalManager", "SetTEGid", "FlashPoint");
			    unity.SendMessage("GlobalManager", "SetAuthid", "FusionFall");
			    unity.SendMessage("GlobalManager", "DoAuth", 0);
			}

			function redirect(html) {
				window.location = "thanks.php";
			}

			function HomePage(param) {
				window.location = "thanks.php";
			}

			function PageOut(param) {
				window.location = "thanks.php";
			}

			function updateSocialOptions(param) {
				window.location = "thanks.php";
			}

			function PayPage(param) {
				window.location = "thanks.php";
			}
		</script>
		<div id="client">
	        <object classid="clsid:444785F1-DE89-4295-863A-D46C3A781394" codebase="undefined/UnityWebPlayer.cab#version=2,0,0,0" id="Unity_object" width="1264" height="661">
	        	<embed type="application/vnd.unity" pluginspage="http://www.unity3d.com/unity-web-player-2.x" id="Unity_embed" width="1280" height="680" src="http://ht.cdn.turner.com/ff/big/beta-20111013/main.unity3d" disablecontdparaextmenu="true" bordercolor="000000" backgroundcolor="000000" disableContextMenu=true textcolor="ccffff" logoimage="img/unity_dexlabs.png" progressbarimage="img/unity_loadingbar.png" progressframeimage="img/unity_loadingframe.png" autoupdateurlsignature="42180ee5edc4e3d4dd706bcc17cedd8d6ec7b7ac463071fd34ab97fe181f1a78df31db5feb4526677e4f69ef53acaff44471591e68b87f041c80fd54765f0d5725b08aa28f5acf7716ffb2a04e971269f35925c7e38d57dd78f6a206530caaa3da7e32f07f19810efc0ebf29a4eae976a925ad9cc5beb4dd51564c67dc489033" autoupdateurl="http://wp-cartoonnetwork.unity3d.com/ff/big/beta-20111013/autodownload_webplugin_beta">
	    	</object>
		</div>
		<script type="text/javascript">
			OnResize(); // perfect fit, called after Unity_object is initialized
		</script>
	</div>
</body>
</html>