<?php
	try {
		$db = new PDO("sqlite:simple_rts2.db");
		$rows = $db->query("select DATAS, LASTCLEAR from rts2_data where MAINID=" . $_POST["mainid"]);
		
		foreach ($rows as $row) {
			echo "datas=" . $row["DATAS"] . "&lastclear=" . $row["LASTCLEAR"];
		}
		
	} catch(PDOException $e) {
		echo "";
	}
?>