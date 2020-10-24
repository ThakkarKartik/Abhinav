<html>

<head>
    <?php include("links.php") ?>

</head>

<body>
    <div id="home-page">
        <?php include("header.php") ?>
        <section class="blog-content">
            <div class="container">
                <div class="row">
                    <main class="col-md-8 col-md-offset-2" style="display: block;">
                        <article class="blog-item">
                            <img class="img-responsive center-block" src="assets/img/combanner.jpg"
                                alt="blog-featured-image">
                            <div class="blog-heading">
                                <br />
                                <h1 class="text-capitalize">COMMUNICATION SKILLS</h1>
                                <span class="date"></span>
                                <span></span>
                            </div>
                            <p style="color:black">
                                “Language proficiency is an impeccable tool to open gates for a Wide World of
                                opportunities and exploring several ways to success.”

                            </p>

                            <p style="color:black">
                                21st century is all about communication skills, and being familiar to developing this
                                skill that hinders your growth. When you are not able to communicate well in the alleged
                                language, you develop the feeling of being left out. Why feel that pressure?

                            </p>
                            <p style="color:black">
                                It is easy to achieve ‘Accuracy’ over language but the difficult part is to attain
                                ‘Fluency’ over it! Language is something that help us built from day to day. Our agenda
                                is to make you stand for your own self and excel in every way of Innovation and
                                Interacting communication. A whole new level of personality development expertise.
                                <br />
                            </p>
                            <div class="jumbotron">

                                <p style="color:black">
                                    <br />
                                    Language learning is one of the most dynamic and massive field that solves this
                                    riddle for you and makes you come out of your insecurities. These insecurities draw
                                    you far back into the process and requires the utmost care and attention.
                                    So, choose to do what others are not doing and “Become the guardian of your Dreams”


                            </div>

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
                        </article>
                    </main>
                </div>
            </div>
        </section>

        <br /><br />
        <?php include("footer.php") ?>
    </div>
    <?php include("scripts.php") ?>

</body>

</html>