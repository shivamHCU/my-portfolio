<?php

    $error = '';
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(!isset($_SESSION['isset'])) {
        echo "<script>alert('Login as admin first !!');</script>";
        echo "<script>location.href = '../login/login.php';</script>";
    }
    else if(isset($_POST['upload_btn'])){


        $target = "../images/work/";
        $target = $target . basename( $_FILES['project-icon']['name']);

        $isuploaded = false;
        //This gets all the other information from the form
        $Filename=basename( $_FILES['project-icon']['name']);

        //Writes the Filename to the server
        if(move_uploaded_file($_FILES['project-icon']['tmp_name'], $target)) {
            $isuploaded = true;
        }
        
        $projectname = $_POST['project-name'];
        $projectcategory = $_POST['project-category'];
        $projectlink = $_POST['project-link'];
        $projecticon = $Filename;


        $conn = mysqli_connect("localhost","root","","portfolio_17mcmc49");
       
        //check connection
        if (!$conn){
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        $sql = "INSERT INTO projects (pname, pcategory, plink, picon) VALUES('$projectname','$projectcategory','$projectlink','$projecticon')";

        if($isuploaded)
        {    
            $result = mysqli_query($conn, $sql);
            if($result) 
            { 
                echo "<script>alert('Project Added Succesfully!');</script>";
                mysqli_close($conn);
                echo "<script>location.href = '../#portfolio';</script>";
            }
            else{
                echo "<script>alert('Add Project Failed !');</script>";
            }
        }
        else{
            echo "<script>alert('Image upload failed!');</script>";
        }
        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>ADD PROJECT</title>
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
         ADD PROJECT 
      </h1>
      <!-- multistep form -->
      <div class="main-bothside">
         <form action="./addproject.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <input type="text" name="project-name"  placeholder="Project Name" required="">
               </div>
            </div>
            <div class="form-group">   
               <div class="form-mid-w3ls">
                  <input type="text" name="project-category" placeholder="Project Category" required="">
               </div>
            </div>
            <div class="form-group">   
               <div class="form-mid-w3ls">
                  <input type="text" name="project-link" placeholder="Project Link" required="">
               </div>
            </div>
            <!--
            <div class="form-control-w3l">
               <textarea name="project-discription" placeholder="Discription..." required=""></textarea>
            </div>
            -->
            <div class="custom-file form-left-choose">
               <input type="file" class="custom-file-input" name="project-icon">
            </div>
            <button type="submit" name="upload_btn" >UPLOAD</button>
            <center><div style="padding-top: 15px"><a href="../#resume" style="color:white; font-size: 16px"> CANCEL </a><div><center>
         </form>
      </div>
   </body>
</html>