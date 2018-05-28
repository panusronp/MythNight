<!-- <html>
<head>
<title>Register</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<form name="form1" method="post" action="save_register.php">
  Register Form <br>
  <table width="400" border="1" style="width: 400px">
    <tbody>
      <tr>
        <td width="125"> &nbsp;firstName</td>
        <td width="180">
          <input name="txtFirstName" type="text"size="20">
        </td>
      </tr>
      <tr>
        <td> &nbsp;lastName</td>
        <td><input name="txtLastName" type="text" >
        </td>
      </tr>
      <tr>
        <td> &nbsp;emailAddress</td>
        <td><input name="txtEmailAddress" type="text" >
        </td>
      </tr>
      <tr>
        <td>&nbsp;username</td>
        <td><input name="txtUsername" type="text" size="20"></td>
      </tr>
      <tr>
        <td> &nbsp;picture</td>
        <input type="file" name="picture">
      </tr>
      <tr>
        <td> &nbsp;Password</td>
        <td><input name="txtPassword" type="password">
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="Save">
</form>

<script>
  function myFunction() {
      var x = document.getElementById("myFile");
      x.disabled = true;
  }
  </script>

</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register/css/util.css">
	<link rel="stylesheet" type="text/css" href="register/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('register/images/bg-01.png');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Create Your Account
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="post" action="save_register.php">

					<div class="wrap-input100 validate-input" data-validate = "Enter Name">
						<input class="input100" type="text" name="txtFirstName" placeholder="Name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter Surname">
						<input class="input100" type="text" name="txtLastName" placeholder="Surname">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter Email">
						<input class="input100" type="text" name="txtEmailAddress" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xe81a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter Username">
						<input class="input100" type="text" name="txtUsername" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter Password">
						<input class="input100" type="password" name="txtPassword" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
					

					<div class="container-login100-form-btn m-t-32">
						<button type="submit" class="login100-form-btn">
							Submit
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="register/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="register/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="register/vendor/bootstrap/js/popper.js"></script>
	<script src="register/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="register/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="register/vendor/daterangepicker/moment.min.js"></script>
	<script src="register/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="register/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="register/js/main.js"></script>

</body>
</html>