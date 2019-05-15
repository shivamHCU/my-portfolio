<?php

    $error = '';
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(!isset($_SESSION['isset'])) {
        echo "<script>alert('Login as admin first !!');</script>";
        echo "<script>location.href = '../login/login.php';</script>";
    }
    else if(isset($_POST['add_btn'])){

        $ss_value = $_POST['techskill-value'];
        $ss_name = $_POST['techskill-name'];

        $conn = mysqli_connect("localhost","root","","portfolio_17mcmc49");
       
        //check connection
        if (!$conn){
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        $sql = "desc techskills";
        
        $result = mysqli_query($conn, $sql);
        
        if(!$result) 
        { 
          $sql = "CREATE TABLE techskills (t_skillname varchar(40) PRIMARY KEY,  t_skillvalue int)";
          $result = mysqli_query($conn, $sql);  
        }

        $sql = "INSERT INTO techskills VALUES('$ss_name', '$ss_value')";

        
        $result = mysqli_query($conn, $sql);
        if($result) 
        { 
            echo "<script>alert('New technical Skill Added Succesfully!');</script>";
            mysqli_close($conn);
            echo "<script>location.href = '../#resume';</script>";
        }
        else{
            echo "<script>alert('Adding New technical Skill Failed !');</script>";
        }
        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>ADD TECHNICAL SKILL</title>
      <!-- Meta tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <!-- Meta tags -->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//style sheet end here-->
      <link href="//fonts.googleapis.com/css?family=Barlow:300,400,500" rel="stylesheet">
   </head>
   <body>
      <h1 class="header-w3ls" style="font-size: 40px">
         ADD NEW TECHNICAL SKILL
      </h1>
      <!-- multistep form -->
      <div class="main-bothside">
         <form action="./addtechskill.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <input type="text" name="techskill-value"  placeholder="Progress Value (in %)" required="">
               </div>
               <div class="form-mid-w3ls">
               </div>
            </div>
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <input type="text" name="techskill-name"  placeholder="Techical Skill" required="">
               </div>
            </div>  
            <button type="submit" name="add_btn" >ADD TECHNICAL SKILL</button>
            <center><div style="padding-top: 15px"><a href="../#resume" style="color:white; font-size: 16px"> CANCEL </a><div><center>            
         </form>
      </div>
   </body>
</html>