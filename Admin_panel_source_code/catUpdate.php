<?php
include('header.php')
?>
<?php
include('config.php');
$sid=$_GET['id'];
$sel = "select * from category where catid=$sid";
//echo $sel;
$showdata=mysqli_query($conn,$sel);
$data = mysqli_fetch_array($showdata);

if(isset($_POST['update']))
{
    $a=$_POST["category"];
    
   $edit="update category set category='$a' where catid=$sid";
   //echo $edit;

    $data=mysqli_query($conn,$edit);
        if($data)
        {
            //mysqli_close($db); // Close connection
            //header("location: categoryView.php"); // redirects to all records page
        //header("location: dashboard.php");
            echo "<script> window.location.href = 'categoryView.php';</script>";
            
            
        }
        else
        {
            echo "<script> window.location.href = 'catUpdate.php';</script>";
        }
}    
?>
<br>
<div class="row">
        <div class="col-md-12">
            <form  class="j-forms" method="post" enctype="multipart/form-data" novalidate>
            <div class="form-content">
                <div class="unit">
                    <p class="h1" style="background-color: #31629f;color:white;height: 50px;padding: 15px;text-align: center;font-size: 18px;width: inherit;">
                        Update Category</p>
                    <label class="label">Category</label>
                        <div class="input">
                                <input class="form-control" type="text"  placeholder="Enter Category name" name="category" value="<?php  echo $data['category'] ?>">
                        </div>
                    </div>                   
            </div>
                                
                                <div class="form-footer">
                                    <button type="reset" class="btn btn-danger secondary-btn">Reset</button>
                                    <button type="submit" class="btn btn-info primary-btn" name="update">update</button>
                                </div>
                                <!-- end /.footer -->

                                </form>
                                </div>

                            </div>
<?php
include('footer.php')
?>