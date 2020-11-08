<?php
   include('connection.php');
   
   $id=$_GET['usrid'];
   
   $qur="SELECT * FROM `notice` WHERE `id`='$id'";
  
   $getresult=mysqli_query($conn,$qur);   
   
   $data=mysqli_fetch_array($getresult);

?>
<?php include('header.php'); ?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Notice Section</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Notice
                                </div>
                                <div class="panel-body">
                                    <form role="form" method="POST" action="final_edit_notice.php">
										<input type="file" name="notice" >	
										<label>Upload the modified notice?</label>
										<input type="hidden" name="uid" value="<?php echo $data['id'] ?>" />
										<button type="submit" class="btn btn-default" name="submit" >Yes</button>
                                    </form>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-4 --> 
                    </div>
                    <!-- /.row -->
                    
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
<?php include('footer.php'); ?>