<?php
include('header.php')
?>
<br>
<div class="row">
		<div class="col-md-12">
			<div class="widget-wrap  material-table-widget">
				<div class="widget-container margin-top-0">
					<div class="widget-content">
						<div class="data-action-bar">
						<p class="h1" style="background-color: #31629f;color:white;height: 50px;padding: 15px;text-align: center;font-size: 18px;width: inherit;">
						View All Question Paper</p>
							<!-- <div class="row">
								 <div class="col-12">
									<div class="widget-header"> --><!-- 
		<h1 style="background:#31629f;color:#fff;width:220px;font-size: 14px;height:24px;padding: 5px 0px 0px 8px;"><b>GLs University Data View</b></h1> -->
		
							<!-- 			<p>A table example with profile thumbnail</p> -->
							
									<!-- </div> -->
								<!-- </div>

							</div>
						</div> -->
						<table class="table table-striped data-tbl">
						<?php
							include('config.php');
							error_reporting(0);
							$result="select * from subject s1 inner join category c on s1.catid=c.catid inner join course cr on s1.cid=cr.courseid inner join sem s2 on s1.sid=s2.semid";
							$data=mysqli_query($conn,$result);
							$i=1;
						?>
                <thead>
                    <tr>
                    	<th>Sr.No</th>
						<th>SubName</th>
						<th>SubCode</th>
						<th>year</th>
						<th>File</th>
						<th>Category</th>
						<th>CourseName</th>
						<th>Sem</th>
                		<th class="td-center">Action</th>
    				</tr>
                </thead>
                   
                    <tbody>
                    	<?php
							while($row = mysqli_fetch_assoc($data))
							{
						?>
	
                    			
								<tr>
									<td><?php echo $i;?></td>
									<td><?php echo $row['subname']?></td>
									<td><?php echo $row['subcode']?></td>
									<td><?php echo $row['year']?></td>
									<td><?php echo $row['file']?></td>
									<td><?php echo $row['category']?></td>
									<td><?php echo $row['coursename']?></td>
									<td><?php echo $row['semester']?></td>
									<td class="td-center">
										<div class="btn-toolbar" role="toolbar">
										<div class="btn-group" role="group">
										<a href="update.php?&id=<?php echo $row['subid']?>" class="btn btn-default btn-sm m-user-edit"><i
										class="zmdi zmdi-edit"></i></a>
										<a href="delete.php?&id=<?php echo $row['subid']?>"
										class="btn btn-default btn-sm m-user-delete"><i
										class="zmdi zmdi-close"></i></a>

											</div>
										</div>
									</td>
								</tr>
								<?php
									$i++;}
								?>
                    
                           
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('footer.php')
?>