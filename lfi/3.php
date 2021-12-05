<?php

	$file = $_GET['file'];

	if (isset($file)) {
		set_include_path("/var/www/html/files/1/2/3/4/5/6/7/8/9/10/11/12/13/14/");
		$file = str_replace(array( "../", "..\\"), "", $file);
		include(get_include_path() . $file);
		echo "You're here - /var/www/html/files/1/2/3/4/5/6/7/8/9/10/11/12/13/14/";
	}
	else {
		echo "GET param 'file' not found! ";
		die('You should read the "flag.txt" file');
	}

	echo $file;

?>