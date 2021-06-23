<?php
include('header.php')
?>

<br>
<div class="row">
        <div class="col-md-12">
            <form action="" class="j-forms" method="post" enctype="multipart/form-data" novalidate>
            <div class="form-content">
                <div class="unit">
                    <p class="h1" style="background-color: #31629f;color:white;height: 50px;padding: 15px;text-align: center;font-size: 18px;width: inherit;">
                        Add Category</p>
                    <label class="label">Category</label>
                        <div class="input">
                                <input class="form-control" type="text"  placeholder="Enter Category name" name="category">
                        </div>
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
include('config.php');
error_reporting(0);
if(isset($_POST["submit"]))
{
    $a=$_POST["category"];
    $ins="insert into category(category) values('$a')";
    $qry=mysqli_query($conn,$ins);
   
    if($qry)
    {
        //echo "inserted data";
       header("location: categoryForm.php");
    }
    else
        echo "not inserted";
        header("location: categoryForm.php");
    }
?>

<?php
include('footer.php')
?>
