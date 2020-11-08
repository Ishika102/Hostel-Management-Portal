<?php
   include('connection.php');
   
   $id=$_GET['usrid'];
   
   $qur="SELECT * FROM `sport` WHERE `id`='$id'";
  
   $getresult=mysqli_query($conn,$qur);   
   
   $data=mysqli_fetch_array($getresult);

?>
<?php include('header.php'); ?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Sports Section</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Sports
                                </div>
                                <div class="panel-body">
								<form role="form" method="POST" action="final_edit_equipment.php" enctype="multipart">
									<div class="form-group">
									<label>Sports Name</label>
									<input type="text" name="equipment" value="<?php echo $data['db_equipment'];?>"  required>
									<label>Number of equipments</label>
									<input type="text" name="number" value="<?php echo $data['db_number'];?>"  required><br>
									<label>Add Image of sports</label>
									</div>
									<input type="hidden" name="uid" value="<?php echo $data['id'] ?>" />
									<button type="submit" class="btn btn-default" name="submit" >Submit</button>
                                    </form>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
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
                    </div>
                    <!-- /.row -->
                    
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        <!-- /#wrapper -->
<?php include('footer.php'); ?>