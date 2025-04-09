<?PHP

	$entityBody = file_get_contents('php://input');

	if (strpos($entityBody, '14770dgtx') > 0) {	// level3
		echo '<result status="ok" text="ok" file="/planes/level_03.xml" score="930" lives="5" wc="2" wl="1" level="3" s="14770.91219" r="95920" f="0" zen="0" easy="0" />';
	} else if (strpos($entityBody, '14770dgtx') > 0) {	// level4
		echo '<result status="ok" text="ok" file="/planes/level_04.xml" score="1415" lives="5" wc="2" wl="1" level="4" s="14770.91219" r="95920" f="0" zen="0" easy="0" />';
	} else if (strpos($entityBody, 'Raspberry') > 0) {
		echo '<result status="ok" text="ok" file="/planes/level_04.xml" score="0" lives="5" wc="2" wl="1" level="4" s="14777.86219" r="63793" f="0" zen="0" easy="0" />';
	} else if (strpos($entityBody, 'Blueberry') > 0) {
		echo '<result status="ok" text="ok" file="/planes/level_04.xml" score="0" lives="5" wc="1" wl="1" level="4" s="14776.6998" r="85661" f="0" zen="0" easy="0" />';
	} else {
		echo '<result status="format-error" text="Hi - the password doesn\'t look valid - maybe there\'s a typo?" />';
	}