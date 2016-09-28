<!-- codeup.dev/php/login/login.php -->

<?php
	// starts the session or resumes and existing one, this must be called before trying to set any session data
	session_start(); 

	// __DIR__ is a constant for the current directory of this script
	// make sure that / is at the beginning of the file name so that way the system reads it correctly
	require_once __DIR__ . "/../functions.php";
    require_once __DIR__ . "/../../../login/Input.php";
    require_once __DIR__ . "/../../../login/Auth.php";


	echo "FUNCTIONS.PHP =>" . __DIR__ . "/../functions.php" . "<br>";
	echo "INPUT.PHP =>" . __DIR__ . "/../../../Input.php" . "<br>";
	echo "AUTH.PHP =>" . __DIR__ . "/../../../Auth.php" . "<br>";

	function pageController() 
	{
		// build empty array so that we can extract it later
		$nope = [];
		// this is here due to calling the variable in the HTML when input is incorrect
		$nope['no'] = '';

		// || is used to ensure that both username and password are filled
		if (!empty($_POST)) {
		// OR
		// if (inputHas('username') || inputHas('password')) 
		// {
			// assigns property to value entered
			$name = Input::get('username');
			$pass = Input::get('password');

			// goes to Auth.php to check if the username and password are correct with the param $name and $pass pulled from Input.php
			if (Auth::attempt($name, $pass) == true) {
				// sends the user to this page
				header("Location: /php/login/authorized.php");
				// kills the login page and turns everything white
				// kills everything else from loading 
				die;
			} else {
				// runs when info is wrong, used in HTML
				$nope['no'] = "OH HELL NO!";	
			}
		}
		return $nope;
	}
	extract(pageController());
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Login</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="/bootstrap-3.3.6-dist/css/bootstrap.css">
		
		<style>
			h2 {
				font-size: 6em;
				text-align: center;
				color: hotpink;
			}
		</style>
    </head>

    <body>
    	<div class="container">
			<h1>Login Form</h1>
			<form method="POST">
				<p>
					<!-- used to tell user that the username and password are not correct -->
					<h2><?= $no; ?></h2>	
					<em>Test with "guest" for username "password" and password.</em>
				</p>
				<p>
					<label for="username">Username</label>
					<input id="username" name="username" type="text" placeholder="Username">
				</p>
				<p>
					<label for="password">Password:</label>
					<input id="password" name="password" type="password" placeholder="Password">
				</p>
				<p>
					<button type="submit">Submit</button>
				</p>
			</form>
	   </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- AJAX and JS
    ================================================== -->
    <!-- bootstarp JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
</html>