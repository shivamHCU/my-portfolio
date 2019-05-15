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

        $intresticon = $_POST['intrest-icon'];
        $intrestname = $_POST['intrest-name'];
        $intrestdiscription = $_POST['intrest-discription'];


        $conn = mysqli_connect("localhost","root","","portfolio_17mcmc49");
       
        //check connection
        if (!$conn){
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        $sql = "desc areaofintrest";
        
        $result = mysqli_query($conn, $sql);
        
        if(!$result) 
        { 
          $sql = "CREATE TABLE areaofintrest ( icon varchar(20), iname varchar(40) PRIMARY KEY, idesc varchar(250))";
          $result = mysqli_query($conn, $sql);  
        }

        $sql = "INSERT INTO areaofintrest (icon, iname, idesc) VALUES('$intresticon','$intrestname','$intrestdiscription')";

        
        $result = mysqli_query($conn, $sql);
        if($result) 
        { 
            echo "<script>alert('Intrest Added Succesfully!');</script>";
            mysqli_close($conn);
            echo "<script>location.href = '../#aboutMe';</script>";
        }
        else{
            echo "<script>alert('Add Intrest Failed !');</script>";
        }
        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>ADD INTREST</title>
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
         ADD AREA OF INTREST 
      </h1>
      <!-- multistep form -->
      <div class="main-bothside">
         <form action="./addinterest.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <input type="text" name="intrest-icon"  placeholder="Icon (pe-7s-..... | fa fa-.....)" required="">
               </div>
               <div class="form-mid-w3ls">
               </div>
            </div>
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <input type="text" name="intrest-name"  placeholder="Area of Intrest" required="">
               </div>
            </div>  
            <div class="form-control-w3l">
               <textarea name="intrest-discription" placeholder="Discription" required=""></textarea>
            </div>    
            <button type="submit" name="add_btn" >ADD INTREST</button>
            <center><div style="padding-top: 15px"><a href="../#resume" style="color:white; font-size: 16px"> CANCEL </a><div><center>
         </form>
      </div>
   </body>
</html>