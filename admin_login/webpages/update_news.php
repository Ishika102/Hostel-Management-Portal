<?php include('connection.php'); 
	
	$news = $_POST['news'];
	if(isset($_POST['submit']))
	{
		$query="INSERT INTO `news`(`db_news`) VALUES('$news')";
		
	}
	
	$check = mysqli_query($conn,$query);
	
	if($check==true)
	{	
		header("Location:news.php");
	}
	else
	{
		echo "Processing fail<br>";
	}
?>
