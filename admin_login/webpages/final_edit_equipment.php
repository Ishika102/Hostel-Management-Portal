<?php

	include('connection.php');
	if(isset($_POST['submit'])){
		$spo = $_POST['equipment'];
		$num= $_POST['number'];
		$id = $_POST['uid'];
		$query="UPDATE `sport` SET `db_equipment`='$spo',`db_number`='$num'WHERE id='$id'";
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