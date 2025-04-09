<?php

/*

'###########################################################################
'#
'# NESCafe Save Script
'#
'# @author  : David de Niese
'# @website : www.daviddn.com
'# @version 1.000
'#
'# Allows NESCafe to save data files to the Web Server running the Applet.
'# This script can be customised before being deployed to your Web Server.
'#
'# Use:
'# <param name=SAVEDATAURL value="http://domain/nescafesave.php?user=user">
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



// Declare Directory Variable

	$dir = "";



// Declare Transfer Mode (ASCII or BINARY)

	$mode = "A";



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



// Grab the ContentType that NESCafe Wants to Use

	$contenttype = "";

	if (isset($_POST['contenttype']))
	{
		$contenttype = $_POST['contenttype'];
	}



// If ContentType is a ScreenShot then set Save Directory and Use Binary Transfer

	if ($contenttype == "nescafe/screenshot")
	{

			$dir = "savescreens";
			$mode = "B";

	}



// If ContentType is a State File then set Save Directory

	else if ($contenttype == "nescafe/state")
	{

		// Set Save Directory on Server

			$dir = "savestates";


		// Determine the Slot Number for State (from URL)

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



// If ContentType is a Animated GIF Movie then set Save Directory

	else if ($contenttype == "nescafe/movie")
	{

		// Set Save Directory

			$dir = "savemovies";


		// Set Binary Transfer Mode

			$mode = "B";


	}




// If ContentType is a Animated GIF Movie and TimeTrial Data then set Save Directory

	else if ($contenttype == "nescafe/timetrial")
	{

		// Set Save Directory

			$dir = "timetrials";


		// Set Binary Transfer Mode

			$mode = "B";


	}


// If ContentType is Settings file

	else if ($contenttype == "nescafe/settings")
	{

		// Return Success

			echo "SUCCESS\r\n";
			exit;


	}


// If ContentType is SaveRAM then set Save Directory

	else if ($contenttype == "nescafe/saveram")
	{

			$dir = "saveram";

	}




// If ContentType is Test

	else if ($contenttype == "nescafe/test")
	{

			echo "SUCCESS\n";
			exit;

	}



// Otherwise an Unknown ContentType was Posted

	else
	{

		// Unknown Content Type

			echo "NESCafe Save Script Installed\n";
			exit;
	}




// Record the Number of Encoded ASCII Lines that are Expected

	$dl = 0;
	if (isset($_POST["datalength"]))
	{
		$dl = $_POST["datalength"];
	}



// Declare Local Variables

	$i = 0;
	$total = 0;


// Read Bank0 from Posted Data Stream

	$BankData = "";

	if (isset($_POST["data0"]))
	{

		$BankData = $_POST["data0"];

	}



// Check that Save Directory Exists

	if (!is_dir($dir))
	{

		if (!mkdir ($dir))
		{
			echo "Error: Failed to create directory";
			exit;
		}


	}



// Construct the Filename

	$filename = "$dir/".$user."-".$gamename.".".$ext;




// Perform Binary Transfer (used by Animated GIF Movies and Screenshots)

	if ($mode == "B")
	{


		// Attempt to Create GZip Compressed Data File

			if (!$file_handle = fopen($filename.".gz","w"))
			{

				echo "Error: Cannot Open ".$filename.".gz for Output";
				exit;

			}



		// Load Data from Posted Stream

			$datastream = "";

			while($BankData != "")
			{


				// Increment Bank Number

					$i++;


				// Increment Total Number of Bytes Read

					$total = $total + strlen($BankData);



				// Loop over 2-byte Hex Pairs

					for ($x = 1; $x <= 1024/2; $x++)
					{


						// Get Hex Pair and Convert to Binary

							$MSB        = substr($BankData,$x*2-2,1);
							$LSB        = substr($BankData,$x*2-1,1);
							$datastream = $datastream.chr(hexdec($MSB.$LSB));



						// Buffer up to 32 Bytes at a Time and Commit to Disk

							if (strlen($datastream)>32)
							{

								if (!fwrite($file_handle, $datastream))
								{
									echo "Error: Cannot Write to Server File";
									exit;
								}

								$datastream = "";

							}


					}



				// Read from Next Bank

					$BankData = "";

					if (isset($_POST["data".$i]))
					{
						$BankData = $_POST["data".$i];
					}

			}



		// Check Totals Match

			if ($dl != $total)
			{

				echo "Error: Data Receive Error";
				exit;

			}



		// Commit Any Remaining Data Bytes

			if (!fwrite($file_handle, $datastream))
			{

				echo "Error: Cannot Write to Server File";
				exit;

			}


		// Close Handle to File

			fclose($file_handle);



		// Open the Compressed Data File

			if (!$zd = gzopen($filename.".gz", "r"))
			{

				echo "Error: Cannot Open and Uncompress ".$filename.".gz";
				exit;

			}


		// Open File for Storing Uncompressed Result

			if (!$file_handle = fopen($filename,"w"))
			{

				echo "Error: Cannot Open ".$filename." for Output";
				exit;

			}



		// Uncompress Data File

			while ($curline = gzread($zd,1024))
			{

				if (!fwrite($file_handle, $curline))
				{
					echo "Error: Cannot Write to File";
					exit;
				}

			}



		// Close Input and Output Files

			fclose($zd);
			fclose($file_handle);



		// Delete Temporary File

			unlink ($filename.".gz");



		// Declare Success

			echo "Success".$i."\r\n";


		// Uncomment the Following Line to Redirect to a URL after the Save Completes

			//echo "URL:http://www.davieboy.net/\r\n";


		// Exit Script

			exit;


	}



// Perform ASCII Transfer (used by State and SaveRAM Files)

	else
	{


		// Create Server File

			if (!$file_handle = fopen($filename,"w"))
			{

				echo "Error: Cannot open ".$filename." for Output";
				exit;

			}



		// Loop Over Posted Data from NESCafe

			while($BankData != "")
			{


				// Write Data to Output File on Server

					if (!fwrite($file_handle, $BankData."\r\n"))
					{

						echo "Failed to write to ".$filename." on Server";
						exit;

					}


				// Increment Bank Number

					$i++;


				// Increment Total Number of Bytes Read

					$total = $total + strlen($BankData);


				// Read from Next Bank

					$BankData = "";

					if (isset($_POST["data".$i]))
					{
						$BankData = $_POST["data".$i];
					}

			}



		// Check Totals Match

			if ($dl != $total)
			{

				echo "Data Receive Error";
				exit;

			}



		// Close Handle to Output File

			if (!fclose($file_handle))
			{

				echo "Failed to Close file on Server";
				exit;

			}



		// Declare Success

			echo "Success".$i."\r\n";
			exit;


	}



?>