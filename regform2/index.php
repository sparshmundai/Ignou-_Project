<?php
require ('../db.php');


if(isset($_POST['Signup']))
{
	$name = $_POST['name'];
	$username = $_POST['email'];
	$password = $_POST['password'];
	$city = $_POST['city'];
	$mobile_no = $_POST['mobile_no'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	
	
	$sql = "INSERT INTO `customer_reg`(`status`, `name`, `username`, `city`, `mobile_no`, `gender`, `address`, `password`, `last_update`, `update_by`) VALUES (1, '".$name."', '".$username."', '".$city."', '".$mobile_no."', '".$gender."', '".$address."', '".$password."', '".date('Y-m-d H:i:s')."', 1)";
		
	if ($conn->query($sql) === TRUE) 
	{
		echo '<script type="application/javascript">alert("Registeration done successfully , now you can done Sign in");</script>';
		echo '<script type="text/javascript">
		window.location = "../Login_form/user_login.php";
		</script>'; 
		//header("Location: http://localhost/project/Final_project/regform2/index.php");
		
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
		exit;
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
	
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="index.php">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
						<div class="form-group">
                            <input type="text" class="form-input" name="city" id="city" placeholder="Your City"/>
                        </div>
						<div class="form-group">
                            <input type="text" class="form-input" name="mobile_no" id="mobile_no" placeholder="Mobile Number"/>
                        </div>
						<div class="form-group">
                           <select name="gender" id="gender" placeholder="Gender" class="form-input">
						   <option name="male">Male</option> 
						   <option name="female">Female</option> 
						   <option name="transgender">Transgender</option> 
						   </select>   
					   </div>
						<div class="form-group">
                            <input type="text" class="form-input" name="address" id="address" placeholder="Current Adress"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="Signup" id="Signup" class="form-submit" value="Signup "/>
						</div>
                    </form>
                    <p class="loginhere">
                        Already have an account ? <a href="../Login_form/user_login.php" class="loginhere-link">Sign-in here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>