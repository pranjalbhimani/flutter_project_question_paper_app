<?php
include('config.php');
$id=$_GET['id'];
$query="delete from category where catid='$id'";
$data=mysqli_query($conn,$query);
if($data)
	{

		
		header("location: categoryView.php");
	}
else{
	
	header("location: catDelete.php");
}
?>
