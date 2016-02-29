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
	
	$sql = "SELECT username, score FROM scores ORDER BY score DESC LIMIT 10";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["username"]. "</td><td>" . $row["score"]. "</td></tr>";
		}
	} else {
		echo 'No Records found';
	}
	$conn->close();
?>