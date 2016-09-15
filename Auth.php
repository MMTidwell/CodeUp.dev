<?php 

	require_once __DIR__ . "/Log.php";

	class Auth 
	{
		// This value is the string 'password' but hashed!
		public static $correctPassword = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

		public static function attempt($username, $password) 
		{
			// creates a new instance of Log
			$log = new Log();
			
			// checking the username and password are correct
			if ($username == 'guest' && password_verify($password, self::$correctPassword)) {
				// assigns session key to username once logged in
				$_SESSION['logged_in_user'] = $username;
				// runs info function in Log.php 
				$log->info("User $username logged in.");
				// returns true to login.php pageController function
				return true;
			} else {
				$log->info("User $username failed to log in.");
				return false;
			}
		}

		public static function check() {
			// checks if the user is logged in or not, send boolean back to authorized.php, pageController()
			return isset($_SESSION['logged_in_user']);
		}

		public static function user() {
			// returns the username of the currently logged in user.
			return $_SESSION['logged_in_user'];
		}

		public static function logout() {
			// clear session array
			session_unset();
			// delete session data on the server
			session_destroy();
			// delete session data on server and send client new cookie
			// if you are using the shorthand way put true as a perpetrator
			session_regenerate_id();
			// stats new session
			session_start();
		}
	}

