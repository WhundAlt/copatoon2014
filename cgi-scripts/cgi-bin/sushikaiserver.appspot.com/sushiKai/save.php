<?php
$save = json_decode(file_get_contents("_savedata"),true);
$data = json_decode($_POST["data"],true);
foreach ($data as $k => $v) {
	$save[$k] = $v;
}
file_put_contents("_savedata", json_encode($save));
echo '{"brouserAcNum": 614630, "lastUpdateTime": 0, "iosAcNum": 0, "totalKillNum": "1127892011", "versionNum": 1, "serverNow": 0, "androidAcNum": 0}';
?>