<?php

	date_default_timezone_set('UTC');

	echo "Starting Moe's CN level importer" . PHP_EOL;
	
	try {
    /**************************************
    * Create databases and                *
    * open connections                    *
    **************************************/

	$baseDir = 'htdocs/games.cartoonnetwork.asia/cnos/gamecreator2/backend/controller/';
	
	$dbFile = $baseDir . 'gamecreator2.sqlite3';
	if (file_exists($dbFile)) {
		unlink($dbFile);
	}
	
    // Create (connect to) SQLite database in file
    $file_db = new PDO('sqlite:' . $dbFile);
	
    // Set errormode to exceptions
    $file_db->setAttribute(PDO::ATTR_ERRMODE, 
                            PDO::ERRMODE_EXCEPTION);
							
    /**************************************
    * Create tables                       *
    **************************************/
 
	$file_db->exec("DROP TABLE IF EXISTS levels");
 
    // Create table messages
    $file_db->exec("CREATE TABLE IF NOT EXISTS levels (
                    level_id INTEGER PRIMARY KEY, 
                    level_title TEXT,
					level_desc TEXT,
					map_id INTEGER,
					goal_id INTEGER,
					moderator TEXT,
					moderation_date TEXT,
					thumbnail_filename TEXT,
                    inappropriate_status INTEGER,
					username TEXT,
					data TEXT)");
 
    /**************************************
    * Set initial data                    *
    **************************************/
 
 $path = $baseDir . 'db/meta/';
 $pathLevels = $baseDir . 'db/data/';

 $files = scandir($path);

 $files = array_diff(scandir($path), array('.', '..'));
 
 $numFiles = count($files);
 $length = 2000;
 $iter = ($numFiles / $length);
 
 $iter = ceil($iter);
 
 echo 'Total files: ' . $numFiles . '. Total batches to process: ' . $iter . '. Batch Size: ' . $length . PHP_EOL;
 
 $totalLevels = 0;
 
 $savedLevels = 0;
 
 for ($i = 0; $i < $iter; $i++) {
	 
	 $start = $i * $length;
	 $end = $start + $length;
	 
	 echo $start . ' ' . $end . PHP_EOL;
	 
	 $filesPart = array_slice($files, $start, $length);
	 
	 $levels = array();
	 
	 foreach ($filesPart as $file) {
		$levelFile = $path . $file;
		$json = json_decode(file_get_contents($levelFile), true);
			  
		$level_id = $json['level_id'];
		$level_title = $json['level_title'];
		$level_desc = $json['level_desc'];
		$map_id = $json['map_id'];
		$goal_id = $json['goal_id'];
		$moderator = $json['moderator'];
		$moderation_date = $json['moderation_date'];
		$thumbnail_filename = $json['thumbnail_filename'];
		$inappropriate_status = $json['inappropriate_status'];
		$username = $json['username'];
	 	 
		$level = array(
			'level_id' => $level_id,
			'level_title' => $level_title,
			'level_desc' => $level_desc,
			'map_id' => $map_id,
			'goal_id' => $goal_id,
			'moderator' => $moderator,
			'moderation_date' => $moderation_date,
			'thumbnail_filename' => $thumbnail_filename,
			'inappropriate_status' => $inappropriate_status,
			'username' => $username,
		);
			
		array_push($levels, $level);
	}
	 
	$totalLevels = $totalLevels + count($levels);
	 
				
	$file_db->beginTransaction();
		
	$insert = "INSERT OR IGNORE INTO levels (level_id, level_title, level_desc, map_id, goal_id, moderator, moderation_date, thumbnail_filename, inappropriate_status, username, data)
				VALUES (:level_id, :level_title, :level_desc, :map_id, :goal_id, :moderator, :moderation_date, :thumbnail_filename, :inappropriate_status, :username, :data)";
	
	$stmt = $file_db->prepare($insert);
 
	// Bind parameters to statement variables
	$stmt->bindParam(':level_id', $level_id);
	$stmt->bindParam(':level_title', $level_title);
	$stmt->bindParam(':level_desc', $level_desc);
	$stmt->bindParam(':map_id', $map_id);
	$stmt->bindParam(':goal_id', $goal_id);
	$stmt->bindParam(':moderator', $moderator);
	$stmt->bindParam(':moderation_date', $moderation_date);
	$stmt->bindParam(':thumbnail_filename', $thumbnail_filename);
	$stmt->bindParam(':inappropriate_status', $inappropriate_status);
	$stmt->bindParam(':username', $username);
	$stmt->bindParam(':data', $data);
	 
	// Loop thru all messages and execute prepared insert statement
	foreach ($levels as $lvl) {
	  // Set values to bound variables
	  $level_id = $lvl['level_id'];
	  $level_title = $lvl['level_title'];
	  $level_desc = $lvl['level_desc'];
	  $map_id = $lvl['map_id'];
	  $goal_id = $lvl['goal_id'];
	  $moderator = $lvl['moderator'];
	  $moderation_date = $lvl['moderation_date'];
	  $thumbnail_filename = $lvl['thumbnail_filename'];
	  $inappropriate_status = $lvl['inappropriate_status'];
	  $username = $lvl['username'];
	  
	  $dataPath = $pathLevels . $level_id . '.txt';
	  if (!file_exists($dataPath)) {
		  echo 'Level does not exists: ' . $level_id . PHP_EOL;
		  continue;
	  }

	  $data = file_get_contents($dataPath);
 
	  // Execute statement
	  $stmt->execute();
	  
	  $savedLevels++;
	}
	
	$file_db->commit();
 }
 
 echo ("Finished. Imported levels: " . $savedLevels . ' / ' . $totalLevels);
 
   $file_db = null;
  }
  catch(PDOException $e) {
    // Print PDOException message
    echo $e->getMessage();
  }
 