<?php
$output = json_decode('{"brouserAcNum": 614630, "lastUpdateTime": 0, "iosAcNum": 0, "totalKillNum": "1127892011", "versionNum": 1, "newDeviceFlg": false, "serverNow": 0, "androidAcNum": 0}',true);
$save = json_decode(file_get_contents("_savedata"),true);
foreach ($save as $k => $v) {
	$output[$k] = $v;
}
echo json_encode($output);
?>