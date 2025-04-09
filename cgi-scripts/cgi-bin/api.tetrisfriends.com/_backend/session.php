<?php
  /**
   * This file contains code for session management.
   * This is meant to be used by "www.tetrisfriends.com" exclusively (since it's the only site that uses sessions).
   * 
   * by obelisk
   */

  include_once 'utils.php';

  /** Start new or resume existing session. */
  function sessionStart() {
    if (session_status() === PHP_SESSION_NONE) { session_start(); }
    // Initialize session variables
    sessionInit('login_errors',    array()); // Errors to show at the login page.
    sessionInit('register_errors', array()); // Errors to show at the register page.
    //sessionInit('session_id',   sessionGuestSessionID()); // ID of the session (resets on every login).
    sessionInit('user_id',         NULL);    // User ID. NULL while not logged in.
    sessionInit('tf_uid',          123);     // TetrisFriends Unique/User/Universal ID (maybe? idk what its for really, maybe ads)
  }

  /**
   * Get the value of a session variable.
   * @param string Key of a "session variable".
   * @param mixed Default return value.
   * @return mixed Value of the session variable with the given key (or the default value if the key was not found).
   */
  function sessionGet($key, $defVal = NULL) {
    return array_key_exists($key, $_SESSION) ? $_SESSION[$key] : $defVal;
  }

  /**
   * Set the value of a session variable.
   * @param string Key of a session variable.
   * @param mixed Value to set.
   */
  function sessionSet($key, $value) {
    $_SESSION[$key] = $value;
  }

  /**
   * Set the value of a session variable if it has not already been set.
   * @param string Key of a session variable.
   * @param mixed Value to set.
   */
  function sessionInit($key, $value) {
    if (!array_key_exists($key, $_SESSION)) { $_SESSION[$key] = $value; }
  }

  /**
   * Generate a new session ID (11 random base64 characters followed by an equals sign).
   * @return string New random sessions ID (string).
   */
  function sessionGenerateSessionID() {
    return random_str(11).'=';
  }

  /** Session ID for guests. */
  function sessionGuestSessionID() {
    return 'u7tpFP8R0Cg=';
  }

  /**
   * Generate a new session token (40 random hex characters for guests, two sets of 40 random hex characters separated by a colon for users).
   * @param bool If the token should be generated for a logged in user (otherwise it's for a guest). Defaults to false.
   * @return string New random sessions token (string).
   */
  function sessionGenerateToken($logged_in = false) {
    if ($logged_in) { return random_str_hex(40).':'.random_str_hex(40); }
    else            { return random_str_hex(40); }
  }

  /**
   * Generate a new login id (4 random digits if logged in, a zero if not)
   * @param bool If the id should be generated for a logged in user (otherwise it's for a guest). Defaults to false.
   * @return string New random login id (string).
   */
  function sessionGenerateLoginID($logged_in = false) {
    return ($logged_in) ? random_str(4, '0123456789') : '0';
  }
