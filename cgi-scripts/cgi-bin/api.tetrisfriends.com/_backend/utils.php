<?php
  /**
   * This file contains utility code used by the other php scripts.
   * 
   * by obelisk
   */

  /**
   * Generate a random string of characters for a set of characters.
   * @param int Length of the string to generate.
   * @param string Set of characters to pick from (defaults to base64 [0-9a-zA-Z]).
   */
  function random_str($length, $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ') {
    return substr(str_shuffle(str_repeat($x = $chars, ceil($length / strlen($x)))), 1, $length);
  }
  
  /**
   * Generate a random string of hex characters (0-9a-f).
   * @param int Length of the string to generate.
   * @return string Random string.
   */
  function random_str_hex($length) {
    return random_str($length, '0123456789abcdef');
  }
  
  /**
   * Convert a string to a bool.
   * @param string String to convert ("true" or "false").
   * @param bool Value to return in case "str" is neither "true" or "false" (defaults to false).
   * @return string Converted string.
   */
  function string_to_bool($str, $defVal = false) {
    if ($str === 'true' ) { return true;  }
    if ($str === 'false') { return false; }
    return $defVal;
  }
  
  /**
   * Get the value of a get variable.
   * @param string Key of a "get variable".
   * @param mixed Default return value.
   * @return mixed Value of the get variable with the given key (or the default value if the key was not found).
   */
  function getGet($key, $defVal = NULL) {
    return array_key_exists($key, $_GET) ? $_GET[$key] : $defVal;
  }
  
  function getPost($key, $defVal = NULL) {
    return array_key_exists($key, $_POST) ? $_POST[$key] : $defVal;
  }
  
  /** Disable the automatic rendering of PHP errors. */
  function hideErrors() {
    error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
  }
