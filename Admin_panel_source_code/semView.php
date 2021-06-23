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
						View All Semester</p>
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
							$result="select * from sem";
							$data=mysqli_query($conn,$result);
							$i=1;
						?>
                <thead>
                    <tr>
                    	<th>Sr.No</th>
						<th>semid</th>
						<th>Semester</th>
						<th>cid</th>
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
									<td><?php echo $row['semid']?></td>
									<td><?php echo $row['semester']?></td>
									<td><?php echo $row['cid']?></td>
									<td class="td-center">
										<div class="btn-toolbar" role="toolbar">
										<div class="btn-group" role="group">
										<a href="semUpdate.php?&id=<?php echo $row['semid']?>" class="btn btn-default btn-sm m-user-edit"><i
										class="zmdi zmdi-edit"></i></a>
										<a href="semDelete.php?&id=<?php echo $row['semid']?>"
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