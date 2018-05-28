<?php
  ini_set('display_errors', 1);
	session_start();

  if ($_SESSION['emailAddress'] == null) {
    // redirect to LOGIN page
    header('location:index.php');
  }
  else {
    $conn = mysqli_connect("localhost","root","123456");
    mysqli_select_db($conn,"member");
    
    $strSQL = "SELECT * FROM register WHERE emailAddress = '".$_SESSION['emailAddress']."' ";
    $objQuery = mysqli_query($conn,$strSQL);
    // $objResult = mysqli_fetch_array($objQuery);
   
  }
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="../../../../favicon.ico"> -->

    <title>bar</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

    <body>
        <form action="save_bar.php"  method="POST">
        tableBar(1:4)<br>
        <input type="text" name="tableBar1" placeholder="">
        <br>
        tableBar(1:8)<br>
        <input type="text" name="tableBar2" placeholder="">
        <br><br>
        tableBar(1:12)<br>
        <input type="text" name="tableBar3" placeholder="">
        <br><br>
        time<br>
        <input type="text" name="txtTime" placeholder="">
        <br>
        <input type="submit" value="Submit">
        </form> 
    </body>

