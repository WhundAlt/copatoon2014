<?PHP

	$entityBody = file_get_contents('php://input');

	//	Tutorial:
	//	<data key: "undefined" tutorial="1" login="undefined" base="http://www.icyworlds.net/img/pictures/3_planes_nong.swf" debug="14317" level="0" />
	
	//	Tutorial End:
	//	<data f: "0" e="29657/222222222222222022221222204533222222022221281103222222212800542222222222222022" pd="5/2/1" score="390" s="14634.90147" level="999" />
	
	//	level 1 easy:
	//	<data key: "undefined" easy="1" login="undefined" base="http://www.icyworlds.net/img/pictures/3_planes_nong.swf" debug="14317" level="0" />
	//	<result status="ok" file="/planes/level_01.xml" level="1" login="" s="14635.11868" r="53100" />
        
	//	Level 1 end:
	//	<data f: "0" e="53141/2200220220102020220002225453231" pd="7/1/1" score="60" s="14635.11868" level="1" />
	//	<result status="ok" file="/planes/level_02.xml" pass="14635rgbx" level="2" />
		
	//level 2 end:
	//	<data f: "0" e="53433/22002221224445011155521222110100201412201031282001011012110112201214222" pd="7/1/2" score="460" s="14635.11868" level="2" />
	//	<result status="ok" file="/planes/level_03.xml" pass="14635rgbx" level="3" />
                        
	if (strpos($entityBody, 'tutorial="1"') > 0) {
		echo '<result status="ok" file="/planes/level_00.xml" level="999" login="" s="14634.90147" r="29290" />';
	} else if (strpos($entityBody, 'level="999"') > 0) {
		echo '<result status="tutorial_ended" />';
	} else if (strpos($entityBody, 'level="0"') > 0 && strpos($entityBody, 'easy="1"') > 0) {
		echo '<result status="ok" file="/planes/level_01.xml" level="1" login="" s="14778.83950" r="48072" />';
	} else if (strpos($entityBody, 'level="0"') > 0) {
		echo '<result status="ok" file="/planes/level_02.xml" level="2" login="" s="14632.37182" r="60895" />';
	} else if (strpos($entityBody, 'level="2"') > 0) {
		echo '<result status="ok" file="/planes/level_03.xml" pass="14770dgtx" level="3" />';
	} else if (strpos($entityBody, 'level="3"') > 0) {
		echo '<result status="ok" file="/planes/level_04.xml" pass="14770dgtx" level="4" />';
	} else if (strpos($entityBody, 'level="4"') > 0) {
		echo '<result status="ok" file="/planes/level_05.xml" pass="14770dgtx" level="5" />';
	} else if (strpos($entityBody, 'level="5"') > 0) {
		echo '<result status="ok" file="/planes/level_06.xml" pass="14770dgtx" level="6" />';
	} else if (strpos($entityBody, 'level="6"') > 0) {
		echo '<result status="ok" file="/planes/level_07.xml" pass="14770dgtx" level="7" />';
	} else if (strpos($entityBody, 'level="7"') > 0) {
		echo '<result status="ok" file="/planes/level_08.xml" pass="14770dgtx" level="8" />';
	} else if (strpos($entityBody, 'level="8"') > 0) {
		// echo '<result status="ok" file="/planes/level_09.xml" pass="14780cwds" level="9" />';	// EASY PATH
		echo '<result status="ok" file="/planes/level_09c.xml" pass="14770dgtx" level="109" />';
	} else if (strpos($entityBody, 'level="109"') > 0) {
		// echo '<result status="ok" file="/planes/level_10.xml" pass="14780cwds" level="10" />';	// EASY PATH
		echo '<result status="ok" file="/planes/level_10c.xml" pass="14770dgtx" level="110" />';
	} else if (strpos($entityBody, 'level="110"') > 0) {
		// echo '<result status="ok" file="/planes/level_11.xml" pass="14780cwds" level="11" />';	// EASY PATH
		echo '<result status="ok" file="/planes/level_11c.xml" pass="14770dgtx" level="111" />';
	} else if (strpos($entityBody, 'level="111"') > 0) {
		// echo '<result status="ok" file="/planes/level_12.xml" pass="14780cwds" level="12" />';	// EASY PATH
		echo '<result status="ok" file="/planes/level_12c.xml" pass="14770dgtx" level="112" />';
	} else if (strpos($entityBody, 'level="112"') > 0) {
		// echo '<result status="ok" file="/planes/level_13.xml" pass="14780cwds" level="13" />';	// EASY PATH
		echo '<result status="ok" file="/planes/level_13c_389022.xml" pass="14774jbdu" level="113" />';
	} else if (strpos($entityBody, 'level="113"') > 0) {
		// echo '<result status="cast" file="cast_13341.swf" score="12094" lives="9" bonus="13500" total="25594" />';	// EASY PATH
		echo '<result status="ok" file="/planes/level_14c_102813.xml" pass="14775kgbd" level="114" />';
	} else if (strpos($entityBody, 'level="114"') > 0) {
		echo '<result status="cast" file="cast_77012.swf" score="49390" lives="3" bonus="9000" total="58390" />';
	}