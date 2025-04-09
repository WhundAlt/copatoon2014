<?php
if(isset($_GET["q"]) && empty($_GET["q"]) == false)
{
	if($_GET["q"] == "get_achievement_list")
	{
		echo '[{"achievement_id":"1","game":"angel","name":"Test Achievement","code_name":"test","description":"blank"},{"achievement_id":"2","game":"angel","name":"Big Spender","code_name":"","description":"blank"},{"achievement_id":"3","game":"angel","name":"Well Groomed","code_name":"cleanedup","description":"blank"},{"achievement_id":"4","game":"hazel","name":"Met the Mermaid","code_name":"mermaid1","description":"blank"},{"achievement_id":"5","game":"exile","name":"test","code_name":"","description":"blank"},{"achievement_id":"6","game":"eldon","name":"Cleaned Up","code_name":"cleanedup","description":"blank"}]';
	}
	
	if($_GET["q"] == "get_user_achievements")
	{
		echo '[]';
	}
}