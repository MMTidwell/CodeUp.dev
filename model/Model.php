<?php

// creates model class
class Model {
	// open empty array to hold key=>values
	protected $attributes = [];
	protected static $table = 'Model Class';

	// creates the key value pairs in the attribute array
	public function __set($name, $value) {
        $this->attributes[$name] = $value;
	}

	// retrieves the value from the attribute array based on the key name
	public function __get($name) {
		// checks to see if the array exist
		if (array_key_exists($name, $this->attributes)) {
			return $this->attributes[$name];
		}
		// or 
		// if (isset($this->attributes[$name])) {
		// 	return $this->attributes[$name];
		// }
		// if there is not an array then it will return null
		return null;
	}

	public static function getTableName() {
		return static::$table;
	}
}

// // creates a instance of the model object
// $test = new Model();
// // assigns key values for instance that can be called 
// $test->name = 'Arthur Dent';
// $test->group = 'Codeup';
// $test->age = 42;

// // prints the values when called with the key
// echo $test->name . PHP_EOL;
// echo $test->group . PHP_EOL;
// echo $test->age . PHP_EOL;