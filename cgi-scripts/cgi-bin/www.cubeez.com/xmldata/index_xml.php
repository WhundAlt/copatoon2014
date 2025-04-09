<?php

	$sql = $_REQUEST['sql'];
	
	if (strpos($sql, 'en_genText') !== false) {
		$db = new PDO('sqlite:cubeez.db');
		
		$statement = $db->prepare($sql);
			
		$statement->execute();
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);
		
		$data = $result[0];
				
		$xml = new SimpleXMLElement('<en_genText/>');
		to_xml($xml, $data);
				
		$content = $xml->asXML();
		$content = substr($content, strpos($content, '?'.'>') + 2);
		$content = trim($content);
		
		echo '<?xml version="1.0" encoding="ISO-8859-1" ?><cubeez>' . $content . '</cubeez>';
			
	} else {
		$tokens = explode(" ", $sql);
		$next = false;
		$table = '';
		foreach ($tokens as $token) {
			if ($next) {
				$table = $token;
				break;
			}
			
			if ($token == 'FROM') {
				$next = true;
			}
		}
		echo file_get_contents($table . '.xml');
	}

	
	function to_xml(SimpleXMLElement $object, array $data) {   
		foreach ($data as $key => $value) {
			if (is_array($value)) {
				$new_object = $object->addChild($key);
				to_xml($new_object, $value);
			} else {
				// if the key is an integer, it needs text with it to actually work.
				if ($key == (int) $key) {
					$key = "$key";
				}

				$object->addChild($key, $value);
			}   
		}   
	}   