<?php
include 'inc/database.php';
$db = new Database(); {
    $page = 'home';
}
?>

<!DOCTYPE html>
<html lang="zxx">  


    <head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Info Planet | Programming Classes</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon -->
        <link rel="apple-touch-icon" href="info.png">
        <link rel="shortcut icon" type="image/x-icon" href="assets/images/infologo.png">
        <!-- Bootstrap v4.4.1 css -->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <!-- animate css -->
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="assets/fonts/linea-fonts.css">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
        <!-- Main Menu css -->
        <link rel="stylesheet" href="assets/css/rsmenu-main.css">
        <!-- spacing css -->
        <link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="style.css"> <!-- This stylesheet dynamically changed from style.less -->
        <!-- responsive css -->
        <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
<!--        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">-->
    </head>    

    <body class="defult-home">    

        <!--Preloader area start here-->
        <div id="loader" class="loader orange-color">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="assets/images/infoplanet.png" alt="">
                </div>
            </div>
        </div>
        <!--Preloader area End here--> 
        <div class="main-content">
            <!--Full width header Start-->
            <div class="full-width-header home8-style4 main-home">
                <!--Header Start-->
                <header id="rs-header" class="rs-header">

                    <!-- Menu Start -->
                    <div class="menu-area menu-sticky">
                        <div class="container">
                            <div class="row y-middle">
                                <div class="col-lg-2">
                                    <div class="logo-cat-wrap">
                                        <div  class="logo-part">
                                            <a href="index">
                                                <img class="normal-logo" style="height:1000px;" src="info.png" alt="">
                                                <img class="sticky-logo" style="height:1000px;" src="info.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 text-right">
                                    <div class="rs-menu-area">
                                        <div class="main-menu">
                                            <div class="mobile-menu">
                                                <a class="rs-menu-toggle">
                                                    <i class="fa fa-bars"></i>
                                                </a>
                                            </div>
                                            <nav class="rs-menu">
                                                <ul class="nav-menu">
                                                    <li class=" <?php echo $page == 'home' ? 'active' : ''; ?> "> <a href="index">Home</a>

                                                    </li>
                                                    <li class=" <?php echo $page == 'about' ? 'active' : ''; ?> ">
                                                        <a href="about">About</a>

                                                    </li>

                                                    <li class=" <?php echo $page == 'courses' ? 'active' : ''; ?> ">
                                                        <a href="courses">Courses</a>

                                                    </li>

                                                    <li class=" <?php echo $page == 'batches' ? 'active' : ''; ?> ">
                                                        <a href="batches">Batches</a>

                                                    </li>

                                                    <li class=" <?php echo $page == 'gallery' ? 'active' : ''; ?> ">
                                                        <a href="gallery">Gallery</a>

                                                    </li>

                                                    <li class=" <?php echo $page == 'enquiry' ? 'active' : ''; ?> ">
                                                        <a href="enquiry">Enquiry</a>

                                                    </li>

                                                    <li class=" <?php echo $page == 'download' ? 'active' : ''; ?> ">
                                                        <a href="download">Download</a>

                                                    </li>

                                                </ul> <!-- //.nav-menu -->
                                            </nav>                                       
                                        </div> <!-- //.main-menu -->

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!--Header End-->
            </div>
        </div>
        <!--Full width header End-->


