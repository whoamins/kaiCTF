<?php

	echo "Тут нужно погуглить<br />";

	echo "Попробуй получить исходники файла lol.php<br />";

	$file = $_GET['file'];

	if (isset($file)) {
		include("$file");
	} else {
		echo "GET param 'file' not found! ";
	}

?>