<?php
include('header.php')
?>
<?php
include('config.php');
$sid=$_GET['id'];
$sel = "select * from course where courseid=$sid";
//echo $sel;
$showdata=mysqli_query($conn,$sel);
$data = mysqli_fetch_array($showdata);

if(isset($_POST['update']))
{
    $a=$_POST["course"];
    $b=$_FILES["image"]['name'];
    $edit="update course set coursename='$a',image='$b' where courseid=$sid";
    $qry=mysqli_query($conn,$edit);
   
    if($qry)
    {
        //echo "inserted data";
        move_uploaded_file($_FILES["image"]["tmp_name"],"imgupload/".$_FILES["image"]["name"]);
       echo "<script> window.location.href = 'courseView.php';</script>";
    }
    else
    {
        echo "<script> window.location.href = 'courseUpdate.php';</script>";
    }
}
?>

<br>
<div class="row">
        <div class="col-md-12">
            <form action="" class="j-forms" method="post" enctype="multipart/form-data" novalidate>
            <div class="form-content">
                <div class="unit">
                    <p class="h1" style="background-color: #31629f;color:white;height: 50px;padding: 15px;text-align: center;font-size: 18px;width: inherit;">
                        Update Course</p>
                    <label class="label">Course</label>
                        <div class="input">
                                <input class="form-control" type="text"  placeholder="Enter Course name" name="course" value="<?php echo $data['coursename'] ?>">
                        </div>
                    </div>  

                    <div class="unit">
        <label class="label">Add image</label>
            <div class="input">
                <input class="form-control" type="file" name="image">
                <span><?php echo $data['image'] ?></span>
                <img src="<?php echo "imgupload/".$data['image']; ?>" width="30px" height="30px">
                
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



<?php
include('footer.php')
?>
