<?php
	///////////////////////////////////////////////////////
	// Online Score Script
	// Jeff Vance
	// Version 1.3
	// Files and sources can be found at www.flyinvinteractive.com
	//////////////////////////////////////////////////////

	//////////////////////////////////////////////////////
	// WARNING AND READ THIS!
	// You don't need to edit this file
	// The only file to edit is config.php
	// Don't edit this unless you know what your doing :)
	// This works out of the box -- your error must be in config.php
	/////////////////////////////////////////////////////

	// Get Configuation file
	require("config.php");

	// Connect to your server
    $db=new SQLite3($dbname);



	//////////////////////////////////////////////////
	// Check for the existing table if its not found create it
	// This is really just here to make the life of new users of the script eaiser
	// They won't have to go thru the script and create the table
	/////////////////////////////////////////////////

	if(!($db->query("SELECT name FROM sqlite_master WHERE type ='table' AND name LIKE '".$tname."'")->fetchArray()))
	{
	$query = "CREATE TABLE `$tname` (`id` int(11) NOT NULL,`gameid` varchar(255) NOT NULL,`playername` varchar(255) NOT NULL,`score` int(255) NOT NULL,`scoredate` varchar(255) NOT NULL`level` varchar(255) NOT NULL,`playertype` varchar(255) NOT NULL,`totalplaytime` varchar(255) NOT NULL,`md5` varchar(255) NOT NULL, PRIMARY KEY  (`id`));";

	$create_table = $db->exec($query);
	}

	///////////////////////////////////////////////////////
	// Status Checker
	///////////////////////////////////////////////////////
	if (isset($_GET["status"]))
	{
	echo "online";
	exit;
	}


	////////////////////////////////////////////////////////
	// Run some checks on our gameid
	////////////////////////////////////////////////////////
	$gameid_safe = SQLite3::escapeString($_GET["gameid"]);
	// Check the gameid is numeric
	// If its not numberic lets exit
	if(!is_numeric($gameid_safe))
    {
     exit;
    }

	///////////////////////////////////////////////////////
	// Upload new score
	///////////////////////////////////////////////////////
	// Test for the variables submitted by the player
	// If they exist upload into the database

	if (isset($_GET["playername"]) && isset($_GET["gameid"]) && isset($_GET["score"]) && isset($_GET["level"]) && isset($_GET["playertype"]) && isset($_GET["totalplaytime"]))
	{

	// Strip out | marks submitted in the name or score
	$playername_safe = str_replace("|","_",$_GET["playername"]);
	$playername_safe = SQLite3::escapeString($playername_safe);
	$score_safe = SQLite3::escapeString($_GET["score"]);
	$level_safe = SQLite3::escapeString($_GET["level"]);
	$playertype_safe = SQLite3::escapeString($_GET["playertype"]);
	$totalplaytime_safe = SQLite3::escapeString($_GET["totalplaytime"]);
	$date = date('M d Y');

	// Check the score sent is numeric
	// If the score is not numberic lets exit
	if(!is_numeric($score_safe))
    {
     exit;
    }

	// this secret key needs to be the same as the secret key in your game.
	$security_md5= md5($_GET["gameid"].$_GET["playername"].$_GET["score"].$_GET["level"].$_GET["playertype"].$_GET["totalplaytime"].$secret_key);

	// Check for submitted MD5 different then server generated MD5
	if ($security_md5 <>$_GET["code"])
	{
	// Something is wrong -- MD5 security hash is different
	// Could be someone trying to insert bogus score data
	exit;
	}
	// Everything is cool -- Insert the data into the database
	$query = "insert into $tname(gameid,playername,score,scoredate,level,playertype,totalplaytime,md5) values ('$gameid_safe','$playername_safe','$score_safe','$date','$level_safe','$playertype_safe','$totalplaytime_safe','$security_md5')";
	$insert_the_data = $db->exec($query);
	}

	///////////////////////////////////////////////////////
	// List high score
	///////////////////////////////////////////////////////
	// Return a list of high scores with "|" as the delimiter
	if ($gameid_safe)
	{
    $query = "select * from $tname where gameid='$gameid_safe' order by score desc limit 10";
	$view_data = $db->query($query);
	while($row_data = $view_data->fetchArray())
		{
		print($row_data["playername"]);
		print"|";
		print($row_data["score"]);
		print("|");
		print($row_data["level"]);
		print("|");
		print($row_data["playertype"]);
		print("|");
		print($row_data["scoredate"]);
		print("|");
		print($row_data["totalplaytime"]);
		print("|");
		}

	// We limit the score database to hold the number defined in the config script
	// First check to see how many records we have for this game

	$query1 ="select count(*) from $tname where gameid = '$gameid_safe'";
	$countresults = $db->querySingle($query1);
	if ($countresults > $score_number)
		{
		$query2 ="SELECT * FROM $tname WHERE gameid = '$gameid_safe' ORDER BY score DESC Limit $score_number,$countresults";
		$Get_data = $db->query($query2);
		while($row_data = $Get_data->fetchArray())
		{
		$id_delete = $row_data["id"];
		$query3 = "Delete from $tname where id = $id_delete";
		$Delete_data = $db->exec($query3);
		}
		}
	}

?>
