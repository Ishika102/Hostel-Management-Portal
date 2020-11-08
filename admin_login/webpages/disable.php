
<?php

	include('connection.php');
		$id= $_GET['usrid'];
		
		$query="UPDATE `std_record` SET `db_access`=0 WHERE id='$id'";
		
		$check = mysqli_query($conn,$query);
	
		if($check==true)
		{	
			header("Location:student_details.php");
		}
		else
		{
			echo "Processing fail<br>";
		}
?>