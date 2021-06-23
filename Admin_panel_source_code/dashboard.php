<?php
	
session_start();
if (isset($_SESSION["user"]))
{
	include('header.php');
	echo "<br>";
	echo "<h1>Welcome to Admin Panel</h1><br>";
	include('footer.php');

}
else {
	header("location: login.php");	
}

?>