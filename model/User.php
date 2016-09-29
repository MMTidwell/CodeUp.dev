<?php 

// Test your User class by calling User::getTableName(). Did it return the string users? In your parent Model class, did you use self:: or static::? Does switching them change the result?

require_once('Model.php');

class User extends Model {
	protected static $table = 'Users Class';
}

echo User::getTableName() . PHP_EOL;
// Model using static in getTableName ---> Users Class
// Model using self in getTableNames ---> Model Class