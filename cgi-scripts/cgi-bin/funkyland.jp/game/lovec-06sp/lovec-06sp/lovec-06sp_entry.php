<?php
	if ($_POST["new_game"]) {
		file_put_contents("name", $_POST["name_kana"]);
		file_put_contents("save", "b21=0&b20=0&b19=0&b18=0&b17=0&b16=0&b15=0&b14=0&b13=0&b12=0&b11=0&b10=0&b9=0&b8=0&b7=0&b6=0&b5=0&b4=0&b3=0&b2=0&b1=0&Getcnt=0&Chancecnt=0&TodaySch=0&TodayNum=0");
		echo "entry=new&id=1&pw=1";
	} else {
		echo "entry=regist";
	}
?>