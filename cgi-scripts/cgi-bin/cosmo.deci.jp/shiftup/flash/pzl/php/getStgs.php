<?php
$output = "&ret=0&msg=&total=&flgMi=1&suu=" . $_POST["suu"];
try {
	$db = new PDO("sqlite:pzl.db");

	$r = $db->query("select count(*) from stgs");
	if (!$r) {
		echo $output;
	} else {
		$output = str_replace("total=", "total=" . $r->fetchColumn(), $output);
		$order = "no desc";
		if ($_POST["srt"] == 1) {
			$order = "srt1 desc";
		}
		if ($_POST["srt"] == 2) {
			$order = "srt2";
		}
		$rows = $db->query("select *, (keiHyouka + suuHyouka) as srt1, (suuClr / suuPlay) as srt2 from stgs order by " . $order . " limit " . $_POST["suu"] . " offset " . $_POST["from"]);
		
		$cols = ["no", "cr", "msg", "h", "w", "jkn", "cr_dt", "suuPlay", "suuClr", "suuHyouka", "keiHyouka", "nm", "hisc", "hisc_dt", "hisc_nm", "mineSuuPlay", "mineSuuClr", "mineHyouka", "mineSc"];
		$i = 0;
		foreach ($rows as $row) {
			foreach ($cols as $col) {
				$output .= "&" . $col . $i . "=" . $row[$col];
			}
			$i++;
		}
		echo $output;
	}
} catch(PDOException $e) {
	echo $output;
}
?>