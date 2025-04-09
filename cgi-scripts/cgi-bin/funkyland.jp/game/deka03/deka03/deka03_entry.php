<?php
	file_put_contents("name", urldecode($_POST["name"]));
	file_put_contents("jack", "brock=0&money=0&exp_point=0&comment=&HP=20&SP=10&HP_code=1&SP_code=1&AT_code=1&DF_code=1&AR_code=1&u1=1&u2=1&u3=1&u4=0&u5=0&u6=0&u7=0&u8=0&u9=0&u10=0&u11=0&u12=0&u13=0&u14=0&u15=0&stage_data=0,0,0,0,4");
	file_put_contents("gap", "brock=0&money=0&exp_point=0&comment=&HP=20&SP=20&HP_code=1&SP_code=1&AT_code=1&DF_code=1&AR_code=1&u1=1&u2=1&u3=1&u4=0&u5=0&u6=0&u7=0&u8=0&u9=0&u10=0&u11=0&u12=0&u13=0&u14=0&u15=0&stage_data=0,0,0,0,4");
	echo "entry=new&id=1&pw=1";
?>