<?php include('header.php'); ?>
  
         <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Hostel Reallocation Forms</h1>
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
                                            <form role="form" method="POST" action="hostel_change.php">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input class="form-control" type="text" name="name">
                                                </div>
												<div class="form-group">
                                                    <label>Roll no</label>
                                                    <input class="form-control" type="text" name="roll">
                                                </div>
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
	
<?php include('footer.php'); ?>