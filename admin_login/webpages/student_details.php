<?php include('connection.php'); ?>
<?php include('header.php'); ?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Student Details</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                   Student Details
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email Address</th>
                                                    <th>Hostel Name</th>
                                                    <th>Room No</th>
													<th>Roll No</th>
													<th>Profile</th>
													<th>Access</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
												$qur="SELECT * FROM `std_record`";
												$res=mysqli_query($conn,$qur); 
												if(mysqli_num_rows($res)>0){  
												while($data=mysqli_fetch_array($res)){
											?> 
											<tr>
											<td><?php echo $data['db_name']; ?></td>
											<td><?php echo $data['db_email']; ?></td>
											<td><?php echo $data['db_hostel']; ?></td>
											<td><?php echo $data['db_room']; ?></td>
											<td><?php echo $data['db_roll']; ?></td>
											<td><img src="../images/profile_pic/<?php echo $data['image_name']; ?>" width="100px" height="100px"/></td>
											<?php if($data['db_access']==0){?>
											<td><a href="enable.php?usrid=<?php echo $data['id'] ?>">Enable</a></td><?php }?>
											<?php if($data['db_access']==1){?>
											<td><a href="disable.php?usrid=<?php echo $data['id'] ?>">Disable</a></td><?php }?>
											</tr>
											<?php }  } ?> 
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
            </div>
			<!-- /#wrapper -->
			<script>
				$(document).ready(function() {
					$('#dataTables-example').DataTable({
							responsive: true
					});
				});
			</script>
<?php include('footer.php'); ?>