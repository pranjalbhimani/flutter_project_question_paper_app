<?php
include('header.php')
?>
<?php
include('config.php')
?>
<br>
<div class="row">
        <div class="col-md-12">
            <form action="insertData.php" class="j-forms" method="post" enctype="multipart/form-data" novalidate>
            <div class="form-content">
                <div class="unit">
                    <p class="h1" style="background-color: #31629f;color:white;height: 50px;padding: 15px;text-align: center;font-size: 18px;width: inherit;">
                        Add Question Paper</p>
                    <label class="label">Subject</label>
                        <div class="input">
                                <input class="form-control" type="text"  placeholder="Enter subject name" name="t1">
                        </div>
                    </div>
                                
                                
                <div class="unit">
                        <label class="label">Subject Code</label>
                            <div class="input">
                                <input class="form-control" type="text" placeholder="Enter subject code" name="t2">
                            </div>
                </div>
                                
                                
                <div class="unit">
                    <label class="label">Year</label>
                        <div class="input">
                            <input class="form-control" type="text" placeholder="Enter year" name="t3">
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
        <option value="">Select One Category</option>
    <?php

        for($i=1;$i<=$rowcount;$i++)
        {
            $row=mysqli_fetch_array($query);
    ?>
    <option value="<?php echo $row["catid"] ?>"><?php echo $row["category"] ?></option>
    <?php
        }
    ?>
    </select>
        </div>
    </div>
                     

    <div class="unit">
        <label class="label">Choose Course</label>
            <div class="input">
                <select  name="course" id="course" class="form-control">
                    <option value="">Select One Course</option>
                </select>
            </div>
    </div>
    <div class="unit">
        <label class="label">Choose Semester</label>
            <div class="input">
                <select  name="sem" id="sem" class="form-control">
                    <option value="">Select One Semester</option>
                </select>
            </div>
    </div>            
    <div class="unit">
        <label class="label">Add PDF</label>
            <div class="input">
                <input class="form-control" type="file" name="myfile" accept=".pdf">
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

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

    $(document).ready(function(){
    function loadData(type,course_id){
    $.ajax({
        url : "loadcs.php",
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