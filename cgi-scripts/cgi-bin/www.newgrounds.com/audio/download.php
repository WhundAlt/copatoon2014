<?php
$song_id = $_GET["id"];

$songs =
[
	"10586" => "10586_newgrounds_tmt.mp3",
	"24516" => "24516_newgrounds_big_bl.mp3",
	"34354" => "34354_newgrounds_desert.mp3",
	"38914" => "38914_newgrounds_halfpi.mp3",
	"39805" => "39805_newgrounds_i_will.mp3",
	"52401" => "52401_newgrounds_little.mp3",
	"53610" => "53610_newgrounds_pro22.mp3",
	"54519" => "54519_newgrounds_satchi.mp3",
	"57239" => "57239_newgrounds_space_.mp3",
	"63120" => "xseraph7--+Restless+-2MUU0KTN1bQ.mp3",
	"64383" => "64383_newgrounds_plan_a.mp3",
	"65330" => "65330_newgrounds_omgrud.mp3",
	"65711" => "65711_newgrounds__rose_.mp3",
	"70695" => "70695_newgrounds_coma_-.mp3",
	"71894" => "71894_newgrounds_darksi.mp3",
	"73492" => "73492_newgrounds_shuga2.mp3",
	"83614" => "83614_newgrounds_silenc.mp3"
];

header("Content-Disposition: inline;filename=\"test.mp3\"");
echo file_get_contents($songs[$song_id]);