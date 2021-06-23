<?php

include('config.php');
$result= "SELECT * FROM course";
$data=mysqli_query($conn,$result);
$count=mysqli_num_rows($data);
if($count>0)
{
	while($row=mysqli_fetch_assoc($data))
	{
		$arr[]=$row;
	}
	echo json_encode($arr);
}
else{
	echo "No data found";
}
?>