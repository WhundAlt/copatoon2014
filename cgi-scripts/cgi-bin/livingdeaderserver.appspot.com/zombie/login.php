<?php
$output = json_decode('{"brouserAcNum": 90776, "lastUpdateTime": 0, "iosAcNum": 7755, "pass": 755502, "userId": 21916, "totalKillNum": "262576009", "versionNum": 1, "androidAcNum": 16180, "newDeviceFlag": false}',true);
$save = json_decode(file_get_contents("_savedata"),true);
foreach ($save as $k => $v) {
	$output[$k] = $v;
}
$output["serverNow"] = time();
echo json_encode($output);
?>