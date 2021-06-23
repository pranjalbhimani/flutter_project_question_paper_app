<?php
include('config.php');
$id=$_GET['id'];
$query="delete from course where courseid='$id'";
$data=mysqli_query($conn,$query);
if($data)
	{

		header("location: courseView.php");
	}
else{
	
	header("location: courseDelete.php");
}
?>
