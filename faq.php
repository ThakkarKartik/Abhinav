<html>

<head>
    <?php include("links.php") ?>

</head>

<body>
    <div id="home-page">
        <?php include("header.php") ?>
        <header id="header" class="header-wrapper home-parallax home-fade">
            <div class="header-overlay"></div>
            <div class="header-wrapper-inner">
                <div class="container">
                    <div>
                        <h1> FAQs</h1>                       
                    </div><!-- /.intro -->

                </div><!-- /.container -->

            </div><!-- /.header-wrapper-inner -->
        </header>
        <section class="blog-content">
            <div class="container">
                <div class="col-md-12">
                    
                    <div class="faq-widget">
                        <div class="topics">
                            <div class="faq-c">
                                <div class="faq-q">
                                How many parts are there to IELTS speaking test? <span class="faq-t">+</span>
                                </div>
                                <div class="faq-a">
                                    <p>
                                        There are 3 Parts in IELTS Speaking Test.
                                    </p>
                                </div>
                            </div>
                        </div>
                       
                        <div class="topics">
                            <div class="faq-c">
                                <div class="faq-q">
                                What topics are covered in IELTS?
                                <span class="faq-t">+</span>
                                </div>
                                <div class="faq-a">
                                    <p>
                                    Topic based on current scenario, Technology, Daily Routine, Natural Health, experiences and memories adnd the most important is researches in different fields.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="topics">
                            <div class="faq-c">
                                <div class="faq-q">
                                Does IELTS include American English?
                                <span class="faq-t">+</span>
                                </div>
                                <div class="faq-a">
                                    <p>
                                    Yes, It do include American English in Speaking & Listening, and for Writing Style American or British style is accepted.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="topics">
                            <div class="faq-c">
                                <div class="faq-q">
                                How many times do I hear the recording?
                                <span class="faq-t">+</span>
                                </div>
                                <div class="faq-a">
                                    <p>
                                        You will hear the recording once only.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="topics">
                            <div class="faq-c">
                                <div class="faq-q">
                                How long should I spend on each section of reading?
                                <span class="faq-t">+</span>
                                </div>
                                <div class="faq-a">
                                    <p>
                                        Officially it is 20 minutes, but casually it depends upon logical interpretation of reading.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="topics">
                            <div class="faq-c">
                                <div class="faq-q">
                                Will I be penalized if I don’t write enough words?
                                <span class="faq-t">+</span>
                                </div>
                                <div class="faq-a">
                                    <p>
                                    Definitely, as the requirement to fulfill the task, word limit should be achieved.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="topics">
                            <div class="faq-c">
                                <div class="faq-q">
                                How long should I spend on each task?
                                <span class="faq-t">+</span>
                                </div>
                                <div class="faq-a">
                                    <p>
                                    Officially you should spend 20 minuntes on 1st Task and 40 Minutes on second task.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="topics">
                            <div class="faq-c">
                                <div class="faq-q">
                                Will I be penalized if I do not write a formal introduction and conclusion for Academic Writing Task 2?
                                <span class="faq-t">+</span>
                                </div>
                                <div class="faq-a">
                                    <p>
                                        Absolutely, the format for writing task 2 compulsory needs introduction and conclusion.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="topics">
                            <div class="faq-c">
                                <div class="faq-q">
                                Why is the IELTS Speaking test recorded?
                                <span class="faq-t">+</span>
                                </div>
                                <div class="faq-a">
                                    <p>
                                        Speaking task is recorded to get second openion of an expert for scoring the task.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="topics">
                            <div class="faq-c">
                                <div class="faq-q">
                                What should I do if I don’t understand a question or the Part 2 task?
                                <span class="faq-t">+</span>
                                </div>
                                <div class="faq-a">
                                    <p>
                                    IELTS exam contains Question for similar concepts still if you do not understand, you should try read and navigate understanding words to form the meaning of the questions.
                                    
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include("footer.php") ?>
    </div>
    <?php include("scripts.php") ?>
    <script>
    $(".faq-q").click(function() {
        var container = $(this).parents(".faq-c");
        var answer = container.find(".faq-a");
        var trigger = container.find(".faq-t");

        answer.slideToggle(200);

        if (trigger.hasClass("faq-o")) {
            trigger.removeClass("faq-o");
        } else {
            trigger.addClass("faq-o");
        }
    });
    </script>

</body>

</html>