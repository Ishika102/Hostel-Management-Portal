<?php include('connection.php'); 
	$name =$_POST['equipment'];
	$number =$_POST['number'];
	$data_name=$_FILES['sports']['name'];
	$data_tmp=$_FILES['sports']['tmp_name'];
	$data_size=$_FILES['sports']['size'];
	$data_type=$_FILES['sports']['type'];
	$path="images/sports/".$data_name; 
	 
	$move=move_uploaded_file($data_tmp,$path);

	if(isset($_POST['submit']))
	{
		$query="INSERT INTO `sport`(`db_equipment`,`db_number`,`db_image`) VALUES('$name','$number','$path')";
			$check = mysqli_query($conn,$query);
	
		if($check==true)
		{	
			header("Location:sports.php");
		}
		else
		{
			echo "Processing fail<br>";
		}
	}
?>
