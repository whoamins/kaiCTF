<?php
	$file = $_GET["file"];

	if(isset($file))
	{
		include("$file");
	} else {
		echo "GET param 'file' not found!<br />";
		echo "Here you should try to get a reverse shell<br />";
		echo "https://github.com/pentestmonkey/php-reverse-shell/blob/master/php-reverse-shell.php<br /><br /><br />";
	}
?>
