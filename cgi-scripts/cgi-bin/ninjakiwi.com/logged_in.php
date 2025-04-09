<?php
defined('DS') || define('DS', DIRECTORY_SEPARATOR);


$parent = dirname(__DIR__) . DS . 'httpsmynk.ninjakiwi.com';
require_once $parent . DS . 'sleekdb' . DS .'sleekDB.php';

function create_user() {
	$user = [
		'mynk_user' => 'flashpoint',
		'mynk_id' => '23444100',
		'mynk_token' => '4c364ce6-4957-41b5-aeb5-f77452100602',
		'avatar' => 'nk_monkey.png',
		'premium' => [
			'koins' => 0,
			'points' => 0,
			'bcash' => 0
		],
		'game_data' => [
			'gcash' => 0,
			'gnum' => 0,
			'gxp' => 0,
			'active' => 1,
			'glevel' => 0,
			'transid' => 0,
			'data' => NULL,
		],
		'inventory' => [],
		'currency_inventory' => []
	];
	return $user;	
}

$dataDir = realpath($parent . DS . 'database');
$userDB = \SleekDB\SleekDB::store('userdata', $dataDir);

$method = !(isset($_GET['method'])) ? 'login' : $_GET['method'];

if($method == 'login') {
	$response = $userDB->where('mynk_user', '=', 'flashpoint')->fetch();
	$user = count($response) == 1 ? $response[0] : null;
} else if($method == 'reset') {
	$response = $userDB->where('mynk_user', '=', 'flashpoint')->delete();
} else {
	die('unknown method');
}

if(!$user) {
	$data = create_user();
	$userDB->insert($data);
	$user = $data;
}

['mynk_user' => $mynk_user, 'mynk_id' => $mynk_id, 'mynk_token' => $mynk_token] = $user;
$flashvars = "username=$mynk_user&amp;token=$mynk_token&amp;id=$mynk_id";
?>
<!DOCTYPE html>
<html>
<head>
<title>Ninja Kiwi</title>
<script>
  function waitFiveSec(){
    setTimeout(function() {
		window.close()
	}, 5000);
  }
</script>
</head>
<body onload="waitFiveSec()">
<div id="content">
<div id="primary">
<h1>Logged in, page will close within 5 seconds!</h1>
<object type="application/x-shockwave-flash" id="flash" data="http://assets.nkstatic.com/nklogin/persistence.swf" style="visibility: visible;" width="600" height="300"><param name="menu" value="true"><param name="wmode" value="transparent"><param name="flashvars" value="<?php echo $flashvars; ?>"></object>
<object type="application/x-shockwave-flash" id="flash-legacy" data="http://ninjakiwi.com/nklogin/persistence.swf" style="visibility: visible;" width="600" height="300"><param name="menu" value="true"><param name="wmode" value="transparent"><param name="flashvars" value="<?php echo $flashvars; ?>"></object>
</div>
</div>
</body>
</html>