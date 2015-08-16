<?php 

function home_controller() {
	load_view("home");
}

function blog_controller() {
	$data = [
		"name"		=> "Aung Aung",
		"address"	=> "Hledan"
	];

	load_view("blog", $data);
}


 ?>