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
//There is another set of variables in another query string sent to UpdateBreedandName.php.
$characterExperience=$_GET['characterExperience'];
$characterMap=$_GET['characterMap'];
$characterCell=$_GET['characterCell'];
$characterBonusAttack=$_GET['characterBonusAttack'];
$characterBonusDefence=$_GET['characterBonusDefence'];
$characterBonusTechnik=$_GET['characterBonusTechnik'];
$characterStepId=$_GET['characterStepId'];
$characterStepObjectiveFinished=$_GET['characterStepObjectiveFinished'];
$characterInventory=$_GET['characterInventory'];

//This block checks if any of the variables are defined in the query string. If not, the script will exit without saving blank data.
if ($characterExperience == "" && $characterMap == "" && $characterCell == "" && $characterBonusAttack == "" && $characterBonusDefence == "" && $characterBonusTechnik == "" && $characterStepId == "" && $characterStepObjectiveFinished == "" && $characterInventory == "")
{
exit();
}

//This block calls the variables from above and places them between their corresponding tags.
$savestate="<character_experience>".$characterExperience."</character_experience><character_map>".$characterMap."</character_map><character_cell>".$characterCell."</character_cell><character_bonus_attack>".$characterBonusAttack."</character_bonus_attack><character_bonus_defence>".$characterBonusDefence."</character_bonus_defence><character_bonus_technik>".$characterBonusTechnik."</character_bonus_technik><character_step_id>".$characterStepId."</character_step_id><character_step_objective_finished>".$characterStepObjectiveFinished."</character_step_objective_finished><character_inventory>".$characterInventory."</character_inventory>";

//This block calls the string above and writes it to Profile.txt (where it can be called by GetProfile.php) overwriting the previous data.
$writefile='Profile.txt';
$fh=fopen($writefile, 'w');
fwrite($fh, $savestate); 
fclose($fh);
?>