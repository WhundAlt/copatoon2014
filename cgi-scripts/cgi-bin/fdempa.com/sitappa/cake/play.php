<?php
//クラスの読み込み
require_once 'TwitterRequest/TwitterRequest.php';



//インスタンス取得
$twitter = TwitterRequest::build();

//初回起動時
if($twitter==false){
 attachPage("野","獣","先","輩");
 exit;
}


//実行
$consumer = $twitter->rerun();


$screenName = $consumer->getScreenName();
$userId = $consumer->getUserId();
$at = $_SESSION['access_token'];
$ats = $_SESSION['access_token_secret'];


//処理内容を以下に記載
//echo("Name : ".$screenName."</br>");
//echo("ID : ".$userId."</br>");
//echo("Access_Token : ".$_SESSION['access_token']."</br>");
//echo("Access_Token_Secret : ".$_SESSION['access_token_secret']."</br>");

//ページ生成
attachPage($screenName,$userId,$at,$ats);



//以下HTML
function attachPage($Sn,$Id,$At,$Ats){

$time = date("YmjHis");
//echo $time;
print<<<EOF
<html>
	<head>
		<title>シン・アホゲーケーキ新劇場版:||</title>
        <script type="text/javascript" src="js/swfobject.js"></script>
 <script type="text/javascript">
 var flashvars = { ts:timeStampFunc() }; //現在の時間を取得して2つのswfにflashvarsを渡す
 var params = { scale:"noscale", menu:"false" };
 var attributes = {};
 swfobject.embedSWF("ahoge_cake.swf?sn=$Sn&id=$Id&at=$At&ats=$Ats&jikan=$time", "main1", "600", "400", "9.0.00", "js/expressInstall.swf", flashvars, params, attributes );
 swfobject.embedSWF("so_3.swf?jikan=$time", "main2", "468", "60", "9.0.00", "js/expressInstall.swf", flashvars, params, attributes );
function timeStampFunc()
 { 
  return new Date().getTime();
 }
</script>
</head>
<body>
<param name="allowScriptAccess" value="always" />
<center>
  		<div id="main1">
			<h1>AS2.0</h1>
			<p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
		</div><br>

		<br>
		<div id="main2">
			<h1>AS3.0</h1>
			<p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
		</div><br>

		
</body>
</html>
EOF;
}















//投稿処理
//$response = $consumer->sendRequest("http://api.twitter.com/1/statuses/update.xml", array('status' => "圧倒的ぴよぴよ"), "POST");
//結果表示
//echo "<code>".htmlspecialchars($response->getBody())."</code>";



//ツイート取得
//$response = $consumer->sendRequest("http://api.twitter.com/1/statuses/user_timeline.xml", array('count' => "10"), "GET");
//XMLに変換
//$xml = simplexml_load_string($response->getBody());
//結果表示
//foreach($xml->status as $status){
//	echo $status->text."<br />";
//}
//consumer_key : アプリケーション登録した際に発行されるCunsumer Key
//$twitter->postImage("30306cb867920395df136ceeb214ccf7","unko.png","【○○○をプレイ！】Score:".$_GET['x']." TURN:".$_GET['y']." こ↑こ↓から遊べるよ→ http://bit.ly/OwGKaA　#ahoge @homuhomu　【宣伝文句】");
//unlink("unko.png"); 
//header("Location: https://twitter.com/"); 
?>
