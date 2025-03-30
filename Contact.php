<?php
// Include the header file
include('header.php');
?>

<div class="page-banner">
    <div class="container">
        <div class="row" data-aos="fade-down" data-aos-duration="1200">
            <div class="col-md-7">
                <h1 class="title">Contact Us</h1>
            </div>
            <div class="col-md-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb d-flex justify-content-end">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="contact.php">Contact Us</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<section class="mini-spacer bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title-color m-b-20"><span>Get</span> in Touch</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="contact-page">
                            <form id="contact-form" class="contact-form" action="https://www.dckasarani.org/app/forms.php" method="post">
                                <div class="row">
                                    <input type="hidden" name="object" value="Contact">
                                    <input type="hidden" name="action" value="sendMessage">
                                    <input type="hidden" name="code_1" value="KE">
                                    <input type="hidden" name="name" value="Deliverance Church Ndagani">

                                    <div class="form-group col-md-6">
                                        <input class="form-control" type="text" name="firstName" placeholder="First Name" autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input class="form-control" type="text" name="lastName" placeholder="Last Name" autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input class="form-control" type="email" name="email" placeholder="Email Address" autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input class="form-control" type="text" name="phone" autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input class="form-control" type="text" name="subject" placeholder="Enter Subject" autocomplete="off">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 m-b-0">
                                        <div id="contact-recaptcha" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
                                    </div>
                                    <div class="form-group col-md-12 text-right">
                                        <input class="btn btn-themecolor" type="submit" value="Send">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact_right">
                                    <h5 class="inner-title section-title-color m-b-0">Our <span>Address</span></h5>
                                    <address>
                                        Ndagani, <br> Left of PCEA Ndagani,Left Of Chuka Meru Highway,<br>
                                        P.O. Box 73492-00200, Nairobi, Kenya.<br>
                                        Landline: +254 (0)20-2014542<br>
                                        Prayer lines: +254 (0)727 719115 / +254 (0)731 437855
                                    </address>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact_right">
                                    <h5 class="inner-title section-title-color m-b-0"><span>Contact</span> Information</h5>
                                    <p class="m-b-0">+254 733 909780, +254 720 648096 <img src="config/email_png.php@object=Settings&amp;action=email_png&amp;email=info@dckasarani.org&amp;location=top" alt="info@dckasarani.org"></p>
                                    <ul class="social list-inline"> 
                                        <li class="list-inline-item"><a href="https://www.facebook.com/dczimma/?fref=ts" class="facebook social-btn" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCbFf1WXtK4WRV2tz9Zx6nIg" class="google social-btn" title="YouTube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="contact-map">
                            <div id="map" class="map-canvas contact-map"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Include the footer file
include('footer.php');
?>
