<?php
session_name('agi_session');
session_start();

require dirname(__DIR__) . '/vo/MemberVO.php';

class Members {
	
	public function login($username, $password) {
		$login = new MemberVO();
		$login->isOk = true;
		$login->status = 'Login successful';
		//$login->status = 'Username and/or Password are incorrect';
		$login->value = [
			'uid' => md5($username),
			'username' => $username,
			'avatar_url' => 'http://armatars.armorgames.com/armatar_429_150.150_a.png',
			'profile_url' => 'http://armorgames.com/user/' . $username,
			'country_code' => 'xx',
			'country_name' => 'Unknown'
		];
		return $login;
	}
}
