<?php 
    session_start();

    if (! $_SESSION['logged_in_user']) {
        $info = "You are not logged in.";
        header("Location: /php/login/login.php");
    } else {
        $info = $_SESSION['logged_in_user'];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title></title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="/bootstrap-3.3.6-dist/css/bootstrap.css">
		<style>
			body {
				background-color: green;
				color: white;
                text-align: center;
			}
		</style>
    </head>
	
    <body>
        <div class="container">
            <h1>YOU HAVE ENTERD A SUPER SECRET AREA!<br><br><br>GET OUT<br>OR DIE!!!!!!</h1>

            <h3>Username: <?= htmlspecialchars(strip_tags($info)); ?></h3>

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
