<?php 

function home_controller() {
	$site_title = get_config("app.foo.bar");
	echo $site_title;
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