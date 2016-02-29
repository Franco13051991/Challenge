<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "UPDATE Scores SET score='$score' WHERE username='$Champion'";
	
	if ($conn->query($sql) === TRUE) {
		echo "<br>Record updated succesfully";
	}
	else
	{
		echo "Error updating record: " . $conn->error;
	}
	
	//$conn->close();
?>