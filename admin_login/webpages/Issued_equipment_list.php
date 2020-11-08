<?php include('connection.php'); ?>
<?php include('header.php'); ?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Issued Equipment List</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                  Issued Equipment List
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Equipment</th>
                                                    <th>Date</th>
                                                    <th>Room No</th>
													<th>Roll No</th>
													<th>Hostel</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
												$qur="SELECT * FROM `sports_issue`";
												$res=mysqli_query($conn,$qur); 
												if(mysqli_num_rows($res)>0){  
												while($data=mysqli_fetch_array($res)){
											?> 
											<tr>
											<td><?php echo $data['db_name']; ?></td>
											<td><?php echo $data['db_equipment']; ?></td>
											<td><?php echo $data['db_date']; ?></td>
											<td><?php echo $data['db_room']; ?></td>
											<td><?php echo $data['db_roll']; ?></td>
											<td><?php echo $data['db_hostel']; ?></td>
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