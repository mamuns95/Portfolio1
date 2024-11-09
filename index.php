<!DOCTYPE html>
<html>
    <title>Portfolio of Md. Abdullah Al Mamun</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- for JS toastr HOT message   -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

    <!-- General CSS --> 
    <style> body, h1, h2, h3, h4, h5, h6 {
            font-family: "Raleway", sans-serif;
        } </style>

    <body class="w3-light-grey w3-content" style="max-width: 1600px">
        <!-- Sidebar/menu -->
        <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index: 3; width: 300px" id="mySidebar">
            <br />
            <div class="w3-container">
                <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey"
                   title="close menu">
                    <i class="fa fa-remove"></i>
                </a>
                <a href="index.php"> <img src="images/me.jpg" style="width: 45%" class="w3-round" /> </a>

                <br/><br/>
                <h4 style="color: teal"><b> Md. Abdullah Al Mamun </b></h4>
                <p class="w3-text-black">Full Stack Web Developer (Both MERN and LAMP stack)</p>
            </div>

            <div class="w3-bar-block">
                <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"
                   style="text-decoration: none;"><i class="fa fa-th-large fa-fw w3-margin-right"></i>PORTFOLIO</a>
                <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding" style="text-decoration: none;"><i
                        class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a>
                <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding" style="text-decoration: none;"><i
                        class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
                <a href="https://drive.usercontent.google.com/u/0/uc?id=10TZZJfYO07mBHsxbJxsyWf0jr1GWAawH&export=download" onclick="w3_close()" class="w3-bar-item w3-button w3-padding" style="text-decoration: none;"><i
                        class="fa fa-download fa-fw w3-margin-right"></i>DOWNLOAD RESUME</a>
            </div>

            <div class="w3-panel w3-xlarge">
                <a href="https://github.com/mamuns95" target="_blank"><i class="fa fa-github w3-hover-opacity"></i></a>&nbsp;
                <a href="https://www.linkedin.com/in/mamuncse2015/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>&nbsp; 
                <a href="https://www.facebook.com/mamuncse2015" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>&nbsp;  
                <a href="https://x.com/mamuncse2015" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>       
            </div>
        </nav>

        <!-- Overlay effect when opening sidebar on small screens -->
        <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor: pointer"
             title="close side menu" id="myOverlay"></div>

        <!-- !PAGE CONTENT! -->
        <div class="w3-main" style="margin-left: 300px">
            <!-- Header -->
            <header id="portfolio">
                <a href="#"><img src="images/me.jpg" style="width: 65px" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity" /></a>
                <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
                <div class="w3-container">
                    <h1><b>My Portfolio</b></h1>
                    <div class="w3-section w3-bottombar w3-padding-16">
                        <span class="w3-margin-right">Filter:</span>
                        <button class="w3-button w3-black">ALL</button>
                        <button class="w3-button w3-white" onclick="taskgoingon()">
                            <i class="fa fa-diamond w3-margin-right"></i>Design
                        </button>
                        <button class="w3-button w3-white w3-hide-small" onclick="taskgoingon()">
                            <i class="fa fa-photo w3-margin-right"></i>Photos
                        </button>
                        <button class="w3-button w3-white w3-hide-small" onclick="taskgoingon()">
                            <i class="fa fa-map-pin w3-margin-right"></i>Art
                        </button>
                    </div>
                </div>
            </header>

            <!-- First Photo Grid-->
            <div class="w3-row-padding">
                <div class="w3-third w3-container w3-margin-bottom">
                    <img src="images/forum-site.jpg" alt="Forum site" style="width: 100%" height="180px" class="w3-hover-opacity" />
                    <div class="w3-container w3-white">
                        <p><b> Online Forum Website </b></p>
                        <p style="text-align: justify">
                            AskUnion.com - an online community to share knowledge and better understand the real world! Ask Questions
                            and Get Answers ...
                        </p>
                        <p> <a href="https://askunion.com/" target="_blank" class="btn btn-primary"> Live Project </a> </p>
                    </div>
                </div>


                <div class="w3-third w3-container w3-margin-bottom">
                    <img src="images/online-xm-system.jpg" alt="Online Exam" style="width: 100%" height="180px"
                         class="w3-hover-opacity" />
                    <div class="w3-container w3-white">
                        <p><b> Online MCQ Exam System </b></p>
                        <p style="text-align: justify">
                            100% Free Online Job Exam System (BCS, BANK and Others), BCS Online Coaching Center - Participate
                            Preliminary, Written, Viva etc...
                        </p>
                        <p> <a href="https://bcsexamination.com/exam/" target="_blank" class="btn btn-primary"> Live Project </a> </p>
                    </div>
                </div>


                <div class="w3-third w3-container">
                    <img src="images/online-report.png" alt="Online Report" style="width: 100%" height="180px"
                         class="w3-hover-opacity" />
                    <div class="w3-container w3-white">
                        <p><b> Online Report System </b></p>
                        <p style="text-align: justify">
                            An Online Report system by which certain people are able to report online. They can report and see the
                            status of their reports.
                        </p>
                        <p> <a href="https://bcsexamination.com/hstu/" target="_blank" class="btn btn-primary"> Live Project </a> </p>
                    </div>
                </div>
            </div>

            <!-- Second Photo Grid-->
            <div class="w3-row-padding">
                <div class="w3-third w3-container w3-margin-bottom">
                    <img src="images/propose-live.jpg" alt="Online Propose" style="width: 100%" height="180px"
                         class="w3-hover-opacity" />
                    <div class="w3-container w3-white">
                        <p><b> Online Propose Anonymously </b></p>
                        <p>
                            One Can create account and Send Messages to others Anonymously. It is an online based platform. Search your
                            partner and propose now...
                        </p>
                        <p> <a href="https://educativesite.com/propose/" target="_blank" class="btn btn-primary"> Live Project </a>
                        </p>
                    </div>
                </div>
                <div class="w3-third w3-container w3-margin-bottom">
                    <img src="images/forum.jpg" alt="Norway" style="width: 100%" height="180px" class="w3-hover-opacity" />
                    <div class="w3-container w3-white">
                        <p><b> Bangla Forum Website </b></p>
                        <p>
                            This forum website is for the people who speak in Bangla. It is an awesome forum site in Bangla Community.
                            Ask anything and get answers...
                        </p>
                        <p> <a href="http://forum.bcsexamination.com/" target="_blank" class="btn btn-primary"> Live Project </a>
                    </div>
                </div>


                <div class="w3-third w3-container">
                    <!--  
                    <img src="/w3images/p3.jpg" alt="Sample" style="width: 100%" class="w3-hover-opacity" />
                    <div class="w3-container w3-white">
                      <p><b>Lorem Ipsum</b></p>
                      <p>
                      This is some text. This is some text. This is some text. This is some text. This is some text. This is some text. 
                      This is some text. This is some text. This is some text. 
                      </p>
                    </div>
                    -->
                </div>
            </div>



            <!-- Pagination -->
            <div class="w3-center w3-padding-32">
                <div class="w3-bar">
                    <a href="#" class="w3-bar-item w3-button w3-hover-black" onclick="taskgoingon()">&laquo;</a>
                    <a href="#" class="w3-bar-item w3-black w3-button" onclick="taskgoingon()">1</a>
                    <a href="#" class="w3-bar-item w3-button w3-hover-black" onclick="taskgoingon()">2</a>
                    <a href="#" class="w3-bar-item w3-button w3-hover-black" onclick="taskgoingon()">3</a>
                    <a href="#" class="w3-bar-item w3-button w3-hover-black" onclick="taskgoingon()">4</a>
                    <a href="#" class="w3-bar-item w3-button w3-hover-black" onclick="taskgoingon()">&raquo;</a>
                </div>
            </div>

            <!-- Images of Me -->
            <div class="w3-row-padding w3-padding-16" id="about">
                <div class="w3-col m6">
                    <img src="images/me.jpg" alt="Me" style="width: 100%" height="400px" />
                </div>
                <div class="w3-col m6">
                    <img src="images/me2.jpg" alt="Me" style="width: 100%" height="400px" />
                </div>
            </div>

            <div class="w3-container w3-padding-large" style="margin-bottom: 32px">
                <h4><b>About Me</b></h4>
                <p style="text-align: justify">

                    I, Md. Abdullah Al Mamun, Assistant Programmer of the Department of ICT, Ministry of Post, Telecommunication and
                    Information and Communication Technology of the Government of Bangladesh. 
                    I am a passionate Full Stack web developer, blogger and
                    interested in building interesting things. My Web Development Stack is 
                    MERN Stack (MongoDB, Express.js, React, Node.js) and
                    LAMP Stack (Linux, Apache, MySQL, PHP).  I am committed to serve my best for you. You can hire me without any hesitation. 
                </p>
                <hr />

                <h4> <b> My Technical Skills </b></h4>
                <!-- Progress bars / Skills -->
                <p>HTML and CSS</p>
                <div class="w3-grey"><div class="w3-container w3-dark-grey w3-padding w3-center" style="width: 100%">100%</div></div>
                <p>Javascript</p>
                <div class="w3-grey"><div class="w3-container w3-dark-grey w3-padding w3-center" style="width: 95%">95%</div></div>
                <p>PHP</p>
                <div class="w3-grey"><div class="w3-container w3-dark-grey w3-padding w3-center" style="width: 90%">90%</div></div>
                <p>NodeJS and ExpressJS</p>
                <div class="w3-grey"><div class="w3-container w3-dark-grey w3-padding w3-center" style="width: 85%">85%</div></div>
                <p>React</p>
                <div class="w3-grey"><div class="w3-container w3-dark-grey w3-padding w3-center" style="width: 80%">80%</div></div>
                <p>MySQL Database</p>
                <div class="w3-grey"><div class="w3-container w3-dark-grey w3-padding w3-center" style="width: 95%">95%</div></div>
                <p>MongoDB Database</p>
                <div class="w3-grey"><div class="w3-container w3-dark-grey w3-padding w3-center" style="width: 90%">90%</div></div>
                <p>Tailwind CSS</p>
                <div class="w3-grey"><div class="w3-container w3-dark-grey w3-padding w3-center" style="width: 85%">85%</div></div>
                <p>Daisy UI</p>
                <div class="w3-grey"><div class="w3-container w3-dark-grey w3-padding w3-center" style="width: 80%">80%</div></div>

                <p>
                    <button class="w3-button w3-green w3-padding-large w3-margin-top w3-margin-bottom">
                        <a href="https://drive.usercontent.google.com/u/0/uc?id=10TZZJfYO07mBHsxbJxsyWf0jr1GWAawH&export=download" target = "_blank" style="text-decoration: none; color: white"> 
                            <i class="fa fa-download w3-margin-right"></i> Download Resume
                        </a> 

                    </button>
                </p>
                <hr />

                <h4><b> How much I charge </b></h4>
                <!-- Pricing Tables -->
                <div class="w3-row-padding" style="margin: 0 -16px">
                    <div class="w3-third w3-margin-bottom">
                        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
                            <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
                            <li class="w3-padding-16">Personal Profile Page</li>
                            <li class="w3-padding-16">Customized Calculator App</li>
                            <li class="w3-padding-16">Secure Login Logout form</li>
                            <li class="w3-padding-16">Landing Page for Product/Service</li>
                            <li class="w3-padding-16">
                                <h2>$ 15</h2>
                                <span class="w3-opacity">Per Project</span>
                            </li>
                            <li class="w3-light-grey w3-padding-24">
                                <a style="text-decoration: none;" class="w3-button w3-teal w3-padding-large w3-hover-black" href="index.php#contact"> Contact With Me </a> 
                            </li>
                        </ul>
                    </div>

                    <div class="w3-third w3-margin-bottom">
                        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
                            <li class="w3-teal w3-xlarge w3-padding-32">Pro</li>
                            <li class="w3-padding-16">Quiz App with Leaderboard</li>
                            <li class="w3-padding-16">Basic Chat Application</li>
                            <li class="w3-padding-16">Content Management System</li>
                            <li class="w3-padding-16">Portfolio Website with Admin Panel</li>
                            <li class="w3-padding-16">
                                <h2>$ 30</h2>
                                <span class="w3-opacity">Per Project</span>
                            </li>
                            <li class="w3-light-grey w3-padding-24">
                                <a style="text-decoration: none;" class="w3-button w3-teal w3-padding-large w3-hover-black" href="index.php#contact"> Contact With Me </a> 
                            </li>
                        </ul>
                    </div>

                    <div class="w3-third">
                        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
                            <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
                            <li class="w3-padding-16">E-commerce Site for Business</li>
                            <li class="w3-padding-16">Online Learning Platform (LMS)</li>
                            <li class="w3-padding-16">Customized Business App</li>
                            <li class="w3-padding-16">Personal Social Media Platform</li>
                            <li class="w3-padding-16">
                                <h2>$ 50</h2>
                                <span class="w3-opacity">Per Project</span>
                            </li>
                            <li class="w3-light-grey w3-padding-24">
                                <a style="text-decoration: none;" class="w3-button w3-teal w3-padding-large w3-hover-black" href="index.php#contact"> Contact With Me </a> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="w3-container w3-padding-large w3-grey">
                <h4 id="contact" style="padding: 20px 10px 10px 10px"><b>Contact With Me</b></h4>
                <div class="w3-row-padding w3-center w3-padding-24" style="margin: 0 -16px">
                    <div class="w3-third w3-dark-grey">
                        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
                        <p>mamuns.address@gmail.com</p>
                    </div>
                    <div class="w3-third w3-teal">
                        <p>
                            <i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i>
                        </p>
                        <p>Upazila ICT ofice, Jaintapur, Sylhet</p>
                    </div>
                    <div class="w3-third w3-dark-grey">
                        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
                        <p>+8801724393534</p>
                    </div>
                </div>
                <hr class="w3-opacity" />
                <form method ="POST" action="index.php" class="form-horizontal" enctype="multipart/form-data">
                    <div class="w3-section">
                        <label>Name</label>
                        <input class="w3-input w3-border" type="text" name="name" required />
                    </div>
                    <div class="w3-section">
                        <label>Email</label>
                        <input class="w3-input w3-border" type="email" name="email" required />
                    </div>
                    <div class="w3-section">
                        <label>Message</label>
                        <input class="w3-input w3-border" type="text" name="message" required />
                    </div>
                    <button type="submit" class="w3-button w3-green w3-margin-bottom">
                        <i class="fa fa-paper-plane w3-margin-right"></i>Send Message Now
                    </button>
                </form>
            </div>

            <?php
            $inputok = 0;
            if (isset($_POST['name']) & !empty($_POST['name'])) {
                $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            }

            if (isset($_POST['email']) & !empty($_POST['email'])) {
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            }

            if (isset($_POST['message']) & !empty($_POST['message'])) {
                $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
            }

            if (!empty($name) & !empty($email) & !empty($message)) {
                $inputok = 1;
            }

            if ($inputok == 1) {
                $receiver = 'mamuns.address@gmail.com';
                $to = $receiver;
                $subject = "Message from Portfolio Contact Form!";
                $header = "from: Portfolio Contact Form <no-reply@askunion.com>";
                //$message = $message . "\n";
                $messagebody = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . html_entity_decode($message);
                // sending Message
                $sentmsg = mail($to, $subject, $messagebody, $header);
                // if your Message succesfully sent then 
                if ($sentmsg) {
                    echo '<script type="text/javascript">toastr.success("Message has been sent successfully! ")</script>';
                } else {
                    echo '<script type="text/javascript">toastr.error("Error! Message sending Failed")</script>';
                }
            }
            ?>

            <!-- Footer -->
            <footer class="w3-container w3-padding-32 w3-dark-grey">
                <div class="w3-row-padding">
                    <div class="w3-third">
                        <h3>Summary</h3>
                        <p style="text-align: justify">
                            I am a passionate Full Stack Web Developer. My Stack is 
                            MERN Stack (MongoDB, Express.js, React, Node.js) and
                            LAMP Stack (Linux, Apache, MySQL, PHP). You can hire me without any hesitation at a affordable price. 
                        </p>
                        <p>
                            Thank you for visiting my Portfolio!
                        </p>
                    </div>

                    <div class="w3-third">
                        <h3>My Blog Sites</h3>
                        <ol class="w3-ol w3-left" type="1">
                            <li class="w3-padding-12 w3-hover-opacity">
                                <a href="https://www.ofuran.com" target="_blank" style="text-decoration: none;">   
                                    <span style="text-decoration: none; color: white">Ofuran - Technology Based Blog</span>
                                </a>
                            </li>
                            <li class="w3-padding-12 w3-hover-opacity">
                                <a href="https://it-job-solution.blogspot.com/" target="_blank" style="text-decoration: none;">   
                                    <span style="text-decoration: none; color: white">IT Job Solution Blog</span>
                                </a>
                            </li>
                            <li class="w3-padding-12 w3-hover-opacity">
                                <a href="https://educativesite.com/" target="_blank" style="text-decoration: none;">   
                                    <span style="text-decoration: none; color: white">Educativesite - Educational Blog</span>
                                </a>
                            </li>
                            <li class="w3-padding-12 w3-hover-opacity">
                                <a href="https://bcsexamination.com/" target="_blank" style="text-decoration: none;">   
                                    <span style="text-decoration: none; color: white">BCSexamination - Job Preparation Blog</span>
                                </a>
                            </li> 
                        </ol>
                    </div>

                    <div class="w3-third">
                        <h3>My Skills</h3>
                        <p>
                            <span class="w3-tag w3-grey w3-small w3-margin-bottom">MongoDB</span>
                            <span class="w3-tag w3-grey w3-small w3-margin-bottom">ExpressJS</span>
                            <span class="w3-tag w3-grey w3-small w3-margin-bottom">React</span>
                            <span class="w3-tag w3-grey w3-small w3-margin-bottom">NodeJS</span>
                            <span class="w3-tag w3-grey w3-margin-bottom">PHP</span>
                            <span class="w3-tag w3-grey w3-small w3-margin-bottom">MySQL</span>
                            <span class="w3-tag w3-grey w3-small w3-margin-bottom">DaisyUI</span>
                            <span class="w3-tag w3-grey w3-small w3-margin-bottom">TailwindCSS</span>
                            <span class="w3-tag w3-grey w3-small w3-margin-bottom">BootStrap</span>
                            <span class="w3-tag w3-grey w3-small w3-margin-bottom">AngularJS</span>
                            <span class="w3-tag w3-grey w3-small w3-margin-bottom">NextJS</span>
                            <span class="w3-tag w3-grey w3-small w3-margin-bottom">HTML</span>
                            <span class="w3-tag w3-grey w3-small w3-margin-bottom">CSS</span>
                            <span class="w3-tag w3-grey w3-small w3-margin-bottom">w3 CSS</span>
                        </p>
                    </div>
                </div>
            </footer>

            <div class="w3-black w3-center w3-padding-24">
                Explore me on Social Media
                <div class="w3-panel w3-xlarge">
                    <a href="https://github.com/mamuns95" target="_blank"><i class="fa fa-github w3-hover-opacity"></i></a>&nbsp;
                    <a href="https://www.linkedin.com/in/mamuncse2015/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>&nbsp; 
                    <a href="https://www.facebook.com/mamuncse2015" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>&nbsp;  
                    <a href="https://x.com/mamuncse2015" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>       
                </div>
            </div>

            <!-- End page content -->
        </div>

        <script>
            // Script to open and close sidebar
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("myOverlay").style.display = "block";
            }

            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("myOverlay").style.display = "none";
            }
        </script>
        <script>
            function taskgoingon() {
                return toastr.info("This Feature is under Development!");
            }
        </script>
    </body>
</html>