<?php
	ini_set('display_errors', 1);
    session_start();
    if ($_SESSION['emailAddress'] == null) {
        // redirect to LOGIN page
        header('location:index.php');
      }
      else
	$conn = mysqli_connect("localhost","root","123456");
	mysqli_select_db($conn,"member");
	$strSQL = "SELECT * FROM `order` INNER JOIN register WHERE register.emailAddress = '" . $_SESSION["emailAddress"] . "'";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
		$_SESSION["bar"] = $objResult["bar"];
		$_SESSION["tableBar1"] = $objResult["tableBar1"];
		$_SESSION["tableBar2"] = $objResult["tableBar2"];
		$_SESSION["tableBar3"] = $objResult["tableBar3"];
		$_SESSION["time"] = $objResult["time"];

			session_write_close();

                echo $_SESSION["bar"];
                echo $_SESSION["time"];
				// header("location:main.php");
				echo "<a href='logout.php'>Logout</a>";
	}
	mysqli_close($conn);
?>