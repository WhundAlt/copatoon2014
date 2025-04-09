<?
	if (stristr($siteid, "real"))
		Header("Location: http://www.popcap.com/gamepopup.php?theGame=atomica&siteid=real");
	else
		Header("Location: http://www.popcap.com/gamepopup.php?theGame=atomica");
?>