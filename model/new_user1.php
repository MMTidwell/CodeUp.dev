<?php 

require_once('db_constants1.php');
require_once('User1.php');

// Create a new user using the User model.
$newUser = new User();

// Find the new user by its id.
$newUser = User::find(3);

// Update the found user to have new values.
// Verify the update executed in the DB.
$newUser->save();

// Create another new user.
$newestUser = new User();

// Retrieve all users from the DB.
$newestUser = User::all();

// Add a method to delete a record in the Model class.
// Delete a user using the new method added to the base class.
