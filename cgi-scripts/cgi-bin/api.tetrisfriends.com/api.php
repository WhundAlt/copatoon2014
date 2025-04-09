<?php
  /* by obelisk */

  include_once '_backend/users.php';
  include_once '_backend/utils.php';

  /*
    <LoginOpenWebRQ>
      <SessionId>session_id</SessionId>
      <SessionToken>session_token</SessionToken>
      <Timestamp>time_stamp</Timestamp>
      <LoginId>login_id</LoginId>
    </LoginOpenWebRQ>
  */

  //die(end($_POST));

  /*
  $user = new SimpleXMLElement(createUserString(0, 'din mamma'));
  $user->id = firstAvailableUserId();
  saveUser($user);
  echo loadUser($user->id);
  */

  // Get the last key-value pair posted
  // (This is how the actual server does it - according to my investigations)
  if (count($_POST) > 0) {
    $xml_string = end($_POST);
    // Try parsing it as XML
    // (This api communicates through XML exclusively (as far as i know))
    $xml = simplexml_load_string($xml_string);
    if ($xml !== false) {
      // Find the type of data sent
      // (The name of the root XML element determines what kind of message it is) 
      switch ($xml->getName()) {
        case 'GameStartRQ': // ...
          die(end($_POST));
          break;
        case 'CreateBattleBucketGameRecordRQ': // Request to "end" a battle
          // Find the user
          $session_id = (string)$xml->SessionId;
          $user = findUser(function($user, $user_id) use ($session_id) {
            return $session_id === (string)$user->session_id;
          });
          // Get values from user
          $coins  = $user ? (int)$user->coins  : 0;
          $rubies = $user ? (int)$user->rubies : 0;
          // Update rank
          if ($user) {
            // Get rank & stars
            $half_stars = (int)$user->games->battle2p->half_stars;
            $rank       = (int)$user->games->battle2p->rank;
            // Calculate new rank & stars
            $won_game = string_to_bool((string)$xml->WonGame);
            if ($won_game) { // (Gain a star)
              $half_stars += 2;
              if ($half_stars >= 10) { // (Rank up)
                if ($rank < 999) {
                  $rank += 1;
                  $half_stars = 4; // (Reset stars)
                } else { // (Stay at 999)
                  $half_stars = 10;
                }
              }
            } else { // (Lose a star)
              $half_stars -= 2;
              if ($half_stars <= 0) { // (Rank down)
                if ($rank > 1) {
                  $rank -= 1;
                  $half_stars = 4; // (Reset stars)
                } else { // (Stay at 1)
                  $half_stars = 0;
                }
              }
            }
            // Set users new rank & stars
            $user->games->battle2p->half_stars[0] = $half_stars;
            $user->games->battle2p->rank[0] = $rank;
            // Update user
            saveUser($user);
          }
          // Create response
          echo createCreateBattleBucketGameRecordRS($coins, $rubies);
          break;
        case 'GameInitBattleRQ': // Request to start a battle
        // Find the user
        $session_id = (string)$xml->SessionId;
        $user = findUser(function($user, $user_id) use ($session_id) {
          return $session_id === (string)$user->session_id;
        });
        // Get values from user
        $half_stars = $user ? (int)$user->games->battle2p->half_stars : 1;
        $rank       = $user ? (int)$user->games->battle2p->rank       : 4;
        // Create response
          echo createGameInitBattleRS($half_stars, $rank);
          break;
        case 'LoginOpenWebRQ': // Request to log in
          // Find the user
          $session_id = (string)$xml->SessionId;
          $user = findUser(function($user, $user_id) use ($session_id) {
            return $session_id === (string)$user->session_id;
          });
          // Get values from user
          $username = $user ? (string)$user->username : 'Guest';
          $avatar   = $user ? (string)$user->avatar   : '0';
          // Create response
          echo createLoginOpenWebRS($username, $avatar);
          break;
        default:
          // Respond with the generic fail response
          echo createErrorString();
          break;
      }
    } else { // Failed to parse xml
      /*
      // Log the error
      echo 'Failed loading XML: ';
      foreach(libxml_get_errors() as $error) {
          echo '<br>', $error->message;
      }
      */
      // Respond with the generic fail response
      echo createErrorString();
    }
  }

  /**
   * Create a GameInitBattleRS xml string.
   * @param points The number of coins the user has (integer >= 0).
   * @param rubies The number of rubies the user has (integer >= 0).
   */
  function createCreateBattleBucketGameRecordRS($points = 0, $rubies = 0) {
    return (
      '<CreateBattleBucketGameRecordRS>'.
        '<Success />'.
        '<Points>'. $points .'</Points>'.
        '<Rubies>'. $rubies .'</Rubies>'.
        '<UserMissions></UserMissions>'.
      '</CreateBattleBucketGameRecordRS>'
    );
  }

  /**
   * Create a GameInitBattleRS xml string.
   * @param half_stars The number of half stars the user has (integer [0 10]).
   * @param rank The rank the user has (integer >= 1).
   * @param hpt "Has Played Today" (boolean)
   * @param bst "Best Score Today" (boolean)
   */
  function createGameInitBattleRS($half_stars = 0, $rank = 1, $hpt = true, $bst = true) {
    return (
      '<GameInitBattleRS>'.
        '<Success />'.
        '<HalfStars>'. $half_stars .'</HalfStars>'.
        '<Rank>'. $rank .'</Rank>'.
        '<HasPlayedToday>'. ($hpt ? 'true' : 'false') .'</HasPlayedToday>'.
        '<BestScoreToday>'. ($bst ? 'true' : 'false') .'</BestScoreToday>'.
        '<UserMissionIds></UserMissionIds>'.
        '<UserMissions></UserMissions>'.
        '<UserAccessories></UserAccessories>'.
      '</GameInitBattleRS>'
    );
  }

  /**
   * Create a GameInitBattleRS xml string.
   * @param username Username of the user.
   */
  function createLoginOpenWebRS($username = '', $avatar = '') {
    return (
      '<LoginOpenWebRS>'.
        '<Success />'.
        '<SessionKey>a09ShbpyTimn/L32XKDs7g==</SessionKey>'.
        '<UserOpenWeb>'.
          '<UserOpenWebId>7296827</UserOpenWebId>'.
          '<IsDeveloper>false</IsDeveloper>'.
          '<IsBetaUser>false</IsBetaUser>'.
          '<IsPrivateBirthDate>false</IsPrivateBirthDate>'.
          '<IsPrivateLocation>false</IsPrivateLocation>'.
          '<IsEmailVerified>false</IsEmailVerified>'.
          '<UserName><![CDATA['. $username .']]></UserName>'.
          '<Gender>M</Gender>'.
          '<Message></Message>'.
          '<Location>SE</Location>'.
          '<BirthDay>1990-01-01 00:00:00.0</BirthDay>'.
          '<AvatarURL>'. $avatar .'.gif</AvatarURL>'.
          '<Settings>'.
            '<UserSettings>'.
              '<Controls></Controls>'.
              '<IsCustomControls>false</IsCustomControls>'.
              '<CountryCode></CountryCode>'.
              '<MusicVolume>0</MusicVolume>'.
              '<Speed>0</Speed>'.
              '<UseBlockStarDeluxe>false</UseBlockStarDeluxe>'.
              '<UseGhost>true</UseGhost>'.
              '<UseGrid>false</UseGrid>'.
              '<UseHold>true</UseHold>'.
              '<Volume>0</Volume>'.
              '<VoiceVolume>0</VoiceVolume>'.
              '<LoginCount>0</LoginCount>'.
              '<Sprint5PRank>1</Sprint5PRank>'.
              '<Sprint5PHalfStars>4</Sprint5PHalfStars>'.
              '<RealBattleRank>1</RealBattleRank>'.
              '<RealBattleStars>2</RealBattleStars>'.
              '<BattleMapId>0</BattleMapId>'.
              '<RealBattle6pRank>-1</RealBattle6pRank>'.
              '<RealBattle6pStars>4</RealBattle6pStars>'.
              '<RushHalfStars>4</RushHalfStars>'.
              '<RushRank>-1</RushRank>'.
              '<Battle6pMapId>0</Battle6pMapId>'.
              '<RushMapId>0</RushMapId>'.
              '<MonoGarbageLevel>0</MonoGarbageLevel>'.
              '<MonoStartLevel>1</MonoStartLevel>'.
              '<MonoIsModeA>true</MonoIsModeA>'.
              '<CurArr>9006</CurArr>'.
              '<CurDas>9000</CurDas>'.
              '<UseIhs>false</UseIhs>'.
              '<UseIrs>false</UseIrs>'.
              '<CurArenaLobbyBG>8100</CurArenaLobbyBG>'.
            '</UserSettings>'.
          '</Settings>'.
          '<CurrentGhostId>1</CurrentGhostId>'.
          '<CurrentMinoId>0</CurrentMinoId>'.
          '<CurrentSfxId>3000</CurrentSfxId>'.
          '<CurrentVoxId>4001</CurrentVoxId>'.
          '<RegionId>1</RegionId>'.
          '<Rubies>0</Rubies>'.
          '<Points>570</Points>'.
          '<PointsLifetime>570</PointsLifetime>'.
        '</UserOpenWeb>'.
      '</LoginOpenWebRS>'
    );
  }

  /** Create an error xml string. */
  function createErrorString() {
    return '<ErrorRS><Failure><![CDATA[INVALID_RQ]]></Failure></ErrorRS>';
  }
  
  /*
  

POST
  FORM DATA
    xml=<GameInitBattleRQ><SessionId>oqt2Os172VQ=</SessionId><SessionToken>dc6201bd93d63d2e28250cb999b774c8316c7998:3424b386e8a5983880d094f11664e6ac167517d8</SessionToken><Timestamp>1557427618</Timestamp><PlatformId>3</PlatformId></GameInitBattleRQ>
 RESPONSE
    <GameInitBattleRS><Success /><HalfStars>4</HalfStars><Rank>1</Rank><HasPlayedToday>false</HasPlayedToday><BestScoreToday>false</BestScoreToday><UserMissionIds></UserMissionIds><UserMissions></UserMissions><UserAccessories></UserAccessories></GameInitBattleRS>


POST
  FORM DATA
    xml=<LoginOpenWebRQ><SessionId>oqt2Os172VQ=</SessionId><SessionToken>05b1c32544607acaf49087fa3496e6693c4116ef:154d9b7978decf484459b30125e5c8e32d7c8b39</SessionToken><Timestamp>1557469427</Timestamp><LoginId>1231</LoginId></LoginOpenWebRQ>
  RESPONSE
    <LoginOpenWebRS><Success /><SessionKey>a09ShbpyTimn/L32XKDs7g==</SessionKey><UserOpenWeb><UserOpenWebId>7296827</UserOpenWebId><IsDeveloper>false</IsDeveloper><IsBetaUser>false</IsBetaUser><IsPrivateBirthDate>false</IsPrivateBirthDate><IsPrivateLocation>false</IsPrivateLocation><IsEmailVerified>false</IsEmailVerified><UserName><![CDATA[FP_Obelisk]]></UserName><Gender>M</Gender><Message></Message><Location>SE</Location><BirthDay>1990-01-01 00:00:00.0</BirthDay><AvatarURL>55.gif</AvatarURL><Settings><UserSettings><Controls></Controls><IsCustomControls>false</IsCustomControls><CountryCode></CountryCode><MusicVolume>0</MusicVolume><Speed>0</Speed><UseBlockStarDeluxe>false</UseBlockStarDeluxe><UseGhost>true</UseGhost><UseGrid>false</UseGrid><UseHold>true</UseHold><Volume>0</Volume><VoiceVolume>0</VoiceVolume><LoginCount>0</LoginCount><Sprint5PRank>1</Sprint5PRank><Sprint5PHalfStars>4</Sprint5PHalfStars><RealBattleRank>1</RealBattleRank><RealBattleStars>2</RealBattleStars><BattleMapId>0</BattleMapId><RealBattle6pRank>-1</RealBattle6pRank><RealBattle6pStars>4</RealBattle6pStars><RushHalfStars>4</RushHalfStars><RushRank>-1</RushRank><Battle6pMapId>0</Battle6pMapId><RushMapId>0</RushMapId><MonoGarbageLevel>0</MonoGarbageLevel><MonoStartLevel>1</MonoStartLevel><MonoIsModeA>true</MonoIsModeA><CurArr>9006</CurArr><CurDas>9000</CurDas><UseIhs>false</UseIhs><UseIrs>false</UseIrs><CurArenaLobbyBG>8100</CurArenaLobbyBG></UserSettings></Settings><CurrentGhostId>1</CurrentGhostId><CurrentMinoId>0</CurrentMinoId><CurrentSfxId>3000</CurrentSfxId><CurrentVoxId>4001</CurrentVoxId><RegionId>1</RegionId><Rubies>0</Rubies><Points>550</Points><PointsLifetime>550</PointsLifetime></UserOpenWeb></LoginOpenWebRS>

POST
  FORM DATA
    xml=<GameStartRQ><LoginId>1231</LoginId><ExternalId>7296827</ExternalId><ProductId>100</ProductId><PlatformId>3</PlatformId><IsPause>0</IsPause><IsGuest>0</IsGuest><SessionId>oqt2Os172VQ=</SessionId><SessionToken>05b1c32544607acaf49087fa3496e6693c4116ef:154d9b7978decf484459b30125e5c8e32d7c8b39</SessionToken><Timestamp>1557469427</Timestamp><Ip>155.4.246.168</Ip><CurrentHalfStar>2</CurrentHalfStar><CurrentRank>1</CurrentRank><UserMissionProgesses></UserMissionProgesses><UncompletedGameLength>0</UncompletedGameLength><Settings><![CDATA[<UserSettings><Controls></Controls><IsCustomControls>false</IsCustomControls><CountryCode></CountryCode><MusicVolume>0</MusicVolume><Speed>0</Speed><UseBlockStarDeluxe>false</UseBlockStarDeluxe><UseGhost>true</UseGhost><UseGrid>false</UseGrid><UseHold>true</UseHold><Volume>0</Volume><VoiceVolume>0</VoiceVolume><LoginCount>0</LoginCount><Sprint5PRank>1</Sprint5PRank><Sprint5PHalfStars>4</Sprint5PHalfStars><RealBattleRank>1</RealBattleRank><RealBattleStars>2</RealBattleStars><BattleMapId>0</BattleMapId><RealBattle6pRank>-1</RealBattle6pRank><RealBattle6pStars>4</RealBattle6pStars><RushHalfStars>4</RushHalfStars><RushRank>-1</RushRank><Battle6pMapId>0</Battle6pMapId><RushMapId>0</RushMapId><MonoGarbageLevel>0</MonoGarbageLevel><MonoStartLevel>1</MonoStartLevel><MonoIsModeA>true</MonoIsModeA><CurArr>9006</CurArr><CurDas>9000</CurDas><UseIhs>false</UseIhs><UseIrs>false</UseIrs><CurArenaLobbyBG>8100</CurArenaLobbyBG></UserSettings>]]></Settings></GameStartRQ>
  RESPONSE
    ???


POST
  FORM DATA
    <GameStartRQ>
      <LoginId>1234</LoginId>
      <ExternalId>0</ExternalId>
      <ProductId>100</ProductId>
      <PlatformId>3</PlatformId>
      <IsPause>0</IsPause>
      <IsGuest>0</IsGuest>
      <SessionId>6DEnlUZwRu8=</SessionId>
      <SessionToken>1fe2965858901bdd4a70a36f629843753cf02adb</SessionToken>
      <Timestamp>1559288984</Timestamp>
      <Ip>55.55.55.55</Ip>
      <CurrentHalfStar>2</CurrentHalfStar>
      <CurrentRank>1</CurrentRank>
      <UserMissionProgesses></UserMissionProgesses>
      <UncompletedGameLength>0</UncompletedGameLength>
      <Settings><![CDATA[<UserSettings><Controls></Controls><IsCustomControls>false</IsCustomControls><CountryCode></CountryCode><MusicVolume>0.5</MusicVolume><Speed>0</Speed><UseBlockStarDeluxe>false</UseBlockStarDeluxe><UseGhost>true</UseGhost><UseGrid>true</UseGrid><UseHold>true</UseHold><Volume>0.5</Volume><VoiceVolume>0.5</VoiceVolume><LoginCount>0</LoginCount><Sprint5PRank>1</Sprint5PRank><Sprint5PHalfStars>4</Sprint5PHalfStars><RealBattleRank>1</RealBattleRank><RealBattleStars>2</RealBattleStars><BattleMapId>0</BattleMapId><RealBattle6pRank>-1</RealBattle6pRank><RealBattle6pStars>4</RealBattle6pStars><RushHalfStars>4</RushHalfStars><RushRank>-1</RushRank><Battle6pMapId>0</Battle6pMapId><RushMapId>0</RushMapId><MonoGarbageLevel>0</MonoGarbageLevel><MonoStartLevel>1</MonoStartLevel><MonoIsModeA>true</MonoIsModeA><CurArr>9006</CurArr><CurDas>9000</CurDas><UseIhs>false</UseIhs><UseIrs>false</UseIrs><CurArenaLobbyBG>8100</CurArenaLobbyBG></UserSettings>]]></Settings>
    </GameStartRQ>
  RESPONSE
    ???

POST
  FORM DATA
    <UpdateUserOpenWebSettingsRQ>
      <SessionId>6DEnlUZwRu8=</SessionId>
      <SessionToken>6674c64ac5f50a3fec3ba29f8d0b1038b1d7e54d</SessionToken>
      <Timestamp>1559289515</Timestamp>
      <LoginId>0</LoginId>
      <Settings><![CDATA[<UserSettings><Controls></Controls><IsCustomControls>false</IsCustomControls><CountryCode></CountryCode><MusicVolume>0.5</MusicVolume><Speed>0</Speed><UseBlockStarDeluxe>false</UseBlockStarDeluxe><UseGhost>true</UseGhost><UseGrid>true</UseGrid><UseHold>true</UseHold><Volume>0.5</Volume><VoiceVolume>0.5</VoiceVolume><LoginCount>0</LoginCount><Sprint5PRank>1</Sprint5PRank><Sprint5PHalfStars>4</Sprint5PHalfStars><RealBattleRank>1</RealBattleRank><RealBattleStars>2</RealBattleStars><BattleMapId>0</BattleMapId><RealBattle6pRank>-1</RealBattle6pRank><RealBattle6pStars>4</RealBattle6pStars><RushHalfStars>4</RushHalfStars><RushRank>-1</RushRank><Battle6pMapId>0</Battle6pMapId><RushMapId>0</RushMapId><MonoGarbageLevel>0</MonoGarbageLevel><MonoStartLevel>1</MonoStartLevel><MonoIsModeA>true</MonoIsModeA><CurArr>9006</CurArr><CurDas>9000</CurDas><UseIhs>false</UseIhs><UseIrs>false</UseIrs><CurArenaLobbyBG>8100</CurArenaLobbyBG></UserSettings>]]></Settings>
      <CurrentMinoId>0</CurrentMinoId>
      <CurrentGhostId>1</CurrentGhostId>
      <CurrentSfxId>3000</CurrentSfxId>
      <CurrentVoxId>4000</CurrentVoxId>
      <Ip>127.0.0.1</Ip>
    </UpdateUserOpenWebSettingsRQ>
  RESPONSE
    <UpdateUserOpenWebSettingsRS><Success /></UpdateUserOpenWebSettingsRS>

POST
  FORM DATA
    unknown encrypted data (related to opening the "My Tetris Style" window or purchasing something?)
  RESPONSE
    <UserAccessoriesRS><Success /><UserAccessories><UserAccessory><Id>3994496</Id><UserId>3434706</UserId><Count>1</Count><OrigCount>1</OrigCount><DatePurchased>2013-01-18 00:00:00.0</DatePurchased><DateExpires></DateExpires><Accessory><Id>8</Id><IsNew>false</IsNew><Name>Fusion</Name><Description><![CDATA[This Mino Style can be used in all our Tetris Games except 1989, N-Blox, and Rally 8P.]]></Description><PriceInPoints>0</PriceInPoints><Type>1</Type><MaxCount>1</MaxCount></Accessory></UserAccessory><UserAccessory><Id>3452916</Id><UserId>3434706</UserId><Count>1</Count><OrigCount>1</OrigCount><DatePurchased>2012-06-04 00:00:00.0</DatePurchased><DateExpires></DateExpires><Accessory><Id>15</Id><IsNew>false</IsNew><Name>Classic</Name><Description><![CDATA[This Mino Style can be used in all our Tetris Games except 1989, N-Blox, and Rally 8P.]]></Description><PriceInPoints>0</PriceInPoints><Type>1</Type><MaxCount>1</MaxCount></Accessory></UserAccessory><UserAccessory><Id>3919921</Id><UserId>3434706</UserId><Count>1</Count><OrigCount>1</OrigCount><DatePurchased>2012-12-17 00:00:00.0</DatePurchased><DateExpires></DateExpires><Accessory><Id>1036</Id><IsNew>false</IsNew><Name>Invisible Mino</Name><Description><![CDATA[This Mino Style can be used in all our Tetris Games except 1989, Battle 2P, Battle 6P, Rally 8P, Sprint 5P, Tetris Arena and N-Blox.]]></Description><PriceInPoints>0</PriceInPoints><Type>1</Type><MaxCount>1</MaxCount></Accessory></UserAccessory><UserAccessory><Id>3984947</Id><UserId>3434706</UserId><Count>1</Count><OrigCount>1</OrigCount><DatePurchased>2013-01-14 00:00:00.0</DatePurchased><DateExpires></DateExpires><Accessory><Id>1051</Id><IsNew>false</IsNew><Name>Atari</Name><Description><![CDATA[This Mino Style can be used in all our Tetris Games except 1989, N-Blox, and Rally 8P.]]></Description><PriceInPoints>0</PriceInPoints><Type>1</Type><MaxCount>1</MaxCount></Accessory></UserAccessory><UserAccessory><Id>3660374</Id><UserId>3434706</UserId><Count>1</Count><OrigCount>1</OrigCount><DatePurchased>2012-09-01 00:00:00.0</DatePurchased><DateExpires></DateExpires><Accessory><Id>2009</Id><IsNew>false</IsNew><Name>Mesh</Name><Description><![CDATA[This Ghost Style can be used in all our Tetris Games except 1989, N-Blox, and Rally 8P.]]></Description><PriceInPoints>0</PriceInPoints><Type>2</Type><MaxCount>1</MaxCount></Accessory></UserAccessory><UserAccessory><Id>3452534</Id><UserId>3434706</UserId><Count>50</Count><OrigCount>1000</OrigCount><DatePurchased>2012-06-04 00:00:00.0</DatePurchased><DateExpires></DateExpires><Accessory><Id>8003</Id><IsNew>false</IsNew><Name>Arena Armor</Name><Description><![CDATA[Battle opponents without fear by shielding yourself from negative rating points!<br/>Protect yourself up to 1000 HP and never rank down again!<br/><FONT COLOR='#ff0000'>Max value is 1000 HP.</FONT>]]></Description><PriceInPoints>0</PriceInPoints><Type>8</Type><MaxCount>1000</MaxCount></Accessory></UserAccessory><UserAccessory><Id>6898703</Id><UserId>3434706</UserId><Count>1</Count><OrigCount>1</OrigCount><DatePurchased>2019-05-31 00:00:00.0</DatePurchased><DateExpires></DateExpires><Accessory><Id>9001</Id><IsNew>false</IsNew><Name>DAS(Level 2)</Name><Description><![CDATA[Delayed Auto Shift alters the time your Tetrimino pauses after an initial movement.<br/>All variants affected except N-Blox, 1989, and Rally 8P.]]></Description><PriceInPoints>0</PriceInPoints><Type>9</Type><MaxCount>1</MaxCount></Accessory></UserAccessory></UserAccessories><CurrentlySetAccessories><CurrentGhostId>2009</CurrentGhostId><CurrentMinoId>8</CurrentMinoId><CurrentSfxId>3000</CurrentSfxId><CurrentVoxId>4001</CurrentVoxId></CurrentlySetAccessories><UserSettings><Controls>37,39,32,40,88,90,67,27,86,13</Controls><IsCustomControls>true</IsCustomControls><CountryCode></CountryCode><MusicVolume>0</MusicVolume><Speed>0</Speed><UseBlockStarDeluxe>false</UseBlockStarDeluxe><UseGhost>true</UseGhost><UseGrid>false</UseGrid><UseHold>true</UseHold><Volume>0</Volume><VoiceVolume>0</VoiceVolume><LoginCount>0</LoginCount><Sprint5PRank>1</Sprint5PRank><Sprint5PHalfStars>4</Sprint5PHalfStars><RealBattleRank>11</RealBattleRank><RealBattleStars>2</RealBattleStars><BattleMapId>0</BattleMapId><RealBattle6pRank>6</RealBattle6pRank><RealBattle6pStars>4</RealBattle6pStars><RushHalfStars>4</RushHalfStars><RushRank>-1</RushRank><Battle6pMapId>0</Battle6pMapId><RushMapId>0</RushMapId><MonoGarbageLevel>0</MonoGarbageLevel><MonoStartLevel>10</MonoStartLevel><MonoIsModeA>true</MonoIsModeA><CurArr>9006</CurArr><CurDas>9000</CurDas><UseIhs>false</UseIhs><UseIrs>false</UseIrs><CurArenaLobbyBG>8100</CurArenaLobbyBG></UserSettings><AccessoriesIDoNotOwn></AccessoriesIDoNotOwn></UserAccessoriesRS>

POST
  FORM DATA
    <GameStartRQ><LoginId>942</LoginId><ExternalId>7337412</ExternalId><ProductId>100</ProductId><PlatformId>3</PlatformId><IsPause>0</IsPause><IsGuest>0</IsGuest><SessionId>C0ysbw3sHec=</SessionId><SessionToken>7cb3b14cea0fe2bac3a99bf22ab77a07c662d3cc:fcf4c96a0b57f6637cde90a71246e77a7fdb196f</SessionToken><Timestamp>1559311114</Timestamp><Ip>155.4.246.168</Ip><CurrentHalfStar>4</CurrentHalfStar><CurrentRank>1</CurrentRank><UserMissionProgesses></UserMissionProgesses><UncompletedGameLength>0</UncompletedGameLength><Settings><![CDATA[<UserSettings><Controls></Controls><IsCustomControls>false</IsCustomControls><CountryCode></CountryCode><MusicVolume>0.5</MusicVolume><Speed>0</Speed><UseBlockStarDeluxe>false</UseBlockStarDeluxe><UseGhost>true</UseGhost><UseGrid>false</UseGrid><UseHold>true</UseHold><Volume>0.5</Volume><VoiceVolume>0.5</VoiceVolume><LoginCount>0</LoginCount><Sprint5PRank>1</Sprint5PRank><Sprint5PHalfStars>4</Sprint5PHalfStars><RealBattleRank>1</RealBattleRank><RealBattleStars>3</RealBattleStars><BattleMapId>0</BattleMapId><RealBattle6pRank>-1</RealBattle6pRank><RealBattle6pStars>4</RealBattle6pStars><RushHalfStars>4</RushHalfStars><RushRank>-1</RushRank><Battle6pMapId>0</Battle6pMapId><RushMapId>0</RushMapId><MonoGarbageLevel>0</MonoGarbageLevel><MonoStartLevel>1</MonoStartLevel><MonoIsModeA>true</MonoIsModeA><CurArr>9006</CurArr><CurDas>9000</CurDas><UseIhs>false</UseIhs><UseIrs>false</UseIrs><CurArenaLobbyBG>8100</CurArenaLobbyBG></UserSettings>]]></Settings></GameStartRQ>
  RESPONSE
    <GameStartRS><Success /><GameToken>B2olyYk36Q57QpBVmEd6lQ==</GameToken><Points>570</Points><Rubies>0</Rubies></GameStartRS>

POST
  FORM DATA
    encrypted
  RESPONSE
    <CreateBattleBucketGameRecordRS><Success /><Points>580</Points><Rubies>0</Rubies><UserMissions></UserMissions></CreateBattleBucketGameRecordRS>

<CreateBattleBucketGameRecordRQ>
    <SessionId>EVr6CkK3Rmv=</SessionId>
    <SessionToken>90323fc1a49561cee5d759cf1be0b6d6f82d2b43:e0f13152c467da4008f831d73a7a6945c9de8e26</SessionToken>
    <Timestamp>1559309199</Timestamp>
    <GameToken></GameToken>
    <LoginId>9618</LoginId>
    <RegionId>1</RegionId>
    <PauseTimeInMs>2991</PauseTimeInMs>
    <UserMissionIds></UserMissionIds>
    <UserMissionProgesses></UserMissionProgesses>
    <SaveGameRecord>false</SaveGameRecord>
    <WonGame>false</WonGame>
    <WonByKO>false</WonByKO>
    <WonBy3KO>false</WonBy3KO>
    <TiedGame>false</TiedGame>
    <CurrentHalfStar>2</CurrentHalfStar>
    <CurrentRank>1</CurrentRank>
    <Ip>55.55.55.55</Ip>
    <PointHistories></PointHistories>
    <BattleGameRecord>
        <UserId>7296827</UserId>
        <ExternalUserId>7296827</ExternalUserId>
        <PlatformId>3</PlatformId>
        <Bucket>1</Bucket>
        <BucketIndex>0</BucketIndex>
        <LinesCleared>0</LinesCleared>
        <MaxCombos>0</MaxCombos>
        <Tetris>0</Tetris>
        <B2B>0</B2B>
        <GameData><![CDATA[ s7QDwAAAU9IiLgAR0NQAAAAAAEAAAAFAQEAAAAPAAAAAAAAAA9TtYcJAAAIzQAAAAAAAAABAAAAAAAAAAAAAAABAAAAAAAAC7gAAA hAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB42iWQPUvDUBSG3/uRNK03mEpF26FeatWgS0E6KCq3pUN1itLBweE6iU6ii9QlFYcOTtJFKBJd7OhPCA4iRRykg4NDF8XRn2Bi1/c8POc9p HtSABpy0hYNjgxaYIxTg3DNBLckkmZ4mNSWPDA3y0aWnjCJmocogwqFRYcpBnGqwrtSDOjeEWRnzoKInKCOMeo7cG6BPZ7qBXBbEV0OhWNDLR3Y6Ip/I74wj0wD43HRebdloib7ZMaRR0h0Q3zbk1Tb7lD2wI 8dnni109C3lw4BqOxC D0fJy1w/DpHrzUlKTwMT4qSyzFTXR6gYZNWQQsIvqaHbKn4vSnJ pSOoL5L/Vlnnil FehBzTWH8dVbEjXuOwwKKloyp5OAjZx8AMqNfskt7SFf5JByY02VhlcepiMPmM2LidBEEJ5zekl 2PyEx0q45fAvMP/5BNlw==]]></GameData>
        <DateEntered></DateEntered>
        <CurrentGhost>1</CurrentGhost>
        <CurrentMino>0</CurrentMino>
        <CurrentTheme>0</CurrentTheme>
        <Tetriminos>13</Tetriminos>
        <GarbageLinesSent>0</GarbageLinesSent>
        <TSpins>0</TSpins>
        <TSpinMinis>0</TSpinMinis>
        <TSpinSingles>0</TSpinSingles>
        <TSpinDoubles>0</TSpinDoubles>
        <TSpinTriples>0</TSpinTriples>
        <PerfectClears>0</PerfectClears>
        <TimeInMS>2253</TimeInMS>
        <AvatarURL>0.gif</AvatarURL>
        <Username>555</Username>
        <Singles>0</Singles>
        <Doubles>0</Doubles>
        <Triples>0</Triples>
        <KOs>0</KOs>
        <Holds>0</Holds>
        <Combos>0</Combos>
    </BattleGameRecord>
</CreateBattleBucketGameRecordRQ>


  */

  ?>
