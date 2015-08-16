<?php 


function load_view($page, $data = null) {
	$file = "../app/view/" . $page . ".php";

	if(file_exists($file)) {
		if($data != null) {
			extract($data);	
		}
		include $file;
	} else {
		echo "404!!!";
	}

}



 ?>