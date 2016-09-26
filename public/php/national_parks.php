<?php 

	// Modify your page to add links to go to the next or previous page(s).

	// Add some logic to determine whether or not to show the next and/or previous page links.





	// uses both files in order to connect and run database for the national parks query
	require_once __DIR__ . "/../../pdo/db_constants_nat_park.php";
	require_once __DIR__ . "/../../pdo/db_connect.php";

	// $dbc parameter is being pulled from db_connect.php file
	function pageController($dbc) {
		define('RPP', 4);

		// used to determine where to start on the query
		$offby = (!empty($_GET)) ? (($_GET['page'] - 1) * RPP) : 0;

		// SQL query set to get all info from array and display. echo bellow is to ensure that the SQL is running and reading correctly and double checking for spacing.
        $sqlQuery = "SELECT * FROM national_parks;";
		// echo $stm;

		// $dbc is an instance, query() is a function call that uses SQL to gather everything from the database
		$stm = $dbc->query($sqlQuery);

        // limit to 4 per page
        $sqlLimit = $dbc->query("SELECT * FROM national_parks LIMIT " . RPP . " OFFSET " . $offby . ";");

		// fetchAll() - returns an array containing all of the result set rows
        // PDO::FETCH_ASSOC - returns an array indexed by column name as returned in your result set
		$rows = $sqlLimit->fetchAll(PDO::FETCH_ASSOC);

        // count is used in HTML to determine what number will be displayed for the number of pages
        $count = 1;

		return [
			// set key => value pairs in order to call them in the HTML
			// gathers the SQL info and displays on page
			// 'parks' => ,
			// determines how many parks are left in the query
			'parks' => $rows,
            'parkCount' => $stm->rowCount(),
            'RPP' => RPP,
            'page' => $offby,
            'count' => $count
		];
	}
	extract(pageController($dbc));
?>

<!DOCTYPE html>
	<html lang="en">
	    <head>
	        <meta charset="utf-8">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	        <meta name="viewport" content="width=device-width, initial-scale=1">
	        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	        <title>National Parks</title>
	
	        <!-- Bootstrap core CSS -->
	        <link rel="stylesheet" href="/bootstrap-3.3.6-dist/css/bootstrap.css">

            <style>
                body {
                    background-image: url("national_parks_background.jpg");
                    background: cover;
                    color: white;
                    padding-top: 5%;
                }

                #pageNum {
                    font-size: 20px;
                }

                a {
                    color: white;
                }

            </style>
	    </head>
	
	    <body>
            <!-- entire container for the page -->
			<div class="container">
                <h1>National Parks</h1>

                <table class="table table-bordered">
                    <!-- header for the table -->
                    <th><h4>Name</h4></th>
                    <th><h4>Location</h4></th>
                    <th><h4>Established</h4></th>
                    <th><h4>Size</h4></th>

                    <!-- data for the table -->
                    <?php foreach ($parks as $park) { ?>
                        <tr>
                            <td><?= $park['name'] ?></td>
                            <td><?= $park['location'] ?></td>
                            <td><?= $park['date_established'] ?></td>
                            <td><?= $park['area_in_acres'] ?></td>
                        </tr>
                    <?php } ?>
                </table>

                <!-- anchors for pages -->
				<ul class="pagination">
                    <div id="pageNum">
                        <!-- makes anchor for most of array only ones left out are the remainder of the division -->
                        <?php for ($i = 1; $i <= $parkCount / RPP; $i += 1) {?>
    				        <a href="http://codeup.dev/php/national_parks.php?page=<?= $i ?>"> <?= $count++ ?> </a>
                        <?php } ?>

                        <!-- makes anchor for the remainder of the division -->
                        <?php if (($parkCount / RPP) - $i < RPP) { ?>
                            <a href="http://codeup.dev/php/national_parks.php?page=<?= $i ?>"> <?= $count++ ?> </a>
                        <?php } ?>
                    </div>
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