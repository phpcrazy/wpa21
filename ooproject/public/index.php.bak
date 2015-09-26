<?php 


define("DD", realpath(__DIR__ . "/.."));

require DD . "/vendor/autoload.php";


// $greet = function($name) {
// 	echo "Hello " . $name;
// };

// $greet("Myanmar Links");

// var_dump( gettype($greet) );

$final_value = StaticMethod::getInstance(12000)
					->sum(5600)
					->minus(450)
					->multiply(5)
					->get();

echo $final_value . "<br />";

$another_value = StaticMethod::getInstance(500)
					->sum(45)
					->minus(3)
					->get();

echo $another_value . "<br />";

$next_value = StaticMethod::getInstance(5000)
				->multiply(5)
				->get();
echo $next_value;
die();
$dynamic = new DynamicChain(6000);

echo $dynamic->sum(45)->minus(120)->get();

// use Wpa21\App\Application;
// use Wpa21\Core\Test;


// $app = new Application();
// $test = new Test();

// Config::get();

// View::make();

// $array = [
// 	'id'	=> 1,
// 	"name"	=> 'Thiha'
// ];


// dump($array, true);



 ?>