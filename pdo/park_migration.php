<?php 
require_once("db_constants_nat_park.php");
require_once("db_connect.php");

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$drop = 'DROP TABLE IF EXISTS national_parks';
$dbc->exec($drop);

$columnNames = 'CREATE TABLE national_parks (
	id INT UNSIGNED	NOT NULL AUTO_INCREMENT,
	name VARCHAR(250) NOT NULL,
	location VARCHAR(255) NOT NULL,
	date_established DATE NOT NULL,
	area_in_acres DOUBLE NOT NULL,
	PRIMARY KEY (id)
	)';

$dbc->exec($columnNames);


