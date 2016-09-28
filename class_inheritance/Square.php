<?php 

// calls the rectangle file to use the parent class
require_once("Rectangle.php");

// creates a object inheriting from the parent rectangle class
class Square extends Rectangle {
	// __contruct overrides the __contruct method in the parent class
	public function __construct($side) {
		// keeps the functionality from the parent class
		parent::__construct($side, $side);
	}

	// creates it own perimeter method, this is not pulling the method from the parent
	public function perimeter (){
		return 2 * ($this->height + $this->height);
	}

	// creates it own area method, this is not pulling the method from the parent
	public function area() {
		return $this->height * $this->width;
	}
}