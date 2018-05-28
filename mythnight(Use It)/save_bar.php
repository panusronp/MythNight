<?php
	ini_set('display_errors', 1);
	session_start();

  if ($_SESSION['emailAddress'] == null) {
    // redirect to LOGIN page
    header('location:index.php');
  }
  else

	$tableBar1 = trim($_POST['tableBar1']);
    $tableBar2 = trim($_POST['tableBar2']);
    $tableBar3 = trim($_POST['tableBar3']);
    $txtTime = trim($_POST['txtTime']);
    $emailAddress = $_SESSION['emailAddress'];

	$conn = mysqli_connect("localhost","root","123456");
	mysqli_select_db($conn,"member");
		
	// $image = addslashes(file_get_contents($_FILES['images']['picture']));


	
		$strSQL = "INSERT INTO `order` (emailAddress,bar, tableBar1,tableBar2,tableBar3,`time`) VALUES ('$emailAddress', 
		'Reefeel','$tableBar1','$tableBar2','$tableBar3','$txtTime')";
		if(mysqli_query($conn,$strSQL)) {
            echo "Register Completed!<br>";		
	
        echo "hello ";
        echo "<br> Go to <a href='main.php'>Login page</a>";
        }else
		
		echo "fall!<br>" .mysqli_error($conn);		
	
		
		
	

	mysqli_close($conn);
?>