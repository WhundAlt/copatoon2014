<?php
if(isset($_GET["q"]) && empty($_GET["q"]) == false)
{
	if($_GET["q"] == "get_achievement_list")
	{
		echo '[{"achievement_id":"6","game":"eldon","name":"Cleaned Up","code_name":"cleanedup","description":"blank"}]';
	}
	
	if($_GET["q"] == "get_user_achievements")
	{
		echo '[]';
	}
}