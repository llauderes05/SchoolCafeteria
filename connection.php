<?php 
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'SchoolCafeDB';

	// Create a connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		echo "Connection failed! ".$conn->connect_error;
	}
 ?>