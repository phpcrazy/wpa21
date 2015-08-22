<?php 

define("DD", "..");

require DD . "/wpa21/functions.php";
require DD . "/app/controller/controllers.php";

if(isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = "home";
}

$controller = $page . "_controller";

if(function_exists($controller)) {
	call_user_func($controller);
} else {
	echo "404!";
}

?>