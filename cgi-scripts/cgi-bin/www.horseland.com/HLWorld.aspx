<?php
	$api = $_REQUEST['api'];
	
	if ($api == 'getStoreItems') {
		$cat = $_REQUEST['category'];
		if ($cat == 'hHat') {
			echo 'xml=<items><i f="3" p="1400" t="" /><i f="4" p="1500" t="" /><i f="5" p="1400" t="" /><i f="6" p="1500" t="" /></items> &return_status=valid';
		} else if ($cat == 'Bridle') {
			echo 'xml=<items><i f="3" p="800" t="" /><i f="4" p="800" t="" /><i f="5" p="800" t="pop" /><i f="6" p="900" t="" /></items> &return_status=valid';
		} else if ($cat == 'Saddle') {
			echo 'xml=<items><i f="10" p="3500" t="" /><i f="3" p="3500" t="" /><i f="4" p="3750" t="" /><i f="5" p="3750" t="" /><i f="6" p="3750" t="" /><i f="7" p="4000" t="" /><i f="8" p="4000" t="" /><i f="9" p="3750" t="" /></items> &return_status=valid';
		} else if ($cat == 'Pad') {
			echo 'xml=<items><i f="10" p="500" t="" /><i f="3" p="500" t="" /><i f="4" p="500" t="" /><i f="5" p="600" t="pop" /><i f="6" p="600" t="" /><i f="7" p="600" t="" /><i f="8" p="600" t="" /><i f="9" p="800" t="" /></items> &return_status=valid';
		} else if ($cat == 'FrontDecor') {
			echo 'xml=<items><i f="3" p="2000" t="" /><i f="4" p="2200" t="" /><i f="5" p="2200" t="" /><i f="6" p="1500" t="" /><i f="7" p="2200" t="" /><i f="8" p="2200" t="" /></items> &return_status=valid';
		} else if ($cat == 'BackDecor') {
			echo 'xml=<items><i f="3" p="1900" t="" /><i f="4" p="2050" t="" /><i f="5" p="1900" t="" /></items> &return_status=valid';
		} else if ($cat == 'Wrap') {
			echo 'xml=<items><i f="3" p="1000" t="" /><i f="4" p="1100" t="" /><i f="5" p="1000" t="" /><i f="6" p="1000" t="pop" /><i f="7" p="1000" t="" /><i f="8" p="1000" t="" /><i f="9" p="1200" t="" /><i f="10" p="1000" t="" /></items> &return_status=valid';
		} else if ($cat == 'Hat') {
			echo 'xml=<items><i f="3" p="730" t="" /><i f="4" p="730" t="" /><i f="5" p="730" t="" /><i f="6" p="770" t="" /><i f="7" p="750" t="" /><i f="13" p="730" t="" /><i f="14" p="730" t="" /><i f="15" p="750" t="" /><i f="16" p="750" t="" /></items> &return_status=valid';
		} else if ($cat == 'Earrings') {
			echo 'xml=<items><i f="4" p="530" t="" /><i f="5" p="530" t="" /><i f="6" p="540" t="" /><i f="7" p="580" t="" /><i f="8" p="550" t="" /><i f="9" p="580" t="" /><i f="10" p="580" t="" /><i f="11" p="580" t="" /><i f="12" p="530" t="" /><i f="13" p="530" t="" /><i f="14" p="510" t="" /><i f="15" p="510" t="" /><i f="3" p="540" t="" /></items> &return_status=valid';
		} else if ($cat == 'Glasses') {
			echo 'xml=<items><i f="5" p="610" t="" /><i f="6" p="600" t="" /><i f="7" p="600" t="" /><i f="10" p="600" t="" /><i f="11" p="610" t="" /><i f="12" p="600" t="" /><i f="8" p="600" t="" /></items> &return_status=valid';
		} else if ($cat == 'Necklace') {
			echo 'xml=<items><i f="8" p="530" t="" /><i f="11" p="530" t="" /><i f="3" p="580" t="" /><i f="4" p="550" t="" /><i f="5" p="550" t="" /><i f="6" p="580" t="" /><i f="7" p="580" t="" /></items> &return_status=valid';
		} else if ($cat == 'Scarf') {
			echo 'xml=<items><i f="3" p="750" t="" /><i f="4" p="730" t="" /><i f="5" p="750" t="" /><i f="6" p="770" t="" /><i f="7" p="750" t="" /><i f="8" p="770" t="" /><i f="9" p="770" t="" /><i f="10" p="730" t="" /><i f="11" p="730" t="" /><i f="12" p="750" t="" /><i f="13" p="750" t="" /></items> &return_status=valid';
		} else if ($cat == 'CollarShirt') {
			echo 'xml=<items><i f="8" p="1420" t="" /><i f="9" p="1420" t="" /><i f="10" p="1420" t="" /><i f="11" p="1400" t="" /><i f="12" p="1400" t="" /><i f="17" p="1400" t="" /><i f="18" p="1400" t="" /><i f="3" p="2000" t="" /><i f="4" p="2000" t="" /><i f="5" p="1500" t="" /><i f="6" p="1500" t="" /><i f="7" p="1450" t="" /><i f="13" p="1450" t="" /><i f="14" p="1450" t="" /><i f="15" p="1450" t="" /><i f="16" p="1500" t="" /></items> &return_status=valid';
		} else if ($cat == 'Shirt') {
			echo 'xml=<items><i f="9" p="1200" t="" /><i f="10" p="1200" t="" /><i f="11" p="1200" t="" /><i f="12" p="1200" t="" /><i f="17" p="1400" t="" /><i f="18" p="1400" t="" /><i f="19" p="1400" t="" /><i f="20" p="1400" t="" /><i f="13" p="1300" t="" /><i f="3" p="1300" t="" /><i f="4" p="1400" t="" /><i f="5" p="1400" t="" /><i f="6" p="1400" t="pop" /><i f="7" p="1100" t="" /><i f="8" p="1300" t="" /></items> &return_status=valid';
		} else if ($cat == 'Coat') {
			echo 'xml=<items><i f="8" p="3700" t="" /><i f="9" p="3700" t="" /><i f="10" p="3600" t="" /><i f="11" p="3300" t="" /><i f="12" p="3300" t="" /><i f="17" p="3800" t="" /><i f="18" p="3800" t="" /><i f="19" p="3700" t="" /><i f="20" p="3700" t="" /><i f="21" p="3300" t="" /><i f="3" p="3600" t="" /><i f="4" p="3600" t="" /><i f="5" p="3700" t="" /><i f="6" p="4000" t="" /><i f="7" p="4000" t="" /></items> &return_status=valid';
		} else if ($cat == 'Bracelet') {
			echo 'xml=<items><i f="3" p="530" t="" /><i f="4" p="510" t="" /><i f="5" p="520" t="" /><i f="6" p="520" t="" /><i f="9" p="550" t="" /><i f="10" p="520" t="" /><i f="11" p="580" t="" /></items> &return_status=valid';
		} else if ($cat == 'Glove') {
			echo 'xml=<items><i f="5" p="580" t="" /><i f="6" p="590" t="" /><i f="9" p="600" t="" /><i f="10" p="600" t="" /><i f="11" p="580" t="" /><i f="12" p="580" t="" /></items> &return_status=valid';
		} else if ($cat == 'Pant') {
			echo 'xml=<items><i f="3" p="2800" t="pop" /><i f="4" p="3000" t="" /><i f="5" p="3000" t="" /><i f="6" p="2850" t="" /><i f="7" p="2950" t="" /><i f="8" p="2850" t="" /><i f="13" p="3000" t="pop" /><i f="14" p="3100" t="" /><i f="15" p="2950" t="" /><i f="16" p="3000" t="" /><i f="9" p="2850" t="" /><i f="10" p="2850" t="" /></items> &return_status=valid';
		} else if ($cat == 'Tights') {
			echo 'xml=<items><i f="9" p="2220" t="" /><i f="10" p="2220" t="" /><i f="11" p="2220" t="" /><i f="12" p="2260" t="" /><i f="17" p="2220" t="" /><i f="19" p="2220" t="" /><i f="18" p="2250" t="" /><i f="20" p="2250" t="" /><i f="16" p="2220" t="" /><i f="3" p="2250" t="" /><i f="4" p="2250" t="" /><i f="5" p="2250" t="" /><i f="6" p="2250" t="" /><i f="7" p="2260" t="" /></items> &return_status=valid';
		} else if ($cat == 'Socks') {
			echo 'xml=<items><i f="3" p="445" t="" /><i f="4" p="445" t="" /><i f="5" p="500" t="" /><i f="6" p="500" t="" /><i f="7" p="510" t="" /><i f="8" p="510" t="" /><i f="9" p="445" t="" /><i f="10" p="500" t="" /><i f="11" p="445" t="" /><i f="12" p="500" t="" /></items> &return_status=valid';
		} else if ($cat == 'Shoe') {
			echo 'xml=<items><i f="3" p="980" t="" /><i f="4" p="1050" t="" /><i f="5" p="1200" t="" /><i f="6" p="1050" t="" /><i f="7" p="1000" t="" /><i f="8" p="1000" t="" /><i f="9" p="980" t="" /><i f="10" p="980" t="" /><i f="11" p="980" t="" /><i f="12" p="980" t="" /><i f="13" p="1050" t="" /><i f="14" p="1000" t="" /><i f="15" p="1000" t="" /><i f="16" p="1050" t="" /><i f="17" p="970" t="" /><i f="18" p="970" t="" /><i f="19" p="980" t="" /><i f="20" p="980" t="" /><i f="21" p="980" t="" /></items> &return_status=valid';
		}
		
	} else {
		echo 'return_status=valid';
	}