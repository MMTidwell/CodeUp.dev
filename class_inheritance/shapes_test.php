<?php 

// pulls both files so we can create instances of the classes
require_once("Rectangle.php");
require_once("Square.php");

// creates new instances off of the classes
$rectangleSize = new Rectangle('32', '40');
$squareSize = new Square('20');

// test runs the area and perimeter methods from both classes
echo "The area of the rectangle is: " . $rectangleSize->area() . PHP_EOL;
echo "The perimeter of the rectangle is: " . $rectangleSize->perimeter() . PHP_EOL;


echo "The area of the square is: " . $squareSize->perimeter() .PHP_EOL;
echo "The perimeter of the square is: " . $squareSize->perimeter() .PHP_EOL;

