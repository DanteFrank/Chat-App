<?php 

$serverName = 'localhost';
$user = 'root';
$password = '';
$dbName = 'chatapp';

    //Creating connection
	$conn = mysqli_connect($serverName, $user, $password, $dbName);

	// Checking connection
	if (!$conn) {
        die("Connection Failed: ".mysqli_connect_error());
    }
