<?php

	session_start();

	// Connection info. file
	include '../models/conn.php';	
	
	// Connection variables
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	// data sent from form login.html 
	$email = $_POST['email']; 
	$password = $_POST['password'];
	
	// Query sent to database
	$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
	
	// Variable $row hold the result of the query
	$row = mysqli_fetch_assoc($result);
	
	// Variable $hash hold the password hash on database
	$hash = $row['password'];
	
	/* 
	password_Verify() function verify if the password entered by the user
	*/
	if (password_verify($_POST['password'], $hash)) {		

		$_SESSION['loggedin'] = true;
		$_SESSION['name'] = $row['userName']
		if($row['active'] == 1){
			include "../views/userPanel/index.php";
		} 
	
	} else {
		include "../views/badLogin.html";	
	}	
?>