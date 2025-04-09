<?php
	try {
		$cols = ["NAME", "WAVES", "STENAME", "COMM", "FUN", "DIFF", "MAINID", "PLAYS"];
		$cols2 = ["PLAY1", "PLAY2", "PLAY3", "PLAY4", "PLAY5", "PLAY6", "PLAY7"];
		$db = new PDO("sqlite:simple_rts2.db");
		$numMax = 15;
		
		$orderBy = "FUN";
		switch ($_POST["ordertype"]) {
			case 1: $orderBy = "DIFF"; break;
			case 2: $orderBy = "NUM"; break;
			case 3: $orderBy = "PLAYS"; break;
			case 4: $orderBy = "PLAYS"; break;
			case 5: $orderBy = "PLAY" . (date("w")+1); break;
			case 6: $orderBy = "LASTCLEAR"; break;
			case 7: $orderBy = "WAVES"; break;
			case 8: $orderBy = "COMM"; break;
		}
		$orderDir = ($_POST["ordertype2"] == 1) ? "" : " desc";
		
		$rows = $db->query("select " . implode(",", $cols) . "," . implode(",", $cols2) . " from rts2_data order by " . $orderBy . $orderDir . " limit " . $numMax . " offset " . ($_POST["limit"]*$numMax));
		
		$output = "";
		$i = 0;
		foreach ($rows as $row) {
			foreach ($cols as $col) {
				$key = ($col == "NAME") ? "sname" : strtolower($col);
				$output .= "&" . $key . $i . "=" . $row[$col];
			}
			$vals = [];
			foreach ($cols2 as $col) {
				array_push($vals, $row[$col]);
			}
			$output .= "&playweeks" . $i . "=" . implode("+", $vals);
			$i++;
		}
		$output .= "&counta=" . $i;
		echo ltrim($output, "&");
		
	} catch(PDOException $e) {
		echo "counta=0";
	}
?>