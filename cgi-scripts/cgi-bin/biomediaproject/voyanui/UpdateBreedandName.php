<?php
//Code written by JrMasterModelBuilder.
//Major thanks to Crystal Matrix, -Auron-, and Biomaniac.
//Also thanks to Gatanui, Takua me, and everyone else who made this possible.
//Voya Nui Online Game is copyright The LEGO Group and possibly Ankama Studio.
//Only loader.swf and core.swf were modified to preserve the integrity of the game.
//The PHP and TXT files were created to recreate the save feature and are not original.


//This block instructs the browser not to cache this page so that it should get a new copy each time it is loaded on the first and second line. The last line tells the browser this page is an plain text document.
header("Cache-Control: no-cache");
header("Expires: -1");
header("content-type: text/plain"); 

//This block gets the variables from the query string sent by core.swf.
//There is another set of variables in another query string sent to UpdateProfile.php.
$characterBreed=$_GET['characterBreed'];
$characterName=$_GET['characterName'];

//This block checks if any of the variables are defined in the query string. If not, the script will exit without saving blank data.
if ($characterBreed == "" && $characterName == "")
{
exit();
}

//This block calls the variables from above and places them between their corresponding tags.
$savestate="<character_breed>".$characterBreed."</character_breed><character_name>".$characterName."</character_name>";

//This block calls the string above and writes it to BreedandName.txt (where it can be called by GetProfile.php) overwriting the previous data.
$writefile='BreedandName.txt';
$fh=fopen($writefile, 'w');
fwrite($fh, $savestate); 
fclose($fh);
?>