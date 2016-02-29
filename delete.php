<?php
	$link = mysql_connect('localhost', 'root', '');
	if (!$link) {
		die('Could not connect: ' . mysql_error());
	}
	
	$sql = 'DROP DATABASE db';
	if (mysql_query($sql, $link)) {
		echo "Database db was successfully dropped\n";
	} else {
		echo 'Error dropping database: ' . mysql_error() . "\n";
	}
	header("Location:index.php");
?>