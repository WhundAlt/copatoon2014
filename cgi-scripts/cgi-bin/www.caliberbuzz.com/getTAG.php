<?php
 
$dataURL ="http://www.inboxtag.com/tag.tag?";// "http://www.inboxtag.com/testsometext.txt?";//http://www.inboxtag.com/tag.tag?;

$dataURL = $dataURL."cl=".$_REQUEST["cl"]."&";

$dataURL = $dataURL."session_id=".$_REQUEST["session_id"]."&";
$dataURL = $dataURL."unique_id=".$_REQUEST["unique_id"]."&";
$dataURL = $dataURL."global_id=".$_REQUEST["global_id"]."&";
$dataURL = $dataURL."sc=".$_REQUEST["sc"]."&";

$dataURL = $dataURL."pg=".$_REQUEST["pg"]."&";


for($i = 5 ; $i >= 1; $i--){
	if( isset($_REQUEST["p".$i] ) ){
		$dataURL = $dataURL."p".$i."=".$_REQUEST["p".$i]."&";
	}
}
for($i = 3 ; $i >= 1; $i--){
	
	if( isset($_REQUEST["i".$i] ) ){
		$dataURL = $dataURL."i".$i."=".$_REQUEST["i".$i]."&";
	}
	
}

$dataURL = $dataURL."ref=".$_REQUEST["ref"]."&";

$dataURL = $dataURL."rnd=".$_REQUEST["rnd"];
print $dataURL;
  readfile($dataURL);

?>