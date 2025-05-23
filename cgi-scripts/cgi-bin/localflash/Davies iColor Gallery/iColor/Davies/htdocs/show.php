<?php
	//If GD library is not installed, say sorry
	if(!function_exists("imagecreate")) die("Sorry, you need GD library to run this example");
	//Capture Post data
	$data = explode(",", $_POST['img']);
	$width = $_POST['width'];
	$height = $_POST['height'];
	//Allocate image
	$image=(function_exists("imagecreatetruecolor"))?imagecreatetruecolor( $width ,$height ):imagecreate( $width ,$height );
	imagefill($image, 0, 0, 0xFFFFFF);
	//Copy pixels
	$i = 0;
	for($x=0; $x<=$width; $x++){
		for($y=0; $y<=$height; $y++){
			$r = hexdec("0x".substr( $data[$i] , 2 , 2 ));
			$g = hexdec("0x".substr( $data[$i] , 4 , 2 ));
			$b = hexdec("0x".substr( $data[$i++] , 6 , 2 ));
			$color = imagecolorallocate($image, $r, $g, $b);
			imagesetpixel ($image,$x,$y,$color);
		}
	}
	//Output image and clean
	header( "Content-type: image/jpeg" );
	header("Content-Disposition: attachment; filename='output.jpg'");
	imagejpeg( $image, NULL, 100 );
	//imagedestroy( $image );	
?>