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

        $option = $_POST['option'];
        $yearorrank = $_POST['year_or_rank'];
        $eventname = $_POST['event_name'];
        $eventtypeorpos = $_POST['event_type_or_pos'];
        $eventplace = $_POST['event_place'];
        $discription = $_POST['discription'];

        $conn = mysqli_connect("localhost","root","","portfolio_17mcmc49");
       
        //check connection
        if (!$conn){
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

        if(!mysqli_query($conn, "desc achievements" )) 
        { 
          $sql = "CREATE TABLE achievements (option varchar(15), yearorrank varchar(15), eventname varchar(50) , eventtypeorpos varchar(60) PRIMARY KEY,eventplace varchar(60), discription varchar(400))";
          $result = mysqli_query($conn, $sql);  
        }

        $sql = "INSERT INTO achievements VALUES('$option', '$yearorrank', '$eventname', '$eventtypeorpos', '$eventplace', '$discription')";
   
        $result = mysqli_query($conn, $sql);
        if($result) 
        { 
            echo "<script>alert('$option Added Succesfully!');</script>";
           mysqli_close($conn);
           echo "<script>location.href = '../#resume';</script>";
        }
        else{
            echo "<script>alert('Add $option Failed !');</script>";
        }
        mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>ADD ACHIEVEMENT</title>
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
         ADD NEW ACHIEVEMENT OR RESPONSIBILITY 
      </h1>
      <!-- multistep form -->
      <div class="main-bothside" style="margin-top: 0px">
         <form onchange="myFunction()" action="./addachievement.php" method="post" enctype="multipart/form-data">
            <div class="parent-clss">
               <div class="personal-info">
                  <p style="font-size: 16px">Which one you want to add ?</p>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" id="radio-ach" name="option" value="ACHIEVEMENT" checked="">
                     <label class="form-check-label">
                     ACHIEVEMENT
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" id="radio-res" name="option" value="RESPONSIBILITY" >
                     <label class="form-check-label">
                     RESPONSIBILITIES
                     </label>
                  </div>
               </div>
            </div>
            <div class="form-group"  style="width: 25%">
               <div class="form-mid-w3ls">
                  <input type="text" name="year_or_rank" id="year_rank" placeholder="Rank">
               </div>
            </div> 
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <input type="text" name="event_name" id="e_name" placeholder="Event Name" required="">
               </div>
            </div>
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <input type="text" name="event_type_or_pos" id="type_pos" placeholder="Event Type" required="">
               </div>
            </div>
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <input type="text" name="event_place" id="e_place" placeholder="Place" required="">
               </div>
            </div> 
            <div class="form-control-w3l">
               <textarea name="discription" placeholder="Discription" required=""></textarea>
            </div>    
            <button type="submit" name="add_btn" id="addbtn" >ADD ACHIEVEMENT </button>
            <center><div style="padding-top: 15px"><a href="../#resume" style="color:white; font-size: 16px"> CANCEL </a><div><center>
         </form>
      </div>
   </body>
</html>

<script>
    function myFunction() {
        if (document.getElementById("radio-ach").checked){
            document.getElementById("year_rank").placeholder = "Rank";
            document.getElementById("type_pos").placeholder = "Event Type";
            document.getElementById("addbtn").innerHTML = "ADD ACHIEVEMENT";
        } 
        else if (document.getElementById("radio-res").checked){
            document.getElementById("year_rank").placeholder = "Session";
            document.getElementById("type_pos").placeholder = "Position";
            document.getElementById("addbtn").innerHTML = "ADD RESPONSIBILITY";
        }
    }
</script>