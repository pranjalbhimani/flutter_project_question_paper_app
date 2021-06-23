<?php
include('config.php');

if($_POST['type']=="")
{
	$sel = "SELECT * FROM course";
	$query = mysqli_query($conn,$sel) or die("Query Unsuccessful.");
	$str = "";
	while($row = mysqli_fetch_assoc($query))
	{
		$str .= "<option value='{$row['courseid']}'>{$row['coursename']}</option>";
	}

}
else if($_POST['type']=="semData")
{
		$sel = "SELECT * FROM sem WHERE cid = {$_POST['id']}";
		$query = mysqli_query($conn,$sel) or die("Query Unsuccessful.");
		$str = "";
		while($row = mysqli_fetch_assoc($query))
		{
			$str .= "<option value='{$row['semid']}'>{$row['semester']}</option>";
		}

}
echo $str;
?>


