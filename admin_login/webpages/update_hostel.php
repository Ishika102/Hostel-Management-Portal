<?php

	include('connection.php');
	if(isset($_POST['submit'])){
		$hostel = $_POST['new_hostel'];
		$room = $_POST['new_room'];
		$id= $_POST['uid'];
		$query="UPDATE `std_record` SET `db_hostel`='$hostel',`db_room`='$room'WHERE id='$id'";
		
		$check = mysqli_query($conn,$query);
		
		if($check==true)
		{	
			header("Location:student_details.php");
		}
		else
		{
			echo "Processing fail<br>";
		}
	}
?>