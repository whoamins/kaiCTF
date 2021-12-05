<?php

	$file = $_GET['file'];

	if( !fnmatch( "file*", $file )) {
		echo "ERROR: File name must start with 'file'!";
		exit;
	}
	else {
		include("$file");
	}
?>