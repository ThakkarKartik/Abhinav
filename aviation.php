<html>

<head>
    <?php include("links.php") ?>

</head>

<body>
    <div id="home-page">
        <?php include("header.php") ?>

        <!-- <iframe src="https://kartikthakkar.blogspot.com/2015/02/best-friends.html" style="width:100%; height:100%"></iframe> -->
        <section class="blog-content">
            <div class="container">
                <div class="row">
                    <main class="col-md-8 col-md-offset-2" style="display: block;">
                        <article class="blog-item">
                            <img class="img-responsive center-block" src="assets/img/aviationBanner.jpg"
                                alt="blog-featured-image">
                            <div class="blog-heading">
                                <br />
                                <h1 class="text-capitalize">AVIATION TRAINING</h1>
                                <span class="date"></span>
                                <span></span>
                            </div>
                            <p style="color:black">
                                Many people are misinformed about what a commercial pilot is. They assume that if
                                someone is a commercial pilot, they are an airline pilot. While it's true that an
                                airline pilot is, indeed, a type of commercial pilot, the opposite is not always true: A
                                commercial pilot is not necessarily an airline pilot
                            </p>

                            <p style="color:black">
                                Commercial pilots can be cargo pilots, tour pilots, or backcountry pilots. They can be
                                flight instructors, ferry pilots or glider tow pilots. A commercial pilot is simply one
                                who is allowed by the DGCA in India to charge money for services
                            </p>
                            <p style="color:black">
                                Now to become a commercial pilot there are certain requirements which you need to fulfil
                                in order to be a holder of CPL:-
                                <br />
                            </p>
                            <ul class="list-group">
                                <li class="list-group-item"> 1. Age: >18 (As per 10th standard certificate)</li>
                                <li class="list-group-item"> 2. Medical: class-I (within 12 months validity).</li>
                                <li class="list-group-item"> 3. Qualification: 10+2 Pass with Physics and Math</li>
                                <li class="list-group-item"> 4. Proficiency in English language </li>
                                <li class="list-group-item"> 5. Theory papers to clear:-
                                    <ul class="list-group-item-heading">
                                        <li>Meteorology</li>
                                        <li>Navigation</li>
                                        <li> Air Regulation</li>
                                        <li>Technical- General</li>
                                        <li>Technical- Specific</li>

                                    </ul>
                                </li>
                            </ul>
                            <div class="panel panel-default">
                                <div class="panel-heading">In addition to this the candidate also has to clear a Radio
                                    Telephony (RTR) exam conducted by WPC</div>
                                <div class="panel-body">In the Flight Training theoretical studies or the Ground Classes
                                    bears a very important role. 200 hrs of aircraft training alone is not sufficient
                                    for a candidate to hone the skills of flying. Ground Classes a play very vital role
                                    for a trainee pilot. </div>
                            </div>


                            <div class="jumbotron">
                                <h3>
                                    Clearing DGCA papers requires proper guidance and tutoring.
                                </h3>
                                <p>
                                    Clearing DGCA papers requires proper guidance and tutoring. Covering all the
                                    subjects of DGCA namely- Air Navigation, Meteorology, Air Regulation, Technical
                                    (General) Technical (Specific).

                                </p>
                            </div>
                            <p>
                                Our aim is to provide conceptual learning to our students. The target is not to
                                just clear the DGCA papers but to impart knowledge that should stay with the
                                student for long.

                            </p>
                            <p>
                                DGCA conducts examinations every 3 months. At our institution our goal is to
                                prepare the students well enough so paper is cleared in the first attempt. Our
                                teaching module is designed so that entire course is taught and revised in 10
                                weeks.

                            </p>
                            <p>
                                We have a team of commercial pilots trained from different countries as a faculty,
                                who are into aviation because of their passion. And are sound with the knowledge
                                required in the field of aviation to become a pilot.
                            </p>

                            <div class="headline text-center">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <h2 class="section-title">Ask Anything! Don't be shy</h2>
                                        <p class="section-sub-title">
                                            If you have any questions or comments, or would just like to say hello,
                                            <br />please feel free to contact our friendly team
                                        </p> <!-- /section-sub-title -->
                                    </div>
                                </div>
                            </div> <!-- /.contact-speech -->
                            <form method="post" action="contact.php">

                                <div class="row">
                                    <div class="col-md-4">

                                        <div class="form-group">
                                            <input name="name" type="text" class="form-control" id="name"
                                                required="required" placeholder="Full Name">
                                        </div>

                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control" id="email"
                                                required="required" placeholder="Email Address">
                                        </div>

                                        <div class="form-group">
                                            <input name="website" type="text" class="form-control" id="subject"
                                                required="required" placeholder="Contact Number">
                                        </div>

                                    </div>

                                    <div class="col-md-8">
                                        <textarea name="message" type="text" class="form-control" id="message" rows="8"
                                            required="required" placeholder="Type here message"></textarea>
                                    </div>
                                </div>

                                <button type="submit" id="submit" name="submit" class="btn btn-black">send
                                    message</button>

                            </form>
                    </main>
                </div>
            </div>
            </article>


    </div>
    </div>
    </section>



    <?php include("footer.php") ?>
    </div>
    <?php include("scripts.php") ?>

</body>

</html>