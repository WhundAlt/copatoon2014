<?php
echo "ICONURL=";
switch(strtolower($_POST["INPUTNAME"])) {
	case "masason": echo "club/masason.png"; break;
	case "babara": echo "club/babara.png"; break;
	case "ishii": echo "club/ishii.png"; break;
	case "bluemaxima": echo "club/bluemaxima.png"; break;
	default: echo "club/default.png"; break;
}
?>