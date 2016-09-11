<?php 
	function clearSession() {
		// clear session array
		session_unset();

		// delete session data on server and send client new cookie
		session_regenerate_id(true);
	}

	session_start();

	if (isset($_POST['reset'])) {
		if ($_POST['reset'] == 'counter') {
			unset($_SESSION['view_count']);
		} elseif ($_POST['rest'] == 'session') {
			clearSession();
		}
	}

	header('Location: /php/login/login.php')
?>
