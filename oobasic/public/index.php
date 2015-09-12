<?php 

interface AnimalInterface {
	public function run();

	public function eat();

	public function sleep();
}

abstract class Animal {
	public $name;

	public function __construct($name) {
		$this->name = $name;
	}
}

class Dog extends Animal implements AnimalInterface {

	public function run() {
		echo "RUN!!!!";
	}

	private $data = array();
	// method
	public function bark() {
		echo "Bark!";
	}

	public function __construct() {
		echo "Contructor!";
	}

	public function __destruct() {
		echo "Destruct!";
	}

	public function __set($data, $value) {
		$this->data[$data] = $value;
	}
	public function __get($key) {
		return $this->data[$key];
	}
	public function __call($name, $arguments) {
		var_dump($name);
		var_dump($arguments);
	}
	public static function __callStatic($name, $arguments) {
		var_dump($name);
		var_dump($arguments);
	}
	public static function warning() {
		echo "Dog Bite!";
	}

	public function eat()
	{
		// TODO: Implement eat() method.
	}

	public function sleep()
	{
		// TODO: Implement sleep() method.
	}
}

class Cat extends Animal implements AnimalInterface {

	public function __construct($name) {
		parent::__construct($name);
	}

	public function meow() {
		echo "Meow!";
	}

	public function run()
	{
		// TODO: Implement run() method.
	}

	public function eat()
	{
		// TODO: Implement eat() method.
	}

	public function sleep()
	{
		// TODO: Implement sleep() method.
	}
}

Dog::warning(); // scope resolution operator
Dog::fool("bar"); // late method binding

Dog::bark();

// -------------------

$dog = new Dog();
$dog->color = "Red"; // property binding
// echo $dog->color;
// $dog->warning();

$dog->dance("crazy", "foo", "bar", "moo");

$dog2 = new Dog();
$dog2->bark();

// Singaleton


$cat = new Cat("Shwe War");
$cat->name = "Shwe War";
echo $cat->name;





?>