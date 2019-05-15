<?php
if (session_status() == PHP_SESSION_NONE){
	session_start();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="600;url=login/logout.php" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->

    <title> Shivam Gangwar </title>
    <link rel="icon" href="images/icon.png">
    <meta name="description" content="I am Shivam, working as a freelancer web developer and web designer
     my web development skills: HTMl5 -CSS3 - bootstrap -javaScript - jQuery - angular.js - Ajax - PHP - wordpress -Mysql ; I look forward to working with you soon, and i will be in time.">
    <meta name="keywords"
          content="HTML,CSS,jquery,JavaScript,kayo Gangwar, 17mcmc49, mc17mc49, kayoHCU, kayohcu">
    <meta name="author" content="Shivam Gangwar">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700,900" rel="stylesheet">

    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="css/slick.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body data-spy="scroll" data-target=".navbar-scrolled" data-offset="0" class="scrollspy-example">

<aside class="kayo-aside">

    <!-- control bar -->
    <div class="control-bar">
        <div class="text-center">
            <span class="menu-toggle">
                <i class="chart"></i>
                <i class="chart"></i>
                <i class="chart"></i>
            </span>
        </div>
        <p class="copyright">
            &copy; <a href="https://scis.uohyd.ac.in/~mc17mc49">Shivam Gangwar</a><i class="fa fa-heart"></i>
      	    <?php
    		    if(!isset($_SESSION['isset'])){
    	    ?>		
	     	    <span id="test1" style="margin-left: 30px;"><a href="login/login.php" style="color:green;" >Admin login</a></span> 
            <?php
    		    }
    		    else{
    	    ?>	
    	     	<span id="test1" style="margin-left: 30px;"><a href="login/logout.php" style="color:red;">logout</a></span> 
                
            <?php
    		    }
    	    ?>
	
	</p>
    </div>

    <!-- Start SlideMenu
    ===================================-->
    <div class="slide-menu-container">
        <!-- start the right menu -->
        <div class="slide-menu menu-opend navbar-scrolled kayo-menu-style-2">
            <div class="kayo-user-info">
                <!-- Start Social media -->
                <ul class="social-media list-unstyled text-center">
                    <li><a href="https://www.facebook.com/shivamHCU" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/shivamhcu" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="./contactmails.php" class="google-plus" target="_self"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/shivamgangwar/" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://github.com/shivamHCU" class="github" target="_blank"><i class="fa fa-github"></i></a></li>
                </ul>
                <!-- End Social media -->
                <div class="kayo-img-box">
                    <div class="kayo-img">
                        <img src="images/12.jpg" alt=""/>
                    </div>
                </div>
            </div>
            <div class="nav">
                <!-- Start Menu Links -->
                <ul class="list-unstyled kayo-links">
                    <li class="active">
                        <a href="#home"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="#aboutMe"><i class="glyphicon glyphicon-user"></i>About Me</a>
                    </li>
                    <li>
                        <a href="#portfolio"><i class="fa fa-laptop"></i>Portfolio</a>
                    </li>
                    <li>
                        <a href="#resume"><i class="glyphicon glyphicon-leaf"></i>Resume</a>
                    </li>
                    <!--
                      <li>
                          <a href="#blog"><i class="fa fa-newspaper-o"></i>Blog</a>
                      </li>
                    -->
                    <li>
                        <a href="#contact"><i class="glyphicon glyphicon-headphones"></i>Contact Me</a>
                    </li>
                
                </ul>
                <!-- End Menu Links -->
            </div>
        </div>
        <!-- start the right menu -->
    </div>
    <!-- End SlideMenu ================-->

</aside>

<main class="main-page-content">

    <!-- Start Home
    ===================================-->
    <section class="full-page" id="home">
        <div class="home overlay-container">
            <div class="overlay">
                <div class="intro-section kayo-container display-table">
                    <div class="display-table-cell">
                        <h3 class="kayo-hello">HI, IAM</h3>
                        <h1 class="mr-kayo">SHIVAM GANGWAR</h1>
                        <h3 class="kayo-work-description">&nbsp;<span class="kayo-work"></span></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Home ==================-->

    <!-- Start About Me
   ===================================-->
    <section class="full-page" id="aboutMe">
        <div class="aboutMe overlay-container">
            <!-- Intro Section -->
            <div class="kayo-intro-section">
                <div class="overlay">
                    <div class="section-intro">
                            <div class="text-center kayo-icon-box-container">
                                <div class="kayo-icon-box">
                                    <span class="glyphicon glyphicon-user kayo-icon"></span>
                                </div>
                            </div>
                            <h1 class="text-center">
                                ABOUT ME
                            </h1>
                        </div>
                </div>
            </div>
            <!-- Start know Me -->
            <div class="my-information">
                <div class="kayo-container">
                    <div class="mrkayo-main-title">
                        <h2>
                            KNOW ME
                            <span class="kayo-line"></span>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="my-image">
                                <img src="images/11.jpg" class="img-responsive" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="kayo-info-detail">
                                <h3>HELLO,</h3>
                                <p style="font-size: 16px;">
                                    “My name is <b>Shivam Gangwar</b>, and currently I'm a <b>MCA</b> student@ <b>University of Hyderabad</b>.
                                     I consider myself a good learner, and I have a good sense of humor. I enjoy meeting
                                     new people and finding ways to help them have an uplifting experience. I am dedicated,
                                     outgoing, and a team player. " Give me 'good', i'll make that 'best'."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start My Service -->
            <div class="kayo-service">
                <div class="overlay">
                    <div class="kayo-container">
                        <div class="mrkayo-main-title">
                            <h2>
                                Area of Interest
                                <span class="kayo-line"></span>
                            </h2>
                            <?php                         
                                if(isset($_SESSION['isset']))
                                {
                            ?>
                                <br><br><br>
                                <a href="./additem/addintrest.php"><button  style="background-color: green; color: white; border: none; padding: 5px; width: 170px;"><span class="fa fa-plus" style="padding-right: 8px;font-size:15px"></span>AREA OF INTEREST</button></a>
                            <?php
                                }
                            ?>
                        </div>
                        <div class="row">

                            <?php
                                if (session_status() == PHP_SESSION_NONE) {
                                    session_start();
                                }

                                $con = mysqli_connect("localhost","root","","portfolio_17mcmc49");
                                
                                //check connection
                                if (!$con){
                                    printf("Connect failed: %s\n", mysqli_connect_error());
                                    exit();
                                }

                                $sql = "SELECT * FROM areaofintrest";
                             
                                if ($result=mysqli_query($con,$sql))
                                {  
                                    while($row = mysqli_fetch_assoc($result))
                                    {           
                                        $interest_icon = $row['icon'];
                                        $interest_name = $row['iname'];
                                        $interest_desc = $row['idesc'];   
                            ?>
                                
                                <div class="col-lg-3 col-sm-6">
                                    <div class="kayo-icon-list-box">
                                        <div class="kayo-icon-box-container">
                                            <div class="kayo-icon-box">
                                                <span class="<?php echo $interest_icon ?> kayo-icon"></span>
                                            </div>
                                        </div>
                                        <div class="kayo-list-info">
                                            <h4><?php echo $interest_name ?></h4>
                                            <p>
                                                <?php echo $interest_desc ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            <?php                         
                                    } 
                                mysqli_free_result($result);
                                }
                                mysqli_close($con);
                                
                            ?>

                        </div>
                    </div>
                </div>
            </div>


            <!-- Start Me Clients
            <div class="my-clients-logo">
                <div class="kayo-container">
                    <div class="mrkayo-main-title">
                        <h2>
                            My Clients
                            <span class="kayo-line"></span>
                        </h2>
                    </div>
                    <div class="clients-slider">
                        <div class="client-logo">
                            <a href="#" target="_blank">
                                <img src="images/client/client_1.png" alt="">
                            </a>
                        </div>
                        <div class="client-logo">
                            <a href="#" target="_blank">
                                <img src="images/client/client_2.png" alt="">
                            </a>
                        </div>
                        <div class="client-logo">
                            <a href="#" target="_blank">
                                <img src="images/client/client_3.png" alt="">
                            </a>
                        </div>
                        <div class="client-logo">
                            <a href="#" target="_blank">
                                <img src="images/client/client_4.png" alt="">
                            </a>
                        </div>
                        <div class="client-logo">
                            <a href="#" target="_blank">
                                <img src="images/client/client_5.png" alt="">
                            </a>
                        </div>
                        <div class="client-logo">
                            <a href="#" target="_blank">
                                <img src="images/client/client_6.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            -->

            <!-- Start Facts About Me
            <div class="kayo-facts-about-me">
                <div class="kayo-container overlay">
                    <div class="mrkayo-main-title">
                        <h2>
                            Awesome Facts
                          <span class="kayo-line"></span>
                        </h2>
                    </div>
                    <div class="kayo-info-list">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-info">
                                    <p class="info-icon">
                                        <i class="pe-7s-display1"></i>
                                        <span class="facts-numbers" data-from="20" data-to="500" data-speed="1100"></span>
                                    </p>
                                    <h3> PROJECTS </h3>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-info">
                                    <p class="info-icon">
                                        <i class="pe-7s-alarm"></i>
                                        <span class="facts-numbers" data-from="70" data-to="750" data-speed="1100"></span>
                                    </p>
                                    <h3> Work Hours </h3>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-info">
                                    <p class="info-icon">
                                        <i class="pe-7s-headphones"></i>
                                        <span class="facts-numbers" data-from="30" data-to="150" data-speed="1100"></span>
                                    </p>
                                    <h3> Customer SUPPORT </h3>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-info">
                                    <p class="info-icon">
                                        <i class="pe-7s-smile"></i>
                                        <span class="facts-numbers" data-from="100" data-to="820" data-speed="1100"></span>
                                    </p>
                                    <h3> Happy Clients </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            -->

            <!-- Start Testimonials
            <div class="testimonials">
                <div class="kayo-container">
                    <div class="mrkayo-main-title">
                        <h2>
                            Testimonials
                            <span class="kayo-line"></span>
                        </h2>
                    </div>
                    <div class="testimonials-slider-container">
                        <!- - Testimonials Slider - ->
                        <div class="testimonials-slider">
                            <!- - Testimonials Slider Box - ->
                            <div class="testi-box text-center">
                                <div class="img-box">
                                    <img src="images/11.png" alt="">
                                </div>
                                <div class="testi-user-info">
                                    <h3>Saad Tarek</h3>
                                    <h5>Designer at Upwork</h5>
                                </div>
                                <div class="testi-desc-box">
                                    <i>“</i>
                                    <p>
                                        Praesent et purus ac libero euismod egestas. Aliquam feugiat luctus eros eget
                                        maecenas
                                        semper pulvinar. tiam in auctor tortor. Aliquam vulputate risus placerat congue
                                        ornare.
                                        Donec semper odio non efficitur congue.
                                    </p>
                                    <i>”</i>
                                </div>
                            </div>
                            <!- - Testimonials Slider Box - ->
                            <div class="testi-box text-center">
                                <div class="img-box">
                                    <img src="images/1.jpg" alt="">
                                </div>
                                <div class="testi-user-info">
                                    <h3>Amanda Catmull</h3>
                                    <h5>Designer at ProGlyphs</h5>
                                </div>
                                <div class="testi-desc-box">
                                    <i>“</i>
                                    <p>
                                        Praesent et purus ac libero euismod egestas. Aliquam feugiat luctus eros eget
                                        maecenas
                                        semper pulvinar. tiam in auctor tortor. Aliquam vulputate risus placerat congue
                                        ornare.
                                        Donec semper odio non efficitur congue.
                                    </p>
                                    <i>”</i>
                                </div>
                            </div>
                            <!- - Testimonials Slider Box - ->
                            <div class="testi-box text-center">
                                <div class="img-box">
                                    <img src="images/2.jpg" alt="">
                                </div>
                                <div class="testi-user-info">
                                    <h3>Bill Fox</h3>
                                    <h5>Designer at Amanidax</h5>
                                </div>
                                <div class="testi-desc-box">
                                    <i>“</i>
                                    <p>
                                        Praesent et purus ac libero euismod egestas. Aliquam feugiat luctus eros eget
                                        maecenas
                                        semper pulvinar. tiam in auctor tortor. Aliquam vulputate risus placerat congue
                                        ornare.
                                        Donec semper odio non efficitur congue.
                                    </p>
                                    <i>”</i>
                                </div>
                            </div>
                            <!- - Testimonials Slider Box - ->
                            <div class="testi-box text-center">
                                <div class="img-box">
                                    <img src="images/3.jpg" alt="">
                                </div>
                                <div class="testi-user-info">
                                    <h3>Joey Higgins</h3>
                                    <h5>CEO Higgins&Geox</h5>
                                </div>
                                <div class="testi-desc-box">
                                    <i>“</i>
                                    <p>
                                        Praesent et purus ac libero euismod egestas. Aliquam feugiat luctus eros eget
                                        maecenas
                                        semper pulvinar. tiam in auctor tortor. Aliquam vulputate risus placerat congue
                                        ornare.
                                        Donec semper odio non efficitur congue.
                                    </p>
                                    <i>”</i>
                                </div>
                            </div>
                        </div>
                        <!- - Silder Paging - ->
                        <ul class="paging-container list-unstyled text-center list-inline">
                            <li class="testimonials-arrows" id="testimonial-prevArrow">
                                <div class="testimonials-client-page"></div>
                                <i class="pe-7s-angle-left"></i>
                            </li>
                            <li id="testimonial-paging"></li>
                            <li class="testimonials-arrows" id="testimonial-nextArrow">
                                <div class="testimonials-client-page"></div>
                                <i class="pe-7s-angle-right"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
          -->

        </div>
    </section>


    <!-- End About Me ==================-->


    <!-- Start portfolio
    ===================================-->
    <section class="full-page" id="portfolio">
        <div class="portfolio overlay-container">
            <div class="kayo-intro-section">
                <div class="overlay">
                    <div class="section-intro">
                            <div class="text-center kayo-icon-box-container">
                                <div class="kayo-icon-box">
                                    <span class="fa fa-laptop kayo-icon"></span>
                                </div>
                            </div>
                            <h1 class="text-center">
                                PORTFOLIO
                            </h1>
                        </div>
                </div>
            </div>
            <div class="port-box">
                <div class="kayo-container">
                    <div class="mrkayo-main-title">
                        <h2>
                            My Work
                            <span class="kayo-line"></span>
                        </h2>
                        <?php                         
                            if(isset($_SESSION['isset']))
                            {
                        ?>
                            <br><br><br>
                            <a href="./additem/addproject.php"><button  style="background-color: green; color: white; border: none; padding: 5px; width: 150px;"><span class="fa fa-plus" style="padding-right: 8px;font-size:15px"></span>NEW PROJECT</button></a>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="text-center">
                        <ul class="portfolio-sorting list-unstyled text-center kayo-taps">
                            <li class="active" data-filter="*">All</li>
                            <?php
                                if (session_status() == PHP_SESSION_NONE) {
                                    session_start();
                                }

                                $con = mysqli_connect("localhost","root","","portfolio_17mcmc49");
                                
                                //check connection
                                if (!$con){
                                    printf("Connect failed: %s\n", mysqli_connect_error());
                                    exit();
                                }

                                 $sql = "SELECT distinct(pcategory) FROM projects";
                             
                                if ($result=mysqli_query($con,$sql))
                                {  
                                    while($row = mysqli_fetch_assoc($result))
                                    {           
                                        $pcategory = $row['pcategory'];
                            ?>
                                <li data-filter=".<?php echo str_replace(" ","-",strtolower($pcategory)) ?>"> <?php echo $pcategory ?></li>
                            
                            <?php
                                    }
                                mysqli_free_result($result);
                                }
                            ?>                            


                        </ul> <!--end portfolio sorting -->
                    </div>
                    <div class="portfolio-items">
                        <div class="row grid">

                            <?php

                                $sql = "SELECT * FROM projects";
                             
                                if ($result=mysqli_query($con,$sql))
                                {  
                                    while($row = mysqli_fetch_assoc($result))
                                    {           
                                        $project_name = $row['pname'];
                                        $project_category = $row['pcategory'];
                                        $project_link = $row['plink'];
                                        $project_icon = $row['picon'];
                            ?>
                                <div class="col-lg-4 col-md-6 col-sm-6 grid-item <?php echo str_replace(" ","-",strtolower($project_category)) ?>">
                                <div class="portfolio-item">
                                    <div class="port-data">
                                        <div class="port-data-front-card"><i class="fa fa-code"></i></div>
                                        <div class="port-data-back-card">
                                            <h4 class="project-name"><?php echo $project_name ?></h4>
                                            <a href='<?php echo $project_link ?>' target="_blank" class="port-show-info glyphicon glyphicon-lin glyphicon glyphicon-linkglyphicon glyphicon-linkglyphicon glyphicon-linkglyphicon glyphicon-linkglyphicon glyphicon-link"></a>
                                            <div class="project-category">
                                                <h5><?php echo $project_category ?><i class="fa fa-code pull-right"></i></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="port-image">
                                        <img src='images/work/<?php echo $project_icon ?>' class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>


                            <?php                         
                                    } 
                                mysqli_free_result($result);
                                }
                                mysqli_close($con);
                                
                            ?>

                        </div>
                    </div> <!--end row -->
                </div>
            </div>
        </div>
    </section>
    <!-- End portfolio ================-->

    <!-- Start Resume
    ===================================-->
    <section class="full-page" id="resume">
        <div class="resume overlay-container">
            <div class="kayo-intro-section">
                <div class="overlay">
                    <div class="section-intro">
                            <div class="text-center kayo-icon-box-container">
                                <div class="kayo-icon-box">
                                    <span class="glyphicon glyphicon-leaf kayo-icon"></span>
                                </div>
                            </div>
                            <h1 class="text-center">
                                RESUME
                            </h1>
                        </div>
                </div>
            </div>
            <div class="kayo-container education-workHistory">
                <div class="mrkayo-main-title">
                    <h2>
                        ACADEMIC QUALIFICATIONS
                        <span class="kayo-line"></span>
                    </h2>
                    <?php                         
                        if(isset($_SESSION['isset']))
                        {
                    ?>
                        <br><br><br>
                        <a href="./additem/addqualification.php"><button  style="background-color: green; color: white; border: none; padding: 5px; width: 170px;"><span class="fa fa-plus" style="padding-right: 8px;font-size:15px"></span>QUALIFICATION</button></a>
                    <?php
                        }
                    ?>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="kayo-education">
                            <h3 class="timeline-title">
                                <i class="pe-7s-study"></i> <span>graduation</span>
                            </h3>
                            <div class="timeline-content">
            
                                <?php
                                    if (session_status() == PHP_SESSION_NONE) {
                                        session_start();
                                    }

                                    $con = mysqli_connect("localhost","root","","portfolio_17mcmc49");
                                    
                                    //check connection
                                    if (!$con){
                                        printf("Connect failed: %s\n", mysqli_connect_error());
                                        exit();
                                    }

                                    $sql = "SELECT * FROM education where q_level = 'graduation' order by q_start_year desc";

                                    if ($result=mysqli_query($con,$sql))
                                    {  
                                        while($row = mysqli_fetch_assoc($result))
                                        {           
                                            $q_start_year = $row['q_start_year'];
                                            $q_finish_year = $row['q_finish_year'];
                                            $university_or_board = $row['university_or_board'];
                                            $q_college_name = $row['q_college_name'];
                                            $q_course = $row['q_course'];
                                            $q_marks = $row['q_marks'];
                                            $q_discription = $row['q_discription'];   
                                ?>
                                    <div class="timeline-box">  
                                        <div class="timeline-date">
                                            <?php echo $q_start_year ?> - <?php echo $q_finish_year ?>
                                        </div>
                                        <div class="timeline-info">
                                            <div class="timeline-info-header">
                                                <h3><?php echo $university_or_board ?></h3>
                                                <h5><?php echo $q_college_name ?></h5>
                                                <p><?php echo $q_course ?></p><br>
                                                <h3 style="font-size:14px">SCORE - <?php echo $q_marks ?></h3>
                                            </div>
                                            <div class="timeline-info-details">
                                                <p>
                                                    <?php echo $q_discription ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                <?php                         
                                        } 
                                    mysqli_free_result($result);
                                    }
                                    mysqli_close($con);
                                    
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="kayo-experience">
                            <h3 class="timeline-title">
                                <i class="pe-7s-ribbon"></i> <span>Secondary / sr. Secondary Education</span>
                            </h3>
                            <div class="timeline-content">

                                <?php
                                    if (session_status() == PHP_SESSION_NONE) {
                                        session_start();
                                    }

                                    $con = mysqli_connect("localhost","root","","portfolio_17mcmc49");
                                    
                                    //check connection
                                    if (!$con){
                                        printf("Connect failed: %s\n", mysqli_connect_error());
                                        exit();
                                    }

                                    $sql = "SELECT * FROM education where q_level = 'schooling' order by q_start_year desc";

                                    if ($result=mysqli_query($con,$sql))
                                    {  
                                        while($row = mysqli_fetch_assoc($result))
                                        {           
                                            $q_start_year = $row['q_start_year'];
                                            $q_finish_year = $row['q_finish_year'];
                                            $university_or_board = $row['university_or_board'];
                                            $q_college_name = $row['q_college_name'];
                                            $q_course = $row['q_course'];
                                            $q_marks = $row['q_marks'];
                                            $q_discription = $row['q_discription'];   
                                ?>
                                    <div class="timeline-box">  
                                        <div class="timeline-date">
                                            <?php echo $q_start_year ?> - <?php echo $q_finish_year ?>
                                        </div>
                                        <div class="timeline-info">
                                            <div class="timeline-info-header">
                                                <h3><?php echo $university_or_board ?></h3>
                                                <h5><?php echo $q_college_name ?></h5>
                                                <p><?php echo $q_course ?></p><br>
                                                <h3 style="font-size:14px">SCORE - <?php echo $q_marks ?></h3>
                                            </div>
                                            <div class="timeline-info-details">
                                                <p>
                                                    <?php echo $q_discription ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                <?php                         
                                        } 
                                    mysqli_free_result($result);
                                    }
                                    mysqli_close($con);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="take-my-resume">
                    <?php
            
                        $con = mysqli_connect("localhost","root","","portfolio_17mcmc49");
                        
                        //check connection
                        if (!$con){
                            printf("Connect failed: %s\n", mysqli_connect_error());
                            exit();
                        }

                        $sql = "SELECT * FROM cv_filename";

                        if($result=mysqli_query($con,$sql))
                        {  
                            $row = mysqli_fetch_assoc($result);
                            $filename = $row['filename'];   
                    ?>
                        <a href="cv/<?php echo $filename ?>" target="_blank" class="kayo-btn-1"><span class="glyphicon glyphicon-cloud-download"></span> Take My Resume</a>
                    <?php                         
                            mysqli_free_result($result);
                        } 
                        mysqli_close($con);                       

                        if(isset($_SESSION['isset']))
                        {
                    ?>
                        <br><br>
                        <a href="./additem/updateresume.php"><button  style="background-color: green; color: white; border: none; padding: 5px; width: 170px;"><span class="fa fa-refresh" style="padding-right: 8px;font-size:15px"></span>UPDATE RESUME</button></a>
                    <?php
                        }
                    ?>
                </div>
            </div>
            <div class="kayo-skills">
                <div class="overlay">
                    <div class="kayo-container">
                        <div class="soft-skills">
                            <div class="mrkayo-main-title" id="soft_skills">
                                <h2>
                                    Soft Skills
                                    <span class="kayo-line"></span>
                                </h2>
                                <?php                         
                                    if(isset($_SESSION['isset']))
                                    {
                                ?>
                                    <br><br>
                                    <a href="./additem/addsoftskill.php"><button  style="background-color: green; color: white; border: none; padding: 5px; width: 170px;"><span class="fa fa-plus" style="padding-right: 8px;font-size:15px"></span> NEW SOFT SKILL</button></a>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="row">
                                <?php
                                    $con = mysqli_connect("localhost","root","","portfolio_17mcmc49");
                                    
                                    //check connection
                                    if (!$con){
                                        printf("Connect failed: %s\n", mysqli_connect_error());
                                        exit();
                                    }

                                    $sql = "SELECT * FROM softskills order by skillvalue desc";
                                    
                                    if ($result=mysqli_query($con,$sql))
                                    {  
                                        $ctr = 1;   
                                        while($row = mysqli_fetch_assoc($result))
                                        {           
                                            $ss_name = $row['skillname'];
                                            $ss_value = $row['skillvalue'];
                                            $ss_value = $ss_value / 100.0;
                                ?>
                                    <div class="col-sm-3">
                                        <div class="progress-container">
                                            <div class="progressName" id="<?php echo 'pro'.$ctr++ ?>" data-value="<?php echo $ss_value ?>" data-color="#1894ff"></div>
                                            <h3><?php echo $ss_name ?></h3>
                                        </div>
                                    </div>        
                                <?php   
                                        }
                                    mysqli_free_result($result);    
                                    } 
                                    mysqli_close($con);                          
                                ?>
                                
                            </div>
                        </div>
                        <div class="technical-skills">
                            <div class="mrkayo-main-title">
                                <h2>
                                    Technical Skills
                                    <span class="kayo-line"></span>
                                </h2>
                                <?php                         
                                    if(isset($_SESSION['isset']))
                                    {
                                ?>
                                    <br><br>
                                    <a href="./additem/addtechskill.php"><button  style="background-color: green; color: white; border: none; padding: 5px; width: 200px;"><span class="fa fa-plus" style="padding-right: 8px;font-size:15px"></span> NEW TECHNICAL SKILL</button></a>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="row">
                                <?php
                                    $con = mysqli_connect("localhost","root","","portfolio_17mcmc49");
                                    
                                    //check connection
                                    if (!$con){
                                        printf("Connect failed: %s\n", mysqli_connect_error());
                                        exit();
                                    }

                                    $sql = "SELECT * FROM techskills";
                                    
                                    if ($result=mysqli_query($con,$sql))
                                    {  
                                        $ctr = 1;   
                                        while($row = mysqli_fetch_assoc($result))
                                        {           
                                            $ts_name = $row['t_skillname'];
                                            $ts_value = $row['t_skillvalue'];
                                ?>
                                
                                    <div class="col-sm-6">
                                        <div class="progress-bar-container primary-style">
                                            <span class="timer" data-from="0" data-to="<?php echo $ts_value ?>" data-speed="1100"
                                            data-refresh-interval="50">0</span>
                                                <div class="progress">
                                                    <div class="progress-bar active" role="progressbar" aria-valuenow="<?php echo $ts_value ?>" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                                                </div>
                                                <h3><?php echo $ts_name ?></h3>
                                        </div>
                                    </div>

                                <?php   
                                        }
                                    mysqli_free_result($result);    
                                    } 
                                    mysqli_close($con);                          
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Achievments -->
            <div class="kayo-container education-workHistory">
                <div class="mrkayo-main-title">
                    <h2>
                        Achievement and Responsibilities
                        <span class="kayo-line"></span>
                    </h2>
                    <?php                         
                        if(isset($_SESSION['isset']))
                        {
                    ?>
                        <br><br><br>
                        <a href="./additem/addachievement.php"><button  style="background-color: green; color: white; border: none; padding: 5px; width: 190px;"><span class="fa fa-plus" style="padding-right: 8px;font-size:15px"></span>NEW ACHIEVEMENT</button></a>
                    <?php
                        }
                    ?>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="kayo-education">
                            <h3 class="timeline-title">
                                <i class="pe-7s-study"></i> <span>Achievments</span>
                            </h3>
                            <div class="timeline-content">
                                
                                <?php
                                if (session_status() == PHP_SESSION_NONE) {
                                    session_start();
                                }

                                $con = mysqli_connect("localhost","root","","portfolio_17mcmc49");
                                
                                //check connection
                                if (!$con){
                                    printf("Connect failed: %s\n", mysqli_connect_error());
                                    exit();
                                }

                                $sql = "SELECT * FROM achievements where option = 'ACHIEVEMENT' order by yearorrank";

                                if ($result=mysqli_query($con,$sql))
                                {  
                                    while($row = mysqli_fetch_assoc($result))
                                    {           
                                        $option = $row['option'];
                                        $yearorrank = $row['yearorrank'];
                                        $eventname = $row['eventname'];
                                        $eventtypeorpos = $row['eventtypeorpos'];
                                        $eventplace = $row['eventplace'];
                                        $discription = $row['discription'];   
                                ?>
                                    <div class="timeline-box">  
                                        <?php
                                            if($yearorrank != 999)
                                            {
                                        ?>
                                                <div class="timeline-date">
                                                     <?php echo $yearorrank ?>
                                                </div>
                                        <?php
                                            }
                                            else{
                                        ?>       
                                                <div class="timeline-date">
                                                    <?php echo 'NA' ?>
                                                </div> 
                                        <?php
                                            }
                                        ?>
                                        <div class="timeline-info">
                                            <div class="timeline-info-header">
                                                <h3><?php echo $eventname ?></h3>
                                                <h5><?php echo $eventtypeorpos ?></h5>
                                                <h3 style="font-size:14px"><?php echo $eventplace ?></h3>
                                            </div>
                                            <div class="timeline-info-details">
                                                <p>
                                                    <?php echo $discription ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php                         
                                        } 
                                    mysqli_free_result($result);
                                    }
                                    mysqli_close($con);
                                    
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="kayo-experience">
                            <h3 class="timeline-title">
                                <i class="pe-7s-ribbon"></i> <span>RESPONSIBILITIES</span>
                            </h3>
                            <div class="timeline-content">
                                
                                <?php
                                    if (session_status() == PHP_SESSION_NONE) {
                                        session_start();
                                    }

                                    $con = mysqli_connect("localhost","root","","portfolio_17mcmc49");
                                    
                                    //check connection
                                    if (!$con){
                                        printf("Connect failed: %s\n", mysqli_connect_error());
                                        exit();
                                    }

                                    $sql = "SELECT * FROM achievements where option = 'RESPONSIBILITY' order by yearorrank desc";

                                    if ($result=mysqli_query($con,$sql))
                                    {  
                                        while($row = mysqli_fetch_assoc($result))
                                        {           
                                            $option = $row['option'];
                                            $yearorrank = $row['yearorrank'];
                                            $eventname = $row['eventname'];
                                            $eventtypeorpos = $row['eventtypeorpos'];
                                            $eventplace = $row['eventplace'];
                                            $discription = $row['discription'];   
                                ?>
                                    <div class="timeline-box">  
                                        <div class="timeline-date">
                                            <?php echo $yearorrank ?>
                                        </div>
                                        <div class="timeline-info">
                                            <div class="timeline-info-header">
                                                <h3><?php echo $eventname ?></h3>
                                                <h5><?php echo $eventtypeorpos ?></h5>
                                                <h3 style="font-size:14px"><?php echo $eventplace ?></h3>
                                            </div>
                                            <div class="timeline-info-details">
                                                <p>
                                                    <?php echo $discription ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php                         
                                        } 
                                    mysqli_free_result($result);
                                    }
                                    mysqli_close($con);
                                    
                                ?>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Skills ===================-->

    <!--

    <!- - Start Blog
    ===================================- ->
    <section class="full-page" id="blog">
        <div class="blog overlay-container">
            <div class="kayo-intro-section">
                <div class="overlay">
                    <div class="section-intro">
                        <div class="text-center kayo-icon-box-container">
                            <div class="kayo-icon-box">
                                <span class="fa fa-newspaper-o kayo-icon"></span>
                            </div>
                        </div>
                        <h1 class="text-center">
                            BLOG
                        </h1>
                    </div>
                </div>
            </div>
            <div class="port-box">
                <div class="kayo-container">
                    <div class="mrkayo-main-title">
                        <h2>
                            Last Posts
                            <span class="kayo-line"></span>
                        </h2>
                    </div>
                    <div class="posts">
                        <div class="row posts-grid">
                            <div class="col-lg-6 col-md-12 col-sm-6 post-grid-item">
                                <div>
                                    <article class="normal-post">
                                        <figure class="entry-header">
                                            <div class="post-image">
                                                <img src="images/blog/01.jpg" class="img-responsive" alt="">
                                            </div>
                                            <ul class="post-category list-unstyled">
                                                <li><a href="#">creative</a></li>
                                                <li><a href="#">Front end</a></li>
                                                <li><a href="#">web design</a></li>
                                            </ul>
                                            <ul class="post-share list-unstyled">
                                                <li class="open-post-share">
                                                    <span><i class="fa fa-share-alt"></i></span>
                                                    <ul class="post-share-links list-unstyled">
                                                        <li>
                                                            <a href="#" class="facebook-bg-hover">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="twitter-bg-hover">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="google-plus-bg-hover">
                                                                <i class="fa fa-google-plus"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </figure>
                                        <div class="entry-content">
                                            <div class="entry-post-info">
                                                <h4><a href="#">Normal Post Style</a></h4>
                                                <p>Posted 6 Dec</p>
                                            </div>
                                            <div class="entry-expert">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consectetur distinctio dolorum ea facilis non repellendus velit voluptas voluptates? Accusantium at doloribus eum iste iusto, nam rem repudiandae voluptates. Inventore.
                                                </p>
                                                <div class="post-readMore">
                                                    <a href="#" class="pull-left read-more-link">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                    <span class="pull-right"><a href="#">1 COMMENT</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entry-footer">
                                            <ul class="entry-tags list-unstyled list-inline">
                                                <li><a href="#">CSS</a></li>
                                                <li><a href="#">HTML</a></li>
                                                <li><a href="#">WORDPRESS</a></li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6 post-grid-item">
                                <div>
                                    <article class="normal-post">
                                        <figure class="entry-header">
                                            <ul class="post-share list-unstyled">
                                                <li class="open-post-share">
                                                    <span><i class="fa fa-share-alt"></i></span>
                                                    <ul class="post-share-links list-unstyled">
                                                        <li>
                                                            <a href="#" class="facebook-bg-hover">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="twitter-bg-hover">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="google-plus-bg-hover">
                                                                <i class="fa fa-google-plus"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </figure>
                                        <div class="entry-content">
                                            <div class="entry-post-info">
                                                <h4><a href="#">Normal Post Style</a></h4>
                                                <p>
                                                    Posted 3 Nov
                                                </p>
                                            </div>
                                            <div class="entry-expert">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consectetur distinctio dolorum ea facilis non repellendus velit voluptas voluptates? Accusantium at doloribus eum iste iusto, nam rem repudiandae voluptates. Inventore.
                                                </p>
                                                <div class="post-readMore">
                                                    <a href="#" class="pull-left read-more-link">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                    <span class="pull-right"><a href="#">1 COMMENT</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entry-footer">
                                            <ul class="entry-tags list-unstyled list-inline">
                                                <li><a href="#">CSS</a></li>
                                                <li><a href="#">HTML</a></li>
                                                <li><a href="#">WORDPRESS</a></li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6 post-grid-item">
                                <div>
                                    <article class="normal-post">
                                        <figure class="entry-header">
                                            <div class="post-image">
                                                <img src="images/blog/02.jpg" class="img-responsive" alt="">
                                            </div>
                                            <ul class="post-category list-unstyled">
                                                <li><a href="#">creative</a></li>
                                                <li><a href="#">Front end</a></li>
                                                <li><a href="#">web design</a></li>
                                            </ul>
                                            <ul class="post-share list-unstyled">
                                                <li class="open-post-share">
                                                    <span><i class="fa fa-share-alt"></i></span>
                                                    <ul class="post-share-links list-unstyled">
                                                        <li>
                                                            <a href="#" class="facebook-bg-hover">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="twitter-bg-hover">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="google-plus-bg-hover">
                                                                <i class="fa fa-google-plus"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </figure>
                                        <div class="entry-content">
                                            <div class="entry-post-info">
                                                <h4><a href="#">Normal Post Style</a></h4>
                                                <p>Posted 12 Oct</p>
                                            </div>
                                            <div class="entry-expert">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consectetur distinctio dolorum ea facilis non repellendus velit voluptas voluptates? Accusantium at doloribus eum iste iusto, nam rem repudiandae voluptates. Inventore.
                                                </p>
                                                <div class="post-readMore">
                                                    <a href="#" class="pull-left read-more-link">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                    <span class="pull-right"><a href="#">1 COMMENT</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entry-footer">
                                            <ul class="entry-tags list-unstyled list-inline">
                                                <li><a href="#">CSS</a></li>
                                                <li><a href="#">HTML</a></li>
                                                <li><a href="#">WORDPRESS</a></li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6 post-grid-item">
                                <div>
                                    <article class="normal-post">
                                        <figure class="entry-header">
                                            <ul class="post-share list-unstyled">
                                                <li class="open-post-share">
                                                    <span><i class="fa fa-share-alt"></i></span>
                                                    <ul class="post-share-links list-unstyled">
                                                        <li>
                                                            <a href="#" class="facebook-bg-hover">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="twitter-bg-hover">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="google-plus-bg-hover">
                                                                <i class="fa fa-google-plus"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </figure>
                                        <div class="entry-content">
                                            <div class="entry-post-info">
                                                <h4><a href="#">Normal Post Style</a></h4>
                                                <p>
                                                    Posted 18 Aug
                                                </p>
                                            </div>
                                            <div class="entry-expert">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consectetur distinctio dolorum ea facilis non repellendus velit voluptas voluptates? Accusantium at doloribus eum iste iusto, nam rem repudiandae voluptates. Inventore.
                                                </p>
                                                <div class="post-readMore">
                                                    <a href="#" class="pull-left read-more-link">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                    <span class="pull-right"><a href="#">1 COMMENT</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entry-footer">
                                            <ul class="entry-tags list-unstyled list-inline">
                                                <li><a href="#">CSS</a></li>
                                                <li><a href="#">HTML</a></li>
                                                <li><a href="#">WORDPRESS</a></li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6 post-grid-item">
                                <div>
                                    <article class="normal-post">
                                        <figure class="entry-header">
                                            <div class="post-image">
                                                <img src="images/blog/03.jpg" class="img-responsive" alt="">
                                            </div>
                                            <ul class="post-category list-unstyled">
                                                <li><a href="#">creative</a></li>
                                                <li><a href="#">Front end</a></li>
                                                <li><a href="#">web design</a></li>
                                            </ul>
                                            <ul class="post-share list-unstyled">
                                                <li class="open-post-share">
                                                    <span><i class="fa fa-share-alt"></i></span>
                                                    <ul class="post-share-links list-unstyled">
                                                        <li>
                                                            <a href="#" class="facebook-bg-hover">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="twitter-bg-hover">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="google-plus-bg-hover">
                                                                <i class="fa fa-google-plus"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </figure>
                                        <div class="entry-content">
                                            <div class="entry-post-info">
                                                <h4><a href="#">Normal Post Style</a></h4>
                                                <p>Posted 2 Jul</p>
                                            </div>
                                            <div class="entry-expert">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consectetur distinctio dolorum ea facilis non repellendus velit voluptas voluptates? Accusantium at doloribus eum iste iusto, nam rem repudiandae voluptates. Inventore.
                                                </p>
                                                <div class="post-readMore">
                                                    <a href="#" class="pull-left read-more-link">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                    <span class="pull-right"><a href="#">1 COMMENT</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entry-footer">
                                            <ul class="entry-tags list-unstyled list-inline">
                                                <li><a href="#">Design</a></li>
                                                <li><a href="#">HTML</a></li>
                                                <li><a href="#">WEB</a></li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-6 post-grid-item">
                                <div>
                                    <article class="normal-post">
                                        <figure class="entry-header">
                                            <div class="post-image">
                                                <img src="images/blog/04.jpg" class="img-responsive" alt="">
                                            </div>
                                            <ul class="post-category list-unstyled">
                                                <li><a href="#">creative</a></li>
                                                <li><a href="#">Front end</a></li>
                                                <li><a href="#">web design</a></li>
                                            </ul>
                                            <ul class="post-share list-unstyled">
                                                <li class="open-post-share">
                                                    <span><i class="fa fa-share-alt"></i></span>
                                                    <ul class="post-share-links list-unstyled">
                                                        <li>
                                                            <a href="#" class="facebook-bg-hover">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="twitter-bg-hover">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="google-plus-bg-hover">
                                                                <i class="fa fa-google-plus"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </figure>
                                        <div class="entry-content">
                                            <div class="entry-post-info">
                                                <h4><a href="#">Normal Post Style</a></h4>
                                                <p>Posted 8 Mar</p>
                                            </div>
                                            <div class="entry-expert">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consectetur distinctio dolorum ea facilis non repellendus velit voluptas voluptates? Accusantium at doloribus eum iste iusto, nam rem repudiandae voluptates. Inventore.
                                                </p>
                                                <div class="post-readMore">
                                                    <a href="#" class="pull-left read-more-link">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                    <span class="pull-right"><a href="#">1 COMMENT</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="entry-footer">
                                            <ul class="entry-tags list-unstyled list-inline">
                                                <li><a href="#">CSS</a></li>
                                                <li><a href="#">HTML</a></li>
                                                <li><a href="#">WORDPRESS</a></li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!- - End portfolio ================- ->

    -->

    <!-- Start Contact
    ===================================-->
    <section class="full-page" id="contact">
        <div class="contact overlay-container" style="color:white">
            
            <div class="kayo-intro-section">
                <div class="overlay">
                    <div class="section-intro">
                            <div class="text-center kayo-icon-box-container">
                                <div class="kayo-icon-box">
                                    <span class="glyphicon glyphicon-headphones kayo-icon"></span>
                                </div>
                            </div>
                            <h1 class="text-center">
                                CONTACT ME
                            </h1>
                    </div>
                </div>
            </div>

            <div class="contact-ways">
                <div class="kayo-container">
                    <div class="mrkayo-main-title">
                        <h2>
                            Get In Touch
                            <span class="kayo-line"></span>
                        </h2>
                        <?php                         
                            if(isset($_SESSION['isset']))
                            {
                        ?>
                            <br><br>
                            <a href="./additem/updatecontactinfo.php"><button  style="background-color: green; color: white; border: none; padding: 5px; width: 160px;"><span class="fa fa-refresh" style="padding-right: 8px;font-size:15px"></span> CONTACT INFO</button></a>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="row">
                    <?php
                        if (session_status() == PHP_SESSION_NONE) {
                            session_start();
                        }

                        $con = mysqli_connect("localhost","root","","portfolio_17mcmc49");
                        
                        //check connection
                        if (!$con){
                            printf("Connect failed: %s\n", mysqli_connect_error());
                            exit();
                        }

                        
                        $phoneno = '';
                        $emailid = '';
                        $address = '';
                        $addrlink = '';

                        $sql = "SELECT * FROM contactinfo";
                        if ($result=mysqli_query($con,$sql))
                        {  
                            if($row = mysqli_fetch_assoc($result))
                            {                                    
                                $phoneno = $row['phoneno'];
                                $emailid = $row['emailid'];
                                $address = $row['address'];
                                $addrlink = $row['addrlink'];   
                            } 
                        }       
                    ?>
                      <a href="<?php echo $addrlink ?>" target="_blank" style="text-decoration : none; color: white;">
                          <div class="col-sm-4">
                              <div class="kayo-icon-list-box">
                                <div class="kayo-icon-box-container">
                                      <div class="kayo-icon-box">
                                          <span class="glyphicon glyphicon-map-marker kayo-icon"></span>
                                      </div>
                                  </div>
                                  <div class="kayo-list-info">
                                      <h4>Location</h4>
                                      <p>
                                         <?php echo $address ?>
                                      </p>
                                  </div>
                              </div>
                          </div>
                        </a>
                        <div class="col-sm-4">
                            <div class="kayo-icon-list-box">
                                <div class="kayo-icon-box-container">
                                    <div class="kayo-icon-box">
                                        <span class="glyphicon glyphicon-phone kayo-icon"></span>
                                    </div>
                                </div>
                                <div class="kayo-list-info">
                                    <h4>Phone</h4>
                                    <p>
                                    <?php echo $phoneno ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <a href="mailto:<?php echo $emailid ?>?subject=Mail from portfolio website" target="_blank" style="text-decoration : none; color: white;">
                        <div class="col-sm-4">
                            <div class="kayo-icon-list-box">
                                <div class="kayo-icon-box-container">
                                    <div class="kayo-icon-box">
                                        <span class="fa fa-envelope kayo-icon"></span>
                                    </div>
                                </div>
                                <div class="kayo-list-info">
                                    <h4>Email</h4>
                                    <p>
                                        <?php echo $emailid ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                      </a>

                    </div>
                </div>
            </div>

            <!--
            <div class="contact-form">
                <div class="overlay">
                    <div class="kayo-container">
                        <div class="mrkayo-main-title">
                            <h2>
                                Send Message
                                <span class="kayo-line"></span>
                            </h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2 col-md-12 col-md-offset-0 col-sm-10 col-sm-offset-1">
                                <form class="kayo-form" action="./index.php" method="get" id="contact_form">
                                    <div class="input-row">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Message About .." name="messageAbout" data-messageAboutValidation>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Your Full Name" name="full_name" data-nameValidation>
                                        </div>
                                    </div>
                                    <div class="input-row">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="E-mail" name="email" data-emailValidation>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="phone" name="phone" data-phoneValidation>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Your Message .." name="message" data-messageValidation></textarea>
                                    </div>
                                    <div>
                                        <button class="btn kayo-btn-1 btn-block btn-rgba" type="submit" name="submit_contact_form">
                                            <i class="fa fa-send-o"></i> Send Your Message
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            -->

        </div>
    </section>
    <!-- End Contact ==================-->

</main>

<!-- Start Loading
===================================-->
<div class="loading">
    <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
    </div>
</div>
<!-- End Loading ==================-->

<!-- start the script -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap.min.html"></script>
<script src="js/jquery.countTo.min.html"></script>
<script src="js/jquery.nicescroll.min.html"></script>
<script src="js/typed.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/progressbar.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/ajax.js"></script>

<!-- end the script -->
</body>

<!-- Mirrored from sakura.mrkayo.com/index-demo1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 10 May 2019 08:55:41 GMT -->
</html>
