<?php
include('header.php')
?>
<?php
include('config.php');

?>
<br>
<div class="row">
        <div class="col-md-12">
            <form action="" class="j-forms" method="post" enctype="multipart/form-data" novalidate>
            <div class="form-content">
                <div class="unit">
                    <p class="h1" style="background-color: #31629f;color:white;height: 50px;padding: 15px;text-align: center;font-size: 18px;width: inherit;">
                        Add Semester According to Course</p>
                    <label class="label">Add Semester</label>
                        <div class="input">
                                <input class="form-control" type="text"  placeholder="Enter Semester" name="sem">
                        </div>
                    </div>                   
            </div>

             <div class="unit">
                    <label class="label">Choose Course</label>
                        <div class="input">
                            <?php
                            error_reporting(0);
        //$sel="select * from sem";
        $result="select * from course";
        $query=mysqli_query($conn,$result);
        $rowcount=mysqli_num_rows($query);
    ?>
    <select name="course" class="form-control">
        <option value="">Select One Course</option>
    <?php

        for($i=1;$i<=$rowcount;$i++)
        {
            $row=mysqli_fetch_array($query);
    ?>
    <option value="<?php echo $row["courseid"] ?>"><?php echo $row["coursename"] ?></option>
    <?php
        }
    ?>
    </select>
        </div>
    </div>
                     
                                
                                <div class="form-footer">
                                    <button type="reset" class="btn btn-danger secondary-btn">Reset</button>
                                    <button type="submit" class="btn btn-info primary-btn" name="submit">Submit</button>
                                </div>
                                <!-- end /.footer -->

                                </form>
                                </div>

                            </div>

<?php
error_reporting(0);
if(isset($_POST["submit"]))
{
    $a=$_POST["sem"];
    $b=$_POST["course"];
    $ins="insert into sem(semester,cid) values('$a','$b')";
    $qry=mysqli_query($conn,$ins);
   
    if($qry)
    {
        //echo "inserted data";
       header("location: semForm.php");
    }
    else
        echo "not inserted";
        header("location: semForm.php");
    }
?>



<?php
include('footer.php')
?>
