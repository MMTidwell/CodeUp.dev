<?php 

// parent class
class Rectangle {
	// public - both instances run with results
	// private - rectangle runs, square does not
	// protected - both run with results
	private $height;
	private $width;

	// __contruct function will run when creating an object off of this one
	public function __construct($height, $width) {
		$this->setHeight($height);
		$this->setWidth($width);
	}

	public function getWidth() {
		return $this->width;
	}

	public function getHeight() {
		return $this->height;
	}

	protected function setWidth($width) {
		$this->width = $width;
	}

	protected function setHeight($height) {
		$this->height = $height;
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



