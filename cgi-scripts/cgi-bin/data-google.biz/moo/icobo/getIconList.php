<?php
try {
	$db = new PDO("sqlite:icobo.db");
	$queryC = "";
	if ($_POST["d1"]) {
		$queryC .= " where n like '%" . $_POST["d1"] . "%'";
	}
	if ($_POST["d2"]) {
		$queryC .= strlen($queryC) ? " and" : " where";
		$queryC .= " k='" . $_POST["d2"] . "'";
	}
	if ($_POST["d3"]) {
		$queryC .= strlen($queryC) ? " and" : " where";
		$queryC .= " r like '%" . $_POST["d3"] . "%'";
	}
	$r = $db->query("select count(*) from icons" . $queryC);
	if (!$r) {
		echo "ttl=0&start=1";
	} else {
		$total = $r->fetchColumn();
		$rows = $db->query("select * from icons" . $queryC . " order by i desc limit 126 offset " . $_POST["d0"]);
		
		$cols = ["i", "n", "r", "c", "u", "k", "d", "x"];
		$output = "ttl=" . $total . "&start=" . (1 + $_POST["d0"]);
		$i = 1;
		foreach ($rows as $row) {
			foreach ($cols as $col) {
				$output .= "&" . $col . $i . "=" . $row[$col];
			}
			$i++;
		}
		echo $output;
	}
} catch(PDOException $e) {
	echo "ttl=0&start=1";
}
?>