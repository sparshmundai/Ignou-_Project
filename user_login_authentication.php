
<?php 
if(!isset($_SESSION['customer_reg'])) // Verify the user_login;
{
	header("Location: http://localhost/project/Final_project/Login_form/user_login.php");
}

if(isset($_GET['user']) && $_GET['user'] == "logout")
{
	session_destroy();
	header("Location: http://localhost/project/Final_project/Login_form/user_login.php");
}
$session = isset($_SESSION['user_login'])?$_SESSION['user_login']:array(); 
?>