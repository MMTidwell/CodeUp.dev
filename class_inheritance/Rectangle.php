<?php 

// parent class
class Rectangle {
	public $height;
	public $width;

	// __contruct function will run when creating an object off of this one
	public function __construct($height, $width) {
		$this->height = $height;
		$this->width = $width;
	}

	// returns the area of the shape
	public function area() {
		return $this->height * $this->width;
	}

	// returns the perimeter of the shape
	public function perimeter (){
		return 2 * ($this->height + $this->height);
	}
}



