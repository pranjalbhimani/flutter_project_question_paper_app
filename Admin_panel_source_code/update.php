<?php
include('header.php');
?>

<br>
<div class="row">
        <div class="col-md-12">
            <form action="" class="j-forms" method="post" enctype="multipart/form-data" novalidate>
            <div class="form-content">
                <div class="unit">
<?php
include('config.php');
$sid=$_GET['id'];
$sel = "select * from subject where subid=$sid";
//echo $sel;
$showdata=mysqli_query($conn,$sel);
$data = mysqli_fetch_array($showdata);
//echo $data['file'];

if(isset($_POST['update']))
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

		
		$edit="update subject set subname='$a', subcode='$b',year='$c',file='$filename',cid=$e ,sid=$f,
		catid=$d where subid=$sid";
		echo  $edit;

		$data=mysqli_query($conn,$edit);
		if($data)
    	{
        	//mysqli_close($db); // Close connection
        	//header("location:view.php"); // redirects to all records page
        	echo "<script> window.location.href = 'view.php';</script>";
    	}
    	else
    	{
        	echo "<script> window.location.href = 'update.php';</script>";
    	}    	
}
}

?>



                    <p class="h1" style="background-color: #31629f;color:white;height: 50px;padding: 15px;text-align: center;font-size: 18px;width: inherit;">
                        Update Question Paper</p>
                    <label class="label">Subject</label>
                        <div class="input">
                                <input class="form-control" type="text"  placeholder="Enter subject name" name="t1" value="<?php echo $data['subname']?>">
                        </div>
                    </div>
                                
                                
                <div class="unit">
                        <label class="label">Subject Code</label>
                            <div class="input">
                                <input class="form-control" type="text" placeholder="Enter subject code" name="t2" value="<?php echo $data['subcode']?>">
                            </div>
                </div>
                                
                                
                <div class="unit">
                    <label class="label">Year</label>
                        <div class="input">
                            <input class="form-control" type="text" placeholder="Enter year" name="t3" value="<?php echo $data['year']?>">
                        </div>
                </div>
                                
                <div class="unit">
                    <label class="label">Choose Category</label>
                        <div class="input">
                            <?php
        $sel="select * from category";
        $query=mysqli_query($conn,$sel);
        $rowcount=mysqli_num_rows($query);

    ?>

    <select name="category" class="form-control">
        <!-- <option value="">Select One Category</option> -->

    <?php

        for($i=1;$i<=$rowcount;$i++)
        {
            $row=mysqli_fetch_array($query);
            if($data['catid'] == $row['catid'])
            {
            	$select= "selected";
            }
            else
            {
            	$select="";
            }
    ?>
    <option <?php  echo $select; ?> value="<?php echo $row["catid"] ?>"><?php echo $row["category"] ?></option>
    <?php
        }
    ?>
    </select>
        </div>
    </div>
                     

    <div class="unit">
        <label class="label">Choose Course</label>
            <div class="input">
            	     <?php
        $sel="select * from course";
        $query=mysqli_query($conn,$sel);
        $rowcount=mysqli_num_rows($query);

    ?>
                <select  name="course" id="course" class="form-control">
                    <!-- <option value="<?php echo $data['cid']?>">Select One Course</option> -->

                    <?php

        for($i=1;$i<=$rowcount;$i++)
        {
            $row=mysqli_fetch_array($query);
            if($data['cid'] == $row['courseid'])
            {
            	$select= "selected";
            }
            else
            {
            	$select="";
            }
    ?>
    <option <?php  echo $select; ?> value="<?php echo $row["courseid"] ?>"><?php echo $row["coursename"] ?></option>
    <?php
        }
    ?>
                </select>
            </div>
    </div>
    <div class="unit">
        <label class="label">Choose Semester</label>
            <div class="input">
            	   <?php
        $sel="select * from sem where cid={$data['cid']}";
        $query=mysqli_query($conn,$sel);
        $rowcount=mysqli_num_rows($query);

    ?>
                <select  name="sem" id="sem" class="form-control">
                    <!-- <option value="<?php echo $data['semester']?>">Select One Semester</option> -->
                
                     <?php

        for($i=1;$i<=$rowcount;$i++)
        {
            $row=mysqli_fetch_array($query);
            if($data['sid'] == $row['semid'])
            {
            	$select= "selected";
            }
            else
            {
            	$select="";
            }
    ?>
    <option <?php  echo $select; ?> value="<?php echo $row["semid"] ?>"><?php echo $row["semester"] ?></option>
    <?php
        }
    ?>

                </select>
               
            </div>
    </div>            
    <div class="unit">
        <label class="label">Add PDF</label>
            <div class="input">
                <input class="form-control" type="file" name="myfile" accept=".pdf">
                <span><?php echo $data['file'] ?></span>
                <img src="<?php echo "uploads/".$data['file']; ?>" width="30px" height="20px">
            </div>
    </div>
                                
                                
            </div>
                                
                                <div class="form-footer">
                                    <button type="reset" class="btn btn-danger secondary-btn">Reset</button>
                                    <button type="submit" class="btn btn-info primary-btn" name="update">Update</button>
                                </div>
                                <!-- end /.footer -->

                                </form>
                                </div>

                            </div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

    $(document).ready(function(){
    function loadData(type,course_id){
    $.ajax({
        url : "loadcs1.php",
        type : "POST",
        data : {type : type, id : course_id},
        success : function(data){
            if(type=="semData")
            {
                $("#sem").html(data);
            }
            else{
            $("#course").append(data);  
            }
            
        }
                
        });
    }

    loadData();

    $("#course").on("change",function(){
        var course=$("#course").val();
        if(course!="")
        {
            loadData("semData",course); 
        }
        else{
            $("#sem").html("");
        }
    
    });

    });
</script>
<?php
include('footer.php')
?>