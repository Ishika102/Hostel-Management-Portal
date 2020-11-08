<?php

  include('connection.php');

  $id=$_GET['usrid'];
  
  $qur="DELETE from `notice` WHERE id=$id";

  $check=mysqli_query($conn,$qur);
    
  if($check==true){
	  
	  header('Location: notice.php');
	  
  } 

 ?>