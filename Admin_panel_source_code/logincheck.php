<?php
session_start();
$error = "username/password incorrect";
if(isset($_POST['signin']))
{
	$user=$_POST['username'];
	$pwd=$_POST['password'];
	if($user=="admin" and $pwd==12345678)
	{
		$_SESSION["user"] = $user;
    	header("location: dashboard.php");
	}
	else
	{
    	$_SESSION["error"] = $error;
    	header("location: login.php");
    }
}
?>