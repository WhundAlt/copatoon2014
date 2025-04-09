<?php
	try {
		echo '<?xml version="1.0" encoding="utf-8"?>';
		$db = new PDO("sqlite:tto.db");
		$r = $db->query("select count(*) from stages");
		if (!$r) {
			echo "<result><code>2</code></result>";
		} else {
			$total = $r->fetchColumn();
		
			$cols = ["id", "regist_date", "title", "author", "point_num", "access_num", "popularity"];
			$numMax = 50;
			
			$orderBy = "id";
			switch ($_POST["sortColumnIndex"]) {
				case 1: $orderBy = "title"; break;
				case 2: $orderBy = "author"; break;
				case 3: $orderBy = "point_num"; break;
				case 4: $orderBy = "regist_date"; break;
				case 5: $orderBy = "popularity"; break;
			}
			$orderDir = ($_POST["sortDescending"] == 1) ? " desc" : "";
			$rows = $db->query("select " . implode(",", $cols) . " from stages order by " . $orderBy . $orderDir . " limit " . $numMax . " offset " . $_POST["offset"])->fetchAll();
			
			echo "<result><code>0</code><total_num>" . $total . "</total_num>";
			echo "<num>" . count($rows) . "</num>";
			
			foreach ($rows as $row) {
				echo '<stage id="' . $row["id"] . '">';
				foreach ($cols as $col) {
					echo "<" . $col . ">" . htmlspecialchars($row[$col], ENT_XML1) . "</" . $col . ">";
				}
				echo "</stage>";
			}
			
			echo "</result>";
		}
			
	} catch(PDOException $e) {
		echo "<result><code>2</code></result>";
	}
?>