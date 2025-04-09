<?php
//Code written by JrMasterModelBuilder.
//Major thanks to Crystal Matrix, -Auron-, and Biomaniac.
//Also thanks to Gatanui, Takua me, and everyone else who made this possible.
//Voya Nui Online Game is copyright The LEGO Group and possibly Ankama Studio.
//Only loader.swf and core.swf were modified to preserve the integrity of the game.
//The PHP and TXT files were created to recreate the save feature and are not original.


//This block instructs the browser not to cache this page so that it should get a new copy each time it is loaded on the first and second line. The last line tells the browser this page is an XML document.
header("Cache-Control: no-cache");
header("Expires: -1");
header("content-type: text/xml"); 

//This block calls the text from the two text documents into a single file between the opening and closing XML tags that the game can read as your progress.
//BreedandName.txt contains your characterBreed and characterName data.
//Profile.txt contains your characterExperience, characterMap, characterCell, characterBonusAttack, characterBonusDefence, characterBonusTechnik, characterStepId, characterStepObjectiveFinished, and characterInventory data.

echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>";
echo "<root>";
echo "<Table>";
include("BreedandName.txt");
include("Profile.txt");
echo "</Table>";
echo "</root>";
?>