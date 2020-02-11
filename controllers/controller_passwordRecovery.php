<?php
			include 'models/conn.php';
			
			$email = $_POST['email'];				
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
				
			$sql = "SELECT Email, Password FROM users WHERE Email='$email'";				
			$result = mysqli_query($conn, $sql);
				
			if (mysqli_num_rows($result) > 0) {				
				$row = mysqli_fetch_assoc($result);
				
				$subject = "Your password for PHP Login";
				$body = "Your password is:" . $row['Password'];
				
				$headers = 'From: youremail@mail.com' . "\r\n" .
				'Reply-To: youremail@mail.com' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
				
				mail($email, $subject, $body, $headers);					
			} 
			?>