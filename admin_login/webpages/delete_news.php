<?php

  include('connection.php');

  $id=$_GET['usrid'];
  
  $qur="DELETE from `news` WHERE id=$id";

  $check=mysqli_query($conn,$qur);
    
  if($check==true){
	  
	  header('Location: news.php');
	  
  } 

 ?>