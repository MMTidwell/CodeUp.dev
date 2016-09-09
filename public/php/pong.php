<!-- 
- Both Pages
	- 2 links
		- Hit
			- if hit the counter increases 
		- Miss
			- if missed then counter goes back to 0 and game is over
		- Links should go to the other page (ping -> pong, vice versa)
		- Each query string should include if it was a hit or miss and the current count of hits
	- pageController() - holds all of our PHP
		- access to the $_GET super-global variable and check the values stored
		- increase the counter when hit and decrees when missed
	- extract()
		- change the return values of the pageController into variables
- Extra
	- images
	- random gen for hit/miss
	- use CSS and JS to randomly move the hit/miss 
 -->

<?php  
	function pageController() {

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

        <title></title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="/bootstrap-3.3.6-dist/css/bootstrap.css">
    </head>

    <body>

   


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