<?php
defined('DS') || define('DS', DIRECTORY_SEPARATOR);

require_once dirname(__DIR__) . DS . 'sleekdb' . DS . 'sleekDB.php';

class game {
	
	private $userDB;
	
	public function __construct() {
		$datadir = realpath(dirname(__DIR__) . DS . 'database');
		$this->userDB = \SleekDB\SleekDB::store('userdata', $datadir);
	}

    public function get_data($mynk_id, $gameName) {
		sleep(1); // allow logged_in to populate DB before running this function
		$result = $this->userDB->where('mynk_user', '=', 'flashpoint')->fetch()[0];
		$game_data = array((object)$result['game_data']);
		return $game_data;
    }
	

	public function save_data($mynk_id, $mynk_token, $gameName, $saveData) {
		
		// sometimes the game sets the flag important, particular when saving the game after a map is done
		/*
		if($saveData->important == true) {
			// what to replicate, is unknown.
		}
		*/
		
		// no need to save this variable
		unset($saveData->important);
		
		$this->userDB->deleteAllCache();

		$result = $this->userDB->keepConditions()->where('mynk_user', '=', 'flashpoint');
		$userData = $result->fetch()[0];
		$transID = $userData['game_data']['transid'];

		$updateable = ['game_data' => $saveData];
		$result->update($updateable);
		$new = (int)$transID + 1;
		return $new;
    }
	
	public function save_score($mynk_id, $mynk_token, $number1, $number2, $username) {
		return array($number1);
    }
	
	public function track($mynk_id, $gameName, $track_what, $string1, $number1, $number2, $number3, $clan) {
		return '{"send":true,"error":""}';
    }
	
	public function set_achivement($mynk_id, $mynk_token, $number1, $number2, $username) {
		return array($number1, $number2, 'n');
    }
	
	public function get_store($gameName) {
		$file = file_get_contents(__DIR__ . DS . 'store.json');
		$data = json_decode($file, true);
		return $data;
    }
	
	public function get_my_achievements($mynk_id, $mynk_token, $gameName) {
		$file = file_get_contents(__DIR__ . DS . 'achivements.json');
		$data = json_decode($file, true);
		
		// patch '' to NULL values as they are needed in the response
		array_walk_recursive($data, function (&$value) { $value = ($value === '') ? null : $value; } );

		return $data;
    }
	
	public function check_reward($mynk_id, $mynk_token, $number) {
		$data = array($number, true, 0);
		return $data;
    }
	
	public function consecutive_logins($mynk_id, $mynk_token, $gameName) {
		return 1;
    }
	
	public function get_def_score($mynk_id, $mynk_token, $gameName) {
		$data = array(array('noscore'), 'Hunter - Total Pops (All Zones)');
		return $data;
    }
	
	public function get_def_highscores_day($gameName) {
		$file = file_get_contents(__DIR__ . '/highscores.json');
		$jsondata = json_decode($file, true);
		$data = array(array('day'), $jsondata);
		return $data;
    }
	
	public function get_def_highscores_week($gameName) {
		$file = file_get_contents(__DIR__ . '/highscores.json');
		$jsondata = json_decode($file, true);
		$data = array(array('week'), $jsondata);
		return $data;
    }
	
	public function get_def_highscores_month($gameName) {
		$file = file_get_contents(__DIR__ . '/highscores.json');
		$jsondata = json_decode($file, true);
		$data = array(array('month'), $jsondata);
		return $data;
    }
	
	public function get_def_highscores_all($gameName) {
		$file = file_get_contents(__DIR__ . '/highscores.json');
		$jsondata = json_decode($file, true);
		$data = array(array('all'), $jsondata);
		return $data;
    }
	
}