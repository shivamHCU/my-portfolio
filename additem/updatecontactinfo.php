<?php
    $error = '';
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $conn = mysqli_connect("localhost","root","","portfolio_17mcmc49"); 
    //check connection
    if (!$conn){
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    $init = true;

    if(!isset($_SESSION['isset'])) {
        echo "<script>alert('Login as admin first !!');</script>";
        echo "<script>location.href = '../login/login.php';</script>";
    }
    else if(isset($_POST['add_btn'])){

        $phoneno = $_POST['phoneno'];
        $emailid = $_POST['emailid'];
        $address = $_POST['address'];
        $addrlink = $_POST['addrlink'];

        $sql = "desc contactinfo";
        
        $result = mysqli_query($conn, $sql);
        
        if(!$result) 
        { 
            $iscreated = mysqli_query($conn, "CREATE TABLE contactinfo ( phoneno varchar(15), emailid varchar(30), address varchar(100), addrlink varchar(50))");  

            if($iscreated){
                $sql = "INSERT INTO contactinfo VALUES('$phoneno','$emailid','$address','$addrlink')";
                $result = mysqli_query($conn, $sql); 
                if($result) 
                { 
                    echo "<script>alert('Conact Info Added Succesfully!');</script>";
                    mysqli_close($conn);
                    echo "<script>location.href = '../#contact';</script>";
                }
                else{
                    echo "<script>alert('Added contact info Failed !');</script>";
                }
            }
            mysqli_close($conn);
       }
       else{

            $sql = "UPDATE contactinfo SET phoneno = '$phoneno' , emailid = '$emailid', address = '$address', addrlink = '$addrlink' "; 
            $result = mysqli_query($conn, $sql);
            if($result) 
            { 
                echo "<script>alert('Conact Info Updated Succesfully!');</script>";
                mysqli_close($conn);
                echo "<script>location.href = '../#contact';</script>";
            }
            else{
                echo "<script>alert('Update contact info Failed !');</script>";
            }
            mysqli_close($conn);
        }
    }
    else{
        $phoneno = '';
        $emailid = '';
        $address = '';
        $addrlink = '';

        $sql = "SELECT * FROM contactinfo";
        if ($result=mysqli_query($conn,$sql))
        {  
            if($row = mysqli_fetch_assoc($result))
            {                                    
                $phoneno = $row['phoneno'];
                $emailid = $row['emailid'];
                $address = $row['address'];
                $addrlink = $row['addrlink'];   
                $init = false;
            } 
        }
        mysqli_close($conn);    
    }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>UPDATE CONACT INFO</title>
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
         UPDATE CONTACT INFORMATION
      </h1>
      <!-- multistep form -->
      <div class="main-bothside">

         <form action="./updatecontactinfo.php" method="post" enctype="multipart/form-data">
            <?php 
                if($init){
            ?>
                <div class="form-group">
                    <div class="form-mid-w3ls">   
                        <input type="text" name="phoneno"  placeholder= "Phone No" required="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-mid-w3ls">
                        <input type="text" name="emailid"  placeholder="Email Id" required="">
                    </div>
                </div>  
                <div class="form-group">
                    <div class="form-mid-w3ls">
                        <input type="text" name="address"  placeholder="Current Address" required="">
                    </div>
                </div>  
                <div class="form-group">
                    <div class="form-mid-w3ls">
                        <input type="text" name="addrlink"  placeholder="Address Google-Map Link" required="">
                    </div>
                </div>    

            <?php
                }
                else{
            ?>     
                <div class="form-group">
                    <div class="form-mid-w3ls">   
                        <input type="text" name="phoneno"  value ="<?php echo $phoneno ?>" required="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-mid-w3ls">
                        <input type="text" name="emailid"  value ="<?php echo $emailid ?>" required="">
                    </div>
                </div>  
                <div class="form-group">
                    <div class="form-mid-w3ls">
                        <input type="text" name="address"  value ="<?php echo str_replace("'","''",$address) ?>" required="">
                    </div>
                </div>  
                <div class="form-group">
                    <div class="form-mid-w3ls">
                        <input type="text" name="addrlink"  value ="<?php echo $addrlink ?>" required="">
                    </div>
                </div>    
            <?php
                }
            ?>           
            <button type="submit" name="add_btn" >UPDATE CONTACT INFORMATION</button>
            <center><div style="padding-top: 15px"><a href="../#contact" style="color:white; font-size: 16px"> CANCEL </a><div><center>
         </form>
      </div>
   </body>
</html>