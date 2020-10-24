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
                            <img class="img-responsive center-block" src="assets/img/IELTSbanner.jpg"
                                alt="blog-featured-image">
                            <div class="blog-heading">
                                <br />
                                <h1 class="text-capitalize">IELTS TRAINING</h1>
                                <span class="date"></span>
                                <span></span>
                            </div>
                            <p style="color:black">
                                The International English Language Testing System (IELTS) measures the language
                                proficiency of people who want to study or work where English is used as a language of
                                communication. It uses a nine-band scale to clearly identify levels of proficiency, from
                                non-user (band score 1) through to expert (band score 9).
                            </p>

                            <p style="color:black">
                                It also helps the candidate to enhance their listening, reading, writing, and speaking
                                skills in their day to day life Keeping the current pandemic in view our institute has
                                decided to initially start online coaching for Ielts as well as spoken English
                            </p>
                            <p style="color:black">
                                We plan to help students thoroughly to learn English rather than just getting them ready
                                for the exams.


                                <br />
                            </p>
                            <div class="jumbotron">
                                <h3>
                                    Here are some brief details about IELTS Exam
                                </h3>
                                <p style="color:black">
                                <h2><strong> 2 types of exams </strong></h2>
                                <br />
                                <p>Academic</p>
                                <br />
                                <p>General</p>

                                <p style="color:black">
                                    <br />
                                    The IELTS Academic test is for people applying for higher education or professional
                                    registration in an English speaking environment.

                                </p>
                                <p style="color:black">
                                    The IELTS General Training test is for those who are going to English speaking
                                    countries
                                    for secondary education, work experience or training programs.
                                    Now a days it is also one of the requirements of the immigration for further studies
                                    abroad.
                                </p>
                                </p>
                            </div>

                            <p style="color:black; font-size:20px">
                                The exam consists of 4 sections which includes:-
                            </p>
                            <br />
                            <strong>
                                READING 60 min <br />
                                LISTENING 30 min <br />
                                WRITING 60 min<br />
                                SPEAKING 11-14 apprx min<br /><br /><br />
                            </strong>
                            <ul class="list-group">
                                <li class="list-group-item"> Reading:-3 sections, 40 questions, 60 minutes
                                    <br /><br/>
                                    Section 1: two or three short factual texts<br />
                                    Section 2: contains two short factual texts focusing on work-related issues<br />
                                    Section 3: one longer, more complex text<br /><br/>

                                </li>
                                <li class="list-group-item">
                                    Listening:-4 sections, 40 questions, 30 minutes <br /><br/>
                                    Section 1: a conversation between two people <br />
                                    Section 2: a monologue set in an everyday social context<br />
                                    Section 3: a conversation between up to four people set in an educational or
                                    training context<br />
                                    Section 4: a monologue on an academic subject (e.g. a university lecture)<br />
                                    Each section is heard once only<br />

                                </li>
                                <li class="list-group-item"> Writing:- <br/><br/>
                                    Part 1: write a letter requesting information or 
                                    explaining a situation.<br/>
                                    Part 2: write an essay in response to a point of view, argument or problem<br/>
                                </li>
                                <li class="list-group-item"> 
                                Speaking:- An interview, 15 minutes <br/><br/>
Part 1 Introduction and interview <br/>
Part 2 Individual long turn (you have to talk about a topic)<br/>
Part 3 Two-way discussion (The examiner asks further questions which are connected to the topic of Part 2.)<br/>

                            </li>
                                
                            </ul>
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
                                        <input name="website" type="text" class="form-control" id="subject" required="required" placeholder="Contact Number">
                                    </div>

                                </div>

                                <div class="col-md-8">
                                    <textarea name="message" type="text" class="form-control" id="message" rows="8" required="required" placeholder="Type here message"></textarea>
                                </div>
                            </div>

                                <button type="submit" id="submit" name="submit" class="btn btn-black">send message</button>
                            
                        </form> 
                        </article>
                    </main>
                </div>
            </div>
        </section>



        <?php include("footer.php") ?>
    </div>
    <?php include("scripts.php") ?>
    <script>
    $(document).ready(function() {
        $("#modalLoginForm").modal('show');
    });
    </script>
</body>

</html>