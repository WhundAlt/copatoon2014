<?PHP

/*

'###########################################################################
'#
'# NESCafe PHP Script to Display a PNG/GIF Image of a Saved State or SaveRAM file
'#
'# @author  : David de Niese
'# @website : www.nescafeweb.com
'# @version : 1.000
'#
'# Use:
'# http://domain/nescafeshowthumb.php?file=savestate.nss
'#
'###########################################################################

*/


	// Prevent Cache

		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
		header('Cache-Control: no-store, no-cache, must-revalidate');
		header('Cache-Control: post-check=0, pre-check=0', FALSE);
		header('Pragma: no-cache');



	// Get the Username

		$file = "";

		if (isset($_GET['file']))
		{
			$file = $_GET['file'];
		}

		if (!file_exists ("$file"))
		{
			echo "Error: NESCafe file ".$file." does not exist on Server";
			exit;
		}



	// Clear Decoded Buffer

		$decoded = "";



/*
 *
 * Decode ASCII HEX into Real Hex Array
 *
 */

	// Put image text file into an array line by line

		$lines = file("$file");


	// Loop lines array line by line

		foreach ($lines as $line_num => $line)
		{


			// Loop over 2-byte Hex Pairs

				for ($i = 1; $i <= 1024/2; $i++)
				{

					// Get Hex Pair and Convert to Binary

						$MSB = substr($line,$i*2-2,1);
						$LSB = substr($line,$i*2-1,1);
						$decoded = $decoded.chr(hexdec($MSB.$LSB));


				}

		}





/*
 *
 * Check File Header
 *
 */

	// Check for Signature

		if (substr($decoded,0,8)!='NSAVESTE' && substr($decoded,0,8) != 'NSAVERAM')
		{
			echo "Error: Not a Valid NESCafe State/RAM File";
			exit;
		}



	// Check Version Number

		$version = ord(substr($decoded,8,1)) * 256 + ord(substr($decoded,9,1));

		if ($version > 2)
		{
			echo "Error: Invalid NESCafe State/RAM File, Version Number is higher than 2.";
			exit;
		}



	// Check Compression Number

		$compression = ord(substr($decoded,10,1)) * 256 + ord(substr($decoded,11,1));

		if ($compression != 2)
		{

			echo "Error: Invalid NESCafe State/RAM File, Compression needs to be GZIP (available with NESCafe 0.612 onwards)";
			exit;

		}


	// Check File Size

		$datasize = ord(substr($decoded,13,1)) * 65536 + ord(substr($decoded,14,1)) * 256 + ord(substr($decoded,15,1));

		if ($datasize > (1024*1024))
		{
			echo "Error: Invalid NESCafe State/RAM File, Data Volume larger than 1MB";
			exit;
		}


	// Strip off Header

		$decoded = substr($decoded,16);
		$decoded = substr($decoded,0,$datasize);




/*
 *
 * Write Compressed Data to Temporary File
 *
 */


	// Choose Temporary File

		$file = tempnam(".", "tmp");



	// Write Data to Temporary File

		if (!$file_handle = fopen($file,"w"))
		{
			echo "Error: Cannot Open Temporary File for Output";
			exit;
		}

		if (!fwrite($file_handle, $decoded))
		{
			echo "Error: Cannot Write to Temporary File";
			exit;
		}

		fclose($file_handle);



/*
 *
 * Open and Stream GZip Content from Temp File
 *
 */

	// Open File

		if (!$zd = gzopen($file, "r"))
		{
			echo "Error: Cannot Open Temporary File for Input";
			exit;
		}


	// Read Header

		if (!$contents = gzread($zd,7))
		{
			echo "Error: Cannot Read from Temporary File";
			exit;
		}


	// Loop Over Sections, Waiting to find IMG

		while (strlen($contents)>3 && substr($contents,0,3)!='IMG')
		{


			// Find Length of Section

				$jump = ord(substr($contents,3,1)) + ord(substr($contents,4,1)) * 256 + ord(substr($contents,5,1))*65536;



			// Jump Over Other Sections

				if (!$contents = gzread($zd,$jump))
				{
					echo "Error: Cannot Jump Section Data from Temporary File";
					exit;
				}


			// Jump to Next Section

				if (!$contents = gzread($zd,7))
				{
					echo "Error: Cannot Read Section Header from Temporary File";
					exit;
				}



		}


	// Check if we Reader IMG Data

		if (strlen($contents)>3 && substr($contents,0,3)=='IMG')
		{


			// Grab Length of PNG or GIF Image Data

				$jump = ord(substr($contents,3,1)) + ord(substr($contents,4,1)) * 256 + ord(substr($contents,5,1))*65536;


			// Read Image Data

				if (!$imgdata = gzread($zd,$jump))
				{
					echo "Error: Cannot Read Image Data from Temporary File";
					exit;
				}


			// Set Header Type

				if (substr($imgdata,0,3)=='GIF')
					header('Content-type: image/gif');

				else if (substr($imgdata,1,3)=='PNG')
					header('Content-type: image/png');

				else
					header('Content-type: image/unknown');



			// Write PNG or GIF Data to Output

				echo $imgdata;

		}
		else
		{
			echo "Error: Cannot Read Section Header from Temporary File";
			exit;
		}



	// Close GZ InputStream

		gzclose($zd);


	// Delete Temporary File

		unlink ($file);


	// Clean Exit

		exit;



?>