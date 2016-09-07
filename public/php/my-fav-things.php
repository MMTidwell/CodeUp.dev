<!-- 
√ - create an array of fav things (at least 5 things)
√ - loop through each item inside HTML
	√ - use HTML table for display
	√ - use CSS to add a light gray background on every other row
-->

<?php 
	$myFavThings = array("Tim", "Marley", "Uni", "Car", "Fashion", "Code");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>My Fav Things</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="/bootstrap-3.3.6-dist/css/bootstrap.css">

        <style>
        	table, th, td {
				border: 1px solid black;
				text-align: center;
				padding: 2%;
				width: 40%;
				margin: 0 auto;
                font-size: 1.5em;
				margin-top: 5%;
        	}

        	tbody tr:nth-child(even) {
			   background-color: #ccc;
			}

            td {
                font-weight: lighter;
            }
        </style>
    </head>

    <body>
		<div class="container">
			<table>
				<th>My fav things!</th>
					<?php foreach ($myFavThings as $things) { ?>
						<tr><td><?php echo $things . PHP_EOL; ?></td></tr>
					<?php } ?>
			</table>
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