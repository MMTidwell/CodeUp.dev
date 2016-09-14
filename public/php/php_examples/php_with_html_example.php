<?php 
	// basic PHP variable
	$message = 'Hello Codeup';
	$showMessage = false;
	// basic PHP array, called in 2 different ways
	$favoriteFoods = ['Brownies', 'Pound Cake', 'Dough-nuts'];
	$items = array('Item One', 'Item Two', 'Item Three');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>PHP-WITH-HTML-EX</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="/bootstrap-3.3.6-dist/css/bootstrap.css">
    </head>

    <body>
    	<!-- '=' is shorthand for echo -->
    	<!-- dont forget your PHP syntax as it will still throw errors -->
		<h1><?= $message; ?></h1>

		<!-- SHOWN CONDITIONALY -->
		<?php if ($showMessage) { ?>
	        <h1><?php echo $message; ?></h1>
	    <?php } else { ?>
	        <h1>Sorry, no message...</h1>
	    <?php } ?>
		
		<!-- PHP FOREACH LOOP -->
		<?php foreach ($favoriteFoods as $favoriteFood) { ?>
			<li><?= $favoriteFood; ?></li>
		<?php } ?>

		<!-- PHP FOREACH LOOP WITH SHORTHAND -->
		<?php foreach ($items as $items): ?>  
			<li><?= $item; ?></li>
		<?php endforeach; ?>

   


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
