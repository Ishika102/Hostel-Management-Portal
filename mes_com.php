
<?php
  include('connection.php');

  if(isset($_POST['submit'])){

    $mes=$_POST['message'];
    $com=$_POST['complaint'];

	$qur="INSERT INTO `info` (`Message`,`Complaint`) VALUES ('$mes','$com')";
	$check=mysqli_query($conn,$qur); 
		   
	 if($check==true){
			   
		header('Location:view_profile.php');
			   
     }else{
			   
		echo "Processing Fail";
	 }
   
   } //End of main else statement
?>