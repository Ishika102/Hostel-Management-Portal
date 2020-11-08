<?php session_start();?>
<?php
	include('connection.php');
	
	if(isset($_POST['Login']))
	{
		$un=$_POST['Name'];
		$ro=$_POST['roll'];
		$pass=$_POST['password'];
		if(empty($un)){
	   
			echo "Please enter username";
		}
		else if(empty($ro)){
	   
		echo "Please enter Roll no";
	   
		}
		else if(empty($pass)){
	   
			echo "Please enter Password";
	   
		}else
		{
			$qur="SELECT * FROM `std_record` WHERE `db_name`='$un' AND `db_roll`='$ro' AND `db_password`='$pass' ";
		   
		   $check=mysqli_query($conn,$qur);
		   $data1=mysqli_fetch_array($check);		   
		   
		   if(mysqli_num_rows($check)>0)
		   { 
				if($data1['db_access']==0){
					
					header("Location:disable_account.php");
				}
				else{?>
				
				<?php }
           }
	      else{
				header('Location:blog.php');
			}
         }
  

	}?>	
				<head>
				<title>Hostel Management</title>	
				<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
				<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
				<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
				<link rel="stylesheet" href="css/responsiveslides.css">
				<script src="js/jquery.min.js"></script>
				<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
				</script>
				<meta name="keywords" content="Welfare Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
				Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
				/>
				</head>
				<body>
				<script src='../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
				<script>
				(function(){
				if(typeof _bsa !== 'undefined' && _bsa) {
				// format, zoneKey, segment:value, options
				_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
				}
				})();
				</script>
				<script>
				(function(){
				if(typeof _bsa !== 'undefined' && _bsa) {
					// format, zoneKey, segment:value, options
					_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
				}
				})();
				</script>
				<script>
				(function(){
				if(typeof _bsa !== 'undefined' && _bsa) {
				// format, zoneKey, segment:value, options
				_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
				}
				})();
				</script><script>
					(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "../../../../vdo.ai/core/w3layouts/vdo.ai.js");
					</script><!-- Global site tag (gtag.js) - Google Analytics -->
				<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>
				<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());

				gtag('config', 'UA-125810435-1');
				</script>
				<script>
				  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
				ga('create', 'UA-30027142-1', 'w3layouts.com');
				  ga('send', 'pageview');
				</script>
				<body>
				<!-----start-header----->
				<div class="header">
					 <!---start-container---->
					 <div class="container">
								<!---start-top-header---->
								<div class="top-header">
									<div class="top-header-left">
										<p>XYZ</p>
										<p>UNIVERSITY</p>
									</div>
									<div class="clearfix"> </div>
								</div>
								<!---End-top-header---->
								<!----start-main-header----->
								<div class="main-header">
									<div class="logo">
										<a href="../index.php"><img src="images/logo2.png" title="logo" /></a>
									</div>
									<div class="top-nav">
									<span class="menu"></span>
										<ul>
											<li><a href="logout.php">Logout</a></li>
											<div class="clearfix"> </div>
										</ul>
									</div>
									<div class="clearfix"> </div>
									</div>
									<div class="grid_12">
									  <img src="images/clr.jpg" class="img-responsive">
									</div>
							  <!-- script-for-menu -->
						 <script>
								$("span.menu").click(function(){
									$(".top-nav ul").slideToggle("slow" , function(){
									});
								});
						 </script>
						 <!-- script-for-menu -->	 
							
									
					 </div>
					<!----End-main-header----->
				</div>		
				<!---End-header--->
							   <!---start-content----->
							<div class="content">
								<div class="container">
									<!---start-contact---->
									<!---728x90--->

									<div class="contact">
										<div class="contact-header">
											<!-- <h3>My Profile</h3> -->
											<marquee behavior="scroll" direction="left" height="10%" scrollamount="10">
											<h3>
											<?php 
												$i =1;
												$qur="SELECT * FROM `news`";
												$res=mysqli_query($conn,$qur); 
												if(mysqli_num_rows($res)>0){  
												while($data=mysqli_fetch_array($res)){
													echo "(".$i++.")"."  ";
													echo $data['db_news'];
													echo "   ";
												 }  } ?>
											</h3>
											</marquee>
									</div>
									<!---728x90--->

									<div class="contact_head">
									</div>	
									<div class="contact-grids">	
										<div class="col-md-6 contact_left">
										<div class="address">
										<br><br>
										<img src="images/profile_pic/<?php echo $data1['image_name']; ?>" width="350px" height="300px"/>
										<ul>
										<li><h3>Username :<?php echo $data1['db_name']; ?></h3></li>
										<li><h3>Roll No  :<?php echo $data1['db_roll']; ?></h3></li>
										<li><h3>Email ID :<?php echo $data1['db_email']; ?></h3></li>
										<li><h3>Hostel   :<?php echo $data1['db_hostel']; ?></h3></li>
										<li><h3>Room No  :<?php echo $data1['db_room']; ?></h3></li>
										</ul>
										</div>		
										</div>
										<div class="col-md-6 contact_right">
										<h4></h4>
										<form method="POST" action="mes_com.php">
											<div class="form_details">
											<label><h3>Username<h3></label>
											<input type="text" class="text" value ="<?php echo $data1['db_name']; ?>" disabled ><br>
											<label>Roll No</label>
											<input type="text" class="text" value="<?php echo $data1['db_roll']; ?>" disabled><br>
											<label>Email ID</label>
											<input type="text" class="text" value="<?php echo $data1['db_email']; ?>" disabled><br>
											<label>Hostel</label>
											<input type="text" class="text" value="<?php echo $data1['db_hostel']; ?>" disabled><br>
											<label>Room</label>
											<input type="text" class="text" value="<?php echo $data1['db_room']; ?>" disabled>
											<textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}" name="message">Any Message</textarea>
											<textarea value="Complaint" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Complaint';}" name="complaint">Any Complaint</textarea>
											<div class="clearfix"> </div>	
											<input name="submit" type="submit" value="Send message/Complaint">
											</div>					 
										</form>
										</div>
										<div class="clearfix"></div>
									</div>
									<!---728x90--->
										<!---End-contact---->		
									</div>
								</div>
							</div>
						<div class="footer">
						<div class="container">				 	
						<div class="col-md-3 ftr_navi ftr">
						<h3>NAVIGATION</h3>
						<ul>
						 <li><a href="#">Home</a></li>
						 <li><a href="#">About</a></li>
						 <li><a href="#">Admin</a></li>
						 <li><a href="#">Student</a></li>
						 <li><a href="#">Contact</a></li>
						</ul>
						</div>
						<div class="col-md-3 ftr_navi ftr">
						<h3>MEMBERS</h3>
						<ul>
						 <li><a href="#">Hostel Caretaker</a></li>
						 <li><a href="#">Hostel Warden</a></li>
						 <li><a href="#">Hostel Chief Warden</a></li>						
						 <li><a href="#">Dean of Student Affairs</a></li>
						</ul>
						</div>
						<div class="col-md-3 get_in_touch ftr">
							<h3>GET IN TOUCH</h3>
							<p>Ola-ola street jump,</p>
							<p>260-14 City, Country</p>
							<p>+62 000-0000-00</p>
							<p>email[at]example-site.com</p>
							<a href="mailto:mail@mlampah.com">www.example.com</a>
						</div>
						<div class="col-md-3 ftr-logo">
						<a href="index.php"><img src="images/frt-lg.png" alt=""/></a> 
				 </div>
				<div class="clearfix"></div>
			 </div>
		  </div>

	 
	<!--End-about-->
	
	</body>

<!-- Mirrored from p.w3layouts.com/demos/welfare/web/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Mar 2019 07:17:36 GMT -->
</html>
			