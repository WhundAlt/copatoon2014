<?php
$command_id = $_POST['command_id'];
$array = array();
$array['command_id'] = $command_id;
if ($command_id == 'connectMovie') {
	$array['movie_name'] = '';
	$array['ad_url'] = '//www.ngads.com/getad.php';
	
	$tracker_id = $_POST['tracker_id'];
	if ($tracker_id == '31426:dKuX4hIo') {
		$array['movie_name'] = 'Road of the Dead 2';
		$array['ad_url'] = '%2F%2Fwww.ngads.com%2Fgetad.php%3Furl%3D%252F%252Fserver.cpmstar.com%252Fadviewas3.swf%253Fpoolid%3D731%2526subpoolid%3D31426%2526blockoverlays%3D1';
	} else if ($tracker_id == '8215') {
		$array['movie_name'] = 'William and Sly';
	} else if ($tracker_id == '8723') {
		$array['movie_name'] = 'Dadgame';
	} else if ($tracker_id == '9195') {
		$array['movie_name'] = 'Madness Accelerant';
	} else if ($tracker_id == '19381:mwERezcZ') {
		$array['movie_name'] = 'Gap Monsters';
	} else if ($tracker_id == '28756:cKtJbL3r') {
		$array['movie_name'] = 'Bugongo';
	} else if ($tracker_id == '32770:qZ56r2j9') {
		$array['movie_name'] = 'Flying Chops';
	} else if ($tracker_id == '38201:RT275YDu') {
		$array['movie_name'] = 'A Koopa\'s Revenge 2';
	}
	
	$array['time'] = time();
	// {"command_id":"connectMovie","movie_name":"Hot Ninja Moon Moon","ad_url":"%2F%2Fwww.ngads.com%2Fgetad.php%3Furl%3D%252F%252Fserver.cpmstar.com%252Fadviewas3.swf%253Fpoolid%3D731%2526subpoolid%3D12167%2526blockoverlays%3D1","time":1543144348,"success":1}
} else if ($command_id == 'preloadSettings') {
	$array['medals'] = array(array('medal_description' => 'Unlock Meat Boy', 'medal_difficulty' => 3, 'medal_icon' => '', 'medal_id' => 1626, 'medal_name' => 'Meat and Greet', 'medal_unlocked' => false, 'medal_value' => 25, 'secret' => 0),
							 array('medal_description' => 'Beat the campaign!', 'medal_difficulty' => 2, 'medal_icon' => '', 'medal_id' => 8140, 'medal_name' => 'Survivalist', 'medal_unlocked' => false, 'medal_value' => 10, 'secret' => 0));
	$array['score_boards'] = array(array('id' => 0, 'name' => ''));
	
	$tracker_id = $_POST['tracker_id'];
	if ($tracker_id == '31426:dKuX4hIo') {
	
		echo file_get_contents('roadDead2.txt');
		
		return;
	} else if ($tracker_id == '19381:mwERezcZ') {
	
		echo '{"command_id":"preloadSettings","medals":[{"medal_id":8375,"medal_name":"YOU GOTTA SHARE","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/19000\/19381\/8375_yougottashare.gif","secret":0,"medal_description":"Share this mind-bending space-rending life-ending game with your enemies."},{"medal_id":8369,"medal_name":"BLACK AND WHITE","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/19000\/19381\/8369_blackandwhite.gif","secret":0,"medal_description":"Complete ONE THIRD of the original levels."},{"medal_id":8379,"medal_name":"SQUATTER","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/19000\/19381\/8379_squatter.gif","secret":0,"medal_description":"Beat the Star Move for 10 GapWorld levels created by other players."},{"medal_id":8372,"medal_name":"TWINKLE","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/19000\/19381\/8372_twinkle.gif","secret":0,"medal_description":"Beat the Star Move for ONE THIRD of the original levels."},{"medal_id":8376,"medal_name":"VAGRANT","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/19000\/19381\/8376_vagrant.gif","secret":0,"medal_description":"Win 10 GapWorld levels created by other players."},{"medal_id":8373,"medal_name":"CLUSTER","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/19000\/19381\/8373_cluster.gif","secret":0,"medal_description":"Beat the Star Move for TWO THIRDS of the original levels."},{"medal_id":8380,"medal_name":"CONQUERER","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/19000\/19381\/8380_conquerer.gif","secret":0,"medal_description":"Beat the Star Move for 20 GapWorld levels created by other players."},{"medal_id":8370,"medal_name":"RED SCARE","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/19000\/19381\/8370_redscare.gif","secret":0,"medal_description":"Complete TWO THIRDS of the original levels."},{"medal_id":8377,"medal_name":"VACATIONER","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/19000\/19381\/8377_vacationer.gif","secret":0,"medal_description":"Win 20 GapWorld levels created by other players."},{"medal_id":8371,"medal_name":"CLOSURE","medal_value":100,"medal_difficulty":5,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/19000\/19381\/8371_closure.gif","secret":0,"medal_description":"Complete ALL of the original levels."},{"medal_id":8374,"medal_name":"GALAXY","medal_value":100,"medal_difficulty":5,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/19000\/19381\/8374_galaxy.gif","secret":0,"medal_description":"Beat the Star Move for ALL of the original levels."},{"medal_id":8378,"medal_name":"VOYAGER","medal_value":100,"medal_difficulty":5,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/19000\/19381\/8378_voyager.gif","secret":0,"medal_description":"Win 30 GapWorld levels created by other players."},{"medal_id":8381,"medal_name":"WORLD DOMINION","medal_value":100,"medal_difficulty":5,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/19000\/19381\/8381_worlddominion.gif","secret":0,"medal_description":"Beat the Star Move for 30 GapWorld levels created by other players."},{"medal_id":8368,"medal_name":"WHAT","medal_value":100,"medal_difficulty":5,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Somehow beat an original level in FEWER than Star Moves."}],"save_file_path":"\/\/www.ngads.com","image_file_path":"\/\/apifiles.ngfiles.com\/savedata","save_groups":[{"group_id":130,"group_name":"Level","group_type":2,"keys":[],"ratings":[{"id":54,"name":"Challenge","min":0,"max":5,"float":true},{"id":53,"name":"Overall Fun","min":0,"max":5,"float":true}]}],"success":1}';
		
		return;
		
	} else if ($tracker_id == '32770:qZ56r2j9') {
	
		echo '{"command_id":"preloadSettings","medals":[{"medal_id":24922,"medal_name":"100x Acorns","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/32000\/32770\/24922_100xacorns.gif","secret":0,"medal_description":"Collect 100x Acorns in a single run"},{"medal_id":24924,"medal_name":"1x Over the Clouds","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/32000\/32770\/24924_1xovertheclouds.gif","secret":0,"medal_description":"Go one time over the Clouds in a single run"},{"medal_id":24923,"medal_name":"2x Piglets","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/32000\/32770\/24923_2xpiglets.gif","secret":0,"medal_description":"Save 2x little Piggies in a single run"},{"medal_id":24921,"medal_name":"5x Balloons","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/32000\/32770\/24921_5balloons.gif","secret":0,"medal_description":"Breaks out 5 Balloons in a single run"},{"medal_id":24927,"medal_name":"10x Red Balloons","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/32000\/32770\/24927_10xredballoons.gif","secret":0,"medal_description":"Breaks out 10 Red Balloons in a single run"},{"medal_id":24925,"medal_name":"1st Boss Killed","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/32000\/32770\/24925_1stbosskilled.gif","secret":0,"medal_description":"Kill the first Boss"},{"medal_id":24926,"medal_name":"300x Acorns","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/32000\/32770\/24926_300xacorns.gif","secret":0,"medal_description":"Collect 300x Acorns in a single run"},{"medal_id":24929,"medal_name":"3x Over the Clouds","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/32000\/32770\/24929_3xovertheclouds.gif","secret":0,"medal_description":"Go 3 times over the Clouds in a single run"},{"medal_id":24932,"medal_name":"10x Circular Saw","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/32000\/32770\/24932_10xcircularsaw.gif","secret":0,"medal_description":"Break 10x Circular Saw in a single run"},{"medal_id":24931,"medal_name":"2nd Boss Killed","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/32000\/32770\/24931_2ndbosskilled.gif","secret":0,"medal_description":"Kill the second Boss"},{"medal_id":24928,"medal_name":"4x Piglets","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/32000\/32770\/24928_4xpiglets.gif","secret":0,"medal_description":"Save 4x little Piggies in a single run"},{"medal_id":24933,"medal_name":"500x Acorns","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/32000\/32770\/24933_500xacorns.gif","secret":0,"medal_description":"Collect 500x Acorns in a single run"},{"medal_id":24930,"medal_name":"6x Windows","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/32000\/32770\/24930_6xwindows.gif","secret":0,"medal_description":"Break 6 Windows in a single run"},{"medal_id":24936,"medal_name":"3rd Boss Killed","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/32000\/32770\/24936_3rdbosskilled.gif","secret":0,"medal_description":"Kill the third Boss"},{"medal_id":24934,"medal_name":"5x Violet Balloons","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/32000\/32770\/24934_5xvioletballoons.gif","secret":0,"medal_description":"Breaks out 5x Violet Balloons in a single run"},{"medal_id":24935,"medal_name":"6x Piglets","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/32000\/32770\/24935_6xpiglets.gif","secret":0,"medal_description":"Save 6x little Piggies in a single run"},{"medal_id":24937,"medal_name":"Flying Chops Completed","medal_value":100,"medal_difficulty":5,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/32000\/32770\/24937_flyingchopscompleted.gif","secret":0,"medal_description":"Flying Chops 100% Completed, All missions done!"}],"score_boards":[{"id":3475,"name":"Flying Chops Leaderboard"}],"success":1}';
		
		return;
		
	} else if ($tracker_id == '28756:cKtJbL3r') {
		echo '{"command_id":"preloadSettings","medals":[{"medal_id":19316,"medal_name":"-5 Seconds from PAR","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/28000\/28756\/19316_5secondsfrompar.gif","secret":0,"medal_description":"Finish a level in less 5 seconds than the PAR."},{"medal_id":19306,"medal_name":"250 Coins","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/28000\/28756\/19306_250coins.gif","secret":0,"medal_description":"Collect up to 250 Coins."},{"medal_id":19308,"medal_name":"Jump over 2 Enemies in Air","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/28000\/28756\/19308_kill2enemiesinair.gif","secret":0,"medal_description":"Jump over 2 Enemies while you are in Air."},{"medal_id":19315,"medal_name":"-10 Seconds from PAR","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/28000\/28756\/19315_10se.gif","secret":0,"medal_description":"Finish a level in less 10 seconds than the PAR."},{"medal_id":19312,"medal_name":"15 Golden Eggs","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/28000\/28756\/19312_15goldeneggs.gif","secret":0,"medal_description":"Collect up to 15 hidden Golden eggs."},{"medal_id":19305,"medal_name":"500 Coins","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/28000\/28756\/19305_500coins.gif","secret":0,"medal_description":"Collect up to 500 Coins."},{"medal_id":19309,"medal_name":"Jump over 3 Enemies in Air","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/28000\/28756\/19309_kill3enemiesinair.gif","secret":0,"medal_description":"Jump over 3 Enemies while you are in Air."},{"medal_id":19307,"medal_name":"Kill 50 Lumagos","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/28000\/28756\/19307_kill50lumagos.gif","secret":0,"medal_description":"Kill up to 50 Lumigos, the little red dinosaurs."},{"medal_id":19314,"medal_name":"-15 Seconds from PAR","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/28000\/28756\/19314_15secfrompar.gif","secret":0,"medal_description":"Finish a level in less 15 seconds than the PAR."},{"medal_id":19304,"medal_name":"1000 Coins","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/28000\/28756\/19304_1000coins.gif","secret":0,"medal_description":"Collect up to 1000 Coins."},{"medal_id":19311,"medal_name":"30 Golden Eggs","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/28000\/28756\/19311_30goldeneggs.gif","secret":0,"medal_description":"Collect up to 30 hidden Golden eggs."},{"medal_id":19317,"medal_name":"Kill 25 Flaga","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/28000\/28756\/19317_killupto25flaga.gif","secret":0,"medal_description":"Kill up to 25 Flaga, the flying yellow dinosaurs."},{"medal_id":19313,"medal_name":"Kill 25 Planta","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/28000\/28756\/19313_kill25planta.gif","secret":0,"medal_description":"Kill up to 25 Planta, the carnivorous purple plants."},{"medal_id":19310,"medal_name":"45 Golden Eggs","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/28000\/28756\/19310_45goldeneggs.gif","secret":0,"medal_description":"Collect up to 45 hidden Golden eggs."},{"medal_id":19298,"medal_name":"Bugongo 100 percent","medal_value":100,"medal_difficulty":5,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/28000\/28756\/19298_100.gif","secret":0,"medal_description":"Complete the whole game at 100%. Unlock all medals\/levels and collect all Golden Eggs. "}],"success":1}';
		
		return;

	} else if ($tracker_id == '12321:5XC0XLzi') {	// The Breach
		echo '{"command_id":"preloadSettings","medals":[{"medal_id":1659,"medal_name":"20 Kills","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/12000\/12321\/1659_20kills.gif","secret":0,"medal_description":"Kill 20 enemies"},{"medal_id":1662,"medal_name":"Kill First Boss","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/12000\/12321\/1662_killfirstboss.gif","secret":0,"medal_description":"Kill the first boss"},{"medal_id":1658,"medal_name":"Game Complete","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/12000\/12321\/1658_gamecomplete.gif","secret":0,"medal_description":"Complete the game"},{"medal_id":1663,"medal_name":"Kill 3rd Boss","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/12000\/12321\/1663_kill3rdboss.gif","secret":0,"medal_description":"Kill the 3rd Boss"},{"medal_id":1661,"medal_name":"20 Stars","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/12000\/12321\/1661_20stars.gif","secret":0,"medal_description":"Obtain 20 stars"}],"success":1}';
		
		return;
		
	} else if ($tracker_id == '14866:GGuXr5zj') {	// Carve n' Share
		echo '{"command_id":"preloadSettings","save_file_path":"\/\/www.ngads.com","image_file_path":"\/\/apifiles.ngfiles.com\/savedata","save_groups":[{"group_id":54,"group_name":"Pumpkins","group_type":2,"keys":[],"ratings":[{"id":31,"name":"Rating","min":0,"max":5,"float":true}]}],"success":1}';
		
		return;
		
	} else if ($tracker_id == '12160:5eSmfRME') {	// Human Centipede
		echo '{"command_id":"preloadSettings","medals":[{"medal_id":1640,"medal_name":"Reading Rainbow","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/12000\/12160\/1640_readingrainbow.gif","secret":0,"medal_description":"Read through all of the intro and instructions text"},{"medal_id":1642,"medal_name":"Grave Damage","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/12000\/12160\/1642_gravedamage.gif","secret":0,"medal_description":"Destroy 100 tombstones"},{"medal_id":1641,"medal_name":"Hop A Cop","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/12000\/12160\/1641_hopacop.gif","secret":0,"medal_description":"Bypass a cop by moving over him"},{"medal_id":1644,"medal_name":"Nice Aim","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/12000\/12160\/1644_niceaim.gif","secret":0,"medal_description":"Destroy 10 dropping needles or scalpels"},{"medal_id":1643,"medal_name":"Raise The Roofie","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/12000\/12160\/1643_raisetheroofie.gif","secret":0,"medal_description":"collect 3 roofies in a single level"},{"medal_id":1645,"medal_name":"Speedy Pedey","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/12000\/12160\/1645_speedypedey.gif","secret":0,"medal_description":"Destroy 5 of the fastest respawned centipedes in a single level"},{"medal_id":1647,"medal_name":"Antivenom","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/12000\/12160\/1647_antivenom.gif","secret":0,"medal_description":"Destroy 20 tombstones altered by cop cars"},{"medal_id":1646,"medal_name":"Donut Break","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/12000\/12160\/1646_donutbreak.gif","secret":0,"medal_description":"Stop a cop car before it makes contact with a tombstone"},{"medal_id":1649,"medal_name":"Pede Gatherer","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/12000\/12160\/1649_pedegatherer.gif","secret":0,"medal_description":"Achieve 50,000 points"},{"medal_id":1648,"medal_name":"Cop Killa","medal_value":100,"medal_difficulty":5,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/12000\/12160\/1648_copkilla.gif","secret":0,"medal_description":"Destroy 10 cops for their maximum 900 point value"},{"medal_id":1650,"medal_name":"Pede Master","medal_value":100,"medal_difficulty":5,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/12000\/12160\/1650_pedemaster.gif","secret":0,"medal_description":"Achieve 100,000 points"},{"medal_id":1653,"medal_name":"Dieter\'s Laser","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Unleash the rare Dieter Laser!"},{"medal_id":1651,"medal_name":"Together Forever","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Kill Rick Astley when he dances across the screen"}],"success":1}';
		
		return;
	
	} else if ($tracker_id == '16597:U347ojPn') {	// Flight
		echo '{"command_id":"preloadSettings","medals":[{"medal_id":5601,"medal_name":"20 Stars","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5601_20stars.jpg","secret":0,"medal_description":"Collect 20 stars in a single flight."},{"medal_id":5602,"medal_name":"High Flyer","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5602_highflyer.jpg","secret":0,"medal_description":"Reach an altitude of 15m."},{"medal_id":5604,"medal_name":"Hourglass","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5604_hourglass.jpg","secret":0,"medal_description":"Be flying for 1 minute."},{"medal_id":5603,"medal_name":"Lift Off","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5603_liftoff.jpg","secret":0,"medal_description":"Travel 200m in a single flight."},{"medal_id":5610,"medal_name":"All Star","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5610_allstar.jpg","secret":0,"medal_description":"Collect all the available types of stars in a single flight."},{"medal_id":5609,"medal_name":"Bird Hunter","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5609_birdhunter.jpg","secret":0,"medal_description":"Reach 5x Crane bonus."},{"medal_id":5612,"medal_name":"Close Call","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5612_closecall.jpg","secret":0,"medal_description":"Escape from a stall at less than 3m altitude."},{"medal_id":5605,"medal_name":"Easy Gliding","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5605_easygliding.jpg","secret":0,"medal_description":"Travel 300m without using any fuel during your flight."},{"medal_id":5611,"medal_name":"Flying Low","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5611_flyinglow.jpg","secret":0,"medal_description":"Travel for 300m without exceeding 3m altitude."},{"medal_id":5613,"medal_name":"Long Haul","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5613_longhaul.jpg","secret":0,"medal_description":"Travel 1000m in a single flight."},{"medal_id":5608,"medal_name":"Profit","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5608_profit.jpg","secret":0,"medal_description":"Collect $500 in a single flight."},{"medal_id":5606,"medal_name":"Second Wind","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5606_secondwind.jpg","secret":0,"medal_description":"Get boosted by 3 windmills in a single flight."},{"medal_id":5607,"medal_name":"Swan Dive","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5607_swandive.jpg","secret":0,"medal_description":"Fly straight downwards at terminal velocity."},{"medal_id":5622,"medal_name":"Big Money","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5622_bigmoney.jpg","secret":0,"medal_description":"Collect $3000 in a single flight."},{"medal_id":5623,"medal_name":"Daredevil","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5623_daredevil.jpg","secret":0,"medal_description":"Successfully escape from stalling three times in a single flight."},{"medal_id":5621,"medal_name":"Efficiency","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5621_efficiency.jpg","secret":0,"medal_description":"Clear Japan in 30 days or under."},{"medal_id":5615,"medal_name":"Galaxy","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5615_galaxy.jpg","secret":0,"medal_description":"Collect 100 stars in a single flight."},{"medal_id":5614,"medal_name":"Icarus","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5614_icarus.jpg","secret":0,"medal_description":"Collect 30 space stars in a single flight."},{"medal_id":5616,"medal_name":"Supersonic","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5616_supersonic.jpg","secret":0,"medal_description":"Reach a velocity of 25m\/s."},{"medal_id":5619,"medal_name":"The Prophecy","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5619_theprophecy.jpg","secret":0,"medal_description":"Clear Egypt in 21 days or under."},{"medal_id":5624,"medal_name":"What Happen?","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5624_whathappen.jpg","secret":0,"medal_description":"Bounce along for another 100m after making contact with the ground."},{"medal_id":5618,"medal_name":"Borbonne-Le-Bonne","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5618_borbonnelebonne.jpg","secret":0,"medal_description":"Clear France in 15 days or under."},{"medal_id":5617,"medal_name":"Royal Mail","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5617_royalmail.jpg","secret":0,"medal_description":"Clear England in 8 days or under."},{"medal_id":5620,"medal_name":"To Be a Bird","medal_value":0,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/16000\/16597\/5620_tobeabird.jpg","secret":0,"medal_description":"Clear Kenya in 26 days or under."}],"success":1}';
		
		return;
		
	} else if ($tracker_id == '19781:XUbnH8m4') {	// Villainous
		echo '{"command_id":"preloadSettings","medals":[{"medal_id":8654,"medal_name":"What is Best in Life?","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/19000\/19781\/8654_whatisbestinlife.jpg","secret":0,"medal_description":"Earn your first gold medal on a stage."},{"medal_id":8653,"medal_name":"What is Good in Life?","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/19000\/19781\/8653_whatisgoodinlife.jpg","secret":0,"medal_description":"Earn your first bronze medal on a stage."},{"medal_id":8655,"medal_name":"Everything for Everyone","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/19000\/19781\/8655_everythingforeveryone.jpg","secret":0,"medal_description":"Unlock the secret Newgrounds treasure."},{"medal_id":8656,"medal_name":"Prequel to the Sequel","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/19000\/19781\/8656_prequeltothesequel.jpg","secret":0,"medal_description":"Unlock the last stage of the game."},{"medal_id":8657,"medal_name":"One Thousand Goblins Later...","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/19000\/19781\/8657_onethousandgoblinslater.jpg","secret":0,"medal_description":"Get all gold medals and all gold skills."},{"medal_id":8658,"medal_name":"Finish the Story","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Find the secret link and finish the story."}],"success":1}';
		
		return;
	
	} else if ($tracker_id == '26583:bsjcIGa8') {	// The Drawing Grounds
		echo '{"command_id":"preloadSettings","medals":[{"medal_id":16522,"medal_name":"Junior Artist","medal_value":5,"medal_difficulty":1,"medal_unlocked":true,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/26000\/26583\/16522_juniorartist.jpg","secret":0,"medal_description":"Finished your first drawing."},{"medal_id":17228,"medal_name":"Messenger","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/26000\/26583\/17228_messenger.jpg","secret":0,"medal_description":"Notified someone after taking your turn."},{"medal_id":17229,"medal_name":"Randomizer","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/26000\/26583\/17229_randomizer.jpg","secret":0,"medal_description":"Started a game with a random user."},{"medal_id":17029,"medal_name":"Umad?","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/26000\/26583\/17029_umad.jpg","secret":0,"medal_description":"Found the hidden troll face."},{"medal_id":17542,"medal_name":"Sketcher","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/26000\/26583\/17542_sketchbuddies.jpg","secret":0,"medal_description":"Reach a score of at least 10."},{"medal_id":17541,"medal_name":"Colorpicker","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Choose a new color."},{"medal_id":17230,"medal_name":"Heartbreaker","medal_value":5,"medal_difficulty":1,"medal_unlocked":true,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/26000\/26583\/17230_heartbreaker.jpg","secret":1,"medal_description":"Added someone to the ignore list."},{"medal_id":17227,"medal_name":"Loner","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Tried to start a game with yourself."}],"score_boards":[{"id":2351,"name":"Most Games"},{"id":2154,"name":"Most Turns"}],"save_file_path":"\/\/www.ngads.com","image_file_path":"\/\/apifiles.ngfiles.com\/savedata","save_groups":[{"group_id":442,"group_name":"Games","group_type":1,"keys":[{"id":180,"name":"drawing_key","type":3},{"id":176,"name":"target_user","type":3},{"id":174,"name":"turn_number","type":2}],"ratings":[]},{"group_id":447,"group_name":"Users","group_type":1,"keys":[],"ratings":[]},{"group_id":436,"group_name":"Drawings","group_type":2,"keys":[],"ratings":[{"id":90,"name":"Score","min":0,"max":5,"float":true}]}],"success":1}';
		
		return;
	
	} else if ($tracker_id == '30982:9iQVnZ1R') {	// The Interview Codex
		echo '{"command_id":"preloadSettings","medals":[{"medal_id":22566,"medal_name":"DEAD!","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22566_dead.jpg","secret":0,"medal_description":"there all dead"},{"medal_id":22562,"medal_name":"EDD\'s","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22562_edds.jpg","secret":0,"medal_description":"World"},{"medal_id":22558,"medal_name":"Hans off!","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22558_hansoff.jpg","secret":0,"medal_description":"Can\'t touch this."},{"medal_id":22554,"medal_name":"HE WOBBLES...","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22554_hewobbles.jpg","secret":0,"medal_description":"but he doesn\'t fall down"},{"medal_id":22557,"medal_name":"KFC","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22557_kfc.jpg","secret":0,"medal_description":"who you call\'n chicken?"},{"medal_id":22400,"medal_name":"Knowledge Creeper","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22400_knowledgecreeper.png","secret":0,"medal_description":"Visit the codex 10 times."},{"medal_id":22399,"medal_name":"Knowledge Peeker","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22399_knowledgeseeker.png","secret":0,"medal_description":"Visit the codex for the first time."},{"medal_id":22401,"medal_name":"Knowledge Seeker","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22401_knowledgeseeker.png","secret":0,"medal_description":"Visit the codex 50 times."},{"medal_id":22572,"medal_name":"Mariachi Mang","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22572_mariachimang.jpg","secret":0,"medal_description":"\u00c2\u00bfD\u00c3\u00b3nde est\u00c3\u00a1 mi cerveza"},{"medal_id":22565,"medal_name":"only $5 each","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22565_only5each.jpg","secret":0,"medal_description":"there you go... good bye!"},{"medal_id":22555,"medal_name":"orsppA","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22555_orsppa.jpg","secret":0,"medal_description":"???"},{"medal_id":22556,"medal_name":"Paradox","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22556_paradox.jpg","secret":0,"medal_description":"Who will interview the interviewmen?"},{"medal_id":22570,"medal_name":"PLEASE HELP!","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22570_pleasehelp.jpg","secret":0,"medal_description":"The shade man has locked me in his basment, i am a 16 year old girl. The shade man wips me all day, send help, call the cops... I can get free. My balls are really sore. He is sick. I don\'t know how much longer I can go on."},{"medal_id":22560,"medal_name":"Psycho?","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22560_psycho.jpg","secret":0,"medal_description":"maybe."},{"medal_id":22564,"medal_name":"Secret pixel hand shake.","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22564_secretpixelhandshake.jpg","secret":0,"medal_description":"..."},{"medal_id":22567,"medal_name":"Sexual Decapoda","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22567_sexualdecapoda.jpg","secret":0,"medal_description":"Nephropidae"},{"medal_id":22571,"medal_name":"Supa Sumba Pawdy.","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22571_supasumbapawdy.jpg","secret":0,"medal_description":"Cake and apple pie."},{"medal_id":22568,"medal_name":"The bees Justin...","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22568_thebeesjustin.jpg","secret":0,"medal_description":"Why wount me baby drink his milk Justin?"},{"medal_id":22569,"medal_name":"This is madness!","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22569_thisismadness.jpg","secret":0,"medal_description":"Yes it is."},{"medal_id":22559,"medal_name":"to mod, or not to mod?","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22559_tomodornottomod.jpg","secret":0,"medal_description":"that is the ummmm somthing..."},{"medal_id":22563,"medal_name":"YEAAAAHHHHHHHHHH...","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22563_yeaaaahhhhhhhhhh.jpg","secret":0,"medal_description":"HHHHHHHHHHHH!!!!!!!!!!"},{"medal_id":22561,"medal_name":"YEAH...","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22561_yeah.jpg","secret":0,"medal_description":"I\'m almost done."},{"medal_id":22545,"medal_name":"FUL of P","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22545_fulofp.jpg","secret":0,"medal_description":"hhhmmmmm."},{"medal_id":22402,"medal_name":"Knowledge Keeper","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22402_knowledgekeeper.png","secret":0,"medal_description":"Visit the codex  100 times."},{"medal_id":22553,"medal_name":"THE KING OF THE PORTAL!","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/30000\/30982\/22553_kingoftheportal.jpg","secret":0,"medal_description":"He will always be to me..."}],"score_boards":[{"id":3011,"name":"Who visits the most?"}],"save_file_path":"\/\/www.ngads.com","image_file_path":"\/\/apifiles.ngfiles.com\/savedata","save_groups":[{"group_id":655,"group_name":"Interviews","group_type":3,"keys":[],"ratings":[]}],"success":1}';
		
		return;
	
	} else if ($tracker_id == '32807:d607cii7') {	// Motorjoust
		echo '{"command_id":"preloadSettings","medals":[{"medal_id":25336,"medal_name":"Creator","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Uploaded your own level"},{"medal_id":25328,"medal_name":"Dangled","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Defeat David Dingle"},{"medal_id":25330,"medal_name":"Encrusted","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Defeat Larry Campbell"},{"medal_id":25329,"medal_name":"Gilded","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Defeat Harry Campbell"},{"medal_id":25327,"medal_name":"Paperboy Calls it Quits","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Defeat Billy Emsee"},{"medal_id":25337,"medal_name":"Tester","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Played a user created level"},{"medal_id":25332,"medal_name":"#defeated","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Defeat Kyle Stryder"},{"medal_id":25333,"medal_name":"Bigg Winner","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Defeat Igor Biggs"},{"medal_id":25334,"medal_name":"Boned","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Defeat Bones Breaker"},{"medal_id":25331,"medal_name":"Saranghamnida","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Defeat Ling Pu"},{"medal_id":25335,"medal_name":"Peachy","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Win the Tournament of Champions"}],"save_file_path":"\/\/www.ngads.com","image_file_path":"\/\/apifiles.ngfiles.com\/savedata","save_groups":[{"group_id":769,"group_name":"User Tracks","group_type":2,"keys":[],"ratings":[{"id":137,"name":"Score","min":0,"max":5,"float":true}]}],"success":1}';
		
		return;
	
	} else if ($tracker_id == '38201:RT275YDu') {	// A Koopa's Revenge 2
		echo '{"command_id":"preloadSettings","medals":[{"medal_id":35225,"medal_name":"Baby Crusher","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/38000\/38201\/35225_babycrusher.png","secret":0,"medal_description":"Kill all four babies in any level."},{"medal_id":52953,"medal_name":"Compulsive Gardener","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/38000\/38201\/52953_professionalgardener.png","secret":0,"medal_description":"Pluck every vegetable and destroy every weed in the oasis."},{"medal_id":35234,"medal_name":"Happy Faic","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/38000\/38201\/35234_happyfaic.png","secret":0,"medal_description":"Unlock all 11 original flower faces by collecting 5000 coins."},{"medal_id":35235,"medal_name":"Projectile Power","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/38000\/38201\/35235_projectilepower.png","secret":0,"medal_description":"Deal the finishing blow to a boss with a projectile weapon."},{"medal_id":35223,"medal_name":"One of Seven","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/38000\/38201\/35223_oneofseven.png","secret":0,"medal_description":"Rescue one of the seven hidden Koopalings."},{"medal_id":35226,"medal_name":"Switch Master","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/38000\/38201\/35226_switchmaster.png","secret":0,"medal_description":"Activate all four colours of ! blocks."},{"medal_id":52952,"medal_name":"Switzerland","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/38000\/38201\/52952_switzerland.png","secret":0,"medal_description":"Complete any level without killing an enemy or getting hit."},{"medal_id":52954,"medal_name":"Tuna!","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/38000\/38201\/52954_tuna.png","secret":0,"medal_description":"Kill 50 Dolphins in one play session."},{"medal_id":35232,"medal_name":"96*","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/38000\/38201\/35232_96.png","secret":0,"medal_description":"Use every level exit."},{"medal_id":52951,"medal_name":"Reference Q. Moneybags","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/38000\/38201\/52951_referenceqmoneybags.png","secret":0,"medal_description":"Collect 20K coins and unlock all 41 flower faces."},{"medal_id":35227,"medal_name":"SML2: Seventy-Five Silver Coins","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/38000\/38201\/35227_sml2seventyfivesilvercoins.png","secret":0,"medal_description":"Collect all seventy-five silver coins."},{"medal_id":35224,"medal_name":"Complete Septet","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/38000\/38201\/35224_completeseptet.png","secret":0,"medal_description":"Rescue all seven hidden Kooplaings."},{"medal_id":35237,"medal_name":"Donut Plains Ghost House","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Find the secret power-up stage."},{"medal_id":35230,"medal_name":"Looks Familiar","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Find the secret throwback level."},{"medal_id":35233,"medal_name":"The Bloodening","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Bring about the bloodening. ABACABB"},{"medal_id":35236,"medal_name":"What\'s a GAME OVER?","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Collect the infinite lives power-up."},{"medal_id":35222,"medal_name":"Destructo Jump","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Find the Screw Attack permanent power-up."},{"medal_id":35221,"medal_name":"Dizzy Jump","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Find the Space Jump permanent power-up."},{"medal_id":35229,"medal_name":"I hope you\'re ready for a beating!","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Find and defeat Dan Hibiki."},{"medal_id":35220,"medal_name":"Robot Dog or Prog Rock","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Find the Rush permanent power-up."},{"medal_id":35231,"medal_name":"Tanooki Proxy","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Press the pink switch."},{"medal_id":35228,"medal_name":"THE END","medal_value":100,"medal_difficulty":5,"medal_unlocked":false,"medal_icon":"http:\/\/img.ngfiles.com\/icons\/medal_secret.png","secret":1,"medal_description":"Finish off Mario, once and for all."}],"success":1}';
		
		return;
	}
	
	// {"command_id":"preloadSettings","medals":[{"medal_id":8140,"medal_name":"Survivalist","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/18000\/18964\/8140_survivalist.gif","secret":0,"medal_description":"Beat the campaign!"},{"medal_id":8141,"medal_name":"Hard to Kill","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/18000\/18964\/8141_hardtokill.gif","secret":0,"medal_description":"Beat the lost levels!"}],"score_boards":[{"id":907,"name":"Campaign High Scores"},{"id":908,"name":"Expansion High Scores"}],"success":1}
} else if ($command_id == 'loadScores') {
	$array['scores'] = [];
	$array['num_scores'] = 0;
	
	$tracker_id = $_POST['tracker_id'];
	if ($tracker_id == '31426:dKuX4hIo') {
		echo '{"command_id":"loadScores","page":1,"board":3136,"num_results":10,"period":"All-Time","scores":[{"user_id":"989382","username":"Dyhalto","value":"116km","numeric_value":115706,"tag":""},{"user_id":"6843922","username":"same2222","value":"91km","numeric_value":91125,"tag":""},{"user_id":"3505411","username":"VanillaC0ke","value":"64km","numeric_value":63734,"tag":""},{"user_id":"4604529","username":"UrMonsta","value":"60km","numeric_value":60253,"tag":""},{"user_id":"3615745","username":"darkshadow97","value":"57km","numeric_value":57468,"tag":""},{"user_id":"5363516","username":"DeathMan2022","value":"56km","numeric_value":55532,"tag":""},{"user_id":"4790819","username":"SuicideSyntax","value":"54km","numeric_value":54161,"tag":""},{"user_id":"3540842","username":"reiko421","value":"54km","numeric_value":53588,"tag":""},{"user_id":"3911177","username":"AntarcticTiger","value":"46km","numeric_value":45678,"tag":""},{"user_id":"2232975","username":"R34RB26DETT","value":"45km","numeric_value":45492,"tag":""}],"num_scores":4973,"success":1}';
		
		return;
	}
	
	// {"command_id":"loadScores","page":1,"board":907,"num_results":10,"period":"Today","scores":[],"num_scores":"N\/A","success":1}

} else if ($command_id == 'getMedals') {
	
	$tracker_id = $_POST['tracker_id'];
	if ($tracker_id == '8215') {
		echo '{"command_id":"getMedals","medals":[{"medal_id":527,"medal_name":"Flight","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8215\/527_flight.gif","secret":0,"medal_description":"Find the wings."},{"medal_id":531,"medal_name":"Weather Mage","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8215\/531_weathermage.gif","secret":0,"medal_description":"Turn off the rain."},{"medal_id":526,"medal_name":"Dominus Lux","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8215\/526_dominuslux.gif","secret":0,"medal_description":"Slay five darklings."},{"medal_id":525,"medal_name":"Deviation","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8215\/525_deviation.gif","secret":0,"medal_description":"Unlock all boxes and switches."},{"medal_id":528,"medal_name":"Resolution","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8215\/528_resolution.gif","secret":0,"medal_description":"Complete the game."},{"medal_id":529,"medal_name":"Sensitive Nose","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8215\/529_sensitivenose.gif","secret":0,"medal_description":"Find all of the mushrooms."},{"medal_id":530,"medal_name":"Sly Fox","medal_value":100,"medal_difficulty":5,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8215\/530_slyfox.gif","secret":0,"medal_description":"Earn more than 35,000 points."}],"success":1}';
		return;
	} else if ($tracker_id == '8723') {
		echo '{"command_id":"getMedals","medals":[{"medal_id":638,"medal_name":"Guardians","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8723\/638_guardians.gif","secret":0,"medal_description":"Defeat the Footie Twins"},{"medal_id":641,"medal_name":"Heavy Weapons","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8723\/641_heavyweapons.gif","secret":0,"medal_description":"Defeat Battbot"},{"medal_id":640,"medal_name":"Monkey Biz","medal_value":5,"medal_difficulty":1,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8723\/640_monkeybiz.gif","secret":0,"medal_description":"Defeat Ootkey"},{"medal_id":639,"medal_name":"Bad Transit","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8723\/639_badtransit.gif","secret":0,"medal_description":"Defeat TRN-1"},{"medal_id":648,"medal_name":"Freeroes","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8723\/648_freeroes.gif","secret":0,"medal_description":"Get Secret Ending"},{"medal_id":642,"medal_name":"Kaminari Ninja","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8723\/642_kaminarininja.gif","secret":0,"medal_description":"Defeat Raijinmaru"},{"medal_id":644,"medal_name":"Patricide","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8723\/644_patricide.gif","secret":0,"medal_description":"Defeat creator of Dadgame"},{"medal_id":645,"medal_name":"Story Easy","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8723\/645_storyeasy.gif","secret":0,"medal_description":"Beat Story Mode on Easy, Normal, or Hard"},{"medal_id":647,"medal_name":"Story Hard","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8723\/647_storyhard.gif","secret":0,"medal_description":"Beat Story Mode on Hard"},{"medal_id":646,"medal_name":"Story Normal","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8723\/646_storynormal.gif","secret":0,"medal_description":"Beat Story Mode on  Normal or Hard"},{"medal_id":643,"medal_name":"WSW Tribute","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8723\/643_wswtribute.gif","secret":0,"medal_description":"Defeat Final Weapon"},{"medal_id":652,"medal_name":"Cheating Death","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8723\/652_cheatingdeath.gif","secret":0,"medal_description":"Defeat Mecha-Death"},{"medal_id":649,"medal_name":"Debugger","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8723\/649_debugger.gif","secret":0,"medal_description":"Defeat Phantom"},{"medal_id":650,"medal_name":"Presto!","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8723\/650_presto.gif","secret":0,"medal_description":"Beat Boss Battles on HARD"},{"medal_id":651,"medal_name":"Tower Offender","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8723\/651_toweroffender.gif","secret":0,"medal_description":"Beat Tower of Destiny on HARD"},{"medal_id":653,"medal_name":"Dadgamer","medal_value":100,"medal_difficulty":5,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/8000\/8723\/653_dadgamer.gif","secret":0,"medal_description":"100% Completion"}],"success":1}';
		return;
	} else if ($tracker_id == '9125') {
		echo '{"command_id":"getMedals","medals":[{"medal_id":740,"medal_name":"Facerape","medal_value":10,"medal_difficulty":2,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/9000\/9195\/740_facerape.gif","secret":0,"medal_description":"Let out all your aggression."},{"medal_id":739,"medal_name":"A WINNER IS YOU","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/9000\/9195\/739_awinnerisyou.gif","secret":0,"medal_description":"Beat the game."},{"medal_id":737,"medal_name":"Pacifist","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/9000\/9195\/737_pacifist.gif","secret":0,"medal_description":"Be kind to those less fortunate than yourself."},{"medal_id":738,"medal_name":"True Face of Evil","medal_value":25,"medal_difficulty":3,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/9000\/9195\/738_truefaceofevil.gif","secret":0,"medal_description":"Reveal the true face of evil!"},{"medal_id":751,"medal_name":"Madness Mode","medal_value":50,"medal_difficulty":4,"medal_unlocked":false,"medal_icon":"http:\/\/apifiles.ngfiles.com\/medals\/9000\/9195\/751_madnessmode.gif","secret":0,"medal_description":"Defeat Madness Mode!"}],"success":1}';
		return;
	}
		
} else if ($command_id == 'lookupSaveFiles') {
	$tracker_id = $_POST['tracker_id'];
	$query = $_POST['query'];
	if ($tracker_id == '31426:dKuX4hIo') {
		session_name('agi_session');
		session_start();
		$_SESSION['game'] = 'roadDead2';
		
		$q = json_decode($query);
		
		$page = $q->page;
		
		$db = new PDO('sqlite:roadDead2.db');
			
		$statement = $db->prepare('SELECT * FROM level LIMIT 18 OFFSET ' . (($page - 1) * 18));
				
		$statement->execute();
		$result = $statement->fetchAll();
		
		$reply = '{"command_id":"lookupSaveFiles","group_id":688,"files":[';
			
		$sep = '';
		
		foreach ($result as $level) {
			$save_id = $level['save_id'];
			$user_id = $level['user_id'];
			$user_name = $level['user_name'];
			$filename = $level['filename'];
			$created = $level['created'];
			$last_update = $level['last_update'];
			$status = $level['status'];
			$file = $level['file'];
			$thumb = $level['thumb'];
			$description = $level['description'];
			$file_size = $level['file_size'];
			$keys = $level['keys'];
			$ratings = $level['ratings'];
			$locked = $level['locked'];
			
			if ($locked == 1) {
				$locked = "true";
			} else {
				$locked = "false";
			}
			
			$filename = htmlspecialchars($filename, ENT_QUOTES, 'UTF-8');			
			$description = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
			$description = str_replace("\\", "\\\\", $description);
								
			$reply .= $sep;
			
			$reply .= '{';
			
			$reply .= ('"save_id":"'. $save_id . '",');
			$reply .= ('"user_id":"'. $user_id . '",');
			$reply .= ('"user_name":"'. $user_name . '",');
			$reply .= ('"filename":"'. $filename . '",');
			$reply .= ('"created":"'. $created . '",');
			$reply .= ('"last_update":"'. $last_update . '",');
			$reply .= ('"status":"'. $status . '",');
			$reply .= ('"file":"'. $file . '",');
			$reply .= ('"thumb":"'. $thumb . '",');
			$reply .= ('"description":"'. $description . '",');
			$reply .= ('"file_size":"'. $file_size . '",');
			$reply .= ('"keys":'. $keys . ',');
			$reply .= ('"ratings":'. $ratings . ',');
			$reply .= ('"locked":'. $locked);
						
			$reply .= '}';
			
			$sep = ",";
		}
		
		$reply .= '],"success":1}';
		
		echo $reply;

		/*{"command_id":"lookupSaveFiles","group_id":688,"files":[{"save_id":"529426","user_id":"4046397","user_name":"t1454","filename":"RP grinding\/farming V1.1","created":"2013-09-21 00:34:12",
		"last_update":"2013-09-21 00:34:12","views":"1168813","status":"2","file":"savefile.php?id=529426","thumb":"31000\/31426\/688\/images\/thumb_RP_grindingfarming_V11_529426.png",
		"description":"made some major changes to make this a better campaign. just hold accelerate. a possilbe of 10,000RP","file_size":1240229,
		"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.6060","votes":"1609"}],"locked":true},{"save_id":"853601","user_id":"4058710","user_name":"AngelKingUltra","filename":"Shit of the Dead","created":"2015-03-16 23:56:41","last_update":"2015-03-17 00:45:12","views":"300647","status":"2","file":"savefile.php?id=853601","thumb":"31000\/31426\/688\/853000\/images\/thumb_Shit_of_the_Dead_853601.png","description":"On a mission, Cocheta suddenly has to shit. Complete your mission...and shit.","file_size":652503,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.5576","votes":"165"}],"locked":true},{"save_id":"533583","user_id":"4730470","user_name":"Mustafa3025","filename":"FOR GETTING RP","created":"2013-10-06 13:28:01","last_update":"2013-10-06 13:28:01","views":"432524","status":"2","file":"savefile.php?id=533583","thumb":"31000\/31426\/688\/images\/thumb_FOR_GETTING_RP_533583.png","description":"","file_size":69360,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.5434","votes":"173"}],"locked":true},{"save_id":"537298","user_id":"4322896","user_name":"HsuJas000","filename":"Michael Bay Productions...","created":"2013-10-20 20:26:58","last_update":"2013-10-20 20:26:58","views":"828365","status":"2","file":"savefile.php?id=537298","thumb":"31000\/31426\/688\/images\/thumb_Michael_Bay_Productions_537298.png","description":"Explosions, Explosions, Explosions, Explosions, Explosions, Explosions, Explosions, Explosions,...","file_size":1026896,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.5000","votes":"112"}],"locked":true},{"save_id":"1119471","user_id":"6554284","user_name":"lucas999109","filename":"The big infection 2","created":"2018-01-19 15:25:44","last_update":"2018-01-19 15:41:16","views":"111045","status":"2","file":"savefile.php?id=1119471","thumb":"31000\/31426\/688\/1119000\/images\/thumb_The_big_infection_2_1119471.png","description":"Part 2 is released for Play! I hope you enjoy the map i made!","file_size":337624,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.4762","votes":"21"}],"locked":true},{"save_id":"863885","user_id":"5304689","user_name":"zulnain","filename":"zombie","created":"2015-04-23 08:16:33","last_update":"2015-04-23 08:16:33","views":"257900","status":"2","file":"savefile.php?id=863885","thumb":"31000\/31426\/688\/863000\/images\/thumb_zombie_863885.png","description":"survive","file_size":263680,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.3333","votes":"3"}],"locked":true},{"save_id":"1150947","user_id":"6032986","user_name":"ReaperRiper","filename":"Highway To Hell","created":"2019-02-03 23:43:17","last_update":"2019-02-03 23:43:17","views":"12960","status":"2","file":"savefile.php?id=1150947","thumb":"31000\/31426\/688\/1150000\/images\/thumb_Highway_To_Hell_1150947.png","description":"","file_size":217113,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.3333","votes":"3"}],"locked":true},{"save_id":"521339","user_id":"2443620","user_name":"Jaxfirebus","filename":"Upgrade Yourself","created":"2013-08-28 13:57:28","last_update":"2013-08-28 13:57:28","views":"935041","status":"2","file":"savefile.php?id=521339","thumb":"31000\/31426\/688\/images\/thumb_Upgrade_Yourself_521339.png","description":"Like the XP farm, Only you can upgrade everything while in the \"Challenge\"","file_size":41352,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.3005","votes":"426"}],"locked":true},{"save_id":"663367","user_id":"4912005","user_name":"fionploy5000","filename":"RP grinding shopping","created":"2014-04-26 02:50:56","last_update":"2014-04-26 02:50:56","views":"607534","status":"2","file":"savefile.php?id=663367","thumb":"31000\/31426\/688\/663000\/images\/thumb_RP_grinding_shopping_663367.png","description":"","file_size":621515,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.2986","votes":"211"}],"locked":true},{"save_id":"631383","user_id":"4992337","user_name":"MrRandomGuy234","filename":"FUN :D","created":"2014-03-23 15:32:31","last_update":"2014-03-23 15:32:31","views":"522273","status":"2","file":"savefile.php?id=631383","thumb":"31000\/31426\/688\/631000\/images\/thumb_FUN_D_631383.png","description":"","file_size":87391,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.2642","votes":"159"}],"locked":true},{"save_id":"1125865","user_id":"5101353","user_name":"sentinel1456","filename":"RP Farm","created":"2018-03-29 02:35:49","last_update":"2018-03-29 02:35:49","views":"81544","status":"2","file":"savefile.php?id=1125865","thumb":"31000\/31426\/688\/1125000\/images\/thumb_RP_Farm_1125865.png","description":"","file_size":25459,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.2500","votes":"12"}],"locked":true},{"save_id":"634137","user_id":"4912005","user_name":"fionploy5000","filename":"Snowscape 2","created":"2014-03-28 00:12:31","last_update":"2014-03-28 00:12:31","views":"230542","status":"2","file":"savefile.php?id=634137","thumb":"31000\/31426\/688\/634000\/images\/thumb_Snowscape_2_634137.png","description":"Part 3 Coming soon!","file_size":175573,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.2000","votes":"20"}],"locked":true},{"save_id":"523904","user_id":"4775135","user_name":"Juggernaut2033","filename":"Salida 38\"B\" fase aun en prueba.","created":"2013-09-02 18:49:25","last_update":"2013-09-02 18:50:17","views":"763001","status":"2","file":"savefile.php?id=523904","thumb":"31000\/31426\/688\/images\/thumb_Salida_38B_fase_aun_en_prueba_523904.png","description":"","file_size":157354,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.1803","votes":"61"}],"locked":true},{"save_id":"531381","user_id":"4671142","user_name":"Kylpault","filename":"Lost Platoon","created":"2013-09-28 15:56:58","last_update":"2013-09-28 15:56:58","views":"311924","status":"2","file":"savefile.php?id=531381","thumb":"31000\/31426\/688\/images\/thumb_Lost_Platoon_531381.png","description":"Story campaign. Rail shooter, no steering. It gets pretty difficult, hope you have good weapons!","file_size":1392077,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.1702","votes":"47"}],"locked":true},{"save_id":"528955","user_id":"4581184","user_name":"coolboy2222","filename":"escape ","created":"2013-09-18 20:07:27","last_update":"2013-09-18 20:07:27","views":"615556","status":"2","file":"savefile.php?id=528955","thumb":"31000\/31426\/688\/images\/thumb_escape__528955.png","description":" esape your home town and get off throgh the high way and this is when the zombies are every where ","file_size":213602,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.1290","votes":"93"}],"locked":true},{"save_id":"531387","user_id":"4671142","user_name":"Kylpault","filename":"Lost Platoon (Easy)","created":"2013-09-28 16:18:14","last_update":"2013-09-28 16:18:14","views":"493901","status":"2","file":"savefile.php?id=531387","thumb":"31000\/31426\/688\/images\/thumb_Lost_Platoon_Easy_531387.png","description":"Story campaign. Rail shooter, no steering. Easy mode.","file_size":1392073,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.1186","votes":"118"}],"locked":true},{"save_id":"561183","user_id":"4771348","user_name":"CaptainKickButt","filename":"ydcg","created":"2014-01-02 10:12:47","last_update":"2014-01-02 10:12:47","views":"352312","status":"2","file":"savefile.php?id=561183","thumb":"31000\/31426\/688\/561000\/images\/thumb_ydcg_561183.png","description":"zdrthfg","file_size":23132,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.0750","votes":"40"}],"locked":true},{"save_id":"530978","user_id":"4802590","user_name":"LordArian1","filename":"Escape from Frequbrg-Normal Mode","created":"2013-09-27 17:22:55","last_update":"2013-09-27 17:22:55","views":"495883","status":"2","file":"savefile.php?id=530978","thumb":"31000\/31426\/688\/images\/thumb_Escape_from_FrequbrgNormal_Mode_530978.png","description":"This is the 2nd release- Now it's short enough! A ton of areas and a lot of detail, a lot of fun!",
		"file_size":373524,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.0149","votes":"67"}],"locked":true}],"success":1}*/
		
		return;
	} else if ($tracker_id == '19381:mwERezcZ') {
		session_name('agi_session');
		session_start();
		$_SESSION['game'] = 'gapMonsters';
		
		$q = json_decode($query);
		
		$page = $q->page;
		
		$db = new PDO('sqlite:gapMonsters.db');
			
		$statement = $db->prepare('SELECT * FROM level LIMIT 12 OFFSET ' . (($page - 1) * 12));
				
		$statement->execute();
		$result = $statement->fetchAll();
		
		$reply = '{"command_id":"lookupSaveFiles","group_id":130,"files":[';
			
		$sep = '';
		
		foreach ($result as $level) {
			$save_id = $level['save_id'];
			$user_id = $level['user_id'];
			$user_name = $level['user_name'];
			$filename = $level['filename'];
			$created = $level['created'];
			$last_update = $level['last_update'];
			$status = $level['status'];
			$file = $level['file'];
			$thumb = $level['thumb'];
			$description = $level['description'];
			$file_size = $level['file_size'];
			$keys = $level['keys'];
			$ratings = $level['ratings'];
			$locked = $level['locked'];
			
			if ($locked == 1) {
				$locked = "true";
			} else {
				$locked = "false";
			}
			
			$filename = htmlspecialchars($filename, ENT_QUOTES, 'UTF-8');			
			$description = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
			$description = str_replace("\\", "\\\\", $description);
								
			$reply .= $sep;
			
			$reply .= '{';
			
			$reply .= ('"save_id":"'. $save_id . '",');
			$reply .= ('"user_id":"'. $user_id . '",');
			$reply .= ('"user_name":"'. $user_name . '",');
			$reply .= ('"filename":"'. $filename . '",');
			$reply .= ('"created":"'. $created . '",');
			$reply .= ('"last_update":"'. $last_update . '",');
			$reply .= ('"status":"'. $status . '",');
			$reply .= ('"file":"'. $file . '",');
			$reply .= ('"thumb":"'. $thumb . '",');
			$reply .= ('"description":"'. $description . '",');
			$reply .= ('"file_size":"'. $file_size . '",');
			if ($keys != '') {
				$reply .= ('"keys":'. $keys . ',');
			}
			$reply .= ('"ratings":'. $ratings . ',');
			$reply .= ('"locked":'. $locked);
						
			$reply .= '}';
			
			$sep = ",";
		}
		
		$reply .= '],"success":1}';
		
		echo $reply;
		
		return;
		
	} else if ($tracker_id == '14866:GGuXr5zj') {
		session_name('agi_session');
		session_start();
		$_SESSION['game'] = 'carveShare';
		
		$q = json_decode($query);
		
		$page = $q->page;
		
		$db = new PDO('sqlite:carveShare.db');
			
		$statement = $db->prepare('SELECT * FROM level LIMIT 20 OFFSET ' . (($page - 1) * 20));
				
		$statement->execute();
		$result = $statement->fetchAll();
		
		$reply = '{"command_id":"lookupSaveFiles","group_id":54,"files":[';
			
		$sep = '';
		
		foreach ($result as $level) {
			$save_id = $level['save_id'];
			$user_id = $level['user_id'];
			$user_name = $level['user_name'];
			$filename = $level['filename'];
			$created = $level['created'];
			$last_update = $level['last_update'];
			$status = $level['status'];
			$file = $level['file'];
			$thumb = $level['thumb'];
			$description = $level['description'];
			$file_size = $level['file_size'];
			$keys = $level['keys'];
			$ratings = $level['ratings'];
			$locked = $level['locked'];
			
			if ($locked == 1) {
				$locked = "true";
			} else {
				$locked = "false";
			}
			
			$filename = htmlspecialchars($filename, ENT_QUOTES, 'UTF-8');			
			$description = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
			$description = str_replace("\\", "\\\\", $description);
								
			$reply .= $sep;
			
			$reply .= '{';
			
			$reply .= ('"save_id":"'. $save_id . '",');
			$reply .= ('"user_id":"'. $user_id . '",');
			$reply .= ('"user_name":"'. $user_name . '",');
			$reply .= ('"filename":"'. $filename . '",');
			$reply .= ('"created":"'. $created . '",');
			$reply .= ('"last_update":"'. $last_update . '",');
			$reply .= ('"status":"'. $status . '",');
			$reply .= ('"file":"'. $file . '",');
			$reply .= ('"thumb":"'. $thumb . '",');
			$reply .= ('"description":"'. $description . '",');
			$reply .= ('"file_size":"'. $file_size . '",');
			if ($keys != '') {
				$reply .= ('"keys":'. $keys . ',');
			}
			$reply .= ('"ratings":'. $ratings . ',');
			$reply .= ('"locked":'. $locked);
						
			$reply .= '}';
			
			$sep = ",";
		}
		
		$reply .= '],"success":1}';
		
		echo $reply;
		
		return;
	
	} else if ($tracker_id == '26583:bsjcIGa8') {
		session_name('agi_session');
		session_start();
		$_SESSION['game'] = 'drawingGrounds';
		
		$q = json_decode($query);
		
		$page = $q->page;
		
		$db = new PDO('sqlite:drawingGrounds.db');
			
		$statement = $db->prepare('SELECT * FROM level LIMIT 12 OFFSET ' . (($page - 1) * 12));
				
		$statement->execute();
		$result = $statement->fetchAll();
		
		$reply = '{"command_id":"lookupSaveFiles","group_id":436,"files":[';
			
		$sep = '';
		
		foreach ($result as $level) {
			$save_id = $level['save_id'];
			$user_id = $level['user_id'];
			$user_name = $level['user_name'];
			$filename = $level['filename'];
			$created = $level['created'];
			$last_update = $level['last_update'];
			$status = $level['status'];
			$file = $level['file'];
			$thumb = $level['thumb'];
			$description = $level['description'];
			$file_size = $level['file_size'];
			$keys = $level['keys'];
			$ratings = $level['ratings'];
			$locked = $level['locked'];
			
			if ($locked == 1) {
				$locked = "true";
			} else {
				$locked = "false";
			}
			
			$filename = htmlspecialchars($filename, ENT_QUOTES, 'UTF-8');			
			$description = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
			$description = str_replace("\\", "\\\\", $description);
								
			$reply .= $sep;
			
			$reply .= '{';
			
			$reply .= ('"save_id":"'. $save_id . '",');
			$reply .= ('"user_id":"'. $user_id . '",');
			$reply .= ('"user_name":"'. $user_name . '",');
			$reply .= ('"filename":"'. $filename . '",');
			$reply .= ('"created":"'. $created . '",');
			$reply .= ('"last_update":"'. $last_update . '",');
			$reply .= ('"status":"'. $status . '",');
			$reply .= ('"file":"'. $file . '",');
			$reply .= ('"thumb":"'. $thumb . '",');
			$reply .= ('"description":"'. $description . '",');
			$reply .= ('"file_size":"'. $file_size . '",');
			if ($keys != '') {
				$reply .= ('"keys":'. $keys . ',');
			}
			$reply .= ('"ratings":'. $ratings . ',');
			$reply .= ('"locked":'. $locked);
						
			$reply .= '}';
			
			$sep = ",";
		}
		
		$reply .= '],"success":1}';
		
		echo $reply;
		
		return;
	
	} else if ($tracker_id == '30982:9iQVnZ1R') {	//	The Interview Codex
		session_name('agi_session');
		session_start();
		$_SESSION['game'] = 'interviewCodex';
		
		$q = json_decode($query);
		
		$page = $q->page;
		
		$db = new PDO('sqlite:interviewCodex.db');
		
		//	default order is by date desc TODO implement
		$statement = $db->prepare('SELECT * FROM level LIMIT 12 OFFSET ' . (($page - 1) * 12));
				
		$statement->execute();
		$result = $statement->fetchAll();
		
		$reply = '{"command_id":"lookupSaveFiles","group_id":655,"files":[';
			
		$sep = '';
		
		foreach ($result as $level) {
			$save_id = $level['save_id'];
			$user_id = $level['user_id'];
			$user_name = $level['user_name'];
			$filename = $level['filename'];
			$created = $level['created'];
			$last_update = $level['last_update'];
			$status = $level['status'];
			$file = $level['file'];
			$thumb = $level['thumb'];
			$description = $level['description'];
			$file_size = $level['file_size'];
			$keys = $level['keys'];
			$ratings = $level['ratings'];
			$locked = $level['locked'];
			
			if ($locked == 1) {
				$locked = "true";
			} else {
				$locked = "false";
			}
			
			$filename = htmlspecialchars($filename, ENT_QUOTES, 'UTF-8');			
			$description = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
			$description = str_replace("\\", "\\\\", $description);
			
			$reply .= $sep;
			
			$reply .= '{';
			
			$reply .= ('"save_id":"'. $save_id . '",');
			$reply .= ('"user_id":"'. $user_id . '",');
			$reply .= ('"user_name":"'. $user_name . '",');
			$reply .= ('"filename":"'. $filename . '",');
			$reply .= ('"created":"'. $created . '",');
			$reply .= ('"last_update":"'. $last_update . '",');
			$reply .= ('"status":"'. $status . '",');
			$reply .= ('"file":"'. $file . '",');
			$reply .= ('"thumb":"'. $thumb . '",');
			$reply .= ('"description":"'. $description . '",');
			$reply .= ('"file_size":"'. $file_size . '",');
			if ($keys != '') {
				$reply .= ('"keys":'. $keys . ',');
			}
			if ($ratings != '') {
				$reply .= ('"ratings":'. $ratings . ',');
			}
			$reply .= ('"locked":'. $locked);
						
			$reply .= '}';
			
			$sep = ",";
		}
		
		$reply .= '],"success":1}';
		
		echo $reply;
		
		return;
	
	} else if ($tracker_id == '32807:d607cii7') {	//	Motorjoust
		session_name('agi_session');
		session_start();
		$_SESSION['game'] = 'motorjoust';
		
		$q = json_decode($query);
		
		$page = $q->page;
		
		$db = new PDO('sqlite:motorjoust.db');
		
		//	default order is by date desc TODO implement
		$statement = $db->prepare('SELECT * FROM level LIMIT 12 OFFSET ' . (($page - 1) * 12));
				
		$statement->execute();
		$result = $statement->fetchAll();
		
		$reply = '{"command_id":"lookupSaveFiles","group_id":769,"files":[';
			
		$sep = '';
		
		foreach ($result as $level) {
			$save_id = $level['save_id'];
			$user_id = $level['user_id'];
			$user_name = $level['user_name'];
			$filename = $level['filename'];
			$created = $level['created'];
			$last_update = $level['last_update'];
			$status = $level['status'];
			$file = $level['file'];
			$thumb = $level['thumb'];
			$description = $level['description'];
			$file_size = $level['file_size'];
			$keys = $level['keys'];
			$ratings = $level['ratings'];
			$locked = $level['locked'];
			
			if ($locked == 1) {
				$locked = "true";
			} else {
				$locked = "false";
			}
			
			$filename = htmlspecialchars($filename, ENT_QUOTES, 'UTF-8');			
			$description = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
			$description = str_replace("\\", "\\\\", $description);
			
			$reply .= $sep;
			
			$reply .= '{';
			
			$reply .= ('"save_id":"'. $save_id . '",');
			$reply .= ('"user_id":"'. $user_id . '",');
			$reply .= ('"user_name":"'. $user_name . '",');
			$reply .= ('"filename":"'. $filename . '",');
			$reply .= ('"created":"'. $created . '",');
			$reply .= ('"last_update":"'. $last_update . '",');
			$reply .= ('"status":"'. $status . '",');
			$reply .= ('"file":"'. $file . '",');
			$reply .= ('"thumb":"'. $thumb . '",');
			$reply .= ('"description":"'. $description . '",');
			$reply .= ('"file_size":"'. $file_size . '",');
			if ($keys != '') {
				$reply .= ('"keys":'. $keys . ',');
			}
			if ($ratings != '') {
				$reply .= ('"ratings":'. $ratings . ',');
			}
			$reply .= ('"locked":'. $locked);
						
			$reply .= '}';
			
			$sep = ",";
		}
		
		$reply .= '],"success":1}';
		
		echo $reply;
		
		return;
	}
	
	//	{"command_id":"lookupSaveFiles","group_id":688,"files":[{"save_id":"529426","user_id":"4046397","user_name":"t1454","filename":"RP grinding\/farming V1.1","created":"2013-09-21 00:34:12","last_update":"2013-09-21 00:34:12","views":"1168797","status":"2","file":"savefile.php?id=529426","thumb":"31000\/31426\/688\/images\/thumb_RP_grindingfarming_V11_529426.png","description":"made some major changes to make this a better campaign. just hold accelerate. a possilbe of 10,000RP","file_size":1240229,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.6060","votes":"1609"}],"locked":true},{"save_id":"853601","user_id":"4058710","user_name":"AngelKingUltra","filename":"Shit of the Dead","created":"2015-03-16 23:56:41","last_update":"2015-03-17 00:45:12","views":"300633","status":"2","file":"savefile.php?id=853601","thumb":"31000\/31426\/688\/853000\/images\/thumb_Shit_of_the_Dead_853601.png","description":"On a mission, Cocheta suddenly has to shit. Complete your mission...and shit.","file_size":652503,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.5576","votes":"165"}],"locked":true},{"save_id":"533583","user_id":"4730470","user_name":"Mustafa3025","filename":"FOR GETTING RP","created":"2013-10-06 13:28:01","last_update":"2013-10-06 13:28:01","views":"432514","status":"2","file":"savefile.php?id=533583","thumb":"31000\/31426\/688\/images\/thumb_FOR_GETTING_RP_533583.png","description":"","file_size":69360,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.5434","votes":"173"}],"locked":true},{"save_id":"537298","user_id":"4322896","user_name":"HsuJas000","filename":"Michael Bay Productions...","created":"2013-10-20 20:26:58","last_update":"2013-10-20 20:26:58","views":"828355","status":"2","file":"savefile.php?id=537298","thumb":"31000\/31426\/688\/images\/thumb_Michael_Bay_Productions_537298.png","description":"Explosions, Explosions, Explosions, Explosions, Explosions, Explosions, Explosions, Explosions,...","file_size":1026896,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.5000","votes":"112"}],"locked":true},{"save_id":"1119471","user_id":"6554284","user_name":"lucas999109","filename":"The big infection 2","created":"2018-01-19 15:25:44","last_update":"2018-01-19 15:41:16","views":"111034","status":"2","file":"savefile.php?id=1119471","thumb":"31000\/31426\/688\/1119000\/images\/thumb_The_big_infection_2_1119471.png","description":"Part 2 is released for Play! I hope you enjoy the map i made!","file_size":337624,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.4762","votes":"21"}],"locked":true},{"save_id":"1150947","user_id":"6032986","user_name":"ReaperRiper","filename":"Highway To Hell","created":"2019-02-03 23:43:17","last_update":"2019-02-03 23:43:17","views":"12949","status":"2","file":"savefile.php?id=1150947","thumb":"31000\/31426\/688\/1150000\/images\/thumb_Highway_To_Hell_1150947.png","description":"","file_size":217113,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.3333","votes":"3"}],"locked":true},{"save_id":"863885","user_id":"5304689","user_name":"zulnain","filename":"zombie","created":"2015-04-23 08:16:33","last_update":"2015-04-23 08:16:33","views":"257890","status":"2","file":"savefile.php?id=863885","thumb":"31000\/31426\/688\/863000\/images\/thumb_zombie_863885.png","description":"survive","file_size":263680,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.3333","votes":"3"}],"locked":true},{"save_id":"521339","user_id":"2443620","user_name":"Jaxfirebus","filename":"Upgrade Yourself","created":"2013-08-28 13:57:28","last_update":"2013-08-28 13:57:28","views":"935031","status":"2","file":"savefile.php?id=521339","thumb":"31000\/31426\/688\/images\/thumb_Upgrade_Yourself_521339.png","description":"Like the XP farm, Only you can upgrade everything while in the \"Challenge\"","file_size":41352,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.3005","votes":"426"}],"locked":true},{"save_id":"663367","user_id":"4912005","user_name":"fionploy5000","filename":"RP grinding shopping","created":"2014-04-26 02:50:56","last_update":"2014-04-26 02:50:56","views":"607525","status":"2","file":"savefile.php?id=663367","thumb":"31000\/31426\/688\/663000\/images\/thumb_RP_grinding_shopping_663367.png","description":"","file_size":621515,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.2986","votes":"211"}],"locked":true},{"save_id":"631383","user_id":"4992337","user_name":"MrRandomGuy234","filename":"FUN :D","created":"2014-03-23 15:32:31","last_update":"2014-03-23 15:32:31","views":"522264","status":"2","file":"savefile.php?id=631383","thumb":"31000\/31426\/688\/631000\/images\/thumb_FUN_D_631383.png","description":"","file_size":87391,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.2642","votes":"159"}],"locked":true},{"save_id":"1125865","user_id":"5101353","user_name":"sentinel1456","filename":"RP Farm","created":"2018-03-29 02:35:49","last_update":"2018-03-29 02:35:49","views":"81534","status":"2","file":"savefile.php?id=1125865","thumb":"31000\/31426\/688\/1125000\/images\/thumb_RP_Farm_1125865.png","description":"","file_size":25459,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.2500","votes":"12"}],"locked":true},{"save_id":"634137","user_id":"4912005","user_name":"fionploy5000","filename":"Snowscape 2","created":"2014-03-28 00:12:31","last_update":"2014-03-28 00:12:31","views":"230533","status":"2","file":"savefile.php?id=634137","thumb":"31000\/31426\/688\/634000\/images\/thumb_Snowscape_2_634137.png","description":"Part 3 Coming soon!","file_size":175573,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.2000","votes":"20"}],"locked":true},{"save_id":"523904","user_id":"4775135","user_name":"Juggernaut2033","filename":"Salida 38\"B\" fase aun en prueba.","created":"2013-09-02 18:49:25","last_update":"2013-09-02 18:50:17","views":"762992","status":"2","file":"savefile.php?id=523904","thumb":"31000\/31426\/688\/images\/thumb_Salida_38B_fase_aun_en_prueba_523904.png","description":"","file_size":157354,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.1803","votes":"61"}],"locked":true},{"save_id":"531381","user_id":"4671142","user_name":"Kylpault","filename":"Lost Platoon","created":"2013-09-28 15:56:58","last_update":"2013-09-28 15:56:58","views":"311915","status":"2","file":"savefile.php?id=531381","thumb":"31000\/31426\/688\/images\/thumb_Lost_Platoon_531381.png","description":"Story campaign. Rail shooter, no steering. It gets pretty difficult, hope you have good weapons!","file_size":1392077,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.1702","votes":"47"}],"locked":true},{"save_id":"528955","user_id":"4581184","user_name":"coolboy2222","filename":"escape ","created":"2013-09-18 20:07:27","last_update":"2013-09-18 20:07:27","views":"615547","status":"2","file":"savefile.php?id=528955","thumb":"31000\/31426\/688\/images\/thumb_escape__528955.png","description":" esape your home town and get off throgh the high way and this is when the zombies are every where ","file_size":213602,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.1290","votes":"93"}],"locked":true},{"save_id":"531387","user_id":"4671142","user_name":"Kylpault","filename":"Lost Platoon (Easy)","created":"2013-09-28 16:18:14","last_update":"2013-09-28 16:18:14","views":"493891","status":"2","file":"savefile.php?id=531387","thumb":"31000\/31426\/688\/images\/thumb_Lost_Platoon_Easy_531387.png","description":"Story campaign. Rail shooter, no steering. Easy mode.","file_size":1392073,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.1186","votes":"118"}],"locked":true},{"save_id":"561183","user_id":"4771348","user_name":"CaptainKickButt","filename":"ydcg","created":"2014-01-02 10:12:47","last_update":"2014-01-02 10:12:47","views":"352303","status":"2","file":"savefile.php?id=561183","thumb":"31000\/31426\/688\/561000\/images\/thumb_ydcg_561183.png","description":"zdrthfg","file_size":23132,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.0750","votes":"40"}],"locked":true},{"save_id":"530978","user_id":"4802590","user_name":"LordArian1","filename":"Escape from Frequbrg-Normal Mode","created":"2013-09-27 17:22:55","last_update":"2013-09-27 17:22:55","views":"495874","status":"2","file":"savefile.php?id=530978","thumb":"31000\/31426\/688\/images\/thumb_Escape_from_FrequbrgNormal_Mode_530978.png","description":"This is the 2nd release- Now it's short enough! A ton of areas and a lot of detail, a lot of fun!","file_size":373524,"keys":[{"id":263,"value":"1"}],"ratings":[{"id":128,"score":"4.0149","votes":"67"}],"locked":true}],"success":1}
	
} else if ($command_id == 'logCustomEvent') {
	$array['event'] = $_POST['event'];
	// {"command_id":"loadScores","page":1,"board":907,"num_results":10,"period":"Today","scores":[],"num_scores":"N\/A","success":1}
}
$array['success'] = 1;

echo json_encode($array);
