<!-- opening php tag has to be at the beginning of the php code -->
<!-- files that ONLY contain php do not have to have a closing php tags -->
<?php 

echo 'hello from an external file' . PHP_EOL;

// array with []
$numbers = [1, 2, 3, 4, 5];

// associative array
$contact = array('first_name' => 'Mittsy', 'last_name' => 'Tidwell', 'email' => 'mtidwell506@gmail.com', 'phone' => '817-301-6167');

// multidimensional array
// $test = array('person1' => array('first' => "Tim", "last" => "Kessler"),
// 			'person2' => array('first' => "Brian", "last" => "Yang"),
// 			'person3' => array('first' => "Russ", 'last' => "Tidwell"));

$number = 10;
$item1 = 5;
// assignment by reference
$item2 = &$item1;

var_dump($numbers);

print_r($numbers);

echo $numbers[3] . PHP_EOL;

// print_r($test);

// basic math operators
echo -20 + -22 . PHP_EOL;
echo 16 - 42 . PHP_EOL;
echo 6 * 4 . PHP_EOL;
echo 3 % 2 . PHP_EOL;

// basic math with variables
echo $number * 3 . PHP_EOL;
echo $item1 . PHP_EOL;
echo $item2. PHP_EOL;

// comparison operators
var_dump('test' == 'test');
var_dump('test' == "Test");
var_dump(100 > 5);
var_dump('25' === 25);
var_dump('25' !== 25);

// incrementing / decrementing operators
$a = 10;
echo ++$a . PHP_EOL;
echo $a++ . PHP_EOL;
echo $a . PHP_EOL;
$b = 20;
echo --$b . PHP_EOL;
echo $b-- . PHP_EOL;
echo $b . PHP_EOL;

// logical operators
$x = 0;
$y = 5;
$z = 10;

var_dump($x < $y && $y < $z);
echo(PHP_EOL);
var_dump($x > $y && $y < $z);
echo(PHP_EOL);
var_dump($x > $y || $y < $z);
echo(PHP_EOL);
var_dump($x > $y || !($y < $z));


// assigning associate array key => value pairs
$person1 = [
	'name' => 'Mitt',
	'age' => 32,
	'language' => ['CSS', 'JS', 'HTML', 'PHP', 'MySQL'],
];

$person2 = [
	'name'=> 'Tim',
	'age' => 29,
	'language' => ["Java", 'Database'],
];

$newArray = [$person1, $person2];

// php closing tag
?>







