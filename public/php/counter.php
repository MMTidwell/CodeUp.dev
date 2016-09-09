<!-- 
√ - In HTML 2 links
	√ - Up
	√ - Down
√ - Heading that shows number rep the current counter value (starts at 0)
√ - Up and Down links send GET request back to the counter page
√ - Create function with _GET that should determine the new counter value and return it
√ - Use extract() function to change the return value of the pageController() into the variables for your HTML
 -->

 <?php  
	 // main function to call when pulling PHP into HTML
 	function pageController() {
 		// empty array used fro extract(). This will turn keys into variables
 		$data = [];

 		// uses _GET request to see if counter is set in url
 		if (isset($_GET['counter'])) {
 			$data['counter'] = $_GET['counter'];
 		} else {
 			$data['counter'] = 0;
 		}

 		// uses data array to move counter up and down
 		$data['up'] = $data['counter'] + 1;
 		$data['down'] = $data['counter'] - 1;

 		return $data;
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
 
         <title>Counter</title>
 
         <!-- Bootstrap core CSS -->
         <link rel="stylesheet" href="/bootstrap-3.3.6-dist/css/bootstrap.css">

         <style>
         	body {
         		background-color: hotpink;
         		color: white;
         		text-align: center;
         	}

         	.glyphicon {
			    font-size: 50px;
			}
		</style>

     </head>
 
     <body>
 		<div class="container">
 			<!-- $counter prints the count number in the h1 element -->
 			<h1>Current Count: <?= $counter; ?></h1>

 			<!-- use this href style if moving from one file to another -->
 			<a class="glyphicon glyphicon-circle-arrow-up" href="/php/counter.php?counter=<?= $up; ?>"></a> 
 			<!-- use this href style if staying in the same page -->
 			<a class="glyphicon glyphicon-circle-arrow-down" href="?counter=<?= $down; ?>"></a> 

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