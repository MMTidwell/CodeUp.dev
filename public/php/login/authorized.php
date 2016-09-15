<?php 
    // session_start has to go at the top of all things
    session_start();

    // pull in funcitons file
    require_once __DIR__ . "/../functions.php";
    require_once __DIR__ . "/../../../Auth.php";

    function pageController() {
        // check if the user is not logged in
        if (Auth::check() == false) {
            // if not send back to login.php
            header("Location: /php/login/login.php");
            die;
        // else load page normally
        }
        $info['username'] = Auth::user();
        return $info;
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

        <title>AUTHO PHP</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="/bootstrap-3.3.6-dist/css/bootstrap.css">
		<style>
			body {
				background-color: green;
				color: white;
                text-align: center;
			}

            h1 {
                font-family: cursive;
                font-weight: bolder;
            }
		</style>
    </head>
	
    <body>
        <div class="container">
            <h1>YOU HAVE ENTERD A SUPER SECRET AREA!<br><br><br>GET OUT<br>OR DIE!!!!!!</h1>

            <h3>Username: <?= escape($username); ?></h3>

            <a href="/php/login/logout.php"><button>Log Out</button></a>
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
