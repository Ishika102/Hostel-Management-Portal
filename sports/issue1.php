<?php session_start();?>
<?php
	include('connection.php');
	
	if(isset($_POST['Login']))
	{
		$un=$_POST['Name'];
		$ro=$_POST['roll'];
		$equip=$_POST['uid'];
		$pass=$_POST['password'];
		if(empty($un)){
	   
			echo "Please enter username";
		}
		else if(empty($ro)){
	   
		echo "Please enter Roll no";
	   
		}
		else if(empty($pass)){
	   
			echo "Please enter Password";
	   
		}else
		{
			$qur="SELECT * FROM `std_record` WHERE `db_name`='$un' AND `db_roll`='$ro' AND `db_password`='$pass' ";
		   
		   $check=mysqli_query($conn,$qur);
		   $data1=mysqli_fetch_array($check);
		   
		   if(mysqli_num_rows($check)>0)
		   {    
				if($data1['db_access']==0){
					
					header("Location:disable_account.php");
					
				}
				else{
					
					$query="SELECT * FROM `sport` WHERE `db_equipment`='$equip'";
					$check2=mysqli_query($conn,$query);
					$data2=mysqli_fetch_array($check2);
					//echo $data2['db_available'];
					
					if(mysqli_num_rows($check2)>0)
					{
						if($data2['db_available']>0)
						{
							$final  = $data2['db_available']-1;
							$usid = $data2['id'];
							$query2 = "UPDATE `sport` SET `db_available`='$final' WHERE id='$usid'";
							
							$check3 = mysqli_query($conn,$query2);
							
							if($check3==true)
							{
								$hostel =$data1['db_hostel'];
								$room =$data1['db_room'];
								 
								$query3="INSERT INTO `sports_issue` (`db_name`,`db_equipment`,`db_roll`,`db_room`,`db_hostel`) VALUES ('$un','$equip','$ro','$room','$hostel')"; 

								$check4=mysqli_query($conn,$query3);
  	 

								if($check4==true){	
								header('Location:issue2.php');
								}
							}
						}
						else
						{
							header('Location:issue3.php');
						}							
					}
				}
           }
	      else{
				header('Location:incorrect.php');
			}
         }
  

	}?>	