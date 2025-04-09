<?php

require dirname(__DIR__) . '/vo/AmfAuthenticationVO.php';

class Auth {
	
	private $games;
	
	public function __construct() {
		$this->games = json_decode(file_get_contents(dirname(__DIR__) . '/games.json'), true);
	}
	
	public function authenticate($apiKey, $gameKey, $bytesTotal, $sameDomain) {
		$auth = new AmfAuthenticationVO();
		
		if (isset($this->games[$gameKey])) {
			$game = $this->games[$gameKey];
			$gameId = $game["gameId"];
			$shortKey = $game["shortKey"];
			$token = bin2hex(openssl_random_pseudo_bytes(16));
			
			$auth->token = $token;
			$auth->gameName = $game["gameName"];
			$auth->gameUrl = "http://armorgames.com/play/{$gameId}/{$gameKey}";
			$auth->gameUrlShort = "http://armor.ag/{$shortKey}";
			
			session_name('agi_session');
			session_start();
			$_SESSION['token'] = $token;
			$_SESSION['gameId'] = $gameId;
			$_SESSION['gameKey'] = $gameKey;
		}
		
		return $auth;
	}
}
