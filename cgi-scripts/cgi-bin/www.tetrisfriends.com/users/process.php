<?php
  /* by obelisk */
	
	/** I wish I knew a cleaner way of doing this). */
	$backendPath = '../../api.tetrisfriends.com/_backend';
	
	include_once $backendPath.'/users.php';
	include_once $backendPath.'/session.php';

	// Start/Continue a session
	// (This makes it possible to easily store data for this "session")
	sessionStart();

	switch ($_SERVER['REQUEST_METHOD']) {
		case 'GET':
			if (array_key_exists('logout', $_GET)) { // (Log out)
				if (sessionGet('user_id') !== NULL) { // (Is logged in)
					sessionSet('user_id', NULL);
				}
				// Redirect to the game
				header('Location: http://www.tetrisfriends.com/games/Battle2P/game.php');
			}
			break;
		case 'POST':
			/*
			// Show all posted values
			foreach ($_POST as $key => $value) {
				echo htmlspecialchars($key)." = ".htmlspecialchars($value)."<br>";
			}
			*/
			if (getPost('login')) { // (Log in)
				// Find the user with the same username
				$username = getPost('username');
				$user = findUser(function($user, $user_id) use ($username) {
					return $username === (string)$user->username;
				});
				if ($user) { // (Login Successful)
					// Set session user id
    			sessionSet('user_id', (integer)$user->id);
					// Redirect to the game
					header('Location: http://www.tetrisfriends.com/games/Battle2P/game.php');
				} else { // (Login Failed)
					// Add login error
					$login_errors = sessionGet('login_errors');
					$login_errors[] = 'LOGIN_FAIL';
					sessionSet('login_errors', $login_errors);
					// Redirect to the login page
					header('Location: http://www.tetrisfriends.com/users/login.php');
				}
			} else if (getPost('register')) { // (Register)
				/*
				guestId = 47528582
				saveGame = true
				register = 1
				token = 5de08be319336821144c4876010e9355079b3f516e20ef6c9d4a1dd8453a13da
				username = 123
				username_selection = 1
				*/
				$username = getPost('username');
				// Check if username is valid
				if ($username !== '') {
					// Check if the username is already in use
					$user_same_name = findUser(function($user, $user_id) use ($username) {
						return $username === (string)$user->username;
					});
					if (!$user_same_name) { // (Username is available)
						// Create user
						$user = new SimpleXMLElement(createUserString(
							firstAvailableUserId(),
							htmlspecialchars($username),
							sessionGenerateSessionID(),
							random_int(1, 100)
						));
						saveUser($user);
						// Set session user id
						sessionSet('user_id', (integer) $user->id);
						// Redirect to the game
						header('Location: http://www.tetrisfriends.com/games/Battle2P/game.php');
					} else { // (User already exists)
						// Add register error
						$register_errors = sessionGet('register_errors');
						$register_errors[] = 'USERNAME_TAKEN';
						sessionSet('register_errors', $register_errors);
						// Redirect to the register page
						header('Location: http://www.tetrisfriends.com/users/register.php');
					}
				} else { // (Username is invalid)
					// Add register error
					$register_errors = sessionGet('register_errors');
					$register_errors[] = 'USERNAME_INVALID';
					sessionSet('register_errors', $register_errors);
					// Redirect to the register page
					header('Location: http://www.tetrisfriends.com/users/register.php');
				}
			}
			break;
	}

	?>
