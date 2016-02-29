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
	
	$sql = "INSERT INTO Scores (username, score)
	VALUES ('$Champion', '3')";
	
	if ($conn->query($sql) === TRUE) {
		echo "<br>Record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	//$conn->close();
?>