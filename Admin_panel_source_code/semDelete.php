<?php
include('config.php');
$sid=$_GET['id'];
$query="delete from sem where semid='$sid'";
$data=mysqli_query($conn,$query);
if($data)
	{

		header("location: semView.php");
	}
else{
	
	header("location: semDelete.php");
}
?>
