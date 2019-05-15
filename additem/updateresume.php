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

        $target = "../cv/";
        $target = $target . basename( $_FILES['project-icon']['name']);

        $isuploaded = false;
        
        //This gets all the other information from the form
        $Filename=basename( $_FILES['project-icon']['name']);

        $folder_path = "../cv/"; 
        // List of name of files inside 
        // specified folder 
        $files = glob($folder_path.'/*');  

        // Deleting all the files in the list 
        foreach($files as $file) {  
            if(is_file($file))  
                unlink($file);  
        } 

        //Writes the Filename to the server
        if(move_uploaded_file($_FILES['project-icon']['tmp_name'], $target)) {
            $isuploaded = true;
        }

        $conn = mysqli_connect("localhost","root","","portfolio_17mcmc49");
       
        //check connection
        if (!$conn){
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        if(!mysqli_query($conn, "desc cv_filename")){   
          mysqli_query($conn, "CREATE TABLE cv_filename (filename varchar(50))");       
        }
   
        if($isuploaded)
        {   
            if(mysqli_query($conn, "DELETE FROM cv_filename"))
            {  
              $sql = "INSERT INTO cv_filename (filename) VALUES('$Filename')";
              $result = mysqli_query($conn, $sql);
              if($result) 
              {   
                  echo "<script>alert('Resume Updated Succesfully!');</script>";
                  mysqli_close($conn);
                 echo "<script>location.href = '../#resume';</script>";
              }
              else{
                  echo "<script>alert('Resume update failed (UNABLE TO INSERT NEW CV)!');</script>";
              }
            }
            else{
                  echo "<script>alert('Resume update failed (UNABLE TO DELETED OLD CV)!');</script>";
            }
        }
        else{
            echo "<script>alert('Resume update failed (UNABLE TO UPLOAD NEW CV)!');</script>";
        }
       mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Update Resume</title>
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
         UPDATE RESUME 
      </h1>
      <!-- multistep form -->
      <div class="main-bothside">
         <form action="./updateresume.php" method="post" enctype="multipart/form-data">
            <div class="custom-file form-left-choose">
               <input type="file" class="custom-file-input" name="project-icon">
            </div>
            <button type="submit" name="upload_btn" >UPDATE</button>
            <center><div style="padding-top: 15px"><a href="../#resume" style="color:white; font-size: 16px"> CANCEL </a><div><center>            
         </form>
      </div>
   </body>
</html>