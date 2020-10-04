<html>

<head>
    <?php include("links.php") ?>

</head>

<body>
    <?php include("header.php") ?>
    <section class="home-banner-area relative">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-center">
                <div class="banner-content col-lg-8 col-md-12">
                    <img src="img/logo2.png" class="img-responsive" style="height:150px; width:auto" />
                    <h1 class="wow fadeIn" data-wow-duration="4s">
                        Phonix Institute </h1><br>
                    <h3 class="wow fadeIn text-white" data-wow-duration="6s">
                        Provide Best Cources with best
                        Training Partners
                    </h3>
                    <p class="text-white" style="margin-top:50px">
                        Content of Instutute
                    </p>

                    <div class="input-wrap">
                        <form action="" class="form-box d-flex justify-content-between">
                            <input type="text" placeholder="Search Courses" class="form-control" name="username">
                            <button type="submit" class="btn search-btn">Search</button>
                        </form>
                    </div>
                    <h4 class="text-white">Top courses</h4>

                    <div class="courses pt-20">
                        <a href="#" data-wow-duration="1s" data-wow-delay=".3s"
                            class="primary-btn transparent mr-10 mb-10 wow fadeInDown">IELTS Training </a>
                        <a href="#" data-wow-duration="1s" data-wow-delay=".6s"
                            class="primary-btn transparent mr-10 mb-10 wow fadeInDown">Spoken English</a>
                        <a href="#" data-wow-duration="1s" data-wow-delay=".9s"
                            class="primary-btn transparent mr-10 mb-10 wow fadeInDown"> Aviation Training</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="rocket-img">
            <img src="img/rocket.png" alt="">
        </div>
    </section>
    <section class="about-area section-gap">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 col-md-6 about-left">
                    <img class="img-fluid" src="img/ilets.png" alt="">
                </div>
                <div class="offset-lg-1 col-lg-6 offset-md-0 col-md-12 about-right">
                    <h1>
                        Get Best Training <br> with 5 dimensions
                    </h1>
                    <div class="wow fadeIn" data-wow-duration="1s">
                        <p>
                        <ul>
                            <li> Speaking </li>
                            <li> Reading </li>
                            <li> Writing </li>
                            <li> Listening </li>
                            <li> Exam Practicing </li>
                        </ul>
                        </p>
                    </div>

                    <a href="courses.html" class="primary-btn">Explore Courses</a>
                </div>
            </div>
            <br /><br /><br />
            <div class="row align-items-center justify-content-center">

                <div class="offset-lg-1 col-lg-6 offset-md-0 col-md-12 about-right">
                    <h1>
                        Spoken English <br> With best Trainer
                    </h1>
                    <div class="wow fadeIn" data-wow-duration="1s">
                        <p>
                        <ul>
                            <li> Speaking </li>
                            <li> Reading </li>
                            <li> Writing </li>
                            <li> Listening </li>
                            <li> Exam Practicing </li>
                        </ul>
                        </p>
                    </div>

                    <a href="courses.html" class="primary-btn">Explore Courses</a>
                </div>
                <div class="col-lg-5 col-md-6 about-left">
                    <img class="img-fluid" src="img/se.png" alt="">
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-5 col-md-6 about-left">
                    <img class="img-fluid" src="img/aviation.png" alt="">
                </div>
                <div class="offset-lg-1 col-lg-6 offset-md-0 col-md-12 about-right">
                    <h1>
                        Aviation Training
                    </h1>
                    <div class="wow fadeIn" data-wow-duration="1s">
                        <p>
                        <ul>
                            <li> Speaking </li>
                            <li> Reading </li>
                            <li> Writing </li>
                            <li> Listening </li>
                            <li> Exam Practicing </li>
                        </ul>
                        </p>
                    </div>

                    <a href="courses.html" class="primary-btn">Explore Courses</a>
                </div>

            </div>
        </div>
    </section>
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <img src="img/logo2.png" class="img-responsive" style="height:150px; width:auto" />
                    <h4 class="modal-title w-100 font-weight-bold">How can I Help You ?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-2">
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Your Name</label>
                        <input type="text" id="txtname" class="form-control validate">

                    </div>

                    <div class="md-form mb-2">
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
                        <input type="email" id="txtemail" class="form-control validate">

                    </div>
                    <div class="md-form mb-2">
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Your Contact No</label>
                        <input type="text" id="txtemail" class="form-control validate">

                    </div>

                    <div class="md-form mb-2">
                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Your Query</label>
                        <textarea class="form-control validate"></textarea>

                    </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-default"> SUBMIT </button>
                </div>
            </div>
        </div>
    </div>


    <?php include("footer.php") ?>
    <?php include("scripts.php") ?>
    <script>
    $(document).ready(function() {
        $("#modalLoginForm").modal('show');
    });
    </script>
</body>

</html>