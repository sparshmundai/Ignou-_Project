<?php
require ('../db.php');
if(isset($_POST['submit']) && $_POST['submit'] == "Login")
{
	$email = $_POST['username'];
	$pass = $_POST['pass'];
	
	$sql = "SELECT * FROM `customer_reg` WHERE `username` = '".$email."' AND `password` = '".$pass."' ";
	$result = $conn->query($sql);

	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc()) 
		{
			$_SESSION['cutomer_reg'] = array(
				'user_id' => $row['id'],
				'name' => $row['username'],
				'type' => $row['type']
			);
		}
		//echo "login succ";
		header("Location: http://localhost/project/Final_project/payment.php");
	}
	else
	{
	   echo  $_SESSION['error_msg'] = "Invalid user access";
	}
	
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>User_Login_page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form method="post" action="index.php" class="login100-form validate-form" onsubmit="return form_validate(this)">
				<span class="login100-form-title p-b-37">
					Sign In
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="username" placeholder="username or email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="pass" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
				<button class="login100-form-btn" name="submit" value="Login">
						Sign In
					</button>
				</div>
				
				<br><br>
				<p><center> Note: <a href="../regform2/index.php"><h5>Create your new account.</h5></a>  </center></p>
				
				
				<!--<a href=""></a>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Or login with
					</span>
				</div>

				<div class="flex-c p-b-112">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>

					<a href="#" class="login100-social-item">
						<img src="images/icons/icon-google.png" alt="GOOGLE">
					</a>
				</div>

				<div class="text-center">
					<a href="../regform2/index.php" class="txt2 hov1">
						Sign Up-->
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
<script>
function form_validate(i)
{
	var username = i.username.value;
	var pass = i.pass.value;
	var form = true;
	if(username == "")
	{
		form = false;
		alert("Please Enter the Valid Email Address");
	}
	else if(pass == "")
	{
		form = false;
		alert("Please Enter the Password Address");
	}
	
	return form;
}
</script>
</html>