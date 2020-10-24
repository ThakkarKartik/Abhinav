<html>

<head>
    <?php include("links.php") ?>

</head>

<body>
    <div id="home-page">
        <?php include("header.php") ?>
        <div claas="main-content">
                <div class="container">

                    <!-- google map iframe -->
                    <section class="g-map">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="google-map">
                                    <div id="map-canvas">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.7450469025152!2d72.78506351404985!3d21.202284685904573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04c31334cf8a5%3A0xe4eb822d7aa3df20!2sHoney%20Park%20Society!5e0!3m2!1sen!2sin!4v1602766594708!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> <!-- /.g-map (google-map end) -->



                    <!-- contact adresses section begin -->
                    <section class="contact-address bg-white">
                        <div class="row">

                            <div class="col-md-4 col-xs-12">
                                <div class="address-info">
                                    <div class="row">

                                        <div class="col-md-3 col-xs-3">
                                            <div class="address-info-icon text-center center-block bg-light-gray">
                                                <i class="fa fa-map-marker"></i>
                                            </div> <!-- /.address-info-icon -->
                                        </div>

                                        <div class="col-md-9 col-xs-9 address-info-desc">
                                            <h3>Office Address</h3>
                                            <p>HG/7 samratvihar complex, <br/> Opp Honey park society, <br/> HoneyPark Road, Adajan, Surat.
                                            </p>
                                        </div> <!-- /.address-info-desc -->

                                    </div>
                                </div> <!-- /.address-info -->
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="address-info">
                                    <div class="row">

                                        <div class="col-md-3 col-xs-3">
                                            <div class="address-info-icon text-center center-block bg-light-gray">
                                                <i class="fa fa-phone"></i>
                                            </div> <!-- /.address-info-icon -->
                                        </div>

                                        <div class="col-md-9 col-xs-9 address-info-desc">
                                            <h3>Phone Number</h3>
                                            <p>
                                                Local: 0261 - 2747662
                                                <br/>
                                                Mobile: 9194614720
                                            </p>
                                        </div> <!-- /.address-info-desc -->

                                    </div>
                                </div> <!-- /.address-info -->
                            </div>

                            <div class="col-md-4 col-xs-12">
                                <div class="address-info">
                                    <div class="row">

                                        <div class="col-md-3 col-xs-3">
                                            <div class="address-info-icon text-center center-block bg-light-gray">
                                                <i class="fa fa-envelope-o"></i>
                                            </div> <!-- /.address-info-icon -->
                                        </div>

                                        <div class="col-md-9 col-xs-9 address-info-desc">
                                            <h3>Email Address</h3>
                                            <p>
                                            auberonprofessionalinstitute@gmail.com
                                                <br/>
                                                admin@auberon.co.in
                                            </p>
                                        </div> <!-- /.address-info-desc -->

                                    </div>
                                </div> <!-- /.address-info -->
                            </div>

                        </div>
                    </section> <!-- /.contact-address -->



                    <!-- contact-form -->
                    <section class="contact-form">

                        <!-- call for contact -->
                        <div class="headline text-center">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <h2 class="section-title">Ask Anything! Don't be shy</h2>
                                    <p class="section-sub-title">
                                        If you have any questions or comments, or would just like to say hello, 
                                        <br/>please feel free to contact our friendly team
                                    </p> <!-- /section-sub-title -->
                                </div>
                            </div>
                        </div> <!-- /.contact-speech -->

                        <form method="post" action="contact.php">

                            <div class="row">
                                <div class="col-md-4">

                                    <div class="form-group">
                                        <input  name="name" type="text" class="form-control" id="name" required="required" placeholder="Full Name">
                                    </div>

                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" id="email" required="required" placeholder="Email Address">
                                    </div>

                                    <div class="form-group">
                                        <input name="website" type="text" class="form-control" id="contact" required="required" placeholder="Contact Number">
                                    </div>

                                </div>

                                <div class="col-md-8">
                                    <textarea name="message" type="text" class="form-control" id="message" rows="8" required="required" placeholder="Type here message"></textarea>
                                </div>
                            </div>

                                <button type="submit" id="submit" name="submit" class="btn btn-black">send message</button>
                            
                        </form> <!-- form end -->
                    </section> <!-- /.contact-form -->
                    <?php
                    if(isset($_REQUEST["submit"]))
                    {
                            $email = $_REQUEST["email"];
                            $name = $_REQUEST["name"];
                            $contact = $_REQUEST["contact"];
                            $message = $_REQUEST["message"];

                            $to = "info@auberon.co.in";
                             $subject = "Inquery Received";
                            $txt = "Inquery From $name \n ContactNo : $contact, E-Mail : $email".
                            "\n\n Message : \n\n $message";
                            $headers = "From: info@auberon.co.in" . "\r\n" .
                            "CC: thakkar.kartik2011@gmail.com";
                            mail($to,$subject,$txt,$headers);
                    }
                    ?>
                </div> <!-- container -->
            </div>
            <!-- main-content end -->

        <?php include("footer.php") ?>
    </div>
    <?php include("scripts.php") ?>

</body>

</html>