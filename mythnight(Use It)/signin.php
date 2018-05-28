<?php
	ini_set('display_errors', 1);
	session_start();
	$conn = mysqli_connect("localhost","root","123456");
	mysqli_select_db($conn,"member");
	$strSQL = "SELECT * FROM register WHERE emailAddress = '".mysqli_real_escape_string($conn, $_POST['txtEmail'])."'
	and password = '".mysqli_real_escape_string($conn,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
			// echo "Username and Password Incorrect!";
			header("location:login.php");
	}
	else
	{
		$_SESSION["firstName"] = $objResult["firstName"];
		$_SESSION["lastName"] = $objResult["lastName"];
		$_SESSION["emailAddress"] = $objResult["emailAddress"];
		$_SESSION["userName"] = $objResult["userName"];
		$_SESSION["password"] = $objResult["password"];

			session_write_close();

				// echo"hello~";
				header("location:main.php");
	}
	mysqli_close($conn);
?>
