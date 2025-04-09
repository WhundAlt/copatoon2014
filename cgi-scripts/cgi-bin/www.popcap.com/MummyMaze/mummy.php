<?
	if (stristr($siteid, "real"))
		Header("Location: https://www.popcap.com/gamepopup.php?theGame=mummymaze&siteid=real");
	else
		Header("Location: https://www.popcap.com/gamepopup.php?theGame=mummymaze");
?>