<?PHP

/*

'###########################################################################
'#
'# NESCafe Load Script
'#
'# @author  : David de Niese
'# @website : www.daviddn.com
'# @version : 1.000
'#
'# Allows NESCafe to load data files from the Web Server running the Applet.
'# This script can be customised before being deployed to your Web Server.
'#
'# Use:
'# <param name=LOADDATAURL value="http://domain/nescafeload.php?user=user">
'#
'###########################################################################

*/


// Prevent Cache

	header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
	header('Cache-Control: no-store, no-cache, must-revalidate');
	header('Cache-Control: post-check=0, pre-check=0', FALSE);
	header('Pragma: no-cache');


// Get the Username

	$user = "";

	if (isset($_GET['user']))
	{
		$user = $_GET['user'];
	}

	if ($user  == "")
	{
		$user = "unknown";
	}



// Grab the Name of the Game Loaded into NESCafe

	$gamename = "";

	if (isset($_POST['gamename']))
	{
		$gamename = $_POST['gamename'];
	}

	if ($gamename  == "")
	{

		// Game Name was not Posted

			$gamename = "unknown";

	}



// Declare Local Variable

	$dir = "";



// Grab the File Extension NESCafe Wants to Use

	$ext = "";

	if (isset($_POST['ext']))
	{
		$ext = $_POST['ext'];
	}

	if ($ext  == "")
	{

		// Game Name was not Posted

			$ext = "unknown";

	}



// Grab the ContentType that NESCafe Wants to Load

	$contenttype = "";

	if (isset($_POST['contenttype']))
	{
		$contenttype = $_POST['contenttype'];
	}


// If ContentType is a State File then set Load Directory

	if ($contenttype == "nescafe/state")
	{

		// Set Load Directory

			$dir = "savestates";



		// Determine Slot Number for State (from URL)

			$saveslot = "";

			if (isset($_GET['saveslot']))
			{
				$saveslot = $_GET['saveslot'];
			}

			if ($saveslot == "")
			{
				$saveslot = "000";
			}

			$ext = $saveslot.".".$ext;



	}


// If ContentType is SaveRAM then set Load Directory

	else if ($contenttype == "nescafe/saveram")
	{

		// Set Load Directory

			$dir = "saveram";


	}



// If ContentType is Test

	else if ($contenttype == "nescafe/test")
	{

			echo "SUCCESS\n";
			exit;

	}


// If ContentType is Settings

	else if ($contenttype == "nescafe/settings")
	{

			echo "SUCCESS\n";
			exit;

	}



// Otherwise an Unknown ContentType was Posted

	else
	{

		// Unknown Content Type

			echo "NESCafe Load Script Installed\n";
			exit;

	}




// Check if the Resulting File is Available

	$filename = $dir."/".$user."-".$gamename.".".$ext;

	if (!file_exists ($filename))
	{


		// If SaveRAM File Doesn't Exist then Response with NOSAVERAM Message

			if ($contenttype == "nescafe/saveram")
			{


				// Script MUST Return NOSAVERAM message back to NESCafe so that it enables Saving of RAM

					echo "NOSAVERAM\r\n";
					exit;


			}


		// If State File Doesn't Exist then Inform NESCafe

			else
			{

				// Missing File Message is Posted Back

					echo "Error: File does not exist ".$filename."\r\n";
					exit;

			}


	}



// Load the File into an Array

	$lines = file($filename);


// Prevent HTML Header Being Sent for Blank Lines

	if (!$lines)
	{
		echo "\r\n";
	}


// Echo File Back to NESCafe

	foreach ($lines as $line_num => $line)
	{
		echo "{$line}\r\n";
	}


// Clean Exit

	exit;

?>