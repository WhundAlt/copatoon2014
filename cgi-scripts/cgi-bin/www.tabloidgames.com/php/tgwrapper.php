<?php
$id = $_POST["id"];
$games = array(
	array(),
	array("So You Think You Can Drive, Mel?", "How many Tequila bottles can you grab before the game ends???  Put the pedal to the metal and keep your eyes on the road?<BR>\n- Watch out for flying Stars of David?<BR>\n- Beware of Troopers on the road", "sytycd", "400", "350", "sytycd", "2008-10-06", "0"),
	array("Kim Jong-Il: Missile Maniac", "Kim Jong-Il is up to no good with his Taep-O-Dong.  How far can you launch him and his malfunctioning missile?", "mmaniac", "600", "400", "mmaniac", "2008-10-06", "1"),
	array("Throw The Book At O.J.", "Looks like the book signing had to be cancelled for one wannabe author discussing his shady past.  Show him the error of his ways by throwing his words right back in his face.", "bookoj", "500", "380", "bookoj", "2008-10-06", "1"),
	array("Rosie vs. Trump", "This celebrity feud is now a full-blown fight.  Rosie and The Donald are set to do battle. What side are you on? Pick a player - then punch, kick, insult and unleash a Secret weapon to defeat your opponent.<BR><BR>Only one giant will be left standing.", "rosievtrump", "600", "400", "rosievtrump", "2007-10-06", "1"),
	array("Freezer Burn", "A Global Warning! Think more like Gore: Put pollution on ice. Keep the glaciers glistening and Help Hubert the Penguin put trash in its place.", "fburn", "500", "400", "fburn", "2007-10-06", "1"),
	array("The Prison Life: Paris", "Paris is in jail and the warden has assigned her to design and build license plates. Help her with her job and watch out for her little dog \"Clinkerbell\"!", "prisonlife", "600", "400", "prisonlife", "2007-10-06", "1"),
	array("Pump n' Blow with Obama & McCain", "Fill-up at the Pump n' Blow, meet the candidates and discover who's got air and who's got gas.  Presenting the official presidential click management game that will reveal who's best able to serve the American public.", "pumpnblow", "700", "500", "pumpnblow", "2008-10-06", "0"),
	array("Palinisms: Ask Sarah Anything!", "Ask Palin something!", "askpalin", "600", "450", "askpalin", "2008-10-16", "0"),
	array("Ninja Bush: Master of Ninjit-shoe!", "Dodge the shoes!", "ninjabush", "500", "380", "ninjabush", "2008-12-17", "1")
);
if ($id == 0 or $id > 9) {
	echo "&fresult=";
} else {
	echo "&fresult=$id|" . join('|', $games[$id]);
}
?>