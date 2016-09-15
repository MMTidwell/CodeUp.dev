<?php 

	require_once __DIR__ . "/Log.php";

	class Auth 
	{
		// This value is the string 'password' but hashed!
		public static $correctPassword = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

		// checking the username and password 
		public static function attempt($username, $password) 
		{
			$log = new Log();
			
			if ($username == 'guest' && password_verify($password, self::$correctPassword)) {
				$_SESSION['logged_in_user'] = $username;
				$log->info("User $username logged in.");
				return true;
			} else {
				$log->info("User $username failed to log in.");
				return false;
			}
		}

		public static function check() {
			// Auth::check() will return a boolean whether or not a user is logged in.
			return isset($_SESSION['logged_in_user']);
		}

		public static function user() {
			// Auth::user() will return the username of the currently logged in user.
			return $_SESSION['logged_in_user'];
		}

		public static function logout() {
			// Auth::logout() will end the session, just like we did in the sessions exercise.
			session_unset();
			session_destroy();
			session_regenerate_id();
			session_start();
			die();
		}
	}

