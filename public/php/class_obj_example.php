<?php 
class Car {
	// properties
	// these are the specs
	public $make;
	public $modle;
	public $color;
	public $vin;
	public $acceleration;
	public $topSpeed;
	public $speed;

	// basic function in class
	// these are the things the car can do
	public function drive($direction, $speed) {

	}

	public function honk() {
		return 'honk honk';
	}
	public function honkLoudly() {
		return "HONK HONK";
	}
	public function accelerate($time) {
		$this->speed = $this->acceleration * $time;
	}
	public function getDes() {
		return "Make: {$this->make} Modle: {$this->modle}";
	}
}

// instance of class Car
$honda = new Car();
$honda->make = 'honda';
$honda->modle = 'civic';
echo $honda->getDes() . PHP_EOL;

// instance of class Car
$toyota = new Car();
$toyota->make = 'toyota';
$toyota->modle = 'celica';
echo $toyota->getDes() . PHP_EOL;

?>