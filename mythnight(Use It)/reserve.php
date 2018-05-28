<?php
  ini_set('display_errors', 1);
	session_start();

  if ($_SESSION['emailAddress'] == null) {
    // redirect to LOGIN page
    header('location:index.html');
  }
  else {
    $conn = mysqli_connect("localhost","root","123456");
    mysqli_select_db($conn,"member");
    
    $strSQL = "SELECT * FROM register WHERE emailAddress = '".$_SESSION['emailAddress']."' ";
    $objQuery = mysqli_query($conn,$strSQL);
    // $objResult = mysqli_fetch_array($objQuery);
   
  }
?>
<!DOCTYPE html>
<html>
<title>name01</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/review.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1,h2,h3,h4,h5,h6 {
    font-family: "Playfair Display";
    letter-spacing: 5px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">BRICK BISTRO RESTAURANT AND BAR</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="profile.php" class="w3-bar-item w3-button"><img src="img/Circle-icons-profle.svg.png" alt="Smiley face" height="20" width="20"> <?php echo $_SESSION['firstName']." ".$_SESSION['lastName']."||"?></a>
      <a href="main.php" class="w3-bar-item w3-button">HOME</a>
      <a href="#RESERVE" class="w3-bar-item w3-button">RESERVE</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="../img/c.jpg" alt="Hamburger Catering" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">Le Catering</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
 
  <!-- Contact Section -->
  <div class="">
  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="RESERVE">
</br>
    <h1>YOUR RESERVATION</h1><br>
    <p>You can also contact us by phone 00553123-2323 or email catering@catering.com, or you can send us a message here:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" value="<?php echo $_SESSION["firstName"]." ".$_SESSION["lastName"];?>" required name="Name" disabled></p>
      <p><input class="w3-input w3-padding-16" type="number" value="5" required name="People" disabled></p>
      <p><input class="w3-input w3-padding-16" type="text" value="2017-11-16T20:00" disabled></p>
      <p><input class="w3-input w3-padding-16" type="text" value="Message \ Special requirements" required name="Message" disabled></p>
      <!-- <a href="../main.php"><p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p></a> -->
    </form>
    <!-- <a href="../main.php"><p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p></a> -->
  </div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">

</footer>

</body>
</html>
