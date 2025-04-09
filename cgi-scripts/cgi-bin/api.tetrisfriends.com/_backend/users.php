<?php
  /** 
   * This file contains code for managing user accounts.
   * 
   * by obelisk
   */

  /**
   * Create a new user xml string.
   * @param string The user ID of the user.
   * @param string Username of the user.
   * @param string Session ID of the user.
   * @param int ID of the avatar the user has.
   * @param int Number of coins the user has.
   * @param int Number of rubies the user has.
   */
  function createUserString($id = '', $username = '', $session_id = '', $avatar = 0, $coins = 0, $rubies = 0, $half_stars = 4, $rank = 1) {
    return (
      '<user>'.
        '<id>'. $id .'</id>'.
        '<username>'. $username .'</username>'.
        '<session_id>'. $session_id .'</session_id>'.
        '<avatar>'. $avatar .'</avatar>'.
        '<coins>'. $coins .'</coins>'.
        '<rubies>'. $rubies .'</rubies>'.
        '<profile>'.
          '<gender>Male</gender>'. // (Male / Female)
          '<age>18</age>'.
          '<province>??</province>'.
          '<country>??</country>'.
          '<message>Hello!</message>'.
        '</profile>'.
        '<games>'.
          '<battle2p>'.
            '<half_stars>'. $half_stars .'</half_stars>'.
            '<rank>'. $rank .'</rank>'.
          '</battle2p>'.
        '</games>'.
      '</user>'
    );
  }

  function createUserSettingsString() {
    return (
      '<UserSettings>'.
        '<Controls></Controls>'.
        '<IsCustomControls>false</IsCustomControls>'.
        '<CountryCode></CountryCode>'.
        '<MusicVolume>0.5</MusicVolume>'.
        '<Speed>0</Speed>'.
        '<UseBlockStarDeluxe>false</UseBlockStarDeluxe>'.
        '<UseGhost>true</UseGhost>'.
        '<UseGrid>false</UseGrid>'.
        '<UseHold>true</UseHold>'.
        '<Volume>0.5</Volume>'.
        '<VoiceVolume>0.5</VoiceVolume>'.
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
      '</UserSettings>'
    );
  }

  /**
   * Save a user to its file.
   * @param user User XML object to save.
   */
  function saveUser($user) {
    try {
      // @TODO Check if the user object is valid
      // Get users id
      $id = (int)$user->id;
      // Formal XML to indent child elements instead of having everything on a single line
      $dom = new DOMDocument('1.0');
      $dom->preserveWhiteSpace = false;
      $dom->formatOutput = true;
      $dom->loadXML($user->asXML());
      // Save to file
      $dom->save(getUsersFolder().'/'.$id);
      /*
      $file = fopen(getUsersFolder().'/'.$id, 'w');
      fwrite($file, $user->asXML());
      fclose($file);
      */
      return true;
    } catch (Exception $e) {
      return false;
    }
  }

  /**
   * Load a user from a file.
   * @param int ID of the user to load.
   * @return string The user XML string in the file.
   */
  function loadUser($user_id) {
    // @TODO Check if the user object is valid
    // Find the users file
    try {
      $file_path = getUsersFolder().'/'.$user_id;
      $file = fopen($file_path, 'r');
      $user_string = fread($file, filesize($file_path));
      fclose($file);
      return $user_string;
    } catch (Exception $e) {
      return null;
    }
  }

  /**
   * Check if a user file exists.
   * @param int ID of the user to check.
   * @return bool If the user file exists.
   */
  function userExists($user_id) {
    return file_exists(getUsersFolder().'/'.$user_id);
  }

  /**
   * Find the first available user id.
   * @return int The first available user id (integer >= 0).
   */
  function firstAvailableUserId() {
    if ($handle = opendir(getUsersFolder())) {
      // Index all files in the users folder (that only has numbers in its filename)
      $ids = array();
      while (false !== ($entry = readdir($handle))) {
        if (ctype_digit($entry)) {
          $ids[] = (integer) $entry;
        }
      }
      // Figure out the lowest available user id
      $ids_count = count($ids);
      if ($ids_count === 0) { // (No users)
        return 0;
      } else {
        // Sort the user ids (lowest to highest)
        asort($ids);
        // Check if there could be any gaps in ids
        if ($ids_count - 1 === end($ids)) { // (No gaps)
          return $ids_count;
        } else { // (Gaps)
          // Find the first gap
          $prev_id = 0;
          foreach ($ids as $id) {
            if ($id - $prev_id >= 2) { // (If there is a gap between this and the previous id)
              return $prev_id + 1;
            }
            $prev_id = $id; // Update previous id
          }
        }
      }
      // Done
      closedir($handle);
    }
  }

  /**
   * Find a user using a filter function.
   * The function is called once per user in the user folder or until it returns a "true-y" value.
   * @param function Filter function. fn($user, $user_id) where user is the user's XML object and user_id is their id.
   * @return string The XML string of the user, or NULL if none was found.
   */
  function findUser($fn) {
    $found_user = NULL;
    if ($handle = opendir(getUsersFolder())) {
      // Look through all files in the users folder
      while (false !== ($entry = readdir($handle))) {
        if (ctype_digit($entry)) { // (User files only have numbers in their filenames)
          $user_xml = simplexml_load_string(loadUser($entry));
          $result = $fn($user_xml, (integer) $entry);
          if ($result) { // (If the filter function accepted the user)
            $found_user = $user_xml;
            break;
          }
        }
      }
      // Done
      closedir($handle);
    }
    return $found_user;
  }
  
  /**
   * Get the path of the user folder (where all users are stored).
   * @return string
   */
  function getUsersFolder() {
    return dirname(__FILE__) . '/users';
  }
