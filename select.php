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
	
	$sql = "SELECT username, score FROM scores WHERE username = '$Champion'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$score = $row["score"];
			$score = $score + 3;
			include 'update.php';
		}
	} else {
		include 'insert.php';
	}
	$conn->close();
?>