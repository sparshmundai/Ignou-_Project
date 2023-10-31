<?php 
if(!isset($_SESSION['user_login'])) // Verify the user_login;
{
	header("Location: http://localhost/project/Final_project/Login_form/index.php");
}

if(isset($_GET['user']) && $_GET['user'] == "logout")
{
	session_destroy();
	header("Location: http://localhost/project/Final_project/Login_form/index.php");
}
$session = isset($_SESSION['user_login'])?$_SESSION['user_login']:array(); 
?>


