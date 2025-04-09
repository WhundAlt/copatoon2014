<?
	if (stristr($siteid, "real"))
		Header("Location: http://www.popcap.com/gamepopup.php?theGame=sevenseas&siteid=real");
	else
	{
		//include ("../../inc/mainpagepopup.inc");
		Header("Location: http://www.popcap.com/gamepopup.php?theGame=sevenseas");
	}
?>