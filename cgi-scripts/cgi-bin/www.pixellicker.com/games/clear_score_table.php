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
	/////////////////////////////////////////////////

	if(!($db->query("SELECT name FROM sqlite_master WHERE type ='table' AND name LIKE '".$tname."'")->fetchArray()))
	{
	echo "no table";
	exit;
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
	// Clear all scores
	///////////////////////////////////////////////////////

	if ($_GET["gameid"] && $gameid_safe)
	{
	$query = "delete from $tname where gameid='$gameid_safe'";
	$delete_the_data = $db->query($query);
	echo "scores cleared";
	}

?>
