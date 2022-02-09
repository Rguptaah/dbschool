<?php require_once("op_lib.php") ?>
<meta name="description" content="<?php echo $full_name ?> is an English Medium School situated at <?php echo $inst_address1 ?>, <?php echo $inst_address2; ?>">
<!-- responsive tag -->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- favicon -->
<!-- <link rel="apple-touch-icon" href="apple-touch-icon.html"> -->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
<!-- bootstrap v4 css -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<!-- font-awesome css -->
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<!-- animate css -->
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<!-- owl.carousel css -->
<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
<!-- slick css -->
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<!-- magnific popup css -->
<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
<!-- Offcanvas CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
<!-- flaticon css  -->
<link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
<!-- flaticon2 css  -->
<link rel="stylesheet" type="text/css" href="assets/fonts/fonts2/flaticon.css">
<!-- rsmenu CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/rsmenu-main.css">
<!-- rsmenu transitions CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/rsmenu-transitions.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!-- responsive css -->
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
</head>

<body class="home1">
    <!--Preloader area start here-->
    <div class="book_preload">
        <div class="book">
            <div class="book__page"></div>
            <div class="book__page"></div>
            <div class="book__page"></div>
        </div>
    </div>
    <!--Preloader area end here-->

    <!--Full width header Start-->
    <div class="full-width-header">

        <!-- Toolbar Start -->
        <div class="rs-toolbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="rs-toolbar-left">
                            <div class="welcome-message">
                                <i class="fa fa-bank"></i><span>Welcome to <?php echo $full_name; ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="rs-toolbar-right">
                            <div class="toolbar-share-icon">
                                <ul>
                                    <li><a href="<?php echo $facebook; ?>"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="<?php echo $instagram; ?>"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" data-target="#applyNow" data-toggle="modal" class="apply-btn">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Toolbar End -->

        <!--Header Start-->
        <header id="rs-header" class="rs-header">

            <!-- Header Top Start -->
            <div class="rs-header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 logo-up ">
                            <div class="logo-area text-center">
                                <a href="index"><img src="assets/images/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 mail-up">
                            <div class="header-contact text-left">
                                <div id="info-details" class="widget-text">
                                    <i class="glyph-icon flaticon-email"></i>
                                    <div class="info-text">
                                        <a href="mailto:info@domain.com">
                                            <span>Mail Us</span>
                                            <?php echo $inst_email; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 contact-up col-sm-12">
                            <div class="header-contact pull-right">
                                <div id="phone-details" class="widget-text">
                                    <i class="glyph-icon flaticon-phone-call"></i>
                                    <div class="info-text">
                                        <a href="tel:<?php echo $inst_contact; ?>">
                                            <span>Call Us</span>
                                            <?php echo $inst_contact; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Top End -->

            <!-- Menu Start -->
            <div class="menu-area menu-sticky">
                <div class="container">
                    <div class="main-menu">
                        <div class="row relative">
                            <div class="col-md-3"></div>
                            <div class="col-md-6 col-sm-12">
                                <!-- <div id="logo-sticky" class="text-center">
										<a href="index.html"><img src="assets/images/logo.png" alt="logo"></a>
									</div> -->
                                <a class="rs-menu-toggle"><i class="fa fa-bars"></i>Menu</a>
                                <nav class="rs-menu">
                                    <ul class="nav-menu">
                                        <!-- Home -->
                                        <li class="current-menu-item current_page_item menu-item-has-children"> <a href="index" class="home">Home</a></li>
                                        <!-- End Home -->

                                        <!--About Menu Start-->
                                        <li class="menu-item-has-children"> <a href="about">About</a></li>
                                        <!--About Menu End-->

                                        <!-- Drop Down Pages Start -->
                                        <!-- <li class="rs-mega-menu mega-rs"> <a href="#">Mega</a>
                                            <ul class="mega-menu">
                                                <li class="mega-menu-container">
                                                    <div class="mega-menu-innner">
                                                        <div class="single-magemenu">
                                                            <ul class="sub-menu">
                                                                <li> <a href="about.html">About One</a></li>
                                                                <li><a href="about2.html">About Two</a></li>
                                                                <li><a href="blog.html">Blog</a></li>
                                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="single-magemenu">
                                                            <ul class="sub-menu">
                                                                <li> <a href="teachers.html">Teachers</a> </li>
                                                                <li> <a href="teachers-without-filter.html">Teachers Without Filter</a> </li>
                                                                <li> <a href="teachers-single.html">Teachers Single</a> </li>
                                                                <li> <a href="contact.html">Contact</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="single-magemenu">
                                                            <ul class="sub-menu">
                                                                <li> <a href="gallery.html">Gallery One</a> </li>
                                                                <li> <a href="gallery2.html">Gallery Two</a> </li>
                                                                <li> <a href="gallery3.html">Gallery Three</a> </li>
                                                                <li><a href="error-404.html">Error 404</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li> -->
                                        <!--Drop Down Pages End -->

                                        <!--Gallery Menu Start-->
                                        <li class="menu-item-has-children"> <a href="gallery">Gallery</a>
                                        </li>
                                        <!--Gallery Menu End-->

                                        <!--Events Menu Start-->
                                        <li class="menu-item-has-children"> <a href="events">Events</a>
                                            <!-- <ul class="sub-menu">
                                                <li><a href="events.html">Events</a></li>
                                                <li><a href="events-details.html">Events Details</a></li>
                                                <li> <a href="contact.html">Contact</a></li>
                                            </ul> -->
                                        </li>
                                        <!--Events Menu End-->

                                        <!-- Drop Down -->
                                        <li class="menu-item-has-children"> <a href="faculties">Faculties</a></li>
                                        <!--End Icons -->

                                        <!--blog Menu Start-->
                                        <!-- <li class="menu-item-has-children"> <a href="#">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li> -->
                                        <!--blog Menu End-->

                                        <!--Contact Menu Start-->
                                        <li> <a href="contact">Contact</a></li>
                                        <!--Contact Menu End-->
                                    </ul>
                                </nav>
                                <!-- <div class="right-bar-icon rs-offcanvas-link text-right">
                                    <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#"><i class="fa fa-search"></i></a>

                                    <a id="nav-expander" class="nav-expander fixed"><i class="fa fa-bars fa-lg white"></i></a>
                                </div> -->
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu End -->
        </header>
        <!--Header End-->

    </div>
    <!--Full width header End-->