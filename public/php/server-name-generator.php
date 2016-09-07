<!-- 
√ - create 2 arrays
	√ - 10 adjectives
	√ - 10 nouns
√ - create function that returns a random element from an arrays
√ - create function that returns the string value of our new server name by combining a rand adj and rand noun
√ - new result when page refreshes
√ - add css and bootstarp to make fancy
 -->

<?php 
	$adj = array("Grumpy", "Modern", "Testy", "Bad", "Bitter", "Itchy", "Old", "Damp", "Spicey", "Ratty");
	$noun = array("Snail", "Ghost", "Smoke", "Sticks", "Umbrella", "Seed", "Quill", "Building", "Lace", "Giant");

// function that returns a random element from each element
	function randInsult($adj, $noun) {
		// rand adj
		echo $adj[array_rand($adj)] . PHP_EOL;
		// rand noun
		echo $noun[array_rand($noun)] . PHP_EOL;
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>Random Gen</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="/bootstrap-3.3.6-dist/css/bootstrap.css">

        <style>
			body {
				background-color: black;
				color: white;
				text-align: center;
				margin-top: 5%;
			}

			h1 {
				font-family: comic; 
				font-size: 6em;
				border-style: inset;
			}

        </style>

    </head>
    <body>
		<div class="container">	
			<h3>Your server name is:</h3>		
			<h1>
				<?php randInsult($adj, $noun);?>
			</h1>
			<h3><a type="button" onclick="location.reload()">Generate a new server name</a></h3>	
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