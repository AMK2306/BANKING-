<?php

	$servername = "localhost:3308";
	$username = "Akhilesh";
	$password = "Akhilesh2306";
	$dbname = "bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>