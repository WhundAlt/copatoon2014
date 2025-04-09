<?php
defined('DS') || define('DS', DIRECTORY_SEPARATOR);

require_once dirname(__DIR__) . DS . 'sleekdb' . DS . 'sleekDB.php';

class user {
	
	private $userDB;

	public function __construct() {
		$datadir = realpath(dirname(__DIR__) . DS . 'database');
		$this->userDB = \SleekDB\SleekDB::store('userdata', $datadir);
	}

    public function get_avatar($mynk_id, $mynk_token) {
		$result = $this->userDB->where('mynk_user', '=', 'flashpoint')->fetch()[0];
        $data = array('avatar' => $result['avatar']);
		return $data;
    }
	
	public function get_koins($mynk_id, $mynk_token) {
		$result = $this->userDB->where('mynk_user', '=', 'flashpoint')->fetch()[0];
		$koins = $result['premium']['koins'];
		$points = $result['premium']['points'];
        $data = array('koins' => $koins, 'points' => $points);
		return $data;
    }
	
	// return an array of objects containing bought items that is premium, sorted by id
	// Items is added in buy_items function
	public function get_inventory($gameName, $mynk_id, $mynk_token, $username) {
		$result = $this->userDB->where('mynk_user', '=', 'flashpoint')->fetch()[0];
		$inventory = $result['inventory'];

		if(!empty($inventory)) {
			usort($inventory, function($a, $b) {
				return $a['id'] <=> $b['id'];
			});
		} else {
			$inventory = NULL;
		}

		return $inventory;
    }
	
	public function get_clan($mynk_id) {
		$data = array('id' => 1, 'name' => 'Flashpoint Clan');
		return $data;
    }
	
	
	public function buy_items($username, $mynk_token, $items, $mynk_id) {
		$file = file_get_contents(__DIR__ . DS . 'store.json');
		$catalog = json_decode($file, 1);
		$userDBResult = $this->userDB->keepConditions()->where('mynk_user', '=', 'flashpoint');
		$user = $userDBResult->fetch()[0];
		$userKoins = $user['premium']['koins'];
		$userBcash = $user['premium']['bcash'];
		$result = array();
		
		foreach ($items as $item) {
			$item_id = $item[0];
			$quantity = $item[1];
			
			if(isset($catalog[$item_id])) {
				$product = $catalog[$item_id];
				
				$cost = $product['cost'] * $quantity;
				if($userKoins >= $cost) {
					// pay the bill!
					$userKoinsnew = (int)$userKoins - (int)$cost;
					
					// add bcash to user
					if(isset($product['curradd'])) {
						// figure out the new bcash amount
						$userBcashnew = (int)$userBcash + ((int)$product['curramount'] * $quantity);
						// set it
						$user['premium']['bcash'] = $userBcashnew;
					}
				
				
					// some variables needed
					$product['koins'] = $userKoins;
					$product['quantity'] = $quantity;
					$product['admin'] = 0; // should really be defiend in store.json for each item...
					$product['game_name'] = 'BSM2'; // should really be defiend in store.json for each item..
					
					// should really be defiend in store.json for each item...
					// also this applies to some special items
					// we have maxquantity in store.json, not sure what applies to the game.
					$product['max_quantity'] = 0;
					array_push($result, (object)$product);
					
					// track what the user bought
					$inventory = $user['inventory'];
					$found = false;
					foreach($inventory as $i=>$el) {
						if($el['id'] == $item_id) { 
							$inventory[$i]['quantity']++;
							$found = true;
						}
					}
					if(!$found) {
						$inventory[] = $product;
					}

					// update the array
					$user['premium']['koins'] = $userKoinsnew;
					
					// run the update!
					$userDBResult->update(array('premium' => $user['premium'], 'inventory' => $inventory));
				} else {
					array_push($result, 'Not enough coins to buy');
				}
			}
		}
		
		return $result;
    }

	public function set_achievement($mynk_id, $mynk_token, $gameName, $id, $progress, $username) {
		return array($id, $progress, 'n');
    }
}