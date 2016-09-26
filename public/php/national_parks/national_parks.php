<?php 
// dbc - mailman
// stmt - physical mail

	// Modify your page to add links to go to the next or previous page(s).

	// Add some logic to determine whether or not to show the next and/or previous page links.





	// uses both files in order to connect and run database for the national parks query
	require_once __DIR__ . "/../../../pdo/db_constants_nat_park.php";
	require_once __DIR__ . "/../../../pdo/db_connect.php";
	require_once __DIR__ . "/../../../login/Input.php";

	// $dbc parameter is being pulled from db_connect.php file
	// $dbc gathers info for us
	function pageController($dbc) {
		define('RPP', 4);

        // this section takes the user input and places it into the DB
        if(Input::isPost()) {
        	var_dump($_POST);
        	$name = Input::get('name');
        	$location = Input::get('location');
        	$date_established = Input::get('date_established');
        	$area_in_acres = Input::get('area_in_acres');
        	$description = Input::get('description');

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

            <style>
                body {
                    background: url("national_parks_background.jpg");
                    background: cover;
                    color: white;
                    padding-top: 5%;
                }

                form {
                	color: black;
                }

                #pageNum {
                    font-size: 20px;
                }

				table {
				    background: rgba(0, 0, 0, 0.4);
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
				<ul class="pagination">
                    <div id="pageNum">
                        <!-- makes anchor for most of array only ones left out are the remainder of the division -->
                        <?php for ($i = 1; $i <= $max_page; $i += 1) {?>
    				        <a href="http://codeup.dev/php/national_parks/national_parks.php?page=<?= $i ?>"> <?= $i ?> </a>
                        <?php } ?>
                    </div>
				</ul>

				<!-- form -->
				<div>
					<form method="POST">
						<p>
							<label for="name"></label>
							<input name="name" type="text" placeholder="Name">
						</p>
						<p>
							<label for="location"></label>
							<input name="location" type="text" placeholder="Location">
						</p>
						<p>
							<label for="date_established"></label>
							<input name="date_established" type="text" placeholder="Date Established">
						</p>
						<p>
							<label for="size"></label>
							<input name="area_in_acres" type="text" placeholder="Size">
						</p>
						<p>
							<textarea name="description" placeholder="Description"></textarea>
						</p>
						<button type="submit">Submit</button>
					</form>
				</div>

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