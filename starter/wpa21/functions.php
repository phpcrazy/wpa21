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
		if(array_key_exists($split_value[1], $data)) {
			return $data[$split_value[1]];
		} else {
			trigger_error("Config Key not found in " . $split_value[0] . ".php");
		}
	} else {
		trigger_error($split_value[0] . ".php file not found in config folder, Idiot!", E_USER_ERROR);
	}
}



 ?>