<?php
  ini_set('display_errors', 1);
	session_start();
	if($_SESSION['emailAddress'] == null)
	{
        header('location:index.php');
	
    }
    echo $_POST['txtfirstName'];
    echo $_POST['txtlastName'];

    $conn = mysqli_connect("localhost","root","123456");
    mysqli_select_db($conn,"member");
	
    $first_name = trim($_POST['txtfirstName']);
    $last_name = trim($_POST['txtlastName']);
    // $email = trim($_POST['txtEmailAddress']);
    // $user = trim($_POST['txtUsername']);
	// $password = trim($_POST['txtPassword']);

	$strSQL = "UPDATE register SET firstName = '$first_name' 
	,lastName = '$last_name' WHERE emailAddress = '".$_SESSION["emailAddress"]."' ";
    $objQuery = mysqli_query($conn,$strSQL);
  
    $_SESSION["firstName"] =$_POST['txtfirstName'];
    $_SESSION["lastName"] = $_POST['txtlastName'];
    
    //  $target_dir = "./img/";
    // $pic = $_FILES['picture'];
    // $target_file = $target_dir . basename($pic["name"]);
    // echo $target_file;
    // if (move_uploaded_file($pic["tmp_name"], $target_file)) {
    //     echo "The file ". basename( $pic["name"]). " has been uploaded.";
    // } else {
    //     echo "Sorry, there was an error uploading your file.";
    // }
        
    header('location:main.php');
mysqli_close($conn);
   
?>