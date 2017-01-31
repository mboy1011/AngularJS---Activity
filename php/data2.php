<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "db_act";

	$user = $_POST['Username'];
	$pass = $_POST['Password'];
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM tbl_users WHERE username = '$user' AND password = '$pass'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
	   echo "1";
	} else {
	    echo "0";
	}

	
	$conn->close();
?>