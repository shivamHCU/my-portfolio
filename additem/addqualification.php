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

        $q_level = $_POST['q_level'];
        $q_start_year = intval($_POST['q_start_year']);
        $q_finish_year = intval($_POST['q_finish_year']);
        $university_or_board = $_POST['university_or_board'];
        $q_college_name = $_POST['q_college_name'];
        $q_course = $_POST['q_course'];
        $q_marks = $_POST['q_marks'];
        $q_discription = $_POST['q_discription'];

        $conn = mysqli_connect("localhost","root","","portfolio_17mcmc49");
       
        //check connection
        if (!$conn){
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        $sql = "desc education";
        
        $result = mysqli_query($conn, $sql);
        
        if(!$result) 
        { 
          $sql = "CREATE TABLE education (q_level varchar(30), q_start_year year, q_finish_year year,university_or_board varchar(50),q_college_name varchar(60),q_course varchar(40) PRIMARY KEY,q_marks varchar(15),q_discription varchar(400))";
          $result = mysqli_query($conn, $sql);  
        }

        $sql = "INSERT INTO education (q_level, q_start_year, q_finish_year, university_or_board, q_college_name, q_course, q_marks, q_discription) VALUES('$q_level', '$q_start_year', '$q_finish_year', '$university_or_board', '$q_college_name', '$q_course', '$q_marks', '$q_discription')";

        
        $result = mysqli_query($conn, $sql);
        if($result) 
        { 
            echo "<script>alert('Qualification Added Succesfully!');</script>";
            mysqli_close($conn);
            echo "<script>location.href = '../#resume';</script>";
        }
        else{
            echo "<script>alert('Add Qualification Failed !');</script>";
        }
        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>ADD QUALIFICATION </title>
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
         ADD NEW QUALIFICATION 
      </h1>
      <!-- multistep form -->
      <div class="main-bothside" style="margin-top: 0px">
         <form onchange="myFunction()" action="./addqualification.php" method="post" enctype="multipart/form-data">
            <div class="parent-clss">
               <div class="personal-info">
                  <p style="font-size: 18px">Qualification Level</p>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" id="radio-grad" name="q_level" value="graduation" checked="">
                     <label class="form-check-label">
                     GRADUATION / Ph.D
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" id="radio-schhol" name="q_level" value="schooling" >
                     <label class="form-check-label">
                     SECONDARY / SR. SECONDARY EDUCATION
                     </label>
                  </div>
               </div>
            </div>
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <input type="text" name="q_start_year"  placeholder="Start Year" required="">
               </div>
               <div class="form-mid-w3ls" >
                  <input type="text" name="q_finish_year"  placeholder="Finish Year" required="">
               </div>
            </div> 
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <input type="text" name="university_or_board" id="uniOrBoard" placeholder="University" required="">
               </div>
            </div>
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <input type="text" name="q_college_name" id="colgOrSchhol" placeholder="College" required="">
               </div>
            </div>
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <input type="text" name="q_course" id="courseOrClass" placeholder="Course" required="">
               </div>
            </div> 
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <input type="text" name="q_marks" placeholder="Marks" required="">
               </div>
            </div> 
            <div class="form-control-w3l">
               <textarea name="q_discription" placeholder="Qualification Discription" required=""></textarea>
            </div>    
            <button type="submit" name="add_btn" >ADD QUALIFICATION</button>
            <center><div style="padding-top: 15px"><a href="../#resume" style="color:white; font-size: 16px"> CANCEL </a><div><center>            
         </form>
      </div>
   </body>
</html>

<script>
    function myFunction() {
        if (document.getElementById("radio-grad").checked){
            document.getElementById("uniOrBoard").placeholder = "University";
            document.getElementById("colgOrSchhol").placeholder = "College";
            document.getElementById("courseOrClass").placeholder = "Course";
        } else if (document.getElementById("radio-schhol").checked){
            document.getElementById("uniOrBoard").placeholder = "Board";
            document.getElementById("colgOrSchhol").placeholder = "School";
            document.getElementById("courseOrClass").placeholder = "Class";
        }
    }
</script>