<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "db_act";
	$f = $_POST['fname'];
	$l = $_POST['lname'];
	$m = $_POST['mname'];
	$d = $_POST['dob'];
	$g = $_POST['gender'];
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO tbl_person VALUES('','$f','$l','$m','$g','$d')";
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>