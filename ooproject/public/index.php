<?php 


define("DD", realpath(__DIR__ . "/.."));

require DD . "/vendor/autoload.php";


use Wpa21\App\Application;
use Wpa21\Core\Test;


$app = new Application();
$test = new Test();

Config::get();

View::make();

$array = [
	'id'	=> 1,
	"name"	=> 'Thiha'
];


dump($array, true);



 ?>