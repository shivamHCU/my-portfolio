<?php    

	

	$error = '';
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}

	if(isset($_SESSION['isset'])) {
		echo "<script>location.href = '../';</script>";
	}

	if(isset($_POST['login_btn'])){
	    
	    $password = $_POST['password'];

	    $con = mysqli_connect("localhost","root","","portfolio_17mcmc49");
	   
	    //check connection
	    if (!$con){
	        printf("Connect failed: %s\n", mysqli_connect_error());
	        exit();
	    }

	    $sql = "SELECT * FROM adminPassword";
	 	
	    if ($result = mysqli_query($con,$sql))
	    {
	      // Return the number of rows in result set
	      $rowcount=mysqli_num_rows($result);
	      $row = mysqli_fetch_assoc($result); 

	      if($rowcount == 1)    
	      {
	      	if($row['adminpass'] == sha1($password))	
	        {    
	            $_SESSION['isset'] = true;   
	            echo "<script>location.href = '../';</script>";
	        }
			else{
	          echo "<script>alert('Password is not Correct !');</script>";
		      mysqli_free_result($result);
	          mysqli_close($con);
	          echo "<script>location.href = 'login.php';</script>";
	      	}    
	      }
	      mysqli_free_result($result);
	    }
	    mysqli_close($con);
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" href="images/icon/logo.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-30">
				<form action="./login.php" method="post" class="login100-form validate-form">
					<div class="login100-form-avatar">
						<img src="images/avatar-01.jpg" alt="Admin (Shivam Gangwar)">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						SHIVAM GANGWAR (ADMIN)					
					</span>
					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>
					<div class="container-login100-form-btn p-t-10">
						<input type="submit" Value = "LOGIN" name="login_btn" class="login100-form-btn">		
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
