<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

include_once('service.php');
include_once('api.class.php');

$liveGameParameters = new KetnetGameParameters();
$liveGameParameters->gameid   = '57722de281112';
$liveGameParameters->salt     = '6ee6fc7caee1ff75c4368f5d4116a4cc';
$liveGameParameters->apikey   = 'dc4451f6a84944a27767ea970b21cfd5';

$acceptGameParameters = new KetnetGameParameters();
$acceptGameParameters->gameid   = '57722de281112';
$acceptGameParameters->salt     = '6ee6fc7caee1ff75c4368f5d4116a4cc';
$acceptGameParameters->apikey   = 'dc4451f6a84944a27767ea970b21cfd5';


$api = new API($acceptGameParameters, $liveGameParameters);

if (isset($_POST['api_method'])) {
  echo $api->reflect($_POST['api_method'], $_POST);
}