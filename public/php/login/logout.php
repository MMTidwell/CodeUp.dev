<?php 
	// session start needs to be here so it can pick up where it left off
	session_start();

	// it is better to use all four session elements when logging someone out. doing just the 2 step method is not going to be as strong for your client
	function clearSession() {
		// clear session array
		session_unset();
		// delete session data on the server
		session_destroy();
		// delete session data on server and send client new cookie
		// if you are using the shorthand way put true as a perpetrator
		session_regenerate_id();
		// stats new session
		session_start();
		// takes you to the login page so you can log back in
		header('Location: /php/login/login.php');
		die();
	}

	// run the clearSession function
	clearSession();
?>
