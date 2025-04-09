<?php
	$save = file_get_contents($_POST["chara"]);
	if ($save) {
		echo $save, "&";
	} else {
		echo "brock=0&money=0&exp_point=0&comment=&HP=20&SP=10&HP_code=1&SP_code=1&AT_code=1&DF_code=1&AR_code=1&u1=1&u2=1&u3=1&u4=0&u5=0&u6=0&u7=0&u8=0&u9=0&u10=0&u11=0&u12=0&u13=0&u14=0&u15=0&stage_data=0,0,0,0,4&";
	}
	$name = file_get_contents("name");
	if ($name) {
		echo "name=", $name, "&";
	} else {
		echo "name=??????&";
	}
	echo "entry=ok";
?>