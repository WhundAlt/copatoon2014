<?php
	echo "entry=ok";
	$name = file_get_contents("name");
	if ($name) {
		echo "&name_kana=", $name;
	} else {
		echo "&name_kana=?????";
	}
	$save = file_get_contents("save");
	if ($save) {
		echo "&", $save;
	} else {
		echo "&comment=&b21=0&b20=0&b19=0&b18=0&b17=0&b16=0&b15=0&b14=0&b13=0&b12=0&b11=0&b10=0&b9=0&b8=0&b7=0&b6=0&b5=0&b4=0&b3=0&b2=0&b1=0&Getcnt=0&Chancecnt=0&TodaySch=0&TodayNum=1";
	}
?>