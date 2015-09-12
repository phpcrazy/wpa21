<?php 

define("DD", realpath(__DIR__ . "/.."));


require DD . "/wpa21/functions.php";
require DD . "/app/controller/controllers.php";

// Getting URI Request
$request_uri = $_SERVER["REQUEST_URI"];
$script_name = $_SERVER['SCRIPT_NAME'];

$request_uri = explode("/", $request_uri);
$script_name = explode("/", $script_name);

$path_info = array_diff($request_uri, $script_name);

$path_info = array_values($path_info);

$routes = include DD . "/app/routes.php";

if(empty($path_info)) {
	$path_info[0] = "home";
}

if(array_key_exists($path_info[0], $routes)) {
	$key = array_shift($path_info);
	$route = $routes[$key];
	$controller = array_shift($route);
	if(count($route) == count($path_info)) {
		call_user_func_array($routes[$key]['controller'], $path_info);	
	} else {
		echo "404";
	}
	
} else {
	echo "404!";
}
?>
