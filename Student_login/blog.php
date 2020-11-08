<?php include('header.php'); ?>
		<!---start-content----->
		<div class="content">
			<div class="container">
				<!---start-contact---->
				<!---728x90--->
				<div class="contact">
					<div class="contact-header">
							<h3>Student Portal</h3>
							<ol class="breadcrumb">
							  <li><a href="#">Home</a></li>
							  <li class="active">Student Portal</li>						  
							</ol>
				    </div>
					<!---728x90--->

				  <div class="contact_head">
			 </div>	
		 <div class="contact-grids">	
			  <div class="col-md-6 contact_left">
			 		<h3>Registration</h3>
				  <form action="register.php" method="POST" enctype="multipart/form-data">
					 <div class="form_details">
						   <input type="text" class="text" name="Name" required placeholder="Name">
						   <input type="text" class="text" name="email" required placeholder="Email">
						   <input type="text" class="text" name="hostel" required placeholder="Hostel">
						   <input type="text" class="text" name="room" required placeholder="Room">
						   <input type="text" class="text" name="roll" required placeholder="Roll No">
							<input type="password" class="text" placeholder="Password"  name="pass" required><br><br>
							<input type="file" name="profile_pic" >Upload profile:
							<div class="clearfix"> </div>					   
							<input name="submit" type="submit" value="Register" />
					 </div>					 
				  </form>
			 </div>
			 <div class="col-md-6 contact_right">	
				   <h3>Login</h3>
				  <form action="view_profile.php" method="POST">
					 <div class="form_details">
						   <input type="text" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" name="Name">
						   <input type="text" class="text" value="Roll_no" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Roll_no';}" name="roll">
						   <input type="password" class="text" placeholder="Password" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" name="password">
							<div class="clearfix"> </div>
							<input name="Login" type="submit" value="Login">
					 </div>					 
				  </form>				
			 </div>
			 <div class="clearfix"></div>
		 </div>
					<!---728x90--->

				  
				<!---End-contact---->		
			</div>
		</div>
<?php include('footer.php'); ?>