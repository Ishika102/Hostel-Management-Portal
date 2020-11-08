<?php include('connection.php'); ?>
<?php include('header.php'); ?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">News Section</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    News
                                </div>
                                <div class="panel-body">
                                    <form role="form" method="POST" action="update_news.php">
										<div class="form-group">
										<textarea class="form-control" rows="7" name="news" ></textarea>
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
                                    News
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
									<tr>
									<th>News</th>
									<th>Edit</th>
									<th>Delete</th>
									</tr>
									</thead>
									<tbody>
									<?php 
									$qur="SELECT * FROM `news`";
									$res=mysqli_query($conn,$qur); 
									if(mysqli_num_rows($res)>0){  
									while($data=mysqli_fetch_array($res)){ ?>
									<tr><h4><td>
									<?php echo $data['db_news']; ?>
									</td>
									<td><a href="edit_news.php?usrid=<?php echo $data['id'] ?>">Edit</a></td>
									<td><a href="delete_news.php ?usrid=<?php echo $data['id'] ?>">Delete</a></td>
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

        </div>
        <!-- /#wrapper -->
<?php include('footer.php'); ?>