
<html>
	<head>

		<link rel='stylesheet' type='text/css' href='../frame.css' />
		<script type='text/javascript' src='unity.js'></script>
				
<script type="VBScript">
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
end function		function DetectUnityWebPlayerActiveX
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

	</head>
	<body>

		<object id="UnityObject" classid="clsid:444785F1-DE89-4295-863A-D46C3A781394" width="860" height="520" codebase="http://webplayer.unity3d.com/download_webplayer_beta/UnityWebPlayer.cab#version=2,0,0,0">
			<param name="src" value="enercities.unity3d?cache=nopleasestop" />
			<param name="logoimage" value="PaladinUnityLoadScreen.png" />
			<param name="disableContextMenu" value="true" />
			<embed id="UnityEmbed" src="enercities.unity3d?cache=nopleasestop" width="860" height="520" type="application/vnd.unity" pluginspage="http://www.unity3d.com/unity-web-player-2.x" disableContextMenu="true" logoimage="PaladinUnityLoadScreen.png" />
			<noembed>
				<div align="center">
					This content requires the Unity Web Player<br /><br />
					<a href="http://www.unity3d.com/unity-web-player-2.x">Install the Unity Web Player today!</a>
				</div>
			</noembed>
		</object>


		<script type='text/javascript'>

			function GetBuildType()
			{
				GetUnity().SendMessage('GameStateManager','SetBuildType','Guest');
			}

		</script>

	</body>
</html>