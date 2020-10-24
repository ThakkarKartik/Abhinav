<html>

<head>
    <?php include("links.php") ?>

</head>

<body>
    <div id="home-page">
        <?php include("header.php") ?>
        <div class="container">
            <!-- <iframe src="https://kartikthakkar.blogspot.com/2015/02/best-friends.html" style="width:100%; height:100%"></iframe> -->
            <section class="contact-form">

                <!-- call for contact -->
                <div class="headline text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h2 class="section-title">Better Career Option</h2>
                            <p class="section-sub-title">
                                Looking for a career in Avaiation?
                                <br />Give us your Details and we will come to you
                            </p> <!-- /section-sub-title -->
                        </div>
                    </div>
                </div> <!-- /.contact-speech -->

                <form method="post" action="contact.php">

                    <div class="row">
                        <div class="col-md-4">

                            <div class="form-group">
                                <input name="name" type="text" class="form-control" id="name" required="required"
                                    placeholder="Full Name">
                            </div>

                            <div class="form-group">
                                <input name="email" type="email" class="form-control" id="email" required="required"
                                    placeholder="Email Address">
                            </div>

                            <div class="form-group">
                                <input name="text" type="text" class="form-control" id="contactNo" required="required"
                                    placeholder="Contact Number">
                            </div>
                            <div class="form-group">
                                <input name="text" type="text" class="form-control" id="Company" required="required"
                                    placeholder="Currently Working at">
                            </div>
                            <div class="form-group">
                                <input name="text" type="text" class="form-control" id="Position" required="required"
                                    placeholder="Current Postion">
                            </div>
                            <div class="form-group">
                                <input name="text" type="text" class="form-control" id="Experience" required="required"
                                    placeholder="Total Experience">
                            </div>

                        </div>

                        <div class="col-md-8">
                        <div class="form-group">
                        <textarea name="message" type="text" class="form-control" id="message" rows="8"
                                required="required" placeholder="About You "></textarea>
                                </div>    
                                <div class="form-group">
                                <input type="file" class="form-control" id="cv" />
                            </div>
                        </div>
                        
                    </div>
                   
                    <div class="row left">
                    <input type="submit" id="submit" name="submit" value="Submit" class="btn btn-black"></input>

                    </div>

                </form> <!-- form end -->
            </section> <!-- /.contact-form -->
        </div>
        <?php include("footer.php") ?>
    </div>
    <?php include("scripts.php") ?>

</body>

</html>