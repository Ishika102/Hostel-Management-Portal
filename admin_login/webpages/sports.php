<?php include('connection.php'); ?>
<?php include('header.php'); ?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Sports Equipments</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Sports
                                </div>
                                <div class="panel-body">
                                    <form role="form" method="POST" action="new_equipment.php" enctype="multipart">
										<div class="form-group">
										<label>Sports Name</label>
										<input type="text" name="equipment"  required>
										<label>Number of equipments</label>
										<input type="text" name="number"  required><br>
										<label>Add Image of sports</label>
										<input type="file" name="sports" placeholder="Sports Equipment Name">
										</div>
										<button type="submit" class="btn btn-default" name="submit" >Submit</button>
                                    </form>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-4 --> 
						<div class="col-lg-4">
						</div>
						<div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Sports Equipment List
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
									<tr>
									<th>Sports Equipment</th>
									<th>No of Sports Equipment</th>
									<th>No of Equipment Issued</th>
									<th>Edit</th>
									<th>Delete</th>
									</tr>
									</thead>
									<tbody>
									<?php 
									$qur="SELECT * FROM `sport`";
									$res = mysqli_query($conn,$qur); 
									if(mysqli_num_rows($res)>0){  
									while($data=mysqli_fetch_array($res)){ ?>
									<tr><h4><td>
									<?php echo $data['db_equipment']; ?>
									</td>
									<td>
									<?php echo $data['db_number']; ?>
									</td>
									<td>
									<?php echo $data['db_number']-$data['db_available']; ?>
									</td>
									<td><a href="edit_equipment.php?usrid=<?php echo $data['id'] ?>">Edit</a></td>
									<td><a href="delete_equipment.php ?usrid=<?php echo $data['id'] ?>">Delete</a></td>
									</h4></tr>
									</tbody>
								<?php }  } ?>
								</table>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
						<div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    For Further details Click on the link below
                                </div>
                                <div class="panel-body">
								<a href="Issued_equipment_list.php">Issued Equipment List</a>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                    </div>
                    <!-- /.row -->
                    
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
<?php include('footer.php'); ?>