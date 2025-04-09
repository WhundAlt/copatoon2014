<?php
	try {
		echo '<?xml version="1.0" encoding="utf-8"?>';
		$db = new PDO("sqlite:tto.db");
		$cols = ["id", "regist_date", "update_date", "delete_flag", "title", "author", "comment", "width", "height", "bg_color", "dot_color", "line_color", "line_width", "point_num", "point_list"];
		
		$rows = $db->query("select " . implode(",", $cols) . " from stages where id=" . $_POST["id"]);
		
		echo "<result><code>0</code>";
		foreach ($rows as $row) {
			echo '<stage id="' . $row["id"] . '">';
			foreach ($cols as $col) {
				echo "<" . $col . ">" . htmlspecialchars($row[$col], ENT_XML1) . "</" . $col . ">";
			}
			echo "</stage>";
		}
		
		echo "</result>";
			
	} catch(PDOException $e) {
		echo "<result><code>2</code></result>";
	}
?>