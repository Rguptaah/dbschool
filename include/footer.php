<!-- Footer Start -->
<footer id="rs-footer" class="bg3 rs-footer">
    <div class="container">
        <!-- Footer Address -->
        <div>
            <div class="row footer-contact-desc">
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="fa fa-map-marker"></i>
                        <h4 class="contact-title">Address</h4>
                        <p class="contact-desc">
                            <?php echo $inst_address1; ?><br>
                            <?php echo $inst_address2; ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="fa fa-phone"></i>
                        <h4 class="contact-title">Phone Number</h4>
                        <p class="contact-desc">
                            <?php echo $inst_contact; ?>
                        </p>
                        <br>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-inner">
                        <i class="fa fa-map-marker"></i>
                        <h4 class="contact-title">Email Address</h4>
                        <p class="contact-desc">
                            <?php echo $inst_email; ?><br>
                            <?php echo  $inst_url; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="about-widget">
                        <img src="assets/images/logo-white.png" alt="Footer Logo" style="margin-top:-10px;">
                        <p>Don Bosco School is an ideal school in the city of Siwan. The School has a rich heritage of above 25 years in terms of presence and is powered by deep rooted Indian values and rich culture.</p>
                        <p class="margin-remove"></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title text-uppercase">Useful Links</h5>
                    <ul class="sitemap-widget">
                        <li><a href="#sitemap"><i class="fa fa-angle-right" aria-hidden="true"></i>Sitemap</a></li>
                        <li><a href="#disclaimer"><i class="fa fa-angle-right" aria-hidden="true"></i>Disclaimer</a></li>
                        <li><a href="#tnc"><i class="fa fa-angle-right" aria-hidden="true"></i>T&C</a></li>
                        <li><a href="#privacy"><i class="fa fa-angle-right" aria-hidden="true"></i>Privacy Policy</a></li>
                        <li><a href="#gallery"><i class="fa fa-angle-right" aria-hidden="true"></i>Other</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title">OUR SITEMAP</h5>
                    <ul class="sitemap-widget">
                        <li><a href="index"><i class="fa fa-angle-right" aria-hidden="true"></i>Home</a></li>
                        <li><a href="about"><i class="fa fa-angle-right" aria-hidden="true"></i>About</a></li>
                        <li><a href="facilities"><i class="fa fa-angle-right" aria-hidden="true"></i>Facilities</a></li>
                        <li><a href="contact"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a></li>
                        <li><a href="#gallery"><i class="fa fa-angle-right" aria-hidden="true"></i>Gallery</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12">
                    <h5 class="footer-title text-uppercase">Get in Touch</h5>
                    <p>Request us for Call back</p>
                    <form class="news-form">
                        <input type="tel" class="form-input" placeholder="Enter Your Mobile Number" maxlength="10" minlength="10">
                        <button type="submit" class="form-button"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
            <div class="footer-share">
                <ul>
                    <li><a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">
                <p>© <?php echo date("Y"); ?>&nbsp;<a href="<?php echo $inst_url; ?>"><?php echo $full_name; ?></a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp">
    <i class="fa fa-angle-up"></i>
</div>

<!-- Canvas Menu start -->
<nav class="right_menu_togle">
    <div class="close-btn"><span id="nav-close" class="text-center">x</span></div>
    <div class="canvas-logo">
        <a href="index"><img src="images/logo-white.png" alt="logo"></a>
    </div>
    <ul class="sidebarnav_menu list-unstyled main-menu">
        <!--Home Menu Start-->
        <li class="current-menu-item menu-item-has-children"><a href="#">Home</a>
        </li>
        <!--Home Menu End-->

        <!--About Menu Start-->
        <li class="menu-item-has-children"><a href="#">About Us</a>
        </li>
        <!--About Menu End-->

        <!--Pages Menu Start-->
        <li class="menu-item-has-children"><a href="#">Pages</a>
        </li>
        <!--Pages Menu End-->

        <!--Courses Menu Star-->
        <li class="menu-item-has-children"><a href="#">Courses</a></li>
        <!--Courses Menu End-->

        <!--Events Menu Star-->
        <li class="menu-item-has-children"><a href="#">Events</a></li>
        <!--Events Menu End-->

        <!--blog Menu Star-->
        <li class="menu-item-has-children"><a href="#">Blog</a></li>
        <!--blog Menu End-->
        <li><a href="contact">Contact<span class="icon"></span></a></li>
    </ul>
    <!-- <div class="search-wrap">
        <label class="screen-reader-text">Search for:</label>
        <input type="search" placeholder="Search..." name="s" class="search-input" value="">
        <button type="submit" value="Search"><i class="fa fa-search"></i></button>
    </div> -->
</nav>
<!-- Canvas Menu end -->

<!-- Search Modal Start -->
<!-- <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true" class="fa fa-close"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="eg: Computer Technology" type="text">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->
<!-- Search Modal End -->

<!-- modernizr js -->
<script src="assets/js/modernizr-2.8.3.min.js"></script>
<!-- jquery latest version -->
<script src="assets/js/jquery.min.js"></script>
<!-- bootstrap js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- slick.min js -->
<script src="assets/js/slick.min.js"></script>
<!-- isotope.pkgd.min js -->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!-- imagesloaded.pkgd.min js -->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<!-- wow js -->
<script src="assets/js/wow.min.js"></script>
<!-- counter top js -->
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- magnific popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- rsmenu js -->
<script src="assets/js/rsmenu-main.js"></script>
<!-- plugins js -->
<script src="assets/js/plugins.js"></script>
<!-- main js -->
<script src="assets/js/main.js"></script>

</body>

</html>