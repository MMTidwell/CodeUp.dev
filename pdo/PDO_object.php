<?php 
// ssh into vagrant
// be cautious of spacing with this, as it will throw errors and could even throw an error and not show it
// gets new instance of PDO object
// mysql:host= server
// dbname = name of db
// username
// password
$dbc = new PDO('mysql:host=127.0.0.1;dbname=employees', 'vagrant', 'vagrant');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echos out the connection status
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

?>