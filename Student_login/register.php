<?php 
 
 include('connection.php');
 
 if(isset($_POST['submit']))
 {
	 $name =$_POST['Name'];
	 $email =$_POST['email'];
	 $hostel =$_POST['hostel'];
	 $room =$_POST['room'];
	 $pass =$_POST['pass'];
	 $roll =$_POST['roll'];
	 $data_name=$_FILES['profile_pic']['name'];
	 $data_tmp=$_FILES['profile_pic']['tmp_name'];
	 $data_size=$_FILES['profile_pic']['size'];
	 $data_type=$_FILES['profile_pic']['type'];
	 $path="images/profile_pic/".$data_name; 
	 
	 $move=move_uploaded_file($data_tmp,$path);
	 
	 $qur="INSERT INTO `std_record` (`db_name`,`db_email`,`db_hostel`,`db_room`,`db_password`,`image_name`,`db_roll`,`db_access`) VALUES ('$name','$email','$hostel','$room','$pass','$data_name','$roll',1)"; 

     $check=mysqli_query($conn,$qur);
  	 
?>

<?php include('header.php'); ?>
		<!---start-content----->
<?php if($check==true){?>	
	<div class="content">
			<div class="container">
				<!---start-contact---->
				<!---728x90--->

				<div class="contact">
					<div class="contact-header">
							<h3>You have successfully registered</h3>
				    </div>
					<!---728x90--->
						
					<div class="contact_head">
					</div>	
					<div class="contact-grids">	
					<div class="clearfix"></div>
					</div>
					<!---728x90--->

				  
				<!---End-contact---->		
				</div>
			</div>
<?php include('footer.php'); ?>
<?php }
else
{
	echo "System failed";
}
 } ?>