<html>
<body bgcolor="#000000">
<title>Switching Language</title>
<meta http-equiv="refresh" content="2;url=Launcher.html">

<?php
//Code written by JrMasterModelBuilder.
//Thanks to Biomaniac, Gatanui, and -Auron-.
//Mata Nui Online Game is copyright The LEGO Group and possibly Templar Studios.
//startnew.php, setlanguage.php, setstate.php, getdate.txt, getlanguage.txt, and getstate.txt were created to recreate features and are not original.


//This block contains variables that will be used below.
$getlanguage='getlanguage.txt';
$oldlang=file_get_contents($getlanguage);


//This block determins if your current language is eng.
if ($oldlang=="language=eng")
{
$fh=fopen('getlanguage.txt', 'w');
fwrite($fh, 'language=deu');
fclose($fh);
}

//If it was, it did the above, if it wasn't, it does the below.
else
{
$fh=fopen('getlanguage.txt', 'w');
fwrite($fh, 'language=eng');
fclose($fh);
}
?>

</body>
</html>