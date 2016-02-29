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
	
	// sql to create table
	$sql = "CREATE TABLE Scores (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	username VARCHAR(30) NOT NULL,
	score INT
	)";
	
	if ($conn->query($sql) === TRUE) {
		//echo "Table MyGuests created successfully";
	} else {
		//echo "Error creating table: " . $conn->error;
	}
	
	$conn->close();
?>