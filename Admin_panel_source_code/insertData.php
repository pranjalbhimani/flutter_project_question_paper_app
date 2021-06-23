<?php
include('config.php');
if(isset($_POST["submit"]))
{
	$a=$_POST["t1"];
	$b=$_POST["t2"];
	$c=$_POST["t3"];
	$d=$_POST["category"];
	$e=$_POST["course"];
	$f=$_POST["sem"];

    $filename = $_FILES['myfile']['name'];

    $destination = 'uploads/' . $filename;

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    $file = $_FILES['myfile']['tmp_name'];

    if (move_uploaded_file($file, $destination))
    {

		$ins="insert into subject (subname,subcode,year,file,cid,sid,catid) values('$a','$b','$c','$filename','$e','$f','$d') ";
		$qry=mysqli_query($conn,$ins);
		if($qry)
		{
			/*echo "<script>alert('Inserted Data Successfully');</script>";
			echo "<script> window.location.href = 'view.php';</script>";*/
			header("location: pdf.php");
		}
		else{
			
			header("location: pdf.php");
	}
}

}
?>