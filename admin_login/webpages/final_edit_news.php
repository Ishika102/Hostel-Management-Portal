<?php

	include('connection.php');
	if(isset($_POST['submit'])){
		$new = $_POST['news'];
		$id= $_POST['uid'];
		
		$query="UPDATE `news` SET `db_news`='$new' WHERE id='$id'";
		
		$check = mysqli_query($conn,$query);
		
		
		
		if($check==true)
		{	
			header("Location:news.php");
		}
		else
		{
			echo "Processing fail<br>";
		}
	}
?>