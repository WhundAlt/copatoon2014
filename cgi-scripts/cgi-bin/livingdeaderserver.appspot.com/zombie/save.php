<?php
$save = json_decode(file_get_contents("_savedata"),true);
$data = json_decode($_POST["data"],true);
foreach ($data as $k => $v) {
	$save[$k] = $v;
}
$save["lastUpdateTime"] = time();
file_put_contents("_savedata", json_encode($save));
echo '{"brouserAcNum": 90776, "lastUpdateTime": 0, "iosAcNum": 7755, "totalKillNum": "262576009", "versionNum": 1, "serverNow": 0, "androidAcNum": 16180}';
?>