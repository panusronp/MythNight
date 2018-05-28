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
<!-- <html>
<head>
<title>main</title>
</head>
<body>
  Welcome to User Page! </br></br>
  <table border="1" style="width: 300px">
    <tbody>
   <tr>
        <td width="87"> &nbsp;Username</td>
        <td width="197">
        </td>
      </tr>
      <tr>
        <td> &nbsp;Name</td>
        <td>
    </td>
      </tr>
    </tbody>
  </table>
  <br>
  <a href="edit_profile.php">Edit</a><br>
  <br>
  <a href="logout.php">Logout</a>
  <br>
  
</body>
</html> -->
<html>
<title>MYTH NIGHT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style01.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>

<body>
  <!-- Page Container -->

</body>
<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="img/barbg.png" alt="MythNight" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>MYTH</b></span> <span class="w3-hide-small w3-text-light-grey">PROFILE</span></h1>
  </div>
</header>




<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="main.php" class="w3-bar-item w3-button"><b>MYTH NIGHT</b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <!-- <a href="login/index.html" class="w3-bar-item w3-button">SIGN IN</a> -->
      <!-- <a href="signup/index.html" class="w3-bar-item w3-button">SIGN UP</a> -->
      <a href="logout.php" class="w3-bar-item w3-button">LOGOUT</a>
    </div>
  </div>
</div>

<!-- Header -->
<!-- <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="images/barbg.png" alt="MythNight" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center"> -->
    <h1 class="w3-xxlarge w3-text-white">

      <div class="w3-content w3-margin-top" style="max-width:1400px;">

        <!-- The Grid -->
        <center>
        <div class="w3-row-padding">

          <!-- Left Column -->
          <div style="width:50% ;">

            <div class="w3-white w3-text-grey w3-card-4">
              <div class="w3-display-container">
                <img src="img/avatar.jpg" style="width:100%" alt="Avatar">
                <div class="w3-display-bottomleft w3-container w3-text-teal">
                  <h2><?php echo $_SESSION["firstName"]." ".$_SESSION["lastName"] ;?> </h2>
                </div>
              </div>
              <div class="w3-container">
                <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Email: <?php echo $_SESSION["emailAddress"];?></p>
                <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>ID: <?php echo $_SESSION["userName"];?></p>
                <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>Tel.080454xxxx</p>
                <a href="edit_profile.php" class="w3-bar-item w3-button">Edit profile</a>
                <hr>
                
              </div>
            </div><br>

          <!-- End Left Column -->
          </div>
  </center>
          <!-- Right Column -->


        <!-- End Grid -->
        </div>

        <!-- End Page Container -->
      </div>


  </div>
</header>
</html>
