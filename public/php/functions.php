<?php 
// returns true or false based on whether the key is available
function inputHas($key) {
	// check if $_REQUEST[$key] isset
	// check to see if $_REQUEST has a key/value set at the key $key
	// return true if the $key is set on $REQUEST
	// else return true if it aint
	return isset($_REQUEST[$key]);
}

// returns the value specified by the key or null if the key is not set
function inputGet($key) {
	// if inputHas($key)
	// return the value specified by the key
	// or return null if the key is not set
	return inputHas($key) ? $_REQUEST[$key] : null;
}

// returns the input as a safely escaped string
// this is for user input, so they can not put in BS
function escape($string) {
	return htmlspecialchars(strip_tags($string));
}
