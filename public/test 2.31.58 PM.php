<?php 
	class Person
	{
		public $firstName;
	    public $lastName;

	    public function __construct($firstName, $lastName)
	    {
	        $this->firstName = $firstName;
	        $this->lastName  = $lastName;
	    }

	    public function fullName()
	    {
	        return $this->firstName . ' ' . $this->lastName;
	    }

	}

	class Superhero extends Person
	{
		public $pseudonym;  // superhero name
	    public $capeColor;

	    public function alterEgo()
	    {
	        return 'Top Secret Alternate Ego: ' . $this->fullName();
	    }

	    public function hasCape()
	    {
	        return !empty($this->capeColor);
	    }

	}

// calls the Person Class and creates a new object
$person = new Person('John', 'Doe');
echo $person->fullName();

// creates a superhero
$superman = new Superhero('Clark', 'Kent');
$superman->pseudonym = 'Superman';
$superman->capeColor = 'red';
echo $superman->alterEgo();
var_dump($superman->hasCape());
?>





