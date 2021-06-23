<?php
include('config.php');
$id=$_GET['id'];
$query="delete from subject where subid='$id'";
$data=mysqli_query($conn,$query);
if($data)
	{

		echo "<script>alert('Data Deleted Successfully');</script>";
		header("location: view.php");
	}
else{
	echo "<script>alert('Not Data Deleted Successfully');</script>";
	header("location: view.php");
}
?>
