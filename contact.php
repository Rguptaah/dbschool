<?php require_once("include/header.php") ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Contact | <?php echo $full_name; ?></title>


    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="page-title">Contact</h1>
                        <ul>
                            <li>
                                <a class="active" href="index">Home</a>
                            </li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- .breadcrumbs-inner end -->
    </div>
    <!-- Breadcrumbs End -->

    <!-- Contact Section Start -->
    <div class="contact-page-section sec-spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d229164.77132440894!2d84.17104639225951!3d26.17391265030842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3992fb8872debe47%3A0xf5b18ff26c068e02!2sDon%20Bosco%20High%20School!5e0!3m2!1sen!2sin!4v1644395484953!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="row contact-address-section">
                <div class="col-md-4 pl-0">
                    <div class="contact-info contact-address">
                        <i class="fa fa-map-marker"></i>
                        <h4>Address</h4>
                        <p><?php echo $inst_address1; ?></p>
                        <p><?php echo $inst_address2; ?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info contact-phone">
                        <i class="fa fa-phone"></i>
                        <h4>Phone Number</h4>
                        <a href="tel:<?php echo $inst_contact; ?>">+91 <?php echo $inst_contact; ?></a>
                        <br>
                    </div>
                </div>
                <div class="col-md-4 pr-0">
                    <div class="contact-info contact-email">
                        <i class="fa fa-envelope"></i>
                        <h4>Email Address</h4>
                        <a href="mailto:<?php echo $inst_email; ?>">
                            <p><?php echo $inst_email; ?></p>
                        </a>
                        <a href="#">
                            <p><?php echo $inst_url; ?></p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-comment-section">
                <div class="card shadow">
                    <div class="card-header p-2">
                        <h5 class="text-center bg-black text-orangered">Get In Touch</h5>
                    </div>
                    <div class="card-body">
                        <div id="form-messages"></div>
                        <form id="contact-form" method="post">
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>First Name*</label>
                                            <input name="fname" id="fname" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Last Name*</label>
                                            <input name="lname" id="lname" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Email*</label>
                                            <input name="email" id="email" class="form-control" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Subject *</label>
                                            <input name="subject" id="subject" class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Message *</label>
                                            <textarea cols="40" rows="5" id="message" name="message" class="textarea form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-0">
                                    <input class="btn-send" type="submit" value="Submit Now">
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->
    <?php require_once("include/footer.php") ?>