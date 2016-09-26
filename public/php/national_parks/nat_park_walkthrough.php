<?php

	require_once __DIR__ . "/../../../pdo/db_constants_nat_park.php";
	require_once __DIR__ . "/../../../pdo/db_connect.php";

	define("LIMIT", 4);

	function getParks($dbc, $page)
	{
		$offset = ($page - 1) * LIMIT;
		$query = "SELECT * FROM national_parks LIMIT ".LIMIT." OFFSET $offset";
		//echo $query;
		$stm = $dbc->query($query);
		return $stm;
	}

	function getParksCount($dbc)
	{
		$query = "SELECT * FROM national_parks;";
		$stm = $dbc->query($query);
		return $stm;
	}

	function pageCtrl($dbc)
	{
		$data = [];
		$page = (isset($_GET['page'])) ? $_GET['page'] : 1;
		$stm = getParks($dbc, $page);
		$parks = $stm->fetchAll(PDO::FETCH_ASSOC);
		$pages = round(getParksCount($dbc)->rowCount() / LIMIT);

		$data['total'] = getParksCount($dbc)->rowCount();
		$data['rows'] = $parks;
		$data['pages'] = $pages;
		$data['curPage'] = $page;
		$i = 0;
		return $data;
	}

	extract(pageCtrl($dbc));

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
 </head>
 <body>
 <div class="container"> 	<table class="table table-bordered">
 		<caption>National Parks</caption>
 		<thead>
 			<tr>
 				<th>Name</th>
 				<th>Location</th>
 				<th>Date established</th>
 				<th>Acres</th>
 			</tr>
 		</thead>
 		<tbody>
 		<?php foreach ($rows as $row): ?>
 			<tr>
 				<td align="left"><?= $row['name'] ?></td>
 				<td><?= $row['location'] ?></td>
 				<td align="center">
 					<?= $row['date_established'] ?>		
 				</td>
 				<td align="right">
 					<?= number_format($row['area_in_acres']) ?>		
 				</td>
 			</tr>
 		<?php endforeach;  ?>
 		</tbody>
 	</table>
 	<h3>Total of rows: <?= $total ?></h6>
 	<ul class="pagination">
		<tr>
			<li>
				<a href="national_parks.php?page=<?= $curPage-1?>">Previous</a>
			</li>
 		<?php for ($i=0;$i<$pages;$i++): ?>
			<li>
				<a href="national_parks.php?page=<?=$i+1?>">
					<?= $i+1?>
				</a>
			</li>
 		<?php endfor;  ?>
 			<li>
				<a href="national_parks.php?page=<?= $curPage+1?>">Next</a>
			</li>
 		</tr>
 	</ul>	
 </div>	
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </body>
 </html>