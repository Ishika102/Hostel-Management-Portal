<?php
  include('connection.php');

  if(isset($_POST['submit'])){

   $un=$_POST['name'];
   $ro=$_POST['roll'];
   
   
   if(empty($un)){
	   
	   echo "Please enter username";
   }
   else if(empty($ro)){
	   
	   echo "Please enter Roll no";
	   
   }else{
   
   
		   $qur="SELECT * FROM `std_record` WHERE `db_name`='$un' AND `db_roll`='$ro'";
		   
		   $check=mysqli_query($conn,$qur);
		   $data=mysqli_fetch_array($check);		   
		   
		   if(mysqli_num_rows($check)>0){ ?>
			   <?php include('header.php') ?>
			   <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Hostel Reallocation Form</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form role="form" method="POST" action="update_hostel.php">
                                                <div class="form-group">
                                                    <label>Allocated Hostel</label>
                                                    <input class="form-control" type="text" name="hostel" value="<?php echo $data['db_hostel']; ?>">
                                                </div>
												<div class="form-group">
                                                    <label>Allocated Room</label>
                                                    <input class="form-control" type="text" name="room" value="<?php echo $data['db_room']; ?>">
                                                </div>
												<div class="form-group">
                                                    <label>Reallocated Hostel</label>
                                                    <input class="form-control" type="text" name="new_hostel">
                                                </div>
												<div class="form-group">
                                                    <label>Reallocated Room</label>
                                                    <input class="form-control" type="text" name="new_room">
                                                </div>
												<input type="hidden" name="uid" value="<?php echo $data['id'] ?>" />
                                                <button type="submit" class="btn btn-default" name="submit" >Submit Button </button>
                                            </form>
                                        </div>
                                        <!-- /.col-lg-6 (nested) -->
                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->			   
		   <?php }else{
			   
				header('Location:forms.php');
			   
		   }
   
   } //End of main else statement

  }

?>
