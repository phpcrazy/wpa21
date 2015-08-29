<?php 


function load_view($page, $data = null) {
	ob_start();
	$file = "../app/view/" . $page . ".php";

	if(file_exists($file)) {
		if($data != null) {
			extract($data);	
		}
		include $file;
	} else {
		echo "404!!!";
	}
	return ob_end_flush();

}


function get_config($value) {
	$split_value = explode(".", $value);

	$file = DD . "/app/config/" . $split_value[0] . ".php";
	if(file_exists($file)) {
		$data = require $file;

		array_shift($split_value);
		
		return _arrayResolver($split_value, $data);
	} else {
		trigger_error($split_value[0] . ".php file not found in config folder, Idiot!", E_USER_ERROR);
	}
}

function _arrayResolver($key, $default_array) {
	foreach ($key as $k => $value) {
		$default_array = $default_array[$value];
	}
	return $default_array;
}


function dump($value, $die = false) {
	var_dump($value);
	if($die == true) {
		die();
	}
}


 ?>