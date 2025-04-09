<?



	if (stristr($siteid, "real"))
	{
		$realURL = "Location: http://www.popcap.com/gamepopup.php?theGame=alchemy&siteid=real&browser=" . $HTTP_USER_AGENT;

		Header($realURL);
	}
	else
		Header("Location: http://www.popcap.com/gamepopup.php?theGame=alchemy");
?>