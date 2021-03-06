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
<!DOCTYPE html>
<html>
<title>MYTH NIGHT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style01.css">
<body>

<!-- <div class="popup" onclick="myFunction()">Click me!
  <span class="popuptext" id="myPopup">Popup text...</span>
</div> -->


<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>MYTH NIGHT</b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <!-- <a href="login/index.html" class="w3-bar-item w3-button">SIGN IN</a> -->
      <a href="profile.php" class="w3-bar-item w3-button"><img src="img/Circle-icons-profle.svg.png" alt="Smiley face" height="20" width="20"> <?php echo $_SESSION['firstName']." ".$_SESSION['lastName']."||"?></a>
      <a href="reserve.php" class="w3-bar-item w3-button">RESERVE</a>
      <a href="logout.php" class="w3-bar-item w3-button">LOGOUT</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="img/barbg.png" alt="MythNight" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>MYTH</b></span> <span class="w3-hide-small w3-text-light-grey">EXPLORE</span></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Bars & Restuarants</h3>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">BRICK BISTRO RESTAURANT AND BAR</div>
        <a href="bar/review01.php"><img src="img/c.jpg" alt="Bars" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">name02</div>
        <a href="bar/review02.php"><img src="img/02.jpg" alt="Restuarants" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">name03</div>
        <a href="bar/review03.php"><img src="img/03.jpg" alt="Bars" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">name04</div>
        <a href="bar/review04.php"><img src="img/04.jpg" alt="Restuarants" style="width:100%">
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">name05</div>
        <a href="bar/review05.php"><img src="img/05.jpg" alt="Bars" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">name06</div>
        <a href="bar/review06.php"><img src="img/06.jpg" alt="Restuarants" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">name07</div>
        <a href="bar/review07.php"><img src="img/07.jpg" alt="Bars" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">name08</div>
        <a href="bar/review08.php"><img src="img/08.jpg" alt="Restuarants" style="width:100%">
      </div>
    </div>
  </div>

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">MOST POPULAR</h3>
    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
      occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
      laboris nisi ut aliquip ex ea commodo consequat.
    </p> -->
  </div>

  <div class="w3-row-padding w3-grayscale">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/e01.jpg" alt="en01" style="width:100%">
      <h3>en01</h3>
      <p class="w3-opacity">Tonglor</p>
      <p>Give a bit of details.</p>
      <p><a href="bar/review01.php"><button class="w3-button w3-light-grey w3-block">Reserve Now!!!</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/e02.jpg" alt="en02" style="width:100%">
      <h3>en02</h3>
      <p class="w3-opacity">Silom</p>
      <p>Give a bit of details.</p>
      <p><a href="bar/review02.php"><button class="w3-button w3-light-grey w3-block">Reserve Now!!!</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/e03.jpg" alt="en03" style="width:100%">
      <h3>en03</h3>
      <p class="w3-opacity">Siam</p>
      <p>Give a bit of details.</p>
      <p><a href="bar/review03.php"><button class="w3-button w3-light-grey w3-block">Reserve Now!!!</button></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="img/e04.jpg" alt="en04" style="width:100%">
      <h3>en04</h3>
      <p class="w3-opacity">Bangmod</p>
      <p>Give a bit of details.</p>
      <p><a href="bar/review04.php"><button class="w3-button w3-light-grey w3-block">Reserve Now!!!</button></p>
    </div>
  </div>

  <!-- Contact Section
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Lets get in touch and talk about your next project.</p>
    <form action="/action_page.php" target="_blank">
      <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>-->

<!-- End page content -->
</div>

<!-- Google Map -->
<!-- <div id="googleMap" class="w3-grayscale" style="width:100%;height:450px;"></div> -->

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by <a href="https://www.facebook.com" title="W3.CSS" target="_blank" class="w3-hover-text-green">CubeRoute</a></p>
</footer>

<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
