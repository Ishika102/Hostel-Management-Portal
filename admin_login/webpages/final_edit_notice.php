<?php

	include('connection.php');
	if(isset($_POST['submit'])){
		$notice = $_POST['notice'];
		$id= $_POST['uid'];
		
		$query="UPDATE `notice` SET `db_notice`='$notice' WHERE id='$id'";
		
		$check = mysqli_query($conn,$query);
	
		if($check==true)
		{	
			header("Location:notice.php");
		}
		else
		{
			echo "Processing fail<br>";
		}
	}
?>