<?php
	
	// opens constants file, and uses them in the connect file in order to connect the page to the DB
	// Input calls is called in order to get, getString, and isPost functions to help use GET and POST
	require_once __DIR__ . "/../../../pdo/db_constants_nat_park.php";
	require_once __DIR__ . "/../../../pdo/db_connect.php";
	require_once __DIR__ . "/../../../login/Input.php";

	// $dbc (database controller) is being pulled from the db_connect file in order to create an object
	function pageController($dbc) {
		// RPP (results per page) is set as a constant in order to use in PHP and HTNL without passing it in the return key=>values
		define('RPP', 4);

        // This section takes the user input from the form and places it into the DB. 
        if(Input::isPost()) {
        	$name = Input::getString('name');
        	$location = Input::getString('location');
        	$date_established = Input::getString('date_established');
        	$area_in_acres = Input::getString('area_in_acres');
        	$description = Input::getString('description');

        	$insert = 'INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
					   VALUES (:name, :location, :date_established, :area_in_acres, :description)';

        	$stmt = $dbc->prepare($insert);
			
			$stmt->bindValue(':name', $name, PDO::PARAM_STR);
			$stmt->bindValue(':location', $location, PDO::PARAM_STR);
			$stmt->bindValue(':date_established', $date_established, PDO::PARAM_STR);
			$stmt->bindValue(':area_in_acres', $area_in_acres, PDO::PARAM_STR);
			$stmt->bindValue(':description', $description, PDO::PARAM_STR);
			
			$stmt->execute();
        }

		// SQL query set to get all info from array and display. echo bellow is to ensure that the SQL is running and reading correctly and double checking for spacing.
        $sqlQuery = "SELECT * FROM national_parks;";
		// echo $sqlQuery;

		// $dbc is an instance, query() is a function call that uses SQL to gather everything from the database
		// $stmt 
		$stmt = $dbc->query($sqlQuery);
		$count = $stmt->rowCount();
		$max_page = ceil($count / RPP);

		// used to determine where to start on the query
		// var_dump($_GET);
		$page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
		if ($page < 1) {
			$page = 1;
		} else if ($page > $max_page) {
			$page = $max_page;
		}
		$offby = ($page * RPP) - RPP;

        // limit to 4 per page
        // $stmtt = $dbc->query("SELECT * FROM national_parks LIMIT " . RPP . " OFFSET " . $offby . ";");
        $stmt = $dbc->prepare('SELECT * FROM national_parks LIMIT :limit OFFSET :offset;');
        $stmt->bindValue(':limit', RPP, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offby, PDO::PARAM_INT);
        
        $stmt->execute();

		// fetchAll() - returns an array containing all of the result set rows
        // PDO::FETCH_ASSOC - returns an array indexed by column name as returned in your result set
		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return [
			// set key => value pairs in order to call them in the HTML
			// gathers the SQL info and displays on page
			// 'parks' => ,
			// determines how many parks are left in the query
			'parks' => $rows,
            'page' => $page,
            'max_page' => $max_page
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
			<link rel="stylesheet" href="nat_parks.css">
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
                    <th><h4>Description</h4></th>

                    <!-- data for the table -->
                    <?php foreach ($parks as $park) { ?>
                        <tr>
                            <td><?= $park['name'] ?></td>
                            <td><?= $park['location'] ?></td>
                            <td><?= $park['date_established'] ?></td>
                            <td><?= $park['area_in_acres'] ?></td>
                            <td><?= $park['description'] ?></td>
                        </tr>
                    <?php } ?>

                </table>
                
                <!-- anchors for pages -->
                <div class="text-center">
					<ul class="pagination">
	                    <div id="pageNum">
	                    	<a href="http://codeup.dev/php/national_parks/national_parks.php?page=<?= $page - 1 ?>"> < </a>
	                        <!-- makes anchor for most of array only ones left out are the remainder of the division -->
	                        <?php for ($i = 1; $i <= $max_page; $i += 1) {?>
	    				        <a href="http://codeup.dev/php/national_parks/national_parks.php?page=<?= $i ?>"> <?= $i ?> </a>
	                        <?php } ?>
	                    	<a href="http://codeup.dev/php/national_parks/national_parks.php?page=<?= $page - 1 ?>"> > </a>
	                    </div>
					</ul>
				</div>
			</div>

			<div>
				<!-- form -->
				<form method="POST">
					<div class="form-group">
						<label for="name"></label>
						<input class="form-control" name="name" type="text" placeholder="Name">
					
						<label for="location"></label>
						<input class="form-control" name="location" type="text" placeholder="Location">
					
						<label for="date_established"></label>
						<input class="form-control" name="date_established" type="text" placeholder="Date Established">
					
						<label for="size"></label>
						<input class="form-control" name="area_in_acres" type="text" placeholder="Size">
					
						<br>
						<textarea class="form-control" name="description" placeholder="Description"></textarea>
						
						<br>
						<button class="btn btn-primary" type="submit">Submit</button>
					</div>
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