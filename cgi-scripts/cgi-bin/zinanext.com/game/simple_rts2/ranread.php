<?php
	try {
		$db = new PDO("sqlite:simple_rts2.db");
		$rows = $db->query("select NAME, SCORE from rts2_score where MAINID=" . $_POST["mainid"] . " order by SCORE desc");
		
		$i = 0;
		$output = "";
		foreach ($rows as $row) {
			$output .= "&sname" . $i . "=" . $row["NAME"] . "&score" . $i . "=" . $row["SCORE"];
			$i++;
		}
		$output .= "&counta=" . $i;
		echo ltrim($output, "&");
		
	} catch(PDOException $e) {
		echo "counta=0";
	}
?>