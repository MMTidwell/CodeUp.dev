<?php 
// fetches the constants and gives to the connect file in order to connect to the DB
require_once("db_constants_nat_park.php");
require_once("db_connect.php");

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// using SQL to delete table if it exists
$drop = 'DROP TABLE IF EXISTS national_parks';
// executes the drop variable
$dbc->exec($drop);

// creates a table using SQL, gives columns their names and values
$columnNames = 'CREATE TABLE national_parks (
	id INT UNSIGNED	NOT NULL AUTO_INCREMENT,
	name VARCHAR(250) NOT NULL,
	location VARCHAR(255) NOT NULL,
	date_established DATE NOT NULL,
	area_in_acres DOUBLE NOT NULL,
	description TEXT NOT NULL,
	PRIMARY KEY (id)
	)';

// executes the table
$dbc->exec($columnNames);


