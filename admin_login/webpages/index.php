<?php
  session_start();
 
  include('connection.php');

  if(isset($_POST['btnsubmit'])){

   $un=$_POST['username'];
   $usrlen=strlen($un);
   $pas=$_POST['password'];
   
   
   if(empty($un)){
	   
	   echo "Please enter username";
   }else if($usrlen<2 OR $usrlen>8){
	   
	   echo "Please enter length between 3 to 8 charcter only";
	   
   }
   else if(empty($pas)){
	   
	   echo "Please enter password";
	   
   }else{
   
   
		   $qur="SELECT * FROM `admin` WHERE `username`='$un' AND `password`='$pas'";
		   
		   $check=mysqli_query($conn,$qur); 
		   
		   if(mysqli_num_rows($check)>0){
			   
			   $data=mysqli_fetch_array($check);
			   
			   $_SESSION['userlog']=$data['username'];
			   
			   header('Location:dashboard.php');
			   
		   }else{
			   
				header('Location:index.php');
			   
		   }
   
   } //End of main else statement

  }

   
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Admin Login Area</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="index.php" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="" >
                                    </div>
                                    
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button type="submit" name="btnsubmit" class="btn btn-lg btn-success btn-block">Login</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

    </body>
</html>
