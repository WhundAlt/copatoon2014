<?php
defined('DS') || define('DS', DIRECTORY_SEPARATOR);

require_once dirname(__DIR__) . DS . 'sleekdb' . DS . 'sleekDB.php';

class prem {
	
	private $userDB;

	public function __construct() {
		$datadir = realpath(dirname(__DIR__) . DS . 'database');
		$this->userDB = \SleekDB\SleekDB::store('userdata', $datadir);
	}

    public function getBalance($mynk_id, $mynk_token, $gameName) {
		$this->userDB->deleteAllCache();
		$result = $this->userDB->where('mynk_user', '=', 'flashpoint')->fetch()[0];
        $data = array('currid' => 6, 'currency' => $result['premium']['bcash']);
		return $data;
    }
	
	// return an array of objects containing bought attack items, sorted by id
	public function get_game_currency_inventory($gameName, $mynk_id, $mynk_token) {
		$result = $this->userDB->where('mynk_user', '=', 'flashpoint')->fetch()[0];
		$inventory = $result['currency_inventory'];

		if(!empty($inventory)) {
			usort($inventory, function($a, $b) {
				return $a['id'] <=> $b['id'];
			});
		} else {
			$inventory = NULL;
		}
		
		return $inventory;
    }
	

	public function buyItems($mynk_id, $gameName, $currency_id, $mynk_token, $items) {
		$file = file_get_contents(__DIR__ . DS . 'items.json');
		$catalog = json_decode($file, 1);
		$userDBResult = $this->userDB->keepConditions()->where('mynk_user', '=', 'flashpoint');
		$user = $userDBResult->fetch()[0];
		$userCash = $user['premium'];
		
		$shoppingCart = array();
		if(count($items) == 1) {
			$item = $items[0];

			$item_id = $item[0];
			$quantity = $item[1];
			
			// do we have the item in our catalog?
			if(isset($catalog[$item_id])) {
				$product = $catalog[$item_id];

				if($userCash['bcash'] >= $product['cost']) {
					$new_bcash = (int)$userCash['bcash'] - (int)$product['cost'];
					$product['amount'] = $userCash['bcash'];
					array_push($shoppingCart, (object)$product);

					$userCash['bcash'] = $new_bcash;
					
					// update old currency_inventory with items.
					$inventory = $user['currency_inventory'];
					$found = false;
					foreach($inventory as $i=>$el) {
						if($el['id'] == $item_id) { 
							$inventory[$i]['quantity']++;
							$found = true;
						}
					}
					if(!$found) {
						$inventory[] = ['id' => $item_id, 'quantity' => 1];
					}
					

					$userDBResult->update(array('premium' => $userCash, 'currency_inventory' => $inventory));
					
				} else {
					var_dump('not enough money');
					die();
				}
			}
		}
			
		return array($new_bcash, $shoppingCart);
    }

	public function getCurrency($mynk_id, $gameName, $mynk_token, $currency_id, $bloop_cash, $action_id, $text) {
		$data = array();
		$userDBResult = $this->userDB->keepConditions()->where('mynk_user', '=', 'flashpoint');
		$user = $userDBResult->fetch()[0];
		switch($action_id) {
			// update bloop count. BSM2-dat-2016.swf@main.as@public function method_18() : void
			case 201:
				$premiumData = $user['premium'];
				$premiumData['bcash'] = (int)$premiumData['bcash'] + (int)$bloop_cash;
				
				$userDBResult->update(array('premium' => $premiumData));
				$data = array('currid' => 6, 'bal' => $premiumData['bcash']);
				break;
		}
		
		return $data;
    }
	
	
}