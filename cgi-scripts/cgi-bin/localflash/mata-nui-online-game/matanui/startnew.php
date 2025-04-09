<html>
<body bgcolor="#000000">
<title>Start New Game</title>
<meta http-equiv="refresh" content="2;url=Launcher.html">

<?php
//Code written by JrMasterModelBuilder.
//Thanks to Biomaniac, Gatanui, and -Auron-.
//Mata Nui Online Game is copyright The LEGO Group and possibly Templar Studios.
//startnew.php, setlanguage.php, setstate.php, getdate.txt, getlanguage.txt, and getstate.txt were created to recreate features and are not original.


//This block overwrites the previous data in getstate.txt with "nostate=1" to restart the game.
$fh=fopen('getstate.txt', 'w');
fwrite($fh, 'nostate=1');
fclose($fh);
?>

</body>
</html>