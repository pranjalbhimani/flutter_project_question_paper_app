<?php

include('config.php');
$result="select * from subject s1 inner join category c on s1.catid=c.catid inner join course cr 	  on s1.cid=cr.courseid inner join sem s2 on s1.sid=s2.semid";
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