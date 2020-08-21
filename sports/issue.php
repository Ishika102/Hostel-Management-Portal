<?php include('header.php'); ?>
<?php
    if(isset($_GET["equip"]))
    {
        $equip = $_GET["equip"];
	}
?>
<?php include('connection.php'); ?>
		<div class="content">
			<div class="container">
				<!---start-contact---->
				<!---728x90--->
				<div class="contact">
					<div class="contact-header">
							<h3>Sports</h3>
							<ol class="breadcrumb">
							  <li><a href="#">Home</a></li>
							  <li class="active">Sports</li>						  
							</ol>
				    </div>
					<!---728x90--->

				  <div class="contact_head">
			 </div>	
		 <div class="contact-grids">	
			 <div class="col-md-6 contact_right">	
				   <h3>Login</h3>
				  <form action="issue1.php" method="POST">
					 <div class="form_details">
						   <input type="text" class="text" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" name="Name">
						   <input type="text" class="text" value="Roll_no" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Roll_no';}" name="roll">
						   <input type="password" class="text" placeholder="Password" value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" name="password">
							<div class="clearfix"> </div>
							<input type="hidden" name="uid" value="<?php echo $equip?>" />
							<input name="Login" type="submit" value="Login">
					 </div>					 
				  </form>				
			 </div>
			 <div class="clearfix"></div>
		 </div>
							
			</div>
		</div>
<?php include('footer.php'); ?>