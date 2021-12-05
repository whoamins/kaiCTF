<?php

	$file = $_GET['file'];

	if(isset($file))
	{
		include("$file");
	}

	else
	{
		echo "GET param 'file' not found!";
	}

?>