<?php
	ini_set('display_errors', 1);

	session_start();

	$conn = mysqli_connect("localhost","root","123456");
	mysqli_select_db($conn,"member");

	$first_name = mysqli_real_escape_string($conn, $_POST['txtFirstName']);
    $last_name = mysqli_real_escape_string($conn, $_POST['txtLastName']);
    $email = mysqli_real_escape_string($conn, $_POST['txtEmailAddress']);
    $user = mysqli_real_escape_string($conn, $_POST['txtUsername']);
	// $pic= mysqli_real_escape_string($conn, $_POST['picture']);
	$password = mysqli_real_escape_string($conn, $_POST['txtPassword']);

	
		
	// $image = addslashes(file_get_contents($_FILES['images']['picture']));


	
		$strSQL = "INSERT INTO register (firstName,lastName,emailAddress,userName,`password`) VALUES ('$first_name', 
		' $last_name','$email','$user','$password')";
		if(mysqli_query($conn,$strSQL)){
			echo "Register Completed!<br>";		
	
        // echo "hello ";
        header('location:index.html');
		}else
		
		// echo "Register not Completed!<br>";		
		header('location:register.php');
		echo "fall!<br>" .mysqli_error($conn);	
		
	

	mysqli_close($conn);
?>