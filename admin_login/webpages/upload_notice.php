<?php 
 
 include('connection.php');
 
 if(isset($_POST['submit']))
 {
	 $data_name=$_FILES['notice']['name'];
	 $data_tmp=$_FILES['notice']['tmp_name'];
	 $data_size=$_FILES['notice']['size'];
	 $data_type=$_FILES['notice']['type'];
	 $path="notice/".$data_name; 
	 
	 $move=move_uploaded_file($data_tmp,$path);
	 
	 $qur="INSERT INTO `notice` (`db_notice`) VALUES ('$data_name')"; 

     $check=mysqli_query($conn,$qur);
	 if($check==true)
	 {
		  header('Location: notice.php');
	 }
 }
  	 
?>