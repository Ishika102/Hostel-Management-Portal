<?php include('connection.php'); ?>
<?php include('header.php'); ?>
<div class="clearfix"> </div>
<div class="container">
<!---End-header--->
			<!--start-image-slider---->
    <div id="wowslider-container1">
	<div class="ws_images">
      <a href="#"><img src="data1/images/sl1.jpg" alt="Welcome to Welfare" title="Welcome to Welfare" id="wows0"/></a>
      <a href="#"><img src="data1/images/sl2.jpg" alt="Be think be Creative" title="Be think be Creative" id="wows1"/></a>
      <a href="#"><img src="data1/images/sl3.jpg" alt="Do Good " title="Do Good " id="wows2"/></a>
     </div> 
	</div>
					<!--End-image-slider---->
		 </div>
		 <!---start-content----->
		 <div class="content">
		      <div class="container">
				  <!---728x90--->

				 <div class="content-grids">
					 <h2>HOSTEL MANAGEMENT PORTAL</h2>				
					 <!---728x90--->
	 
					 <div class="col-md-4 contnt-grids">
						 <img src="images/w2.jpg" class="img-responsive" alt=""/>
						 <div class="caption2">
							 <h3><a href="#">AAAA GIRLS HOSTEL</a></h3>							 
						 </div>
					 </div>
					 <div class="col-md-4 contnt-grids cntr">
						 <img src="images/w1.jpg" class="img-responsive" alt=""/>
						 <div class="caption2">
							 <h3><a href="#">BBBB BOYS HOSTEL</a></h3>							 
						 </div>
					 </div>
					 <div class="col-md-4 contnt-grids">
						 <img src="images/w3.jpg" class="img-responsive" alt=""/>
						 <div class="caption2">
							 <h3><a href="#">CCCC BOYS HOSTEL</a></h3>							 
						 </div>
					 </div>
					 <div class="clearfix"></div>
				</div>
				  <!---728x90--->

		     </div>
	     </div> 
		 <div class="featured">
			 <div class="container">
			 <div class="project_grids">
				 <div class="col-md-4 project2 fetur">
					 <h3>NEWS & EVENTS</h3>
					 <div class="event">
						 <h5><a href="#">12 November, 2014</a></h5>
						 <p>Etiam efficitur porttitor tortor nec accumsan. Mauris et orci ante. Ut sed tortor rhoncus massa accumsan egestas. Sed fringilla at mauris sed ullamcorper.</p>
					 </div>
					 <div class="event">
						 <h5><a href="#">12 November, 2014</a></h5>
						 <p>Etiam efficitur porttitor tortor nec accumsan. Mauris et orci ante. Ut sed tortor rhoncus massa accumsan egestas. Sed fringilla at mauris sed ullamcorper.</p>
					 </div>
					 <div class="event">
						 <h5><a href="#">12 November, 2014</a></h5>
						 <p>Etiam efficitur porttitor tortor nec accumsan. Mauris et orci ante. Ut sed tortor rhoncus massa accumsan egestas. Sed fringilla at mauris sed ullamcorper.</p>
					 </div>
				 </div> 
				 <div class="col-md-4 project3 fetur">
					 <h3>IMPORTANT NOTICE</h3>
					 <ul>
						 <?php 
							$qur="SELECT * FROM `notice`";
							$res=mysqli_query($conn,$qur); 
							if(mysqli_num_rows($res)>0){  
							while($data=mysqli_fetch_array($res)){ ?>
							<li>
							<a href="admin_login/webpages/notice/<?php echo $data['db_notice']; ?>" >><?php echo  $data['db_notice']; ?>
							</a></li>	
							<?php }  } ?>
				     </ul>
				 </div>
				 <div class="clearfix"></div>
			 </div>
			 </div>
		 </div>
		 <!---->
<?php include('footer.php'); ?>