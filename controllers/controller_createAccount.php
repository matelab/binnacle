<?php
	// Take the data from the previous POST
	
	$userName = $_POST['userName'];
	$email = $_POST['email'];
	$pass = $_POST['password'];

	// Calls the connection file
	include 'models/conn.php';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	// Query to check if the email already exist
	$checkEmail = "SELECT * FROM users WHERE Email = '$_POST[email]' ";
	$checkUserName = "SELECT * FROM users WHERE userName = '$_POST[userName]' ";

	// Variables $resultMail and $resultUserName hold the connection data and the queries
	$resultMail = $conn-> query($checkEmail);
	$resultUserName = $conn-> query($checkUserName);

	// Variables $countMail and $countUserName hold the result of the queries 
	$countMail = mysqli_num_rows($resultMail);
	$countUserName = mysqli_num_rows($resultUserName);

	// If countMail or countUserName == 1 that means the email or user name is already on the database
	if ($countMail == 1 || $countUserName == 1) {
	echo "<div class='alert alert-warning mt-4' role='alert'>
					<p>That email is already in our database.</p>
					<p><a href='login.html'>Please login here</a></p>
				</div>";
	} else {	
	
	/*
	If the email don't exist, the data from the form is sended to the
	database and the account is created
	*/
	
	// The password_hash() function convert the password in a hash before send it to the database
	$passHash = password_hash($pass, PASSWORD_DEFAULT);
	
	// Query to send Name, Email and Password hash to the database
	$query = "INSERT INTO users (userName, Email, Password, active) VALUES ('$userName', '$email', '$passHash', 1)";

	if (mysqli_query($conn, $query)) {
			include "../views/login.html";		
		} else {
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}	
	}	
	mysqli_close($conn);
	
?>