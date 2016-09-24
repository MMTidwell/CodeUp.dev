<!-- 
Inside ~/vagrant-lamp/sites/codeup.dev/public create a page called national_parks.php that lists the national parks from your database. On each page load, it should retrieve all records from the database and display them.

Modify your query to load only four parks at a time. Use a parameter in $_GET to determine which page the user is on and load only the appropriate parks for that page.


Modify your page to add links to go to the next or previous page(s).

Add some logic to determine whether or not to show the next and/or previous page links. 
-->
<?php 
	// pulls files for DB
	require_once __DIR__ . "/../../pdo/db_constants_nat_park.php";
	require_once __DIR__ . "/../../pdo/db_connect.php";


	function pageController($dbc) {
		// Constant set for amount of parks displayed
		define('RPP', 4);
		
		$value = [];
		$offBy = 0;

		// $dbc is coming from db_connect.php
		function getParks($dbc, $offBy){
			// Modify your query to load only four parks at a time. 
			$query = "SELECT * FROM national_parks LIMIT " . RPP . " OFFSET " . $offBy . ";";

			// $stm can be named anything we want
			// query() is a function from $dbc
			// echo $query;
			$stm = $dbc->query($query);

			// $rows is just a name
			// $stm is called 
			// fetchAll will gather everything from the results of $stm
			$value = $stm->fetchAll(PDO::FETCH_ASSOC);
			return $value;
		}

		// calling the getParks function
		$parks = getParks($dbc, $offBy);

		foreach($parks as $park){
			// print_r($park);
			echo "• " . $park['name']. " --- ".$park['location']. " --- ".$park['date_established']. " --- ".$park['area_in_acres'];
			echo "<br>";
		}

		function getPage() {
			if (isset($_GET['page'])) {
				$value = $_GET['page'];
			} else {
				$value = 'Not defined';
			}
		}

		// calling the getPage function
		getPage();

		return $value;
	}
	extract(pageController($dbc))
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
		<div>
			<ul class="pagination">
				<li>
					<a href="http://codeup.dev/php/national_parks.php?$value="></a>
				</li>
			</ul>
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
