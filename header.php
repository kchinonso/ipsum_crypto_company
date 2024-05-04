<?php
require "conn.php";
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themescare.com/demos/fina-prev/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 May 2024 19:29:36 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title> <?php echo $company_name ?></title>
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
    
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    
    <link rel="manifest" href="favicons/manifest.json">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    
    <!-- OwlCarousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    
    <!-- SlickNav CSS -->
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    
    <!-- Magnific popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
    
    <!-- PRELOADER START -->
	<!-- <div class="animationload">
		<div class="loader"></div>
	</div> -->
    <!-- PRELOADER END -->
    
    
    <!-- Header Area Start -->
    <header class="fina-header-area">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="header-top-left">
                            <p>
                                <i class="fa fa-clock-o"></i>
                                Time: Tusday-Monday : 9:00am-6:00pm
                            </p>
                            <p>
                                <i class="fa fa-phone"></i>
                                Phone: <?php echo $company_phone ?>
                            </p>
                            <p>
                                <i class="fa fa-envelope-o"></i>
                                Email: <?php echo $company_email ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="header-top-right">
                            <ul class="top-social">
                                <li>
                                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="skype"><i class="fa fa-skype"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fina-logo-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="home">
                                <img src="assets/img/logo.png" alt="fina" />
                            </a>
                        </div>
                        <!-- Responsive Menu Start -->
                        <div class="fina-responsive-menu"></div>
                        <!-- Responsive Menu End -->
                    </div>
                    <div class="col-md-8 col-sm-11">
                        <div class="mainmenu">
                            <nav>
                                <ul id="fina_navigation">
                                    <li class="current-page-item"><a href="home">home</a></li>
                                  
                                    <li>
                                        <a href="service">services</a>
                                        
                                           
                                           
                                    </li>
                                   
                                    <li>
                                        <a href="about">
                                        about us
                                        </a>
                                        <!-- <ul>
                                            <li><a href="about.html">Our Company</a></li>
                                            <li><a href="about-history.html">Company history</a></li>
                                            <li><a href="about-team.html">our team</a></li>
                                            <li><a href="about-partners.html">our partners</a></li>
                                        </ul> -->
                                    </li>
                                   
                                    <li><a href="contact">contact</a></li>
                                    <li><a href="register">Register</a></li>
                                    <li><a href="login">Login</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-1 col-sm-1">
                        <div class="search-panel">
                            <div class="search-icon">
                                <i class="fa fa-search"></i>
                            </div>
                            <div class="fina-search-box">
                                <form>
                                    <input type="search" placeholder="Keywords..." name="search" >
                                    <button type="submit" >Go!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->