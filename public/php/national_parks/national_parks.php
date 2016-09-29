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

		// $errors is pulled out of if statement in order to be able to return and use as keys
        $errors = [];
        
        // This section takes the user input from the form and places it into the DB. 
        // Input class is called in order to use the getString method, this will check to make sure that each box if filled in and not returning null. If there is a null then it will throw a PHP error.
        if(Input::isPost()) {

        	// the variables are assigned to getString and assign a key so we can call, bind, and execute them. 
        	try {
        		$name = Input::getString('name');
        	} catch (Exception $e) {
        		array_push($errors, $e->getMessage());
        	}

        	try {
	        	$location = Input::getString('location');
        	} catch (Exception $e) {
        		array_push($errors, $e->getMessage());
        	}

        	try {
	        	$date_established = Input::getString('date_established');
        	} catch (Exception $e) {
        		array_push($errors, $e->getMessage());
        	}

        	try {
	        	$area_in_acres = Input::getNumber('area_in_acres');
        	} catch (Exception $e) {
        		array_push($errors, $e->getMessage());
        	}

        	try {
	        	$description = Input::getString('description');
        	} catch (Exception $e) {
        		array_push($errors, $e->getMessage());
        	}

			if (empty($errors)) {
	        	// insert is set to a SQL string which inserts the data given by the user into the database table
	        	$insert = 'INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
						   VALUES (:name, :location, :date_established, :area_in_acres, :description)';

				// stmt calls the dbc object
				// prepare will insert the data as a string so the user can not do anything other than add to the database
	        	$stmt = $dbc->prepare($insert);
				
				// stmt uses the assignment operator to bindValue
				// this will bind a value to a parameter
				// syntax - bindValue(:param, $variable, data type)
				$stmt->bindValue(':name', $name, PDO::PARAM_STR);
				$stmt->bindValue(':location', $location, PDO::PARAM_STR);
				$stmt->bindValue(':date_established', $date_established, PDO::PARAM_STR);
				$stmt->bindValue(':area_in_acres', $area_in_acres, PDO::PARAM_INT);
				$stmt->bindValue(':description', $description, PDO::PARAM_STR);
				
				// stmt executes the prepared statement by using execute()
				$stmt->execute();
			}
        }

		// SQL query set to get all info from array and display. echo bellow is to ensure that the SQL is reading correctly and double checking for spacing.
        $sqlQuery = "SELECT * FROM national_parks;";
		// echo $sqlQuery;

		// $dbc is an instance, query() is a function call that uses SQL to gather everything from the database
		$stmt = $dbc->query($sqlQuery);
		// count will get the row count from the DB
		$count = $stmt->rowCount();
		// max page calls on count and then divides by RPP in order to find the max_page value. This is called bellow to check page numbers
		$max_page = ceil($count / RPP);

		// used to determine where in the query you are
		// $page checks to see if the 'page' value is empty, if it is then it will return 1 sending you to the first page, else it will send you to the page that it is on
		// need to be specific with the get and what it is calling, this is why we will call it both times next to $_GET
		$page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
		// if trying to go before page 1 it will force you to page 1, not allowing you to go before
		if ($page < 1) {
			$page = 1;
		// if trying to go past the max_page count it will force you to the last page of the database, and not allow you any further
		} else if ($page > $max_page) {
			$page = $max_page;
		}
		// $offby is your OFFSET for SQL. This will take your page value and RPP to determine how many pages there will be in the query
		$offby = ($page * RPP) - RPP;

		// prepare will protect your database again from wrongful users
		// query will determine how many results per page will be shown. Remember that this is a constant and can be changed to fit  your needs
        $stmt = $dbc->prepare('SELECT * FROM national_parks LIMIT :limit OFFSET :offset;');
        // binding is used here for practice but is not necessary
        $stmt->bindValue(':limit', RPP, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offby, PDO::PARAM_INT);
        
        // this will execute all of the stmt values and place table on the page
        $stmt->execute();

		// fetchAll() - returns an array containing all of the data of the rows
        // PDO::FETCH_ASSOC - returns an array indexed by column name as returned in your result set
		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return [
			// set key => value pairs in order to call them in the HTML
			// gathers the SQL info and displays on page
			'parks' => $rows,
			// determines how many parks are left in the query
            'page' => $page,
            // uses max_page to determine the pages at the bottom of the table
            'max_page' => $max_page,
            'errors' => $errors
		];
	}
	// extract will take the return and turn it into key=>values in order to be called in the HTML. This must be done otherwise you can not pull anything from the PHP into the HTML
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
<!-- container for the table and the page numbers -->
			<div class="container">
                <h1>National Parks</h1>

	<!-- table headers and table style -->
                <table class="table table-bordered">
                    <th><h4>Name</h4></th>
                    <th><h4>Location</h4></th>
                    <th><h4>Established</h4></th>
                    <th><h4>Size</h4></th>
                    <th><h4>Description</h4></th>

    <!-- data for the table -->
    				<!-- 
    				foreach loop will iterate through all of the parks query and fill in the key value pairs for each one
    				 -->
                    <?php foreach ($parks as $park) { ?>
                        <tr>
                            <td><?= $park['name'] ?></td>
                            <td><?= $park['location'] ?></td>
                            <td><?= $park['date_established'] ?></td>
                            <td><?= $park['area_in_acres'] ?></td>
                            <td class="overflow"><?= $park['description'] ?></td>
                        </tr>
                    <?php } ?>
	<!-- closes the table -->
                </table>
                
    <!-- anchors for pages -->
    			<!-- 
    			text-center will center all of the text to fit the page better. The pagination call is pulled from boorstrap in order to make for a quicker setup
    			-->
                <div class="anchor text-center">
					<ul class="pagination">
	                    <div id="pageNum">
						    <!-- previous button -->
	                    	<a href="http://codeup.dev/php/national_parks/national_parks.php?page=<?= $page - 1 ?>"> < </a>
	                        <!-- 
	                        makes the anchors for the page numbers including the remaining ones floated onto the next page vs leaving them off
	                    	-->
	                        <?php for ($i = 1; $i <= $max_page; $i += 1) {?>
	    				        <a href="http://codeup.dev/php/national_parks/national_parks.php?page=<?= $i ?>"> <?= $i ?> </a>
	                        <?php } ?>
	                    	<!-- next button -->
	                    	<a href="http://codeup.dev/php/national_parks/national_parks.php?page=<?= $page + 1 ?>"> > </a>
	                    </div> <!-- closes the pageNum div -->
					</ul> <!-- closes the pagination ul -->
				</div> <!-- closes the anchor div -->
			</div> <!-- closes the container div holding the table and pages -->

			<div class="text-center" style="color:yellow">
				<?php if (!empty($errors)) { ?>
					<?php foreach ($errors as $error) { ?>
						<h4><?= $error ?></h4>
					<?php } ?>
				<?php } ?>
			</div>

<!-- form -->
			<div> <!-- starts the div for the form, separating it from the table and pages div -->
				<!-- POST is added in to make sure that we can post data that the user has inputed -->
				<form method="POST">
					<!-- form-group is bootstrap used for better presentation -->
					<div class="form-group">
						<label for="name"></label>
						<input class="form-control" name="name" type="text" placeholder="Name">

						<label for="location"></label>
						<input class="form-control" name="location" type="text" placeholder="Location">

						<label for="date_established"></label>
						<input class="form-control" name="date_established" type="text" placeholder="Date Established: YYYY-MM-DD">

						<label for="size"></label>
						<input class="form-control" name="area_in_acres" type="text" placeholder="Size">

						<!-- br is due to formatting -->
						<br>
						<textarea class="form-control" name="description" placeholder="Description"></textarea>

						<!-- br is due to formatting -->
						<br>
						<button class="btn btn-primary" type="submit">Submit</button>
					</div> <!-- closes the form -->
				</form> <!-- closes the form -->
			</div> <!-- closes the form div	 -->
	
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