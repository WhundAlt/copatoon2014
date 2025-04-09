<?php
  /* by obelisk */

	/** Path of the backend folder (I wish I knew a cleaner way of doing this). */
	$backendPath = '../../../api.tetrisfriends.com/_backend';
	
	include_once $backendPath.'/users.php';
	include_once $backendPath.'/session.php';
  include_once $backendPath.'/utils.php';

  // Disable showing all errors
  hideErrors();
  
  // Try getting the user ID from the get parameter
  $user_id = getGet('id', null);
  if ($user_id === null) {
    // Start/Continue a session
    // (This makes it possible to easily store data for this "session")
    sessionStart();
    // Get user's ID
	  $user_id  = sessionGet('user_id');
  }
  
  // Get user values
	$user     = ($user_id !== NULL) ? simplexml_load_string(loadUser($user_id)) : NULL;
  $gender   = $user ? (string)$user->profile->gender   : '';
  $age      = $user ? (string)$user->profile->age      : '';
  $province = $user ? (string)$user->profile->province : '';
  $country  = $user ? (string)$user->profile->country  : '';
  $message  = $user ? (string)$user->profile->message  : '';
  ?>
<p><?php echo $gender; ?> <?php echo $age; ?> <?php echo $province; ?> <?php echo $country; ?><br /><b><?php echo $message; ?></b></p>
