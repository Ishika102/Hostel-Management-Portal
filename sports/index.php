<?php include('header.php'); ?>
<?php include('connection.php'); ?>
<div class="clearfix"> </div>

		 <!---start-content----->
		 <div class="content">
		      <div class="container">
				  <!---728x90--->

				 <div class="content-grids">
					 <h2>SPORTS EQUIPMENT</h2>				
					 <!---728x90--->
					 <?php 
						$qur="SELECT * FROM `sport`";
						$res=mysqli_query($conn,$qur); 
						if(mysqli_num_rows($res)>0){  
						while($data=mysqli_fetch_array($res)){
					 ?> 
					 <div class="col-md-4 contnt-grids">
						 <img src="images/w2.jpg" class="img-responsive" alt=""/>
						 <div class="caption2">
							 <h3><a href="issue.php?equip=<?php echo $data['db_equipment']; ?>"><?php echo $data['db_equipment']; ?><br><?php echo $data['db_number']; ?></a></h3>						 
						 </div>
					 </div>
					 <?php }  } ?>
					 <div class="clearfix"></div>
				</div>
				  <!---728x90--->

		     </div>
	     </div> 
<?php include('footer.php'); ?>