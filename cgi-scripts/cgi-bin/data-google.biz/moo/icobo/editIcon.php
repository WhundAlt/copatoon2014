<?php
try {
	$db = new PDO("sqlite:icobo.db");
	$r = $db->query("select * from icons where i=" . $_POST["d0"]);
	if (!$r) {
		echo "ng";
	} else {
		$icon = $r->fetch();
		if (!$icon) {
			echo "ng";
		} else {
			echo "i=" . $icon["i"] . "&";
			echo "n=" . $icon["n"] . "&";
			echo "r=" . $icon["r"] . "&";
			echo "k=" . $icon["k"] . "&";
			echo "u=" . $icon["u"] . "&";
			echo "up=&";
			echo "ap=&";
			echo "c=" . $icon["c"] . "&";
			echo "s=" . $icon["d"];
		}
	}
} catch(PDOException $e) {
	echo "ng";
}
?>